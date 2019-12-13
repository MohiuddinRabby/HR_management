<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use App\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('admin.employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('admin.employee.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'e_image' => 'required',
            'ename' => 'required',
            'fname' => 'required',
            'edob' => 'required',
            'local_address' => 'required',
            'permanenet_address' => 'required',
            'phone' => 'required',
            // 'e_email' => 'required|email',
            'e_email' => 'required|email|regex:/(.*)@diu.edu\.bd/i',
            'e_pass' => 'required',
            'all_departments' => 'required',
            'e_designations' => 'required',
            'e_start_salary' => 'required',
            'e_joinDate' => 'required',
            'e_acc_number' => 'required',
        ]);
        $employees = new Employee;
        if ($request->hasFile('e_image')) {
            $file = $request->file('e_image');
            $text = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $text;
            $file->move('uploads/empPhotos', $fileName);
        }
        $employees->e_image = $fileName;
        $employees->department_id = $request->all_departments;
        $employees->e_name = $request->ename;
        $employees->e_father_name = $request->fname;
        $employees->e_dob = $request->edob;
        $employees->e_local_address = $request->local_address;
        $employees->e_permanent_address = $request->permanenet_address;
        $employees->e_phone = $request->phone;
        $employees->e_mail = $request->e_email;
        $employees->e_pass = $request->e_pass;
        $employees->e_department = $request->all_departments;
        $employees->e_designation = $request->e_designations;
        $employees->e_join_date = $request->e_joinDate;
        $employees->e_salary = $request->e_start_salary;
        $employees->e_account_number = $request->e_acc_number;
        $employees->save();

        return redirect()->route('employee.index')->with('successMsg', 'New employee data created success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employees = Employee::find($id);
        $departments = Department::all();
        return view('admin.employee.edit', compact('employees', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'ename' => 'required',
            'fname' => 'required',
            'edob' => 'required',
            'local_address' => 'required',
            'permanenet_address' => 'required',
            'phone' => 'required',
            'e_email' => 'required|email|regex:/(.*)@diu.edu\.bd/i',
            'e_pass' => 'required',
            'all_departments' => 'required',
            'e_designations' => 'required',
            'e_start_salary' => 'required',
            'e_joinDate' => 'required',
            'e_acc_number' => 'required',
        ]);
        $employees = Employee::find($id);
        if ($request->hasFile('e_image')) {
            $file = $request->file('e_image');
            $text = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $text;
            unlink('uploads/empPhotos/' . $employees->e_image);
            $file->move('uploads/empPhotos', $fileName);
        } else {
            $fileName = $employees->e_image;
        }
        $employees->e_image = $fileName;
        $employees->department_id = $request->all_departments;
        $employees->e_name = $request->ename;
        $employees->e_father_name = $request->fname;
        $employees->e_dob = $request->edob;
        $employees->e_local_address = $request->local_address;
        $employees->e_permanent_address = $request->permanenet_address;
        $employees->e_phone = $request->phone;
        $employees->e_mail = $request->e_email;
        $employees->e_pass = $request->e_pass;
        $employees->e_department = $request->all_departments;
        $employees->e_designation = $request->e_designations;
        $employees->e_join_date = $request->e_joinDate;
        $employees->e_salary = $request->e_start_salary;
        $employees->e_account_number = $request->e_acc_number;
        $employees->save();

        return redirect()->route('employee.index')->with('successMsg', 'New employee data updated success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employees = Employee::find($id);
        $employees->delete();
        return redirect()->back()->with('successMsg', 'New employee data deleted');

    }
}
