<?php

namespace App\Http\Controllers\Claim;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequisitionController extends Controller
{
//     public function __construct(){
//       $this->middleware(['auth']);
//    }
   public function index(){
    return view('users.claim');
   }

    public function edit(){
        return view('users.order');
    }

    public function store(Request $request){
         $this->validate($request,[
                'name' => 'required|max:255',
                'account' => 'required|integer',
                'bank' => 'required',
                'branch' => 'required',
                'place' => 'required',
                'select' => 'required',
                'duration' => 'required',
                'program' => 'required',
                'amount' => 'required|integer',
                'description' => 'required',
              ]);

              Order::create([
                'name' => $request->name,
                'account' => $request->account,
                'bank' => $request->bank,
                'branch' => $request->branch,
                'place' => $request->place,
                'select' => $request->select,
                'duration' => $request->duration,
                'program' => $request->program,
                'amount' => $request->amount,
                'description' => $request->description,
              ]);

              return redirect()->route('claim');
    }
}
