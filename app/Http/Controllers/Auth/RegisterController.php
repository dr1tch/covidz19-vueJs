<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Role;
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
    protected $redirectTo = RouteServiceProvider::HOME;

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
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
         return Validator::make($data, [
            'username' => ['required', 'string', 'max:255', 'unique:users', 'alpha_dash'],
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'birth_date' => ['date'],
            // 'gender' => ['boolean']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        // dd($data);
        if ($data['gender'] == 0) {
          $avatar = 'public/defaults/avatars/male.svg';
        } elseif ($data['gender'] == 1) {
          $avatar = 'public/defaults/avatars/female.svg';
        } else if ($data['gender'] == 2) {
          $avatar = 'public/defaults/avatars/avatar.png';
        }

        $user = User::create([
            'username' => $data['username'],
            'lname' => $data['lname'],
            'fname' => $data['fname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            // 'birth_date' => $data['birth_date'],
            'avatar' => $avatar,
            'gender' => $data['gender'],
        ]);

        $role = Role::select('id')->where('name', 'user')->first();

        $user->roles()->attach($role);

        return $user;
    }
}
