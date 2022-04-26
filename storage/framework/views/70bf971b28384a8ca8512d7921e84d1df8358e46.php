<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>GueMuda | Adminstrator</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>
    <div class="page-loader" id="page-loader">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <span>Loading...</span>
    </div><!-- page loader -->
    <div class="theme-layout gray-bg vh-100">

        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-8">
                    <div class="logo-up">
                        <figure class="logo"><img alt="" src="images/logo.png"><span>Socimo</span></figure>
                    </div>
                    <div class="box">
                        <input type="checkbox" id="toggle" class="box__toggle" hidden>
                        <img src="images/resources/login-top.jpg" alt="Picture by Autumn Studio" class="box__image">
                        <form method="POST" action="<?php echo e(route('register')); ?>" class="form form--register">
                            <?php echo csrf_field(); ?>
                            <span>

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-key">
                                    <path
                                        d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                                    </path>
                                </svg></span>
                            <h1 class="form__title">Sign up</h1>
                            <div class="form__helper">
                                <input type="text" name="username" id="new-user" placeholder="User"
                                    class="form__input" />
                                <label class="form__label" for="new-user">Username</label>
                            </div>
                            <div class="form__helper">
                                <input type="email" name="email" id="email" placeholder="Email" class="form__input" />
                                <label class="form__label" for="email">Email</label>
                            </div>
                            <div class="form__helper">
                                <input type="password" name="password" id="new-user-password" placeholder="Password"
                                    class="form__input" />
                                <label class="form__label" for="new-user-password">Password</label>
                            </div>
                            <div class="form__helper">
                                <input type="password" name="password_confirmation" id="confirm-password"
                                    Placeholder="Confirm password" class="form__input" />
                                <label class="form__label" for="confirm-password">Confirm password</label>
                            </div>
                            <button type="submit" class="form__button">Register</button>
                            <p class="form__text">Already have an account?
                                <label for="toggle" class="form__link">Sign in!</label>
                            </p>
                        </form>
                        <?php if(session('status')): ?>
                        <div class="alert alert-success mb-3 rounded-0" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                        <?php endif; ?>
                        <form class="form form--login" method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                            <span><svg id="login" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg></span>
                            <h1 class="form__title">Sign in</h1>
                            <div class="form__helper">
                                <input value="<?php echo e(old('username')); ?>" type="text" name="username" id="username"
                                    placeholder="Username"
                                    class="form__input <?php echo e($errors->has('username') ? 'is-invalid' : ''); ?>" />

                                <label class="form__label" for="username"><?php echo e($errors->has('username') ? '' : 'Username'); ?></label>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'username']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'username']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </div>

                            <div class="form__helper">
                                <input type="password" name="password" id="password" placeholder="Password"
                                    class="form__input <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" />
                                <label class="form__label" for="password"><?php echo e($errors->has('password') ? '' : 'Password'); ?></label>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'password']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'password']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </div>

                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['class' => 'form__button']]); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form__button']); ?>
                                <?php echo e(__('Log in')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <p class="form__text">Don't have an account?
                                <label for="toggle" class="form__link">Sign up!</label>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <figure class="bottom-mockup"><img alt="" src="images/footer.png"></figure>
        <div class="bottombar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span class="">&copy; Copyright All rights reserved by socimo 2020</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="js/main.min.js"></script>
    <script src="js/vivus.min.js"></script>
    <script src="js/script.js"></script>


</body>

</html><?php /**PATH /Users/mike/laravel/Gue-Muda/resources/views/auth/login.blade.php ENDPATH**/ ?>