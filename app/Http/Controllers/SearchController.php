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

        $queryLower = strtolower($query);
        $startsWithTerm = $queryLower . '%';
        $containsTerm = '%' . $queryLower . '%';

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
                            WHEN LOWER(title) LIKE ? THEN 1
                            WHEN LOWER(REPLACE(author, 'By: ', '')) LIKE ? THEN 2
                            WHEN LOWER(title) LIKE ? THEN 3
                            WHEN LOWER(REPLACE(author, 'By: ', '')) LIKE ? THEN 4
                            ELSE 5
                        END as priority
                    FROM books
                    WHERE LOWER(title) LIKE ? 
                       OR LOWER(REPLACE(author, 'By: ', '')) LIKE ? 
                       OR LOWER(title) LIKE ? 
                       OR LOWER(REPLACE(author, 'By: ', '')) LIKE ?
                    LIMIT ?
                )
                UNION ALL
                (
                    SELECT 
                        NULL as bookid,
                        'audiobook' as type,
                        title,
                        author,
                        genres,
                        imageurl,
                        bookdesc as description,
                        bookurl as url,
                        audiolinks,
                        CASE
                            WHEN LOWER(title) LIKE ? THEN 1
                            WHEN LOWER(REPLACE(author, 'By: ', '')) LIKE ? THEN 2
                            WHEN LOWER(title) LIKE ? THEN 3
                            WHEN LOWER(REPLACE(author, 'By: ', '')) LIKE ? THEN 4
                            ELSE 5
                        END as priority
                    FROM audiobooks
                    WHERE LOWER(title) LIKE ? 
                       OR LOWER(REPLACE(author, 'By: ', '')) LIKE ? 
                       OR LOWER(title) LIKE ? 
                       OR LOWER(REPLACE(author, 'By: ', '')) LIKE ?
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

        // Parse audiolinks for audiobook results
        $results = array_map(function ($item) {
            $item = (array) $item;
            if ($item['type'] === 'audiobook' && isset($item['audiolinks'])) {
                $raw = $item['audiolinks'];
                if (is_string($raw) && strlen($raw) > 0) {
                    preg_match_all('/https?:\/\/[^\s",]+/', $raw, $matches);
                    $item['audiolinks'] = $matches[0] ?? [];
                } else {
                    $item['audiolinks'] = [];
                }
            }
            return $item;
        }, $results);

        return response()->json($results);
    }
}
