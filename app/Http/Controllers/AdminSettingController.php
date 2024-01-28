<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Colour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminSettingController extends Controller
{
    public function setting(){
        return view('admin.setting');
    }

    public function colorSetting(){
        return view('admin.color-setting');
    }

    public function changeColors($id,Request $request){
        $colour = Colour::find($id);

        if($colour){
            $colour->Status = 'true';
            $colour->save();
            Colour::where('id','!=',$id)->update(['Status' => NULL]);
            return redirect()->route('admin.setting.color');
        }
        else{
            return redirect()->route('admin.setting.color');
        }
    }


    public function generalSetting(Request $request){
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        $admin->name= Auth::guard('admin')->user()->name;
        $admin->Institution_Name = $request['instituionName'];
        $admin->Tag_line = $request['tagLine'];
        $admin->URL = $request['URL'];
        $admin->email=$request['email'];
        $admin->password = $request['password'];
        $admin->Time_Zone = $request['timeZone'];
        $admin->Address = $request['address'];
        // dd($request->all());
        // dd($request->file('profileImage')->getRealPath());
        $image = $request->profileImage;
        $name = $image->getClientOriginalName();
        $image->storeAs('public/images',$name);
        $admin->profile_photo = $name;
        $admin->save();
        return redirect()->route('admin.setting');
    }



    public function blogSetting(){
        return view('admin.blog-setting');
    }

    public function theamSetting(){
        return view('admin.theam');
    }

    public function accessSetting(){
        return view('admin.accessiblity');
    }

    public function roleSetting(){
        return view('admin.user-roles');
    }

    public function toolSetting(){
        return view('admin.tools');
    }

    public function domainSetting(){
        return view('admin.domain');
    }
}
