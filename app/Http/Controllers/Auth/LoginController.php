<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
  private $table1='club_member_rosters';
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
    // protected $redirectTo = RouteServiceProvider::HOME;
      // protected $redirectTo = RouteServiceProvider::HOME;
    /** 
     * Create a new controller instance.
     *  $user_id=auth()->user()->user_id
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function redirectTo()
    // {
    //     // User role
    //   $user_id=auth()->user()->user_id;
    //   $role=DB::table($this->table1) ->where('user_id',$user_id)->pluck('role_id')->all();

    //     // Check user role
    //     switch ($role) {
    //         case '1':
    //             return '/manager/dashboard';
    //             break;
    //         case '2':
    //             return '/procurement/dashboard';
    //             break;
    //         case '8':
    //             return '/site-manager/dashboard';
    //             break;
    //         default:
    //             return '/login';
    //             break;
    //     }
    // }

}
