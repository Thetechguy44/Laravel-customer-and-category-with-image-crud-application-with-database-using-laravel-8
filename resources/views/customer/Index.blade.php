@extends('Layout.customer-layout')
@section('content')
<div class="container-fluid">
       <div class="content">
        <div class="row page-titles">
            <h2 class="card-title">Customer lists</h2>
        </div>
        @if(Session::has('Success'))
            <div class="alert alert-success" role="alert">
              {{Session::get('Success')}}
            </div>
            @endif
       </div>
       <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <a href="{{url('add-customer')}}" class="btn btn-secondary">Add Customer</a>
                </div>
            </div>
            <div class="card-body"> 
                <div class="table-responsive">
                    <table class="table header-border table-hover verticle-middle">
                        <thead class="thead-info">
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">FirstName</th>
                                <th scope="col">LastName</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php 
                            $i = 1
                            @endphp
                            @foreach ($customers as $customer)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$customer->FirstName}}</td>
                                <td>{{$customer->LastName}}</td>
                                <td>{{$customer->Phone}}</td>
                                <td>{{$customer->Email}}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{('edit-customer/'.$customer->CustomerID )}}" class="btn btn-primary shadow btn-xs sharp me-1">Edit</a>
                                        <a href="{{('delete-customer/'.$customer->CustomerID )}}" class="btn btn-danger shadow btn-xs sharp">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
