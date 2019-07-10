<?php /* C:\xampp\htdocs\Refugees\resources\views/admin/admins/show.blade.php */ ?>
<?php $__env->startSection('content'); ?>

<section class="content-header">
      <h2>
        Restore deleted data
      </h2>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(URL('admin')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

<div class="container">
	<div class="raw">
		
        <?php echo Form::open([ 'url' => 'admin/ad/index']); ?>

		<table border=3>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            <?php $__currentLoopData = $trashed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trash): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($trash->id); ?></td>
                <td><?php echo e($trash->name); ?></td>
                <td><?php echo e($trash->email); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </table>
        <?php echo Form::submit('restore', ['class'=>'btn btn-lg btn-info']); ?>


        <?php echo e(Form::close()); ?>

	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>