@extends('layouts.admin-navbar')
@section('content')
<div class="page-wrapper">

    <div class="content container-fluid">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <div class="modal-body">
    <div class="form-header">
    <h3>Delete Client</h3>
    <p>Are you sure want to delete client {{$findClientDelete->fname}} {{$findClientDelete->lname}}?</p>
    </div>
    <div class="modal-btn delete-action">
    <div class="row">
    <div class="col-6">
        <form action="{{ url('delete-client/'.$findClientDelete->id)}}" method="post">
            @csrf 
            @method('DELETE')
    <button type="submit"  class="btn btn-primary continue-btn">Delete</button>
    </form>
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