<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\ProductTypesController;
use App\Http\Controllers\admin\ProductNamesController;
use App\Http\Controllers\admin\CompanyProfileController;
use App\Models\MessageInfo;
use App\Models\ProductName;
use App\Models\ProductOrder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image as Image;

class WebsiteController extends Controller
{

    public function allContactMessage(){
        return $allmessage = MessageInfo::orderBy('message_id', 'DESC')->get();
    }
    public function index(){

        $nessages = $this->allContactMessage();

        $ProTypeOBJ= new ProductTypesController();
        $allType=$ProTypeOBJ->getAll();

        $productConObj = new ProductNamesController();
        $allProduct = $productConObj->getAll();

        $comConObj = new CompanyProfileController();
        $comProfile = $comConObj->findProfileInfo();

        return view('frontend.index', compact('allType', 'allProduct', 'comProfile', 'nessages'));
    }

    public function details($id){
        $productConObj = new ProductNamesController();
        $product = $productConObj->findIdWiseProduct($id);

        $comConObj = new CompanyProfileController();
        $comProfile = $comConObj->findProfileInfo();

        $reletedProduct = $productConObj->ProductTypeWiseProductList($product->product_type_id );
        
        return view('frontend.product-details', compact('product', 'reletedProduct', 'comProfile'));
    }


    public function contactMessage(){
        $comConObj = new CompanyProfileController();
        $comProfile = $comConObj->findProfileInfo();
        return view('frontend.contact', compact('comProfile'));
    }
    

    public function productOrder(){
        $comConObj = new CompanyProfileController();
        $comProfile = $comConObj->findProfileInfo();
        return view('frontend.product-order', compact('comProfile'));
    }


    public function manufacturing(){
        $comConObj = new CompanyProfileController();
        $comProfile = $comConObj->findProfileInfo();
        return view('frontend.manufacturing', compact('comProfile'));
    }


    public function curlRing(){
        $comConObj = new CompanyProfileController();
        $comProfile = $comConObj->findProfileInfo();
        return view('frontend.curl-ring', compact('comProfile'));
    }

    public function productOrderStore(Request $request){
        $request->validate([
            'ClientName' => 'required',
        ]);


        $request['OrderDate'] = date('Y-m-d', strtotime(Carbon::now()));
        $data = $request->all();
        $insert = ProductOrder::create($data);

        
        if($request->hasFile('samplePicture')){
            $image = $request->file('samplePicture');
            $imageName = 'product-image'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/productImage/'.$imageName);
            $savePath = 'uploads/productImage/'.$imageName;

            $update = ProductOrder::find($insert->id)->update([
                'samplePicture' => $savePath,
            ]);
        }


        if($insert){
            Session::flash('success','successfully send your product message');
            return redirect()->back();
        }else{
            Session::flash('error','please try again');
            return redirect()->back();
        }
    }


    public function contactMessageStore(Request $request){
        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
        ]);
        $data = $request->all();
        $insert = MessageInfo::create($data);

        if($insert){
            Session::flash('success','successfully send your message');
            return redirect()->back();
        }else{
            Session::flash('error','please try again');
            return redirect()->back();
        }
    }

    public function privacy(){
        $comConObj = new CompanyProfileController();
        $comProfile = $comConObj->findProfileInfo();

        return view('frontend.privacy', compact('comProfile'));
    }

    public function mission(){
        $comConObj = new CompanyProfileController();
        $comProfile = $comConObj->findProfileInfo();

        return view('frontend.mission', compact('comProfile'));
    }

    public function product(){
        $ProTypeOBJ= new ProductTypesController();
        $allType=$ProTypeOBJ->getAll();

        $productConObj = new ProductNamesController();
        $allProduct = $productConObj->getAll();
        return view('frontend.product-info', compact('allType', 'allProduct'));
    }
}
