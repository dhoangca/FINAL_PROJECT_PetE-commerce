    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="">About</a>
                    <a class="text-body mr-3" href="">Contact</a>
                    <a class="text-body mr-3" href="">Help</a>
                    <a class="text-body mr-3" href="">FAQs</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        @guest
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My
                                Account</button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{ route('Clients.Login') }}" class="text-decoration-none"><button
                                        class="dropdown-item" type="button"> Sign in </button></a>
                                <a href="{{ route('Clients.Register') }}" class="text-decoration-none"><button
                                        class="dropdown-item" type="button"> Sign up </button></a>
                                {{-- <button class="dropdown-item" type="button"><a href="{{ route('Clients.Register') }}"> Sign up </a></button> --}}
                            </div>
                        @else
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">
                                {{ Auth::user()->name }}
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="" class="text-decoration-none">
                                    <button class="dropdown-item" type="button">
                                        Profile
                                    </button>
                                </a>
                                <a href="" class="text-decoration-none">
                                    <button class="dropdown-item" type="button">
                                        Settings
                                    </button>
                                </a>
                                <form method="POST" action="{{ route('Clients.logout') }}">
                                    @csrf
                                    <a href="" onclick="event.preventDefault(); this.closest('form').submit();"
                                        class="text-decoration-none">
                                        <button class="dropdown-item" type="button">
                                            Logout
                                        </button>
                                    </a>
                                </form>
                            </div>
                        @endguest
                    </div>
                    <div class="btn-group mx-2">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                            data-toggle="dropdown">USD</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">EUR</button>
                            <button class="dropdown-item" type="button">GBP</button>
                            <button class="dropdown-item" type="button">CAD</button>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                            data-toggle="dropdown">EN</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">FR</button>
                            <button class="dropdown-item" type="button">AR</button>
                            <button class="dropdown-item" type="button">RU</button>
                        </div>
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle"
                            style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle"
                            style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="{{ asset('/') }}" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Pet</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">E-commerce</span>
                </a>
            </div>

            {{-- -----chức năng search----- --}}
            <div class="col-lg-4 col-6 text-left">
                <form role="search" method="get"  action="{{asset('Clients/Contents/search/')}}">
                    <div class="input-group">
                        <input type="text" class="form-control" name="query" placeholder="Search for products">
                        <div class="input-group-append">
                            <button type="submit" class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>   
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            {{-- =============================================== --}}

            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Customer Service</p>
                <h5 class="m-0">+012 345 6789</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
