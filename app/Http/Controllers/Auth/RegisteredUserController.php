<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use App\Http\Controllers\Validator;
use App\Models\Citizen;
use App\Models\Lawyer;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;

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
        //validate the request
        
        // $validation = $request->validate( [
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'phoneNum' => ['required', 'string', 'max:10'],
        //     'type' => ['required', 'string', 'max:255'],
        //     // 'citizenship_id' => ['required_if:type,==,citizen', 'string', 'max:255'],
        //     'barLicense_id' => ['required_if:type,==,lawyer', 'string', 'max:255'],
        //     'experience' => ['required_if:type,==,lawyer', 'string', 'max:255'],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);
        
        
        $user = User::create([
            'name' => $request->name,
            'phoneNum' => $request->phoneNum,
            'email' => $request->email,
            'email_verified_at' => now(),
            'password' => Hash::make($request->password),
            'type' => $request->type,
            'remember_token' => Str::random(10),
        ]);

        // if ($user- != null) {
        //fetch the user id of the user that is just created
        $user_id = User::where('email', $request->email)->first()->id;

        if ($request->type == 'citizen') {
            $citizen = Citizen::create([
                'userId' => $user_id,
                'citizenship_id' => $request->citizenship_id,
            ]);
            
        } else if ($request->type == 'lawyer') {
            $lawyer = Lawyer::create([
                'userId' => $user_id,
                'barLicenseId' => $request->barLicense_id,
                'experience' => intval($request->experience),
            ]);
        }
        // }

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
