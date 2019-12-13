@if(auth()->user()->role == 1)
<script>
    window.location.href = "/applyforleave";

</script>
@endif

@extends('layouts.app')

@section('title','dashboard')

@push('css')
@endpush
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">content_copy</i>
                        </div>
                        <p class="card-category">Total Department</p>
                        <h3 class="card-title">{{$departmentCount}}
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">store</i>
                        </div>
                        <p class="card-category">Total Employee</p>
                        <h3 class="card-title">{{$totalEmployeeCount}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">info_outline</i>
                        </div>
                        <p class="card-category">Application on queue</p>
                        <h3 class="card-title">{{$totalApplicationCount}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">local_offer</i> Tracked from Employee
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <p class="card-category">Browser info</p>
                        <h6 class="card-title">{{ $agent->platform()}}</h6>
                        <h6 class="card-title">version : {{$version = $agent->version($platform)}}</h6>
                        <h6 class="card-title">{{ $agent->browser()}}</h6>
                        <h6 class="card-title">{{ $version = $agent->version($browser)}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')

@endpush
