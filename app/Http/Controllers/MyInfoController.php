<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Session;
class MyInfoController extends Controller
{
    public function __invoke()
    {

    }
    public function create()
    {
        if(Session::has('idcard')){
        $student = Student::where('idcard',Session::get('idcard'))->first();    
        #$studentData = StudentData::where('idcard',Session::get('idcard'))->first();   
        $data = array(
            'idcard'=>$student->idcard,
            'prefix'=>$student->prefix,
            'name'=>$student->name,
            'surname'=>$student->surname,
            'gender'=>$student->gender
            );
        return view('client.myinfo')->with($data);
        }
        else
        {
            return view('client.pleaselogin');
        }
    }
}
