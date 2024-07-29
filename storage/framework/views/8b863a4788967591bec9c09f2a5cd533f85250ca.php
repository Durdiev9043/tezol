<?php $__env->startSection('content'); ?>

    <style>
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 999; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }</style>
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
            <h1>Dashboard</h1>

                        <div class="btn-add bg" >
                            <a id="myBtn" class="bgh" href="#">Qoshish</a>
                        </div>

        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">


                <div class="col-12 table_one">
                    <div class="card recent-sales overflow-auto table_one">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                            <table class="table table-borderless datatable">
                                <thead>
                                <tr>
                                    
                                    <th scope="col">#</th>
                                    <th scope="col">Nomi</th>
                                    <th scope="col">Hash nomi</th>
                                    <th scope="col">Surati</th>
                                    <th scope="col">Surati</th>
                                    <th scope="col">Amallar</th>


                                </tr>


                                </thead>
                                <tbody>

                                                                <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($cat->cat_id == NULL): ?>
                                                                    <tr>
                                                                        <th scope="row"><a href="#"><?php echo e($cat -> id); ?></a></th>
                                                                        <td>
                                                                            <form action="<?php echo e(route('category.update',$cat->id)); ?>" method="POST" accept-charset="UTF-8"
                                                                                  enctype="multipart/form-data">
                                                                                <?php echo csrf_field(); ?>
                                                                                <?php echo method_field('PUT'); ?>
                                                                                <input style="border:none" type="text" name="name" value="<?php echo e($cat->name); ?>" >
                                                                            </form>
                                                                        </td>
                                                                        <td>
                                                                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php if($item->cat_id == $cat->id): ?>
                                                                            <?php echo e($item->name); ?>, <br>

                                                                                <?php endif; ?>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                        </td>
                                                                        <td><img src="<?php echo e(asset('/storage/galereya/'.$cat->img)); ?>" width="150px" alt=""></td>
                                                                        <td>  <form method="POST" action="<?php echo e(route('category.update',$cat->id)); ?>"
                                                                                    enctype="multipart/form-data">
                                                                                <?php echo csrf_field(); ?>
                                                                                <?php echo method_field('PUT'); ?>
                                                                            <div class="form-group">
                                                                                <label for="exampleInputEmail1">Surati ozgartirish:</label>
                                                                                <input type=file name="img" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                                                                <img id="pic"  width="100px"/>
                                                                                

                                                                            </div>
                                                                                <button type="submit" class="btn btn-primary">Saqlash</button>
                                                                            </form>
                                                                        </td>
                                                                        <td>
                                                                            <form action="<?php echo e(route('category.destroy',$cat ->id)); ?>" method="POST">
                                                                                <?php echo csrf_field(); ?>
                                                                                <?php echo method_field('DELETE'); ?>






                                                                                <button type="submit" class="btn btn-danger m-1 btn-sm"><span class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span></button>
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                                <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>
                            <div id="myModal" class="modal" >

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <form method="POST" action="<?php echo e(route('category.store')); ?>" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Mahsulot toifasini tanlang tanlang</label>
                                            <select class="form-control form-control-sm"  name="cat_id">
                                                <option></option>
                                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="name">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Surati:</label>
                                            <input type="file" class="form-control" id="exampleInputEmail1" name="img" aria-describedby="emailHelp" placeholder="Soni">

                                        </div>


                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>




            </div>

        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->


    

    <!-- Vendor JS Files -->




    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>



    <script>



        var modal = document.getElementById("myModal");

        var btn = document.getElementById("myBtn");

        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\karvon\resources\views/admin/category/index.blade.php ENDPATH**/ ?>