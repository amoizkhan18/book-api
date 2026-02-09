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
            return response()->json([]);
        }

        $startsWithTerm = $query . '%';
        $containsTerm = '%' . $query . '%';

        $results = DB::select("
            SELECT * FROM (
                (
                    SELECT 
                        id as bookid,
                        'book' as type,
                        title,
                        author,
                        genres,
                        imageurl,
                        bookdesc as description,
                        bookurl as url,
                        NULL as audiolinks,
                        CASE
                            WHEN title LIKE ? THEN 1
                            WHEN author LIKE ? THEN 2
                            WHEN title LIKE ? THEN 3
                            WHEN author LIKE ? THEN 4
                            ELSE 5
                        END as priority
                    FROM books
                    WHERE title LIKE ? 
                       OR author LIKE ? 
                       OR title LIKE ? 
                       OR author LIKE ?
                    LIMIT ?
                )
                UNION ALL
                (
                    SELECT 
                        id as bookid,
                        'audiobook' as type,
                        title,
                        author,
                        genres,
                        imageurl,
                        bookdesc as description,
                        bookurl as url,
                        audiolinks,
                        CASE
                            WHEN title LIKE ? THEN 1
                            WHEN author LIKE ? THEN 2
                            WHEN title LIKE ? THEN 3
                            WHEN author LIKE ? THEN 4
                            ELSE 5
                        END as priority
                    FROM audiobooks
                    WHERE title LIKE ? 
                       OR author LIKE ? 
                       OR title LIKE ? 
                       OR author LIKE ?
                    LIMIT ?
                )
            ) AS combined_results
            ORDER BY priority ASC, title ASC
            LIMIT ?
        ", [
            $startsWithTerm, $startsWithTerm, $containsTerm, $containsTerm,
            $startsWithTerm, $startsWithTerm, $containsTerm, $containsTerm,
            $limit,
            $startsWithTerm, $startsWithTerm, $containsTerm, $containsTerm,
            $startsWithTerm, $startsWithTerm, $containsTerm, $containsTerm,
            $limit,
            $limit
        ]);

        return response()->json($results);
    }
}