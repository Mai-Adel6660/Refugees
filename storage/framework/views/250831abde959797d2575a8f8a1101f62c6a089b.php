<?php /* C:\xampp\htdocs\Refugees\resources\views/style/apartments/apartment.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
	strong{
		font-size: 25px;
	}
</style>

<section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo e(asset('refugee/images/house.jpg')); ?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h2 class="mb-3 bread">We Are Struggling To Find A House For Refugees</h2>
            
          </div>
        </div>
      </div>
</section>

<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 ftco-animate">
			<div class="row">
				<div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <?php $__currentLoopData = $apartments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aparts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		              		
		              

		              <img style="width: 1100px; height: 500px"  class="img-responsive menuThumb" src="<?php echo e(URL($aparts->img)); ?>">

		              <div class="text d-block pl-md-4" style="background-color:#efe8e8; margin-left: 20px; height: 501px; overflow: auto;">
		              	<div class="meta mb-3">
		                  <div style="font-family:unset;"><?php echo e($aparts->created_at); ?></div>
		                  <div style="font-family:unset;">Admin <?php echo e($aparts->admin->name); ?></div>
		                </div>
		                
		                <strong >Location:</strong>		   <p><?php echo e($aparts->location); ?></p>
	            		<strong>Area:</strong>			   <p><?php echo e($aparts->area); ?> sqm </p>
	            		<strong>Number of rooms:</strong>  <p><?php echo e($aparts->rooms); ?> </p>
	            		<strong>Floor:</strong>			   <p><?php echo e($aparts->floor); ?> </p>
	            		<strong>Price:</strong>			   <p><?php echo e($aparts->price); ?> </p>
	            		<strong>Furnished:</strong>		   <p><?php echo e($aparts->furnished); ?></p>
	            		<strong>Number Of Bathrooms:</strong><p><?php echo e($aparts->bathrooms); ?></p>
	            		<strong>Communication:</strong>	     <p><?php echo e($aparts->communication); ?></p>
	                    <strong>Publisher: Admin</strong>    <p><?php echo e($aparts->admin->name); ?></p> 
	                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                
		              </div>
		            </div>
		          </div>
		          <?php echo e($apartments->render()); ?>

		          
		          
						</div>

					</div>
				</div>
			</div>
		</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('style.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>