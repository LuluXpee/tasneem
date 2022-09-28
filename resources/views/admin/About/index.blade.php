@extends('admin.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">About Deatails</h1>

        <a href="{{route('admin.about.create')}}" class="btn btn-primary btn-lg" > Add </a>

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

                    @foreach ($deatils as $deatil)
                    <tr>
                        <td>{{ $deatil->id }}</td>
                        <td>{{ $deatil->About_titleEN }}</td>
                        <td>{{ $deatil->About_titleAR }}</td>
                        <td>{{ $deatil->About_bodyEN }}</td>
                        <td>{{ $deatil->About_bodyAR }}</td>

                        <td><img width="100" src="{{ asset('uploads/'. $deatil->image) }}" alt=""></td>
                        <td>
                            <a href="{{route('admin.about.edit' , $deatil->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                            <form class="d-inline" action="{{route('admin.about.destroy', $deatil->id)}}" method="POST">
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
