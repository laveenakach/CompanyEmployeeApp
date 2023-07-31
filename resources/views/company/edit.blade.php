@extends('dashboard')
@section('content')
<div class="container mt-2">
   <div class="row">
      <div class="col-lg-12 margin-tb">
         <div class="pull-left">
            <h2>Edit Company Details</h2>
         </div>
      </div>
   </div>
   @if(session('status'))
   <div class="alert alert-success mb-1 mt-1">
      {{ session('status') }}
   </div>
   @endif
   <form action="{{ route('update',$company->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Company Name:</strong>
               <input type="text" name="name" value="{{ $company->name }}" class="form-control" placeholder="Company Name">
               @error('name')
               <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
         </div>
         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Email:</strong>
               <input type="email" name="email" value="{{ $company->email }}" class="form-control" placeholder="Company Email">
               @error('email')
               <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
         </div>
         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Website:</strong>
               <input type="text" name="website" value="{{ $company->website }}" class="form-control" placeholder="Company Website">
               @error('website')
               <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
         </div>
         <button type="submit" class="btn btn-primary ml-3">Submit</button>
      </div>
   </form>
</div>
@endsection