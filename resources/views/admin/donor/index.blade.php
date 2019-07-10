@extends('admin.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>DONORS</h2></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Amount Donated</th>
                                <th>Delete</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($donors as $donor)
                            <tr>
                                <td>{{$donor->full_name}}</td>
                                <td>{{$donor->email}}</td>
                                <td>{{$donor->phone}}</td>
                                <td>{{$donor->amount_donated}}$</td>
                                <td>
                                    <a class="btn btn-danger" href="{{URL('/admin/donors/delete/'. $donor->id ) }}">Delete</a>

                                </td>
                               

                            </tr>
                            @endforeach
                        </tbody>

                    </table>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection