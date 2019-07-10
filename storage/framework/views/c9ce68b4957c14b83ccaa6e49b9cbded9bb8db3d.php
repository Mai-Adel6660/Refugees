<?php /* C:\xampp\htdocs\Refugees\resources\views/admin/apart/create.blade.php */ ?>
<?php $__env->startSection('content'); ?>
        
	<div class="container">
		<div class="raw">
			<section class="content-header">
		      <h2>
		        Apartment
		      </h2>
		      <ol class="breadcrumb">
		        <li><a href="<?php echo e(URL('admin')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
		        <li class="active">Dashboard</li>
		      </ol>
    		</section>

    		<div class="box-body">
				<?php echo Form::open(['url' => 'admin/apart/store', 'method'=>'POST'
				,'files'=>true]); ?>

			  		<div class="form-group">
			        	<?php echo Form::label('location', 'The Location:'); ?>

			        	<?php echo Form::text('location',null, ['class'=>'form-control']); ?>

			        </div>
			        <div class="form-group">
			        	<?php echo Form::label('area', 'Area:'); ?>

			        	<?php echo Form::text('area',null, ['class'=>'form-control']); ?>

			        </div>
			        <div class="form-group">
			        	<?php echo Form::label('floor', 'Floor:'); ?>

			        	<?php echo Form::text('floor',null, ['class'=>'form-control']); ?>

			        </div>
					<div class="form-group">
			        	<?php echo Form::label('furnished', 'Furnished:'); ?>

			        	<?php echo Form::select('furnished',['yes'=>trans('admin.yes'),'no'=>trans('admin.no')],null, ['class'=>'form-control']); ?>

			        </div>
			        <div class="form-group">
			        	<?php echo Form::label('rooms', 'Rooms:'); ?>

			        	<?php echo Form::number('rooms',null, ['class'=>'form-control']); ?>

			        </div>
			        
			        <div class="form-group">
			        	<?php echo Form::label('bathrooms', 'Bathrooms:'); ?>

			        	<?php echo Form::number('bathrooms',null, ['class'=>'form-control']); ?> 
			    	</div>

			    	<div class="form-group">
			        	<?php echo Form::label('price', 'Price:'); ?>

			        	<?php echo Form::text('price',null, ['class'=>'form-control']); ?> 
			    	</div>

			    	<div class="form-group">
			        	<?php echo Form::label('img', 'Image:'); ?>

			        	<?php echo Form::file('img',null, ['class'=>'form-control']); ?> 
			    	</div>
			    	
			    	<div class="form-group">
			        	<?php echo Form::label('communication', 'Communication:'); ?>

			        	<?php echo Form::textarea('communication',null, ['class'=>'form-control']); ?> 
			    	</div>
			    <?php echo Form::submit('Add', ['class'=>'btn btn-primary']); ?>


			    <?php echo e(Form::close()); ?>

		    </div>

		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>