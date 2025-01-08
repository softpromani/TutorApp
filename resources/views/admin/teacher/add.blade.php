@extends('admin.includes.layout')
@section('title', 'Teacher')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Teacher</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add Teacher</h5>
                </div>
                <div class="card-body">
                    <form action="{{ isset($editteacher) ? route('admin.teacher.update', $editteacher->id) :
                        route('admin.teacher.store') }}" method="POST">
                        @csrf
                        @isset($editteacher)
                        @method('PATCH')
                        @endisset
                        <div class="row">
                            <div class="col-4 mb-3">
                                <label class="form-label" for="firstname">First Name</label>
                                <input type="text" class="form-control" id="firstname" name="first_name"
                                    placeholder="Enter your first_name" value="{{ isset($editteacher) ? $editteacher->first_name : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="lastname">Last Name</label>
                                <input type="text" class="form-control" id="lastname" name="last_name"
                                    placeholder="Enter your last_name" value="{{ isset($editteacher) ? $editteacher->last_name : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter your email"
                                    value="{{ isset($editteacher) ? $editteacher->email : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="Enter your address"
                                    value="{{ isset($editteacher) ? $editteacher->address : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="country_id">Country Id</label>
                                <input type="text" class="form-control" id="countryid" name="country_id"
                                    placeholder="Enter your country_id"
                                    value="{{ isset($editteacher) ? $editteacher->country_id : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="stateid">State Id</label>
                                <input type="text" class="form-control" id="stateid" name="state_id"
                                    placeholder="Enter your state_id"
                                    value="{{ isset($editteacher) ? $editteacher->state_id : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="city_id">City Id</label>
                                <input type="text" class="form-control" id="city_id" name="city_id"
                                    placeholder="Enter your city_id"
                                    value="{{ isset($editteacher) ? $editteacher->city_id : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="phone">Phone</label>
                                <input type="number" class="form-control" id="phone" name="phone"
                                    placeholder="Enter your phone"
                                    value="{{ isset($editteacher) ? $editteacher->phone : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="alternatephone">Ulternate Phone</label>
                                <input type="number" class="form-control" id="alternatephone" name="alternate_phone"
                                    placeholder="Enter your alternate phone"
                                    value="{{ isset($editteacher) ? $editteacher->alternate_phone : '' }}">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
