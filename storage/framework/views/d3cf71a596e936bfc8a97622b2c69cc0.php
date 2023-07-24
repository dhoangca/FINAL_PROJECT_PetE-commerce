<!-- header -->
<?php echo $__env->make('Admins.Layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Sidebar -->
<?php echo $__env->make('Admins.Layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Topbar -->
<?php echo $__env->make('Admins.Layouts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Manage Categoris</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Create Categoris</li>
            </ol>
            <?php if(session('msg')): ?>
                <div class="alert alert-success"><?php echo e(session('msg')); ?></div>
            <?php endif; ?>
            <form action="" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for=""> Name Categoris </label>
                    <input type="text" class="form-control" name="name" placeholder="Name Categoris ...">
                </div>               
                <div class="mb-3">
                    <label for="">Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Description ..." >
                </div>       
                <button type="submit" class="btn btn-info"> Create </button>
                <a href="<?php echo e(asset('Admins/Categoris/managecategoris')); ?>" class="btn btn-warning">back</a>

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
<?php echo $__env->make('Admins.Layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FINAL_PROJECT_PetE-commerce\resources\views/Admins/Contents/createcategori.blade.php ENDPATH**/ ?>