@extends('admin.layout.master')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col">
                        <h1 class=" text-dark">News</h1>

                    </div>
                    <div  style="float:right "><a class="btn btn-dark" href="{{route('home')}}"><i class="fa fa-globe" aria-hidden="true"></i> View Site </a></div>

                </div>
            </div>


            <form action="{{route('admin.search')}}" method="get" class="card-header">
                @csrf
                <div class="row">
                    <div class="col">
                        <select class="form-control" name="category_id">
                            <option value="">Choose Category</option>
                            @foreach($category as $cat)
                                <option
                                    {{ request()->input('category_id') == $cat->id ? 'selected' : '' }} value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-control" name="author_id">
                            <option value="">Choose Author</option>
                            @foreach($authors as $author)
                                <option
                                    {{ request()->input('author_id') == $author->id ? 'selected' : '' }} value="{{$author->id}}">{{$author->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col">
                        <input class="form-control" value="{{ request()->input('title') }}" type="text" name="title"
                               placeholder="News:Title">
                    </div>


                    <div class="col-md-1">
                        <button type="reset" id="reset-btn" class="btn btn-primary">Reset</button>
                    </div>
                    <div class="col-md-1">
                        <button class=" btn btn-primary" type="submit">Search</button>
                    </div>
            </form>
        </div>
    </div>



    <section class="content">
        <div class="container-fluid">

            <div class="card">

                <div class="card-header">
                    <h3 class="card-title">News</h3>

                    <div class="primary" style="float: right; color: #f80000">
                        <strong> {{($newsCount)}} news found.</strong>  <a class="btn btn-warning" href="{{route('news')}}"><i class="fa fa-trash" aria-hidden="true"></i>News</a>

                    </div>
                </div>







                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Category</th>
                            <th>Author Name</th>
                            <th>News Title</th>
                            <th>View Count</th>
                            <th>Opt</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $new)
                            <tr>
                                <td>{{$new->category->name}}</td>
                                <td>{{$new->author->name}}</td>
                                <td>{!! $new->title !!}</td>
                                <td>{{$new->view_count}}</td>
                                <td>
                                    <a href="{{route('news.recover',$new->id)}}" class="btn btn-primary"><i
                                            class="fas fa-recycle"></i>Re</a>
                                    <a href="{{route('news.hard.delete',$new->id)}}" class="btn btn-danger"><i
                                            class="fas fa-trash"></i>Del</a>

                                </td>
                            </tr>
                        @endforeach


                        </tbody>

                    </table>
                    {{$news->links('pagination::bootstrap-4')}}
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
    </div>

    <aside class="control-sidebar control-sidebar-dark">
    </aside>

@endsection
