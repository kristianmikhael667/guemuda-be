
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
                                            <h4>Webinars Management</h4>
                                        </div>
                                        <div>
                                            <a href="/administrator/webinars/create" id="create-new-post"
                                                class="btn btn-primary">Create Webinars</a>
                                        </div>
                                    </div>
                                </div>
                                <?php if(session()->has('success')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo e(session('success')); ?>

                                    </div>
                                <?php endif; ?>
                                <div class="d-widget-title">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <form action="/administrator/webinars" method="get" role="search">
                                                <div class="input-group">
                                                    <?php if(request('category')): ?>
                                                    <input type="text" class="form-control" name="search"
                                                        placeholder="Search Title Webinars ..."
                                                        value="<?php echo e(request('category')); ?>">
                                                    <?php endif; ?>
                                                    <?php if(request('user')): ?>
                                                    <input type="text" class="form-control" name="search"
                                                        placeholder="Search Title Webinars ..."
                                                        value="<?php echo e(request('user')); ?>">
                                                    <?php endif; ?>
                                                    <input type="text" class="form-control" name="search"
                                                        placeholder="Search Title Webinars ..."
                                                        value="<?php echo e(request('title')); ?>">
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
                                <div style="overflow-x: auto">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Title</th>
                                                <th>Speaker</th>
                                                <th>Speaker 2</th>
                                                <th>Schedule</th>
                                                <th>Category</th>
                                                <th>Tags</th>
                                                <th>Moderator</th>
                                                <th>Organizer</th>
                                                <th>Status</th>
                                                <th>Question1</th>
                                                <th>Question2</th>
                                                <th>Question3</th>
                                                <th>Question4</th>
                                                <th>Question5</th>
                                                <th>Question6</th>
                                                <th>Question7</th>
                                                <th>Question8</th>
                                                <th>Question9</th>
                                                <th>Question10</th>
                                                <th>Created</th>
                                                <th>Updated</th>
                                                <th>Regist Result</th>
                                                <th class="disableFilterBy">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $webinars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $num => $webinar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <?php 
                                            $explode_id = array_map('intval', explode(',', $webinar->tags_event));
                                            ?>
                                            <tr>
                                                <td><?php echo e($webinars->firstItem() + $num); ?></td>
                                                <td><a href="/administrator/post/edittitle/<?php echo e($webinar->slug); ?>"><?php echo e($webinar->title); ?></a></td>
                                                <td><?php echo e($webinar->speaker); ?></td>
                                                <td><?php echo e($webinar->speaker_2); ?></td>
                                                <td><?php echo e($webinar->schedule); ?></td>
                                                
                                                <td><?php echo e($webinar->typewebinar === "1"? "Premium" : "Umum"); ?></td>
                                                <td>
                                                    <?php echo e($string = ""); ?>

                                                    <?php $__currentLoopData = $tages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php $__currentLoopData = $explode_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pok): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($pok == $item->id): ?>
                                                    <?php $string .= $item->name . ', '; ?>
                                                    <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php echo e(substr($string, 0, strlen($string) - 2)); ?>

                                                </td>
                                                <td><?php echo e($webinar->moderator); ?></td>
                                                <td><?php echo e($webinar->organizer); ?></td>
                                                <td><span><?php echo e($webinar->status); ?></span></td>
                                                <td><span><?php echo e($webinar->survey_question1 ? $webinar->survey_question1 : '-'); ?></span></td>
                                                <td><span><?php echo e($webinar->survey_question2 ? $webinar->survey_question2 : '-'); ?></span></td>
                                                <td><span><?php echo e($webinar->survey_question3? $webinar->survey_question3 : '-'); ?></span></td>
                                                <td><span><?php echo e($webinar->survey_question4? $webinar->survey_question4 : '-'); ?></span></td>
                                                <td><span><?php echo e($webinar->survey_question5? $webinar->survey_question5 : '-'); ?></span></td>
                                                <td><span><?php echo e($webinar->survey_question6? $webinar->survey_question6 : '-'); ?></span></td>
                                                <td><span><?php echo e($webinar->survey_question7? $webinar->survey_question7 : '-'); ?></span></td>
                                                <td><span><?php echo e($webinar->survey_question8? $webinar->survey_question8 : '-'); ?></span></td>
                                                <td><span><?php echo e($webinar->survey_question9? $webinar->survey_question9 : '-'); ?></span></td>
                                                <td><span><?php echo e($webinar->survey_question10? $webinar->survey_question10 : '-'); ?></span></td>
                                                <td><?php echo e(\Carbon\Carbon::parse($webinar->created_at)->diffForHumans()); ?>

                                                </td>
                                                <td><?php echo e(\Carbon\Carbon::parse($webinar->updated_at)->diffForHumans()); ?></td>
                                                <td><a href="/administrator/register-webinar-export/<?php echo e($webinar->slug); ?>" id="create-new-post"
                                                    class="btn btn-primary">Result</a></td>
                                                <td>
                                                    <a href="/administrator/webinars/<?php echo e($webinar->slug); ?>/edit"
                                                        class="badge btn-light"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-edit">
                                                            <path
                                                                d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                            </path>
                                                            <path
                                                                d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                            </path>
                                                        </svg></span></a>
                                                    <form action="/administrator/webinars/<?php echo e($webinar->slug); ?>" method="post"
                                                        class="d-inline">
                                                        <?php echo method_field('delete'); ?>
                                                        <?php echo csrf_field(); ?>
                                                        <button class="badge btn-light border-0"
                                                            onclick="return confirm('Are you sure ?')"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" class="feather feather-trash-2">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                </path>
                                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                                            </svg></button>
                                                    </form>
                                                </td>
                                            </tr>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr>
                                                <td colspan="12" class="prova">
                                                    Data Table Empty
                                                </td>
                                            </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <?php echo e($webinars->links('vendor.pagination.default')); ?>

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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\NSR-PC016\Documents\Fhizyel Nazareta Karel\freelance-project\gue-muda\resources\views/admin/webinars.blade.php ENDPATH**/ ?>