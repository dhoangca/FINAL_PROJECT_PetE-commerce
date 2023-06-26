    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse"
                    href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
                    id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        
                        
                        <a href="" class="nav-item nav-link">Chó Alaskan Malamute </a>
                        <a href="" class="nav-item nav-link">Chó Beagle </a>
                        <a href="" class="nav-item nav-link">Chó Corgis</a>
                        <a href="" class="nav-item nav-link">Chó Golden Retriever </a>
                        <a href="" class="nav-item nav-link">Chó Siberian Husky </a>
                        <a href="" class="nav-item nav-link">Chó Poodles </a>
                        <a href="" class="nav-item nav-link">Chó Pug </a>
                        <a href="" class="nav-item nav-link">Chó Samoyed </a>
                        <a href="" class="nav-item nav-link">Chó Husky America</a>
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Phụ kiện thú cưng <i
                                    class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Thức ăn cho chó </a>
                                <a href="" class="dropdown-item">Vòng cổ chuông cho chó</a>
                                <a href="" class="dropdown-item">Bát cho chó</a>
                                <a href="" class="dropdown-item">Cạo lông cho chó </a>
                            </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">G5</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{ asset('Clients') }}"
                                class="nav-item nav-link {{ request()->is('Clients') ? 'active' : '' }}">Home</a>
                            <div class="nav-item dropdown">
                                
                                {{-- <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages <i
                                            class="fa fa-angle-down mt-1"></i></a>
                                    <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                        <a href="{{ asset('Clients/Contents/cart') }}"
                                            class="dropdown-item {{ request()->is('Clients/Contents/cart') ? 'active' : '' }}">Shopping
                                            Cart</a>
                                        <a href="{{ asset('Clients/Contents/checkout') }}"
                                            class="dropdown-item {{ request()->is('Clients/Contents/checkout') ? 'active' : '' }}">Checkout</a>
                                    </div> --}}



                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pets <i
                                        class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="{{ asset('Clients/Contents/cart') }}"
                                        class="dropdown-item {{ request()->is('Clients/Contents/cart') ? 'active' : '' }}">Chó Alaska
                                        Malamute</a>
                                    <a href="{{ asset('Clients/Contents/checkout') }}"
                                        class="dropdown-item {{ request()->is('Clients/Contents/checkout') ? 'active' : '' }}">Chó
                                        Beagle</a>
                                    <a href="{{ asset('Clients/Contents/checkout') }}"
                                        class="dropdown-item {{ request()->is('Clients/Contents/checkout') ? 'active' : '' }}">Chó
                                        Corgi</a>
                                    <a href="{{ asset('Clients/Contents/checkout') }}"
                                        class="dropdown-item {{ request()->is('Clients/Contents/checkout') ? 'active' : '' }}">Chó Golden
                                        Retriever</a>
                                    <a href="{{ asset('Clients/Contents/checkout') }}"
                                        class="dropdown-item {{ request()->is('Clients/Contents/checkout') ? 'active' : '' }}">Chó Husky
                                        Siberian</a>
                                    <a href="{{ asset('Clients/Contents/checkout') }}"
                                        class="dropdown-item {{ request()->is('Clients/Contents/checkout') ? 'active' : '' }}">Chó Phốc
                                        Sóc - Pomeranian</a>
                                    <a href="{{ asset('Clients/Contents/checkout') }}"
                                        class="dropdown-item {{ request()->is('Clients/Contents/checkout') ? 'active' : '' }}">Chó
                                        Poodle</a>
                                    <a href="{{ asset('Clients/Contents/checkout') }}"
                                        class="dropdown-item {{ request()->is('Clients/Contents/checkout') ? 'active' : '' }}">Chó
                                        Pug</a>
                                    <a href="{{ asset('Clients/Contents/checkout') }}"
                                        class="dropdown-item {{ request()->is('Clients/Contents/checkout') ? 'active' : '' }}">Chó
                                        Samoyed</a>
                                    <hr>
                                    <a href="{{ asset('Clients/Contents/checkout') }}"
                                        class="dropdown-item {{ request()->is('Clients/Contents/checkout') ? 'active' : '' }}">Mèo Anh
                                        (Dài + Ngắn)</a>
                                    <a href="{{ asset('Clients/Contents/checkout') }}"
                                        class="dropdown-item {{ request()->is('Clients/Contents/checkout') ? 'active' : '' }}">Mèo Chân
                                        Ngắn</a>
                                    <a href="{{ asset('Clients/Contents/checkout') }}"
                                        class="dropdown-item {{ request()->is('Clients/Contents/checkout') ? 'active' : '' }}">Mèo Tai
                                        Cụp</a>
                                </div>
                            </div>
                            <a href="{{ asset('Clients/Contents/shop') }}"
                                class="nav-item nav-link {{ request()->is('Clients/Contents/shop') ? 'active' : '' }}">Pet
                                Accessories</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages <i
                                        class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="{{ asset('Clients/Contents/cart') }}"
                                        class="dropdown-item {{ request()->is('Clients/Contents/cart') ? 'active' : '' }}">Shopping
                                        Cart</a>
                                    <a href="{{ asset('Clients/Contents/checkout') }}"
                                        class="dropdown-item {{ request()->is('Clients/Contents/checkout') ? 'active' : '' }}">Checkout</a>
                                </div>
                            </div>
                            <a href="{{ asset('Clients/Contents/contact') }}"
                                class="nav-item nav-link {{ request()->is('Clients/Contents/contact') ? 'active' : '' }}">Contact</a>

                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle"
                                    style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle"
                                    style="padding-bottom: 2px;">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
