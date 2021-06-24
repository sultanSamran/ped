<?php

namespace App\Http\Controllers\Admin;


// use auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AdminLoginRequest;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('admin.auth.login');
    }

    // public function postlogin(AdminLoginRequest $request)
    // {
    //     $rememmber_me = $request->has('rememmber_me') ? true : false;

    //     if(auth()->guard('admin')->attempt(['email' => $request->input('email'),'password'  =>$request->input('password')],$rememmber_me))
    //     {
    //         return redirect() -> route('admin.dashboard');
    //     }

    //     return redirect() -> back() -> with(['error' => 'تأكد من البيانات المدخلة']);
    // }
    public function postlogin(AdminLoginRequest $request){

        $remember_me = $request->has('remember_me') ? true : false;
        
        // if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
        //    notify()->success('تم الدخول بنجاح  ');
        //     return redirect() -> route('admin.dashboard');

        // if ( $request->email == 'almutairis.1@gmail.com') {
            $credentials = [
                'email' => $request['email'],
                'password' => $request['password'],
            ];
           
            if(auth()->guard('admin')->attempt( $credentials, false)) { 
            return redirect()->route('admin.dashboard');
            
            
        }
       // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }
}
