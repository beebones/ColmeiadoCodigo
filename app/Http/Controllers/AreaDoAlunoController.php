<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaDoAlunoController extends Controller
{
    //
    public function viewAreaDoAluno(Request $request){
        return view('areaDoAluno');
    }
}
