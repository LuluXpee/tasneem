@extends('admin.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">About Deatails</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            @include('admin.includes.errors')
            <form action="{{ route('admin.video.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>English Video Title</label>
                    <input type="text" class="form-control" placeholder="Title" name="video_titleEN">
                </div>

                <div class="form-group">
                    <label>Arabic Title</label>
                    <input type="text" class="form-control" placeholder="Title" name=" video_titleAR">
                </div>
                <div class="form-group">
                    <label> Video</label>
                    <input type="file" class="form-control" name="video">
                </div>






                <button class="btn btn-success px-5 btn-lg">Save</button>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@stop
