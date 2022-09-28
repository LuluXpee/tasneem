@extends('admin.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Contacts</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            @include('admin.includes.errors')
            <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" placeholder="Phone" name="Phone" value="{{$contact->Phone}}">
                </div>

                <div class="form-group">
                    <label>Telephone Number </label>
                    <input type="text" class="form-control" placeholder="Telephone" name="Telephone" value="{{$contact->Telephone}}">
                </div>
                <div class="form-group">
                    <label>Fax Number</label>
                    <input type="text" class="form-control" placeholder="Fax" name="Fax" value="{{$contact->Fax}}">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="Email" name="Email" value="{{$contact->Email}}">
                </div>

                <div class="form-group">
                    <label>Website</label>
                    <input type="text" class="form-control" placeholder="Website" name="Website" value="{{$contact->Website}}">
                </div>

                <div class="form-group">
                    <label>ARLocation</label>
                    <input type="text" class="form-control" placeholder="ARLocation" name="ARLocation" value="{{$contact->ARLocation}}">
                </div>

                <div class="form-group">
                    <label>ENLocation</label>
                    <input type="text" class="form-control" placeholder="ENLocation" name="ENLocation" value="{{$contact->ENLocation}}">
                </div>


                <button class="btn btn-success px-5 btn-lg">Update</button>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@stop
