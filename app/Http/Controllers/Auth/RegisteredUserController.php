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
        try {// Validation
            $user -> validate([
                'name' => 'required|string|max:191',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6',
            ]);
            $user = [
                'name' => $user->name,
                'email' => $user->email,
                'password' => Hash::make($user->password),
            ];
            // dd($user);
            $insertUser = DB::table('users')->insert($user);
            if ($insertUser) {
                Session::flash('success_user', 'User created successfully.');
                return redirect('admin/auth/register')->with('success_user', 'User created successfully');
            }
        } catch (Exception $e) {
            Session::flash('error_user', 'Something went wrong: ' . $e->getMessage());
            return redirect()->back();
        }
    }
}
