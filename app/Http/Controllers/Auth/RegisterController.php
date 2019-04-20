<?php

namespace App\Http\Controllers\Auth;

use App\Models\Forum\Category;
use App\Models\Forum\Forum;
use App\Models\Invitation;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
            'rules' => 'required',
            'terms' => 'required',
            'privacy' => 'required',
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
     * @return \App\User
     */
    protected function create(array $data)
    {
        $invitation = Invitation::where('code', $data['code'])->firstOrFail();

        $user = User::create([
            'username' => $data['username'],
            'alias' => $data['alias'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'parent_id' => $invitation->user_id
        ]);

        $this->createDevForum($user);

        $invitation->delete();

        return $user;

    }

    private function createDevForum(User $user)
    {
        $username = $user->username;
        $category = Category::where('name','Development')->first();

        $user->forum()->create([
            'name' => $username,
            'description' => $username . '\'s character development and subplotting',
            'category_id' => $category->id
        ]);
    }


}
