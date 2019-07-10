<?php /* C:\xampp\htdocs\Refugees\resources\views/admin/apart/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>
        
	<div class="container">
		<div class="raw">
        
			<section class="content-header">
		      <h2>
		        Apartments
		      </h2>
              <a href="<?php echo e(URL('/admin/apart/add')); ?>"><button style="width: 245px;
                cursor: none;font-size: 24px;font-weight: 500;font-family: unset;margin-left: -2px;" type="button" class="btn btn-warning">Add New Apartment <i class="fa fa-plus"></i></button></a>
		      <ol class="breadcrumb">
		        <li><a href="<?php echo e(URL('admin')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
		        <li class="active">Dashboard</li>
		      </ol>
    		</section>    

        	
        	<hr>
        	<div>
        		<?php $__currentLoopData = $apart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aparts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <img style="width: 500px"  class="img-responsive menuThumb" src="<?php echo e(URL($aparts->img)); ?>">
                    
                </div>
                <div>
            		<strong>Location:</strong>		   <p><?php echo e($aparts->location); ?></p>
            		<strong>Area:</strong>			   <p><?php echo e($aparts->area); ?> sqm </p>
            		<strong>Number of rooms:</strong>  <p><?php echo e($aparts->rooms); ?> </p>
            		<strong>Floor:</strong>			   <p><?php echo e($aparts->floor); ?> </p>
            		<strong>Price:</strong>			   <p><?php echo e($aparts->price); ?> </p>
            		<strong>Furnished:</strong>		   <p><?php echo e($aparts->furnished); ?></p>
            		<strong>Number Of Bathrooms:</strong><p><?php echo e($aparts->bathrooms); ?></p>
            		<strong>Communication:</strong>	     <p><?php echo e($aparts->communication); ?></p>
                    <strong>Publisher:</strong>          <p><?php echo e($aparts->admin->name); ?></p> 
                    <strong>Date Of Publishing:</strong> <p><?php echo e($aparts->created_at); ?></p>

                    <a class="btn btn-primary" href="<?php echo e(URL('/admin/apart/edit/'. $aparts->id )); ?>">Edit</a>
                    <a class="btn btn-danger" href="<?php echo e(URL('/admin/apart/delete/'. $aparts->id )); ?>">Delete</a>
                    <hr>
                </div>

        		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        	</div>
            <?php echo e($apart->render()); ?>

        </div>	
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>