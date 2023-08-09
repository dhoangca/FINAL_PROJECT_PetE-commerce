<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo e(asset('')); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Detail</title>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="Front_end/css/ordercss.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <div class="card">
        <div class="title">Purchase Reciept</div>
        <div class="info">
            <div class="row">
                <div class="col-4">
                    <span id="heading">Date</span><br>
                    <span id="details"><?php echo e($order->order_date); ?></span>
                </div>
                <div class="col-4 pull-center">
                    <span id="heading">Order.</span><br>
                    <span id="details">#<?php echo e($order->order_id); ?></span>
                </div>
                <div class="col-4 pull-right">
                    <span id="heading">Order No.</span><br>
                    <span id="details">#<?php echo e($order->code); ?></span>
                </div>
            </div>
        </div>
        <div class="info">
            <div class="row">
                <div class="col-4 ">
                    <span id="heading">Name</span><br>
                    <span id="details"><?php echo e(auth()->user()->name); ?></span>
                </div>
                <div class="col-4 pull-center ">
                    <span id="heading">Mobile No</span><br>
                    <span id="details"><?php echo e(auth()->user()->phone_number); ?></span>
                </div>
                <div class="col-4 pull-right  ">
                    <span id="heading">Address</span><br>
                    <span id="details"><?php echo e(auth()->user()->address); ?></span>
                </div>
            </div>
        </div>
        <div class="pricing">
            <div class="row">
                <?php $__currentLoopData = $orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div style="width: 70px; height: 70px; overflow: hidden;">
                            <img src="<?php echo e(asset('Admin/img/' . $item->image)); ?>"
                                style="object-fit: cover; width: 100%; height: 100%;" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <span id="name"><?php echo e($item->name); ?></span>
                    </div>
                    <div class="col-md-2 text-center">
                        <span id="name"><?php echo e($item->quantity); ?>x</span>
                    </div>
                    <div class="col-md-2 text-right">
                        <span id="price">$<?php echo e($item->price); ?></span>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <hr>
            <div class="row">
                <div class="col-9">
                    <span id="name">Shipping</span>
                </div>
                <div class="col-3">
                    <span id="price">Free</span>
                </div>
            </div>
        </div>
        <div class="total">
            <div class="row">
                <div class="col-9"><big>Total</big></div>
                <div class="col-3"><big>$<?php echo e($order->total_amount); ?></big></div>
            </div>
        </div>
        <div class="tracking">
            <div class="title">Tracking Order</div>
        </div>
        <div class="progress-track">
            <ul id="progressbar">
                <li class="step0 active text-center " id="step1">Ordered</li>
                <li class="step0 text-center" id="step2">Shipped</li>
                <li class="step0 text-right" id="step3">On the way</li>
                <li class="step0 text-right" id="step4">Delivered</li>
            </ul>
        </div>

        <div class="footer">
            <div class="row">

                <div class="col-10">Want any help? Please &nbsp;<a> contact us</a></div>
            </div>
        </div>
        <hr>
        <button type="button" onclick="window.location.href='<?php echo e(route('index')); ?>'"
            class="btn btn-primary back-to-home-button">Back to home page</button>
    </div>

    <!-- Floating message -->
    <div id="floating-message" class="floating-message hidden">
        <h2 id="floating-message-h" class="floating-message-h hidden">Order placed successfully!</h2>
    </div>
</body>

</html>

<!-- JS -->
<?php echo $__env->make('Front_end.Layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\GraduationThesis_PetE-commerce_G5\resources\views/Front_end/Contents/orderdetail.blade.php ENDPATH**/ ?>