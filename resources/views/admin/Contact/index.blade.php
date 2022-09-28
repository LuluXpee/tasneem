@extends('admin.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Contacts Deatails</h1>

        <a href="{{route('admin.contact.create')}}" class="btn btn-primary btn-lg" > Add </a>

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


                        <th>Phone</th>
                        <th>Telephone</th>
                        <th>Fax</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>ARLocation</th>
                        <th>ENLocation</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->Phone }}</td>
                        <td>{{ $contact->Telephone }}</td>
                        <td>{{ $contact->Fax }}</td>
                        <td>{{ $contact->Email }}</td>
                        <td>{{ $contact->Website }}</td>
                        <td>{{ $contact->ARLocation }}</td>
                        <td>{{ $contact->ENLocation }}</td>

                        <td>
                            <a href="{{route('admin.contact.edit' , $contact->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                            <form class="d-inline" action="{{route('admin.contact.destroy', $contact->id)}}" method="POST">
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
