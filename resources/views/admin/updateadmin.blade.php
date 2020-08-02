@extends('layouts.admin')

@section('content')
<div id="page-wrapper">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-8">
              <h1 class="page-header">Add New Administrator</h1>
          </div>
          <!-- /.col-lg-12 -->
    {{-- Success Alert --}}
    @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {{-- Error Alert --}}
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

      </div>
      
      <div class="row mt-5">
          <div class="col-sm-6 ">
          <form action = "newadmin" method = "POST">
              @csrf
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name = "name" id = "name" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">email:</label>
                <input type="email" name = "email" id = "email" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name = "password" id = "password" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email_verified_at">Verified At:</label>
                <input type="datetime" name = "email_verified_at" id = "email_verified_at" class="form-control" value="2020-02-28 14:28:34" required>
              </div>
              <button type = "submit" class = "btn btn-success">Save Admin</button>
            </form>
          </div>
        </div>
    </div>
  </div>
@endsection