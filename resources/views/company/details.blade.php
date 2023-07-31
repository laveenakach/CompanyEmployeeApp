@extends('dashboard')

@section('content')
<div class="container">
<div class="row">
   <div class="col-md-6">
      <h2>Company Details</h2>
      <br><br>
      <img src="{{ $company->logo }}" height="280" width="400" alt="" />
   <br><br>
   <p><strong>Company Name: </strong>{{ $company->name }}</p>
   <p><strong>Company Email: </strong>{{ $company->email }}</h4>
   <p><strong>Website: </strong><a href="{{ $company->website }}">{{ $company->website }}</a></p>
      </div>
   </div>
</div>
@endsection