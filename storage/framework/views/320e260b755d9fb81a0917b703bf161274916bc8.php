<?php /* C:\xampp\htdocs\Refugees\resources\views/admin/job/create.blade.php */ ?>
<?php $__env->startSection('content'); ?>
        
	<div class="container">
		<div class="raw">
			<section class="content-header">
		      <h2>
		        Add Job
		      </h2>
		      <ol class="breadcrumb">
		        <li><a href="<?php echo e(URL('admin')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
		        <li class="active">Dashboard</li>
		      </ol>
    		</section>

    		<div class="box-body">
				<?php echo Form::open(['url' => 'admin/job/store', 'method'=>'POST'
				,'files'=>true]); ?>

			  		<div class="form-group">
			        	<?php echo Form::label('name_job', 'Job Name:'); ?>

			        	<?php echo Form::text('name_job',null, ['class'=>'form-control']); ?>

			        </div>
			        <div class="form-group">
			        	<?php echo Form::label('seniority', 'Seniority:'); ?>

			        	<?php echo Form::text('seniority',null, ['class'=>'form-control']); ?>

			        </div>
			        <div class="form-group">
			        	<?php echo Form::label('details', 'Details:'); ?>

			        	<?php echo Form::text('details',null, ['class'=>'form-control']); ?>

			        </div>
					<div class="form-group">
			        	<?php echo Form::label('type', 'Type:'); ?>

			        	<?php echo Form::select('type',['full_time'=>trans('admin.full-time'),'part_time'=>trans('admin.part-time')],null, ['class'=>'form-control']); ?>

			        </div>
			        <div class="form-group">
			        	<?php echo Form::label('sallery', 'Sallery:'); ?>

			        	<?php echo Form::number('sallery',null, ['class'=>'form-control']); ?>

			        </div>

			        <div class="form-group">
			        	<?php echo Form::label('category_id', 'Category:'); ?>

			        	<select name="category_id" class="form-control">
			        		
			        	<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			        		<option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
			        	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			        	</select>

			        	
			        </div>
			        
			        
			    <?php echo Form::submit('Add', ['class'=>'btn btn-primary']); ?>


			    <?php echo e(Form::close()); ?>

		    </div>

		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>