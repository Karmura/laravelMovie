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

            @if (Session::has('success'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @endif

                <form action="/admin/updateTag/{{ $tags->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="tag" class="mb-2"><h3>Edit Tag</h3></label>
                        <input type="text" name="tagname" id="tagname" class="form-control" value="{{ $tags->tagname }}" />
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success form-control">Submit</button>
                    </div>

                </form>

        </div>

    </div>

@endsection
