
@extends('layouts.admin-navbar')
@section('content')
@include('partials.notify')
<div class="page-wrapper">

    <div class="content container-fluid">
    <div class="modal-body">
<form action="{{url('edit-employee', $findUser->id)}}" method="POST" autocomplete="off">
        @method('PUT')
				@csrf

                <div class="row">

                <input class="form-control" type="hidden" name="id" value="{{$findUser->id}}">

                    <div class="col-sm-6">
                    <div class="form-group">
                    <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="fname" value="{{ $findUser->fname}}">
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                    <label class="col-form-label">Last Name</label>
                    <input class="form-control" type="text" name="lname" value="{{ $findUser->lname}}">
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                    <label class="col-form-label">Employee Hourly rate<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="ehr" value="{{ $findUser->ehr}}">
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                    <label class="col-form-label">Employee Average rate<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="ear" value="{{ $findUser->ear}}">
                    </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                        <label class="col-form-label">Date of Birth <span class="text-danger">*</span></label>
                        <div class="cal-icon"><input class="form-control datetimepicker" type="text" name="date_of_birth" value="{{ $findUser->date_of_birth}}"></div>
                        </div>
                    </div>
                    {{-- <div class="col-sm-6">
                    <div class="form-group">
                    <label class="col-form-label">Employee payroll ID</label>
                    <input class="form-control" type="text" name="epi" value="{{ $findUser->epi}}">
                    </div>
                    </div> --}}

                    <div class="col-sm-6">
                    <div class="form-group">
                    <label class="col-form-label">Employees weekly work hours </label>
                    <input class="form-control" type="text" name="ewwh" value="{{ $findUser->ewwh}}">
                    </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                        <label class="col-form-label">Gross Biweekly pay<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="gbwp" value="{{ $findUser->gbwp}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-form-label">Status (active or left)<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="status" value="{{ $findUser->status}}">
                            </div>
                        </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                        <label class="col-form-label">Gross Employer Taxes<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="get" value="{{ $findUser->get}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                        <label class="col-form-label">Referral Source Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="rsn"  value="{{ $findUser->rsn}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                        <label class="col-form-label">Year to date Gross pay<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="ydgp" value="{{ $findUser->ydgp}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                        <label class="col-form-label">Bonus paid YTD<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="bp_ytd" value="{{ $findUser->bp_ytd}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                        <label class="col-form-label">External Referral Source<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="ers" value="{{ $findUser->ers}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                        <label class="col-form-label">EVV Coordinator<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="evvcn" value="{{ $findUser->evvcn}}">
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
@endsection
