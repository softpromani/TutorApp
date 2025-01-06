@include('admin.includes.layout')
@section('content')

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Subject</a>
        </div>
    </nav>
    <h1 class="text-center">Subject</h1>


    <div class="container card">
        <div class="card-body">
            <form
                action="{{ isset($editsubject) ? route('admin.subject.update', $editsubject->id) : route('admin.subject.store') }}"
                method="POST">
                @csrf
                @isset($editsubject)
                @method('PATCH')
                @endisset
                <div class="row">
                    <div class="mb-3 col-6">
                        <div class="input-group">
                            <input type="text" class="form-control" id="subjectname" name="subject_name" placeholder="Enter your subject name"
                                value="{{ isset($editsubject) ? $editsubject->subject_name : '' }}">
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" id="subjectcode" name="subject_code" placeholder="Enter your subject code"
                                value="{{ isset($editsubject) ? $editsubject->subject_code : '' }}">
                        </div>
                        <button type="submit" class="btn btn-primary">{{ isset($editsubject) ? 'Update' :
                            'Submit'}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>




    <div class="container mt-5 card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SrNo</th>
                        <th scope="col">Subject Name</th>
                        <th scope="col">Subject Code</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($subjects as $subject)
                    <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{ $subject->subject_name ?? 'N/A' }}</td>
                        <td>{{ $subject-subject_code ?? 'N/A' }}</td>
                        <td>{{ $subject->status ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('admin.subject.edit', $subject->id) }}" class="btn btn-primary"
                                href="#">Edit</a>

                            <form action="{{ route('admin.subject.destroy', $subject->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this subject?')">
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
</body>
@endsection
