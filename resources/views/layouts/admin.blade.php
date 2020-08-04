<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>{{config('app.name')}}</title>
        <!-- Favicon  -->
    <link rel="icon" href="{{ URL::asset('images/favicon.png') }}">

        <!-- Bootstrap Core CSS -->
        <link href="{{ URL::asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/admin/css/metisMenu.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/admin/css/timeline.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/admin/css/startmin.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/admin/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body onload="loadColor()">
      <!-- Top Nav Bar -->
      <div id="wrapper">
      @include('inc.adminsidebar')
      </div>
      <!--start body-->
      @yield('content')
<!--end body-->
<!--   Core JS Files   -->
<!-- error messages script -->
    
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

    

    <script>
        //close the alert after 3 seconds.
        $(document).ready(function(){
			setTimeout(function() {
	        	$(".alert").alert('close');
	    	}, 3000);
    	});
    </script>
<!-- jQuery -->
<script src="{{ URL::asset('assets/admin/js/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('assets/admin/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ URL::asset('assets/admin/js/metisMenu.min.js') }}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ URL::asset('assets/admin/js/raphael.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ URL::asset('assets/admin/js/startmin.js') }}"></script>
<script src="https://kit.fontawesome.com/b6d7efb9f5.js"></script> <!-- Custom scripts -->

</body>
</html>