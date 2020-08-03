@extends('layouts.admin')

@section('content')
<br>
<br>
<!-- Page Content -->
<div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Employees</h1>
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
                        @foreach($emps as $emp)
                            <tr class = "text-center">
                              <td>{{ $emp->id }}</td>
                              <td>{{ $emp->p_photo }}</td>
                              <td>{{ $emp->name }}</td>
                              <td>{{ $emp->email }}</td>
                              <td>{{ $emp->id_no }}</td>
                              <td>{{ $emp->designation }}</td>
                              <td>{{ $emp->salary }}</td>
                              <td>{{ $emp->additional_info }}</td>
                              <td><a href="{{route('admin.employees.edit',['id'=>$emp->id])}}" class = "btn btn-info">Edit</a></td>
                              <td><a href="{{route('admin.employees.destroy',['id'=>$emp->id])}}" class = "btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $emps->links() }}
            </div>

        </div>
    </div>

</div>
@endsection