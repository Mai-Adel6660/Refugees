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
				{!! Form::open(['url' => 'admin/job/update', 'method'=>'PUT'
				,'files'=>true]) !!}
			  		<div class="form-group">
			        	{!!  Form::label('name_job', 'Job Name:')!!}
			        	{!!  Form::text('name_job',old('name_job'), ['class'=>'form-control']) !!}
			        </div>
			        <div class="form-group">
			        	{!!  Form::label('seniority', 'Seniority:')!!}
			        	{!!  Form::text('seniority',old('seniority'), ['class'=>'form-control']) !!}
			        </div>
			        <div class="form-group">
			        	{!!  Form::label('details', 'Details:')!!}
			        	{!!  Form::text('details',old('details'), ['class'=>'form-control']) !!}
			        </div>
					<div class="form-group">
			        	{!!  Form::label('type', 'Type:')!!}
			        	{!!  Form::select('type',['full_time'=>trans('admin.full-time'),'part_time'=>trans('admin.part-time')],old('type'), ['class'=>'form-control']) !!}
			        </div>
			        <div class="form-group">
			        	{!!  Form::label('sallery', 'Sallery:')!!}
			        	{!!  Form::number('sallery',old('sallery'), ['class'=>'form-control']) !!}
			        </div>
			        
			    {!!  Form::submit('Add', ['class'=>'btn btn-primary'])!!}

			    {{ Form::close() }}
		    </div>

		</div>
	</div>

@endsection