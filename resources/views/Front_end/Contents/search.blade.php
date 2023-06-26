<!-- header -->
@INCLUDE('Front_end.Layouts.header')

<!-- Topbar -->
@INCLUDE('Front_end.Layouts.topbar')

<!-- navbar -->
@INCLUDE('Front_end.Layouts.navbar')

<!-- Search product and pet-->

{{-- @section('content_index') --}}

<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Shop</a>
                <span class="breadcrumb-item active">Shop List</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Shop Start -->
<div class="container-fluid">
    <div class="row px-xl-5">

        <!-- Shop Sidebar Start -->
        @INCLUDE('Front_end.Layouts.shopsidebarstart')
        <!-- Shop Sidebar End -->


        <!-- Shop Product Start -->
        <div class="col-lg-9 col-md-8">
            <div class="row pb-3">
                <div class="col-12 pb-1">
                    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span
                        class="bg-secondary pr-3">Search Results</span>
                    </h2>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h5>Search Results for: "{{ $query }}"</h5>
                    </div>
                </div>

                {{-- ------------------ hiển thị sản phẩm ---------------- --}}
                
                @if ($petResults->isEmpty() && $productResults->isEmpty())
                    <p>No results found.</p>
                @elseif(!$petResults->isEmpty())
                    @foreach ($petResults as $pet)
                        <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    <div style="width: 350px; height: 300px; overflow: hidden;">
                                        <img src="{{ asset('Admin/img/' . $pet->image_url) }}"
                                            style="object-fit: cover; width: 100%; height: 100%;" alt="Image">
                                    </div>
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square" href=""><i
                                                class="fa fa-shopping-cart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i
                                                class="far fa-heart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i
                                                class="fa fa-sync-alt"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i
                                                class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate"
                                        href="">{{ $pet->name }}</a>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <h5>${{ $pet->price }}</h5>
                                        {{-- <h6 class="text-muted ml-2"><del>$123.00</del></h6> --}}
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small>(99)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @elseif(!$productResults->isEmpty())
                    @foreach ($productResults as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    <div style="width: 350px; height: 300px; overflow: hidden;">
                                        <img src="{{ asset('Admin/img/' . $product->image) }}"
                                            style="object-fit: cover; width: 100%; height: 100%;" alt="Image">
                                    </div>
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square" href=""><i
                                                class="fa fa-shopping-cart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i
                                                class="far fa-heart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i
                                                class="fa fa-sync-alt"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i
                                                class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate"
                                        href="">{{ $product->name }}</a>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <h5>${{ $product->price }}</h5>
                                        {{-- <h6 class="text-muted ml-2"><del>$123.00</del></h6> --}}
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small>(99)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                {{-- =================================================================================== --}}
                <div class="col-12">
                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</span></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Shop Product End -->
    </div>
</div>
<!-- Shop End -->
{{-- @endsection --}}

<!-- footer -->
@INCLUDE('Front_end.Layouts.footer')

<!-- back to top -->
@INCLUDE('Front_end.Layouts.back_to_top')

<!-- JS -->
@INCLUDE('Front_end.Layouts.js')
