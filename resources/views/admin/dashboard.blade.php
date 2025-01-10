@extends('admin.includes.layout')
@section('title','Dashboard')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    {{-- <h4 class="fw-bold py-3 mb-4">Dashboard</h4> --}}
<div class="row">
    <div class="col-xl-4 col-md-8 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center" style="position: relative;">
                    <div class="d-flex flex-column">
                        <div class="card-title mb-auto">
                            <h5 class="mb-1 text-nowrap">Total Tutors</h5>
                        </div>
                        <div class="chart-statistics">
                            <h3 class="card-title mb-1">107</h3>
                        </div>
                        <a class="btn btn-primary bg-white text-dark">View List</a>
                    </div>
                    <div>
                        <img src="{{ asset('assets/img/icons/misc/tutors.png') }}" alt="Image" style="max-width: 100px; height: auto; object-fit: contain;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-8 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center" style="position: relative;">
                    <div class="d-flex flex-column">
                        <div class="card-title mb-auto">
                            <h5 class="mb-1 text-nowrap">Total Students</h5>
                        </div>
                        <div class="chart-statistics">
                            <h3 class="card-title mb-1">107</h3>
                        </div>
                        <a class="btn btn-primary bg-white text-dark">View List</a>
                    </div>
                    <div>
                        <img src="{{ asset('assets/img/icons/misc/students.png') }}" alt="Image" style="max-width: 100px; height: auto; object-fit: contain;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-8 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center" style="position: relative;">
                    <div class="d-flex flex-column">
                        <div class="card-title mb-auto">
                            <h5 class="mb-1 text-nowrap">Subscription Analytics</h5>
                        </div>
                        <div class="chart-statistics">
                            <h3 class="card-title mb-1">107</h3>
                        </div>
                        <a class="btn btn-primary bg-white text-dark">View Analytics</a>
                    </div>
                    <div>
                        <img src="{{ asset('assets/img/icons/misc/analytics.png') }}" alt="Image" style="max-width: 100px; height: auto; object-fit: contain;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
@endsection
