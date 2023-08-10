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
                <span class="breadcrumb-item active">Checkout</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

@if (session('success'))
    <div id="floating-message" class="floating-message">
        {{ session('success') }}
    </div>
@endif
<!-- Checkout Start -->
<div class="container-fluid">
    <form method="post" action="{{ route('Clients.placeOrder') }}">
        @csrf
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Billing
                        Address</span></h5>
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @error('selected_items')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input class="form-control" type="text" id="name" name="name"
                                value="{{ auth()->user()->name }}" placeholder="Your First Name">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input class="form-control" type="text" id="name" name=""
                                value="{{ auth()->user()->name }}" placeholder="Your Last Name">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" id="email" name="email"
                                value="{{ auth()->user()->email }}" placeholder="Your Email">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text" id="phone_number" name="phone_number"
                                value="{{ auth()->user()->phone_number }}" placeholder="Your Phone Number">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 1</label>
                            <input class="form-control" type="text" id="address" name="address"
                                value="{{ auth()->user()->address }}" placeholder="Your Adress">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 2</label>
                            <input class="form-control" type="text" id="address_2" name="address_2"
                                placeholder="Can be left blank">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order
                        Total</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        <h6 class="mb-3">Products</h6>
                        {{-- call products and pet to checkout --}}
                        @if ($selectedCartItems && count($selectedCartItems) > 0)
                            @php
                                $totalAmount = 0; // Initialize the total amount variable
                            @endphp
                            <div class="container" style="text-align: center">
                                {{-- <div class="row">
                                    <div class="col-md-4"><strong>Name</strong></div>
                                    <div class="col-md-4 text-center"><strong>Quantity</strong></div>
                                    <div class="col-md-4 text-right"><strong>Price</strong></div>
                                </div> --}}
                                @foreach ($selectedCartItems as $item_id => $details)
                                    <div class="row">
                                        <div class="col-md-4">{{ $details['name'] }}</div>
                                        <div class="col-md-4 text-center">{{ $details['quantity'] }}x</div>
                                        <div class="col-md-4 text-right">${{ $details['price'] }}</div>
                                    </div>
                                    <!-- Calculate the subtotal for each item and add it to the total amount -->
                                    @php
                                        $subtotal = $details['quantity'] * $details['price'];
                                        $totalAmount += $subtotal;
                                    @endphp
                                    <hr style="visibility: hidden;">
                                @endforeach
                            </div>
                        @else
                            <p>No items selected for payment.</p>
                        @endif

                    </div>
                    <div class="border-bottom pt-3 pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>${{ $totalAmount }}.00</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">Free ship</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>${{ $totalAmount }}.00</h5>
                            <input type="hidden" name="total_amount" value="{{ $totalAmount }}">
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span
                            class="bg-secondary pr-3">Payment</span></h5>
                    <div class="bg-light p-30">
                        @if ($paymentmethods != null)
                            <div class="paymentmethods-options">
                                @foreach ($paymentmethods as $paymentmethod)
                                    <div class="form-group" class="paymentmethods-options">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="payment_method_id"
                                                id="payment{{ $paymentmethod->payment_method_id }}"
                                                value="{{ $paymentmethod->payment_method_id }}">
                                            <label class="custom-control-label"
                                                for="payment{{ $paymentmethod->payment_method_id }}">{{ $paymentmethod->payment_method_name }}</label>
                                            
                                            <input type="hidden" name="selected_payment_method_id" id="selected_payment_method_id" value="">
                                        </div>
                                    </div>
                                @endforeach                              
                                {{-- <div class="form-group mb-4">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="payment"
                                            id="banktransfer">
                                        <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                                    </div>
                                </div> --}}
                            </div>
                        @endif
                        <input type="hidden" name="selected_cart_items"
                            value="{{ json_encode($selectedCartItems) }}">
                        <button type="submit" class="btn btn-block btn-primary font-weight-bold py-3">Place
                            Order</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Checkout End -->
{{-- @endsection --}}

<!-- footer -->
@INCLUDE('Front_end.Layouts.footer')

<!-- back to top -->
@INCLUDE('Front_end.Layouts.back_to_top')

<!-- JS -->
@INCLUDE('Front_end.Layouts.js')
