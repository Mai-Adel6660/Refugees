<?php /* C:\xampp\htdocs\Refugees\resources\views/admin/job/edit.blade.php */ ?>
<?php $__env->startSection('content'); ?>
        
	<div class="container">
		<div class="raw">
			<section class="content-header">
		      <h2>
		        Edit
		      </h2>
		      <ol class="breadcrumb">
		        <li><a href="<?php echo e(URL('admin')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
		        <li class="active">Dashboard</li>
		      </ol>
    		</section>

    		<div class="box-body">
				<?php echo Form::open(['url' => 'admin/job/update', 'method'=>'PUT'
				,'files'=>true]); ?>

			  		<div class="form-group">
			        	<?php echo Form::label('name_job', 'Job Name:'); ?>

			        	<?php echo Form::text('name_job',old('name_job'), ['class'=>'form-control']); ?>

			        </div>
			        <div class="form-group">
			        	<?php echo Form::label('seniority', 'Seniority:'); ?>

			        	<?php echo Form::text('seniority',old('seniority'), ['class'=>'form-control']); ?>

			        </div>
			        <div class="form-group">
			        	<?php echo Form::label('details', 'Details:'); ?>

			        	<?php echo Form::text('details',old('details'), ['class'=>'form-control']); ?>

			        </div>
					<div class="form-group">
			        	<?php echo Form::label('type', 'Type:'); ?>

			        	<?php echo Form::select('type',['full_time'=>trans('admin.full-time'),'part_time'=>trans('admin.part-time')],old('type'), ['class'=>'form-control']); ?>

			        </div>
			        <div class="form-group">
			        	<?php echo Form::label('sallery', 'Sallery:'); ?>

			        	<?php echo Form::number('sallery',old('sallery'), ['class'=>'form-control']); ?>

			        </div>
			        
			    <?php echo Form::submit('Add', ['class'=>'btn btn-primary']); ?>


			    <?php echo e(Form::close()); ?>

		    </div>

		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>