<?php

namespace App\Http\Controllers;

use App\Projecttype;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use Request;

use Session;
use App\Employee;
use DB;
use Auth;
use Illuminate\Support\Facades\Input;
class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $department=DB::select('select * from CONST_DEPARTMENTS');
        $employee=DB::select('select * from V_CONST_EMPLOYEES t');
        return view('employee')->with(['department'=>$department,'employee'=>$employee]);
    }
    public function store()
    {
        $employee = new Employee;
        $employee->firstname = Request::input('firstname');
        $employee->lastname = Request::input('lastname');
        $employee->jobtitle = Request::input('jobtitle');
        $employee->hired = Request::input('hired');
        $employee->fired = Request::input('fired');
        $employee->certificateno = Request::input('certificateno');
        $employee->department_id = Request::input('department_id');
        $employee->save();
        return Redirect('employee');
    }

    public function update(Request $request)
    {
        $employee = DB::table('CONST_EMPLOYEES')
            ->where('employee_id', Request::input('employee_id'))
            ->update(['firstname' => Request::input('firstname'),'lastname' => Request::input('lastname'),'jobtitle' => Request::input('jobtitle'),
            'hired' => Request::input('hired'),'fired' => Request::input('fired'),'certificateno' => Request::input('certificateno')
            ,'department_id' => Request::input('department_id')]);
        return Redirect('employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::where('employee_id', '=', $id)->delete();
        return Redirect('employee');
    }
}