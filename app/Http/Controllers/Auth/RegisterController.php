<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\User;

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
    protected $redirectTo = '/main';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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

        ]);
    }

    public function register(Request $request){
        $this->validate($request, [
            "name"      =>  'required|string|max:255',
            'email'     =>  'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:6|confirmed',
            'g-recaptcha-response'=>'required',
        ]);

        if ($this->reCaptcha($requst)==false)
            return Redirect::to('login')->with('error', "Login Failed! Please complete the Captcha verification");

        if (User::where('email', '=', $request->get('email'))->exists()) {
            return redirect('register')->with('error', 'Email is already existed.');
        }else{
            User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);               
        }
        
        return redirect('main');    
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
