<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use app\models\user;
use app\models\start;

class SessionsController extends Controller
{
    //create to view login of all users
    public function create()
    {
        return view('session.login-session');
    }

    public function createhome()
    {
        return view('session.home-session');
    }


    public function createstudent()
    {
        return view('session_student.login-session');
    }


    public function createteacher()
    {
        return view('session_teacher.login-session');
    }

    
    public function createhead()
    {
        return view('session_head.login-session');
    }


    // store the login detail

    public function store()
    {
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required' 
        ]);

        if(Auth::attempt($attributes))
        {
            session()->regenerate();
           // return redirect('dashboard')->with(['success'=>'You are logged in.']);

           $role1 ="Student";
           $role2 ="Teacher";
           $role3 ="Head";
           $role4 ="Admin";
           $students=DB::table('users')->where('about_me','=',$role1)->count();
           $teachers=DB::table('users')->where('about_me','=',$role2)->count();
           $heads=DB::table('users')->where('about_me','=',$role3)->count();
           $admin=DB::table('users')->where('about_me','=',$role4)->count();
           $allusers=user::all()->count();
           
           return view('dashboard',compact('students','teachers','heads','admin','allusers'));
       
        }
        else{

            return back()->withErrors(['email'=>'Email or password invalid.']);
        }
    }
    


    
    public function storestudent()
    {
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required' 
        ]);

        if(Auth::attempt($attributes))
        {
            session()->regenerate();
           // return redirect('dashboard')->with(['success'=>'You are logged in.']);

          
           $role2 ="Teacher";
           
           //$surveys=start::all()->count();
           $surveys=DB::table('starts')->count();
           $teachers=DB::table('users')->where('about_me','=',$role2)->count();
           $rejects=DB::table('rejects')->where('email2','=', auth()->user()->email )->count();
           $submits=DB::table('submits')->where('email2','=', auth()->user()->email)->count();
           $data=DB::table('starts')->get();
  
           return view('dashboard_student',compact('surveys','teachers','rejects','submits','data'));
       
        }
        else{

            return back()->withErrors(['email'=>'Email or password invalid.']);
        }
    }



    
    public function storeteacher()
    {
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required' 
        ]);

        if(Auth::attempt($attributes))
        {
            session()->regenerate();
           // return redirect('dashboard')->with(['success'=>'You are logged in.']);

           $role1 ="Student";
           $role2 ="Teacher";
           $role3 ="Head";
           $role4 ="Admin";
           $students=DB::table('users')->where('about_me','=',$role1)->count();
           $teachers=DB::table('users')->where('about_me','=',$role2)->count();
           $heads=DB::table('users')->where('about_me','=',$role3)->count();
           $admin=DB::table('users')->where('about_me','=',$role4)->count();
           $allusers=user::all()->count();
           
           return view('dashboard_teacher',compact('students','teachers','heads','admin','allusers'));
       
        }
        else{

            return back()->withErrors(['email'=>'Email or password invalid.']);
        }
    }

    public function storehead()
    {
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required' 
        ]);

        if(Auth::attempt($attributes))
        {
            session()->regenerate();
           // return redirect('dashboard')->with(['success'=>'You are logged in.']);

           $role1 ="Student";
           $role2 ="Teacher";
           $role3 ="Head";
           $role4 ="Admin";
           $students=DB::table('users')->where('about_me','=',$role1)->count();
           $teachers=DB::table('users')->where('about_me','=',$role2)->count();
           $heads=DB::table('users')->where('about_me','=',$role3)->count();
           $admin=DB::table('users')->where('about_me','=',$role4)->count();
           $allusers=user::all()->count();
           
           return view('dashboard_head',compact('students','teachers','heads','admin','allusers'));
       
        }
        else{

            return back()->withErrors(['email'=>'Email or password invalid.']);
        }
    }




// creating logout for all users
     public function backhome()
        {
         Auth::logout();

        return redirect('/')->with(['success'=>'You\'ve been logged out.']);
       }


   public function destroy()
    {

        Auth::logout();

        return redirect('/admin_login')->with(['success'=>'You\'ve been logged out.']);
    }

    public function destroystudent()
    {

        Auth::logout();

        return redirect('/student_login')->with(['success'=>'You\'ve been logged out.']);
    }

    public function destroyteacher()
    {

        Auth::logout();

        return redirect('/teacher_login')->with(['success'=>'You\'ve been logged out.']);
    }

    public function destroyhead()
    {

        Auth::logout();

        return redirect('/head_login')->with(['success'=>'You\'ve been logged out.']);
    }


}
