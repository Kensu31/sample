<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    public function index()
    {
        return 'Hello from usercontroller';
    }
    public function show($id)
    {

        return view('user')
            ->with('name', 'kennethsamson')
            ->with('age', 22)
            ->with('email', 'kenneth@vpdbusinesssolution.com')
            ->with('id', $id);
    }
    public function login()
    {
        return view('user.login');
    }
    public function process(Request $request)
    {
        $validated = $request->validate([
            "email" => ['required', 'email'],
            "password" => 'required'
        ]);

        if (auth()->attempt($validated)) {
            $request->session()->regenerate();
            return redirect('/dashboard');
        }
        return back()->withErrors(['email' => 'login failed'])->onlyInput('email');
    }
    public function register()
    {
        return view('user.register');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => ['required', 'min:4'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => 'required|confirmed|min:6'

        ]);
        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);

        auth()->login($user);
        return redirect('/login');

        //return $user;
    }
    public function logout(Request $request)
    {

        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');

    }
}