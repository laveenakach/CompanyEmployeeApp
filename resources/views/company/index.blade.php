@extends('dashboard')

@section('content')

<html>
<head>
    <title>Company</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12">
            <div class="pull-left">
                <h2>Company List</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="form"> Create New Company</a>
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
      <th>Company Name</th>
      <th>Email</th>
      <th>Logo</th>
      <th>Website</th>
      <th width="280px">Action</th>
   </tr>
   @foreach ($companies as $company)
   <tr>
      <td>{{ $company->id }}</td>
      <td>{{ $company->name }}</td>
      <td>{{ $company->email }}</td>
      <td><img src="{{ asset($company->logo) }}" height="75" width="75" alt="" /></td>
      <td><a href="{{ $company->website }}">{{ $company->website }}</a></td>
     
      <td>
            <a class="btn btn-primary" href="{{ route('update',$company->id) }}">Edit</a>
            <a class="btn btn-primary" href="{{ route('delete',$company->id) }}">Delete</a>
            <a class="btn btn-primary" href="{{ route('details',$company->id) }}">view</a>
</td>
   </tr>
   @endforeach
</table>
<span>
{{ $companies->links() }}
</span>

<style>
    .w-5{
        display: none
        
    }

    
    </style>

</body>
</html>

@endsection