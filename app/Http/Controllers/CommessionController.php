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
        $department=DB::select('select * from CONST_DEPARTMENTS');
        $budgetsource=DB::select('select * from CONST_TENDER_BUDGET_SOURCE');
        $tendertype=DB::select('select * from CONST_TENDERTYPES');
        $selection=DB::select('select * from CONST_TENDER_SELECTIONS');
        $commession=DB::select('select t.* from V_TENDER_COMMESSION t');
        return view('com')->with(['selection'=>$selection,'department'=>$department,'commession'=>$commession,'budgetsource'=>$budgetsource,'tendertype'=>$tendertype]);
    }
    public function store()
    {
        $commession = new Commession;
        $commession->createddate = Request::input('createddate');
        $commession->statementnote = Request::input('statementnote');
        $commession->closeddate = Request::input('closeddate');
        $commession->tenderbid_id = Request::input('tenderbid_id');
        $commession->save();
        return Redirect('commession');
    }

    public function update(Request $request)
    {
        $department = DB::table('TENDER_COMMESSION')
            ->where('commess_id', Request::input('commess_id'))
            ->update(['createddate' => Request::input('createddate'),'statementnote' => Request::input('statementnote'),'closeddate' => Request::input('closeddate'),
            'tenderbid_id' => Request::input('tenderbid_id')]);
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
        Department::where('commess_id', '=', $commess_id)->delete();
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
        $tendermember->member_fullname = Request::input('member_fullname');
        $tendermember->member_role = Request::input('member_role');
        $tendermember->ubtz_jobtitle = Request::input('ubtz_jobtitle');
        $tendermember->ubtz_depid = Request::input('ubtz_depid');
        $tendermember->member_posno = Request::input('member_posno');
        $tendermember->tender_check = Request::input('tender_check');
        $tendermember->contract_check = Request::input('contract_check');
        $tendermember->email = Request::input('email');
        $tendermember->phone = Request::input('phone');
        $tendermember->visa_check = Request::input('visa_check');
        $tendermember->save();
        return Redirect('commession');
    }
    public function destroymember($id)
    {
        $department = DB::table('Tendermembers')->where('memberid', '=', $id)->delete();
        return Redirect('commession');
    }
    public function updatemember(Request $request)
    {
        $department = DB::table('TENDER_COMMESSION')
            ->where('commess_id', Request::input('commess_id'))
            ->update(['createddate' => Request::input('createddate'),'statementnote' => Request::input('statementnote'),'closeddate' => Request::input('closeddate'),
            'tenderbid_id' => Request::input('tenderbid_id')]);
        return Redirect('commession');
    }

}