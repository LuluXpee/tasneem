@extends('admin.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Slider Deatails</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            @include('admin.includes.errors')
            <form action="{{ route('admin.banner.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>English Title</label>
                    <input type="text" class="form-control" placeholder="Title" name="Banner_title1EN">
                </div>

                <div class="form-group">
                    <label>Arabic Title</label>
                    <input type="text" class="form-control" placeholder="Title" name=" Banner_title1AR">
                </div>
                <div class="form-group">
                    <label>English Body</label>
                    <input type="text" class="form-control" placeholder="Title" name="Banner_title2EN">
                </div>

                <div class="form-group">
                    <label>Arabic Body</label>
                    <input type="text" class="form-control" placeholder="Title" name="Banner_title2AR">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image">
                </div>



                <button class="btn btn-success px-5 btn-lg">Save</button>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@stop
