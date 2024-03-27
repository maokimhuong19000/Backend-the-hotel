<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
    public function signup(Request $user)
    {

        $user->validate([
            'name' => 'required|string|max:191',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);
        $user = [
            'name' => $user->name,
            'email' => $user->email,
            'password' => Hash::make($user->password),
        ];

        $insertUser = DB::table('users')->insert($user);
        // dd($user);
        if ($insertUser) {
            return redirect('/admins/auth/register')->with('success', 'Create user successfuly');
        } else {
            return redirect()->back()->with('error', 'Create user failed');
        }
    }

}
    



// $user->validate([
//     'name' => 'required|string|max:191',
//     'email' => 'required|email|unique:users,email',
//     'password' => 'required|min:6',
// ]);

// $users = $user->only('name', 'email', 'password');
// if (Auth::attempt($users)) {
//     return redirect('/admins/auth/register')->back()->with('sucess', 'Create user successfuly');
// } else {
//     return redirect()->back()->with('error', 'Create user failed');
// }