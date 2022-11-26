@extends('layouts.admin-navbar')

@section('content')
@include('partials.notify')
<div class="page-wrapper">
    <div class="content container-fluid">

    <div class="page-header">
    <div class="row">
    <div class="col">
    <h3 class="page-title">Employee Pay Roll</h3>
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
    <li class="breadcrumb-item active">Employee Pay Roll</li>
    </ul>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-lg-12">
    <div class="card">
    <div class="card-header">
    <h4 class="card-title mb-0">Employee Pay Roll</h4>
    </div>
    <div class="card-body">
    <form action="employee-salary" method ="post">
        @csrf
    <div class="form-group row">
    <label class="col-form-label col-md-2">Select Employee</label>
    <div class="col-md-10">
    <select class="form-control" name="email" required>
    <option value ="">-- Select Employee --</option>
    @foreach ($users as $employees) 
    <option value="{{$employees->email}}" >{{$employees->fname}} {{$employees->lname}}</option>
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
    <input class="form-control" min="0.01" step="0.01"  type="number" name="amount">
    <div class="input-group-append">
    <button class="btn btn-primary" type="button"></button>
    </div>
    </div>
    </div>
    </div>
    </div>
    <button class="btn btn-primary" type="submit">Pay Now</button>
    </div>
    </form>
    </div>

    <div class="page-wrapper">

        <div class="content container-fluid">

        <div class="page-header">
        <div class="row align-items-center">
        <div class="col">
        <h3 class="page-title">Employee Salary Payment History </h3>
        <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Employee Salary Payment History</li>
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
        <th>Employee</th>
        <th>Amount</th>
        <th>Payment Date </th>
        </tr>
        </thead>
        <tbody>
    @if($getEmployeeSalaries->isEmpty())
    <p> No employee has been alloted salary </p>
    @else
    @foreach($getEmployeeSalaries as $employees)
        <tr>
        <td>{{$employees->employeeName}}</td>
        <td> ${{$employees->amount}}</td>
        <td> {{$employees->created_at->translatedFormat('M d, Y')}} </td>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
    </div>
    </div>

@endif


    </div>

    </div>

    </div>




@endsection
