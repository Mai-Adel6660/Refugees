<?php /* C:\xampp\htdocs\Refugees\resources\views/admin/users/edit.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="box">
		<section class="content-header">
	      <h2>
	        Edit
	      </h2>
	      <ol class="breadcrumb">
	        <li><a href="<?php echo e(URL('admin')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
	      </ol>
    	</section>
		<div class="box-body">
			<?php echo Form::open(['url' => '/admin/user/update', 'method' => 'PUT' ]); ?>

			<div class="form-group">
			<?php echo Form::label('name', 'Name:'); ?>

			<?php echo Form::text('name',old('name'), ['class'=>'form-control']); ?>

			
			</div>

			<div class="form-group">
			<?php echo Form::label('email', 'Email:'); ?> <!--$admin->email-->
			<?php echo Form::email('email',old('email'), ['class'=>'form-control']); ?> 
			</div> 

			<div class="form-group">
		        <?php echo Form::label('level',trans('admin.level')); ?>

		        <?php echo Form::select('level',['user'=>trans('admin.user'),'refugee'=>trans('admin.refugee'),'organization'=>trans('admin.organization')],null, ['class'=>'form-control','placeholder'=>'....']); ?>

			</div>

			<div class="form-group">
			<?php echo Form::label('password', 'Password:'); ?>

			<?php echo Form::password('password', ['class'=>'form-control']); ?>

			</div>	

			<?php echo Form::submit('Save', ['class'=>'btn btn-primary']); ?>


			<?php echo e(Form::close()); ?>

		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>