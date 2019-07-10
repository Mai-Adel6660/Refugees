@extends('admin.index')

@section('content')
<div class="container">
	<div class="box">
		<section class="content-header">
	      <h2>
	        Edit
	      </h2>
	      <ol class="breadcrumb">
	        <li><a href="{{URL('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
	      </ol>
    	</section>
		<div class="box-body">
			{!! Form::open(['url' => '/admin/ad/update', 'method' => 'PUT' ]) !!}
			<div class="form-group">
			{!!  Form::label('name', 'Name:')!!}
			{!!  Form::text('name',null, ['class'=>'form-control']) !!}
			
			</div>

			<div class="form-group">
			{!!  Form::label('email', 'Email:')!!} <!--$admin->email-->
			{!!  Form::email('email',null, ['class'=>'form-control']) !!} 
			</div> 

			<div class="form-group">
			{!!  Form::label('password', 'Password:')!!}
			{!!  Form::password('password', ['class'=>'form-control']) !!}
			</div>	

			{!!  Form::submit('Save', ['class'=>'btn btn-primary'])!!}

			{{ Form::close() }}
		</div>
	</div>
</div>
@endsection
