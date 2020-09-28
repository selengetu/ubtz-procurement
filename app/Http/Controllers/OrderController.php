<?php

namespace App\Http\Controllers;

use App\Projecttype;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use Request;

use Session;
use App\Order;
use App\Item;
use App\Visa;
use DB;
use Auth;
use Illuminate\Support\Facades\Input;
class OrderController extends Controller
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
        $order=DB::select('select t.* from V_PRODUCT_ORDERS t');
        $response=DB::select('select t.* from CONST_RESPONSE t');
        $budget_type=DB::select('select * from CONST_TENDER_BUDGET_SOURCE');
        $visatype=DB::select('select * from CONST_VISA_TYPE');
        $order_type=DB::select('select * from CONST_ORDERTYPES');
        return view('order')->with(['visatype'=>$visatype,'department'=>$department,'order'=>$order,'budget_type'=>$budget_type,'order_type'=>$order_type,'response'=>$response]);
    }
    public function receivedorder()
    {
        $department=DB::select('select * from CONST_DEPARTMENTS');
        $order=DB::select('select t.* from V_PRODUCT_ORDERS t');
        $budget_type=DB::select('select * from CONST_TENDER_BUDGET_SOURCE');
        $order_type=DB::select('select * from CONST_ORDERTYPES');
        return view('receivedorder')->with(['department'=>$department,'order'=>$order,'budget_type'=>$budget_type,'order_type'=>$order_type]);
    }
    public function store()
    {
        $order = new Order;
        $order->orderdate = Request::input('orderdate');
        $order->orderno = Request::input('orderno');
        $order->ordertitle = Request::input('ordertitle');
        $order->purpose = Request::input('purpose');
        $order->expiredate = Request::input('expiredate');
        $order->budgetyear = Request::input('budgetyear');
        $order->estimatedcost = Request::input('estimatedcost');
        $order->approvedbudget = Request::input('approvedbudget');
        $order->approveddate = Request::input('approveddate');
        $order->department_id = Request::input('department_id');
        $order->orderstatus = Request::input('orderstatus');
        $order->budgettype_id = Request::input('budgettype_id');
        $order->ordertype_id = Request::input('ordertype_id');
        $order->save();
        return Redirect('order');
    }

    public function update(Request $request)
    {
        $order = DB::table('Product_orders')
            ->where('order_id', Request::input('order_id'))
            ->update(['orderdate' => Request::input('orderdate'),'orderno' => Request::input('orderno'),'ordertitle' => Request::input('ordertitle'),
            'purpose' => Request::input('purpose'),'expiredate' => Request::input('expiredate'),'budgetyear' => Request::input('budgetyear')
            ,'estimatedcost' => Request::input('estimatedcost') ,'approvedbudget' => Request::input('approvedbudget') ,'approveddate' => Request::input('approveddate')
            ,'orderstatus' => Request::input('orderstatus') ,'budgettype_id' => Request::input('budgettype_id') ,'ordertype_id' => Request::input('ordertype_id')]);
        return Redirect('order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Department::where('order_id', '=', $id)->delete();
        return Redirect('order');
    }
    public function storeitem()
    {
        $item = new Item;
        $item->order_id = Request::input('porder_id');
        $item->itemcode = Request::input('itemcode');
        $item->itemname = Request::input('itemname');
        $item->perprice = Request::input('perprice');
        $item->quantity = Request::input('quantity');
        $p=  Request::input('perprice');
        $q = Request::input('quantity');
        $t;
        $t=$p * $q;
        $item->totalcost = $t;
        $item->trademarks = Request::input('trademarks');
        $item->nfmaterialcode = Request::input('nfmaterialcode');
        $item->nfmaterialname = Request::input('nfmaterialname');
        $item->save();
        return 'success';
    }

    public function updateitem(Request $request)
    {
        $p=  Request::input('perprice');
        $q = Request::input('quantity');
        $t;
        $t=$p * $q;
        $order = DB::table('Order_items')
            ->where('item_id', Request::input('item_id'))
            ->update(['itemcode' => Request::input('itemcode'),'itemname' => Request::input('itemname'),'perprice' => Request::input('perprice'),
            'quantity' => Request::input('quantity'),'trademarks' => Request::input('trademarks'),'nfmaterialcode' => Request::input('nfmaterialcode')
            ,'nfmaterialname' => Request::input('nfmaterialname'),'totalcost' => $t ]);
            return 'success';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyitem($id)
    {
        DB::table('Order_items')->where('item_id', '=', $id)->delete();
        return 1;
    }
    public function storevisa()
    {
        $order = new Visa;
        $order->order_id = Request::input('vorder_id');
        $order->requestdate = Request::input('requestdate');
        $order->requesttitle = Request::input('requesttitle');
        $order->responsedate = Request::input('responsedate');
        $order->responsenote = Request::input('responsenote');
        $order->employeetitle = Request::input('employeetitle');
        $order->visastatus = Request::input('visastatus');
        $order->requestto_empid = Request::input('requestto_empid');
        $order->save();
        return 'success';
    }

    public function updatevisa(Request $request)
    {
        $order = DB::table('Order_visas')
            ->where('visa_id', Request::input('visa_id'))
            ->update(['requestdate' => Request::input('requestdate'),'requesttitle' => Request::input('requesttitle'),'responsedate' => Request::input('responsedate'),
            'responsenote' => Request::input('responsenote'),'employeetitle' => Request::input('employeetitle'),'visastatus' => Request::input('visastatus')]);
            return 'success';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyvisa($id)
    {
        DB::table('Order_visas')->where('visa_id', '=', $id)->delete();
    
    }
}