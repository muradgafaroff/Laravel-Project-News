@extends('main.layout')
@section('content')

    <main id="main">
        <section>
            <div class="container">
                <div class="row">
                    <form action="{{route('search')}}" method="get" >
                        @csrf
                        <div class="row">
                            <div class="col">
                            <select class="form-control" name="category_id">
                                <option value="">Choose Category</option>
                            @foreach($categories as $cat)
                                <option {{ request()->input('category_id') == $cat->id ? 'selected' : '' }} value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                            </div>
                            <div class="col">
                                <select class="form-control" name="author_id">
                                    <option value="">Choose Author</option>
                                    @foreach($authors as $author)
                                        <option {{ request()->input('author_id') == $author->id ? 'selected' : '' }} value="{{$author->id}}">{{$author->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col">
                                <input class="form-control" value="{{ request()->input('title') }}" type="text" name="title" placeholder="News:Title">
                            </div>

                            <div class="col">
                                <input class="form-control"  type="text" value="{{ request()->input('description') }}" name="description" placeholder="News:Desc">
                            </div>
                            <div class="col-md-1">
                                <button class=" btn btn-primary" type="reset">Reset</button>
                            </div>
                            <div class="col-md-1">
                                <button class=" btn btn-primary" type="submit">Search</button>
                            </div>
                    </form>








                        <div class="col-md-12" data-aos="fade-up">






                            <hr>
                            <div class="row">
                                <div class="col-md-15">


                                    <div class="row">
                                        @foreach($news as $new)

                                            <div class="col-lg-2">

                                                <div class="post-entry-1 border-bottom">
                                                    <a href="{{route('single',$new->id)}}"><img src="{{asset($new->image)}}" alt=""
                                                                                    class="img-fluid"></a>
                                                    <div class="post-meta"><span class="date">{{$new->category->name}}</span> <span
                                                            class="mx-1">&bullet;</span> <span>{{$new->date}}</span>
                                                        <span> <i class="fa fa-eye"
                                                                  aria-hidden="true"></i></span>{{$new->view_count}}</div>
                                                    <h2 class="mb-2"><a href="{{route('single',$new->id)}}">{{$new->title}}</a>
                                                    </h2>
                                                    <span class="author mb-3 d-block">{{$new->author->name}}</span>
                                                    <p class="mb-4 d-block">{{ getTextSubStr($new->description) }}</p>
                                                </div>

                                            </div>
                                        @endforeach
                                    </div>
                                </div>



                            </div>




        </section>
    </main><!-- End #main



@endsection

