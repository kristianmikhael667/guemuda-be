<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>GueMuda | Page <?php echo e($page); ?></title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="<?php echo e('/css/main.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo e('/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo e('/css/color.css'); ?>">
    <link rel="stylesheet" href="<?php echo e('/css/responsive.css'); ?>">
    <link href="<?php echo e('/plugins/apex/apexcharts.css'); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    
    <link rel="stylesheet" href="<?php echo e('/plugins/dropify/dist/css/dropify.css'); ?>">

</head>


<body>
    <?php echo $__env->make('loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="theme-layout">
        <?php echo $__env->make('partials_admin.responsiveheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('partials_admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('partials_admin.topsubbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('partials_admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-content">
                        <h4 class="main-title">Analytic Article</h4>
                        <div class="row">
                            <div class="col-lg-2 col-sm-2 mb-2">
                                <form action="/administrator" method="post">
                                    <?php echo csrf_field(); ?>
                                    <select onchange="this.form.submit()" class="uk-input" name="filters" id="">
                                        <option <?php echo e($selected=="-24" ? 'selected' : ''); ?> value="-24">Show Per Day
                                        </option>
                                        <option <?php echo e($selected=="-168" ? 'selected' : ''); ?> value="-168">Show Per Week
                                        </option>
                                        <option <?php echo e($selected=="-730" ? 'selected' : ''); ?> value="-730">Show Per Month
                                        </option>
                                    </select>
                                </form>
                            </div>
                        </div>


                        <div class="row merged20">
                            <div class="col-lg-8">
                                <div class="d-widget">
                                    <div class="d-widget-title">
                                        <h5>Top 10 Pages Article</h5>
                                    </div>
                                    <table class="table-default table table-striped table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th class="wd-10p">No</th>
                                                <th class="wd-15p">Title</th>
                                                <th class="wd-25p">Link</th>
                                                <th class="wd-25p">Visit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $viewer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e(++$key); ?></td>
                                                <td><?php echo e($item->title); ?></td>
                                                <td>https://guemuda.com/detailpost/<?php echo e($item->slug); ?></td>
                                                <td><?php echo e($item->total_views); ?></td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </tbody>
                                    </table>

                                    <?php if($page == "superadmin"): ?>
                                    <a href="/administrator/content/export" class="btn btn-success mt-3">Export
                                        Excel</a>
                                    <?php endif; ?>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="d-widget">
                                            <div class="d-widget-title">
                                                <h5>Top Platform</h5>
                                            </div>
                                            <div class="panel-body">
                                                <canvas id="pie-chart-platform"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row merged20 mb-2">
                            <div class="col-lg-8">
                                <div class="d-widget">
                                    <div class="d-widget-title">
                                        <h5>Top 10 Authors </h5>
                                    </div>
                                    <table class="table-default table table-striped table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th class="wd-10p">ID</th>
                                                <th class="wd-15p">Name</th>
                                                <th class="wd-25p">Totals</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e(++$key); ?></td>
                                                <td><?php echo e($item->username); ?></td>
                                                <td><?php echo e($item->tops); ?></td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                    <?php if($page == "superadmin"): ?>
                                    <a href="/administrator/author/export" class="btn btn-success mt-3">Export
                                        Excel</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row merged20 mb-4">
                            <div class="col-lg-8">
                                <div class="d-widget">
                                    <div class="d-widget-title">
                                        <h5>Hit Statistics</h5>
                                    </div>
                                    
                                    <canvas id="canvas" height="280" width="600"></canvas>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="d-widget">
                                    <div class="d-widget-title">
                                        <h5>Top Browser</h5>
                                    </div>
                                    <div class="panel-body">
                                        <canvas id="pie-chart"></canvas>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row merged20 mb-4">
                            <div class="col-lg-8">
                                <div class="d-widget">
                                    <div class="d-widget-title">
                                        <h5>Top 10 Likers</h5>
                                    </div>
                                    <div class="d-widget-content">
                                        <table class="table manage-user table-default table-responsive-md">
                                            <thead>
                                                <tr>
                                                    <th>Title Article</th>
                                                    <th>Category</th>
                                                    <th>Total Like</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $likers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($item->title); ?>

                                                    </td>
                                                    <td>
                                                        <h5><?php echo e($item->category->name); ?></h5>
                                                    </td>
                                                    <td><?php echo e($item->total_like); ?></td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                        <?php if($page == "superadmin"): ?>
                                        <a href="/administrator/likes/export" class="btn btn-success mt-3">Export
                                            Excel</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="d-widget">
                                    <div class="d-widget-title">
                                        <h5>Top Device</h5>
                                    </div>
                                    <div class="panel-body">
                                        <canvas id="pie-chart-device"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row merged20 mb-4">
                            <div class="col-lg-12">
                                <div class="d-widget">
                                    <div class="d-widget-title">
                                        <h5>Top 10 Comment</h5>
                                    </div>
                                    <div class="d-widget-content">
                                        <table class="table manage-user table-default table-responsive-md">
                                            <thead>
                                                <tr>
                                                    <th>Title Article</th>
                                                    <th>Category</th>
                                                    <th>Total Comment</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($item->title); ?>

                                                    </td>
                                                    <td>
                                                        <h5><?php echo e($item->category->name); ?></h5>
                                                    </td>
                                                    <td><?php echo e($item->total_comment); ?></td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                        <?php if($page == "superadmin"): ?>
                                        <a href="/administrator/comments/export" class="btn btn-success mt-3">Export
                                            Excel</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- main content -->

        <div class="popup-wraper">
            <div class="popup">
                <span class="popup-closed"><i class="icofont-close"></i></span>
                <div class="popup-meta">
                    <div class="popup-head">
                        <h5><i class="icofont-envelope"></i> Send Message</h5>
                    </div>
                    <div class="send-message">
                        <form method="post" class="c-form">
                            <input type="text" placeholder="Enter Name..">
                            <input type="text" placeholder="Subject">
                            <textarea placeholder="Write Message"></textarea>
                            <div class="uploadimage">
                                <i class="icofont-file-jpg"></i>
                                <label class="fileContainer">
                                    <input type="file">Attach file
                                </label>
                            </div>
                            <button type="submit" class="main-btn">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- send message popup -->

        <div class="side-slide">
            <span class="popup-closed"><i class="icofont-close"></i></span>
            <div class="slide-meta">
                <ul class="nav nav-tabs slide-btns">
                    <li class="nav-item"><a class="active" href="#messages" data-toggle="tab">Messages</a></li>
                    <li class="nav-item"><a class="" href="#notifications" data-toggle="tab">Notifications</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active fade show" id="messages">
                        <h4><i class="icofont-envelope"></i> messages</h4>
                        <a href="#" class="send-mesg" title="New Message" data-toggle="tooltip"><i
                                class="icofont-edit"></i></a>
                        <ul class="new-messages">
                            <li>
                                <figure><img src="images/resources/user1.jpg" alt=""></figure>
                                <div class="mesg-info">
                                    <span>Ibrahim Ahmed</span>
                                    <a href="#" title="">Helo dear i wanna talk to you</a>
                                </div>
                            </li>
                            <li>
                                <figure><img src="images/resources/user2.jpg" alt=""></figure>
                                <div class="mesg-info">
                                    <span>Fatima J.</span>
                                    <a href="#" title="">Helo dear i wanna talk to you</a>
                                </div>
                            </li>
                            <li>
                                <figure><img src="images/resources/user3.jpg" alt=""></figure>
                                <div class="mesg-info">
                                    <span>Fawad Ahmed</span>
                                    <a href="#" title="">Helo dear i wanna talk to you</a>
                                </div>
                            </li>
                            <li>
                                <figure><img src="images/resources/user4.jpg" alt=""></figure>
                                <div class="mesg-info">
                                    <span>Saim Turan</span>
                                    <a href="#" title="">Helo dear i wanna talk to you</a>
                                </div>
                            </li>
                            <li>
                                <figure><img src="images/resources/user5.jpg" alt=""></figure>
                                <div class="mesg-info">
                                    <span>Alis wells</span>
                                    <a href="#" title="">Helo dear i wanna talk to you</a>
                                </div>
                            </li>
                        </ul>
                        <a href="#" title="" class="main-btn" data-ripple="">view all</a>
                    </div>
                    <div class="tab-pane fade" id="notifications">
                        <h4><i class="icofont-bell-alt"></i> notifications</h4>
                        <ul class="notificationz">
                            <li>
                                <figure><img src="images/resources/user5.jpg" alt=""></figure>
                                <div class="mesg-info">
                                    <span>Alis wells</span>
                                    <a href="#" title="">recommend your post</a>
                                </div>
                            </li>
                            <li>
                                <figure><img src="images/resources/user4.jpg" alt=""></figure>
                                <div class="mesg-info">
                                    <span>Alis wells</span>
                                    <a href="#" title="">share your post <strong>a good time today!</strong></a>
                                </div>
                            </li>
                            <li>
                                <figure><img src="images/resources/user2.jpg" alt=""></figure>
                                <div class="mesg-info">
                                    <span>Alis wells</span>
                                    <a href="#" title="">recommend your post</a>
                                </div>
                            </li>
                            <li>
                                <figure><img src="images/resources/user1.jpg" alt=""></figure>
                                <div class="mesg-info">
                                    <span>Alis wells</span>
                                    <a href="#" title="">share your post <strong>a good time today!</strong></a>
                                </div>
                            </li>
                            <li>
                                <figure><img src="images/resources/user3.jpg" alt=""></figure>
                                <div class="mesg-info">
                                    <span>Alis wells</span>
                                    <a href="#" title="">recommend your post</a>
                                </div>
                            </li>
                        </ul>
                        <a href="#" title="" class="main-btn" data-ripple="">view all</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- side slide message & popup -->
    </div>
    <?php echo $__env->make('admin.js-analytic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH /Users/mike/laravel/gue-muda/resources/views/admin/analytic.blade.php ENDPATH**/ ?>