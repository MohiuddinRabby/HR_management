<?php

namespace App\Http\Controllers;

use App\LeaveApplication;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class LeaveApplicationController extends Controller
{
    public function emp()
    {
        return view('leave.leave');
    }
    public function applySend(Request $request)
    {
        $this->validate($request, [
            'el_name' => 'required',
            'el_phone' => 'required',
            // 'el_email' => 'required|email',
            'el_email' => 'required|email|regex:/(.*)@diu.edu\.bd/i',
            'el_date' => 'required',
        ]);
        $sendApplication = new LeaveApplication();
        $sendApplication->e_l_name = $request->el_name;
        $sendApplication->e_l_email = $request->el_email;
        $sendApplication->e_l_phone = $request->el_phone;
        $sendApplication->e_l_leave_date = $request->el_date;
        $sendApplication->status = false;
        $sendApplication->save();
        return redirect()->back()->with('successMsg', 'Applicaton send success. You will notify latter');
    }
    // function leaveAuth($email)
    // {
    //     $leaveAuth = Employee::find($email);

    // }
}
