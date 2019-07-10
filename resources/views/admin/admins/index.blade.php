@extends('admin.index')
@section('content')

<section class="content-header">
      <h2 style="    display: inline;">
        Admin Control Panel
      </h2>
      
      <ol class="breadcrumb">
        <li><a href="{{URL('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

<div class="container">
    <a href="{{URL('/admin/ad/add')}}"><button style="margin-bottom: 20px;
    width: 205px;font-size: 20px;" type="button" class="btn btn-warning">Add Admin <i class="fa fa-plus"></i></button></a>
	<div class="raw">
		
        
		<table class="table table-bordered table-hover">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
            @foreach($test as $s)
            <tr>
                <td>{{$s->id}}</td>
                <td>{{$s->name}}</td>
                <td>{{$s->email}}</td>
                <td>
                	<a class="btn btn-primary" href="{{ URL('/admin/ad/edit/'. $s->id ) }}">Edit</a>
                </td>
                <td>	
                	<a class="btn btn-danger" href="{{URL('/admin/ad/delete/'. $s->id ) }}">Delete</a>
            	</td>                

            </tr>
            @endforeach
            
        </table>
<a class="btn btn-info" href="{{URL('/admin/ad/show') }}">Restore deleted data</a>
        

        


	</div>
</div>

@endsection