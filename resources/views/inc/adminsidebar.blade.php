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
                    <li><a href="{{ url('/admin/dash') }}"><i class="fa fa-home fa-fw"></i> Admin Home</a></li>
                </ul>
                <ul class="nav navbar-right navbar-top-links">
                    @if(Auth::guard('admin')->check())
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> {{ Auth::guard('admin')->user()->name }}: ADMIN <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-group fa-fw"></i> Administrator</a></li>
                            <li><a href="#"><i class="fa fa-edit fa-fw"></i> My Profile</a></li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="#"
                                onclick="event.preventDefault();
                                                document.querySelector('#admin-logout-form').submit();">
                                <i class="fa fa-sign-out fa-fw"></i> Logout</a>

                            <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
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
                            <li>
                                <a href="#"><i class="fas fa-users"></i> Shares<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ url('admin/share/new') }}"><i class="fas fa-users"></i> New ShareHolder </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('admin/share/share') }}"><i class="fas fa-print"></i> Report</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-file-invoice-dollar"></i> Expenditure<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ url('admin/expenditure/expenditure') }}"><i class="fas fa-print"></i>Expenditure Report</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-coins"></i> Cost Overhead<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ url('admin/coh/new') }}"><i class="fas fa-plus"></i> New Cost Overhead </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('admin/coh/costoverhead') }}"><i class="fas fa-print"></i> Report</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-hand-holding-usd"></i> Income<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="blank.html"><i class="fas fa-plus"></i> New Income </a>
                                    </li>
                                    <li>
                                        <a href="login.html"><i class="fas fa-print"></i> Report</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-people-carry"></i> Employees<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ url('admin/employees/new') }}"><i class="fas fa-plus"></i> New Employee </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('admin/employees/employee') }}"><i class="fas fa-print"></i> Employees</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-user"></i> System Admins<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="/admin/newadmin"><i class="fas fa-plus"></i> New Admin </a>
                                    </li>
                                    <li>
                                        <a href="/admin/admins/adminstrators"><i class="fas fa-print"></i> Admins</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>