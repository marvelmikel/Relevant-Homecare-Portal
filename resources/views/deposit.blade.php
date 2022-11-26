@extends('layouts.admin-navbar')

@section('content')
@include('partials.notify')
<div class="page-wrapper">
    <div class="content container-fluid">

    <div class="page-header">
    <div class="row">
    <div class="col">
    <h3 class="page-title">Deposit/Payment</h3>
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
    <li class="breadcrumb-item active">Make Payment</li>
    </ul>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-lg-12">
    <div class="card">
    <div class="card-header">
    <h4 class="card-title mb-0">Make Deposit</h4>
    </div>
    <div class="card-body">
    <form action="addPayment" method ="post">
        @csrf
    <div class="form-group row">
    <label class="col-form-label col-md-2">Select Client</label>
    <div class="col-md-10">
    <select class="form-control"  name="email" required>
    <option value ="">-- Select Client --</option>
    @foreach ($users as $client) 
    <option value="{{$client->email}}">{{$client->fname}} {{$client->lname}}</option>
    @endforeach
    </select>
    </div>
    </div>
    <div class="form-group mb-0 row">
    <label class="col-form-label col-md-2">Amount</label>
    <div class="col-md-10">
    <div class="input-group">
    <div class="input-group-prepend">
    <span class="input-group-text">$</span>
    </div>
    <input class="form-control" min="0.01" step="0.01"  type="number" name="amount" required>
    <div class="input-group-append">
    <button class="btn btn-primary" type="button"></button>
    </div>
    </div>
    </div>
    </div>
    
    </div>
    <button class="btn btn-primary" type="submit">Pay Now</button>
    </form>
    </div>
    </div>
    <div class="page-wrapper">
        <div class="content container-fluid">
        <div class="page-header">
        <div class="row align-items-center">
        <div class="col">
        <h3 class="page-title">Payment/Deposit History </h3>
        <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Payment History</li>
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
        <th>Client</th>
        <th>Amount</th>
        <th>Payment Date</th>
        </tr>
        </thead>
       <tbody>
       @foreach($payments as $payment)
        <tr>
        <td>{{$payment->clientName}}</td>
        <td>{{$payment->amount}}</td>
        <td>{{$payment->created_at->translatedFormat('M d, Y')}}</td>
        </td>
        </tr>
        @endforeach
        </tbody>
      
       
        </table>
    </div>
    </div>
    </div>


    </div>

    </div>

    </div>



@endsection
