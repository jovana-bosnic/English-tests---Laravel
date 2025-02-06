<div class="loader_bg">
    <div class="loader"><img src="<?php echo e(asset('assets/img/loading.gif')); ?>" alt="#" /></div>
</div>

<header>
    <div class="header">
        <div class="header_midil">
            <div class="container">
                <div class="row d_flex">
                    <div class="col-md-3 d_none">
                        <ul class="conta_icon">
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Call Us : +01 1234567890</a> </li>
                        </ul>
                    </div>
                    <div class="col-md-6 ">
                        <a class="logo" href="<?php echo e(route('home')); ?>"><h1 class="yellow">English tests</h1></a>
                    </div>
                    <div class="col-md-3 d_none">
                        <ul class="conta_icon ">
                            <li><a href="mailto:english-tests@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> english-tests@gmail.com</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_bo">
            <div class="container">
                <div class="row">
                        <nav class="navigation navbar navbar-expand-md navbar-dark col-md-12">
                                <section class="row top-nav">
                                    <input id="menu-toggle" type="checkbox" />
                                    <label class='menu-button-container ml-3' for="menu-toggle">
                                        <div class='menu-button'></div>
                                    </label>
                                    <ul class="navbar-nav menu col-12 pr-0">
                                        <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo e(route($m->route)); ?>"> <?php echo e($m->name); ?> </a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <li class="text-light my-auto ml-auto">
                                            <?php if(session()->has("user") && session()->get("user")->role_id == 1): ?>
                                                <a class="sign_btn text-light p-2" href="<?php echo e(route('admin')); ?>">Admin - <?php echo e(session()->get('user')->first_name); ?></a>
                                            <?php elseif(session()->has("user")): ?>
                                                <h2 class="text-light mr-2">
                                                    <i class="fa fa-user fa-md mt-3 mr-2"></i>
                                                    <?php echo e(session()->get('user')->first_name); ?> <?php echo e(session()->get('user')->last_name); ?>

                                                </h2>
                                            <?php endif; ?>
                                        </li>
                                        <li class="my-auto ml-1">
                                            <?php if(session()->has("user")): ?>
                                                <a class="sign_btn text-light pt-2 pb-2 pl-3 pr-3" href="<?php echo e(route('logout')); ?>">Log out</a>
                                            <?php else: ?>
                                                <a class="sign_btn text-light pt-2 pb-2 pl-3 pr-3" href="<?php echo e(route('login')); ?>">sign up now</a>
                                            <?php endif; ?>
                                        </li>
                                    </ul>
                                </section>
                        </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH C:\Users\Jovana\OneDrive\Desktop\english-tests\resources\views/fixed/header.blade.php ENDPATH**/ ?>