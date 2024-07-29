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














                        <div class="card-body row">

                            <div style="margin-top: 10px" class="col-6">




































                            </div>
                            <div style="margin-top: 10px" class="col-6">
                                <table  class="table table-bordered datatable">
                                    <tr>
                                        <td>
                                            -/-
                                        </td>
                                        <td>
                                            soni
                                        </td>
                                        <td>
                                            Umumiy summa
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Kechagi yetkazib berilgan buyurtmalar soni:
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Kechagi bekor qilingan buyurtmalar soni:
                                        </td>
                                        <td>

                                        </td>
                                    </tr>

                                </table>
                            </div>




                        </div>

                    </div>
                </div>




            </div>

        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->


    

    <!-- Vendor JS Files -->





<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\karvon\resources\views/admin/home.blade.php ENDPATH**/ ?>