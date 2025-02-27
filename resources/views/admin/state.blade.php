@extends('admin.includes.layout')
@section('title', 'State')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">State</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add State</h5>
                </div>
                <div class="card-body">
                    <form action="{{ isset($editstate) ? route('admin.state.update', $editstate->id) :
                        route('admin.state.store') }}" method="POST">
                        @csrf
                        @isset($editstate)
                        @method('PATCH')
                        @endisset
                        <div class="row">
                            <div class="col-4 mb-3">
                                <label class="form-label" for="state">State</label>
                                <input type="text" class="form-control" id="state" name="state"
                                    placeholder="Enter your state"
                                    value="{{ isset($editstate) ? $editstate->state : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="countryid">Country Id</label>
                                <input type="text" class="form-control" id="countryid" name="country_id"
                                    placeholder="Enter your country_id"
                                    value="{{ isset($editstate) ? $editstate->country_id : '' }}">
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
        <h5 class="card-header">State List</h5>
        <div class="card-datatable text-nowrap card-body">
            <table class=" table">
                <thead>
                    <tr>
                        <th scope="col">Sr.No</th>
                        <th scope="col">State</th>
                        <th scope="col">Country Id</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($states as $state)
                    <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{ $state->state ?? 'N/A' }}</td>
                        <td>{{ $state->country_id ?? 'N/A' }}</td>
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
                            <a href="{{ route('admin.state.edit', $state->id) }}" class="btn btn-primary"
                                href="#">Edit</a>

                            <form action="{{ route('admin.state.destroy', $state->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this state?')">
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
