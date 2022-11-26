@extends('layouts.admin-navbar')
@section('content')
@include('partials.notify')
<div class="page-wrapper">

    <div class="content container-fluid">

    <div class="page-header">
    <div class="row align-items-center">
    <div class="col">
    <h3 class="page-title">Assigned Employee </h3>
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Assigned Employee</li>
    </ul>
    </div>
</div>
</div>

<div class="row">
    <div class="col-md-12">
    <div class="table-responsive">
    <table class="table table-striped custom-table datatable">
    <thead>
    <tr>
    <th>Employee Full Name</th>
    <th>Client Assigned To </th>
    <th>Client Email</th>
    <th>Client Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($assignedEmployee as $assigned)    
    <tr>
    <td>
    {{$assigned->assignedTo}}
    </td>
    <td>{{$assigned->user->lname}} {{$assigned->user->fname}}</td>
    <td>{{$assigned->user->email}}</td>
    <td> @if($assigned->user->status == null)
    <a class="dropdown-item btn btn-white" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
    @else
    <a class="dropdown-item btn btn-white" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
    @endif</td>
    </div>

    </td>
    <td class="text-right">
    
    </div>
    </td>
    </tr>
    </tbody>
@endforeach
    </table>
</div>
</div>
</div>
@endsection