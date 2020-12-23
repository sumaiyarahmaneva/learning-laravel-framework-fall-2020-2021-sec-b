<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Employee;
use App\Http\Requests\employeeRequest;

class adminController extends Controller
{
    public function adminhome(){
        if(session('type')=='Admin')
        {
            return view('admin.home');     
        }
        else
        {
            return redirect('/login');
        }
    }  
}
