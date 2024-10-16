<?php

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\importcontrol;
use App\Http\Controllers\admincontrol;
use App\Http\Controllers\studentcontrol;
use App\Http\Controllers\teachercontrol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth'], function () {
    
	Route::get('/', [SessionsController::class, 'backhome']);
	
	Route::get('dashboard', [admincontrol::class, 'dashboardview'])->name('dashboard');
	Route::get('/delete_user/{id}', [admincontrol::class, 'delete'])->name('users.delete');
	
	Route::get('dashboard_student', [studentcontrol::class, 'dashboardview'])->name('dashboard_student');
	Route::get('/selectedsurvey/{id}', [studentcontrol::class, 'select']);
	Route::get('/rejectedsurvey/{id}', [studentcontrol::class, 'reject']);
	Route::post('selectedsurvey', [studentcontrol::class, 'save'])->name('savequestion');
	Route::post('/submit-survey', [SurveyController::class, 'submitSurvey'])->name('submit.survey');

	Route::get('dashboard_teacher', [teachercontrol::class, 'dashboardview'])->name('dashboard_teacher');
	Route::get('startsurvey', [teachercontrol::class, 'starter'])->name('startsurvey');
	Route::post('start', [teachercontrol::class, 'start'])->name('start');
	
	//Route::get('user-management', function () {
	//	return view('laravel-examples/user-management');
	//})->name('user-management');
	Route::get('user-management', [admincontrol::class, 'view'])->name('user-management');

	Route::Post('/student_survey', [studentcontrol::class, 'view'])->name('student_survey');

	Route::get('tables', function () {
		return view('tables');
	})->name('tables');

    Route::get('virtual-reality', function () {
		return view('virtual-reality');
	})->name('virtual-reality');

    Route::get('Add student', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('Add teacher', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/logout_student', [SessionsController::class, 'destroystudent']);
	Route::get('/logout_teacher', [SessionsController::class, 'destroyteacher']);
	Route::get('/logout_head', [SessionsController::class, 'destroyhead']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::get('/user-profile_teacher', [InfoUserController::class, 'createt']);
	Route::get('/user-profile_student', [InfoUserController::class, 'creates']);
	Route::get('/user-profile_head', [InfoUserController::class, 'createh']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
	Route::post('/user-profiles', [InfoUserController::class, 'stores']);
	Route::post('/user-profilet', [InfoUserController::class, 'storet']);
	Route::post('/user-profileh', [InfoUserController::class, 'storeh']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');

	
    Route::post('/importteacher', [importcontrol::class, 'import']);
	Route::post('/importstudent', [importcontrol::class, 'importstu']);

	
	
});



Route::group(['middleware' => 'guest'], function () {
	
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/admin_login', [SessionsController::class, 'create']);
	Route::get('/login', [SessionsController::class, 'createhome']);
	Route::get('/student_login', [SessionsController::class, 'createstudent']);
	Route::get('/teacher_login', [SessionsController::class, 'createteacher']);
	Route::get('/head_login', [SessionsController::class, 'createhead']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::post('/student_session', [SessionsController::class, 'storestudent']);
	Route::post('/teacher_session', [SessionsController::class, 'storeteacher']);
	Route::post('/head_session', [SessionsController::class, 'storehead']);
	Route::get('/login/forgot-password', [ResetPasswordController::class, 'create']);
	Route::post('/forgot-password', [ResetPasswordController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetPasswordController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ForgotPasswordController::class, 'changePassword'])->name('password.update');
	Route::get('reset-password/{token}', [PasswordController::class, 'showResetPasswordForm'])->name('password.reset');
    Route::post('/reset-password', [PasswordController::class, 'reset'])->name('password.reset');
	Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [ForgotPasswordController::class, 'submitForgotPasswordForm'])->name('password.email');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

});
	


Route::get('/login', function () {
    return view('session/home-session');
})->name('login');


Route::get('/admin_login', function () {
    return view('session/login-session');
})->name('_admin_login');

Route::get('/student_login', function () {
    return view('session_student/login-session');
})->name('student_login');

Route::get('/teacher_login', function () {
    return view('session_teacher/login-session');
})->name('teacher_login');

Route::get('/head_login', function () {
    return view('session_head/login-session');
})->name('head_login');


