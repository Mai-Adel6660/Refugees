@extends('admin.index')
@section('content')

<section class="content-header">
      <h2>
        Users Control Panel
      </h2>
      <ol class="breadcrumb">
        <li><a href="{{URL('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

<div class="container">
    <a href="{{URL('/admin/user/add')}}"><button class="btn btn-warning" style="margin-bottom: 20px;
    width: 205px; font-size: 20px;">Add Member <i class="fa fa-plus"></i></button></a>
	<div class="raw">
		
		<table class="table table-bordered table-hover">
   
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Level</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            @foreach($user as $u)
            <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->level}}</td>
                <td>
                	<a class="btn btn-primary" href="{{ URL('/admin/user/edit/' . $u->id ) }}">Edit</a>
                </td>
                <td>	
                	<a class="btn btn-danger" href="{{ URL('/admin/user/delete/'.$u->id ) }}">Delete</a>
            	</td>
            </tr>
            @endforeach
            
        </table>

        

        


	</div>
</div>

@endsection