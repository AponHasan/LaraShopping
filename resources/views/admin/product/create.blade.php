@extends('admin.includes.main_admin')
@section('title','Product Create')
@section('content')

<div class="container">
    <div class="row">
        @include('admin.includes.sidebar_admin')
        <div class="col-md-9">
            <div class="panel panel-primary" >
                <div class="panel-heading" style="background-color: #125ade ;margin-top: 10px;height: 50px;color: #fff">Create Products</div>
                <div class="panel-body" style="margin-top: 10px;">
                  <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label for="title">Title :</label>
                      <input type="text" name="title" class="form-control" placeholder="Title..">
                    </div>
                    <div class="form-group">
                      <label for="Description">Description :</label>
                      <input type="text" name="description" class="form-control" placeholder="Description..">
                    </div>
                    <div class="form-group">
                      <label for="Price">Price :</label>
                      <input type="text" name="price" class="form-control" placeholder="Price..">
                    </div>
                    <div class="form-group">
                      <label for="Image">Image :</label>
                      <input type="file" name="image" class="form-control" placeholder="Image..">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection