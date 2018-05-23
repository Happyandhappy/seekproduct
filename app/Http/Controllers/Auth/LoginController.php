<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Auth;
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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $requst){

       $userinfo = $this->validate($requst, [
                        'email' => 'required',
                        'password' => 'required',
                        'g-recaptcha-response'=>'required',
                   ]);

       if ($this->reCaptcha($requst)==false)
            return Redirect::to('login')->with('error', "Login Failed! Please complete the Captcha verification");

       if (Auth::Attempt(['email'=>$requst->get('email'), 'password' => $requst->get('password')])){
            return Redirect::to('main')->with('success', 'Successfully Logined'); 
       }else
            return Redirect::to('login')->with('error', "Login Failed");                    
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('login');
    }

    public function reCaptcha($data){
        $res_code = $data['g-recaptcha-response'];
        $array = [
                'secret'    => '6LcZo1oUAAAAAO4-cgz5s5xvS72RnjECey_X7rTM',
                'response'  => $res_code
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($array));
        curl_setopt($ch, CURLOPT_POST, true);

        $headers = [];
        $headers[] = "Content-Length: " . strlen(http_build_query($array));

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        return json_decode(curl_exec($ch))->success;
    }

}
