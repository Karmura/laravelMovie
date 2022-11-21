@extends('admin.dashboard')

@section('content')
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

                        @foreach ($movies as $movie)
                        <tr>
                            <th scope="col">{{ $movie->id }}</th>
                            <td>{{ $movie->title }}</td>
                            <td>Action</td>
                            @foreach ($movie->images as $image)
                            <td>
                                <img src="/asset/image/{{ $image->image }}" alt="" class="image" />
                            </td>
                            @endforeach
                            <td>{{ $movie->description }}</td>
                            <td>
                                <a href="/admin/editMovie/{{ $movie->id }}" class="btn btn-sm btn-success mb-2">Edit</a>

                                <form action="/admin/deleteMovie/{{ $movie->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm mb-2" onclick="return confirm('Are you sure?');">Delete</button>
                                </form>

                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
@endsection
