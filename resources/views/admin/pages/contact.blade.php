@extends('admin.layout.master');
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Contact</h1>
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
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Contact</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Address</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Facebook</th>
                                <th>Instagram</th>
                                <th>Twitter</th>
                                <th>Linkedin</th>
                                <th>Skype</th>
                                <th>Opt</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>{{$contacts->address}}</td>
                                <td>{{$contacts->phone}}</td>
                                <td>{{$contacts->email}}</td>
                                <td>{{$contacts->facebook}}</td>
                                <td>{{$contacts->instagram}}</td>
                                <td>{{$contacts->twitter}}</td>
                                <td>{{$contacts->linkedin}}</td>
                                <td>{{$contacts->skype}}</td>
                                <td>
                                    <a href="{{route('contact.edit')}}" class="btn btn-primary"><i class="fas fa-edit"></i>Up</a>


                                </td>
                            </tr>

                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </section>
    </div>

    <aside class="control-sidebar control-sidebar-dark">
    </aside>


@endsection
