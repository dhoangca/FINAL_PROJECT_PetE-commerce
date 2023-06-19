<!-- header -->
<?php echo $__env->make('Admins.Layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Sidebar -->
<?php echo $__env->make('Admins.Layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Topbar -->
<?php echo $__env->make('Admins.Layouts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Manage Users</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit Users</li>
            </ol>
            <?php if(session('msg')): ?>
                <div class="alert alert-success"><?php echo e(session('msg')); ?></div>
            <?php endif; ?>
            <form action="" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for=""> ID </label>
                    <input type="text" class="form-control" name="user_id" value ="<?php echo e($cate->user_id); ?>" placeholder="ID">
                </div>
                <div class="mb-3">
                    <label for="">User Name</label>
                    <input type="text" class="form-control" name="username" value ="<?php echo e($cate->username); ?>" placeholder="user name của bạn..." >
                </div>
                <div class="mb-3">
                    <label for=""> Name </label>
                    <input type="text" class="form-control" name="name" value ="<?php echo e($cate->name); ?>" placeholder="Name của bạn...">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" value ="<?php echo e($cate->email); ?>" placeholder="Email của bạn..." >
                </div>
                <div class="mb-3">
                    <label for=""> Phone Number  </label>
                    <input type="text" class="form-control" name="phone_number" value ="<?php echo e($cate->phone_number); ?>" placeholder="số đt...">
                </div>
                <div class="mb-3">
                    <label for="">Address</label>
                    <input type="text" class="form-control" name="address" value ="<?php echo e($cate->address); ?>" placeholder="địa chỉ ..." >
                </div>
                <button type="submit" class="btn btn-info"> Edit </button>
                <button type="reset" class="btn btn-primary">Reset Button</button>
                <a href="<?php echo e(asset('Admins/users/manageusers')); ?>" class="btn btn-warning">Back</a>

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
<?php echo $__env->make('Admins.Layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\GraduationThesis_PetE-commerce_G5\resources\views/Admins/Contents/editusers.blade.php ENDPATH**/ ?>