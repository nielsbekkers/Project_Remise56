<?php
/**
 * Created by PhpStorm.
 * User: Soufiane
 * Date: 4/11/2016
 * Time: 22:08
 */

namespace  App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin_Controller extends Controller
{
    public function postNewUser(Request $request){

        $email = $request["email"];
        $first_name = $request["name"];
        $password = bcrypt($request["password"]);

        $user = new User();
        $user->email = $email;
        $user->first_name = $first_name;
        $user->password = $password;

        $user->save();

        Auth::login($user);

        //return redirect()->back();
        return redirect()->route('dashboard');

    }

    public function postSignIn(Request $request){
        if (Auth::attempt(  ['email' => $request['email'] ,  'password' => $request['password'] ])){
            return redirect()->route('dashboard');

        }
        else{
            return redirect()->back();
        }
    }

    public function getDashboard(){
        return view('dashboard');
    }
}