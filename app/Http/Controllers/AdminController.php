<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Media;
use App\Models\Favorite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    //---------------------------------media-------------------------------------//
    public function showMediaList()
    {
        $user = Session::get('user');
        $movies = Media::where('type', 'movie')->get();
        $series = Media::where('type', 'serie')->get();
            return view('netflix.mediaManagement', compact('movies', 'user', 'series'));
    }
    public function showMediaForm($id)
    {
        $user = Session::get('user');
        $media = Media::find($id);
        if ($user && $user->rol === 'admin') {
            return view('netflix.editMedia', compact('media'));
        } elseif ($user) {
            return view('netflix.movies', compact('movies'));
        } else {
            return view('netflix.prototipPaginaPrincipal');
        }
    }


    public function createMedia(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'sinopsis' => 'required|string',
            'year' => 'required|integer|min:1900|max:2024',
            'director' => 'required|string|max:255',
            'cast' => 'required|string|max:255',
            'type' => 'required|in:movie,serie',
            'genre' => 'required|string|max:255',
            'duration' => 'required|integer|min:1',
            'poster' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'file' => 'required|file|mimes:mp4,mov,avi,wmv|max:20480',
        ]);

        $data = [
            'title' => $request->input('title'),
            'sinopsis' => $request->input('sinopsis'),
            'year' => $request->input('year'),
            'director' => $request->input('director'),
            'cast' => $request->input('cast'),
            'type' => $request->input('type'),
            'genre' => $request->input('genre'),
            'duration' => $request->input('duration'),
            'poster' => str_replace('public/', 'storage/', $request->file('poster')->store('public/posters')),
            'file' => str_replace('public/', 'storage/', $request->file('file')->store('public/files')),
        ];

        Media::create($data);

        return view('netflix.createMedia');
    }


    public function editMedia(Request $request, $id)
{
    $media = Media::find($id);
    $data = [
        'title' => $request->input('title'),
        'sinopsis' => $request->input('sinopsis'),
        'year' => $request->input('year'),
        'director' => $request->input('director'),
        'cast' => $request->input('cast'),
        'type' => $request->input('type'),
        'genre' => $request->input('genre'),
        'duration' => $request->input('duration'),
        'poster' => $request->hasFile('poster') ? str_replace('public/', 'storage/', $request->file('poster')->store('public/posters')) : $media->poster,
        'file' => $request->hasFile('file') ? str_replace('public/', 'storage/', $request->file('file')->store('public/files')) : $media->file,
    ];

    if ($request->hasFile('poster')) {
        $data['poster'] = str_replace('public/', 'storage/', $request->file('poster')->store('public/posters'));
    }

    if ($request->hasFile('file')) {
        $data['file'] = str_replace('public/', 'storage/', $request->file('file')->store('public/files'));
    }

    $media->update($data);
    return view('netflix.editMedia', compact('media'));
}

    public function removeMedia($id)
    {
        $user = Session::get('user');
        if($user->rol == 'admin'){
            $media = Media::find($id);
            $media->delete();
        }
        return Redirect::to('/mediaManagement');
    }

    //---------------------------------users-------------------------------------//
    public function showUserList()
    {
        $user = Session::get('user');
        $users = User::get();
            return view('netflix.userManagement', compact('user', 'users'));
    }
    public function removeUser($id)
    {
        $user = Session::get('user');
        if($user->rol == 'admin'){
            $userFound = User::find($id);
            $userFound->delete();
        }
        return Redirect::to('/userManagement');
    }
    public function createUser(Request $request)
    {
        $avatar = "storage/avatars/default.webp";
        if (!empty($request->input('avatar'))) {
            $avatar = str_replace('public/', 'storage/', $request->file('avatar')->store('public/avatars'));
        }
        $data = [
            'username' => $request->input('username'),
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'dob' => $request->input('dob'),
            'rol' => $request->input('rol'),
            'membership' => $request->input('membership'),
            'phoneNumber' => $request->input('phoneNumber'),
            'avatar' => $request->hasFile('avatar') ? str_replace('public/', 'storage/', $request->file('avatar')->store('public/avatars')) : "/storage/avatars/default.webp",
        ];

        if ($request->hasFile('avatar')) {
            $data['avatar'] = str_replace('public/', 'storage/', $request->file('avatar')->store('public/avatars'));
        }
        User::create($data);
        return view('netflix.createUser');
    }

    public function showUserForm($id)
    {
        $currentUser = Session::get('user');
        $user = User::find($id);
        if ($currentUser && $currentUser->rol === 'admin') {
            return view('netflix.editUser', compact('user'));
        }else {
            return view('netflix.prototipPaginaPrincipal');
        }
    }

    public function editUser(Request $request, $id)
    {
        $user = User::find($id);

        $data = [
            'username' => $request->input('username'),
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'email' => $user->email,
            'password' => $request->input('password'),
            'dob' => $request->input('dob'),
            'rol' => $user->rol,
            'membership' => $request->input('membership'),
            'phoneNumber' => $request->input('phoneNumber'),
            'avatar' => $request->hasFile('avatar') ? str_replace('public/', 'storage/', $request->file('avatar')->store('public/avatars')) : $user->avatar,

        ];
        if ($request->hasFile('avatar')) {
            $data['avatar'] = str_replace('public/', 'storage/', $request->file('avatar')->store('public/avatars'));
        }
        $user->update($data);
        return view('netflix.editUser', compact('user'));
    }
}
