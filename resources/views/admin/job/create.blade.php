@extends('admin.index')
@section('content')
        
	<div class="container">
		<div class="raw">
			<section class="content-header">
		      <h2>
		        Add Job
		      </h2>
		      <ol class="breadcrumb">
		        <li><a href="{{URL('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		        <li class="active">Dashboard</li>
		      </ol>
    		</section>

    		<div class="box-body">
				{!! Form::open(['url' => 'admin/job/store', 'method'=>'POST'
				,'files'=>true]) !!}
			  		<div class="form-group">
			        	{!!  Form::label('name_job', 'Job Name:')!!}
			        	{!!  Form::text('name_job',null, ['class'=>'form-control']) !!}
			        </div>
			        <div class="form-group">
			        	{!!  Form::label('seniority', 'Seniority:')!!}
			        	{!!  Form::text('seniority',null, ['class'=>'form-control']) !!}
			        </div>
			        <div class="form-group">
			        	{!!  Form::label('details', 'Details:')!!}
			        	{!!  Form::text('details',null, ['class'=>'form-control']) !!}
			        </div>
					<div class="form-group">
			        	{!!  Form::label('type', 'Type:')!!}
			        	{!!  Form::select('type',['full_time'=>trans('admin.full-time'),'part_time'=>trans('admin.part-time')],null, ['class'=>'form-control']) !!}
			        </div>
			        <div class="form-group">
			        	{!!  Form::label('sallery', 'Sallery:')!!}
			        	{!!  Form::number('sallery',null, ['class'=>'form-control']) !!}
			        </div>

			        <div class="form-group">
			        	{!!  Form::label('category_id', 'Category:')!!}
			        	<select name="category_id" class="form-control">
			        		
			        	@foreach($categories as $cat)
			        		<option value="{{$cat->id}}">{{$cat->name}}</option>
			        	@endforeach
			        	</select>

			        	
			        </div>
			        
			        
			    {!!  Form::submit('Add', ['class'=>'btn btn-primary'])!!}

			    {{ Form::close() }}
		    </div>

		</div>
	</div>

@endsection