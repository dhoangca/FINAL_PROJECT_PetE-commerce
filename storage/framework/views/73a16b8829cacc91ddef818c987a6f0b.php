<!-- header -->
<?php echo $__env->make('Front_end.Layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Topbar -->
<?php echo $__env->make('Front_end.Layouts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- navbar -->
<?php echo $__env->make('Front_end.Layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Search product and pet-->



<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Shop</a>
                <span class="breadcrumb-item active">Shop List</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Shop Start -->
<div class="container-fluid">
    <div class="row px-xl-5">

        <!-- Shop Sidebar Start -->
        <?php echo $__env->make('Front_end.Layouts.shopsidebarstart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Shop Sidebar End -->


        <!-- Shop Product Start -->
        <div class="col-lg-9 col-md-8">
            <div class="row pb-3">
                <div class="col-12 pb-1">
                    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span
                            class="bg-secondary pr-3">Category</span>
                    </h2>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h5>Category: "<?php echo e($categories->name); ?>"</h5>
                    </div>
                </div>

                

                <?php if($products->count() > 0 || $pets->count() > 0): ?>

                    <?php $__currentLoopData = $pets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    <div style="width: 350px; height: 300px; overflow: hidden;">
                                        <img src="<?php echo e(asset('Admin/img/' . $pet->image)); ?>"
                                            style="object-fit: cover; width: 100%; height: 100%;" alt="Image">
                                    </div>
                                    <div class="product-action">
                                        
                                        <a class="btn btn-outline-dark btn-square" href=""><i
                                                class="far fa-heart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i
                                                class="fa fa-sync-alt"></i></a>
                                        <a class="btn btn-outline-dark btn-square"
                                            href="<?php echo e(asset('Clients/Contents/shopdetailpet/' . $pet->pet_id)); ?>"><i
                                                class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate"
                                        href=""><?php echo e($pet->name); ?></a>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <h5>$<?php echo e($pet->price); ?></h5>
                                        
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small>(99)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    <div style="width: 350px; height: 300px; overflow: hidden;">
                                        <img src="<?php echo e(asset('Admin/img/' . $product->image)); ?>"
                                            style="object-fit: cover; width: 100%; height: 100%;" alt="Image">
                                    </div>
                                    <div class="product-action">
                                        
                                        <a class="btn btn-outline-dark btn-square" href=""><i
                                                class="far fa-heart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i
                                                class="fa fa-sync-alt"></i></a>
                                        <a class="btn btn-outline-dark btn-square"
                                            href="<?php echo e(asset('Clients/Contents/shopdetailproducts/' . $product->product_id)); ?>"><i
                                                class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate"
                                        href=""><?php echo e($product->name); ?></a>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <h5>$<?php echo e($product->price); ?></h5>
                                        
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small>(99)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    <div class="col-12">
                        <nav>
                            <ul class="pagination justify-content-center">
                                
                                <?php if($pets->currentPage() == 1 && $products->currentPage() == 1): ?>
                                    <li class="page-item disabled"><span class="page-link">Previous</span></li>
                                <?php else: ?>
                                    <li class="page-item"><a class="page-link"
                                            href="<?php echo e($pets->previousPageUrl()); ?>">Previous</a></li>
                                <?php endif; ?>

                                
                                <?php for($page = 1; $page <= max($pets->lastPage(), $products->lastPage()); $page++): ?>
                                    <?php if($page == $pets->currentPage() || $page == $products->currentPage()): ?>
                                        <li class="page-item active"><span class="page-link"><?php echo e($page); ?></span>
                                        </li>
                                    <?php else: ?>
                                        <li class="page-item"><a class="page-link"
                                                href="<?php echo e($pets->url($page)); ?>"><?php echo e($page); ?></a></li>
                                    <?php endif; ?>
                                <?php endfor; ?>

                                
                                <?php if($pets->hasMorePages() || $products->hasMorePages()): ?>
                                    <li class="page-item"><a class="page-link"
                                            href="<?php echo e($pets->nextPageUrl()); ?>">Next</a></li>
                                <?php else: ?>
                                    <li class="page-item disabled"><span class="page-link">Next</span></li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                <?php endif; ?>
                <?php if($pets->count() == 0 && $products->count() == 0): ?>
                    <p>No products or pets found.</p>
                <?php endif; ?>
                
                
            </div>
        </div>
        <!-- Shop Product End -->
    </div>
</div>
<!-- Shop End -->


<!-- footer -->
<?php echo $__env->make('Front_end.Layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- back to top -->
<?php echo $__env->make('Front_end.Layouts.back_to_top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- JS -->
<?php echo $__env->make('Front_end.Layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\GraduationThesis_PetE-commerce_G5\resources\views/Front_end/Contents/FilteredProductsAndPets.blade.php ENDPATH**/ ?>