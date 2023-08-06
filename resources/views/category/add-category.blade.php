@extends('Layout.category-layout')
@section('content')
<div class="container-fluid">
      <div class="content">
        <div class="row page-titles">
          <h2 class="card-title">Add Category</h2>
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
                <a href="{{url('show')}}" class="btn btn-secondary">View Category</a>
            </div>
        </div>
        <div class="card-body"> 
          <div class="basic-form">
            <form action="{{url('input')}}" method="post" enctype="multipart/form-data">
              @csrf 
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Category</label>
                        <input type="text" name="catname" required class="form-control" placeholder="Category Name">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Picture</label>
                        <input type="file" name="picture" class="form-control" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Description</label><br>
                        <textarea class="form-control" name="description" id="" cols="120" rows="10" placeholder="Write category description" required></textarea>
                    </div>
                    <br><br>
                    <div class="mb-3 mb-0">
                        <label class="form-label">Active</label><br>
                        <label class="radio-inline me-3"><input type="radio" name="active" value="1" class="form-check-input">Yes</label>
                        <label class="radio-inline me-3"><input type="radio" name="active" value="0" class="form-check-input">No</label>
                   </div>
                </div>
                <input type="submit" name="submit" value="Add Category" class="btn btn-primary">
            </form>
        </div>
        </div>
        </div>
      </div>
    </div>
@endsection