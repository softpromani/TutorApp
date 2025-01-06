@include('admin.includes.layout')
@section('content')

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">State</a>
        </div>
    </nav>
    <h1 class="text-center">State</h1>


    <div class="container card">
        <div class="card-body">
            <form
                action="{{ isset($editstate) ? route('admin.state.update', $editstate->id) : route('admin.country.store') }}"
                method="POST">
                @csrf
                @isset($editstate)
                @method('PATCH')
                @endisset
                <div class="row">
                    <div class="mb-3 col-6">
                        <div class="input-group">
                            <input type="text" class="form-control" id="statename" name="state_name" placeholder="Enter your state name"
                                value="{{ isset($editstate) ? $editstate->state_name : '' }}">
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" id="countryid" name="country_id" placeholder="Enter your country_id"
                                value="{{ isset($editstate) ? $editstate->country_id : '' }}">
                        </div>
                        <button type="submit" class="btn btn-primary">{{ isset($editstate) ? 'Update' :
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
                        <th scope="col">State Name</th>
                        <th scope="col">Country Id</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($states as $state)
                    <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{ $state->state_name ?? 'N/A' }}</td>
                        <td>{{ $state->country_id ?? 'N/A' }}</td>
                        <td>{{ $state->status ?? 'N/A' }}</td>
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
</body>
@endsection
