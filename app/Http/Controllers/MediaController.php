<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Media;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MediaController extends Controller
{
    //---------------------------------movies-------------------------------------//
    public function showMoviesList()
    {
        $user = Session::get('user');
        $movies = Media::where('type', 'movie')->get();
        $userFavs = collect(Favorite::where('user_id', $user->id)->pluck('media_id')->toArray());

        return view('netflix.movies', compact('movies', 'user', 'userFavs'));
    }
    public function showMovie($id,$user)
    {
        $movie = Media::find($id);
        if ($user) {
            return view('netflix.movie', compact('movie'));
        } else {
            return view('netflix.login');
        }
    }
    //-----------------------------------------------------------------------------//


    //---------------------------------series-------------------------------------//
    public function showSerie($id,$user)
    {
        $serie = Media::find($id);
        $episodes = Episode::where('serie_id', $id)->get();
        if ($user) {
            return view('netflix.serie', compact('serie', 'episodes'));
        } else {
            return view('netflix.login');
        }
    }
    public function showSeriesList()
    {
        $user = Session::get('user');
        $series = Media::where('type', 'serie')->get();
        $userFavs = collect(Favorite::where('user_id', $user->id)->pluck('media_id')->toArray());

        return view('netflix.series', compact('series', 'user', 'userFavs'));
    }
    //---------------------------------------------------------------------------//


    //---------------------------------media-------------------------------------//

    public function showMediaList()
    {
        $media = Media::all();
        return view('netflix.search', compact('media'));
    }
    public function getLastAddedMedia()
    {
        $lastMedia = Media::orderBy('created_at', 'desc')->take(6)->get();
    return view('netflix.main', compact('lastMedia'));
    }
    public function showMedia($id)
    {
        $user = Session::get('user');
        $media = Media::find($id);

        if ($media) {
            if ($media->type === 'movie') {
                return $this->showMovie($id,$user);
            } elseif ($media->type === 'serie') {
                return $this->showSerie($id,$user);
            }
        }
    }
    public function mediaFilter(Request $request)
    {
        $user = Session::get('user');
        $query = $request->input('query');
        $medias = Media::where('title', 'like', "%$query%")->get();
        $userFavs = collect(Favorite::where('user_id', $user->id)->pluck('media_id')->toArray());

        if ($user && $user->rol === 'admin') {
            $movies = $medias->filter(function ($item) {
                return $item->type === 'movie';
            });

            $series = $medias->filter(function ($item) {
                return $item->type === 'serie';
            });

            return view('netflix.mediaFiltrer', compact('medias','user','userFavs','movies', 'series', 'query'));
        } else {
            $movies = $medias->filter(function ($item) {
                return $item->type === 'movie';
            });

            $series = $medias->filter(function ($item) {
                return $item->type === 'serie';
            });

            return view('netflix.mediaFiltrer', compact('medias','user','userFavs','movies', 'series', 'query'));
        }    }
    //---------------------------------------------------------------------------//

    //---------------------------------search------------------------------------//
    public function search(Request $request)
    {
        $user = Session::get('user');
        $query = $request->input('query');
        $medias = Media::where('title', 'like', "%$query%")->get();
        $userFavs = collect(Favorite::where('user_id', $user->id)->pluck('media_id')->toArray());

        if ($user && $user->rol === 'admin') {
            $movies = $medias->filter(function ($item) {
                return $item->type === 'movie';
            });

            $series = $medias->filter(function ($item) {
                return $item->type === 'serie';
            });

            return view('netflix.searchAdmin', compact('medias','user','userFavs','movies', 'series', 'query'));
        } else {
            $movies = $medias->filter(function ($item) {
                return $item->type === 'movie';
            });

            $series = $medias->filter(function ($item) {
                return $item->type === 'serie';
            });

            return view('netflix.search', compact('medias','user','userFavs','movies', 'series', 'query'));
        }
    }
    public function filter(Request $request)
{
    $title = $request->input('title');
    $genres = $request->input('genres');
    $startDate = $request->input('startDate');
    $endDate = $request->input('endDate');
    $actors = $request->input('cast');
    $duration = $request->input('duration');
    $startYear = $request->input('start_year');
    $endYear = $request->input('end_year');

    $query = Media::query();

    if ($title) {
        $query->where('title', 'LIKE', '%' . $title . '%');
    }

    // Filtro de género
    if ($genres) {
        $query->where(function ($q) use ($genres) {
            foreach ($genres as $genre) {
                $q->orWhere('genre', 'LIKE', '%' . $genre . '%');
            }
        });
    }

    // Filtro de rango de fechas
    if ($startDate) {
        $query->where('production_date', '>=', $startDate);
    }
    if ($endDate) {
        $query->where('production_date', '<=', $endDate);
    }

    // Filtro de actores
    if ($actors) {
        $query->where(function ($q) use ($actors) {
            foreach ($actors as $actor) {
                $q->orWhere('cast', 'LIKE', '%' . $actor . '%');
            }
        });
    }

    // Filtro de duración
    if ($duration) {
        switch ($duration) {
            case 'less_1h':
                $query->where('duration', '<', 60);
                break;
            case '1h_2h':
                $query->whereBetween('duration', [60, 120]);
                break;
            case 'more_2h':
                $query->where('duration', '>', 120);
                break;
        }
    }

    // Filtro de años
    if ($startYear && $startYear !== 'todos') {
        $query->where('year', '>=', $startYear);
    }
    if ($endYear && $endYear !== 'todos') {
        $query->where('year', '<=', $endYear);
    }

    // Obtener los resultados filtrados
    $medias = $query->distinct()->get();
    $user = Session::get('user');
    $query = $request->input('query');
    $userFavs = collect(Favorite::where('user_id', $user->id)->pluck('media_id')->toArray());

    $movies = $medias->filter(function ($item) {
        return $item->type === 'movie';
    });

    $series = $medias->filter(function ($item) {
        return $item->type === 'serie';
    });

    if ($user && $user->rol === 'admin') {
        return view('netflix.mediaFiltrer', compact('medias','user','userFavs','movies', 'series', 'query'));
    } else {
        return view('netflix.mediaFiltrer', compact('medias','user','userFavs','movies', 'series', 'query'));
    }
}





}
    //---------------------------------------------------------------------------//
