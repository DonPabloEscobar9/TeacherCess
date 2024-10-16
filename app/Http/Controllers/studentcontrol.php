<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use app\Models\User;
use app\models\start;
use app\models\appearances1;
use app\models\dispositions1;
use app\models\professionals1;
use app\models\teachings1;
use Sentiment\Analyzer;

class studentcontrol extends Controller
{ 
    public function view() 
    {
       return view('laravel-examples/survey');
    }

    public function dashboardview() 
    {            
        
        $role2 ="Teacher";   
        $surveys=DB::table('starts')->count();
        $teachers=DB::table('users')->where('about_me','=',$role2)->count();
        $rejects=DB::table('rejects')->where('email2','=', auth()->user()->email )->count();
        $submits=DB::table('submits')->where('email2','=', auth()->user()->email)->count();
        $data=DB::table('starts')->get();

        return view('dashboard_student',compact('surveys','teachers','rejects','submits','data'));
    }

    public function select($id) 
    {
        $submits=DB::table('submits')->where('email2','=', auth()->user()->email)->count();

        if ( $submits){
            return back()->with('success1','You have submited yours already.');
         } else{

        $starts=DB::table('starts')->where('id','=', $id)->get();
        return view('laravel-examples/survey',compact('starts'));
        }
     
    }

    public function reject($id) 
    {
    
        DB::table('starts')->where('id','=',$id)->delete();
       
        $role2 ="Teacher";   
        $surveys=DB::table('starts')->count();
        $teachers=DB::table('users')->where('about_me','=',$role2)->count();
        $rejects=DB::table('rejects')->where('email2','=', auth()->user()->email )->count();
        $submits=DB::table('submits')->where('email2','=', auth()->user()->email)->count();
        $data=DB::table('starts')->get();

        return view('dashboard_student',compact('surveys','teachers','rejects','submits','data'));
    }

    
    public function save1111(Request $req) 
    { 

        $appear = new appearances1;
        $appear->name=$req->name;
        $appear->email=$req->email;
        $appear->year=$req->year;
        $appear->question=$req->q1;

    }

    public function save(Request $request) 
    { 
        // appearance insertion




        $analyzer = new Analyzer();
 $output_text = $analyzer->getSentiment($request->text_to_analyze);
    $comment        = '';
    if($output_text['neg'] > 0 && $output_text['neg'] < 0.49){
        $comment = 'You have completed successfully and your comment was: Somewhat Negative ';
        $comment1 = 'Somewhat Negative ';
    }
    elseif($output_text['neg'] > 0.49){
        $comment = 'You have completed successfully and your comment was: Mostly Negative';
        $comment1 = 'Mostly Negative';
    }

    if($output_text['neu'] > 0 && $output_text['neg'] < 0.49){
        $comment = 'You have completed successfully and your comment was: Somewhat neutral ';
        $comment1 = 'Somewhat neutral ';
    }
    elseif($output_text['neu'] > 0.49){
        $comment = 'You have completed successfully and your comment was: Mostly neutral';
        $comment1 = 'Mostly neutral';
    }

    if($output_text['pos'] > 0 && $output_text['pos'] < 0.49){
        $comment = 'You have completed successfully and your comment was: Somewhat positive ';
        $comment1 = 'Somewhat positive ';
    }
    elseif($output_text['pos'] > 0.49){
        $comment = 'You have completed successfully and your comment was: Mostly positive';
        $comment1 = 'Mostly positive';
    }




        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'year'=>'required',
            'q1'=>'required',
            'ap1'=>'required'
        ]);
        
        DB::table('appearance1')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'year'=>$request->year,
            'question'=>$request->q1,
            'answer'=>$request->ap1,
           ]);


           $request->validate([
            'name'=>'required',
            'email'=>'required',
            'year'=>'required',
            'q2'=>'required',
            'ap2'=>'required'
        ]);
        
        DB::table('appearance1')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'year'=>$request->year,
            'question'=>$request->q2,
            'answer'=>$request->ap2,
           ]);

//professional  insertion

           $request->validate([
            'name'=>'required',
            'email'=>'required',
            'year'=>'required',
            'pq1'=>'required',
            'pro1'=>'required'
        ]);
        
        DB::table('professional1')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'year'=>$request->year,
            'question'=>$request->pq1,
            'answer'=>$request->pro1,
           ]);

           $request->validate([
            'name'=>'required',
            'email'=>'required',
            'year'=>'required',
            'pq2'=>'required',
            'pro2'=>'required'
        ]);
        
        DB::table('professional1')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'year'=>$request->year,
            'question'=>$request->pq2,
            'answer'=>$request->pro2,
           ]);

           //teaching method  insertion

           $request->validate([
            'name'=>'required',
            'email'=>'required',
            'year'=>'required',
            'tq1'=>'required',
            'tea1'=>'required'
        ]);
        
        DB::table('teaching1')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'year'=>$request->year,
            'question'=>$request->tq1,
            'answer'=>$request->tea1,
           ]);



           $request->validate([
            'name'=>'required',
            'email'=>'required',
            'year'=>'required',
            'tq2'=>'required',
            'tea2'=>'required'
        ]);
        
        DB::table('teaching1')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'year'=>$request->year,
            'question'=>$request->tq2,
            'answer'=>$request->tea2,
           ]);


     //disposition  insertion

     $request->validate([
        'name'=>'required',
        'email'=>'required',
        'year'=>'required',
        'dq1'=>'required',
        'dis1'=>'required'
    ]);
    
    DB::table('disposition1')->insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'year'=>$request->year,
        'question'=>$request->dq1,
        'answer'=>$request->dis1,
       ]);


       
     $request->validate([
        'name'=>'required',
        'email'=>'required',
        'year'=>'required',
        'dq2'=>'required',
        'dis2'=>'required'
    ]);
    
    DB::table('disposition1')->insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'year'=>$request->year,
        'question'=>$request->dq2,
        'answer'=>$request->dis2,
       ]);

  
    DB::table('questionnaire1')->insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'year'=>$request->year,
        'question'=>$request->text_to_analyze,
        'answer'=>$comment1,
       ]);


       //dd('Negative: ' . $output_text['neg'] . ' Positive: ' . $output_text['pos'] . ' Neutral: '. $output_text['neu']);
//   return view('')->with('text',$comment);
        return back()->with('success1', $comment );
    }
   
}
