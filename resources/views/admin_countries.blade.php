@extends('layout.admin')

@section('title')
    ADMIN
@endsection

@section('admin_content')
    <div class="row">
        <div class="col-9">
            <h4>Countries</h4>
        </div>
        <div class="col-3">
            <button type="button" class="btn btn-dark w-100" data-toggle="modal" data-target="#staticBackdrop">
                + Add
            </button>
        </div>
    </div>

    <table class="table mt-4">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">EDIT</th>
        </tr>
        </thead>
        <tbody>
        @foreach($countries as $country)
            <tr>
                <th scope="row">{{ $country->id }}</th>
                <td>{{ $country->name }}</td>
                <td><a type="button" href="" class="btn btn-dark"><i class="fas fa-edit"></i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Country</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin_countries') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Country name</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
