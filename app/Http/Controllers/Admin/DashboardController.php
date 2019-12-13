<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use App\Employee;
use App\Http\Controllers\Controller;
use App\LeaveApplication;
use Jenssegers\Agent\Agent;

class DashboardController extends Controller
{
    public function index()
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
        $departmentCount = Department::count();
        $totalEmployeeCount = Employee::count();
        $totalApplicationCount = LeaveApplication::count();
        return view('admin.dashboard', compact('departmentCount', 'totalEmployeeCount', 'totalApplicationCount', 'agent', 'browser', 'version', 'platform'));
    }
}
