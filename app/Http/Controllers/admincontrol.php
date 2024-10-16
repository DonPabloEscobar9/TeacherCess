<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use DB;
class admincontrol extends Controller
{
    public function view() 
    {
        $data = user::all();
        return view('laravel-examples/user-management',compact('data'));
    }
 
    public function delete($id) 
    {
        DB::table('users')->where('id','=',$id)->delete();
        return back()->with('success1','Delete successfully');
    }
    
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
        
        return view('dashboard',compact('students','teachers','heads','admin','allusers'));
    }
}
