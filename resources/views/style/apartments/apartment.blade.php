@extends('style.index')
@section('content')
<style type="text/css">
	strong{
		font-size: 25px;
	}
</style>

<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('refugee/images/house.jpg')}});" data-stellar-background-ratio="0.5">
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
		              @foreach($apartments as $aparts)
		              		
		              

		              <img style="width: 1100px; height: 500px"  class="img-responsive menuThumb" src="{{URL($aparts->img)}}">

		              <div class="text d-block pl-md-4" style="background-color:#efe8e8; margin-left: 20px; height: 501px; overflow: auto;">
		              	<div class="meta mb-3">
		                  <div style="font-family:unset;">{{$aparts->created_at}}</div>
		                  <div style="font-family:unset;">Admin {{$aparts->admin->name}}</div>
		                </div>
		                
		                <strong >Location:</strong>		   <p>{{$aparts->location}}</p>
	            		<strong>Area:</strong>			   <p>{{$aparts->area}} sqm </p>
	            		<strong>Number of rooms:</strong>  <p>{{$aparts->rooms}} </p>
	            		<strong>Floor:</strong>			   <p>{{$aparts->floor}} </p>
	            		<strong>Price:</strong>			   <p>{{$aparts->price}} </p>
	            		<strong>Furnished:</strong>		   <p>{{$aparts->furnished}}</p>
	            		<strong>Number Of Bathrooms:</strong><p>{{$aparts->bathrooms}}</p>
	            		<strong>Communication:</strong>	     <p>{{$aparts->communication}}</p>
	                    <strong>Publisher: Admin</strong>    <p>{{$aparts->admin->name}}</p> 
	                    @endforeach
		                
		              </div>
		            </div>
		          </div>
		          {{$apartments->render()}}
		          
		          
						</div>

					</div>
				</div>
			</div>
		</section>

@endsection