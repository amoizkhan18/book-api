<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = trim($request->query('query'));
        $limit = (int) $request->query('limit', 20);

        if (!$query) {
            return response()->json([], 200);
        }

        /**
         * Prefix-based search
         * - Titles starting with query come first
         * - Then titles containing query
         */
        $results = DB::query()
            ->fromSub(function ($union) use ($query) {

                // BOOKS
                $union->selectRaw("
                    id as bookid,
                    'book' as type,
                    title,
                    author,
                    genres,
                    imageurl,
                    bookdesc as description,
                    bookurl as url,
                    CASE
                        WHEN title LIKE ? THEN 1
                        WHEN author LIKE ? THEN 2
                        ELSE 3
                    END as priority
                ")
                ->from('books')
                ->where(function ($q) use ($query) {
                    $q->where('title', 'LIKE', "{$query}%")
                      ->orWhere('author', 'LIKE', "{$query}%")
                      ->orWhere('title', 'LIKE', "%{$query}%")
                      ->orWhere('author', 'LIKE', "%{$query}%");
                })

                ->unionAll(

                    // AUDIOBOOKS
                    DB::table('audiobooks')
                        ->selectRaw("
                            id as bookid,
                            'audiobook' as type,
                            title,
                            author,
                            genres,
                            imageurl,
                            bookdesc as description,
                            audiolinks as url,
                            CASE
                                WHEN title LIKE ? THEN 1
                                WHEN author LIKE ? THEN 2
                                ELSE 3
                            END as priority
                        ")
                        ->where(function ($q) use ($query) {
                            $q->where('title', 'LIKE', "{$query}%")
                              ->orWhere('author', 'LIKE', "{$query}%")
                              ->orWhere('title', 'LIKE', "%{$query}%")
                              ->orWhere('author', 'LIKE', "%{$query}%");
                        })
                );

            }, 'search_results')
            ->setBindings([
                "{$query}%",
                "{$query}%",
                "{$query}%",
                "{$query}%"
            ])
            ->orderBy('priority')
            ->orderBy('title')
            ->limit($limit)
            ->get();

        return response()->json($results);
    }
}
