@extends('admin.dashboard')

@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="py-3 movieheader">
                    <h3 class="ms-3">Edit Movies</h3>
                    <a href="{{ route('admin.listMovie') }}" class="btn btn-primary float-end me-3">< Back</a>
                </div>
            </div>

            <div class="col-md-12">
                <form action="{{ route('admin.storeMovie') }}" method="POST" class="createform" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="title"><h4>Movie Title</h4></label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="{{ $movies->title }}" />
                    </div>

                    {{-- <div class="form-group">
                        <label for="tag"><h4>Movie Tags</h4></label>
                        <select name="tag" id="tag" class="form-control" />
                            <option disabled selected>Select Movie Tags</option>
                            <option value="1">Action</option>
                        </select>
                    </div> --}}

                    <div class="form-group">
                        <label for="image"><h4>Movie Cover Image</h4></label>
                        @foreach ($movies->images as $image)
                            <img src="/asset/image/{{ $image->image }}" class="d-block my-3 image" alt="{{ $image->image }}" />
                        @endforeach
                        <input type="file" name="image" id="image" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="description"><h4>Movie Description</h4></label>
                        <textarea name="description" id="description" class="form-control" rows="10"  placeholder="{{ $movies->description }}"></textarea>
                    </div>

                    {{-- <div class="form-group">
                        <label for="video"><h4>Movie Cover Video</h4></label>
                        <input type="file" name="video" id="video" class="form-control" />
                    </div> --}}

                    <div class="form-group mt-5">
                        <button type="submit" class="btn btn-success form-control fw-bold py-3">Create Movie</button>
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection
