@extends('layouts.app')

@section('title','Employee')

@push('css')

@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">All Employee</h4>
                    </div>
                    <div class="card-body">
                        @include('layouts.partial.msg')
                        <a href="{{route('employee.create')}}" class="btn btn-primary btn-sm">Add Employee</a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>Employee Name</th>
                                    <th>Photo</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Department</th>
                                    <th>At Work</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($employees as $key=>$employee)
                                    <tr>
                                        <td>{{ $employee->e_name }}</td>
                                        <td><img src="{{asset('uploads/empPhotos')}}/{{$employee->e_image}}" width="100"
                                                height="100"></td>
                                        <td>{{ $employee->e_local_address}}</td>
                                        <td>{{ $employee->e_phone}}</td>
                                        <td>{{ $employee->e_mail}}</td>
                                        <td>{{ $employee->department->d_name}}</td>
                                        <td>{{ $employee->e_join_date}}</td>
                                        <td>
                                            <a href="{{ route('employee.edit',$employee->id) }}"
                                                class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                            <form id="delete-form-{{ $employee->id }}"
                                                action="{{ route('employee.destroy',$employee->id) }}"
                                                style="display: none;" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $employee->id }}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><i class="material-icons">delete</i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')


@endpush
