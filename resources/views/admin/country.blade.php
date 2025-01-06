@include('admin.includes.layout')
@section('content')
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Country</a>
        </div>
    </nav>
    <h1 class="text-center">Country</h1>
    <div class="container card">
        <div class="card-body">
            <form
                action="{{ isset($editcountry) ? route('admin.country.update', $editcountry->id) : route('admin.country.store') }}"
                method="POST">
                @csrf
                @isset($editcountry)
                @method('PATCH')
                @endisset
                <div class="row">
                    <div class="mb-3 col-6">
                        <div class="input-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                                value="{{ isset($editcountry) ? $editcountry->name : '' }}">
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" id="code" name="code" placeholder="Enter your code"
                                value="{{ isset($editcountry) ? $editcountry->code : '' }}">
                        </div>
                        <div class="input-group">
                            <input type="number" class="form-control" id="phone_code" name="phone_code" placeholder="Enter your phone code"
                                value="{{ isset($editcountry) ? $editcountry->phone_code : '' }}">
                        </div>
                        <button type="submit" class="btn btn-primary">{{ isset($edituser) ? 'Update' :
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
                        <th scope="col">Name</th>
                        <th scope="col">Code</th>
                        <th scope="col">Phone Code</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($countries as $country)
                    <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{ $country->name ?? 'N/A' }}</td>
                        <td>{{ $country->code ?? 'N/A' }}</td>
                        <td>{{ $country->phone_code ?? 'N/A' }}</td>
                        <td>{{ $country->status ?? 'N/A' }}</td>
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
</body>
@endsection
