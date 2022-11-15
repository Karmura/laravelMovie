<!DOCTYPE html>
<html lang="en">
<head>
    <title>Movie Website Project</title>

    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('asset/css/admin.css') }}" />
</head>
<body>

    <div id="app">

        <div class="admin-container">
            @include('admin.adminNav.navbar')
        </div>

        <div class="admin-sidebar">
            @include('admin.adminNav.sidebar')
        </div>




        <main class="py-4">
            @yield('content')
        </main>


        {{-- @include('admin.adminNav.footer') --}}

    </div>




    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Custom JS -->
    <script src="{{ asset('asset/js/admin.js') }}"></script>
</body>
</html>
