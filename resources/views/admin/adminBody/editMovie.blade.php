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



        </div>
    </div>

@endsection
