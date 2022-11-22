
@extends('admin.layout.master');
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Contact Edit</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                            <li class="breadcrumb-item active">Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <form method="post" action="{{route('contact.update')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Contact Edit</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <input  name="address" type="text" class="form-control" value="{{$contacts->address}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Telephone</label>
                                        <input  name="phone" type="text" class="form-control" value="{{$contacts->phone}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input  name="email" type="email" class="form-control" value="{{$contacts->email}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Facebook</label>
                                        <input  name="fb" type="text" class="form-control" value="{{$contacts->facebook}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Instagram</label>
                                        <input  name="instagram" type="text" class="form-control" value="{{$contacts->instagram}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Twitter</label>
                                        <input  name="twitter" type="text" class="form-control" value="{{$contacts->twitter}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Linkedin</label>
                                        <input  name="linkedin" type="text" class="form-control" value="{{$contacts->linkedin}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Skype</label>
                                        <input  name="skype" type="text" class="form-control" value="{{$contacts->skype}}">
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </section>
    </div>

    <aside class="control-sidebar control-sidebar-dark">
    </aside>
@endsection
