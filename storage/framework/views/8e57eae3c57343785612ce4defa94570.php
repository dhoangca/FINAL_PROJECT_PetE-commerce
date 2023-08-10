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
                <span class="breadcrumb-item active">Checkout</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<?php if(session('success')): ?>
    <div id="floating-message" class="floating-message">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>
<!-- Checkout Start -->
<div class="container-fluid">
    <form method="post" action="<?php echo e(route('Clients.placeOrder')); ?>">
        <?php echo csrf_field(); ?>
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Billing
                        Address</span></h5>
                <?php if(session('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>
                <?php $__errorArgs = ['selected_items'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input class="form-control" type="text" id="name" name="name"
                                value="<?php echo e(auth()->user()->name); ?>" placeholder="Your First Name">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input class="form-control" type="text" id="name" name=""
                                value="<?php echo e(auth()->user()->name); ?>" placeholder="Your Last Name">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" id="email" name="email"
                                value="<?php echo e(auth()->user()->email); ?>" placeholder="Your Email">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text" id="phone_number" name="phone_number"
                                value="<?php echo e(auth()->user()->phone_number); ?>" placeholder="Your Phone Number">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 1</label>
                            <input class="form-control" type="text" id="address" name="address"
                                value="<?php echo e(auth()->user()->address); ?>" placeholder="Your Adress">
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
                        
                        <?php if($selectedCartItems && count($selectedCartItems) > 0): ?>
                            <?php
                                $totalAmount = 0; // Initialize the total amount variable
                            ?>
                            <div class="container" style="text-align: center">
                                
                                <?php $__currentLoopData = $selectedCartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="row">
                                        <div class="col-md-4"><?php echo e($details['name']); ?></div>
                                        <div class="col-md-4 text-center"><?php echo e($details['quantity']); ?>x</div>
                                        <div class="col-md-4 text-right">$<?php echo e($details['price']); ?></div>
                                    </div>
                                    <!-- Calculate the subtotal for each item and add it to the total amount -->
                                    <?php
                                        $subtotal = $details['quantity'] * $details['price'];
                                        $totalAmount += $subtotal;
                                    ?>
                                    <hr style="visibility: hidden;">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php else: ?>
                            <p>No items selected for payment.</p>
                        <?php endif; ?>

                    </div>
                    <div class="border-bottom pt-3 pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>$<?php echo e($totalAmount); ?>.00</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">Free ship</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>$<?php echo e($totalAmount); ?>.00</h5>
                            <input type="hidden" name="total_amount" value="<?php echo e($totalAmount); ?>">
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span
                            class="bg-secondary pr-3">Payment</span></h5>
                    <div class="bg-light p-30">
                        <?php if($paymentmethods != null): ?>
                            <div class="paymentmethods-options">
                                <?php $__currentLoopData = $paymentmethods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paymentmethod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="form-group" class="paymentmethods-options">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="payment_method_id"
                                                id="payment<?php echo e($paymentmethod->payment_method_id); ?>"
                                                value="<?php echo e($paymentmethod->payment_method_id); ?>">
                                            <label class="custom-control-label"
                                                for="payment<?php echo e($paymentmethod->payment_method_id); ?>"><?php echo e($paymentmethod->payment_method_name); ?></label>
                                            
                                            <input type="hidden" name="selected_payment_method_id" id="selected_payment_method_id" value="">
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                              
                                
                            </div>
                        <?php endif; ?>
                        <input type="hidden" name="selected_cart_items"
                            value="<?php echo e(json_encode($selectedCartItems)); ?>">
                        <button type="submit" class="btn btn-block btn-primary font-weight-bold py-3">Place
                            Order</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Checkout End -->


<!-- footer -->
<?php echo $__env->make('Front_end.Layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- back to top -->
<?php echo $__env->make('Front_end.Layouts.back_to_top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- JS -->
<?php echo $__env->make('Front_end.Layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\GraduationThesis_PetE-commerce_G5\resources\views/Front_end/Contents/checkout.blade.php ENDPATH**/ ?>