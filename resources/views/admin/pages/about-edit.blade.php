@extends('admin.layout.master')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">About Edit</h1>
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
                <form action="{{route('about.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Text1</h3>
                                </div>
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Text1</label></br>
                                        <textarea class="textarea" name="text1" id="" cols="70" rows="10">{!! $about->text1 !!}</textarea>
                                    </div>


                                </div>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Image1</h3>
                                </div>
                                <br>
                                <img  id="coverImageShow" width="100%" height="220px" src="{{asset($about->image1)}}" >
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="file1" id="coverImage" type="file" class="custom-file-input"
                                                       id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Title1</label></br>
                        <textarea class="textarea" name="title1" id="" cols="70" rows="5">{!! $about->title1 !!}</textarea>

                    </div>

                    <div class="row">
                        <div class="col-md-9">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Text2</h3>
                                </div>
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Text2</label></br>
                                        <textarea class="textarea" name="text2" id="" cols="70" rows="10">{!!$about->text2!!} </textarea>
                                    </div>


                                </div>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Image2</h3>
                                </div>
                                <br>
                                <img  id="coverImageShow" width="100%" height="220px" src="{{asset($about->image2)}}" >
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="file2" id="coverImage" type="file" class="custom-file-input"
                                                       id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title2</label></br>
                        <textarea class="textarea" name="title2" id="" cols="70" rows="5">{!! $about->title2 !!}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Text3</h3>
                                </div>
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Text3</label></br>
                                        <textarea class="textarea" name="text3" id="" cols="70" rows="10">{!! $about->text3 !!} </textarea>
                                    </div>


                                </div>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Image3</h3>
                                </div>
                                <br>
                                <img  id="coverImageShow" width="100%" height="220px" src="{{asset($about->image3)}}" >
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="file3" id="coverImage" type="file" class="custom-file-input"
                                                       id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title3</label></br>
                        <textarea class="textarea" name="title3" id="" cols="70" rows="5">{!! $about->title3 !!} </textarea>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <aside class="control-sidebar control-sidebar-dark">
    </aside>

@endsection
