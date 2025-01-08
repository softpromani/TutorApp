@extends('admin.includes.layout')
@section('title', 'Student')
@section('content')
<div class="card">
    <h5 class="card-header">Student List</h5>
    <div class="card-datatable text-nowrap card-body">
        <table class=" table">
            <thead>
                <tr>
                    <th scope="col">Sr.No</th>
                    <th scope="col">User Id</th>
                    <th scope="col">Address</th>
                    <th scope="col">Country Id</th>
                    <th scope="col">State Id</th>
                    <th scope="col">City Id</th>
                    <th scope="col">Board Id</th>
                    <th scope="col">Standard</th>
                    <th scope="col">Section</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Alternate Phone</th>
                    <th scope="col">Father Name</th>
                    <th scope="col">Mother Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $student->user_id ?? 'N/A' }}</td>
                    <td>{{ $student->address ?? 'N/A' }}</td>
                    <td>{{ $student->country_id ?? 'N/A' }}</td>
                    <td>{{ $student->state_id ?? 'N/A' }}</td>
                    <td>{{ $student->city_id ?? 'N/A' }}</td>
                    <td>{{ $student->board_id ?? 'N/A' }}</td>
                    <td>{{ $student->standard ?? 'N/A' }}</td>
                    <td>{{ $student->section ?? 'N/A' }}</td>
                    <td>{{ $student->phone ?? 'N/A' }}</td>
                    <td>{{ $student->alternate_phone ?? 'N/A' }}</td>
                    <td>{{ $student->father_name ?? 'N/A' }}</td>
                    <td>{{ $student->mother_name ?? 'N/A' }}</td>
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
                        <a href="{{ route('admin.student.edit', $student->id) }}" class="btn btn-primary"
                            href="#">Edit</a>

                        <form action="{{ route('admin.student.destroy', $student->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this student?')">
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
