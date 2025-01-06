@include('admin.includes.layout')
@section('content')

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">City</a>
        </div>
    </nav>
    <h1 class="text-center">City</h1>


    <div class="container card">
        <div class="card-body">
            <form
                action="{{ isset($editcity) ? route('admin.city.update', $editcity->id) : route('admin.city.store') }}"
                method="POST">
                @csrf
                @isset($editcity)
                @method('PATCH')
                @endisset
                <div class="row">
                    <div class="mb-3 col-6">
                        <div class="input-group">
                            <input type="text" class="form-control" id="cityname" name="city_name" placeholder="Enter your city name"
                                value="{{ isset($editcity) ? $editcity->city_name : '' }}">
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" id="stateid" name="state_id" placeholder="Enter your state_id"
                                value="{{ isset($editcity) ? $editcity->state_id : '' }}">
                        </div>
                        <div class="input-group">
                            <input type="number" class="form-control" id="pin_code" name="pin_code" placeholder="Enter your pin code"
                                value="{{ isset($editcity) ? $editcity->pin_code : '' }}">
                        </div>
                        <button type="submit" class="btn btn-primary">{{ isset($editcity) ? 'Update' :
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
                        <th scope="col">City Name</th>
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
                        <td>{{ $city->city_name ?? 'N/A' }}</td>
                        <td>{{ $city-state_id ?? 'N/A' }}</td>
                        <td>{{ $city->pin_code ?? 'N/A' }}</td>
                        <td>{{ $city->status ?? 'N/A' }}</td>
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
</body>
@endsection
