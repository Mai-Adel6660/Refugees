<?php /* C:\xampp\htdocs\Refugees\resources\views/style/index_donate.blade.php */ ?>
<?php echo $__env->make('style.donation.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('style.layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('style.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>