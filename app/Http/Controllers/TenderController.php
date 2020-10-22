<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;
use App\Tender;


class TenderController extends Controller
{
    
    public function store(Request $request)
    {
      
        $tender = new Tender;
        $tender->limitcategory_id = $request->limitcategory_id;
        $tender->tendertype_id =$request->tendertype_id;
        $tender->tenderbidno =$request->tenderbidno;
        $tender->bidreferenceno = $request->bidreferenceno;
        $tender->sourceoffunding = $request->sourceoffunding;
        $tender->totalbudget =$request->totalbudget;
        $tender->yearbudget =$request->yearbudget;
        $tender->procedureofprocurement = $request->procedureofprocurement;
        $tender->electronicbid =$request->electronicbid;
        $tender->publisheddate = $request->publisheddate;
        $tender->bidopeningdate =$request->bidopeningdate;
        $tender->bidsubmissiondate = $request->bidsubmissiondate;
        $tender->commess_id = $request->commess_id;
        $tender->createdby_empid = Auth::id();
        $tender->save();
        return 1;
    }

    public function update(Request $request)
    {
        $department = DB::table('Tenderbids')
            ->where('tenderbid_id', Request::input('tenderbid_id'))
            ->update(['limitcategory_id' => Request::input('limitcategory_id'),'tendertype_id' => Request::input('tendertype_id'),'sourceoffunding' => Request::input('sourceoffunding')
            ,'tenderbidno' => Request::input('tenderbidno'),'tenderbidno' => Request::input('tenderbidno'),'totalbudget' => Request::input('totalbudget')]);
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
        DB::table('Tenderbids')->where('tenderbid_id', '=', $id)->delete();
        return Redirect('commession');
    }
}
