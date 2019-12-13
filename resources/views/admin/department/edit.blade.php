@extends('layouts.app')

@section('title','Edit')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Edit Department</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('department.update',$departments->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Department name</label>
                                            <input type="text" class="form-control" name="d_name" value="{{ $departments->d_name }}">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Designation</label>
                                            <input type="text" class="form-control" name="d_designation" value="{{ $departments->d_designation }}">
                                        </div>
                                    </div>
                                </div>

                                <a href="{{ route('department.index') }}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush