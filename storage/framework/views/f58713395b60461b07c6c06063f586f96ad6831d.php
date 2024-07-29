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
            margin: 5% auto; /* 15% from the top and centered */
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
        }
        body>footer>div{
            display: none !important;
        }
    </style>
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

            <div class="btn-add">
                <a id="myBtn" href="#">Foydalanuvchi Qoshish</a>
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
                            <h5 class="card-title"><?php echo e($shop->name); ?> <span>| <?php echo e($shop->phone); ?></span></h5>
                            <p><?php echo e($shop->open_time); ?> <span>| <?php echo e($shop->close_time); ?></span></p>

                            <table class="table table-borderless datatable">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">#</th>
                                    <th scope="col">Nomi</th>
                                    <th scope="col">Shtrix kod</th>
                                    <th scope="col">izoh</th>
                                    <th scope="col">Miqdori</th>
                                    <th scope="col">Narxi</th>
                                    <th scope="col">Turi</th>
                                    <th scope="col">Hash</th>
                                    <th scope="col">Holati</th>
                                    <th scope="col">Surati</th>
                                    <th scope="col">Amallar</th>


                                </tr>
                                </thead>
                                <tbody>


                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr >

                                        <th scope="row"><a href="#"><?php echo e($user -> id); ?></a></th>
                                        <td><?php echo e($user->name); ?></td>
                                        <td><?php echo e($user->phone); ?></td>



                                        <td width="200px">
                                            <img src="<?php echo e(asset('/storage/galereya/'.$user->img)); ?>" width="150px" alt="">
                                            <div class="image-container">
                                                <img src=
                                                         "<?php echo e(asset('/storage/galereya/'.$user->img)); ?>"
                                                     alt="Geeks Image"  width="150px" />
                                            </div>
                                        </td>
                                        <td>
                                            <form action="<?php echo e(route('shop.destroy',$user ->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <a class="btn btn-warning btn-sm m-1" href="<?php echo e(route('shop.show',$user->id)); ?>">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                                <a class="btn btn-warning btn-sm m-1" href="<?php echo e(route('shop.edit',$user->id)); ?>">
                                                                                    <span class="btn-label">
                                                                                        <i class="fa fa-edit"></i>
                                                                                    </span>
                                                </a>

                                                <button type="submit" class="btn btn-danger m-1 btn-sm"><span class="btn-label">
                                                                                    <i class="fa fa-trash"></i>
                                                                                </span></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>

                            <style>
                                .image-container img {
                                    transition: transform 0.3s ease-in-out;
                                }

                                .image-container img:hover {

                                    transform: scale(4);
                                    position: relative;
                                    right: 30%;
                                    top: 30%;
                                }
                            </style>
                            <div id="myModal" class="modal" >

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <form method="POST" action="<?php echo e(route('user.store')); ?>" accept-charset="UTF-8"
                                          enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>

                                        <input type="hidden" name="shop_id" value="<?php echo e($shop->id); ?>" id="">
                                        <input type="hidden" name="role" value="3" id="">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">nomi</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="nomi">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">phone</label>
                                            <input type="number" class="form-control" id="exampleInputEmail1" name="phone" aria-describedby="emailHelp" placeholder="batafsil">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">password</label>
                                            <input type="password" class="form-control" id="exampleInputEmail1" name="password" aria-describedby="emailHelp" placeholder="batafsil">

                                        </div>






                                        <button type="submit" class="btn btn-primary">Saqlash</button>
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


    <script src="<?php echo e(asset('/js/core/jquery.3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/plugin/datatables/datatables.min.js')); ?>"></script>
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\karvon\resources\views/admin/shop/view.blade.php ENDPATH**/ ?>