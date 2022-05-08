    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="navigation">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <strong class="text-light">BULLISH EXPERTS</strong>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/') }}" data-scroll-nav="0">Home</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('home') }}" data-scroll-nav="0">Dashboard</a>
                                    </li>
                                </ul>
                            </div>

                            @guest
                                <div class="signin-btn">
                                    <a class="btn btn-primary" href="{{ route('login') }}">Sign in</a>
                                </div>

                                <div class="signin-btn ml-2">
                                    <a class="btn btn-primary" href="{{ route('register') }}">Create Account</a>
                                </div>
                            @endguest
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
