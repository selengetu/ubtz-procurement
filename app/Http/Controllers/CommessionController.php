<?php

namespace App\Http\Controllers;

use App\Projecttype;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use Request;
use Session;
use App\Department;
use App\Commession;
use App\Tendermember;
use DB;
use Auth;
use Illuminate\Support\Facades\Input;
class CommessionController extends Controller
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
        $employee=DB::select('select * from V_CONST_EMPLOYEES');
        $department=DB::select('select * from CONST_DEPARTMENTS');
        $budgetsource=DB::select('select * from CONST_TENDER_BUDGET_SOURCE');
        $tendertype=DB::select('select * from CONST_TENDERTYPES');
        $selection=DB::select('select * from CONST_TENDER_SELECTIONS');
        $commession=DB::select('select t.* from V_TENDER_COMMESSION t');
        return view('com')->with(['employee'=>$employee,'selection'=>$selection,'department'=>$department,'commession'=>$commession,
                                    'budgetsource'=>$budgetsource,'tendertype'=>$tendertype]);
    }
    public function store()
    {
        $commession = new Commession;
        $commession->createddate = Request::input('createddate');
        $commession->statementnote = Request::input('statementnote');
        $commession->closeddate = Request::input('closeddate');
        $commession->commess_no = Request::input('commess_no');
        $commession->save();
        return Redirect('commession');
    }

    public function update(Request $request)
    {
        $department = DB::table('TENDER_COMMESSION')
            ->where('commess_id', Request::input('commess_id'))
            ->update(['createddate' => Request::input('createddate'),'statementnote' => Request::input('statementnote')
            ,'closeddate' => Request::input('closeddate'),'commess_no' => Request::input('commess_no')]);
        return Redirect('commession');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('TENDER_COMMESSION')->where('commess_id', '=', $commess_id)->delete();
        return Redirect('commession');
    }

    public function last()
    {
        $dep=DB::select('select * from CONST_DEPARTMENTS');
      
        return view('last')->with(['dep'=>$dep]);
    }

    public function storemember()
    {
        $tendermember = new Tendermember;
        $tendermember->begindate = Request::input('begindate');
        $tendermember->enddate = Request::input('enddate');
        $tendermember->denied_reason = Request::input('denied_date');
        $tendermember->employee_id = Request::input('employee_id');
        $tendermember->commess_id = Request::input('commess_id');
        $tendermember->member_id = Request::input('member_id');
        $tendermember->save();
        return Redirect('commession');
    }
    public function destroymember($id)
    {
        $department = DB::table('commession_members')->where('member_id', '=', $id)->delete();
        return Redirect('commession');
    }
    public function updatemember(Request $request)
    {
        $department = DB::table('commession_members')
            ->where('member_id', Request::input('member_id'))
            ->update(['begindate' => Request::input('begindate'),
            'enddate' => Request::input('enddate'), 'denied_person' => Request::input('denied_person'), 'denied_date' => Request::input('denied_date')
            , 'employee_id' => Request::input('employee_id') , 'commess_id' => Request::input('commess_id') , 'member_id' => Request::input('member_id')]);
        return Redirect('commession');
    }

}