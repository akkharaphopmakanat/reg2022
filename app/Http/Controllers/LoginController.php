<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Session;
class LoginController extends Controller
{
    public function __invoke()
    {

    }
    public function create()
    {
        return view('client.login');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'idcard' => 'required',
            'birthdate' => 'required',
        ]);
   
        if (Student::where('idcard', request()->post('idcard') )->exists()) {

            $student = Student::where('idcard',request()->post('idcard'))->first();        
            $password = $student->birthdate;
            $name = $student->name;
            $surname = $student->surname;
            $acctype = $student->type;
 
            if($password == request()->post('birthdate'))
            {   
                Session::put('idcard', request()->post('idcard'));
                Session::put('name', $name);
                Session::put('surname', $surname);
                Session::put('acctype', $acctype);
                return redirect()->to('/');
            }
            else{
                return view('client.login')->withErrors(['msg' => 'วันเกิดของคุณไม่ถูกต้อง หากท่านคิดว่านี่คือข้อผิดพลาดกรุณาติดต่อผู้ดูแลระบบ'.$password ]);
            }
        }
        else{
            return view('client.login')->withErrors(['msg' => 'ไม่มีผู้ใช้นี้ในระบบ หากท่านคิดว่านี่คือข้อผิดพลาดกรุณาติดต่อผู้ดูแลระบบ']);
        }
        return redirect()->to('/');
    }

    public function logout()
    {
        Session::forget('idcard');
        return redirect()->to('/');
    }

}
