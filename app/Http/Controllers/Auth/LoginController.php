<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/backend';


    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function showLoginForm()
    {
        return view("auth.login");
    }
    public function doLogin(Request $request)
{
// validate the info, create rules for the inputs
    $rules = [
        'email' => 'required|email', // make sure the email is an actual email
        'password' => 'required|alphaNum|min:4' // password can only be alphanumeric and has to be greater than 3 characters
    ];

    $messages = [

    ];
// run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(),
        $rules, $messages);

// if the validator fails, redirect back to the form
    if ($validator->fails()) {
        return Redirect::to('backend/login')
            ->withErrors($validator)// send back all errors to the login form
            ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
    } else {
        // create our user data for the authentication
        $userdata = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );


        // attempt to do the login
        if (Auth::attempt($userdata)) {
            $user = auth()->user();
            $request->session()->put('u_id', $user->id);

            return Redirect::to('backend/admin');
        } else {
            $errors = new MessageBag(['password' => [Lang::get('auth.invalid')]]);
//                 validation not successful, send back to form
//                return Redirect::to('backend/login')->with('error', "error");
            return back()->withErrors($errors);
        }
    }
}

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return Redirect::to('/backend/login/'); // redirect the user to the login screen
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
