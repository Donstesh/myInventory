@extends('layouts.admin')

@section('content')
<br>
<br>
<!-- Page Content -->
<div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Requisitions</h1>
                </div>
            </div>
            @if(!empty($successMsg))
              <div class="alert alert-success"> {{ $successMsg }}</div>
            @endif

            @if(!empty($errormsg))
              <div class="alert alert-danger"> {{ $errormsg }}</div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                <a href="{{ url('admin/req/new') }}" class = "btn btn-success">New Requistion</a></h1>
                </div>
            </div>
            <hr>
            <div class="table-responsive">
                    <table class="table table-sm table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                          <th>Requisition Date</th>
                          <th>Detail</th>
                          <th>Quantity</th>
                          <th>Amount Requisitioned.</th>
                          <th>Category.</th>
                          <th>Status.</th>
                          <th>Requisitioned By</th>
                          <th colspan = "2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reqs as $req)
                            <tr class = "text-center">
                              <td>{{ $req->date }}</td>
                              <td>{{ $req->detail }}</td>
                              <td>{{ $req->quantity }}</td>
                              <td>{{ $req->requisition_amount }}</td>
                              <td>{{ $req->category }}</td>
                              <td id="id1" >{{ $req->status }}</td>
                              <td>{{ $req->by }}</td>
                              <td><a href="{{route('admin.req.edit',['id'=>$req->id])}}" class = "btn btn-info">Approve</a></td>
                              <td><a href="{{route('admin.req.destroy',['id'=>$req->id])}}" class = "btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $reqs->links() }}
            </div>

        </div>
    </div>

</div>
    

@endsection