<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Job;
use App\Http\Requests\jobRequest;

class employeeController extends Controller
{
    public function employeehome(){
        if(session('type')=='Employee')
        {
            return view('employee.home');     
        }
        else
        {
            return redirect('/login');
        }
    }  
}