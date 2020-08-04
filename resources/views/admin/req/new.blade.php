@extends('layouts.admin')

@section('content')
<br>
<br>
<div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> New Requistion</h1>
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
                <a href="{{ url('admin/req/requisition') }}" class = "btn btn-info">Report</a></h1>
                </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-8 offset-sm-2">
                <form action="{{ action('Admin\RequisitionController@store') }}" method = "post">
                  @csrf  
                  @method('POST')
                  <div class="form-group">
                    <label for='date'>Date:</label>
                    <input type="date" name = "date" id = "date" class="form-control" required >
                  </div>
                  <div class="form-group">
                    <label for="detail">Detail:</label>
                    <input type="text" name = "detail" id = "detail" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="text" name = "quantity" id = "quantity" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="requisition_amount">Amount Requisitioned:</label>
                    <input type="number" name = "requisition_amount" id = "requisition_amount" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="category">Categort:</label>
                    <input type="text" name = "category" id = "category" class="form-control" required>
                  </div>
                  <input type="hidden" name="status" required>
                  <button type = "submit" class = "btn btn-success">Save</button>
                </form>
              </div>
            </div>
            <hr>
        </div>
    </div>

</div>
@endsection