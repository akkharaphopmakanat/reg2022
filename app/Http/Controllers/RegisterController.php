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
        #$flights = Student::all();
        #return $flights;
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
        ]);
        $user = Student::create(request(['idcard', 'prefix', 'name','surname','gender','birthdate','tel','email']));
        return redirect()->to('/home');
    }
}
