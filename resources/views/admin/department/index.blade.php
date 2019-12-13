@extends('layouts.app')

@section('title','Department')

@push('css')

@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Department</h4>
                    </div>
                    <div class="card-body">
                    @include('layouts.partial.msg')
                        <a href="{{route('department.create')}}" class="btn btn-primary btn-sm">Add Department</a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th> ID</th>
                                    <th>Department Name</th>
                                    <th>Designation</th>
                                    <th>Department create</th>
                                    <th>Last Updated</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                @foreach($departments as $key=>$department)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $department->d_name }}</td>
                                    <td>{{ $department->d_designation }}</td>
                                    <td>{{ $department->created_at->toDateString()}}</td>
                                    <td>{{ $department->updated_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('department.edit',$department->id) }}"
                                            class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                        <form id="delete-form-{{ $department->id }}"
                                            action="{{ route('department.destroy',$department->id) }}"
                                            style="display: none;" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $department->id }}').submit();
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
