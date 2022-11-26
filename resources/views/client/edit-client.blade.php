@extends('layouts.admin-navbar')
@section('content')

<div class="page-wrapper">

    <div class="content container-fluid">
    <div class="modal-body">
<form action="{{url('edit-client', $findUser->id)}}" method="POST" autocomplete="off">
        @method('PUT')
				@csrf

                <div class="row">
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">First Name <span class="text-danger">*</span></label>
    <input class="form-control" type="text" name="fname" required="" value="{{$findUser->fname}}">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">Last Name</label>
    <input class="form-control" type="text" name="lname" required="" value="{{$findUser->lname}}">
    </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
        <label class="col-form-label">Start Date <span class="text-danger">*</span></label>
        <div class="cal-icon"><input class="form-control datetimepicker" type="text" name="sdate" required="" value="{{$findUser->sdate}}"></div>
        </div>
   </div>
   <div class="col-sm-6">
    <div class="form-group">
    <label class="col-form-label">End Date <span class="text-danger">*</span></label>
    <div class="cal-icon"><input class="form-control datetimepicker" type="text" name="endate" required="" value="{{$findUser->endate}}"></div>
    </div>
</div>
<div class="col-sm-6">
    <div class="form-group">
    <label class="col-form-label">Date of Birth <span class="text-danger">*</span></label>
    <div class="cal-icon"><input class="form-control datetimepicker" type="text" name="date_of_birth" required="" value="{{$findUser->date_of_birth}}"></div>
    </div>
</div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">Number of Hours per Day<span class="text-danger">*</span></label>
    <input class="form-control floating" type="number" name="nfhpd" required="" value="{{$findUser->nfhpd}}">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">Email <span class="text-danger">*</span></label>
    <input class="form-control floating" type="text" name="email" required="" value="{{$findUser->email}}">
    </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
        <label class="col-form-label">Assign Employee</label>
        <select class="select">
            @foreach($findEmployees as $employee)
             <option value="{{$employee->fname}} {{$employee->lname}}">{{$employee->fname}} {{$employee->lname}}</option>
             @endforeach

        </select>
        </div>
        </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">Biweekly Gross Revenue</label>
    <input class="form-control" type="text" name="bgr" required="" value="{{$findUser->bgr}}">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">Referral Source Name</label>
    <input class="form-control" type="text" name="rsn" value="{{$findUser->rsn}}">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="col-form-label">EVV coordinator’s Name<span class="text-danger">*</span></label>
    <input class="form-control floating" type="text" name="evvcn" required value="{{$findUser->evvcn}}">
    </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="col-form-label">Status (active or left)<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="status" value="{{ $findUser->status}}">
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
@endsection
