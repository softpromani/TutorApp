@extends('admin.includes.layout')
@section('title', 'Student')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Student</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add Student</h5>
                </div>
                <div class="card-body">
                    <form action="{{ isset($editstudent) ? route('admin.student.update', $editstudent->id) :
                        route('admin.student.store') }}" method="POST">
                        @csrf
                        @isset($editstudent)
                        @method('PATCH')
                        @endisset
                        <div class="row">
                            <div class="col-4 mb-3">
                                <label class="form-label" for="firstname">First Name</label>
                                <input type="text" class="form-control" id="firstname" name="first_name"
                                    placeholder="Enter your first_name" value="{{ isset($editstudent) ? $editstudent->first_name : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="lastname">Last Name</label>
                                <input type="text" class="form-control" id="lastname" name="last_name"
                                    placeholder="Enter your last_name" value="{{ isset($editstudent) ? $editstudent->last_name : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter your email"
                                    value="{{ isset($editstudent) ? $editstudent->email : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="Enter your address"
                                    value="{{ isset($editstudent) ? $editstudent->address : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="country_id">Country Id</label>
                                <input type="text" class="form-control" id="countryid" name="country_id"
                                    placeholder="Enter your country_id"
                                    value="{{ isset($editstudent) ? $editstudent->country_id : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="stateid">State Id</label>
                                <input type="text" class="form-control" id="stateid" name="state_id"
                                    placeholder="Enter your state_id"
                                    value="{{ isset($editstudent) ? $editstudent->state_id : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="city_id">City Id</label>
                                <input type="text" class="form-control" id="city_id" name="city_id"
                                    placeholder="Enter your city_id"
                                    value="{{ isset($editstudent) ? $editstudent->city_id : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="boardid">Board Id</label>
                                <input type="text" class="form-control" id="boardid" name="board_id"
                                    placeholder="Enter your board_id"
                                    value="{{ isset($editstudent) ? $editstudent->board_id : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="standard">Standard</label>
                                <input type="text" class="form-control" id="standard" name="standard"
                                    placeholder="Enter your standard"
                                    value="{{ isset($editstudent) ? $editstudent->standard : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="section">Section</label>
                                <input type="text" class="form-control" id="section" name="section"
                                    placeholder="Enter your section"
                                    value="{{ isset($editstudent) ? $editstudent->section : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="phone">Phone</label>
                                <input type="number" class="form-control" id="phone" name="phone"
                                    placeholder="Enter your phone"
                                    value="{{ isset($editstudent) ? $editstudent->phone : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="alternatephone">Alternate Phone</label>
                                <input type="number" class="form-control" id="alternatephone" name="alternate_phone"
                                    placeholder="Enter your alternate phone"
                                    value="{{ isset($editstudent) ? $editstudent->alternate_phone : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="father_name">Father Name</label>
                                <input type="text" class="form-control" id="father_name" name="father_name"
                                    placeholder="Enter your father_name"
                                    value="{{ isset($editstudent) ? $editstudent->father_name : '' }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="mother_name">Mother Name</label>
                                <input type="text" class="form-control" id="mother_name" name="mother_name"
                                    placeholder="Enter your mother_name"
                                    value="{{ isset($editstudent) ? $editstudent->mother_name : '' }}">
                            </div>
                           
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
