@extends('admin.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="py-3 movieheader">
                <h3 class="ms-3">Create Tags</h3>
                <a href="{{ route('admin.createTag') }}" class="btn btn-primary float-end me-3">+ Add Tag</a>
            </div>
        </div>

        <div class="col-md-12">
            <form action="" method="">
                <div class="form-group">
                    <label for=""></label>
                </div>
            </form>
        </div>
    </div>

@endsection
