<?php

namespace App\Http\Controllers\Admin;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function index(){
        return view('admin.employee');
    }

    public function edit(){
        return view('admin.manage');
    }

    public function store(Request $request){
        // $formFields = $request->validate([
        //         'fname' => 'required|max:255',
        //         'lname' => 'required|max:255',
        //         'email' => 'required|email|max:255',
        //         'phone' => 'required|integer',
        //         'idnumber' => 'required|integer',
        //         'department' => 'required',
        //       ]);

        //       $pass = '12345678';
        //       $formFields['password'] = bcrypt($pass);

        //       Employee::create($formFields);

              return redirect()->route('employee');
    }
}
