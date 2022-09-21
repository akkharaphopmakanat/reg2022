<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class RegisterController extends Controller
{
    public function __invoke()
    {

    }
    public function create()
    {
        return view('client.register');
    }

    public function submit()
    {
        $this->validate(request(),[
            'idcard'=>'required',
            'prefix'=>'required',
            'name'=>'required',
            'surname'=>'required',
            'gender'=>'required',
            'birthdate'=>'required',
            'tel'=>'required',
            'email'=>'required|email'
        ],
        [
            'idcard.required' => 'กรุณากรอกเลขประจำตัวประชาชน',
            'prefix.required' => 'กรุณาเลือกคำนำหน้า',
            'name.require' => 'กรุณากรอกชื่อ',
            'surname.require' => 'กรุณากรอกนามสกุล',
            'gender.require' => 'กรุณาเลือกเพศ',
            'birthdate.require' => 'กรุณากรอกวันเกิด',
            'tel.require' => 'กรุณากรอกหมายเลขโทรศัพท์',
            'email.require' => 'กรุณากรอกอีเมล',
        ]
    );

        if (Student::where('idcard', request()->post('idcard') )->exists()) {
            return view('client.register')->withErrors(['msg' => 'มีผู้ใช้นี้ในระบบแล้ว หากท่านคิดว่านี่คือข้อผิดพลาดกรุณาติดต่อผู้ดูแลระบบ']);;
        }
        else{
        $user = Student::create(request(['idcard', 'prefix', 'name','surname','gender','birthdate','tel','email']));
        }
        return redirect()->to('/home');
    }
}
