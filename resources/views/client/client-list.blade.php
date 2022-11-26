@extends('layouts.admin-navbar')

@section('content')
<x-jet-validation-errors class="mb-4"  style="color:aliceblue"/>
@include('partials.notify')
<meta name="_token" content="{{csrf_token()}}" />
<div class="page-wrapper">

<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Clients</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active">Clients</li>
</ul>
</div>
<div class="col-auto float-right ml-auto">
<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_client"><i class="fa fa-plus"></i> Add Client</a>
<div class="view-icons">
    <a href="{{route('client.client-list')}}" class="grid-view btn btn-link"><i class="fa fa-th"></i></a>
    <a href="{{route('client.client-list')}}" class="list-view btn btn-link active"><i class="fa fa-bars"></i></a>
</div>
</div>
</div>
</div>


<div class="row filter-row">
<div class="col-sm-6 col-md-3">
<div class="form-group form-focus">
<input type="text"  class="form-control floating">
<label class="focus-label">Client ID</label>
</div>
</div>
<div class="col-sm-6 col-md-3">
<div class="form-group form-focus">
<input type="text" name="search_by_fname" class="form-control floating" value="{{ old('search_by_fname')}}">
<label class="focus-label">Client Name</label>
</div>
</div>
{{-- <div class="col-sm-6 col-md-3">
<div class="form-group form-focus select-focus">
<select class="select floating">
<option>Select Company</option>
<option>Global Technologies</option>
<option>Delta Infotech</option>
</select>
<label class="focus-label">Company</label>
</div>
</div> --}}
<div class="col-sm-6 col-md-3">
<a href="#" value="search_by_fname" class="btn btn-success btn-block"> Search </a>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="table-responsive">
<table class="table table-striped custom-table datatable">
<thead>
<tr>
<th>Name</th>

<th>Start  Date </th>
<th>Date of Birth</th>
<th>Email</th>
<th>Status</th>
<th class="text-right">Action</th>
</tr>
</thead>
<tbody>
@foreach($findClient as  $client)


<tr>
<td>
<h2 class="table-avatar">
<a href="client-profile.html" class="avatar"><img src="assets/img/profiles/avatar-19.jpg" alt=""></a>
<a href=""> {{$client->fname}} {{$client->lname}}</a>
</h2>
</td>

<td>{{$client->sdate}}</td>
<td>{{$client->date_of_birth}}</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="67050615151e0412030627021f060a170b024904080a">{{$client->email}}</a></td>

<td>
@if($client->status == null)
<a class="dropdown-item btn btn-white" href="#"><i class="fa fa-dot-circle-o text-danger"></i>{{$client->status}}</a>
@else
<a class="dropdown-item btn btn-white" href="#"><i class="fa fa-dot-circle-o text-success"></i>{{$client->status}}</a>
@endif

</div>
</div>
</td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="{{ url('edit-client/'.$client->id)}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
<a class="dropdown-item"  href="{{ url('client/'.$client->id)}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>

@endforeach
</tbody>
</table>

</div>
</div>
</div>
</div>


<div id="add_client" class="modal custom-modal fade" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Client</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>


<div class="modal-body">
    <form action="{{url('/addclient')}}" method="POST">
        @csrf
    <div class="row">
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">First Name <span class="text-danger">*</span></label>
    <input class="form-control" type="text" name="fname" required="">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">Last Name</label>
    <input class="form-control" type="text" name="lname" required="">
    </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
        <label class="col-form-label">Start Date <span class="text-danger">*</span></label>
        <div class="cal-icon"><input class="form-control datetimepicker" type="text" name="sdate" required=""></div>
        </div>
   </div>
   <div class="col-sm-6">
    <div class="form-group">
    <label class="col-form-label">End Date <span class="text-danger">*</span></label>
    <div class="cal-icon"><input class="form-control datetimepicker" type="text" name="endate" required=""></div>
    </div>
</div>
<div class="col-sm-6">
    <div class="form-group">
    <label class="col-form-label">Date of Birth <span class="text-danger">*</span></label>
    <div class="cal-icon"><input class="form-control datetimepicker" type="text" name="date_of_birth" required=""></div>
    </div>
</div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">Number of Hours per Day<span class="text-danger">*</span></label>
    <input class="form-control floating" type="number" name="nfhpd" required="">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">Email <span class="text-danger">*</span></label>
    <input class="form-control floating" type="text" name="email" required="">
    </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
        <label class="col-form-label">Assign Employee</label>
        <select class="select" name="ea">
            @foreach($findEmployees as $employee)
             <option value="{{$employee->fname}} {{$employee->lname}}">{{$employee->fname}} {{$employee->lname}}</option>
             @endforeach

        </select>
        </div>
        </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">Biweekly Gross Revenue</label>
    <input class="form-control" type="text" name="bgr" required="" >
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">Referral Source Name</label>
    <input class="form-control" type="text" name="rsn">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">EVV coordinator’s Name<span class="text-danger">*</span></label>
    <input class="form-control floating" type="text" name="evvcn" required>
    </div>
    </div>
    </div>
    <div class="submit-section">
        <button class="btn btn-primary submit-btn" type="submit">Submit</button>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection
