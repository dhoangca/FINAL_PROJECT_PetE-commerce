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
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @if (session('cart') && count(session('cart')) > 0)
                        @foreach (session('cart') as $item_id => $details)
                            <tr>
                                <td class="align-middle">
                                    @if(isset($details['image']))
                                        <img src="{{ asset('Admin/img/' . $details['image']) }}" alt="Pet Image" style="width: 90px; height: 90px;">
                                    @else
                                        <p>No image available</p>
                                    @endif
                                </td>                                
                                <td class="align-middle">{{ $details['name'] }}</td>
                                <td class="align-middle">${{ $details['price'] }}</td>
                                <td class="align-middle" style="text-align: center; max-width: 130px;">
                                    <div class="input-group quantity">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-primary btn-minus" type="button" data-item-id="{{ $item_id }}">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="number" class="form-control form-control-sm bg-secondary border-0 text-center quantity-input"
                                            id="quantity-{{ $item_id }}" value="{{ $details['quantity'] }}" readonly>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary btn-plus" type="button" data-item-id="{{ $item_id }}">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle" class="total-price" id="total-price-{{ $item_id }}">$<span id="price-{{ $item_id }}">{{ $details['price'] * $details['quantity'] }}</span></td>
                                
                                                      
                                <td class="align-middle">
                                    <form action="{{ route('Clients.deletecart', ['item_id' => $item_id]) }}" method="POST">
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
                        <p>Your cart is empty.</p>
                    @endif
                    {{-- <tr>
                        <td class="align-middle"><img src="Front_end/img/product-2.jpg" alt=""
                                style="width: 50px;"> Product Name</td>
                        <td class="align-middle">$150</td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text"
                                    class="form-control form-control-sm bg-secondary border-0 text-center"
                                    value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">$150</td>
                        <td class="align-middle"><button class="btn btn-sm btn-danger"><i
                                    class="fa fa-times"></i></button></td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <form class="mb-30" action="">
                <div class="input-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Apply Coupon</button>
                    </div>
                </div>
            </form>
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart
                    Summary</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Subtotal</h6>
                        <h6>$150</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">$10</h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Total</h5>
                        <h5>$160</h5>
                    </div>
                    <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>
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
