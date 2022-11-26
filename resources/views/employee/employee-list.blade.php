@extends('layouts.admin-navbar')

@section('content')
@include('partials.notify')
<div class="page-wrapper">

    <div class="content container-fluid">

    <div class="page-header">
    <div class="row align-items-center">
    <div class="col">
    <h3 class="page-title">Employee</h3>
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Employee</li>
    </ul>
    </div>
    <div class="col-auto float-right ml-auto">
    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Add Employee</a>
    <div class="view-icons">

        <a href="{{route('employee.employee-list')}}" class="list-view btn btn-link active"><i class="fa fa-bars"></i></a>
    </div>
    </div>
    </div>
    </div>
    <div class="row filter-row">
    <div class="col-sm-6 col-md-3">
    <div class="form-group form-focus">
    <input type="text" class="form-control floating">
    <label class="focus-label">Employee ID</label>
    </div>
    </div>
    <div class="col-sm-6 col-md-3">
    <div class="form-group form-focus">
    <input type="text" class="form-control floating">
    <label class="focus-label">Employee First/Last Name</label>
    </div>
    </div>
    {{-- <div class="col-sm-6 col-md-3">
    <div class="form-group form-focus select-focus">
    <select class="select floating">
    <option>Select Client</option>
    <option>Web Developer</option>
    <option>Web Designer</option>
    <option>Android Developer</option>
    <option>Ios Developer</option>
    </select>
    <label class="focus-label">Clients</label>
    </div>
    </div> --}}
    <div class="col-sm-6 col-md-3">
    <a href="#" class="btn btn-success btn-block"> Search </a>
    </div>
    </div>
    <div id="add_employee" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title">Add Employee</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
        <form action="{{url('/addemployee')}}" method="POST">
            @csrf
        <div class="row">
        <div class="col-sm-6">
        <div class="form-group">
        <label class="col-form-label">First Name <span class="text-danger">*</span></label>
        <input class="form-control" type="text" name="fname" required="" placeholder="John">
        </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
        <label class="col-form-label">Last Name</label>
        <input class="form-control" type="text" name="lname" required="" placeholder="Doe">
        </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
        <label class="col-form-label">Email</label>
        <input class="form-control" type="email" name="email" required="" placeholder="Doe@mail.com">
        </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
        <label class="col-form-label">Employee Hourly rate<span class="text-danger">*</span></label>
        <input class="form-control" type="text" name="ehr" required="" placeholder="1 hour $50">
        </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
        <label class="col-form-label">Employee Average rate<span class="text-danger">*</span></label>
        <input class="form-control" type="text" name="ear" required="" placeholder="1 hour $30">
        </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
            <label class="col-form-label">Date of Birth <span class="text-danger">*</span></label>
            <div class="cal-icon"><input class="form-control datetimepicker" type="text" name="date_of_birth" required=""></div>
            </div>
        </div>
        {{-- <div class="col-sm-6">
        <div class="form-group">
        <label class="col-form-label">Employee payroll ID</label>
        <input class="form-control" type="text" name="epi" required="" placeholder="e.g FT-0007">
        </div>
        </div> --}}
        <div class="col-sm-6">
        <div class="form-group">
        <label class="col-form-label">Employees weekly work hours </label>
        <input class="form-control" type="text" name="ewwh" required="" placeholder="e.g 34hours weekly">
        </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
            <label class="col-form-label">Gross Biweekly pay<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="gbwp" required="" placeholder="e.g $100">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
            <label class="col-form-label">Gross Employer Taxes<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="get" required="" placeholder="e.g $200">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
            <label class="col-form-label">Referral Source Name<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="rsn" required="" placeholder="e.g John Doe">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
            <label class="col-form-label">Year to date Gross pay<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="ydgp" required="" placeholder="e.g $4000">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
            <label class="col-form-label">Bonus paid YTD<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="bp_ytd" required="" placeholder="e.g $700">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
            <label class="col-form-label">External Referral Source<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="ers" required="" placeholder="First Name & Last Name">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
            <label class="col-form-label">EVV Coordinator<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="evvcn" required="" placeholder="First Name & Last Name">
            </div>
        </div>
        </div>
        <div class="submit-section">
        <button class="btn btn-primary submit-btn">Submit</button>
        </div>
        </form>
        </div>
    </div>
    </div>
    </div>
    @if($users->isEmpty())
    <p>No employee has been added yet </p>

    @else
    <div class="row">
    <div class="col-md-12">
    <div class="table-responsive">
    <table class="table table-striped custom-table datatable">
    <thead>
    <tr>
    <th>Full Name</th>
    <th>Employee Payroll ID</th>
    <th>Employee Hourly Rate</th>
    <th>Employee Average Rate</th>
    <th>Date of Birth</th>
    <th>Status</th>
    <th>Employees Weekly Work Hours</th>
    <th>Gross Biweekly pay</th>
    <th>Gross Employer Taxes</th>
    <th>Referral Source Name</th>
    <th>Year to date Gross pay</th>
    <th>Bonus paid YTD</th>
    <th>External Referral Source</th>
    <th>EVV Coordinator</th>
    <th>Client Assigned</th>
    <th>Reg Date</th>
    <th class="text-right no-sort">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($users as $key=>$users)
    <tr>
    <td>
    <h2 class="table-avatar">
    <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpng"></a>
    <a href="">{{$users->fname}}<span>{{$users->lname}}</span></a>
    </h2>
    </td>
    <td>FT-000{{ $users->id}}</td>
    <td>{{ $users->ehr}}</td>
    <td>{{ $users->ear}}</td>
    <td>{{ $users->date_of_birth}}</td>
    <td>{{ $users->status}}</td>
    <td>{{ $users->ewwh}}</td>
    <td>{{ $users->gbwp}}</td>
    <td>{{ $users->get}}</td>
    <td>{{ $users->rsn}}</td>
    <td>{{ $users->ydgp}}</td>
    <td>{{ $users->bp_ytd}}</td>
    <td>
        <h2 class="table-avatar">
        <a href="" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpng"></a>
        <a href="">{{$users->ers}}</a>
        </h2>
        </td>
    <td>
        <h2 class="table-avatar">
        <a href="" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpng"></a>
        <a href="">{{ $users->evvcn}}</a>
        </h2>
    </td>
    <td>
    <div class="dropdown">

    <a href="/assign"  class="btn btn-white btn-sm btn-rounded ">
    View Assigned Clients </a>

    </div>
    </div>

    </td>
    <td>
        {{$users->created_at}}
    </td>
    <td class="text-right">
    <div class="dropdown dropdown-action">
    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
    <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item" href="{{ url('edit-employee/'.$users->id)}}" ><i class="fa fa-pencil m-r-5"></i> View Profile/Edit</a>
    <a class="dropdown-item" href="{{ url('delete-employee/'.$users->id)}}" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
    </div>
    </div>
    </td>
    </tr>
    </tbody>
    @endforeach
    </table>
    </div>
    </div>
    </div>
    </div>



    <div id="edit_employee" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title">View / Edit Employee Profile</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
    <form action="{{url('update-employee', $users->id)}}" method="POST" autocomplete="off">
        @method('PUT')
				@csrf

                <div class="row">

                <input class="form-control" type="hidden" name="id" value="{{$users->id}}">

                    <div class="col-sm-6">
                    <div class="form-group">
                    <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="fname" value="{{ $users->fname}}">
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                    <label class="col-form-label">Last Name</label>
                    <input class="form-control" type="text" name="lname" value="{{ $users->lname}}">
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                    <label class="col-form-label">Employee Hourly rate<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="ehr" value="{{ $users->ehr}}">
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                    <label class="col-form-label">Employee Average rate<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="ear" value="{{ $users->ear}}">
                    </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                        <label class="col-form-label">Date of Birth <span class="text-danger">*</span></label>
                        <div class="cal-icon"><input class="form-control datetimepicker" type="text" name="date_of_birth" value="{{ $users->date_of_birth}}"></div>
                        </div>
                    </div>
                    {{-- <div class="col-sm-6">
                    <div class="form-group">
                    <label class="col-form-label">Employee payroll ID</label>
                    <input class="form-control" type="text" name="epi" value="{{ $users->epi}}">
                    </div>
                    </div> --}}

                    <div class="col-sm-6">
                    <div class="form-group">
                    <label class="col-form-label">Employees weekly work hours </label>
                    <input class="form-control" type="text" name="ewwh" value="{{ $users->ewwh}}">
                    </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                        <label class="col-form-label">Gross Biweekly pay<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="gbwp" value="{{ $users->gbwp}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-form-label">Status<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="status" value="{{ $users->status}}">
                            </div>
                        </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                        <label class="col-form-label">Gross Employer Taxes<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="get" value="{{ $users->get}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                        <label class="col-form-label">Referral Source Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="rsn"  value="{{ $users->rsn}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                        <label class="col-form-label">Year to date Gross pay<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="ydgp" value="{{ $users->ydgp}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                        <label class="col-form-label">Bonus paid YTD<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="bp_ytd" value="{{ $users->bp_ytd}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                        <label class="col-form-label">External Referral Source<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="ers" value="{{ $users->ers}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                        <label class="col-form-label">EVV Coordinator<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="evvcn" value="{{ $users->evvcn}}">
                        </div>
                    </div>
                    </div>
    <div class="submit-section">
    <button type="submit" class="btn btn-primary submit-btn">Save</button>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>


    <div class="modal custom-modal fade" id="delete_employee" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <div class="modal-body">
    <div class="form-header">
    <h3>Delete Employee</h3>
    <p>Are you sure want to delete?</p>
    </div>
    <div class="modal-btn delete-action">
    <div class="row">
    <div class="col-6">
    <a href="{{ url('delete-employee/'.$users->id)}}"  class="btn btn-primary continue-btn">Delete</a>
    </div>
    <div class="col-6">
    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    @endif

    </div>


@endsection
