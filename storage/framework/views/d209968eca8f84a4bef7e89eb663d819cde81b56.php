<?php /* C:\xampp\htdocs\Refugees\resources\views/admin/setting/setting.blade.php */ ?>
<?php $__env->startSection('content'); ?>

<div class="container">
		<div class="raw">
			<section class="content-header">
		      <h2>
		        Settings
		      </h2>
		      <ol class="breadcrumb">
		        <li><a href="<?php echo e(URL('admin')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
		        <li class="active">Dashboard</li>
		      </ol>
    		</section>
    		<div class="box-body">
				<?php echo Form::open(['url' => 'admin/settings/store', 'method'=>'POST'
				,'files'=>true]); ?>

			  		<div class="form-group">
			        	<?php echo Form::label('sitename_en', 'Sitename En:'); ?>

			        	<?php echo Form::text('sitename_en',null, ['class'=>'form-control']); ?>

			        </div>
			        <div class="form-group">
			        	<?php echo Form::label('sitename_ar', 'Sitename Ar:'); ?>

			        	<?php echo Form::text('sitename_ar',null, ['class'=>'form-control']); ?>

			        </div>
			        <div class="form-group">
			        	<?php echo Form::label('email', 'Email:'); ?>

			        	<?php echo Form::email('email',null, ['class'=>'form-control']); ?>

			        </div>
			    	<div class="form-group">
			        	<?php echo Form::label('logo', 'Logo:'); ?>

			        	<?php echo Form::file('logo',null, ['class'=>'form-control']); ?> 
			    	</div>
			    	<div class="form-group">
			        	<?php echo Form::label('icon', 'Icon:'); ?>

			        	<?php echo Form::file('icon',null, ['class'=>'form-control']); ?> 
			    	</div>
			    	<div class="form-group">
			        	<?php echo Form::label('description', 'Description:'); ?>

			        	<?php echo Form::textarea('description',null, ['class'=>'form-control']); ?> 
			    	</div>
			    	<div class="form-group">
			        	<?php echo Form::label('keywords', 'Keywords:'); ?>

			        	<?php echo Form::textarea('keywords',null, ['class'=>'form-control']); ?> 
			    	</div>
			    <?php echo Form::submit('Add', ['class'=>'btn btn-primary']); ?>


			    <?php echo e(Form::close()); ?>

		    </div>
		</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>