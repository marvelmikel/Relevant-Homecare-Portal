@extends('layouts.admin-navbar')

@section('content')
@include('partials.notify')
<div class="page-wrapper">
    <div class="content container-fluid">

    <div class="page-header">
    <div class="row">
    <div class="col-sm-12">
    <h3 class="page-title">External Share Holders</h3>
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
    <li class="breadcrumb-item active">External Share Holders</li>
    </ul>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-12">
    <div class="card">
    <div class="card">
    <div class="card-header">
    <h5 class="card-title mb-0">External Share Holders</h5>
    {{-- <p class="card-text">Not interested in custom validation feedback messages or writing JavaScript to change form behaviors? All good, you can use the browser defaults. Try submitting the form below.</p> --}}
    </div>
    <div class="card-body">
    <div class="row">
    <div class="col-sm">
    <form  action ="addexshareholders" method ="POST">
        @csrf
    <div class="form-row">
    <div class="col-md-4 mb-3">
    <label for="validationDefault01">First Name</label>
    <input type="text" class="form-control" id="validationDefault01" placeholder="First Name" required=""  name ="firstName">
    </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02">Last Name</label>
    <input type="text" class="form-control" id="validationDefault02" placeholder="Last Name" required="" name="lastName">
    </div>
    </div>
    <div class="form-group">
    <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required="">
    <label class="form-check-label" for="invalidCheck2">
    Agree to terms and conditions
    </label>
    </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
    </div>
    </div>
    </div>
    </div>

    </div>
    </div>

    </div>
    </div>
    <div class="page-wrapper">

        <div class="content container-fluid">

        <div class="page-header">
        <div class="row align-items-center">
        <div class="col">
        <h3 class="page-title">External Share Holders </h3>
        <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">External Share Holders</li>
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
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date</th>
        </tr>
        </thead>
        <tbody>
    @foreach($shareHolders as $holder)
        <tr>
        <td>{{$holder->firstName}}</td>
        <td> {{$holder->lastName}}</td>
        <td>{{$holder->created_at->translatedFormat('M d, Y')}}</td>
        <td class="text-right">

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
@endsection
