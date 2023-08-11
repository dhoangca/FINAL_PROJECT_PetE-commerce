<!-- header -->
@INCLUDE('Front_end.Layouts.header')

<!-- Topbar -->
@INCLUDE('Front_end.Layouts.topbar')

<!-- navbar -->
@INCLUDE('Front_end.Layouts.navbar')

{{-- @section('content_index') --}}

<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Shop</a>
                <span class="breadcrumb-item active">Purchase Order</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Cart Start -->
<div class="container-fluid">
    <div class="row px-xl-5">

        <div class="col-lg-8">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0 d-flex justify-content-between w-100">
                        <a href="{{ route('Clients.purchaseorder', 'all') }}"
                            class="nav-item nav-link {{ $status === 'all' ? 'active' : '' }}">Tất cả</a>
                        <a href="{{ route('Clients.purchaseorder', '1') }}"
                            class="nav-item nav-link {{ $status === '1' ? 'active' : '' }}">Chờ thanh toán</a>
                        <a href="{{ route('Clients.purchaseorder', '2') }}"
                            class="nav-item nav-link {{ $status === '2' ? 'active' : '' }}">Vận chuyển</a>
                        <a href="{{ route('Clients.purchaseorder', '3') }}"
                            class="nav-item nav-link {{ $status === '3' ? 'active' : '' }}">Đang giao</a>
                        <a href="{{ route('Clients.purchaseorder', '4') }}"
                            class="nav-item nav-link {{ $status === '4' ? 'active' : '' }}">Hoàn thành</a>
                        <a href="{{ route('Clients.purchaseorder', '5') }}"
                            class="nav-item nav-link {{ $status === '5' ? 'active' : '' }}">Đã hủy</a>
                        <a href="{{ route('Clients.purchaseorder', '6') }}"
                            class="nav-item nav-link {{ $status === '6' ? 'active' : '' }}">Trả hàng/Hoàn tiền</a>
                    </div>
                </div>
            </nav>
        </div>
        <br>
        <!-- Khoảng cách nhỏ -->
        <div style="margin-bottom: 10px;"></div>

        <div class="col-lg-8">
            <nav class="bg-light p-3">
                @if ($orders->isEmpty())
                    <div class="alert alert-info">
                        No orders available.
                    </div>
                @else
                    @foreach ($orders as $order)
                        <div class="card mb-3">
                            <div class="card-header">
                                Order #{{ $order->order_id }}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Order Items:</h5>
                                <ul class="list-group">
                                    @foreach ($order->items as $item)
                                        <li class="list-group-item">
                                            <p class="mb-1">Item Name: {{ $item->name }}</p>
                                            <p class="mb-1">Quantity: {{ $item->quantity }}</p>
                                            <p class="mb-0">Price: ${{ $item->price }}</p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                @endif
            </nav>
        </div>          

        <div class="col-lg-4">
            <h5 class="section-title position-relative text-uppercase mb-3"><span
                    class="bg-secondary pr-3">Information</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Name</h6>
                        <h6>{{ auth()->user()->name }}</h6>
                    </div>
                    <hr>
                    <div style="padding-left: 120px">
                        <div style="text-align: left">
                            <a href="#" style="text-decoration: none; text-align: center; color: #3D464D;">
                                <i class='fas fa-user-alt' style="margin-right: 8px;"></i>
                                <span> Tài khoản của tôi </span>
                            </a>
                        </div>
                        <br>
                        <div style="text-align: left">
                            <a href="#" style="text-decoration: none; text-align: center; color: #3D464D;">
                                <i class='fas fa-clipboard-list' style="margin-right: 12px;"></i>
                                <span>Đơn mua</span>
                            </a>
                        </div>
                        <br>
                        <div style="text-align: left">
                            <a href="#" style="text-decoration: none; text-align: center; color: #3D464D;">
                                <i class='fas fa-bell' style="margin-right: 8px;"></i>
                                <span>Thông báo</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="pt-2">
                    <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Chỉnh sửa thông tin</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->
{{-- @endsection --}}

<!-- footer -->
@INCLUDE('Front_end.Layouts.footer')

<!-- back to top -->
@INCLUDE('Front_end.Layouts.back_to_top')

<!-- JS -->
@INCLUDE('Front_end.Layouts.js')
