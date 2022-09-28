@extends('admin.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Product</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            @include('admin.includes.errors')
            <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label>English Title</label>
                    <input type="text" class="form-control" placeholder="Title" name="Entitle" value="{{$product->Entitle}}">
                </div>

                <div class="form-group">
                    <label>Arabic Title</label>
                    <input type="text" class="form-control" placeholder="Title" name="Artitle" value="{{$product->Artitle}}">
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image">
                    <img width="150" src="{{ asset('uploads/'. $product->image) }}" alt="">
                </div>



                <button class="btn btn-success px-5 btn-lg">Update</button>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@stop
