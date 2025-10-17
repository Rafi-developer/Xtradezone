<!--==============================	Header Area  ==============================-->
    <header class="th-header header-layout1">
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="<?php echo e(url('/')); ?>">
                                    <img src="<?php echo e(Vite::asset('resources/img/LOGO_AI_RGB.png')); ?>" width="165px" height="auto" alt="Xtradezone">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li>
                                        <a href="<?php echo e(url('/')); ?>">Home</a>
                                    </li>
                                    <li><a href="<?php echo e(url('/about-us')); ?>">About Us</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Our Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo e(url('/service')); ?>">Services</a></li>
                                            <li><a href="<?php echo e(url('/service-details')); ?>">Service Details</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="<?php echo e(url('/blog')); ?>">Blog</a></li>
                                    <li>
                                        <a href="<?php echo e(url('/contact-us')); ?>">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="header-button d-flex d-lg-none">
                                <button type="button" class="th-menu-toggle icon-btn"><i
                                        class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button">
                                <a href="<?php echo e(url('https://xtradezone.com/project/register')); ?>" class="th-btn style2">Sign Up Here<i
                                        class="far fa-long-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php /**PATH C:\xampp\htdocs\Xtradezone\resources\views/partials/header.blade.php ENDPATH**/ ?>