<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\LeaveApplication;
use App\Notifications\ApplicationConfirmedMsg;
use Illuminate\Support\Facades\Notification;
use Jenssegers\Agent\Agent;
use PDF;

class LeaveAppController extends Controller
{
    public function index()
    {
        $applicationsToAdmin = LeaveApplication::all();
        return view('admin.leaveToAdmin.index', compact('applicationsToAdmin'));
    }
    public function reportpdf()
    {
        //agent class
        $agent = new Agent();
        $agent->platform();
        $agent->browser();
        $browser = $agent->browser();
        $version = $agent->version($browser);
        $platform = $agent->platform();
        $version = $agent->version($platform);
        //

        $applicationsToAdmin = LeaveApplication::all();
        $pdf = PDF::loadView('admin.leaveToAdmin.report', compact('applicationsToAdmin', 'agent', 'browser', 'version', 'platform'));
        return $pdf->stream('Allleaveapplications.pdf');
        return $pdf->download('Allleaveapplications.pdf');

    }
    public function status($id)
    {
        $applicationsToAdmin = LeaveApplication::find($id);
        $applicationsToAdmin->status = true;
        $applicationsToAdmin->save();
        Notification::route('mail', $applicationsToAdmin->e_l_email)
            ->notify(new ApplicationConfirmedMsg());
        return redirect()->route('applicationToAdmin')->with('successMsg', 'Leave application confirmed success');
    }
    public function destroy($id)
    {
        $applicationsToAdmin = LeaveApplication::find($id);
        $applicationsToAdmin->destroy($id);
        return redirect()->route('applicationToAdmin')->with('successMsg', 'Leave application deleted success');
    }

}
