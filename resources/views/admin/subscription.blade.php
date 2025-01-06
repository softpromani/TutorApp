@include('admin.includes.layout')
@section('content')

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Subscription</a>
        </div>
    </nav>
    <h1 class="text-center">Subscription</h1>


    <div class="container card">
        <div class="card-body">
            <form
                action="{{ isset($editsubscription) ? route('admin.subscription.update', $editsubscription->id) : route('admin.subscription.store') }}"
                method="POST">
                @csrf
                @isset($editsubscription)
                @method('PATCH')
                @endisset
                <div class="row">
                    <div class="mb-3 col-6">
                        <div class="input-group">
                            <input type="text" class="form-control" id="subscriptionname" name="subscription_name" placeholder="Enter your subscription name"
                                value="{{ isset($editsubscription) ? $editsubscription->subscription_name : '' }}">
                        </div>
                        <button type="submit" class="btn btn-primary">{{ isset($editsubscription) ? 'Update' :
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
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($subscriptions as $subscription)
                    <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{ $subscription->name ?? 'N/A' }}</td>
                        <td>{{ $subscription->status ?? 'N/A' }}</td>
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
</body>
@endsection
