<?php
namespace App\Http\Controllers;

use App\Models\UserActivity;
use App\Models\Book;
use App\Models\Audiobook;
use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    /**
     * POST /api/recommendations
     * Returns personalized recommendations based on user's favorite genres
     */
    public function getRecommendations(Request $request)
    {
        $request->validate([
            'fcm_token' => 'required|string',
        ]);

        $user = UserActivity::where('fcm_token', $request->fcm_token)->first();

        $genres = [];
        if ($user && !empty($user->favorite_genres)) {
            $genres = is_array($user->favorite_genres)
                ? $user->favorite_genres
                : json_decode($user->favorite_genres, true) ?? [];
        }

        if (empty($genres)) {
            return $this->getPopular($request);
        }

        $topGenres = array_slice($genres, 0, 3);

        $books      = [];
        $audiobooks = [];

        foreach ($topGenres as $genre) {
            $genreBooks = Book::where('genres', 'LIKE', '%' . $genre . '%')
                ->inRandomOrder()
                ->limit(5)
                ->get(['id', 'title', 'author', 'imageurl', 'bookurl', 'downurl', 'genres', 'bookdesc'])
                ->map(function ($book) use ($genre) {
                    return [
                        'id'       => $book->id,
                        'title'    => $book->title,
                        'author'   => $book->author,
                        'imageurl' => $book->imageurl,
                        'bookurl'  => $book->bookurl,
                        'downurl'  => $book->downurl,
                        'bookdesc' => $book->bookdesc,
                        'genres'   => $book->getRawOriginal('genres'),
                        'type'     => 'book',
                        'genre'    => $genre,
                    ];
                });

            $genreAudiobooks = Audiobook::where('genres', 'LIKE', '%' . $genre . '%')
                ->inRandomOrder()
                ->limit(5)
                ->get(['id', 'title', 'author', 'imageurl', 'bookurl', 'audiolinks', 'genres', 'bookdesc'])
                ->map(function ($audiobook) use ($genre) {
                    return [
                        'id'         => $audiobook->id,
                        'bookid'     => $audiobook->id,
                        'title'      => $audiobook->title,
                        'author'     => $audiobook->author,
                        'imageurl'   => $audiobook->imageurl,
                        'bookurl'    => $audiobook->bookurl,
                        'audiolinks' => $audiobook->audiolinks,
                        'bookdesc'   => $audiobook->bookdesc,
                        'genres'     => $audiobook->genres,
                        'type'       => 'audio',
                        'genre'      => $genre,
                    ];
                });

            $books      = array_merge($books, $genreBooks->toArray());
            $audiobooks = array_merge($audiobooks, $genreAudiobooks->toArray());
        }

        return response()->json([
            'success'         => true,
            'favorite_genres' => $topGenres,
            'books'           => $books,
            'audiobooks'      => $audiobooks,
            'is_personalized' => true,
        ]);
    }

    /**
     * GET /api/recommendations/popular
     * Fallback for new users with no history
     */
    public function getPopular(Request $request)
    {
        $books = Book::inRandomOrder()
            ->limit(10)
            ->get(['id', 'title', 'author', 'imageurl', 'bookurl', 'downurl', 'genres', 'bookdesc'])
            ->map(function ($book) {
                return [
                    'id'       => $book->id,
                    'title'    => $book->title,
                    'author'   => $book->author,
                    'imageurl' => $book->imageurl,
                    'bookurl'  => $book->bookurl,
                    'downurl'  => $book->downurl,
                    'bookdesc' => $book->bookdesc,
                    'genres'   => $book->getRawOriginal('genres'),
                    'type'     => 'book',
                    'genre'    => 'Popular',
                ];
            });

        $audiobooks = Audiobook::inRandomOrder()
            ->limit(10)
            ->get(['id', 'title', 'author', 'imageurl', 'bookurl', 'audiolinks', 'genres', 'bookdesc'])
            ->map(function ($audiobook) {
                return [
                    'id'         => $audiobook->id,
                    'bookid'     => $audiobook->id,
                    'title'      => $audiobook->title,
                    'author'     => $audiobook->author,
                    'imageurl'   => $audiobook->imageurl,
                    'bookurl'    => $audiobook->bookurl,
                    'audiolinks' => $audiobook->audiolinks,
                    'bookdesc'   => $audiobook->bookdesc,
                    'genres'     => $audiobook->genres,
                    'type'       => 'audio',
                    'genre'      => 'Popular',
                ];
            });

        return response()->json([
            'success'         => true,
            'favorite_genres' => ['Popular'],
            'books'           => $books->toArray(),
            'audiobooks'      => $audiobooks->toArray(),
            'is_personalized' => false,
        ]);
    }
}
