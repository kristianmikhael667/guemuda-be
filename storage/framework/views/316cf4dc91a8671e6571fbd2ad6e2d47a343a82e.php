<?php $__env->startSection('container'); ?>
<div class="theme-layout">
    <?php echo $__env->make('partials_admin.responsiveheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials_admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials_admin.topsubbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials_admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-content">
                    

                    <div class="row merged20 mb-4">
                        <div class="col-lg-12">
                            <div class="d-widget">
                                <div class="d-widget-title">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h4>Subscribe Management</h4>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="d-widget-title">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <form action="/administrator/users" method="get" role="search">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="search"
                                                        placeholder="Search Name ..." value="<?php echo e(request('name')); ?>">
                                                    <span class="input-group-btn">
                                                        <button type="submit" class="btn btn-outline-secondary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-search">
                                                                <circle cx="11" cy="11" r="8"></circle>
                                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Table start -->
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Roles</th>
                                            <th>Status</th>
                                            <th>Created</th>
                                            <th>Updated</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $num => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                        <tr>
                                            <td><?php echo e($users->firstItem() + $num); ?></td>
                                            <td><?php echo e($user->first_name . ' ' . $user->last_name); ?></td>
                                            <td><?php echo e($user->email); ?>

                                            </td>
                                            <td><?php echo e($user->roles); ?></td>
                                            <td><span class=" text-success"><?php echo e($user->status); ?></span></td>
                                            <td><?php echo e(\Carbon\Carbon::parse($user->created_at)->diffForHumans()); ?>

                                            </td>
                                            <td><?php echo e(\Carbon\Carbon::parse($user->updated_at)->diffForHumans()); ?></td>
                                        </tr>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="8" class="prova">
                                                Data Table Empty
                                            </td>
                                        </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center">
                                    <?php echo e($users->links('vendor.pagination.default')); ?>

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mike/laravel/gue-muda/resources/views/admin/users-superadmin.blade.php ENDPATH**/ ?>