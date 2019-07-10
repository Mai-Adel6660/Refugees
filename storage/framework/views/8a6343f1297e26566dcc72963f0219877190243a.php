<?php /* C:\xampp\htdocs\Refugees\resources\views/admin/job/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>
        
	<div class="container">
		<div class="raw">
			<section class="content-header">
		      <h2>
		        Jobs
		      </h2>
              <a href="<?php echo e(URL('/admin/job/add')); ?>"><button style="width: 216px;
                cursor: none;font-size: 24px;font-weight: 500;font-family: unset;margin-left: -2px;" type="button" class="btn btn-warning">Add New Job <i class="fa fa-plus"></i></button></a>
		      <ol class="breadcrumb">
		        <li><a href="<?php echo e(URL('admin')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
		        <li class="active">Dashboard</li>
		      </ol>
    		</section>

    	
    	
    	<div>
    		<?php $__currentLoopData = $job; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jobs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           
            <div>
                <ul>
                    <li style="color: #337AB7; list-style: none; margin-top: 30px;"><button type="button" class="btn btn-outline-primary btn-lg" style="width: 200px; cursor: none;font-size: 25px; font-weight: 500; font-family: unset;margin-left: -27px;"><?php echo e($jobs->category->name); ?></button>
                    </li>
                </ul>
            </div>

            <div  class="col-lg-6">
        		<h2>		               <?php echo e($jobs->name_job); ?></h2>
        		<strong>seniority:</strong>			<p><?php echo e($jobs->seniority); ?>  </p>
        		<strong>details:</strong>	        <p><?php echo e($jobs->details); ?> </p>
        		<strong>Type of the job:</strong>	<p><?php echo e($jobs->type); ?> </p>
        		<strong>Sallery:</strong>			<p><?php echo e($jobs->sallery); ?> $</p>
                <strong>Publisher:</strong>         <p><?php echo e($jobs->admin->name); ?></p>
                <strong>Created At:</strong>        <p><?php echo e($jobs->created_at); ?> </p>

                <a class="btn btn-primary" href="<?php echo e(URL('/admin/job/edit/'. $jobs->id )); ?>">Edit</a>
                <a class="btn btn-danger" href="<?php echo e(URL('/admin/job/delete/'. $jobs->id )); ?>">Delete</a>
            </div>

    		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    	</div>
        <?php echo e($job->render()); ?>

        </div>	
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>