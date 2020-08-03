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
                          <th>Medictaion ID</th>
                          <th>Medictaion Date</th>
                          <th>Vaccine</th>
                          <th>Mode</th>
                          <th>Period.</th>
                          <th>Remarks.</th>
                          <th colspan = "2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($medics as $medic)
                            <tr class = "text-center">
                              <td>{{ $medic->id }}</td>
                              <td>{{ $medic->date }}</td>
                              <td>{{ $medic->vaccine }}</td>
                              <td>{{ $medic->mode_of_adminstration }}</td>
                              <td>{{ $medic->period }}</td>
                              <td>{{ $medic->remarks }}</td>
                              <td><a href="{{route('admin.admins.edit',['id'=>$medic->id])}}" class = "btn btn-info">Edit</a></td>
                              <td><a href="{{route('admin.admins.destroy',['id'=>$medic->id])}}" class = "btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $medics->links() }}
            </div>

        </div>
    </div>

</div>
@endsection