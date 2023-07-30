<!-- header -->
<?php echo $__env->make('Front_end.Layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Topbar -->
<?php echo $__env->make('Front_end.Layouts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- navbar -->
<?php echo $__env->make('Front_end.Layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



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
                
                <?php if(session('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>
                <tbody class="align-middle">
                    
                    <?php if(session('cart') && count(session('cart')) > 0): ?>
                        <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-item-id="<?php echo e($item_id); ?>" data-item-price="<?php echo e($details['price']); ?>">
                                <td class="align-middle" style="text-align: center; margin">
                                    <div class="form-check" style="margin-bottom: 11px; margin-left: 6px;">
                                        <input class="form-check-input select-item" type="checkbox"
                                            value="<?php echo e($item_id); ?>" style="transform: scale(2);">
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <?php if(isset($details['image'])): ?>
                                        <img src="<?php echo e(asset('Admin/img/' . $details['image'])); ?>" alt="Pet Image"
                                            style="width: 90px; height: 90px;">
                                    <?php else: ?>
                                        <p>No image available</p>
                                    <?php endif; ?>
                                </td>
                                <td class="align-middle"><?php echo e($details['name']); ?></td>
                                <td class="align-middle" data-field="price">$<?php echo e($details['price']); ?></td>
                                <td class="align-middle" style="text-align: center; max-width: 130px;">
                                    <div class="input-group quantity">
                                        
                                        <input type="number" style="width: 5px;"
                                            class="form-control form-control-sm bg-secondary border-0 text-center quantity-input"
                                            data-item-id="<?php echo e($item_id); ?>" value="<?php echo e($details['quantity']); ?>">
                                        
                                    </div>
                                </td>

                                
                                <td class="align-middle" id="total-<?php echo e($item_id); ?>">
                                    $<?php echo e($details['price'] * $details['quantity']); ?>

                                </td>

                                <td class="align-middle">
                                    <form action="<?php echo e(route('Clients.deletecart', ['item_id' => $item_id])); ?>"
                                        method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7">Your cart is empty.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart
                    Summary</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Subtotal</h6>
                        <div class="total-amount" id="">
                            <h6>$<?php echo e(number_format($totalAmount, 2)); ?></h6>
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
                        <h5>$<?php echo e(number_format($totalAmount, 2)); ?></h5>
                    </div>
                    
                    <button id="checkout-btn" class="btn btn-block btn-primary font-weight-bold my-3 py-3">
                        Proceed To Checkout
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Cart End -->


<!-- footer -->
<?php echo $__env->make('Front_end.Layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- back to top -->
<?php echo $__env->make('Front_end.Layouts.back_to_top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- JS -->
<?php echo $__env->make('Front_end.Layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\GraduationThesis_PetE-commerce_G5\resources\views/Front_end/Contents/cart.blade.php ENDPATH**/ ?>