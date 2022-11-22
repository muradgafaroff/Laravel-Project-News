@extends('admin.layout.master')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">News Edit</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                            <li class="breadcrumb-item active">News</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <form method="post" enctype="multipart/form-data" action="{{route('news.update',$news->id)}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">News</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">News Title</label></br>
                                        <textarea class="textarea" name="title" id="" cols="30" rows="10">{!! $news->title !!}</textarea>>
                                    </div>
                                    <div class="form-group">

                                        <label>Category</label>
                                        <select class="form-control select2" style="width: 100%;" name="category_id">

                                            @foreach($category as $cat)
                                                <option  {{old('name',$news->category_id)==$cat->id ? 'selected':''}} value="{{$cat->id}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Author</label>
                                        <select class="form-control select2" style="width: 100%;" name="author_id">
                                            @foreach($author as $aut)

                                                <option
                                                    {{old('name',$news->author_id)==$aut->id ? 'selected':''}}  value="{{$aut->id}}">{{$aut->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label></br>
                                        <textarea class="textarea" name="description" id="" cols="30"
                                                  rows="10">{!! $news->description !!}</textarea>
                                    </div>


                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">News Image</h3>
                                </div>
                                <br>
                                <img id="coverImageShow" width="100%" height="255px"
                                     src="{{asset($news->image)}}">
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="file" id="coverImage" type="file"
                                                       class="custom-file-input"
                                                       id="customFile" value="{{$news->post_image}}">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
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
