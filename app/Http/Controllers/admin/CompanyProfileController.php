<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;


class CompanyProfileController extends Controller
{
    public function findProfileInfo(){
       return $profile = CompanyProfile::where('comp_id',1)->first();
    }



    public function index(){
        $profile = $this->findProfileInfo();
        
        return view('admin.company-profile.profile', compact('profile'));
    }

    public function update(Request $request){
        $currentInfo = $this->findProfileInfo();

       $data = $request->all();
       $update = CompanyProfile::find(1)->update($data);

       if($request->hasFile('com_logo')){

          unlink($currentInfo->com_logo);

            $image = $request->file('com_logo');
            $imageName = 'logo'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/'.$imageName);
            $savePath = 'uploads/'.$imageName;

            $update = CompanyProfile::find(1)->update([
                'com_logo' => $savePath,
            ]);
        }
       if($request->hasFile('comp_vat_file')){
           unlink($currentInfo->comp_vat_file);
            $image = $request->file('comp_vat_file');
            $imageName = 'vat_file'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/'.$imageName);
            $savePath = 'uploads/'.$imageName;

            $update = CompanyProfile::find(1)->update([
                'comp_vat_file' => $savePath,
            ]);
        }
       if($request->hasFile('comp_tax_file')){
            unlink($currentInfo->comp_tax_file);
            $image = $request->file('comp_tax_file');
            $imageName = 'tax_file'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/'.$imageName);
            $savePath = 'uploads/'.$imageName;
            
            $update = CompanyProfile::find(1)->update([
                'comp_tax_file' => $savePath,
            ]);
        }

       if($update){
            Session::flash('success','successfully update profile info');
            return redirect()->route('company.frofile');
        }else{
            Session::flash('error','please try again');
            return redirect()->back();
        }
    }
}
