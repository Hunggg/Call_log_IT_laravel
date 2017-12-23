@extends('layouts.admin_dashboard')
@section('sidebar')
    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <a href="{{route('crequest_subleader_hn')}}" > <button class="btn btn-danger"> Create request </button></a>
                               
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                    
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Việc tôi yêu cầu<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="glyphicon glyphicon-tasks" href="{{route('srequest_indi_subleader_hn')}}">    All</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-envelope" href="{{route('srequest_indi_new_subleader_hn')}}">    New</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-forward" href="{{route('srequest_indi_inprogress_subleader_hn')}}">    Inprogress</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-check" href="{{route('srequest_indi_resolved_subleader_hn')}}">    Resolved</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-calendar" href="{{route('srequest_indi_outofdate_subleader_hn')}}">    Out Of Date</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Công việc liên quan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="glyphicon glyphicon-tasks" href="{{route('srequest_relev_subleader_hn')}}">    All</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-envelope" href="{{route('srequest_relev_new_subleader_hn')}}">    New</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-forward" href="{{route('srequest_relev_inprogress_subleader_hn')}}">    Inprogress</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-check" href="{{route('srequest_relev_resolved_subleader_hn')}}">    Resolved</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-calendar" href="{{route('srequest_relev_outofdate_subleader_hn')}}">    Out Of Date</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Công việc của team<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="glyphicon glyphicon-tasks" href="{{route('srequest_team_subleader_hn')}}">    All</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-envelope" href="{{route('srequest_team_new_subleader_hn')}}">    New</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-forward" href="{{route('srequest_team_inprogress_subleader_hn')}}">    Inprogress</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-check" href="{{route('srequest_team_resolved_subleader_hn')}}">    Resolved</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-calendar" href="{{route('srequest_team_outofdate_subleader_hn')}}">    Out Of Date</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Công việc của bộ phận IT Hà Nội<span class="fa arrow"></span></a>
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

@section('name_page')
Trang quản lý subleader bộ phận khu vực Hà Nội
@endsection
               