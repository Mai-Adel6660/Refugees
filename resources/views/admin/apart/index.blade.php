@extends('admin.index')
@section('content')
        
	<div class="container">
		<div class="raw">
        
			<section class="content-header">
		      <h2>
		        Apartments
		      </h2>
              <a href="{{URL('/admin/apart/add')}}"><button style="width: 245px;
                cursor: none;font-size: 24px;font-weight: 500;font-family: unset;margin-left: -2px;" type="button" class="btn btn-warning">Add New Apartment <i class="fa fa-plus"></i></button></a>
		      <ol class="breadcrumb">
		        <li><a href="{{URL('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		        <li class="active">Dashboard</li>
		      </ol>
    		</section>    

        	
        	<hr>
        	<div>
        		@foreach($apart as $aparts)
                <div>
                    <img style="width: 500px"  class="img-responsive menuThumb" src="{{URL($aparts->img)}}">
                    
                </div>
                <div>
            		<strong>Location:</strong>		   <p>{{$aparts->location}}</p>
            		<strong>Area:</strong>			   <p>{{$aparts->area}} sqm </p>
            		<strong>Number of rooms:</strong>  <p>{{$aparts->rooms}} </p>
            		<strong>Floor:</strong>			   <p>{{$aparts->floor}} </p>
            		<strong>Price:</strong>			   <p>{{$aparts->price}} </p>
            		<strong>Furnished:</strong>		   <p>{{$aparts->furnished}}</p>
            		<strong>Number Of Bathrooms:</strong><p>{{$aparts->bathrooms}}</p>
            		<strong>Communication:</strong>	     <p>{{$aparts->communication}}</p>
                    <strong>Publisher:</strong>          <p>{{$aparts->admin->name}}</p> 
                    <strong>Date Of Publishing:</strong> <p>{{$aparts->created_at}}</p>

                    <a class="btn btn-primary" href="{{ URL('/admin/apart/edit/'. $aparts->id ) }}">Edit</a>
                    <a class="btn btn-danger" href="{{URL('/admin/apart/delete/'. $aparts->id ) }}">Delete</a>
                    <hr>
                </div>

        		@endforeach
        	</div>
            {{$apart->render()}}
        </div>	
    </div>
@endsection