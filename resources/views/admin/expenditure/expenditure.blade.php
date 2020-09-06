@extends('layouts.admin')

@section('content')
<br>
<br>
<!-- Page Content -->
<div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Expenditure Report</h1>
                </div>
            </div>
            @if(!empty($successMsg))
              <div class="alert alert-success"> {{ $successMsg }}</div>
            @endif

            @if(!empty($errormsg))
              <div class="alert alert-danger"> {{ $errormsg }}</div>
            @endif
            <hr>
            <div class="table-responsive text-right">
                    <table class="table table-sm table-bordered table-hover table-striped" >
                        <thead>
                        <tr>
                          <th>Detail</th>
                          <th class="text-right">Cost OverHead</th>
                          <th class="text-right">Requistion</th>
                          <th class="text-right">Total Amount Spent.</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class = "text-left">
                              <td >Amount</td>
                              <td class="text-right"> Ksh {{ $totalcoh }}</td>
                              <td class="text-right"> Ksh {{ $totalreq }}</td>
                              <td class="text-right"> Ksh {{ $totalexpenditure }}</td>
                            </tr>
                        </tbody>
                    </table>
            </div>

        </div>
    </div>

</div>
    

@endsection