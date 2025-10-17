 <!doctype html>
<html class="no-js" lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!--==============================
        Page Title & SEO
    ==============================-->
    <title><?php echo $__env->yieldContent('title', 'Xtradezone'); ?></title>
    <meta name="author" content="Xtradezone">
    <meta name="description" content="Xtradezone - AI and Automation Integration">
    <meta name="keywords" content="AI, Automation, Robotics, Xtradezone">
    <meta name="robots" content="INDEX,FOLLOW">

    <!--==============================
        Mobile Specific Metas
    ==============================-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--==============================
        Favicons
    ==============================-->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(Vite::asset('resources/assets/img/favicons/apple-icon-57x57.png')); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo e(Vite::asset('resources/assets/img/favicons/apple-icon-60x60.png')); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(Vite::asset('resources/assets/img/favicons/apple-icon-72x72.png')); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(Vite::asset('resources/assets/img/favicons/apple-icon-76x76.png')); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(Vite::asset('resources/assets/img/favicons/apple-icon-114x114.png')); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(Vite::asset('resources/assets/img/favicons/apple-icon-120x120.png')); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(Vite::asset('resources/assets/img/favicons/apple-icon-144x144.png')); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(Vite::asset('resources/assets/img/favicons/apple-icon-152x152.png')); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(Vite::asset('resources/assets/img/favicons/apple-icon-180x180.png')); ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo e(Vite::asset('resources/assets/img/favicons/android-icon-192x192.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(Vite::asset('resources/assets/img/favicons/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(Vite::asset('resources/assets/img/favicons/favicon-96x96.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(Vite::asset('resources/assets/img/favicons/favicon-16x16.png')); ?>">
    <link rel="manifest" href="<?php echo e(Vite::asset('resources/assets/img/favicons/manifest.json')); ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo e(Vite::asset('resources/assets/img/favicons/ms-icon-144x144.png')); ?>">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
        Google Fonts
    ==============================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Space+Grotesk:wght@300..700&display=swap"
        rel="stylesheet">

    <!--==============================
        All CSS Files (via Vite)
    ==============================-->
    <link rel="stylesheet" href="<?php echo e(Vite::asset('resources/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(Vite::asset('resources/css/fontawesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(Vite::asset('resources/css/magnific-popup.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(Vite::asset('resources/css/swiper-bundle.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(Vite::asset('resources/css/style.css')); ?>">

    
    
</head>


<body class="bg-black">

    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->


    <!--********************************
   		Code Start From Here 
	******************************** -->
    <div class="cursor-follower"></div>

    <!-- slider drag cursor -->
    <!-- <div class="slider-drag-cursor"> DRAG </div> -->

    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader ">
        <button class="th-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <div class="bounce">
                <img src="<?php echo e(Vite::asset('resources/img/logo_xtradezone.svg')); ?>" alt="Xtradezone">
            </div>
            <span class="loader">
                Xtradezone
                <span class="loading-text">Xtradezone</span>
            </span>
        </div>
    </div>

    <!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(Vite::asset('resources/img/LOGO_AI_RGB.png')); ?>" alt="Xtradezone"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <li><a href="<?php echo e(url('/about-us')); ?>">About Us</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Services</a>
                        <ul class="sub-menu">
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Service Details</a></li>
                        </ul>
                    </li>
               <li><a href="#">Blog</a></li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="color-scheme-wrap active">
        <button class="switchIcon"><i class="fa-solid fa-palette"></i></button>
        <h3 class="color-scheme-wrap-title text-center">Color Switcher</h3>
        <div class="color-switch-btns">
            <button data-color="#FF4F38"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#3282FB"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#6D30FB"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#27AE60"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#FF7E02"><i class="fa-solid fa-droplet"></i></button>
        </div>
    </div>

    
    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
    
    <main>
      <?php echo $__env->yieldContent('content'); ?>
    </main>
    
    
    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  
    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>


    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="<?php echo e(Vite::asset('resources/js/vendor/jquery-3.7.1.min.js')); ?>"></script>
    <!-- Swiper Js -->
    <script src="<?php echo e(Vite::asset('resources/js/swiper-bundle.min.js')); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo e(Vite::asset('resources/js/bootstrap.min.js')); ?>"></script>
    <!-- Magnific Popup -->
    <script src="<?php echo e(Vite::asset('resources/js/jquery.magnific-popup.min.js')); ?>"></script>
    <!-- Counter Up -->
    <script src="<?php echo e(Vite::asset('resources/js/jquery.counterup.min.js')); ?>"></script>
    <!-- Range Slider -->
    <script src="<?php echo e(Vite::asset('resources/js/jquery-ui.min.js')); ?>"></script>
    <!-- Isotope Filter -->
    <script src="<?php echo e(Vite::asset('resources/js/imagesloaded.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(Vite::asset('resources/js/isotope.pkgd.min.js')); ?>"></script>
    <!-- Cue Js -->
    <script src="<?php echo e(Vite::asset('resources/js/scrollCue.min.js')); ?>"></script>
    <!-- Gsap -->
    <script src="<?php echo e(Vite::asset('resources/js/gsap.min.js')); ?>"></script>
    <!-- Scroll Trigger -->
    <script src="<?php echo e(Vite::asset('resources/js/ScrollTrigger.min.js')); ?>"></script>
    <!-- Split Text -->
    <script src="<?php echo e(Vite::asset('resources/js/SplitText.min.js')); ?>"></script>
    <!-- Lenis Js -->
    <script src="<?php echo e(Vite::asset('resources/js/lenis.min.js')); ?>"></script>

    <!-- Perticle Js -->
    <script src="<?php echo e(Vite::asset('resources/js/particles.min.js')); ?>"></script>
    <script src="<?php echo e(Vite::asset('resources/js/particles-config.js')); ?>"></script>

    <!-- Main Js File -->
    <script src="<?php echo e(Vite::asset('resources/js/main.js')); ?>"></script>

</body>

</html>

<?php /**PATH C:\xampp\htdocs\Xtradezone\resources\views/layouts/app.blade.php ENDPATH**/ ?>