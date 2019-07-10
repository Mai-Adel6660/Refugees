<?php /* C:\xampp\htdocs\Refugees\resources\views/admin/apart/edit.blade.php */ ?>
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
				<?php echo Form::open(['url' => ['admin/apart/update',$apart->id], 'method'=>'PUT'
				,'files'=>true]); ?>

			  		<div class="form-group">
			        	<?php echo Form::label('location', 'The Location:'); ?>

			        	<?php echo Form::text('location',old('location'), ['class'=>'form-control']); ?>

			        </div>
			        <div class="form-group">
			        	<?php echo Form::label('area', 'Area:'); ?>

			        	<?php echo Form::text('area',old('area'), ['class'=>'form-control']); ?>

			        </div>
			        <div class="form-group">
			        	<?php echo Form::label('floor', 'Floor:'); ?>

			        	<?php echo Form::text('floor',old('floor'), ['class'=>'form-control']); ?>

			        </div>
					<div class="form-group">
			        	<?php echo Form::label('furnished', 'Furnished:'); ?>

			        	<?php echo Form::select('furnished',['yes'=>trans('admin.yes'),'no'=>trans('admin.no')],old('furnished'), ['class'=>'form-control']); ?>

			        </div>
			        <div class="form-group">
			        	<?php echo Form::label('rooms', 'Rooms:'); ?>

			        	<?php echo Form::number('rooms',old('rooms'), ['class'=>'form-control']); ?>

			        </div>
			        
			        <div class="form-group">
			        	<?php echo Form::label('bathrooms', 'Bathrooms:'); ?>

			        	<?php echo Form::number('bathrooms',old('bathrooms'), ['class'=>'form-control']); ?> 
			    	</div>

			    	<div class="form-group">
			        	<?php echo Form::label('price', 'Price:'); ?>

			        	<?php echo Form::text('price',old('price'), ['class'=>'form-control']); ?> 
			    	</div>

			    	<div class="form-group">
			        	<?php echo Form::label('img', 'Image:'); ?>

			        	<?php echo Form::file('img',old('img'), ['class'=>'form-control']); ?> 
			    	</div>
			    	<div class="form-group">
			        	<?php echo Form::label('communication', 'Communication:'); ?>

			        	<?php echo Form::textarea('communication',old('communication'), ['class'=>'form-control']); ?> 
			    	</div>
			    <?php echo Form::submit('Add', ['class'=>'btn btn-primary']); ?>


			    <?php echo e(Form::close()); ?>

		    </div>

		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>