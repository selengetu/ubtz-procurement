<?php

namespace App\Http\Controllers;
use App\Bank;
use App\Customer;
use App\Imagefile;
use Request;
use Session;
use Auth;
use DB;
use Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
class CustomerController extends Controller
{
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
        $bank=DB::select('select * from CONST_BANK t');
        $country=DB::select('select * from CONST_COUNTRY t');
        $customer=DB::select('select * from V_CUSTOMERS t where t.is_del=0');
        $filecat_contract=DB::select("select * from CONST_FILECATEGORIES t where t.filegroupcode=3");


        if( Session::has('customer_id') ) {
            $customer_id = Session::get('customer_id');
        }
        else{
            $customer_id =0;
        }

        return view('customer',compact('customer','filecat_contract','customer_id','bank', 'country'));
    }
    public function storecustomer(Request $request)
    {

        $cust = new Customer;
        $cust ->customername = Request::input('customername');
        $cust ->nat_regno = Request::input('nat_regno');
        $cust ->vat_regno = Request::input('vat_regno');
        $cust ->post_address = Request::input('post_address');
        $cust ->contact_phone_list= Request::input('contact_phone_list');
        $cust ->ceo_name = Request::input('ceo_name');
        $cust ->ceo_regno = Request::input('ceo_regno');
        $cust ->ceo_phone_list = Request::input('ceo_phone_list');
        $cust ->is_black_listed = Request::input('is_black_listed');
        $cust ->black_list_begin = Request::input('black_list_begin');
        $cust ->black_list_expire = Request::input('black_list_expire');
        $cust ->black_note = Request::input('black_note');
        $cust ->customer_note = Request::input('customer_note');
        $cust ->customer_email = Request::input('customer_email');
        $cust ->nation = Request::input('nation');
        $cust ->business_route = Request::input('business_route');
        $cust ->experience_from = Request::input('experience_from');
        $cust ->bank_id = Request::input('bank_id');
        $cust ->bank_no = Request::input('bank_no');
        $cust ->added_user =  Auth::user()->id;
        $cust->save();
        Session::flash('customer_id',Request::input('cusid'));
        return redirect('customer');
    }
    public function storecustomerphoto(Request $request)
    {
            $photo= Input::file('customer_note');

            foreach ($photo as $photos)
            {

                $filenamewithextension = $photos->getClientOriginalName();

                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                //get file extension
                $extension = $photos->getClientOriginalExtension();
                $size = $photos->getSize();
                $mime = $photos->getMimeType();
                if(Request::input('filecatcode') == 1){
                    $filenametostore = '1' . date('YmdHisu'). '.' . $extension;
                    Storage::put('img/customer/ulsburtgel/' . $filenametostore, fopen($photos, 'r+'));
                    $thumbnailpath = public_path('img/customer/ulsburtgel/' . $filenametostore);
                }

                if(Request::input('filecatcode')== 3){
                    $filenametostore ='3' .date('YmdHisu'). '.' . $extension;
                    Storage::put('img/customer/irgen/' . $filenametostore, fopen($photos, 'r+'));
                    $thumbnailpath = public_path('img/customer/irgen/' . $filenametostore);
                }
                if(Request::input('filecatcode') == 2){
                    $filenametostore = '2' . date('YmdHisu') . '.' . $extension;
                    Storage::put('img/customer/nuat/' . $filenametostore, fopen($photos, 'r+'));
                    $thumbnailpath = public_path('img/customer/nuat/' . $filenametostore);
                }
                if(Request::input('filecatcode') == 4){
                    $filenametostore ='4' . date('YmdHisu'). '.' . $extension;
                    Storage::put('img/customer/passport/' . $filenametostore, fopen($photos, 'r+'));
                    $thumbnailpath = public_path('img/customer/passport/' . $filenametostore);
                }
                if(Request::input('filecatcode') == 11){
                    $filenametostore = '11' .date('YmdHisu') . '.' . $extension;
                    Storage::put('img/customer/har/' . $filenametostore, fopen($photos, 'r+'));
                    $thumbnailpath = public_path('img/customer/har/' . $filenametostore);
                }

                $img1 = Image::make($photos->getRealPath());

                $img1->save($thumbnailpath);

                $img = new Imagefile;
                $img ->filename= $filenametostore;
                $img ->filemask= $extension;
                $img ->filecatcode= Request::input('filecatcode');
                $img ->customerid= Request::input('cusid');
                $img ->save();
            }
        Session::flash('customer_id',Request::input('cusid'));
        return redirect('customer');
    }
    public function destroy($id)
    {
        Customer::where('customerid', '=', $id)->update(['is_del' => 1]);
        return Redirect('customer');
    }

    public function update()
    {

        Customer::where('customerid', '=', Request::input('customerid') )->update(['customername' =>  Request::input('customername'),'nat_regno' =>  Request::input('nat_regno'),'vat_regno' =>  Request::input('vat_regno'),'post_address' =>  Request::input('post_address')
            ,'ceo_name' =>  Request::input('ceo_name'),'ceo_regno' =>  Request::input('ceo_regno'),'ceo_phone_list' =>  Request::input('ceo_phone_list'),'is_black_listed' =>  Request::input('is_black_listed'),'black_list_begin' =>  Request::input('black_list_begin'),'black_list_expire' =>  Request::input('black_list_expire')
            ,'black_note' =>  Request::input('black_note') ,'customer_note' =>  Request::input('customer_note'),'nation' =>  Request::input('nation'),'business_route' =>  Request::input('business_route'),'experience_from' =>  Request::input('experience_from'),'bank_id' =>  Request::input('bank_id'),'bank_no' =>  Request::input('bank_no'),'customer_email' =>  Request::input('customer_email')]);
        return Redirect('customer');
    }
    public function destroypicture($id)
    {
        Imagefile::where('fileid', '=', $id)->delete();
        return Redirect('customer');
    }
}
