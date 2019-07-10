@extends('admin.index')
@section('content')
        
	<div class="container">
		<div class="raw">
			<section class="content-header">
		      <h2>
		        Jobs
		      </h2>
              <a href="{{URL('/admin/job/add')}}"><button style="width: 216px;
                cursor: none;font-size: 24px;font-weight: 500;font-family: unset;margin-left: -2px;" type="button" class="btn btn-warning">Add New Job <i class="fa fa-plus"></i></button></a>
		      <ol class="breadcrumb">
		        <li><a href="{{URL('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		        <li class="active">Dashboard</li>
		      </ol>
    		</section>

    	
    	
    	<div>
    		@foreach($job as $jobs)
           
            <div>
                <ul>
                    <li style="color: #337AB7; list-style: none; margin-top: 30px;"><button type="button" class="btn btn-outline-primary btn-lg" style="width: 200px; cursor: none;font-size: 25px; font-weight: 500; font-family: unset;margin-left: -27px;">{{$jobs->category->name}}</button>
                    </li>
                </ul>
            </div>

            <div  class="col-lg-6">
        		<h2>		               {{$jobs->name_job}}</h2>
        		<strong>seniority:</strong>			<p>{{$jobs->seniority}}  </p>
        		<strong>details:</strong>	        <p>{{$jobs->details}} </p>
        		<strong>Type of the job:</strong>	<p>{{$jobs->type}} </p>
        		<strong>Sallery:</strong>			<p>{{$jobs->sallery}} $</p>
                <strong>Publisher:</strong>         <p>{{$jobs->admin->name}}</p>
                <strong>Created At:</strong>        <p>{{$jobs->created_at}} </p>

                <a class="btn btn-primary" href="{{ URL('/admin/job/edit/'. $jobs->id ) }}">Edit</a>
                <a class="btn btn-danger" href="{{URL('/admin/job/delete/'. $jobs->id ) }}">Delete</a>
            </div>

    		@endforeach
    	</div>
        {{$job->render()}}
        </div>	
    </div>
@endsection