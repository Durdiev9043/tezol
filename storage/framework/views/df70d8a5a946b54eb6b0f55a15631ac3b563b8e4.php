<?php $__env->startSection('content'); ?>


    <!-- ======= Header ======= -->


    <!-- ======= Sidebar ======= -->


    <main id="main" class="main">
        <?php if(\Session::has('success')): ?>
            <div class="alert alert-success">
                <ul>
                    <li><?php echo \Session::get('success'); ?></li>
                </ul>
            </div>
        <?php endif; ?>
        <div class="pagetitle">
            <h1>Buyurtmalar holati boyicha ma'lumot</h1>





        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">


                <div class="col-12 table_one">
                    <div class="card recent-sales overflow-auto table_one">

<?php $__env->stopSection(); ?>

<?php echo $__env->make('saller.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\karvon\resources\views/saller/home.blade.php ENDPATH**/ ?>