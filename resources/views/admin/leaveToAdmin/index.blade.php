@extends('layouts.app')

@section('title','application to admin')

@push('css')

@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">All Leave Application</h4>
                    </div>
                    <form action="" method="POST">
                        @csrf
                   &nbsp;&nbsp; <a href="{{route('report')}}" class="btn btn-primary">Get Report</a>
                    </form>
                    <div class="card-body">
                        @include('layouts.partial.msg')
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>Employee Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Leave date</th>
                                    <th>Application sended</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($applicationsToAdmin as $_applicationsToAdmin)
                                    <tr>
                                        <td>{{ $_applicationsToAdmin->e_l_name}}</td>
                                        <td>{{ $_applicationsToAdmin->e_l_email}}</td>
                                        <td>{{ $_applicationsToAdmin->e_l_phone}}</td>
                                        <td>{{date('d-M-y', strtotime($_applicationsToAdmin->e_l_leave_date))}}</td>
                                        <td>{{date('d-M-y', strtotime($_applicationsToAdmin->created_at))}}</td>
                                        <td>
                                            @if($_applicationsToAdmin->status == true)
                                            <span class="badge badge-success">Confirmed</span>
                                            @else
                                            <span class="badge badge-danger">Not Confirmed yet</span>
                                            @endif
                                        </td>

                                        <td>
                                            @if($_applicationsToAdmin->status == false)
                                            <form id="status-form-{{ $_applicationsToAdmin->id }}"
                                                action="{{ route('applicationToAdmin.status',$_applicationsToAdmin->id) }}"
                                                style="display: none;" method="POST">
                                                @csrf
                                            </form>
                                            <button type="button" class="btn btn-info btn-sm" onclick="if(confirm('Confirm Application')){
                                                            event.preventDefault();
                                                            document.getElementById('status-form-{{ $_applicationsToAdmin->id }}').submit();
                                                            }else {
                                                            event.preventDefault();
                                                            }"><i class="material-icons">done</i></button>
                                            @endif
                                            <form id="delete-form-{{ $_applicationsToAdmin->id }}"
                                                action="{{ route('applicationToAdmin.status.destory',$_applicationsToAdmin->id) }}"
                                                style="display: none;" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $_applicationsToAdmin->id }}').submit();
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
