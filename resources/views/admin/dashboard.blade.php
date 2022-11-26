@extends('layouts.admin-navbar')

@section('content')

        <div class="page-wrapper">

        <div class="content container-fluid">

        <div class="page-header">
        <div class="row">
        <div class="col-sm-12">
        <h3 class="page-title">Welcome Admin!</h3>
        <ul class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
        </ul>
        </div>
        </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="card dash-widget">
                <div class="card-body">
                <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                <div class="dash-widget-info">
                <h3>{{ $employee }}</h3>
                <span>Total Current Employees</span>
                </div>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                 <div class="card dash-widget">
                <div class="card-body">
                <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                <div class="dash-widget-info">
                <h3>{{ $leftemployee}}</h3>
                <span> Total Employees Left</span>
                </div>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card dash-widget">
                    <div class="card-body">
                    <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                    <div class="dash-widget-info">
                    <h3>{{ $client }}</h3>
                    <span>Total Clients</span>
                    </div>
                    </div>
                    </div>
                    </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card dash-widget">
                    <div class="card-body">
                    <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                    <div class="dash-widget-info">
                    <h3>{{ $leftclient }}</h3>
                    <span>Total Clients Left</span>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="card dash-widget">
                        <div class="card-body">
                        <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                        <div class="dash-widget-info">
                        <h3>97</h3>
                        <span>Total External Share Holders</span>
                        </div>
                        </div>
                        </div>
                        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
            <div class="card-body">
            <span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
            <div class="dash-widget-info">
            <h3>44</h3>
            <span>Total Gross revenue </span>
            </div>
            </div>
            </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="card dash-widget">
                <div class="card-body">
                <span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
                <div class="dash-widget-info">
                <h3>444</h3>
                <span>Total Pay roll cost </span>
                </div>
                </div>
                </div>
                </div>


        </div>
        <div class="row">
        <div class="col-md-12">
        <div class="row">
        <div class="col-md-6 text-center">
        <div class="card">
        <div class="card-body">
        <h3 class="card-title">Total Gross Revenue</h3>
        <div id="bar-charts"></div>
        </div>
        </div>
        </div>
        <div class="col-md-6 text-center">
        <div class="card">
        <div class="card-body">
        <h3 class="card-title">Total Pay Roll Cost</h3>
        <div id="line-charts"></div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>

        </div>


        @endsection

