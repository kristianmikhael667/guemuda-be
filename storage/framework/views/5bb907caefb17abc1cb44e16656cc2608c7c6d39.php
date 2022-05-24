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
                                <form method="post" enctype="multipart/form-data" action="/administrator/webinars/<?php echo e($webinar->slug); ?>">
                                    <?php echo method_field('put'); ?>
                                    <?php echo csrf_field(); ?>
                                    <div class="d-widget-title">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h3>Edit Webinars</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-text-center" uk-grid>
                                        <div class="uk-width-expand@m">

                                            <fieldset class="uk-fieldset mt-3">
                                                <div class="uk-margin">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Title</span>
                                                    </div>
                                                    <input class="uk-input" name="title" id="title" type="text"
                                                        required value="<?php echo e(old('title', $webinar->title)); ?>">
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
                                                        <span>Slug</span>
                                                    </div>
                                                    <input class="uk-input" name="slug" id="slug" type="text"
                                                        required value="<?php echo e(old('slug', $webinar->slug)); ?>">
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
                                                        <span>Schedule Webinar</span>
                                                    </div>
                                                    <input min='1899-01-01' max='2000-13-13' class="uk-input"
                                                        name="schedule" id="schedule" type="date"
                                                        value="<?php echo e(old('schedule', $webinar->schedule)); ?>">
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
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Type Webinar</span>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="typewebinar" id="typewebinar1" value="0">
                                                        <label class="form-check-label" for="typewebinar1">
                                                            Umum
                                                        </label>
                                                        </div>
                                                        <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="typewebinar" id="typewebinar2" value="1" checked>
                                                        <label class="form-check-label" for="typewebinar2">
                                                            Premium
                                                        </label>
                                                        </div>
                                                    <?php $__errorArgs = ['typewebinar'];
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
                                                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <p class="text-danger"><?php echo e($message); ?></p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Description</span>
                                                    </div>
                                                    <textarea class="uk-textarea" name="description" id="createnews"
                                                        rows="12"
                                                        ><?php echo e(old('description', $webinar->description)); ?></textarea>
                                                </div>
                                                <div class="uk-margin">
                                                    <div class="uk-margin" id="imagepost">
                                                        <div class="d-flex justify-content-between mb-1">
                                                            <span>Image Poster</span>
                                                        </div>
                                                        <input type="file" name="avatar" id="avatar" class="dropify"
                                                            data-max-file-size="5M" value="<?php echo e(old('avatar', $webinar->avatar)); ?>">
                                                    </div>
                                                </div>

                                                
                                                <div class="uk-margin">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Survey Question 1</span>
                                                    </div>
                                                    <input class="uk-input" name="survey_question1" id="question1" type="text" value="<?php echo e(old('question1', $webinar->survey_question1)); ?>"/>
                                                    <?php $__errorArgs = ['survey_question1'];
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
                                                        <span>Survey Question 2</span>
                                                    </div>
                                                    <input class="uk-input" name="survey_question2" id="question2" type="text" value="<?php echo e(old('question2', $webinar->survey_question2)); ?>

                                                    ">
                                                    <?php $__errorArgs = ['survey_question2'];
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
                                                        <span>Survey Question 3</span>
                                                    </div>
                                                    <input class="uk-input" name="survey_question3" id="question3" type="text" value="<?php echo e(old('question3', $webinar->survey_question3)); ?>

                                                    ">
                                                    <?php $__errorArgs = ['survey_question3'];
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
                                                        <span>Survey Question 4</span>
                                                    </div>
                                                    <input class="uk-input" name="survey_question4" id="question4" type="text" value="<?php echo e(old('question4', $webinar->survey_question4)); ?>

                                                    ">
                                                    <?php $__errorArgs = ['survey_question4'];
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
                                                        <span>Survey Question 5</span>
                                                    </div>
                                                    <input class="uk-input" name="survey_question5" id="question5" type="text" value="<?php echo e(old('question5', $webinar->survey_question5)); ?>

                                                    ">
                                                    <?php $__errorArgs = ['survey_question5'];
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
                                                        <span>Survey Question 6</span>
                                                    </div>
                                                    <input class="uk-input" name="survey_question6" id="question6" type="text" value="<?php echo e(old('question6', $webinar->survey_question6)); ?>

                                                    ">
                                                    <?php $__errorArgs = ['survey_question6'];
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
                                                        <span>Survey Question 7</span>
                                                    </div>
                                                    <input class="uk-input" name="survey_question7" id="question7" type="text" value="<?php echo e(old('question7', $webinar->survey_question7)); ?>

                                                    ">
                                                    <?php $__errorArgs = ['survey_question7'];
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
                                                        <span>Survey Question 8</span>
                                                    </div>
                                                    <input class="uk-input" name="survey_question8" id="question8" type="text" value="<?php echo e(old('question8', $webinar->survey_question8)); ?>

                                                    ">
                                                    <?php $__errorArgs = ['survey_question8'];
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
                                                        <span>Survey Question 9</span>
                                                    </div>
                                                    <input class="uk-input" name="survey_question9" id="question9" type="text" value="<?php echo e(old('question9', $webinar->survey_question9)); ?>

                                                    ">
                                                    <?php $__errorArgs = ['survey_question9'];
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
                                                        <span>Survey Question 10</span>
                                                    </div>
                                                    <input class="uk-input" name="survey_question10" id="question10" type="text" value="<?php echo e(old('question10', $webinar->survey_question10)); ?>

                                                    ">
                                                    <?php $__errorArgs = ['survey_question10'];
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
                                            </fieldset>

                                        </div>

                                        <div class="uk-width-1-3@m">
                                            <div class="uk-card uk-card-default uk-card-body">
                                                <div class="d-widget-title">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <h4>Part Owner</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-card uk-card-hover">
                                                    <input class="uk-input" name="organizer" id="organizer" type="text"
                                                         value="<?php echo e(old('organizer', $webinar->organizer)); ?>">
                                                </div>

                                                <div class="uk-card uk-card-hover mt-2">
                                                    <input class="uk-input" name="moderator" id="moderator" type="text"
                                                         value="<?php echo e(old('moderator', $webinar->moderator)); ?>">
                                                </div>

                                                <div class="uk-card uk-card-hover mt-2">
                                                    <input class="uk-input" name="speaker" id="speaker" type="text"
                                                    value="<?php echo e(old('speaker', $webinar->speaker)); ?>">
                                                </div>

                                                <div class="uk-card uk-card-hover mt-2">
                                                    <input class="uk-input" name="speaker2" id="speaker2" type="text"
                                                        placeholder="Input Speakers 2" value="<?php echo e(old('speaker_2', $webinar->speaker_2)); ?>">
                                                </div>
                                            </div>

                                            <div class="uk-card uk-card-default uk-card-body">
                                                <div class="d-widget-title">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <h4>Part Location</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-card uk-card-hover">
                                                    <input class="uk-input" name="address" id="address" type="text"
                                                    value="<?php echo e(old('address', $webinar->address)); ?>">
                                                </div>

                                                <div class="uk-card uk-card-hover mt-2">
                                                    <input class="uk-input" name="links_maps" id="links_maps"
                                                        type="text" value="<?php echo e(old('links_maps', $webinar->links_maps)); ?>">
                                                </div>
                                            </div>

                                            <div class=" uk-card uk-card-default uk-card-body">
                                                <div class="d-widget-title">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <h4>Category</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                                    <div class="row">
                                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <label class="mr-2"><input class="uk-radio"
                                                                name="category_event" value="<?php echo e($item->id); ?>"
                                                                type="radio">
                                                            <?php echo e($item->name); ?></label>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="uk-card uk-card-default uk-card-body">
                                                <div class="d-widget-title">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <h4>Tags</h4>
                                                        </div>
                                                        <div>
                                                            <button uk-toggle="target: #createtagswebinars"
                                                                type="button" class="btn btn-outline-primary btn-sm">Add
                                                                Tags</button>
                                                            
                                                            <?php echo $__env->make('admin.modal-tags-webinar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-card uk-card-hover">
                                                    <select class="uk-input" multiple="multiple" style="width: 100%;"
                                                        name="tags_event[]" id="tagger" data-placeholder="tages" 
                                                        required>
                                                        <?php $__currentLoopData = $tages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($tag->id); ?>">
                                                            <?php echo e($tag->name); ?>

                                                        </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary">Edit Webinars</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main content -->
    
    <?php echo $__env->make('admin.ajax-webinar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mike/laravel/gue-muda/resources/views/admin/edit-webinars.blade.php ENDPATH**/ ?>