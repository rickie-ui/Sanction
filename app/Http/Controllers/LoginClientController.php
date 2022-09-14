<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginClientController extends Controller
{
    public function index(){
        return view('auth.signinuser');
    }

    public function store(Request $request, Employee $employee){
        //  $this->validate($request,[
        //         'email' => 'required|email',
        //         'password' => 'required'
        //       ]);

        //      if (!Auth::guard('employee')->attempt($request->only('email','password'))) {
        //       return back()->with('status', 'Invalid credentials');
        //      }

              return redirect()->route('claim');
    }
}
