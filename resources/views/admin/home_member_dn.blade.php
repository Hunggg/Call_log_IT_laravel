@extends('layouts.admin_dashboard')
@section('sidebar')
    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <a href="{{route('crequest_member_dn')}}"> <button class="btn btn-danger"> Create request </button></a>
                               
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
                                    <a class="glyphicon glyphicon-tasks" href="{{route('srequest_indi_member_dn')}}">    All</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-envelope" href="{{route('srequest_indi_new_member_dn')}}">    New</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-forward" href="{{route('srequest_indi_inprogress_member_dn')}}">    Inprogess</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-check" href="{{route('srequest_indi_resolved_member_dn')}}">    Resolved</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-calendar" href="{{route('srequest_indi_outofdate_member_dn')}}">    Out Of Date</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Công việc liên quan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               <li>
                                    <a class="glyphicon glyphicon-tasks" href="{{route('srequest_relev_member_dn')}}">    All</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-envelope" href="{{route('srequest_relev_new_member_dn')}}">    New</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-forward" href="{{route('srequest_relev_inprogress_member_dn')}}">    Inprogess</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-check" href="{{route('srequest_relev_resolved_member_dn')}}">    Resolved</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-calendar" href="{{route('srequest_relev_outofdate_member_dn')}}">    Out Of Date</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Việc tôi được giao<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               <li>
                                    <a class="glyphicon glyphicon-tasks" href="{{route('srequest_assi_member_dn')}}">    All</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-envelope" href="{{route('srequest_assi_new_member_dn')}}">    New</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-forward" href="{{route('srequest_assi_inprogress_member_dn')}}">    Inprogess</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-check" href="{{route('srequest_assi_resolved_member_dn')}}">    Resolved</a>
                                </li>
                                <li>
                                    <a class="glyphicon glyphicon-calendar" href="{{route('srequest_assi_outofdate_member_dn')}}">    Out Of Date</a>
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
Trang quản lý Member bộ phận khu vực DN
@endsection       