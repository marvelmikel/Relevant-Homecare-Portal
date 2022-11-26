@extends('layouts.admin-navbar')

@section('content')
<div class="page-wrapper">

    <div class="content container-fluid">

    <div class="page-header">
    <div class="row align-items-center">
    <div class="col">
    <h3 class="page-title">Clients</h3>
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('employee.terminate')}}">Dashboard</a></li>
    <li class="breadcrumb-item active">Clients</li>
    </ul>
    </div>
    <div class="col-auto float-right ml-auto">
    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_client"><i class="fa fa-plus"></i> Add Client</a>
    <div class="view-icons">
    <a href="{{route('client.view-all-client')}}" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
    <a href="{{route('client.client-list')}}" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
    </div>
    </div>
    </div>
    </div>


    <div class="row filter-row">
    <div class="col-sm-6 col-md-3">
    <div class="form-group form-focus">
    <input type="text" class="form-control floating">
    <label class="focus-label">Client ID</label>
    </div>
    </div>
    <div class="col-sm-6 col-md-3">
    <div class="form-group form-focus">
    <input type="text" class="form-control floating">
    <label class="focus-label">Client Name</label>
    </div>
    </div>
    <div class="col-sm-6 col-md-3">
    <div class="form-group form-focus select-focus">
    <select class="select floating">
    <option>Select Company</option>
    <option>Global Technologies</option>
    <option>Delta Infotech</option>
    </select>
    <label class="focus-label">Company</label>
    </div>
    </div>
    <div class="col-sm-6 col-md-3">
    <a href="#" class="btn btn-success btn-block"> Search </a>
    </div>
    </div>

    <div class="row staff-grid-row">
    <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
    <div class="profile-widget">
    <div class="profile-img">
    <a href="client-profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-19.jpg"></a>
    </div>
    <div class="dropdown profile-action">
    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
    <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
    </div>
    </div>
    <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html">Global Technologies</a></h4>
    <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html">Barry Cuda</a></h5>
    <div class="small text-muted">CEO</div>
    <a href="chat.html" class="btn btn-white btn-sm m-t-10">Message</a>
    <a href="client-profile.html" class="btn btn-white btn-sm m-t-10">View Profile</a>
    </div>
    </div>
    <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
    <div class="profile-widget">
    <div class="profile-img">
    <a href="client-profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-29.jpg"></a>
    </div>
    <div class="dropdown profile-action">
    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
    <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
    </div>
    </div>
    <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html">Delta Infotech</a></h4>
    <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html">Tressa Wexler</a></h5>
    <div class="small text-muted">Manager</div>
    <a href="chat.html" class="btn btn-white btn-sm m-t-10">Message</a>
    <a href="client-profile.html" class="btn btn-white btn-sm m-t-10">View Profile</a>
    </div>
    </div>
    <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
    <div class="profile-widget">
    <div class="profile-img">
    <a href="client-profile.html" class="avatar"><img src="assets/img/profiles/avatar-07.jpg" alt=""></a>
    </div>
    <div class="dropdown profile-action">
    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
    <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
    </div>
    </div>
    <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html">Cream Inc</a></h4>
    <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html">Ruby Bartlett</a></h5>
    <div class="small text-muted">CEO</div>
    <a href="chat.html" class="btn btn-white btn-sm m-t-10">Message</a>
    <a href="client-profile.html" class="btn btn-white btn-sm m-t-10">View Profile</a>
    </div>
    </div>
    <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
    <div class="profile-widget">
    <div class="profile-img">
    <a href="client-profile.html" class="avatar"><img src="assets/img/profiles/avatar-06.jpg" alt=""></a>
    </div>
    <div class="dropdown profile-action">
    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
    <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
    </div>
    </div>
    <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html">Wellware Company</a></h4>
    <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html">Misty Tison</a></h5>
    <div class="small text-muted">CEO</div>
    <a href="chat.html" class="btn btn-white btn-sm m-t-10">Message</a>
    <a href="client-profile.html" class="btn btn-white btn-sm m-t-10">View Profile</a>
    </div>
    </div>
    <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
    <div class="profile-widget">
    <div class="profile-img">
    <a href="client-profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-14.jpg"></a>
    </div>
    <div class="dropdown profile-action">
    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
    <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
    </div>
    </div>
    <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html">Mustang Technologies</a></h4>
    <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html">Daniel Deacon</a></h5>
    <div class="small text-muted">CEO</div>
    <a href="chat.html" class="btn btn-white btn-sm m-t-10">Message</a>
    <a href="client-profile.html" class="btn btn-white btn-sm m-t-10">View Profile</a>
    </div>
    </div>
    <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
    <div class="profile-widget">
    <div class="profile-img">
    <a href="client-profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-18.jpg"></a>
    </div>
    <div class="dropdown profile-action">
    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
    <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
    </div>
    </div>
    <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html">International Software Inc</a></h4>
    <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html">Walter Weaver</a></h5>
    <div class="small text-muted">CEO</div>
    <a href="chat.html" class="btn btn-white btn-sm m-t-10">Message</a>
    <a href="client-profile.html" class="btn btn-white btn-sm m-t-10">View Profile</a>
    </div>
    </div>
    <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
    <div class="profile-widget">
    <div class="profile-img">
    <a href="client-profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-28.jpg"></a>
    </div>
    <div class="dropdown profile-action">
    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
    <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
    </div>
    </div>
    <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html">Mercury Software Inc</a></h4>
    <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html">Amanda Warren</a></h5>
    <div class="small text-muted">CEO</div>
    <a href="chat.html" class="btn btn-white btn-sm m-t-10">Message</a>
    <a href="client-profile.html" class="btn btn-white btn-sm m-t-10">View Profile</a>
    </div>
    </div>
    <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
    <div class="profile-widget">
    <div class="profile-img">
    <a href="client-profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-13.jpg"></a>
    </div>
    <div class="dropdown profile-action">
    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
    <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
    </div>
    </div>
    <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html">Carlson Tech</a></h4>
    <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html">Betty Carlson</a></h5>
    <div class="small text-muted">CEO</div>
    <a href="chat.html" class="btn btn-white btn-sm m-t-10">Message</a>
    <a href="client-profile.html" class="btn btn-white btn-sm m-t-10">View Profile</a>
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

    <div class="col-sm-6">
        <div class="form-group">
        <label class="col-form-label">Assign Employee</label>
        <select class="select">
        <option value="">John Doe</option>
        <option value="1">John Doe</option>
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

     {{-- <div class="modal-body">
    <form action="{{url('/addclient')}}" method="POST">
        @csrf
    <div class="row">
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">Name <span class="text-danger">*</span></label>
    <input class="form-control" type="text" name="name" required="">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">email</label>
    <input class="form-control" type="email" name="email" required="">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">password<span class="text-danger">*</span></label>
    <input class="form-control" type="paasword" name="password" required="">
    </div>
    </div>

    </div>

    <div class="submit-section">
    <button class="btn btn-primary submit-btn" type="submit">Submit</button>
    </div>
    </form>
    </div> --}}


    <div id="edit_client" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title">Edit Client</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
    <form>
    <div class="row">
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">First Name <span class="text-danger">*</span></label>
    <input class="form-control" value="Barry" type="text">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">Last Name</label>
    <input class="form-control" value="Cuda" type="text">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">Username <span class="text-danger">*</span></label>
    <input class="form-control" value="barrycuda" type="text">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">Email <span class="text-danger">*</span></label>
    <input class="form-control floating" value="barrycuda@example.com" type="email">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">Password</label>
    <input class="form-control" value="barrycuda" type="password">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">Confirm Password</label>
    <input class="form-control" value="barrycuda" type="password">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">Client ID <span class="text-danger">*</span></label>
    <input class="form-control floating" value="CLT-0001" type="text">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">Phone </label>
    <input class="form-control" value="9876543210" type="text">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">Company Name</label>
    <input class="form-control" type="text" value="Global Technologies">
    </div>
    </div>
    </div>
    <div class="table-responsive m-t-15">
    <table class="table table-striped custom-table">
    <thead>
    <tr>
    <th>Module Permission</th>
    <th class="text-center">Read</th>
    <th class="text-center">Write</th>
    <th class="text-center">Create</th>
    <th class="text-center">Delete</th>
    <th class="text-center">Import</th>
    <th class="text-center">Export</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>Projects</td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    </tr>
    <tr>
    <td>Tasks</td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    </tr>
    <tr>
    <td>Chat</td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    </tr>
    <tr>
    <td>Estimates</td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
     </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    </tr>
    <tr>
    <td>Invoices</td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    </tr>
    <tr>
    <td>Timing Sheets</td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    <td class="text-center">
    <input checked="" type="checkbox">
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    <div class="submit-section">
    <button class="btn btn-primary submit-btn">Save</button>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>


    <div class="modal custom-modal fade" id="delete_client" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <div class="modal-body">
    <div class="form-header">
    <h3>Delete Client</h3>
    <p>Are you sure want to delete?</p>
    </div>
    <div class="modal-btn delete-action">
    <div class="row">
    <div class="col-6">
    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
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

    </div>

@endsection
