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
                                <form method="post" enctype="multipart/form-data" action="/administrator/ads">
                                    <?php echo csrf_field(); ?>
                                    <div class="d-widget-title">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h4>Create Ads</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-text-center" uk-grid>
                                        <div class="uk-width-expand@m">
                                            <fieldset class="uk-fieldset mt-3">
                                                <div class="uk-margin">
                                                    <input class="uk-input" name="title" id="title" type="text"
                                                        placeholder="Title Ads">
                                                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($message); ?>

                                                    </div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="uk-margin">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Date Post Community</span>
                                                    </div>
                                                    <input min='1899-01-01' max='2000-13-13' class="uk-input"
                                                        name="created_at" id="created_at" type="date"
                                                        placeholder="Date Post">
                                                    <?php $__errorArgs = ['schedule'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($message); ?>

                                                    </div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="uk-margin">
                                                    <input class="uk-input mb-2 captions" name="link" id="link"
                                                        type="text" placeholder="Link Ads">
                                                </div>
                                                <div class="uk-margin">
                                                    <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <p class="text-danger"><?php echo e($message); ?></p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    <textarea class="uk-textarea" name="desc" id="createnews" rows="12"
                                                        placeholder="Textarea"><?php echo e(old('desc')); ?></textarea>
                                                </div>
                                            </fieldset>
                                        </div>

                                        <div class="uk-width-1-3@m">
                                            <div class="uk-card uk-card-default uk-card-body">
                                                <div class="d-widget-title">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <h4>Position Ads</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                                    <div class="row">
                                                        <label class="mr-2"><input class="uk-radio" name="type"
                                                                value="top" type="radio">
                                                            Top</label>
                                                        <label class="mr-2"><input class="uk-radio" name="type"
                                                                value="under" type="radio">
                                                            Under</label>
                                                        <label class="mr-2"><input class="uk-radio" name="type"
                                                                value="left" type="radio">
                                                            Left</label>
                                                        <label class="mr-2"><input class="uk-radio" name="type"
                                                                value="right" type="radio">
                                                            Right</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-card uk-card-default uk-card-body">
                                                <div class="d-widget-title">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <h4>Upload Ads</h4>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="uk-card uk-card-hover">
                                                    <div class="uk-margin">
                                                        <div class="uk-margin" id="imagepost">
                                                            <input type="file" name="image" id="image" class="dropify"
                                                                data-max-file-size="2M">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Ads</button>
                                </form>
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
                <a href="#" class="send-mesg" title="New Message" data-toggle="tooltip"><i class="icofont-edit"></i></a>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mike/laravel/gue-muda/resources/views/admin/create-ads.blade.php ENDPATH**/ ?>