<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo e(asset('')); ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Order Detail</title>

    <!-- Custom fonts for this template -->
    <link href="Admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Admin/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="Admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Sidebar -->
    <?php echo $__env->make('Admins.Layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End of Sidebar -->

    <!-- Topbar -->
    <?php echo $__env->make('Admins.Layouts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">View the list of Detail</h1>
        <p class="mb-4"></p>

        <!-- Information User -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Information User</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Customer name</th>
                                <th>Customer email</th>
                                <th>Customer Telephone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo e(1); ?></td>
                                <td><?php echo e($orders->user->name); ?></td>
                                <td><?php echo e($orders->user->email); ?></td>
                                <td><?php echo e($orders->user->phone_number); ?></td>                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Shipping Information -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Shipping Information</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Customer name</th>
                                <th>Customer email</th>
                                <th>Customer Telephone</th>
                                <th>Customer Address</th>
                                <th>Payment methods</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo e(1); ?></td>
                                <td><?php echo e($orders->user->name); ?></td>
                                <td><?php echo e($orders->user->email); ?></td>
                                <td><?php echo e($orders->user->phone_number); ?></td>
                                <td><?php echo e($orders->user->address); ?></td>
                                <td><?php echo e($orders->payment->payment_method_name); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Information product -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Information Product</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $orderitem->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key + 1); ?></td>
                                    <td>
                                        <div style="width: 100px; height: 100px; overflow: hidden;">
                                            <img src="<?php echo e(asset('Admin/img/' . $value->image)); ?>"
                                                style="object-fit: cover; width: 100%; height: 100%;" alt="Image">
                                        </div>
                                    </td>
                                    <td><?php echo e($value->name); ?></td>
                                    <td><?php echo e($value->quantity); ?></td>
                                    <td><?php echo e($value->price); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Pet E-commerce </span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="Admin/vendor/jquery/jquery.min.js"></script>
    <script src="Admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="Admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="Admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="Admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="Admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="Admin/js/demo/datatables-demo.js"></script>

</body>

</html>
<?php /**PATH D:\GraduationThesis_PetE-commerce_G5\resources\views/Admins/Contents/detailorder.blade.php ENDPATH**/ ?>