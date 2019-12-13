@extends('layouts.app')

@section('title','Edit')

@push('css')

@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
        <form action="{{route('employee.update',$employees->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content">
                            <h4 class="text-primary">Personal Details</h4>
                            <hr>
                            <div class="img_emp">
                                <label class="control-label">Image</label>
                                <img src="{{asset('uploads/empPhotos')}}/{{$employees->e_image}}" width="100"
                                    height="100">
                                <input type="file" name="e_image">
                                <p>Image < 2MB</p> </div> <br>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Employee Name</label>
                                            <input type="text" class="form-control" value="{{$employees->e_name}}"
                                                name="ename">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Father Name</label>
                                            <input type="text" class="form-control"
                                                value="{{$employees->e_father_name}}" name="fname">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Date of Birth</label>
                                            <input type="date" class="form-control" value="{{$employees->e_dob}}"
                                                name="edob">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Local Address</label>
                                            <input type="text" class="form-control"
                                                value="{{$employees->e_local_address}}" name="local_address">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Permanenet Address</label>
                                            <input type="text" class="form-control"
                                                value="{{$employees->e_permanent_address}}" name="permanenet_address">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Phone</label>
                                            <input type="text" class="form-control" value="{{$employees->e_phone}}"
                                                name="phone">
                                        </div>
                                        <h4 class="text-primary">Account Login</h4>
                                        <hr>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email</label>
                                            <input type="text" class="form-control" value="{{$employees->e_mail}}"
                                                name="e_email">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Password</label>
                                            <input type="text" class="form-control" value="{{$employees->e_pass}}"
                                                name="e_pass">
                                        </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-content">
                                <h4 class="text-primary">Company Details</h4>
                                <hr>
                                <div class="form-group label-floating">
                                    <label class="control-label">Department Name</label>
                                    <select class="form-control" name="all_departments">
                                        @foreach($departments as $department)
                                        <option {{ $department->id == $employees->department->id ? 'selected':'' }}
                                            value="{{ $department->id }}">{{ $department->d_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Designation</label>
                                    <input type="text" class="form-control" value="{{$employees->e_designation}}"
                                        name="e_designations">
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Salary</label>
                                    <input type="text" class="form-control" value="{{$employees->e_salary}}"
                                        name="e_start_salary">
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Join Date</label>
                                    <input type="date" class="form-control" value="{{$employees->e_join_date}}"
                                        name="e_joinDate">
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Account Number</label>
                                    <input type="text" class="form-control" value="{{$employees->e_account_number}}"
                                        name="e_acc_number">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('employee.index') }}" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection

@push('scripts')

@endpush
