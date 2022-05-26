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
                                </div>
                            </div>
                        </div>
                        <div class="row merged20 mb-4">
                            <div class="col-lg-8">
                                <div class="d-widget">
                                    <div class="d-widget-title">
                                        <h5>Hit Statistics</h5>
                                    </div>
                                    <div id="uniqueVisits"></div>
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
                                        <h5>Manage Users</h5>
                                    </div>
                                    <div class="d-widget-content">
                                        <table class="table manage-user table-default table-responsive-md">
                                            <thead>
                                                <tr>
                                                    <th>User Name</th>
                                                    <th>View profile</th>
                                                    <th>Chat History</th>
                                                    <th>Blocked</th>
                                                    <th>Hide</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <figure><img src="images/resources/user.png" alt=""></figure>
                                                        <h5>Maria K.</h5>
                                                    </td>
                                                    <td><a class="mini-btn" href="#" title="">view</a></td>
                                                    <td><a class="mini-btn" href="#" title="">view</a></td>
                                                    <td>
                                                        <div class="switch-btn">
                                                            <input type="checkbox" hidden="hidden" id="switch1">
                                                            <label class="switch" for="switch1"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="switch-btn">
                                                            <input type="checkbox" hidden="hidden" id="switch2">
                                                            <label class="switch" for="switch2"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="actions-btn">
                                                            <span class="iconbox button soft-primary"><i
                                                                    class="icofont-pen-alt-1"></i></span>
                                                            <span class="iconbox button soft-danger"><i
                                                                    class="icofont-trash"></i></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <figure><img src="images/resources/user2.jpg" alt=""></figure>
                                                        <h5>Sarika sing.</h5>
                                                    </td>
                                                    <td><a class="mini-btn" href="#" title="">view</a></td>
                                                    <td><a class="mini-btn" href="#" title="">view</a></td>
                                                    <td>
                                                        <div class="switch-btn">
                                                            <input type="checkbox" hidden="hidden" id="switch3">
                                                            <label class="switch" for="switch3"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="switch-btn">
                                                            <input type="checkbox" hidden="hidden" id="switch4">
                                                            <label class="switch" for="switch4"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="actions-btn">
                                                            <span class="iconbox button soft-primary"><i
                                                                    class="icofont-pen-alt-1"></i></span>
                                                            <span class="iconbox button soft-danger"><i
                                                                    class="icofont-trash"></i></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <figure><img src="images/resources/user3.jpg" alt=""></figure>
                                                        <h5>King Khan</h5>
                                                    </td>
                                                    <td><a class="mini-btn" href="#" title="">view</a></td>
                                                    <td><a class="mini-btn" href="#" title="">view</a></td>
                                                    <td>
                                                        <div class="switch-btn">
                                                            <input type="checkbox" hidden="hidden" id="switch5">
                                                            <label class="switch" for="switch5"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="switch-btn">
                                                            <input type="checkbox" hidden="hidden" id="switch6">
                                                            <label class="switch" for="switch6"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="actions-btn">
                                                            <span class="iconbox button soft-primary"><i
                                                                    class="icofont-pen-alt-1"></i></span>
                                                            <span class="iconbox button soft-danger"><i
                                                                    class="icofont-trash"></i></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <figure><img src="images/resources/user4.jpg" alt=""></figure>
                                                        <h5>jacob</h5>
                                                    </td>
                                                    <td><a class="mini-btn" href="#" title="">view</a></td>
                                                    <td><a class="mini-btn" href="#" title="">view</a></td>
                                                    <td>
                                                        <div class="switch-btn">
                                                            <input type="checkbox" hidden="hidden" id="switch7">
                                                            <label class="switch" for="switch7"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="switch-btn">
                                                            <input type="checkbox" hidden="hidden" id="switch8">
                                                            <label class="switch" for="switch8"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="actions-btn">
                                                            <span class="iconbox button soft-primary"><i
                                                                    class="icofont-pen-alt-1"></i></span>
                                                            <span class="iconbox button soft-danger"><i
                                                                    class="icofont-trash"></i></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <figure><img src="images/resources/user5.jpg" alt=""></figure>
                                                        <h5>Andrew</h5>
                                                    </td>
                                                    <td><a class="mini-btn" href="#" title="">view</a></td>
                                                    <td><a class="mini-btn" href="#" title="">view</a></td>
                                                    <td>
                                                        <div class="switch-btn">
                                                            <input type="checkbox" hidden="hidden" id="switch9">
                                                            <label class="switch" for="switch9"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="switch-btn">
                                                            <input type="checkbox" hidden="hidden" id="switch10">
                                                            <label class="switch" for="switch10"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="actions-btn">
                                                            <span class="iconbox button soft-primary"><i
                                                                    class="icofont-pen-alt-1"></i></span>
                                                            <span class="iconbox button soft-danger"><i
                                                                    class="icofont-trash"></i></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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