<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class UsersController extends Controller
{
    public function userCreate(Request $request){
        $avatarPath = '/storage/avatars/pfp.png';
        $data = [
            'username' => $request->input('username'),
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'dob' => $request->input('dob'),
            'phoneNumber' => $request->input('phoneNumber'),
            'rol' => 'user',
            'membership' => true,
            'avatar' => $avatarPath,
        ];

        $user = User::create($data);

        return view('netflix.login');
    }
    public function userLogin(Request $request){
        $user = User::where('email', $request->input('email'))->first();
        if($user->password == $request->input('password')){

            Session::put('user', $user);

            return Redirect::to('/netflix');
        }
        else {
            return view('netflix.login');
    }
}
    public function logout()
    {
        Session::flush();
        return view('netflix.prototipPaginaPrincipal');
    }
        public function showProfile()
        {
            if (Session::has('user')) {
                $user = Session::get('user');
                return view('netflix.profile', ['user' => $user]);
            } else {
                return redirect('/login');
            }
        }

        public function update(Request $request, $id)
        {
            $user = User::find($id);

            $data = [
                'username' => $request->username,
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'password' => $request->password,
                'dob' => $request->dob,
                'phoneNumber' => $request->phoneNumber,
            ];
            if ($request->hasFile('avatar')) {
                $avatarPath = $request->file('avatar')->store('public/avatars');
                $data['avatar'] = str_replace('public/', 'storage/', $avatarPath);
            }
            $user->update($data);
            session(['user' => $user]);
            return redirect('/profile')->with('success', 'Perfil actualizado correctamente.');
        }

}
