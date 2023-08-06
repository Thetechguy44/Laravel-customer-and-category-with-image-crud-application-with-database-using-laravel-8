@extends('Layout.category-layout')
@section('content')
<div class="container-fluid">
      <div class="content">
        <div class="row page-titles">
          <h4 class="card-title">Edit Category</h4>
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
                <a href="{{url('show')}}" class="btn btn-secondary">Back</a>
            </div>
        </div>
        <div class="card-body"> 
          <div class="basic-form">
            <form action="{{url('update-category')}}" method="post" enctype="multipart/form-data">
              @csrf 
                <div class="row">
                  <input type="hidden" name="CategoryID" value="{{$categorys->CategoryID}}">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Category</label>
                        <input type="text" name="category" class="form-control" required placeholder="Category Name" value="{{$categorys->CategoryName}}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Picture</label>
                        <input type="file" name="picture" class="form-control" required>
                        <img src="{{asset('asset/img/'.$categorys->Picture)}}" alt="" width="100" height="100px">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Description</label><br>
                        <textarea class="form-control" name="description" id="" cols="120" rows="10" required>{{$categorys->Description}}</textarea>
                    </div>
                    <br><br>
                    <div class="mb-3 mb-0">
                        <label class="form-label">Active</label><br>
                        <label class="radio-inline me-3"><input type="radio" name="active" value="1" class="form-check-input"> Yes</label>
                        <label class="radio-inline me-3"><input type="radio" name="active" value="0" class="form-check-input">No</label>
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
