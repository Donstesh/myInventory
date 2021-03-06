@extends('layouts.admin')

@section('content')
<br>
<br>
<!-- Page Content -->
<div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">System Administrators</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <a href="{{route('admin.newadmin')}}" class = "btn btn-success">Add New Admin</a></h1>
                </div>
            </div>
            <hr>
            <div class="table-responsive">
                    <table class="table table-sm table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                          <th>Name</th>
                          <th>email</th>
                          <th>Join Date</th>
                          <th>Verified At.</th>
                          <th>Added By</th>
                          <th colspan = "2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($admins as $admin)
                            <tr class = "text-left">
                              <td>{{ $admin->name }}</td>
                              <td>{{ $admin->email }}</td>
                              <td>{{ $admin->created_at }}</td>
                              <td>{{ $admin->email_verified_at }}</td>
                              <td>{{ $admin->by }}</td>
                              <td><a href="{{route('admin.admins.edit',['id'=>$admin->id])}}" class = "btn btn-info">Edit</a></td>
                              <td><a href="{{route('admin.admins.destroy',['id'=>$admin->id])}}" class = "btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
            </div>

        </div>
    </div>

</div>
@endsection