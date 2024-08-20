<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
    * //@return \Illuminate\Contracts\Validation\Validator
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:15', 
            'password' => 'required|string|min:8|confirmed', // 'confirmed' checks for password_confirmation field
            'gender' => 'required|string',
            'cohort' => 'required|string',
            'country' => 'required|string',
            'residence' => 'required|string|max:255',
        ]);

        $user = User::create([
            'name' => $request->firstName, // Assuming you want to store first name as name
            'last_name' => $request->lastName, // Assuming you have a last_name field in the database
            'email' => $request->email,
            'phone' => $request->phone, // Ensure this field exists in the users table
            'password' => Hash::make($request->password),
            'gender' => $request->gender, // Ensure this field exists in the users table
            'cohort' => $request->cohort, // Ensure this field exists in the users table
            'country' => $request->country, // Ensure this field exists in the users table
            'residence' => $request->residence, // Ensure this field exists in the users table
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'firstName' => ['required|string|max:255'],
            // 'lastName' => ['required|string|max:255'],
            // 'email' => ['required|string|email|max:255|unique:users'],
            // 'phone' => ['required|string|max:15'], 
            // 'password' => ['required|string|min:8|confirmed'], // 'confirmed' checks for password_confirmation field
            // 'gender' =>['required|string'] ,
            // 'cohort' =>['required|string'] ,
            // 'country' =>['required|string'] ,
            // 'residence' => ['required|string|max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            // 'name' => $data->firstName, // Assuming you want to store first name as name
            // 'last_name' => $data->lastName, // Assuming you have a last_name field in the database
            // 'email' => $data->email,
            // 'phone' => $data->phone, // Ensure this field exists in the users table
            // 'password' => Hash::make($data->password),
            // 'gender' => $data->gender, // Ensure this field exists in the users table
            // 'cohort' => $data->cohort, // Ensure this field exists in the users table
            // 'country' => $data->country, // Ensure this field exists in the users table
            // 'residence' => $data->residence, // Ensure this field exists in the users table
        ]);
    }
}
