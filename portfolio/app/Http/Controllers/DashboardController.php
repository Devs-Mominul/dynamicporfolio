<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin.admin');
    }
    public function dashboard_photo(Request $request){
        $image=$request->image;
        $extension=$image->extension();
        $file_name=Auth::user()->id.'.'.$extension;
        $image->move(public_path('upload/user/'),$file_name);
        User::find(Auth::user()->id)->update([
            'image'=>$file_name

        ]);

    }
}
