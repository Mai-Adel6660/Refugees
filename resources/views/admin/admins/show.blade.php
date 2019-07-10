<!--@extends('admin.index')
@section('content')

<section class="content-header">
      <h2>
        Restore deleted data
      </h2>
      <ol class="breadcrumb">
        <li><a href="{{URL('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

<div class="container">
	<div class="raw">
		
        {!! Form::open([ 'url' => 'admin/ad/index']) !!}
		<table border=3>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            @foreach($trashed as $trash)
            <tr>
                <td>{{$trash->id}}</td>
                <td>{{$trash->name}}</td>
                <td>{{$trash->email}}</td>
            </tr>
            @endforeach
            
        </table>
        {!!  Form::submit('restore', ['class'=>'btn btn-lg btn-info'])!!}

        {{ Form::close() }}
	</div>
</div>

@endsection