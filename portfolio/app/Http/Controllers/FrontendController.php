<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use App\Models\Resume;
use App\Models\Testomonial;
use App\Models\WhatDo;
use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Exprience;
use App\Models\Skill;

class FrontendController extends Controller
{
    public function about(){
        $resume=AboutMe::all();
        $whatdo=WhatDo::all();
        $testomonials=Testomonial::all();
        return view('frontend.about',[
            'aboutme_data'=>$resume,
            'whatdo'=>$whatdo,
            'testomonials'=>$testomonials
        ]);
    }
    public function resume_frontend(){
        $education=Education::all();
        $exprience=Exprience::all();
        $skill=Skill::all();
        return view('frontend.resume',[
            'educations'=>$education,
            'exprience'=>$exprience,
            'skill'=>$skill
        ]);
    }
    public function work(){
        return view('frontend.work');
    }
    public function contact(){
        return view('frontend.contact');
    }
}
