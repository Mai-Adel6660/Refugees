<?php /* C:\xampp\htdocs\Refugees\resources\views/admin/admins/create.blade.php */ ?>
<?php $__env->startSection('content'); ?>
        
	<div class="container">
		<div class="raw">
			<section class="content-header">
		      <h2>
		        Add Admin
		      </h2>
		      <ol class="breadcrumb">
		        <li><a href="<?php echo e(URL('admin')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
		        <li class="active">Dashboard</li>
		      </ol>
    		</section>

		<?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        <?php endif; ?>
			<div class="box-body">
				<?php echo Form::open([ 'url' => 'admin/ad/store', 'method' => 'post']); ?>

			  		<div class="form-group">
			        	<?php echo Form::label('name', 'Name:'); ?>

			        	<?php echo Form::text('name',null, ['class'=>'form-control']); ?>

			        	<?php echo e(csrf_field()); ?>

			        </div>
			        <div class="form-group">
			        	<?php echo Form::label('email', 'Email:'); ?>

			        	<?php echo Form::email('email',null, ['class'=>'form-control']); ?>

			        </div>
			        <div class="form-group">
			        	<?php echo Form::label('password', 'Password:'); ?>

			        	<?php echo Form::password('password', ['class'=>'form-control']); ?> 
			    	</div>

			    <?php echo Form::submit('Add New Admin', ['class'=>'btn btn-primary']); ?>


			    <?php echo e(Form::close()); ?>

		    </div>
		</div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>