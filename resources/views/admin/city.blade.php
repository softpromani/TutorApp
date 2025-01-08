@extends('admin.includes.layout')
@section('title', 'City')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">City</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add City</h5>
                </div>
                <div class="card-body">
                    <form action="{{ isset($editcity) ? route('admin.city.update', $editcity->id) :
                        route('admin.city.store') }}" method="POST">
                        @csrf
                        @isset($editcity)
                        @method('PATCH')
                        @endisset
                        <div class="row">
                            <div class="col-4 mb-3">
                                <label class="form-label" for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city"
                                    placeholder="Enter your city"
                                    value="{{ isset($editcity) ? $editcity->city : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="stateid">State Id</label>
                                <input type="text" class="form-control" id="state_id" name="state_id"
                                    placeholder="Enter your state_id"
                                    value="{{ isset($editcity) ? $editcity->state_id : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="pincode">Pin Code</label>
                                <input type="text" class="form-control" id="pincode" name="pin_code"
                                    placeholder="Enter your pin_code"
                                    value="{{ isset($editcity) ? $editcity->pin_code : '' }}">
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
        <h5 class="card-header">City List</h5>
        <div class="card-datatable text-nowrap card-body">
            <table class=" table">
                <thead>
                    <tr>
                        <th scope="col">Sr.No</th>
                        <th scope="col">City</th>
                        <th scope="col">State Id</th>
                        <th scope="col">Pin Code</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>               
                    </tr>
                </thead>
                <tbody>
                    @forelse ($cities as $city)
                    <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{ $city->city ?? 'N/A' }}</td>
                        <td>{{ $city->state_id ?? 'N/A' }}</td>
                        <td>{{ $city->pin_code ?? 'N/A' }}</td>
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
                            <a href="{{ route('admin.city.edit', $city->id) }}" class="btn btn-primary"
                                href="#">Edit</a>

                            <form action="{{ route('admin.city.destroy', $city->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this city?')">
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
