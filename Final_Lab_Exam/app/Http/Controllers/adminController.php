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

     public function employeelist(){
        if(session('type')=='Admin')
        {
            $employee = Employee::all();
            return view('admin.employeelist')->with('employees', $employee);     
        }
        else
        {
            return redirect('/login');
        }
    } 

     public function create(){
        if(session('type')=='Admin')
        {
           return view('admin.create');    
        }
        else
        {
            return redirect('/login');
        }
    }

    public function store(employeeRequest $req){
        if(session('type')=='Admin')
        {
            $employee = new Employee();

            $employee->employeename     = $req->employeename;
            $employee->companyname     = $req->companyname;
            $employee->contactno         = $req->contactno;
            $employee->username         = $req->username;
            $employee->password         = $req->password;
            $employee->type         = $req->type;

            if($employee->save()){
                return redirect()->route('admin.employeelist');
            }    
        }
        else
        {
            return redirect('/login');
        }
    }
}
