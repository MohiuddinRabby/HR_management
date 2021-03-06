@extends('layouts.app')

@section('title','Create')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header" data-background-color="purple"> <h4>Add Department</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('department.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Department Name</label>
                                            <input type="text" class="form-control" name="d_name">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Designation</label>
                                            <input type="text" class="form-control" name="d_designation">
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('department.index') }}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>
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