@extends('admin.layout.master');
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">About</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                            <li class="breadcrumb-item active">About</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">About</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Title1</th>
                                <th>Image1</th>

                                <th>Title2</th>
                                <th>Image2</th>

                                <th>Title3</th>
                                <th>Image3</th>

                                <th>Opt</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>{!! $about->title1 !!}</td>
                                <td><img width="100" height="100" src="{{asset($about->image1)}}" alt=""></td>

                                <td>{!! $about->title2 !!}</td>
                                <td><img width="100" height="100" src="{{asset($about->image2)}}" alt=""></td>

                                <td>{!! $about->title3 !!}</td>
                                <td><img width="100" height="100" src="{{asset($about->image3)}}" alt=""></td>

                                <td>
                                    <a href="{{route('about.edit')}}" class="btn btn-primary"><i class="fas fa-edit"></i>Up</a>


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
