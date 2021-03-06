@extends('layouts.admin_dashboard')
@section('sidebar')
    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <button href="abc.html" type="button" class="btn btn-danger">Create request</button>
                               
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                    
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Việc tôi yêu cầu<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="glyphicon glyphicon-tasks" href="flot.html">    All</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-envelope" href="morris.html">    New</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-forward" href="flot.html">    Progess</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-check" href="flot.html">    Resolved</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-calendar" href="flot.html">    Out Of Date</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Công việc liên quan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="glyphicon glyphicon-tasks" href="flot.html">    All</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-envelope" href="morris.html">    New</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-forward" href="flot.html">    Progess</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-check" href="flot.html">    Resolved</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-calendar" href="flot.html">    Out Of Date</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Việc tôi được giao<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               <li>
                                    <a class="glyphicon glyphicon-tasks" href="flot.html">    All</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-envelope" href="morris.html">    New</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-forward" href="flot.html">    Progess</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-check" href="flot.html">    Resolved</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-calendar" href="flot.html">    Out Of Date</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Công việc của team<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="glyphicon glyphicon-tasks" href="flot.html">    All</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-envelope" href="morris.html">    New</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-forward" href="flot.html">    Progess</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-flag" href="flot.html">    FeedBack</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-calendar" href="flot.html">    Out Of Date</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-log-out" href="flot.html">    Closed</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                       
                       
                     
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
@endsection        