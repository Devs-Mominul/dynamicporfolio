<?php

namespace App\Http\Controllers;

use App\Models\Testomonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Testomonials extends Controller
{
    public function testomonials_controller(){
        return view('admin.testomonial');
    }
    public function testomonials_controller_store(Request $request){
        $image=$request->image;
        $extension=$image->extension();
        $file_name=Auth::user()->id.'.'.$extension;
        $image->move(public_path('upload/testomonial/'),$file_name);
        Testomonial::insert([
            'title'=>$request->title,
            'paragraph'=>$request->paragraph,
            'image'=>$file_name,


        ]);
    }
}
