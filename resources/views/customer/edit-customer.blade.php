@extends('Layout.customer-layout')
@section('content')
<div class="container-fluid">
      <div class="content">
        <div class="row page-titles">
          <h4 class="card-title">Edit Customer</h4>
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
                <a href="{{url('view')}}" class="btn btn-secondary">Back</a>
            </div>
        </div>
        <div class="card-body"> 
          <div class="basic-form">
            <form action="{{url('update-customer')}}" method="post">
              @csrf 
                <div class="row">
                  <input type="hidden" name="CustomerID" value="{{$customers->CustomerID}}">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">First Name</label>
                        <input type="text" name="FirstName" class="form-control" required placeholder="FirstName" value="{{$customers->FirstName}}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">LastName</label>
                        <input type="text" name="LastName" class="form-control" required placeholder="LastName" value="{{$customers->LastName}}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Phone</label>
                        <input type="number" name="Phone" class="form-control" required placeholder="Phone" value="{{$customers->Phone}}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label>Email</label>
                        <input type="Email" name="Email" class="form-control" required placeholder="Email" value="{{$customers->Email}}">
                    </div>
                </div>
                <input type="submit" name="submit" value="Update" class="btn btn-primary">
            </form>
        </div>
        </div>
        </div>
      </div>
    </div>
@endsection
