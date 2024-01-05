<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'age' => ['required', 'intger', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'current_job' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

       dd($request);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
    //  public function register(Request $request){
    // $user = User::register([
    //         'name' => $request->input('name'),
    //         'age' => $request->input('age'),
    //         'gender' => $request->input('gender'),
    //         'current_byte' => $request->input('current_byte'),
    //         'email' => $request->input('email'),
    //         'password' => bcrypt($request->input('password')),
    //     ]);
    //      return redirect('/');
    //  }
}
