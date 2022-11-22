@extends('admin.layout.master')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">News Category</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Categories</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Status</th>
                                <th>OPT</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $cat)
                            <tr>
                                <td>{{$cat->name}}</td>
                                <td>{{$cat->is_home}}</td>
                                <td>
                                    <a href="{{route('category.edit',$cat->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i>Up</a>
                                    <a href="{{route('category.delete',$cat->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Del</a>
                                </td>
                            </tr>
                            @endforeach
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
