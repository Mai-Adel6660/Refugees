@extends('admin.index')
@section('content')
        
	<div class="container">
		<div class="raw">
			<section class="content-header">
		      <h2>
		        Edit
		      </h2>
		      <ol class="breadcrumb">
		        <li><a href="{{URL('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		        <li class="active">Dashboard</li>
		      </ol>
    		</section>

    		<div class="box-body">
				{!! Form::open(['url' => ['admin/apart/update',$apart->id], 'method'=>'PUT'
				,'files'=>true]) !!}
			  		<div class="form-group">
			        	{!!  Form::label('location', 'The Location:')!!}
			        	{!!  Form::text('location',old('location'), ['class'=>'form-control']) !!}
			        </div>
			        <div class="form-group">
			        	{!!  Form::label('area', 'Area:')!!}
			        	{!!  Form::text('area',old('area'), ['class'=>'form-control']) !!}
			        </div>
			        <div class="form-group">
			        	{!!  Form::label('floor', 'Floor:')!!}
			        	{!!  Form::text('floor',old('floor'), ['class'=>'form-control']) !!}
			        </div>
					<div class="form-group">
			        	{!!  Form::label('furnished', 'Furnished:')!!}
			        	{!!  Form::select('furnished',['yes'=>trans('admin.yes'),'no'=>trans('admin.no')],old('furnished'), ['class'=>'form-control']) !!}
			        </div>
			        <div class="form-group">
			        	{!!  Form::label('rooms', 'Rooms:')!!}
			        	{!!  Form::number('rooms',old('rooms'), ['class'=>'form-control']) !!}
			        </div>
			        
			        <div class="form-group">
			        	{!!  Form::label('bathrooms', 'Bathrooms:')!!}
			        	{!!  Form::number('bathrooms',old('bathrooms'), ['class'=>'form-control']) !!} 
			    	</div>

			    	<div class="form-group">
			        	{!!  Form::label('price', 'Price:')!!}
			        	{!!  Form::text('price',old('price'), ['class'=>'form-control']) !!} 
			    	</div>

			    	<div class="form-group">
			        	{!!  Form::label('img', 'Image:')!!}
			        	{!!  Form::file('img',old('img'), ['class'=>'form-control']) !!} 
			    	</div>
			    	<div class="form-group">
			        	{!!  Form::label('communication', 'Communication:')!!}
			        	{!!  Form::textarea('communication',old('communication'), ['class'=>'form-control']) !!} 
			    	</div>
			    {!!  Form::submit('Add', ['class'=>'btn btn-primary'])!!}

			    {{ Form::close() }}
		    </div>

		</div>
	</div>

@endsection