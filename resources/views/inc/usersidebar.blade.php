<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">{{config('app.name')}}</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="{{ url('/admin/dash') }}"><i class="fa fa-home fa-fw"></i> Employee Home</a></li>
                </ul>
                <ul class="nav navbar-right navbar-top-links">
                    @if(Auth::guard('web')->check())
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> {{ Auth::guard('web')->user()->name }}: EMPLOYEE <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-edit fa-fw"></i> My Profile</a></li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="#"
                                onclick="event.preventDefault();
                                                document.querySelector('#admin-logout-form').submit();">
                                <i class="fa fa-sign-out fa-fw"></i> Logout</a>

                            <form id="admin-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </li>
                            @endif
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="{{ url('/admin/dashboard') }}" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-clipboard"></i> Daily Reports<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ url('admin/dailyreport/new') }}"><i class="fas fa-plus"></i> Add New Report</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('admin/dailyreport/dailyreport') }}"><i class="fas fa-print"></i> Report</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-prescription-bottle-alt"></i> Medication<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ url('admin/medication/new') }}"><i class="fas fa-plus"></i> Add New</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('admin/medication/medication') }}"><i class="fas fa-print"></i> Report</a>
                                    </li> 
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-file-invoice"></i> Requisition<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ url('admin/req/new') }}"><i class="fas fa-plus"></i> New Requisition </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('admin/req/requisition') }}"><i class="fas fa-print"></i> Report</a>
                                    </li> 
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>