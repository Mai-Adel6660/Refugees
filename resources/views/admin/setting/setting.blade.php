@extends('admin.index')
@section('content')

<div class="container">
		<div class="raw">
			<section class="content-header">
		      <h2>
		        Settings
		      </h2>
		      <ol class="breadcrumb">
		        <li><a href="{{URL('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		        <li class="active">Dashboard</li>
		      </ol>
    		</section>
    		<div class="box-body">
				{!! Form::open(['url' => 'admin/settings/store', 'method'=>'POST'
				,'files'=>true]) !!}
			  		<div class="form-group">
			        	{!!  Form::label('sitename_en', 'Sitename En:')!!}
			        	{!!  Form::text('sitename_en',null, ['class'=>'form-control']) !!}
			        </div>
			        <div class="form-group">
			        	{!!  Form::label('sitename_ar', 'Sitename Ar:')!!}
			        	{!!  Form::text('sitename_ar',null, ['class'=>'form-control']) !!}
			        </div>
			        <div class="form-group">
			        	{!!  Form::label('email', 'Email:')!!}
			        	{!!  Form::email('email',null, ['class'=>'form-control']) !!}
			        </div>
			    	<div class="form-group">
			        	{!!  Form::label('logo', 'Logo:')!!}
			        	{!!  Form::file('logo',null, ['class'=>'form-control']) !!} 
			    	</div>
			    	<div class="form-group">
			        	{!!  Form::label('icon', 'Icon:')!!}
			        	{!!  Form::file('icon',null, ['class'=>'form-control']) !!} 
			    	</div>
			    	<div class="form-group">
			        	{!!  Form::label('description', 'Description:')!!}
			        	{!!  Form::textarea('description',null, ['class'=>'form-control']) !!} 
			    	</div>
			    	<div class="form-group">
			        	{!!  Form::label('keywords', 'Keywords:')!!}
			        	{!!  Form::textarea('keywords',null, ['class'=>'form-control']) !!} 
			    	</div>
			    {!!  Form::submit('Add', ['class'=>'btn btn-primary'])!!}

			    {{ Form::close() }}
		    </div>
		</div>
</div>

@endsection