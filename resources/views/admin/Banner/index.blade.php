@extends('admin.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">About Slider</h1>

        <a href="{{route('admin.banner.create')}}" class="btn btn-primary btn-lg" > Add </a>

    </div>

    <style>
        .table td, .table th {vertical-align: middle}
    </style>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                    <tr class="bg-dark text-white">
                        <th>ID</th>
                        <th>English Title</th>
                        <th>Arabic Title</th>
                        <th>English Body</th>
                        <th>Arabic Body</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($sliders as $slider)
                    <tr>
                        <td>{{ $slider->id }}</td>
                        <td>{{ $slider->Banner_title1EN }}</td>
                        <td>{{ $slider->Banner_title1AR }}</td>
                        <td>{{ $slider->Banner_title2EN }}</td>
                        <td>{{ $slider->Banner_title2AR }}</td>

                        <td><img width="100" src="{{ asset('uploads/'. $slider->image) }}" alt=""></td>
                        <td>
                            <a href="{{route('admin.banner.edit' , $slider->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                            <form class="d-inline" action="{{route('admin.banner.destroy', $slider->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('are you sure?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>


</div>
<!-- /.container-fluid -->
@stop
