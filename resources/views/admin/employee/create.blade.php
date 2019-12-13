@extends('layouts.app')

@section('title','Create')

@push('css')

@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
        <form method="POST" action="{{ route('employee.store') }}" enctype="multipart/form-data">
            @csrf
            @include('layouts.partial.msg')
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content">
                            <h4 class="text-primary">Personal Details</h4>
                            <hr>
                            <div class="">
                                <label class="control-label">Image</label>
                                <input type="file" name="e_image">
                                <p>Image < 2MB</p> </div> <br>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Employee Name</label>
                                            <input type="text" class="form-control" name="ename">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Father Name</label>
                                            <input type="text" class="form-control" name="fname">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Date of Birth</label>
                                            <input type="date" class="form-control" name="edob">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Local Address</label>
                                            <input type="text" class="form-control" name="local_address">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Permanenet Address</label>
                                            <input type="text" class="form-control" name="permanenet_address">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Phone</label>
                                            <input type="text" class="form-control" name="phone">
                                        </div>
                                        <h4 class="text-primary">Account Login</h4>
                                        <hr>
                                        <div class="form-group label-floating">
                                            <label class="control-label" for="email">Email</label>
                                            <input type="text" id="email" class="form-control" name="e_email" required>
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Password</label>
                                            <input type="text" class="form-control" name="e_pass">
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
                                        <option value="{{$department->id}}">{{$department->d_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Designation</label>
                                    <input type="text" class="form-control" name="e_designations">
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Salary</label>
                                    <input type="text" class="form-control" name="e_start_salary">
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Join Date</label>
                                    <input type="date" class="form-control" name="e_joinDate">
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Account Number</label>
                                    <input type="text" class="form-control" name="e_acc_number">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('employee.index') }}" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection

@push('scripts')

@endpush
