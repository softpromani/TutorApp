@extends('admin.includes.layout')
@section('title', 'Country')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Country</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Add Country</h5>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-4 mb-3">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name" />
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="form-label" for="phone-code">Phone Code</label>
                                    <input type="text" class="form-control" id="phone-code" placeholder="Phone Code" />
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="form-label" for="code">Code</label>
                                    <input type="text" class="form-control" id="code" placeholder="Code" />
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ajax Sourced Server-side -->
        <div class="card">
            <h5 class="card-header">Country List</h5>
            <div class="card-datatable text-nowrap card-body">
                <table class="datatables-ajax table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone Code</th>
                            <th>Code</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <!--/ Ajax Sourced Server-side -->

    </div>

@endsection
@section('script-area')
    <!-- Page JS -->
    <script src="{{ asset('assets/js/tables-datatables-advanced.js') }}"></script>
@endsection
