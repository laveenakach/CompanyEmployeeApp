@extends('dashboard')

@section('content')
<div class="container mt-2">
<div class="row">
   <div class="col-lg-12 margin-tb">
      <div class="pull-left mb-2">
         <h2>Add Company</h2>
      </div>
      <div class="pull-right">
      </div>
   </div>
</div>


<form action="form" method="POST" enctype="multipart/form-data">
   @csrf
   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Company Name:</strong>
            <input type="text" name="name" class="form-control" placeholder="Company Name">
            @error('name')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
         </div>
      </div>
      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Company Email:</strong>
            <input type="email" name="email" class="form-control" placeholder="Company email">
            @error('email')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
         </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Company Logo:</strong>
            <input type="file" name="logo" class="form-control" placeholder="Company logo">
            @error('logo')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
         </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Website:</strong>
            <input type="text" name="website" class="form-control" placeholder="Company website">
            @error('website')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
         </div>
      </div>
      <button type="submit" class="btn btn-primary ml-3">Submit</button>
   </div>
</form>

@endsection