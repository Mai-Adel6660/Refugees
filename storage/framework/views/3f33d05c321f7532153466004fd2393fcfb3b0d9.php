<?php /* C:\xampp\htdocs\Refugees\resources\views/auth/out.blade.php */ ?>
<?php $__env->startSection('content'); ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo e(asset('refugee/images/bg_2.jpg')); ?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h2 class="mb-3 bread">Keep In Touch</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Login <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
      <nav class="main-nav">
        <ul>
          <li><a class="signin" href="<?php echo e(URL('/login')); ?>">Sign in</a></li>
          <li><a class="signup" href="<?php echo e(URL('/register')); ?>">Sign up</a></li>
        </ul>
      </nav>
      
      <div class="user-modal">
          <div class="user-modal-container">
            <ul class="switcher">
              <li><a href="<?php echo e(URL('/login')); ?>">Sign in</a></li>
              <li><a href="#0">New account</a></li>
            </ul>

            <?php echo $__env->yieldContent('login'); ?>



            <?php echo $__env->yieldContent('signup'); ?>


          </div>
      </div> 
<?php echo $__env->make('style.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>