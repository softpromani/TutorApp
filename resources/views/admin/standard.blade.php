@include('admin.includes.layout')
@section('content')

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Standard</a>
        </div>
    </nav>
    <h1 class="text-center">Standard</h1>


    <div class="container card">
        <div class="card-body">
            <form
                action="{{ isset($editstandard) ? route('admin.standard.update', $editstandard->id) : route('admin.standard.store') }}"
                method="POST">
                @csrf
                @isset($editstandard)
                @method('PATCH')
                @endisset
                <div class="row">
                    <div class="mb-3 col-6">
                        <div class="input-group">
                            <input type="text" class="form-control" id="standardname" name="standard_name" placeholder="Enter your standard name"
                                value="{{ isset($editstandard) ? $editstandard->standard_name : '' }}">
                        </div>

                        <button type="submit" class="btn btn-primary">{{ isset($editstandard) ? 'Update' :
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
                        <th scope="col">Standard Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($standards as $standard)
                    <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{ $standard->standard_name ?? 'N/A' }}</td>
                        <td>{{ $standard->status ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('admin.standard.edit', $standard->id) }}" class="btn btn-primary"
                                href="#">Edit</a>

                            <form action="{{ route('admin.standard.destroy', $standard->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this standard?')">
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
