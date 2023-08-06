@extends('Layout.category-layout')
@section('content')
<div class="container-fluid">
    <div class="content">
        <div class="row page-titles">
            <h2 class="card-title">Category lists</h2>
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
                    <a href="{{url('add-category')}}" class="btn btn-secondary">Add Category</a>
                </div>
            </div>
            <div class="card-body"> 
                <div class="table-responsive">
                    <table class="table header-border table-hover verticle-middle">
                        <thead class="thead-info">
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Discription</th>
                                <th scope="col">Picture</th>
                                <th scope="col">Active</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php 
                            $i = 1
                            @endphp
                            @foreach ($categorys as $category)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$category->CategoryName}}</td>
                                <td>{{$category->Description}}</td>
                                <td><img src="{{asset('asset/img/'.$category->Picture)}}" alt="" width="100" height="100px"></td>
                                <td>{{$category->Active}}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{('edit-category/'.$category->CategoryID )}}" class="btn btn-primary shadow btn-xs sharp me-1">Edit</a>
                                        <a href="{{('delete-category/'.$category->CategoryID )}}" class="btn btn-danger shadow btn-xs sharp">Delete</a>
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
    </div>
</div>
@endsection