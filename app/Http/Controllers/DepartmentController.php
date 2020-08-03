<?php

namespace App\Http\Controllers;

use App\Projecttype;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use Request;

use Session;
use App\Department;
use DB;
use Auth;
use Illuminate\Support\Facades\Input;
class DepartmentController extends Controller
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
        $dep=DB::select('select t.*, s.abbr as mainabbr, d.deptypename from CONST_DEPARTMENTS t, CONST_DEPARTMENTS s, CONST_DEPARTTYPES d
        where t.deptypecode=d.deptypecode and s.department_id(+)=t.main_department_id');
        $type=DB::select('select * from CONST_DEPARTTYPES');
        return view('department')->with(['department'=>$department,'type'=>$type,'dep'=>$dep]);
    }
    public function store()
    {
        $department = new Department;
        $department->deptypecode = Request::input('deptypecode');
        $department->fullname = Request::input('fullname');
        $department->abbr = Request::input('abbr');
        $department->nfaccountno = Request::input('nfaccountno');
        $department->contactinfo = Request::input('contactinfo');
        $department->livestate = Request::input('livestate');
        $department->main_department_id = Request::input('main_department_id');
        $department->save();
        return Redirect('department');
    }

    public function update(Request $request)
    {
        $department = DB::table('CONST_DEPARTMENTS')
            ->where('department_id', Request::input('department_id'))
            ->update(['deptypecode' => Request::input('deptypecode'),'fullname' => Request::input('fullname'),'abbr' => Request::input('abbr'),
            'nfaccountno' => Request::input('nfaccountno'),'contactinfo' => Request::input('contactinfo'),'livestate' => Request::input('livestate')
            ,'main_department_id' => Request::input('main_department_id')]);
        return Redirect('department');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Department::where('department_id', '=', $id)->delete();
        return Redirect('department');
    }
}