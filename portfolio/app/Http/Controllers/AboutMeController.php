<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use App\Models\WhatDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutMeController extends Controller
{
    public function aboutme(){
        return view('admin.aboutme');
    }
  
    public function aboutme_store(Request $request){
        AboutMe::insert([
            'title'=>$request->title,
            'desc'=>$request->desc,
        ]);
    }
    public function whatdo_store(Request $request){
        $image=$request->icon;
        $extension=$image->extension();
        $file_name=Auth::user()->id.'.'.$extension;
        $image->move(public_path('upload/icon/'),$file_name);
        WhatDo::insert([
            'title'=>$request->title,
            'sub_title'=>$request->sub_title,
            'icon'=>$file_name,
            'paragraph'=>$request->paragraph

        ]);

    }
}
