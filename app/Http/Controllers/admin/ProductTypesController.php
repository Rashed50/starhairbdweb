<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductName;
use App\Models\ProductType;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image as Image;
// use Intervention\Image\ImageManagerStatic as Image;
use Intervention\Image\ImageManager;

class ProductTypesController extends Controller
{
    public function getAll(){
        return  $allType=ProductType::where('is_active',true)->orderBy('product_type_id','DESC')->get();
      }


    //   public function updateOrInsert(){
          
    //   }

      public function index(){
          $allType=$this->getAll();
          return view('admin.product.product-type.add', compact('allType'));
      }
  
  
      public function edit($id){
          $allType=$this->getAll();
          $data= $allType->where('product_type_id',$id)->first();
          return view('admin.product.product-type.add', compact('allType', 'data'));
      }
  
  


      public function store(Request $request){
          $request->validate([
              'product_type_name'=>'required|max:100|unique:product_types,product_type_name',
          ],[
              'product_type_name.required'=>'Please enter product name',
              'product_type_name.max'=>'enter product name in 100 Chr',
              'product_type_name.unique'=>'Please enter product name',
          ]);
            $request->all();
          $insert=ProductType::insertGetId([
              'product_type_name'=>$request['product_type_name'],
              'product_type_photo' => '',
              'is_active' => '1',
              'service_type_id' => '1',
          ]);
  
  
          // product_type_photo
          if($request->hasFile('product_type_photo')){
              $image = $request->file('product_type_photo');
              $imageName = 'product_type_photo'.time().'.'.$image->getClientOriginalExtension();
              Image::make($image)->resize(300,200)->save('uploads/product/'.$imageName);
            return $save__url = 'uploads/product/'.$imageName;
  
              ProductType::where('product_type_id',$insert)->update([
                  'product_type_photo' => $save__url,
                  
              ]);
          }
          if($insert){
              Session::flash('success','successfully store new product type name');
              return redirect()->route('product-type.index');
          }else{
              Session::flash('error','please try again');
              return redirect()->back();
          }
      }
  
  
      public function update(Request $request){
          $id=$request->id;
          $request->validate([
              'product_type_name'=>'required|max:100|unique:product_types,product_type_name,'.$id.',product_type_id',
          ],[
              'product_type_name.required'=>'Please enter product name',
              'product_type_name.max'=>'enter product name in 100 Chr',
              'product_type_name.unique'=>'Please enter product name',
          ]);
  
          $update=ProductType::where('product_type_id',$id)->update([
              'product_type_name'=>$request['product_type_name'],
              'product_type_photo' => '',
              'is_active' => '1',
              'service_type_id' => '1',
          ]);
  
          if($request->hasFile('product_type_photo')){
  
              $image = $request->file('product_type_photo');
              $imageName = 'product_type_photo'.time().'.'.$image->getClientOriginalExtension();
              Image::make($image)->resize(300,200)->save('uploads/product/'.$imageName);
              $save__url = 'uploads/product/'.$imageName;
  
              ProductType::where('product_type_id',$id)->update([
                  'product_type_photo' => $save__url,
                  
              ]);
          }
  
          if($update){
              Session::flash('success','successfully update product type name');
              return redirect()->route('product-type.index');
          }else{
              // Session::flash('error','please try again');
              return redirect()->back();
          }
      }
  
  
  
  
      public function delete($id){
          $delete=ProductType::where('product_type_id',$id)->update([
              'is_active' => '0',
          ]);
  
          if($delete){
              Session::flash('success','successfully delete product type name');
              return redirect()->route('product-type.index');
          }else{
              // Session::flash('error','please try again');
              return redirect()->back();
          }
      }
  
  }
  