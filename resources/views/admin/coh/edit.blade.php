@extends('layouts.admin')

@section('content')
<br>
<br>
<div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">New Cost OverHead</h1>
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
                <a href="{{ url('admin/coh/costoverhead') }}" class = "btn btn-info">Report</a></h1>
                </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-8 offset-sm-2">
              <form method="POST" action="{{ url('admin/updatecoh') }}" >
                  @csrf  
                  @method('POST')
                  <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" name = "date" id = "date" class="form-control" required value = "{{$cohs->date}}">
                  </div>
                  <div class="form-group">
                    <label for="service">Service:</label>
                    <input type="text" name = "service" id = "service" class="form-control" required value = "{{$cohs->service}}">
                  </div>
                  <div class="form-group">
                    <label for="category">Category:</label>
                    <input type="text" name = "category" id = "category" class="form-control" required value = "{{$cohs->category}}">
                  </div>
                  <div class="form-group">
                    <label for="amount">Amount Spent:</label>
                    <input type="number" name = "amount" id = "amount" class="form-control" required value = "{{$cohs->amount}}">
                  </div>
                  <div class="form-group">
                    <label for="status">Status:</label>
                    <input type="text" name = "status" id = "status" class="form-control" required value = "{{$cohs->status}}">
                  </div>
                  <input type="hidden" name="id" value = "{{$cohs->id}}">
                  <button type = "submit" class = "btn btn-success">Save</button>
                </form>
              </div>
            </div>
            <hr>

        </div>
    </div>

</div>
@endsection