<?php /* C:\xampp\htdocs\Refugees\resources\views/style/home.blade.php */ ?>
<?php $__env->startSection('content'); ?>

<div class="hero-wrap" style="background-image: url(<?php echo e(asset('refugee/images/bg_1.jpeg')); ?>);" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
      <div class="col-md-6 order-md-last ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We can help to save the world</h1>
        <p><a href="<?php echo e(URL('/donation')); ?>" class="btn btn-black py-3 px-4">How Can I Help</a></p>
      </div>
      <div class="col-md-6 d-none d-md-block">
      	<div class="play-video pb-5 d-flex align-items-center">
      		<p><a href="https://vimeo.com/45830194" class="popup-vimeo"><span class="icon"><i class="ion-ios-play "></i></span> <span class="play">Play video</span></a></p>
      	</div>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-volunteer">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-7 img-volunteer" style="background-image: url(<?php echo e(asset('refugee/images/banner3.jpg')); ?>);">
    				<div class="row no-gutters justify-content-end">
    					<div class="col-lg-7">
    						<div class="text py-5 pl-md-4 pr-md-3">
    							<h2 style="color:#ffb400;" class="mb-4">We need volunteers in Egypt</h2>
    							<p style="color:#fff;">It is our duty as humans to join hands to ease suffering.
                    Being safe, having food and having shelter should be a basic human right.</p>
    							<p><a href="<?php echo e(URL('/login')); ?>" class="btn btn-primary py-3 px-4">Join now</a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-5 d-flex align-items-center bg-black">
    				<div class="about-text py-5 pl-md-5">
    					<h2>Donation so far <span>$</span><strong class="number" data-number="1640">0</strong></h2>
    					
    					<p><a href="<?php echo e(URL('/donation')); ?>" class="btn btn-black py-3 px-4">Donate now</a></p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="services-section py-5 py-md-0 bg-light">
      <div class="container">
        <div class="row no-gutters d-flex">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-charity"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Help &amp; Support</h3>
                <p>PALESTINE REFUGEES NEED YOUR SOLIDARITY MORE THAN EVER</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-adoption"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Adoption</h3>
                <p>Help them by adoptation,which there are an estimated 13 million child refugees in the world.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services active d-block">
              <div class="icon"><span class="flaticon-volunteer"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Volunteering</h3>
                <p>EGYPTIAN RED CRESCENT DONATES FOOD AND MEDICINE FOR REFUGEES IN GAZA.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-open-book"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Education</h3>
                <p>Faced with budget shortfalls and street gang violence, educators  are seeking greater protection and support.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-causes">
    	<div class="container">
    		<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <h2 class="mb-4">Let's build the world without child abuse and neglect</h2>
            <p>Every Child has a right to a safe and stable future.</p>
          </div>
        </div>
    	</div>
    	<div class="container">
        <div class="row">
        	<div class="col-md-12">
        		<div class="carousel-causes owl-carousel">
        			<div class="item">
		        		<a href="causes.html" class="causes text-center">
		        			<div class="img" style="background-image: url(<?php echo e(asset('refugee/images/causes-1.jpg')); ?>);"></div>
		        			<h2>Adoption, Fostering &amp; Children Care</h2>
		        		</a>
        			</div>
        			<div class="item">
	        			<a href="causes.html" class="causes text-center">
		        			<div class="img" style="background-image: url(<?php echo e(asset('refugee/images/causes-2.jpg')); ?>);"></div>
		        			<h2>Disadvantages Young People</h2>
		        		</a>
	        		</div>
	        		<div class="item">
	        			<a href="causes.html" class="causes text-center">
		        			<div class="img" style="background-image: url(<?php echo e(asset('refugee/images/causes-3.jpg')); ?>);"></div>
		        			<h2>Meditation &amp; Crisis Services</h2>
		        		</a>
	        		</div>
	        		<div class="item">
	        			<a href="causes.html" class="causes text-center">
		        			<div class="img" style="background-image: url(<?php echo e(asset('refugee/images/causes-4.jpg')); ?>);"></div>
		        			<h2>Providing Children Care and Education</h2>
		        		</a>
	        		</div>
	        		<div class="item">
	        			<a href="causes.html" class="causes text-center">
		        			<div class="img" style="background-image: url(<?php echo e(asset('refugee/images/causes-5.jpg')); ?>);"></div>
		        			<h2>Safeguarding &amp; Consultancy Services</h2>
		        		</a>
	        		</div>
        		</div>
        	</div>
        </div>
    	</div>
    </section>
   	
   	<section class="testimony-section">
      <div class="container">
        <div class="row ftco-animate justify-content-center">
        	<div class="col-md-6 d-flex">
        		<div class="testimony-img" style="background-image: url(<?php echo e(asset('refugee/images/testimony-img.png')); ?>);"></div>
        	</div>
          <div class="col-md-6 py-5">
          	<div class="heading-section heading-section-white pt-4 ftco-animate">
		          <h2 class="mb-0">Success Stories</h2>
		        </div>
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap pb-4">
                  <div class="text">
                    <p class="mb-4">He was an English teacher in Syria , but in Egypt he opened a shop for cleaning materials , he found difficulties in accommodating with life in Egypt but that did not stop him from supporting his sons.</p>
                  </div>
                  <div class="d-flex">
	                  <div class="user-img" style="background-image: url(<?php echo e(asset('refugee/images/per1.jpg')); ?>)">
	                  </div>
	                  <div class="pos ml-3">
	                  	<p class="name">Osama</p>
	                    <span class="position">Syrian teacher and owner of cleaning shop</span>
	                  </div>
	                </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap pb-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="d-flex">
	                  <div class="user-img" style="background-image: url(<?php echo e(asset('refugee/images/per2.jpg')); ?>)">
	                  </div>
	                  <div class="pos ml-3">
	                  	<p class="name">Ebrahim Mahmoud</p>
	                    <span class="position">Businessman</span>
	                  </div>
	                </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap pb-4">
                  <div class="text">
                    <p class="mb-4">Ahmed found no difficulty in accommodating with the Egyptian curriculum , but he found some difficulty in dealing with the Egyptian accent, but soon it became easier and dealt with it as it was his mother tongue,Now he joined the school of medicine in Alexandria , his long life dream</p>
                  </div>
                  <div class="d-flex">
	                  <div class="user-img" style="background-image: url(<?php echo e(asset('refugee/images/per3.jpg')); ?>)">
	                  </div>
	                  <div class="pos ml-3">
	                  	<p class="name">Ahmed jerkin</p>
	                    <span class="position">Student</span>
	                  </div>
	                </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap pb-4">
                  <div class="text">
                    <p class="mb-4">His shop produce a wide assortment of traditional Syrian and Egyptian sweets including konafa , basboosa , gullash and many other sweets</p>
                  </div>
                  <div class="d-flex">
	                  <div class="user-img" style="background-image: url(<?php echo e(asset('refugee/images/per4.jpg')); ?>)">
	                  </div>
	                  <div class="pos ml-3">
	                  	<p class="name">Abdallah Bashir</p>
	                    <span class="position">Owner of sweets of Damascus</span>
	                  </div>
	                </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap pb-4">
                  <div class="text">
                    <p class="mb-4">He opened a clothes shop in 6th October and then a second store where he sells Syrian food such as salty olives, olive oil ,spices, coffee , sweets and cheese.</p>
                  </div>
                  <div class="d-flex">
	                  <div class="user-img" style="background-image: url(<?php echo e(asset('refugee/images/per5.jpg')); ?>)">
	                  </div>
	                  <div class="pos ml-3">
	                  	<p class="name">Rakan Abdul-Kheir</p>
	                    <span class="position">Owner of clothes shop and feet store </span>
	                  </div>
	                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('style.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>