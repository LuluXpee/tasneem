@extends('admin.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Slider</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            @include('admin.includes.errors')
            <form action="{{ route('admin.banner.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label>English Title</label>
                    <input type="text" class="form-control" placeholder="Title" name=" Banner_title1EN" value="{{$slider->Banner_title1EN}}">
                </div>

                <div class="form-group">
                    <label>Arabic Title</label>
                    <input type="text" class="form-control" placeholder="Title" name=" Banner_title1AR" value="{{$slider->Banner_title1AR}}">
                </div>
                <div class="form-group">
                    <label>English Body</label>
                    <input type="text" class="form-control" placeholder="Title" name="Banner_title2EN" value="{{$slider->Banner_title2EN}}">
                </div>

                <div class="form-group">
                    <label>Arabic Body</label>
                    <input type="text" class="form-control" placeholder="Title" name="Banner_title2AR" value="{{$slider->Banner_title2AR}}">
                </div>


                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image">
                    <img width="150" src="{{ asset('uploads/'. $slider->image) }}" alt="">
                </div>



                <button class="btn btn-success px-5 btn-lg">Update</button>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@stop
