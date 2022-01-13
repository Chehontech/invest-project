<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Settings;
use App\Models\Audit;
use App\Models\Referral;
use App\Models\Devices;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Browser;
use Session;

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
    protected $redirectTo = '/user/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:user');
    }

    public function register()
    {
        $data['title']='Register';
       
        if (isset($_GET['ref'])) {
            $data['refName']=$_GET['ref'];
        }
        if (isset($_GET['sec-ref'])) {
            $data['refSecName']=$_GET['sec-ref'];
        }
        
        $set=Settings::first();

        if($set->registration==1){
            return view('/auth/register', $data);
        }else{
            return back()->with('alert', 'Registration is currently disabled!!!');
        }
        
    }    

    
    public function submitregister(Request $request)
    {
        $set=Settings::first();
        if($set->recaptcha==1){
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'username' => 'required|min:5|unique:users|regex:/^\S*$/u',
                'password' => 'required|string|min:6',
                'g-recaptcha-response' => 'required|captcha'
            ]);        
        }else{
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'username' => 'required|min:5|unique:users|regex:/^\S*$/u',
                'password' => 'required|string|min:6',
            ]);
        }
        if ($validator->fails()) {
            // adding an extra field 'error'...
            $data['title']='Register';
            $data['errors']=$validator->errors();
            return view('/auth/register', $data);
        }

        $basic = Settings::first();

        if ($basic->email_verification == 1) {
            $email_verify = 0;
        } else {
            $email_verify = 1;
        }
        $verification_code = strtoupper(Str::random(6));
        $email_time = Carbon::parse()->addMinutes(5);
        $user = new User();
        $user->image = 'personx.jpg';
        $user->merchant_id=Str::random(6);
        $user->email = $request->email;
        $user->username = $request->username;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email_verify = $email_verify;
        $user->verification_code = $verification_code;
        $user->email_time = $email_time;
        $user->ref_bonus = $basic->balance_reg;
        $user->ip_address = user_ip();
        $user->password = Hash::make($request->password);
        
        
        if ($request->has('ref')) {
            
            $refName = $request->ref;
            $referral = User::whereusername($refName)->count();
            
            if($referral>0){
                
                $key = User::whereusername($refName)->first();
                $user->referral = $key->id;
            }
        }
        if ($request->has('refSec')) {
            
            $refNameSec = $request->refSec;
            
            $referralSec = User::whereusername($refNameSec)->count();
            
            if($referralSec>0){
                
                $keySec = User::whereusername($refNameSec)->first();
                $user->referral_second = $keySec->id;
            }
        }
        /*
        if($request->has('ref')){
            $referral = User::whereusername($request->ref)->count();
            if($referral>0){
                $key = User::whereusername($request->ref)->first();
                $user->referral = $key->id;
            }
        }
        */
        $user->save();
        $boom = User::whereemail($request->email)->first();
        $devices=new Devices();
        $devices->user_id=$boom->id;
        $devices->name=Browser::userAgent();
        $devices->ip_address=user_ip();
        $devices->save();
        if ($basic->email_notify == 1) {
            if ($basic->email_verification == 1) {
                send_email($user->email, $user->username, 'Email verification', "Your Email Verification Code Is: <b>$user->verification_code</b>");
                send_email($user->email, $user->username, 'Welcome to '.$set->site_name, $set->welcome_message);
            }
        }
        if (Auth::guard('user')->attempt(['email' => $request->email,'password' => $request->password,])) {
            return redirect()->route('user.dashboard');
        }
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
