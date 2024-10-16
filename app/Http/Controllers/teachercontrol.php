<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use DB;

class teachercontrol extends Controller
{
    public function dashboardview() 
    {
        $role1 ="Student";
        $role2 ="Teacher";
        $role3 ="Head";
        $role4 ="Admin";
        $students=DB::table('users')->where('about_me','=',$role1)->count();
        $teachers=DB::table('users')->where('about_me','=',$role2)->count();
        $heads=DB::table('users')->where('about_me','=',$role3)->count();
        $admin=DB::table('users')->where('about_me','=',$role4)->count();
        $allusers=user::all()->count();

        $display1 ="Excellent";
        $display2 ="Very Good";
        $display3 ="Good";
        $display4 ="Average";
        $display5 ="Poor";

        $display6 ="Mostly Positive";
        $display7 ="Mostly Negative";
        $display8 ="Mostly Neutral";
        $display9 ="Somewhat Positive";
        $display10 ="Somewhat Negative";
        $display11 ="Somewhat Neutral";

        $ap1ex=DB::table('appearance1')->where('answer','=',$display1)->count();
        $ap1vg=DB::table('appearance1')->where('answer','=',$display2)->count();
        $ap1g=DB::table('appearance1')->where('answer','=',$display3)->count();
        $ap1a=DB::table('appearance1')->where('answer','=',$display4)->count();
        $ap1p=DB::table('appearance1')->where('answer','=',$display5)->count();

        $disex=DB::table('disposition1')->where('answer','=',$display1)->count();
        $disvg=DB::table('disposition1')->where('answer','=',$display2)->count();
        $disg=DB::table('disposition1')->where('answer','=',$display3)->count();
        $disa=DB::table('disposition1')->where('answer','=',$display4)->count();
        $disp=DB::table('disposition1')->where('answer','=',$display5)->count();

        $proex=DB::table('professional1')->where('answer','=',$display1)->count();
        $provg=DB::table('professional1')->where('answer','=',$display2)->count();
        $prog=DB::table('professional1')->where('answer','=',$display3)->count();
        $proa=DB::table('professional1')->where('answer','=',$display4)->count();
        $prop=DB::table('professional1')->where('answer','=',$display5)->count();

        $qumpo=DB::table('questionnaire1')->where('answer','=',$display6)->count();
        $quemne=DB::table('questionnaire1')->where('answer','=',$display7)->count();
        $quemn=DB::table('questionnaire1')->where('answer','=',$display8)->count();
        $quespo=DB::table('questionnaire1')->where('answer','=',$display9)->count();
        $quesne=DB::table('questionnaire1')->where('answer','=',$display10)->count();
        $quesn=DB::table('questionnaire1')->where('answer','=',$display11)->count();

        

        
        return view('dashboard_teacher',compact('students','teachers','heads','admin','allusers','ap1ex','ap1vg','ap1g','ap1a','ap1p','disex','disvg','disg','disa','disp','proex','provg','prog','proa','prop',));

    }

    public function starter() 
    {
               
        return view('laravel-examples/startuser-profile');
    }
    
    public function start(Request $request) 
    {
        $role4="Admin";
               
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'year'=>'required'
        ]);

        DB::table('starts')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'year'=>$request->year
        ]);

        $admin=DB::table('users')->where('about_me','=',$role4)->count();

        return back()->with('success','You have start new survey successfully');
    }
    
}
