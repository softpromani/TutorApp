@extends('admin.includes.layout')
@section('title', 'Subscription')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Subscription</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add Subscription</h5>
                </div>
                <div class="card-body">
                    <form action="{{ isset($editsubscription) ? route('admin.subscription.update', $editsubscription->id) :
                        route('admin.subscription.store') }}" method="POST">
                        @csrf
                        @isset($editsubscription)
                        @method('PATCH')
                        @endisset
                        <div class="row">
                            <div class="col-4 mb-3">
                                <label class="form-label" for="subscription">Subscription</label>
                                <input type="text" class="form-control" id="subscription" name="subscription"
                                    placeholder="Enter your subscription"
                                    value="{{ isset($editsubscription) ? $editsubscription->subscription : '' }}">
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
        <h5 class="card-header">Subscription List</h5>
        <div class="card-datatable text-nowrap card-body">
            <table class=" table">
                <thead>
                    <tr>
                        <th scope="col">Sr.No</th>
                        <th scope="col">Subscription</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($subscriptions as $subscription)
                    <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{ $subscription->subscription ?? 'N/A' }}</td>
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
                            <a href="{{ route('admin.subscription.edit', $subscription->id) }}" class="btn btn-primary"
                                href="#">Edit</a>

                            <form action="{{ route('admin.subscription.destroy', $subscription->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this subscription?')">
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
