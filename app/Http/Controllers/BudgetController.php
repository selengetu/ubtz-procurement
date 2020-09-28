<?php

namespace App\Http\Controllers;

use App\Projecttype;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use Request;
use Session;
use App\Department;
use App\Budget;
use App\Budgetdetail;
use DB;
use Auth;
use Illuminate\Support\Facades\Input;
class BudgetController extends Controller
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
        $budget=DB::select('select t.* from V_UBTZ_YEAR_BUDGET t');
        return view('ubtzbudget')->with(['department'=>$department,'budget'=>$budget]);
    }
    public function store()
    {
        $budget = new Budget;
        $budget->budget_year = Request::input('budget_year');
        $budget->begin_date = Request::input('begin_date');
        $budget->end_date = Request::input('end_date');
        $budget->department_id = Request::input('department_id');
        $budget->plan_budget = Request::input('plan_budget');
        $budget->expanded_money = Request::input('expanded_money');
        $budget->save();
        return Redirect('budget');
    }
    public function storedetail()
    {
        $budget = new Budgetdetail;
        $budget->product_num = Request::input('product_num');
        $budget->product_name = Request::input('product_name');
        $budget->product_quantity = Request::input('product_quantity');
        $budget->product_price = Request::input('product_price');
        $budget->budget_id = Request::input('budget_id');
        $budget->save();
        return Redirect('budget');
    }
    public function update(Request $request)
    {
        $department = DB::table('UBTZ_YEAR_BUDGET')
            ->where('id', Request::input('id'))
            ->update(['budget_year' => Request::input('budget_year'),'begin_date' => Request::input('begin_date'),'end_date' => Request::input('end_date'),
            'department_id' => Request::input('department_id'),'plan_budget' => Request::input('plan_budget'),'expanded_money' => Request::input('expanded_money')
            ]);
        return Redirect('budget');
    }
    public function updatedetail(Request $request)
    {
        $department = DB::table('UBTZ_YEAR_BUDGET_DETAIL')
            ->where('detail_id', Request::input('detail_id'))
            ->update(['product_num' => Request::input('product_num'),'product_name' => Request::input('product_name'),'product_quantity' => Request::input('product_quantity'),
            'product_price' => Request::input('product_price')
            ]);
        return Redirect('budget');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Department::where('id', '=', $id)->delete();
        return Redirect('budget');
    }
}