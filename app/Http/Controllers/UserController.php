<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\user;
use Exception;
class UserController extends Controller
{
    public function login(Request $request)
    {
    $attempts = [
        'username' => $request->username,
        'password' => $request->password,
       
    ];
   
    if (Auth::guard('web')->attempt($attempts, (bool) $request->remember)) {
 
        if(Auth::guard('web')->user()->role=='head manager'){
          
            return redirect()->route('dashboard');
    
        }else if(Auth::guard('web')->user()->role=='branch manager'){
           
            
        return redirect()->route('dashboard');
    
        
        }else if(Auth::guard('web')->user()->role=='admin'){
            
           
        return redirect()->route('dashboard');
    
        
        }
     }
    
    
    return redirect()->back();
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function logout(Request $request)
    {
       Auth::logout();
    
      
        if(Auth::guard('web')->check()==false){

         return view('login');
        }
    }
}
