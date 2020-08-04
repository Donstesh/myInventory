<?php

use Illuminate\Support\Facades\Route;

/* --------------------- Common/User Routes START -------------------------------- */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* --------------------- Common/User Routes END -------------------------------- */

/* ----------------------- Admin Routes START -------------------------------- */

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
    
    /**
     * Admin Auth Route(s)
     */
    Route::namespace('Auth')->group(function(){
        
        //Login Routes
        Route::get('/adminlogin','LoginController@showLoginForm')->name('adminlogin');
        Route::post('/adminlogin','LoginController@login');
        Route::post('/logout','LoginController@logout')->name('logout');

        //Forgot Password Routes
        Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');

        // Email Verification Route(s)
        Route::get('email/verify','VerificationController@show')->name('verification.notice');
        Route::get('email/verify/{id}','VerificationController@verify')->name('verification.verify');
        Route::get('email/resend','VerificationController@resend')->name('verification.resend');

    });

    Route::get('/dashboard','HomeController@index')->name('home')->middleware('guard.verified:admin,admin.verification.notice');

    //---------------------------------------Admins Management Routes---------------------------------------
    Route::get('/admins/adminstrators','AdminController@index')->name('adminstrators')->middleware('guard.verified:admin,admin.verification.notice');
    Route::get('/admins/{id}/edit','AdminController@edit')->name('admins.edit');
    Route::get('/admins/{id}/delete','AdminController@destroy')->name('admins.destroy');
    Route::get('newadmin','AdminController@create')->name('newadmin');
    Route::post('newadmin','AdminController@store')->name('saveadmin');
    Route::post('/admins/update','AdminController@update')->name('users.update');
    //---------------------------------------End------------------------------------------------------------
    //---------------------------------------Daily Report Routes---------------------------------------
    Route::get('/dailyreport/dailyreport','DailyreportController@index')->name('dailyreport')->middleware('guard.verified:admin,admin.verification.notice');
    Route::get('/dailyreport/{id}/edit','DailyreportController@edit')->name('dailyreport.edit');
    Route::get('/dailyreport/{id}/delete','DailyreportController@destroy')->name('dailyreport.destroy');
    Route::get('/dailyreport/new','DailyreportController@create')->name('new');
    Route::post('savereport','DailyreportController@store')->name('save');
    Route::post('updaterpt','DailyreportController@update')->name('admin.updaterpt');
    //---------------------------------------End------------------------------------------------------------
    //---------------------------------------Employees Routes---------------------------------------
    Route::get('/employees/employee','EmployeesController@index')->name('employees')->middleware('guard.verified:admin,admin.verification.notice');
    Route::get('/employees/{id}/edit','EmployeesController@edit')->name('employees.edit');
    Route::get('/employees/{id}/delete','EmployeesController@destroy')->name('employees.destroy');
    Route::get('/employees/new','EmployeesController@create')->name('new');
    Route::post('save','EmployeesController@store')->name('save');
    Route::post('updateemp','EmployeesController@update')->name('employees.update');
    //---------------------------------------End------------------------------------------------------------
    //---------------------------------------Medication Routes---------------------------------------
    Route::get('/medication/medication','MedicationController@index')->name('medication')->middleware('guard.verified:admin,admin.verification.notice');
    Route::get('/medication/{id}/edit','MedicationController@edit')->name('medication.edit');
    Route::get('/medication/{id}/delete','MedicationController@destroy')->name('medication.destroy');
    Route::get('/medication/new','MedicationController@create')->name('new');
    Route::post('new','MedicationController@store')->name('saveadmin');
    Route::post('updatemed','MedicationController@update')->name('admin.updatemed');
    //---------------------------------------End------------------------------------------------------------
    //---------------------------------------Share Holders Routes---------------------------------------
    Route::get('/share/share','ShareholderController@index')->name('share')->middleware('guard.verified:admin,admin.verification.notice');
    Route::get('/share/{id}/edit','ShareholderController@edit')->name('share.edit');
    Route::get('/share/{id}/delete','ShareholderController@destroy')->name('share.destroy');
    Route::get('/share/new','ShareholderController@create')->name('new');
    Route::post('saveshareholder','ShareholderController@store')->name('save');
    Route::post('updateshareholder','ShareholderController@update')->name('admin.updateshareholder');
    //---------------------------------------End------------------------------------------------------------
    //---------------------------------------Cost Overhead Routes---------------------------------------
    Route::get('/coh/costoverhead','CohController@index')->name('costoverhead')->middleware('guard.verified:admin,admin.verification.notice');
    Route::get('/coh/{id}/edit','CohController@edit')->name('coh.edit');
    Route::get('/coh/{id}/delete','CohController@destroy')->name('coh.destroy');
    Route::get('/coh/new','CohController@create')->name('new');
    Route::post('savecoh','CohController@store')->name('save');
    Route::post('updatecoh','CohController@update')->name('admin.updatecoh');
    //---------------------------------------End------------------------------------------------------------
    //---------------------------------------Cost Overhead Routes---------------------------------------
    Route::get('/req/requisition','RequisitionController@index')->name('requisition')->middleware('guard.verified:admin,admin.verification.notice');
    Route::get('/req/{id}/edit','RequisitionController@edit')->name('req.edit');
    Route::get('/req/{id}/delete','RequisitionController@destroy')->name('req.destroy');
    Route::get('/req/new','RequisitionController@create')->name('new');
    Route::post('savereq','RequisitionController@store')->name('savereq');
    Route::post('update','RequisitionController@update')->name('req.update');
    //---------------------------------------End------------------------------------------------------------

});

/* ----------------------- Admin Routes END -------------------------------- */

