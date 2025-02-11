<header class="">
    <div class="topbar stick">
        <div class="logo"><img alt="" src="<?php echo e('/images/guemuda.png'); ?>"></div>
        <div class="searches">
            <form method="post">
                <input type="text" placeholder="Search...">
                <button type="submit"><i class="icofont-search"></i></button>
            </form>
        </div>
        <ul class="web-elements">
            <?php if(Laravel\Jetstream\Jetstream::hasTeamFeatures()): ?>
            <li>
                <div class="user-dp">
                    <a href="profile-page2.html" title="">
                        <img src="images/resources/user.jpg" alt="">
                        <div class="name">
                            <h4> <?php echo e(Auth::user()->username); ?></h4>
                        </div>
                    </a>
                </div>
            </li>
            <?php endif; ?>
            <li>
                <a href="index.html" title="Home" data-toggle="tooltip">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg></i>
                </a>
            </li>
            <li>
                <a class="mesg-notif" href="#" title="Messages" data-toggle="tooltip">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-message-square">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg></i>
                </a>
                <span></span>
            </li>
            <li>
                <a class="mesg-notif" href="#" title="Notifications" data-toggle="tooltip">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-bell">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg></i>
                </a>
                <span></span>
            </li>
            <li>
                <a class="create" href="#" title="Add New" data-toggle="tooltip">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-plus">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg></i>
                </a>
            </li>
            <li>
                <a title="" href="#">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-grid">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg>
                    </i>
                </a>
                <?php if(auth()->guard()->check()): ?>
                <ul class="dropdown">
                    <li><a href="<?php echo e(route('profile.show')); ?>" title=""><i class="icofont-user-alt-3"></i> Your
                            Profile</a></li>
                    <li><a href="add-new-course.html" title=""><i class="icofont-plus"></i> New Course</a></li>
                    <li><a class="invite-new" href="#" title=""><i class="icofont-brand-slideshare"></i> Invite
                            Collegue</a></li>
                    <li><a href="pay-out.html" title=""><i class="icofont-price"></i> Payout</a></li>
                    <li><a href="price-plan.html" title=""><i class="icofont-flash"></i> Upgrade</a></li>
                    <li><a href="help-faq.html" title=""><i class="icofont-question-circle"></i> Help</a></li>
                    <li><a href="settings.html" title=""><i class="icofont-gear"></i> Setting</a></li>
                    <li><a href="privacy-n-policy.html" title=""><i class="icofont-notepad"></i> Privacy</a></li>
                    <li><a class="dark-mod" title="" href="#"><i class="icofont-moon"></i> Dark Mode</a></li>
                    <li class="logout">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['href' => ''.e(route('logout')).'','onclick' => 'event.preventDefault();
                        document.getElementById(\'logout-form\').submit();']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('logout')).'','onclick' => 'event.preventDefault();
                        document.getElementById(\'logout-form\').submit();']); ?><i class="icofont-power"></i> Logout
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <form method="POST" id="logout-form" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                        </form>
                    </li>
                </ul>
                <?php endif; ?>
            </li>
        </ul>
    </div>

</header>
<!-- header --><?php /**PATH C:\Users\NSR-PC016\Documents\Fhizyel Nazareta Karel\freelance-project\gue-muda\resources\views/partials_admin/header.blade.php ENDPATH**/ ?>