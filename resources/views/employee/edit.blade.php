@extends('dashboard')
@section('content')
<div class="container mt-2">
   <div class="row">
      <div class="col-lg-12 margin-tb">
         <div class="pull-left">
            <h2>Edit Employee Details</h2>
         </div>
      </div>
   </div>
   @if(session('status'))
   <div class="alert alert-success mb-1 mt-1">
      {{ session('status') }}
   </div>
   @endif
   <form action="{{ route('employee-update',$employee->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Company Id:</strong>
               <input type="text" name="company_id" value="{{ $employee->company_id }}" class="form-control" placeholder="company id">
               @error('company_id')
               <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
         </div>
      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>First Name:</strong>
               <input type="text" name="first_name" value="{{ $employee->first_name }}" class="form-control" placeholder="first Name">
               @error('first_name')
               <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
         </div>
         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Last Name:</strong>
               <input type="text" name="last_name" value="{{ $employee->last_name }}" class="form-control" placeholder="last Name">
               @error('last_name')
               <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
         </div>
         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Email:</strong>
               <input type="email" name="email" value="{{ $employee->email }}" class="form-control" placeholder="email">
               @error('email')
               <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
         </div>
         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Phone Number:</strong>
               <input type="text" name="phone" value="{{ $employee->phone }}" class="form-control" placeholder="phone">
               @error('phone')
               <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
         </div>
         <button type="submit" class="btn btn-primary ml-3">Submit</button>
      </div>
   </form>
</div>
@endsection