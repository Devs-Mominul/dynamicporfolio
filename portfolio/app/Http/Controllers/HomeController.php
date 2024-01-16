<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function resume(){
        $resumes=Resume::all();
        return view('admin.resume',['resumes'=>$resumes]);
    }
    public function resume_store(Request $request){
        $image=$request->image;
        $extension=$image->extension();
        $file_name=Auth::user()->id.'.'.$extension;
        $image->move(public_path('upload/resume/'),$file_name);
        Resume::insert([
            'name'=>$request->name,
            'desecnation'=>$request->deseg,
            'social_icon'=>$request->icon,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'birthday'=>$request->birthday,
            'location'=>$request->location,
            'image'=>$file_name,

        ]);
    }
    // public function resume_delete($id){
    //     Resume::find($id)->delete();
    // }
    public function resume_view($id){
        $resume_id=Resume::find($id);
        return view('admin.resume_update',['resume_id'=>$resume_id]);
    }
    public function resume_update_store(Request $request,$id){
        $image=$request->image;
        $extension=$image->extension();
        $file_name=Auth::user()->id.'.'.$extension;
        $image->move(public_path('upload/resume/'),$file_name);
        Resume::find($id)->update([
            'name'=>$request->name,
            'desecnation'=>$request->deseg,
            'social_icon'=>$request->icon,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'birthday'=>$request->birthday,
            'location'=>$request->location,
            'image'=>$file_name,

        ]);

    }
}
