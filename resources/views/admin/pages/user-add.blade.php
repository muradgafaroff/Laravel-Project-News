@extends('admin.layout.master')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">User Add</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                            <li class="breadcrumb-item active">User</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                @include('admin.session-message')
                <form method="post" action="{{route('user.save')}}">
                    @csrf

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">User</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input  name="name" required type="text" class="form-control" placeholder=" Adı Yazınız">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input  name="email" type="email" class="form-control" placeholder=" Email Yazınız">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Password</label>
                                            <input  name="password"  type="password" class="form-control" placeholder="Şifre Yazınız">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Confirm Password</label>
                                            <input name="password_confirmation"  type="password" class="form-control" placeholder="Şifre Tekrar Yazınız">
                                        </div>

                                        <label>Rol</label>
                                        <select required class="form-control select2" style="width: 100%;">
                                            <option>Admin</option>
                                            <option>Editor</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
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
