@extends('admin.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Youtube Deatails</h1>

        <a href="{{route('admin.video.create')}}" class="btn btn-primary btn-lg" > Add </a>

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
                        <th>English Video Title</th>
                        <th>Arabic Video Title</th>
                        <th>Video </th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($videos as $video)
                    <tr>
                        <td>{{ $video->id }}</td>
                        <td>{{ $video->video_titleAR }}</td>
                        <td>{{ $video->video_titleEN }}</td>
                        <td>
                            <iframe  width="560" height="315" src="{{ asset('uploads/'. $video->video) }}" alt="" frameborder="0" allowfullscreen></iframe>

                        </td>

                        <td>
                            <a href="{{route('admin.video.edit' , $video->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                            <form class="d-inline" action="{{route('admin.video.destroy', $video->id)}}" method="POST">
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
