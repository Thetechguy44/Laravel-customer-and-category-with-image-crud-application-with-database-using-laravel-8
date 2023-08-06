@extends('Layout.customer-layout')
@section('content')
<div class="container-fluid">
      <div class="content">
        <div class="row page-titles">
          <h2 class="card-title">Register New Customer</h2>
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
                <a href="{{url('view')}}" class="btn btn-secondary">View Custormers</a>
            </div>
        </div>
        <div class="card-body"> 
          <div class="basic-form">
            <form action="{{url('submit')}}" method="post">
              @csrf 
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">First Name</label>
                        <input type="text" name="FirstName" class="form-control" required placeholder="Add FirstName">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">LastName</label>
                        <input type="text" name="LastName" class="form-control" required placeholder="Add LastName">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Phone</label>
                        <input type="number" name="Phone" class="form-control" required placeholder="Add Phone">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label>Email</label>
                        <input type="Email" name="Email" class="form-control" required placeholder="Add Email">
                    </div>
                </div>
                <input type="submit" name="submit" value="Register" class="btn btn-primary">
            </form>
        </div>
        </div>
        </div>
      </div>
    </div>
@endsection
