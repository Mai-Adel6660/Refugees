<?php /* C:\xampp\htdocs\Refugees\resources\views/style/jobs/job.blade.php */ ?>
<?php $__env->startSection('content'); ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo e(asset('refugee/images/job.jpg')); ?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h2 class="mb-3 bread">We Are Struggling To Find Jobs For Refugees</h2>
            
          </div>
        </div>
      </div>
</section>

<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
        	<div class="col-lg-12" style="display: inherit;">
            	<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		              
	            <ul style="display: inline;">
	              <li style="list-style: none;"><button id="btn_click" type="button" class="btn btn-warning"><a href="<?php echo e(URL('/services/jobs/'.$cat->id)); ?>"></a><?php echo e($cat->name); ?></button></li>
	            </ul>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>


          <div class="col-lg-8 ftco-animate">
			<div class="row">
				<div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">

		            	
		              

		              <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		              <div class="text d-block pl-md-4">
		              	<div class="meta mb-3">
		                  <div><?php echo e($job->created_at); ?></div>
		                  <div>Publisher: Admin <?php echo e($job->admin->name); ?></div>
  		                </div>
		                <h3 class="heading" style="color: #017CFF;
    					font-size: 40px;font-family: inherit;"><?php echo e($job->name_job); ?></h3>
		                <p><?php echo e($job->details); ?></p>
		                <strong>Type of the job:</strong>	<p><?php echo e($job->type); ?> </p>
		                <strong>Sallery:</strong> <p><?php echo e($job->sallery); ?> $</p>
		              </div>
		              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		              
		            </div>
		            
		          </div>
		          <?php echo e($jobs->render()); ?>

		        
				</div>

				</div>
			</div>
		</div>
	</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('style.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>