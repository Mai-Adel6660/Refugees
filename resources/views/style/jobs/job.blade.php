@extends('style.index')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('refugee/images/job.jpg')}});" data-stellar-background-ratio="0.5">
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
            	@foreach($category as $cat)
		              
	            <ul style="display: inline;">
	              <li style="list-style: none;"><button id="btn_click" type="button" class="btn btn-warning"><a href="{{URL('/services/jobs/'.$cat->id)}}"></a>{{$cat->name}}</button></li>
	            </ul>

                @endforeach
            </div>


          <div class="col-lg-8 ftco-animate">
			<div class="row">
				<div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">

		            	
		              

		              @foreach($jobs as $job)
		              <div class="text d-block pl-md-4">
		              	<div class="meta mb-3">
		                  <div>{{$job->created_at}}</div>
		                  <div>Publisher: Admin {{$job->admin->name}}</div>
  		                </div>
		                <h3 class="heading" style="color: #017CFF;
    					font-size: 40px;font-family: inherit;">{{$job->name_job}}</h3>
		                <p>{{$job->details}}</p>
		                <strong>Type of the job:</strong>	<p>{{$job->type}} </p>
		                <strong>Sallery:</strong> <p>{{$job->sallery}} $</p>
		              </div>
		              @endforeach
		              
		            </div>
		            
		          </div>
		          {{$jobs->render()}}
		        
				</div>

				</div>
			</div>
		</div>
	</section>

@endsection