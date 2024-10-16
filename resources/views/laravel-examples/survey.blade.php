@extends('layouts_student.user_type.auth')

@section('content')

<div>
    
   
     <div class="alert alert-secondary mx-4" role="alert">
        <span class="text-white">
            <strong>TEACHERS ASSESSMENT FOR SEMESTER</strong> 
        </span>
    </div>
    @foreach($starts as $start)
     <div class="col-12">
             <div class="card mb-4 mx-4">
                <p> &ensp; &ensp; Name of teacher: {{$start->name}} </p>
                <p> &ensp; &ensp; Academic year: {{$start->year}} </p>
                <p> &ensp; &ensp; Teacher's Email: {{$start->email}}</p>
             </div>
     </div>
     <div class="card mb-4 mx-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
 <strong style="color:red"> &emsp; &emsp; Please fill out the form in evaluating your instructor for the semester.<br> &emsp; &emsp;After
completion, please press the submit button.</strong>
  </div>
  </div>
  </div>
  @if(session('success1'))
        <div class="m-3 alert-success alert-dismissible fade show" id="alert-success" role="alert">
           <span class="alert-text text-white"> 
               {{session('success1')}}    
           </span>
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">
               <i class="fa fa-close" aria-hidden="true"></i>
           </button>
        </div>
       @endif

       <!--div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left" name="mood">
                    {{isset($text) ? 'Your Mood is: ' . $text : 'Nothing entered'}}
                </div>


            </div-->

    <BR></BR>
     <div class="row">
      <strong>&emsp; &emsp; &emsp;Appearance and Personal Presentation</strong> 
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">

        <form action="/selectedsurvey" method="POST" role="form text-left">
                    @csrf
                    <Input type="hidden" name="name" value="{{$start->name}}"></Input>
                    <Input type="hidden" name="year" value="{{$start->year}}"></Input>
                    <Input type="hidden" name="email" value="{{$start->email}}"></Input>
@endforeach
                    <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        EXCELLENT
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        VERY GOOD
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        GOOD
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        AVERAGE
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       <strong>POOR</strong>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">Teacher attends class in a well presentable manner</p>
                                        <Input type="hidden" name="q1" value="Teacher attends class in a well presentable manner"></Input>
                                    </td>
                                    <td>
                                    &emsp;    <Input type="radio" name="ap1" value="Excellent"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="ap1" value="Very Good"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="ap1" value="Good"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="ap1" value="Average"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="ap1" value="Poor"></Input>
                                    </td>
                                </tr>

                                
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">Teacher shows enthusiasm when teaching in class</p>
                                        <Input type="hidden" name="q2" value="Teacher shows enthusiasm when teaching in class"></Input>
                                    </td>
                                    <td>
                                    &emsp;  <Input type="radio" name="ap2" value="Excellent"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="ap2" value="Very Good"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="ap2" value="Good"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="ap2" value="Average"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="ap2" value="Poor"></Input>
                                    </td>
                                </tr>

                             </tbody>
                        </table>     
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
      <strong>&emsp; &emsp; &emsp; Professional Practices</strong> 
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        EXCELLENT
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        VERY GOOD
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        GOOD
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        AVERAGE
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        POOR
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">Teacher shows professionalism in class</p>
                                        <Input type="hidden" name="pq1" value="Teacher shows professionalism in class"></Input>
                                    </td>
                                    <td>
                                    &emsp;    <Input type="radio" name="pro1" value="Excellent"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="pro1" value="Very Good"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="pro1" value="Good"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="pro1" value="Average"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="pro1" value="Poor"></Input>
                                    </td>
                                </tr>

                                
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">Teacher shows commitment to teaching the class</p>
                                        <Input type="hidden" name="pq2" value="Teacher shows commitment to teaching the class"></Input>
                                    </td>
                                    <td>
                                    &emsp;  <Input type="radio" name="pro2" value="Excellent"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="pro2" value="Very Good"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="pro2" value="Good"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="pro2" value="Average"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="pro2" value="Poor"></Input>
                                    </td>
                                </tr>

                             </tbody>
                        </table>     
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <div class="row">
      <strong>&emsp; &emsp; &emsp; Teaching Methods</strong> 
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        EXCELLENT
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        VERY GOOD
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        GOOD
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        AVERAGE
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        POOR
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">Teacher shows well rounded knowledge over the subject matter</p>
                                        <Input type="hidden" name="tq1" value="Teacher shows well rounded knowledge over the subject matter"></Input>
                                    </td>
                                    <td>
                                    &emsp;    <Input type="radio" name="tea1" value="Excellent"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="tea1" value="Very Good"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="tea1" value="Good"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="tea1" value="Average"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="tea1" value="Poor"></Input>
                                    </td>
                                </tr>

                                
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">Teacher has organized the lesson conducive for easy understanding
of students</p>
<Input type="hidden" name="tq2" value="Teacher has organized the lesson conducive for easy understanding
of students"></Input>
                                    </td>
                                    <td>
                                    &emsp;  <Input type="radio" name="tea2" value="Excellent"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="tea2" value="Very Good"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="tea2" value="Good"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="tea2" value="Average"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="tea2" value="Poor"></Input>
                                    </td>
                                </tr>
                             </tbody>
                        </table>     
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <div class="row">
      <strong>&emsp; &emsp; &emsp; Disposition Towards Students</strong> 
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        EXCELLENT
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        VERY GOOD
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        GOOD
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        AVERAGE
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        POOR
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4" name="dq1">
                                        <p class="text-xs font-weight-bold mb-0">Teacher believes that students can learn from the class</p>
                                        <Input type="hidden" name="dq1" value="Teacher believes that students can learn from the class"></Input>
                                    </td>
                                    <td>
                                    &emsp;    <Input type="radio" name="dis1" value="Excellent"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="dis1" value="Very Good"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="dis1" value="Good"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="dis1" value="Average"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="dis1" value="Poor"></Input>
                                    </td>
                                </tr>

                                
                                <tr>
                                    <td class="ps-4" name="dq2">
                                        <p class="text-xs font-weight-bold mb-0">Teacher shows equal respect to various cultural backgrounds,
individuals, <br>religion, and race</p>

<Input type="hidden" name="dq2" value="Teacher shows equal respect to various cultural backgrounds,
individuals,religion, and race"></Input>
                                    </td>
                                    <td>
                                    &emsp;  <Input type="radio" name="dis2" value="Excellent"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="dis2" value="Very Good"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="dis2" value="Good"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="dis2" value="Average"></Input>
                                    </td>
                                    <td class="text-center">
                                        <Input type="radio" name="dis2" value="Poor"></Input>
                                    </td>
                                </tr>

                             </tbody>
                        </table>     
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
         <strong>&emsp; &emsp; &emsp; Comment</strong> 
           <div class="@error('user.about')border border-danger rounded-3 @enderror">
           <textarea class="form-control" id="text_to_analyze" rows="3" placeholder="comment on your teacher's performance" name="text_to_analyze"></textarea>
           </div>
         </div>
         <div class="d-flex justify-content-end">
           <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Submit' }}</button>
      </div>
   

 </form>

</div>
@endsection