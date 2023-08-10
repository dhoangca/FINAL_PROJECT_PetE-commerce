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
                <span class="breadcrumb-item active">Shopping Cart</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Cart Start -->
<div class="container-fluid">

    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th>Choose</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                {{-- show error --}}
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <tbody class="align-middle">
                    {{-- start --}}
                    @if (session('cart') && count(session('cart')) > 0)
                        @foreach (session('cart') as $item_id => $details)
                            <tr data-item-id="{{ $item_id }}" data-item-price="{{ $details['price'] }}">
                                <td class="align-middle" style="text-align: center; margin">
                                    <div class="form-check" style="margin-bottom: 11px; margin-left: 6px;">
                                        <input class="form-check-input select-item" type="checkbox"
                                            value="{{ $item_id }}" style="transform: scale(2);">
                                    </div>
                                </td>
                                <td class="align-middle">
                                    @if (isset($details['image']))
                                        <img src="{{ asset('Admin/img/' . $details['image']) }}" alt="Pet Image"
                                            style="width: 90px; height: 90px;">
                                    @else
                                        <p>No image available</p>
                                    @endif
                                </td>
                                <td class="align-middle">{{ $details['name'] }}</td>
                                <td class="align-middle" data-field="price">${{ $details['price'] }}</td>
                                <td class="align-middle" style="text-align: center; max-width: 130px;">
                                    <div class="input-group quantity">
                                        {{-- <div class="input-group-prepend">
                                            <button class="btn btn-primary btn-minus" type="button">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div> --}}
                                        <input type="number" style="width: 5px;"
                                            class="form-control form-control-sm bg-secondary border-0 text-center quantity-input"
                                            data-item-id="{{ $item_id }}" value="{{ $details['quantity'] }}">
                                        {{-- <div class="input-group-append">
                                            <button class="btn btn-primary btn-plus" type="button">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div> --}}
                                    </div>
                                </td>

                                {{-- Calculate total amount --}}
                                <td class="align-middle" id="total-{{ $item_id }}">
                                    ${{ $details['price'] * $details['quantity'] }}
                                </td>

                                <td class="align-middle">
                                    <form action="{{ route('Clients.deletecart', ['item_id' => $item_id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">Your cart is empty.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            {{-- <form class="mb-30" action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                            <div class="input-group-append">
                                <button class="btn btn-primary">Apply Coupon</button>
                            </div>
                        </div>
                    </form> --}}
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart
                    Summary</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Subtotal</h6>
                        <div class="total-amount" id="">
                            <h6>${{ number_format($totalAmount, 2) }}</h6>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">Free</h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2" class="total-amount">
                        <h5>Total</h5>
                        <h5>${{ number_format($totalAmount, 2) }}</h5>
                    </div>
                    {{-- <a href="{{ asset('Clients/Cart/checkout') }}" id=""
                                style="text-decoration: none">
                                <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To
                                    Checkout</button>
                            </a> --}}
                    <button id="checkout-btn" class="btn btn-block btn-primary font-weight-bold my-3 py-3">
                        Proceed To Checkout
                    </button>
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
