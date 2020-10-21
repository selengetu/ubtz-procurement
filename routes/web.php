<?php

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

Route::group(['middleware' => 'locale'], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/collapsemenu/{val}', function($val){
    DB::update("update users set menucollapse = $val where id = ".Auth::user()->id);
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blank', 'HomeController@blank')->name('blank');
Route::get('/profile', 'UserController@index')->name('profile');
Route::post('/changePassword','UserController@postCredentials');
Route::get('/order', 'OrderController@index')->name('order');

Route::get('/department', 'DepartmentController@index')->name('department');
Route::get('/department/delete/{id}', 'DepartmentController@destroy');
Route::post('/adddepartment','DepartmentController@store');
Route::post('/updatedepartment','DepartmentController@update');
Route::get('/departmentfill/{id?}',function($id = 0){
    $dt=App\Department::where('department_id','=',$id)->get();
    return $dt;
});

Route::get('/employee', 'EmployeeController@index')->name('employee');
Route::get('/employee/delete/{id}', 'EmployeeController@destroy');
Route::post('/addemployee','EmployeeController@store');
Route::post('/updateemployee','EmployeeController@update');
Route::get('/employeefill/{id?}',function($id = 0){
    $dt=DB::table('V_CONST_EMPLOYEES')->where('employee_id','=',$id)->get();
    return $dt;
});
Route::get('/order', 'OrderController@index')->name('order');
Route::get('/receivedorder', 'OrderController@receivedorder')->name('receivedorder');
Route::get('/order/delete/{id}', 'OrderController@destroy');
Route::post('/addorder','OrderController@store');
Route::post('/updateorder','OrderController@update');
Route::get('/orderfill/{id?}',function($id = 0){
    $dt=DB::table('V_PRODUCT_ORDERS')->where('order_id','=',$id)->get();
    return $dt;
});

Route::get('/item/delete/{id}', 'OrderController@destroyitem');
Route::post('/additem','OrderController@storeitem');
Route::post('/updateitem','OrderController@updateitem');
Route::get('/itemfill/{id?}',function($id = 0){
    $dt=DB::table('ORDER_ITEMS')->where('item_id','=',$id)->get();
    return $dt;
});

Route::get('/visa/delete/{id}', 'OrderController@destroyvisa');
Route::post('/addvisa','OrderController@storevisa');
Route::post('/updatevisa','OrderController@updatevisa');
Route::get('/visafill/{id?}',function($id = 0){
    $dt=DB::table('V_ORDER_VISA')->where('visa_id','=',$id)->get();
    return $dt;
});
Route::get('/orderitemfill/{id?}',function($id = 0){
    $dt=DB::table('ORDER_ITEMS')->where('order_id','=',$id)->get();
    return $dt;
});
Route::get('/ordervisafill/{id?}',function($id = 0){
    $dt=DB::table('V_ORDER_VISA')->where('order_id','=',$id)->get();
    return $dt;
});

Route::get('/budget', 'BudgetController@index')->name('budget');
Route::get('/budget/delete/{id}', 'BudgetController@destroy');
Route::post('/addbudget','BudgetController@store');
Route::post('/updatebudget','BudgetController@update');
Route::get('/budgetfill/{id?}',function($id = 0){
    $dt=DB::table('V_UBTZ_YEAR_BUDGET')->where('id','=',$id)->get();
    return $dt;
});
Route::get('/budgetdetailfill/{id?}',function($id = 0){
    $dt=DB::table('UBTZ_YEAR_BUDGET_DETAIL')->where('detail_id','=',$id)->get();
    return $dt;
});
Route::post('/updatebudgetdetail','BudgetController@updatedetail');
Route::get('/budgetdetailsfill/{id?}',function($id = 0){
    $dt=DB::table('UBTZ_YEAR_BUDGET_DETAIL')->where('budget_id','=',$id)->get();
    return $dt;
});
Route::post('/addbudgetdetail','BudgetController@storedetail');


Route::get('/commession', 'CommessionController@index')->name('commession');
Route::get('/commession/delete/{id}', 'CommessionController@destroy');
Route::post('/addcommession','CommessionController@store');
Route::post('/updatecommession','CommessionController@update');
Route::get('/commessionfill/{id?}',function($id = 0){
    $dt=DB::table('v_tender_commession')->where('commess_id','=',$id)->get();
    return $dt;
});


Route::get('/customer', 'CustomerController@index')->name('customer');
Route::post('/storecustomer', 'CustomerController@storecustomer')->name('storecustomer');
Route::post('/storecustomerphoto', 'CustomerController@storecustomerphoto')->name('storecustomerphoto');
Route::get('/destroycustomer/{id}/delete', ['as' => 'customer.destroy', 'uses' => 'CustomerController@destroy']);
Route::post('/updatecustomer', 'CustomerController@update')->name('updatecustomer');

Route::get('/historydetail/{id?}',function($id = 0){
    $dt=DB::table('v_customers')->where('customerid','=',$id)->get();
    return $dt;
});

Route::get('/last', 'CommessionController@last')->name('last');
});
Route::get('/getimage/{id?}',function($id = 0){
    $dt=DB::table('V_customer_files')->where('customerid','=',$id)->orderby('filecatcode')->get();
    return $dt;
});

Route::get('/getcustomer/{id?}',function($id = 0){
    $dt=DB::table('V_customers')->where('customerid','=',$id)->get();
    return $dt;
});
Route::get('/tendermember/delete/{id}', 'CommessionController@destroymember');
Route::post('/addtendermember','CommessionController@storemember');
Route::post('/updatetendermember','CommessionController@updatemember');
Route::get('/tendermemberfill/{id?}',function($id = 0){
    $dt=DB::table('v_commession_member')->where('commess_id','=',$id)->get();
    return $dt;
});

Route::get('/tender/delete/{id}', 'TenderController@destroy');
Route::post('/addtender','TenderController@store');
Route::post('/updatetender','TenderController@update');
Route::get('/tenderfill/{id?}',function($id = 0){
    $dt=DB::table('v_tenderbids')->where('commess_id','=',$id)->get();
    return $dt;
});
Route::get('/tenderdetailfill/{id?}',function($id = 0){
    $dt=DB::table('v_tenderbids')->where('tenderbid_id','=',$id)->get();
    return $dt;
});