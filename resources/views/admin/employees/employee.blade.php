@extends('layouts.admin')

@section('content')
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
                <a href="{{ url('admin/employees/new') }}" class = "btn btn-success">Add New Employee</a></h1>
                </div>
            </div>
            <hr>
            <div class="table-responsive">
                    <table class="table table-sm table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                          <th>Emp ID</th>
                          <th>User</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>ID No.</th>
                          <th>Designation.</th>
                          <th>Salary.</th>
                          <th>Info.</th>
                          <th colspan = "2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($emp as $emp)
                            <tr class = "text-center">
                              <td>{{ $drpt->id }}</td>
                              <td>{{ $drpt->p_photo }}</td>
                              <td>{{ $drpt->name }}</td>
                              <td>{{ $drpt->email }}</td>
                              <td>{{ $drpt->id_no }}</td>
                              <td>{{ $drpt->designation }}</td>
                              <td>{{ $drpt->salary }}</td>
                              <td>{{ $drpt->additional_info }}</td>
                              <td><a href="{{route('admin.admins.edit',['id'=>$emp->id])}}" class = "btn btn-info">Edit</a></td>
                              <td><a href="{{route('admin.admins.destroy',['id'=>$emp->id])}}" class = "btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $emp->links() }}
            </div>

        </div>
    </div>

</div>
@endsection