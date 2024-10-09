<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MediaController;
use Illuminate\Http\Request;
use App\Models\Favorite; 
use App\Models\Media; 
use App\Models\Episode; 
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class FavoritesController extends Controller
{
    public function addRemoveFavorites($id_user, $id_media, $type)
    {
        $favorite = Favorite::where('user_id', $id_user)->where('media_id', $id_media)->first();
        if($favorite){
            $favorite->delete();
        }else{
        $data = [
            'user_id' => $id_user,
            'media_id' => $id_media,
        ];
        Favorite::create($data);
        }
        if($type === 'serie'){
            return Redirect::to('/series');
        }else{
            return Redirect::to('/movies');
        }
 
    }
    public function removeFromFavorites($id_user, $id_media, $type)
    {
        $favorite = Favorite::where('user_id', $id_user)->where('media_id', $id_media)->first();
        $favorite->delete();
        return Redirect::to('/favorites');
    }
    
    public function getFavorites()
    {
        $user = Session::get('user');
        $userFavs = Favorite::where('user_id', $user->id)->get();
        $mediaIds = $userFavs->pluck('media_id'); 
        $media = Media::whereIn('id', $mediaIds)->get();
        $series = $media->where('type', 'serie');
        $movies = $media->where('type', 'movie');

        return view('netflix.favorites', compact('series', 'movies', 'user'));
    }

}
