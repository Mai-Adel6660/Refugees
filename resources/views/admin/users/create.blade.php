@extends('admin.index')
@section('content')
        
	<div class="container">
		<div class="raw">
			<section class="content-header">
		      <h2>
		        Add Member
		      </h2>
		      <ol class="breadcrumb">
		        <li><a href="{{URL('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		        <li class="active">Dashboard</li>
		      </ol>
    		</section>

		@if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li> 
                @endforeach
            </ul>
        </div>

        @endif
			<div class="box-body">
				{!! Form::open([ 'url' => 'admin/user/store', 'method' => 'post']) !!}
			  		<div class="form-group">
			        	{!!  Form::label('name', 'Name:')!!}
			        	{!!  Form::text('name',null, ['class'=>'form-control']) !!}
			        </div>
			        <div class="form-group">
			        	{!!  Form::label('email', 'Email:')!!}
			        	{!!  Form::email('email',null, ['class'=>'form-control']) !!}
			        </div>
			        <div class="form-group">
				        {!! Form::label('level',trans('admin.level')) !!}
				        {!! Form::select('level',['user'=>trans('admin.user'),'refugee'=>trans('admin.refugee')],null, ['class'=>'form-control','placeholder'=>'....']) !!}
      				</div>
			        <div class="form-group">
			        	{!!  Form::label('password', 'Password:')!!}
			        	{!!  Form::password('password', ['class'=>'form-control']) !!} 
			    	</div>

			    {!!  Form::submit('Add New Member', ['class'=>'btn btn-primary'])!!}

			    {{ Form::close() }}
		    </div>
		</div>
    </div>
@endsection