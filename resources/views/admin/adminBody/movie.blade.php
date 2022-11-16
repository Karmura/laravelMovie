@extends('admin.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="py-3 movieheader">
                    <h3 class="ms-3">Add Movies</h3>
                    <a href="{{ route('admin.createMovie') }}" class="btn btn-primary float-end me-3">+ Add Movie</a>
                </div>
            </div>
            <div class="col-md-12">
                <table class="table table-dark table-striped table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Cateory</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="col">1</th>
                            <td>Movie 1</td>
                            <td>Action</td>
                            <td>
                                <div class="image" style="background: ;"></div>
                            </td>
                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</td>
                            <td>
                                <a href="{{ route('admin.editMovie') }}" class="btn btn-sm btn-success mb-2">Edit</a>
                                <a href="" class="btn btn-sm btn-danger mb-2">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
