@extends('layouts.user_type.auth')

@section('content')

  <section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../assets/img/my/pexels-designecologist-1779487.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Welcome!</h1>
            <p class="text-lead text-white">Import excel to add new student</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-body">
            <form action="/inportstudent" method="post" enctype="multipart/form-data">
                @csrf
               <div class="mb-3">
                 @if(session('success'))
                    <div class="m-3 alert-success alert-dismissible fade show" id="alert-success" role="alert">
                        <span class="alert-text text-white"> 
                             {{session('success')}}    
                         </span>
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">
                               <i class="fa fa-close" aria-hidden="true"></i>
                          </button>
                     </div>
                  @endif
                  <input type="file" Name="file" class="form-control" placeholder="file" aria-label="file" aria-describedby="email-addon">
                  @error('file')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Register</button>
                </div>
               </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

