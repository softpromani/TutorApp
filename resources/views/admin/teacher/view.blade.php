@extends('admin.includes.layout')
@section('title', 'Teacher')
@section('content')
<div class="card">
    <h5 class="card-header">Teacher List</h5>
    <div class="card-datatable text-nowrap card-body">
        <table class=" table">
            <thead>
                <tr>
                    <th scope="col">Sr.No</th>
                    <th scope="col">Teacher Id</th>
                    <th scope="col">Address</th>
                    <th scope="col">Country Id</th>
                    <th scope="col">State Id</th>
                    <th scope="col">City Id</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Alternate Phone</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($teachers as $teacher)
                <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $teacher->teacher_id ?? 'N/A' }}</td>
                    <td>{{ $teacher->address ?? 'N/A' }}</td>
                    <td>{{ $teacher->country_id ?? 'N/A' }}</td>
                    <td>{{ $teacher->state_id ?? 'N/A' }}</td>
                    <td>{{ $teacher->city_id ?? 'N/A' }}</td>
                    <td>{{ $teacher->phone ?? 'N/A' }}</td>
                    <td>{{ $teacher->alternate_phone ?? 'N/A' }}</td>
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
                        <a href="{{ route('admin.teacher.edit', $teacher->id) }}" class="btn btn-primary"
                            href="#">Edit</a>

                        <form action="{{ route('admin.teacher.destroy', $teacher->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this teacher?')">
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
