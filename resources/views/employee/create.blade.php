@extends('dashboard')

@section('content')
<div class="container mt-2">
<div class="row">
   <div class="col-lg-12 margin-tb">
      <div class="pull-left mb-2">
         <h2>Add Employee</h2>
      </div>
   </div>
</div>


<form action="employee-form" method="POST" enctype="multipart/form-data">
   @csrf
   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Company Id:</strong>
            <input type="text" name="company_id" class="form-control" placeholder="company id">
            @error('company_id')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
         </div>
      </div>
   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>First Name:</strong>
            <input type="text" name="first_name" class="form-control" placeholder="first Name">
            @error('first_name')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
         </div>
      </div>
      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Last Name:</strong>
            <input type="text" name="last_name" class="form-control" placeholder="last name">
            @error('last_name')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
         </div>
      </div>
      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Email:</strong>
            <input type="email" name="email" class="form-control" placeholder="email">
            @error('email')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
         </div>
      </div>
      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Phone Number:</strong>
            <input type="text" name="phone" class="form-control" placeholder="phone">
            @error('phone')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
         </div>
      </div>
      <button type="submit" class="btn btn-primary ml-3">Submit</button>
   </div>
</form>

@endsection