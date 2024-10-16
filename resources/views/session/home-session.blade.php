@extends('layouts.user_type.homeguest')

@section('content')

  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
           <div class="row"> 
            
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h4 class="font-weight-bolder text-info text-gradient">Welcome back to TeacherCess</h4> 
                  <P>TeacherCess is teachers assessment system which involve data analysis to analyzes teachers performance within the academic year.</P>
                </div>
                <div class="card-body">
                <h4 class="font-weight-bolder text-info text-gradient">What is data analytics</h4>
                <p>Data analytics is the science of analyzing raw data to make conclusions about information. Many of the techniques and processes of data analytics have been automated into mechanical processes and algorithms that work over raw data for human consumption.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/my/sta2.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection
