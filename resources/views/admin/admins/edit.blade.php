@extends('layouts.admin')

@section('content')
<br>
<br>
<div id="page-wrapper">
  <div class="container-fluid">
  @if(!empty($successMsg))
              <div class="alert alert-success"> {{ $successMsg }}</div>
            @endif

            @if(!empty($errormsg))
              <div class="alert alert-danger"> {{ $errormsg }}</div>
            @endif
      <div class="row">
          <div class="col-lg-8">
              <h1 class="page-header">Add New Administrator</h1>
          </div>
          <!-- /.col-lg-12 -->
          

      <div class="row mt-5">
            
          <div class="col-sm-6 ">
          <form action = "{{ action('Admin\ManageAdminsController@update') }}" method = "POST">
              @csrf
              @method('POST')
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name = "name" id = "name" class="form-control" required value = "{{ $admin->name }}">
              </div>
              <div class="form-group">
                <label for="email">email:</label>
                <input type="email" name = "email" id = "email" class="form-control" required value = "{{ $admin->email }}">
              </div>
              <div class="form-group">
                <label for="email_verified_at">Verified At:</label>
                <input type="datetime" name = "email_verified_at" id = "email_verified_at" class="form-control" value="2020-02-28 14:28:34" required>
              </div>
              <input type="hidden" name="id" value = "{{$admin->id}}">
              <button type = "submit" class = "btn btn-success">Update Admin Info</button>
            </form>
          </div>
        </div>
    </div>
  </div>
@endsection