<div class="container">
    <nav class="navbar navbar-expand-lg py-3">
        <div class="container-fluid">
            {{-- <a class="navbar-brand logo" href="#">Karmura<span class="text-danger">Movie</span></a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                            </a>

                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                            </ul>

                        </li>

                    </ul>

                    <div class="dropdown">
                        <div class="dropdown-toggle profile" data-bs-toggle="dropdown" aria-expanded="false">

                        </div>

                        <ul class="dropdown-menu profileDD">
                        <li><a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </li>
                        </ul>

                    </div>

            </div>
        </div>
      </nav>
</div>
