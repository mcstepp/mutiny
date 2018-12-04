<?php

namespace App\Http\Controllers\Auth;

use App\Models\Invitation;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'code' => 'required|exists:invitations',
            'g-recaptcha-response' => 'bail|required|captcha',
            'username' => 'required|string|max:255|unique:users',
            'alias' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Invitation
     */
    protected function create(array $data)
    {
        $invitation = Invitation::where('code', $data['code'])->firstOrFail();

        $user = User::create([
            'username' => $data['username'],
            'alias' => $data['alias'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'parent_id' => $invitation['user_id']
        ]);

        $invitation->delete();

        return $user;

    }


}
