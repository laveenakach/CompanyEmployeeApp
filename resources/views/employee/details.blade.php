@extends('dashboard')

@section('content')
<div class="container">
<div class="row">
   <div class="col-md-6">
      <h2>Employee Details</h2>
      <br><br>
   <p><strong>Company Id: </strong>{{ $employee->id }}</p>
   <p><strong>First Name: </strong>{{ $employee->first_name }}</h4>
   <p><strong>Last Name: </strong>{{ $employee->last_name }}</p>
   <p><strong>Email: </strong>{{ $employee->email }}</p>
   <p><strong>Phone: </strong>{{ $employee->phone }}</p>
      </div>
   </div>
</div>
@endsection