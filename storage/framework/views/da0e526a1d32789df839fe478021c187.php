<!-- header -->
<?php echo $__env->make('Admins.Layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Sidebar -->
<?php echo $__env->make('Admins.Layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Topbar -->
<?php echo $__env->make('Admins.Layouts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Manage Order</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit Order</li>
            </ol>
            <?php if(session('msg')): ?>
                <div class="alert alert-success"><?php echo e(session('msg')); ?></div>
            <?php endif; ?>
            <form action="" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for=""> Id </label>
                    <input type="text" class="form-control" value ="<?php echo e($cate->order_id); ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="">Code orders</label>
                    <input type="text" class="form-control" value ="<?php echo e($cate->code); ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for=""> Order Date </label>
                    <input type="text" class="form-control" value ="<?php echo e($cate->order_date); ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for=""> Total Amount </label>
                    <input type="text" class="form-control" value ="<?php echo e($cate->total_amount); ?>" disabled>
                </div>
                <div class="mb-3">
                    <?php if($statuss != null): ?>
                    <label for=""> Status </label>
                    <select id="inputStatus" class="form-control" name="status_id">
                        <?php $__currentLoopData = $statuss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($status->status_id); ?>"><?php echo e($status->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-info"> Edit </button>
                <button type="reset" class="btn btn-primary">Reset Button</button>
                <a href="<?php echo e(asset('Admins/Orders/manageorders')); ?>" class="btn btn-warning">Back</a>

            </form>
        </div>
    </main>
</div>


<!-- footer -->
<?php echo $__env->make('Admins.Layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- back to top -->
<?php echo $__env->make('Admins.Layouts.back_to_top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- logout -->
<?php echo $__env->make('Admins.Layouts.logout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- JS -->
<?php echo $__env->make('Admins.Layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GraduationThesis_PetE-commerce_G5\resources\views/Admins/Contents/editorder.blade.php ENDPATH**/ ?>