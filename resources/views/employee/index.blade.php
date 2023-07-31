@extends('dashboard')

@section('content')

<html>
<head>
    <title>Employee</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12">
            <div class="pull-left">
                <h2>Employee List</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="employee-form"> Create New Employee</a>
            </div>
        </div>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
<table class="table table-bordered">
   <tr>
      <th>S.No</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Company Id</th>
      <th>Email</th>
      <th>Phone Number</th>
      <th width="280px">Action</th>
   </tr>
   @foreach ($employees as $employee)
   <tr>
      <td>{{ $employee->id }}</td>
      <td>{{ $employee->first_name }}</td>
      <td>{{ $employee->last_name }}</td>
      <td>{{ $employee->company_id }}</td>
      <td>{{ $employee->email }}</td>
      <td>{{ $employee->phone }}</td>
      <td>
            <a class="btn btn-primary" href="{{ route('employee-update',$employee->id) }}">Edit</a>
            <a class="btn btn-primary" href="{{ route('employee-delete',$employee->id) }}">Delete</a>
            <a class="btn btn-primary" href="{{ route('employee-details',$employee->id) }}">View</a>
</td>
   </tr>
   @endforeach
</table>
<span>
{{ $employees->links() }}
</span>

<style>
    .w-5{
        display: none
        
    }

    
    </style>

</body>
</html>

@endsection