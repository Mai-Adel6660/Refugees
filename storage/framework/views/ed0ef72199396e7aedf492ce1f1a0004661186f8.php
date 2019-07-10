<?php /* C:\xampp\htdocs\Refugees\resources\views/admin/emails/admin_reset_password.blade.php */ ?>
<?php $__env->startComponent('mail::message'); ?>
Reset Account
Welcom <?php echo e($data['data']->name); ?> <br>
The body of your message.

<?php $__env->startComponent('mail::button', ['url' => aurl('reset/password/'.$data['token']) ]); ?>
Click Here To Reset Your Password
<?php echo $__env->renderComponent(); ?>
Or <br>
Copy This Link
<a href="aurl('reset/password'.$data['token'])"></a>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
