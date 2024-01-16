<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Exprience;
use App\Models\Skill;
use Illuminate\Http\Request;

class ResumebackendController extends Controller
{
    public function resume_education(){
        $education=Education::all();
        return view('admin.resume_education',[
            'education'=>$education,
        ]);
    }
    public function resume_education_store(Request $request){
        $education=new Education();
        $education->academy_name=$request->academy_name;
        $education->year=$request->year;
        $education->paragraph=$request->paragraph;
        $education->save();

    }
    public function resume_expreince(){
        $education=Education::all();
        return view('admin.expreince',[
            'education'=>$education,
        ]);
    }
    public function resume_expreince_store(Request $request){
        $exprience=new Exprience();
        $exprience->title=$request->title;
        $exprience->year=$request->year;
        $exprience->paragraph=$request->paragraph;
        $exprience->save();

    }
    public function resume_skill_store(Request $request){
        $skill=new Skill();
        $skill->title=$request->title;
        $skill->parcentage=$request->parcantage;

        $skill->save();

    }
}
