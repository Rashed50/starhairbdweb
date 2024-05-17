<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\ProductTypesController;
use App\Models\ProductName;
use App\Models\ProductType;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;

class ProductNamesController extends Controller
{
    

        public function getAll(){
            return  $allType=ProductName::with('product')->where('is_active',true)->orderBy('product_name_id','DESC')->get();
        }

        public function findIdWiseProduct($id){
            return  $allType=ProductName::with('product')->where('is_active',true)->where('product_name_id',$id)->first();
        }

        public function ProductTypeWiseProductList($typeId){
            return  $allType=ProductName::with('product')->where('is_active',true)->where('product_type_id',$typeId)->get();
        }


      public function index(){
          $ProTypeOBJ= new ProductTypesController();
          $allType=$ProTypeOBJ->getAll();

          $allProduct=$this->getAll();
          return view('admin.product.product.add', compact('allType', 'allProduct'));
      }


      public function edit($id){
        $ProTypeOBJ= new ProductTypesController();
        $allType=$ProTypeOBJ->getAll();

        $allProduct=$this->getAll();
        $data= $this->findIdWiseProduct($id);
          return view('admin.product.product.add', compact('allType', 'data' ,'allProduct'));
      }


      public function store(Request $request){
        //   dd($request->all());
        
          $request->validate([
              'product_name'=>'required|max:100|unique:product_names,product_name',
              'code'=>'required|max:20',
              'description'=>'required|max:20',
              'price'=>'required|max:20',
              'description'=>'required',
              'img'=>'required',
              'product_type_id'=>'required|max:20',
          ],[
              'product_name.required'=>'Please enter product name',
              'product_name.product_type_id'=>'Please enter product type',
              'product_name.max'=>'enter product name in 100 Chr',
              'product_name.unique'=>'this name already exit',
          ]);
          
          $productImage = $request->file('img');
    
          $productImageName = 'product-image'.'-'.time().'.'.$productImage->getClientOriginalExtension();
          Image::make($productImage)->resize(476,524)->save('uploads/product/'.$productImageName);
          $save_url = 'uploads/product/'.$productImageName;

          $insert=ProductName::insertGetId([
              'product_name'=>$request['product_name'],
              'code'=>$request['code'],
              'description'=>$request['description'],
              'price'=>$request['price'],
              'product_type_id'=>$request['product_type_id'],
              'imagePath'=> $save_url,
            //   'imagePath'=> 1,
              'is_active' => '1',
              'created_at' => Carbon::now(),
          ]);

          if($insert){
              Session::flash('success','successfully store new product name');
              return redirect()->route('product.index');
          }else{
              Session::flash('error','please try again');
              return redirect()->back();
          }
      }


      public function update(Request $request, $id){
        //   $id=$request->id;
          $request->validate([
              'product_name'=>'required|max:100|unique:product_names,product_name,'.$id.',product_name_id',
              'product_type_id'=>'required',
          ],[
              'product_type_id.required'=>'Please enter product name',
              'product_name.required'=>'Please enter product name',
              'product_name.max'=>'enter product name in 100 Chr',
              'product_name.unique'=>'Please enter product name',
          ]);


        //   dd($request->all());

          $update=ProductName::where('product_name_id',$id)->update([
              'product_name'=>$request['product_name'],
              'code' => $request['code'],
                'description' => $request['description'],
                'price' => $request['price'],
                'product_type_id' => $request['product_type_id'],
                'is_active' => '1',
                'updated_at' => Carbon::now(),
          ]);

          if($request->hasFile('img')){
            $productImage = $request->file('img');
            $productImageName = 'product-image'.'-'.time().'.'.$productImage->getClientOriginalExtension();
            Image::make($productImage)->resize(476,524)->save('uploads/product/'.$productImageName);
            $save_url = 'uploads/product/'.$productImageName;

            ProductName::where('product_name_id',$id)->update([
                'imagePath'=> $save_url,
            ]);

          }

          if($update){
              Session::flash('success','successfully update product name');
              return redirect()->route('product.index');
          }else{
              // Session::flash('error','please try again');
              return redirect()->back();
          }
      }




      public function delete($id){
          $delete=ProductName::find($id)->update([
              'is_active' => '0',
          ]);

          if($delete){
              Session::flash('success','successfully delete product name');
              return redirect()->route('product.index');
          }else{
              // Session::flash('error','please try again');
              return redirect()->back();
          }
      }

      public function getProductStock($id)
      {
          if ($id == null) {
              return response()->json(['success' => 'false', 'error' => 'id is required']);
          } else {
              $productStock = ProductName::where('product_name_id', $id)->get();
              if ($productStock) {
                  return response()->json(["Success" => true,"message" => $productStock , "status" => 200]);
              } else {
                  return response()->json(["Success" => false,"message" => "Error " , "status" => 401]);
              }
          }
      }
}
