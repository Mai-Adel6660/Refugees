@extends('admin.index')
@section('content')
        
	<div class="container">
		<div class="raw">
			<section class="content-header">
		      <h2>
		        Apartment
		      </h2>
		      <ol class="breadcrumb">
		        <li><a href="{{URL('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		        <li class="active">Dashboard</li>
		      </ol>
    		</section>

    		<div class="box-body">
				{!! Form::open(['url' => 'admin/apart/store', 'method'=>'POST'
				,'files'=>true]) !!}
			  		<div class="form-group">
			        	{!!  Form::label('location', 'The Location:')!!}
			        	{!!  Form::text('location',null, ['class'=>'form-control']) !!}
			        </div>
			        <div class="form-group">
			        	{!!  Form::label('area', 'Area:')!!}
			        	{!!  Form::text('area',null, ['class'=>'form-control']) !!}
			        </div>
			        <div class="form-group">
			        	{!!  Form::label('floor', 'Floor:')!!}
			        	{!!  Form::text('floor',null, ['class'=>'form-control']) !!}
			        </div>
					<div class="form-group">
			        	{!!  Form::label('furnished', 'Furnished:')!!}
			        	{!!  Form::select('furnished',['yes'=>trans('admin.yes'),'no'=>trans('admin.no')],null, ['class'=>'form-control']) !!}
			        </div>
			        <div class="form-group">
			        	{!!  Form::label('rooms', 'Rooms:')!!}
			        	{!!  Form::number('rooms',null, ['class'=>'form-control']) !!}
			        </div>
			        
			        <div class="form-group">
			        	{!!  Form::label('bathrooms', 'Bathrooms:')!!}
			        	{!!  Form::number('bathrooms',null, ['class'=>'form-control']) !!} 
			    	</div>

			    	<div class="form-group">
			        	{!!  Form::label('price', 'Price:')!!}
			        	{!!  Form::text('price',null, ['class'=>'form-control']) !!} 
			    	</div>

			    	<div class="form-group">
			        	{!!  Form::label('img', 'Image:')!!}
			        	{!!  Form::file('img',null, ['class'=>'form-control']) !!} 
			    	</div>
			    	
			    	<div class="form-group">
			        	{!!  Form::label('communication', 'Communication:')!!}
			        	{!!  Form::textarea('communication',null, ['class'=>'form-control']) !!} 
			    	</div>
			    {!!  Form::submit('Add', ['class'=>'btn btn-primary'])!!}

			    {{ Form::close() }}
		    </div>

		</div>
	</div>

@endsection