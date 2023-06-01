<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo()
    {
          if( Auth()->user()->role == 1)
          {
              return route('admin.dashboard');
          }
          
          elseif( Auth()->user()->role == 2){
            return route('staff.dashboard');
        }
        
       
        
       
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        $input = $request->all();
     request()->validate(
          [
             
              "email" => 'required',
              "password" => 'required',
              "captcha1" => 'required',
              "captcha2" => 'required|same:captcha1',
            
          ],
          [
             
              'email.required' => 'Field is mandatory.',
              'password.required' => 'Field is mandatory.',
              'captcha2.required' => 'Field is mandatory.',
              'captcha2.same' => 'Please enter valid catcha..',

          ]
      );

     if( auth()->attempt(array('email'=>$input['email'], 'password'=>$input['password'])) ){

      if( auth()->user()->role == 1 )
      {
          return redirect()->route('admin.dashboard');
      }
      elseif( auth()->user()->role == 2) {
        return redirect()->route('staff.dashboard');
    }
  
     }
     else
     {
         return redirect()->route('login')->with('error','Please check your credential!!');
     }
  }
}
