<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use App\Imports\studentImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class importcontrol extends Controller
{
        public function import() 
    {
        Excel::import(new UsersImport, request()->file('file'));
        
        return back()->with('success', 'Successfully registed');
    }
    
    public function importstu() 
    {
        Excel::import(new studentImport, request()->file('file'));
        
        return back()->with('success', 'Successfully registed');
    }
}
