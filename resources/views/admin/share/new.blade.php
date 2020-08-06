@extends('layouts.admin')

@section('content')
<br>
<br>
<div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">New ShareHolder</h1>
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
                <a href="{{ url('admin/share/share') }}" class = "btn btn-info">Report</a></h1>
                </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-8 offset-sm-2">
              <form method="POST" action="{{ url('admin/share/share') }}" >
                  @csrf  
                  @method('POST')
                  <div class="form-group">
                    <label for="date_joined">Date:</label>
                    <input type="date" name = "date_joined" id = "date_joined" class="form-control" required >
                  </div>
                  <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name = "name" id = "name" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="detail">Details:</label>
                    <input type="text" name = "detail" id = "detail" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="amount_contributed">Amount Contributed:</label>
                    <input type="number" name = "amount_contributed" id = "amount_contributed" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="date_paid">Date Paid:</label>
                    <input type="date" name = "date_paid" id = "date_paid" class="form-control" required >
                  </div>
                  <div class="form-group">
                    <label for="id_no">ID No:</label>
                    <input type="number" name = "id_no" id = "id_no" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="phone_no">Phone No:</label>
                    <input type="number" name = "phone_no" id = "phone_no" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="next_of_kin">Next Of Kin:</label>
                    <input type="text" name = "next_of_kin" id = "next_of_kin" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="mode_of_payment">Mode Of Payment:</label>
                    <input type="text" name = "mode_of_payment" id = "mode_of_payment" class="form-control" required>
                  </div>
                  <button type = "submit" class = "btn btn-success">Save</button>
                </form>
              </div>
            </div>
            <hr>

        </div>
    </div>

</div>
@endsection