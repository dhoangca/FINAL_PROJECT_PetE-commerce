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
                        @if ($category)
                            @foreach ($category as $key => $value)
                                @if ($value->type == 'pet')
                                    <a href="{{ asset('Clients/Contents/filtered-products-and-pets/' . $value->category_id) }}"
                                        class="nav-item nav-link">{{ $value->name }}</a>
                                @endif
                            @endforeach
                        @endif

                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Phụ kiện thú
                                cưng
                                <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                @foreach ($category as $key => $value)
                                    @if ($value->type == 'Accessory')
                                        <a href="{{ asset('Clients/Contents/filtered-products-and-pets/' . $value->category_id) }}"
                                            class="dropdown-item">{{ $value->name }}</a>
                                    @endif
                                @endforeach
                            </div>
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
                            <a href="{{ asset('/') }}"
                                class="nav-item nav-link {{ request()->is('/') ? 'active' : 'Home' }}">Home
                            </a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pets <i
                                    class="fa fa-angle-down mt-1"></i>
                                </a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    @foreach ($category as $key => $value)
                                    @if ($value->type == 'pet')
                                    <a href="{{ asset('Clients/Contents/filtered-products-and-pets/' . $value->category_id) }}"
                                        class="dropdown-item {{ request()->is('Clients/Contents/checkout') ? 'active' : '' }}">{{ $value->name }}
                                    </a>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                            <a href="{{ asset('Clients/Contents/shop') }}"
                                class="nav-item nav-link {{ request()->is('Clients/Contents/shop') ? 'active' : 'Products' }}">Products</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages <i
                                        class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="{{ asset('Clients/Cart/cart') }}"
                                        class="dropdown-item {{ request()->is('Clients/Cart/cart') ? 'active' : 'Shopping Cart' }}">Shopping
                                        Cart</a>
                                    <a href="{{ asset('Clients/Contents/checkout') }}"
                                        class="dropdown-item {{ request()->is('Clients/Contents/checkout') ? 'active' : 'Checkout' }}">Checkout</a>
                                </div>
                            </div>
                            <a href="{{ asset('Clients/Contents/contact') }}"
                                class="nav-item nav-link {{ request()->is('Clients/Contents/contact') ? 'active' : 'Contact' }}">Contact</a>

                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle"
                                    style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="{{ asset('Clients/Cart/cart') }}" class="btn px-0 ml-3" id="n">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" class="cart-count" style="padding-bottom: 2px;">{{ $cartCount }}</span>
                            </a>                            
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
