<!DOCTYPE html>
<html lang="en">

<head>
</head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Marjona market</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="<?php echo e(asset('LogoMarjonaSupermarket.png')); ?>" rel="icon">
<link href="<?php echo e(asset('LogoMarjonaSupermarket.png')); ?>" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<!-- Vendor CSS Files -->
<link href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assets/vendor/quill/quill.snow.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assets/vendor/quill/quill.bubble.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assets/vendor/simple-datatables/style.css')); ?>" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">


<body>

<?php echo $__env->make('saller.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->make('saller.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if($message = Session::get('success')): ?>
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo e($message); ?></strong>
    </div>
<?php endif; ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('saller.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script src="<?php echo e(asset('assets/vendor/apexcharts/apexcharts.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/chart.js/chart.umd.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/echarts/echarts.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/quill/quill.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/simple-datatables/simple-datatables.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/tinymce/tinymce.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/php-email-form/validate.js')); ?>"></script>


<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
</body>
</html>
<?php /**PATH E:\OpenServer\domains\karvon\resources\views/saller/layouts/app.blade.php ENDPATH**/ ?>