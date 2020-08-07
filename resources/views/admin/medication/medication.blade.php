@extends('layouts.admin')

@section('content')
<br>
<br>
<!-- Page Content -->
<div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Medication Report</h1>
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
                <a href="{{ url('admin/medication/new') }}" class = "btn btn-success">New Mdication</a></h1>
                </div>
            </div>
            <hr>
            <div class="table-responsive">
                    <table class="table table-sm table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                          <th>Medictaion Date</th>
                          <th>Vaccine</th>
                          <th>Mode</th>
                          <th>Period.</th>
                          <th>Remarks.</th>
                          <th>Added By</th>
                          <th colspan = "2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($medics as $medic)
                            <tr class = "text-center">
                              <td>{{ $medic->date }}</td>
                              <td>{{ $medic->vaccine }}</td>
                              <td>{{ $medic->mode_of_adminstration }}</td>
                              <td>{{ $medic->period }}</td>
                              <td>{{ $medic->remarks }}</td>
                              <td>{{ $medic->by }}</td>
                              <td><a href="{{route('admin.medication.edit',['id'=>$medic->id])}}" class = "btn btn-info">Edit</a></td>
                              <td><a href="{{route('admin.medication.destroy',['id'=>$medic->id])}}" class = "btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $medics->render() }}
            </div>

        </div>
    </div>

</div>
@endsection