@extends('admin.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="py-3 movieheader">
                <h3 class="m-auto">Create Tags</h3>
            </div>
        </div>

        <div class="col-md-12">
            <form action="" method="">
                <div class="form-group">
                    <label for=""></label>
                </div>
            </form>
        </div>

        <div class="col-md-12">
            <form action="{{ route('admin.createTag') }}" method="POST" class="mb-5">
                @csrf
                <div class="form-group mb-3">
                    <label for="tag" class="mb-2"><h3>Add Tag</h3></label>
                    <input type="text" name="tagname" id="tagname" class="form-control" placeholder="Enter the tag name that you want to give" />
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success form-control">Submit</button>
                </div>

            </form>

            @if (Session::has('success'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @endif

            <table class="table table-bordered table-striped table-hover table-dark mt-5">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Tag name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @forelse ($tags as $tag)
                    <tbody>
                        <tr>
                            <th class="text-center">{{ $tag->id }}</th>
                            <td class="text-center">{{ $tag->tagname }}</td>
                            <td>
                                <a href="/admin/editTag/{{ $tag->id }}" class="btn btn-info btn-sm me-2">Edit</a>
                                <a href="/admin/deleteTag/{{ $tag->id }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <h2 class="mt-4 text-center text-danger">!!No tag created yet!!</h2>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

@endsection
