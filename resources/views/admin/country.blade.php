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
                    <form action="{{ isset($editcountry) ? route('admin.country.update', $editcountry->id) :
                        route('admin.country.store') }}" method="POST">
                        @csrf
                        @isset($editcountry)
                        @method('PATCH')
                        @endisset
                        <div class="row">
                            <div class="col-4 mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter your name"
                                    value="{{ isset($editcountry) ? $editcountry->name : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="phone-code">Phone Code</label>
                                <input type="text" class="form-control" id="phone-code" name="phone_code"
                                    placeholder="Enter your phone code"
                                    value="{{ isset($editcountry) ? $editcountry->phone_code : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="code">Code</label>
                                <input type="text" class="form-control" id="code" name="code"
                                    placeholder="Enter your code"
                                    value="{{ isset($editcountry) ? $editcountry->code : '' }}">
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
            <table class=" table">
                <thead>
                    <tr>
                        <th scope="col">Sr.No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone Code</th>
                        <th scope="col">Code</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($countries as $country)
                    <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{ $country->name ?? 'N/A' }}</td>
                        <td>{{ $country->phone_code ?? 'N/A' }}</td>
                        <td>{{ $country->code ?? 'N/A' }}</td>
                        <td>
                            <div class="switches-stacked">
                                <label class="switch switch-square">
                                    <input type="radio" class="switch-input" name="status" checked />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                </label>
                            </div>
                        </td>
                        <td>
                            <a href="{{ route('admin.country.edit', $country->id) }}" class="btn btn-primary"
                                href="#">Edit</a>

                            <form action="{{ route('admin.country.destroy', $country->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this country?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">No data found!</td>
                    </tr>

                    @endforelse

                </tbody>
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
