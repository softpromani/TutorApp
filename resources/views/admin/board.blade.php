@include('admin.includes.layout')
@section('content')

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Board</a>
        </div>
    </nav>
    <h1 class="text-center">Board</h1>


    <div class="container card">
        <div class="card-body">
            <form
                action="{{ isset($editboard) ? route('admin.board.update', $editboard->id) : route('admin.board.store') }}"
                method="POST">
                @csrf
                @isset($editboard)
                @method('PATCH')
                @endisset
                <div class="row">
                    <div class="mb-3 col-6">
                        <div class="input-group">
                            <input type="text" class="form-control" id="boardname" name="board_name" placeholder="Enter your board_name"
                                value="{{ isset($editboard) ? $editboard->board_name : '' }}">
                        </div>

                        <button type="submit" class="btn btn-primary">{{ isset($editboard) ? 'Update' :
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
                        <th scope="col">Board Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($boards as $board)
                    <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{ $board->board_name ?? 'N/A' }}</td>
                        <td>{{ $board->status ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('admin.board.edit', $board->id) }}" class="btn btn-primary"
                                href="#">Edit</a>

                            <form action="{{ route('admin.board.destroy', $board->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this board?')">
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
