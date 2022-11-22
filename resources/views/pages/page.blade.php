@extends('main.layout')
@section('content')

    <section class="category-section">
        <div class="container" data-aos="fade-up">

            <div class="section-header d-flex justify-content-between align-items-center mb-5">
                <h2>{{$category->name}}</h2>
                <div><a href="category.html" class="more">See All {{$category->name}}</a></div>
            </div>

            <div class="row">
                <div class="col-md-9">


                    <div class="row">
                        @foreach($category->news()->orderBy('id','DESC')->get() as $new)

                            <div class="col-lg-4">

                                <div class="post-entry-1 border-bottom">
                                    <a href="{{route('single',$new->id)}}"><img
                                            src="{{asset($new->image)}}" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">{{$category->name}}</span> <span
                                            class="mx-1">&bullet;</span> <span>{{$new->date}}</span>
                                        <span> <i class="fa fa-eye"
                                                  aria-hidden="true"></i></span>{{$new->view_count}}</div>
                                    <h2 class="mb-2"><a href="{{route('single',$new->id)}}">{{$new->title}}</a></h2>
                                    <span class="author mb-3 d-block">{{$new->author->name}}</span>
                                    <p class="mb-4 d-block">{{ getTextSubStr($new->description) }}</p>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-3">
                    @foreach($category->news()->orderBy('view_count','DESC')->get() as $new)

                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">{{$category->name}}</span> <span class="mx-1">&bullet;</span>
                                <span>{{$new->date}}</span>
                                <span> <i class="fa fa-eye" aria-hidden="true"></i></span>{{$new->view_count}}
                            </div>
                            <h2 class="mb-2"><a href="{{route('single',$new->id)}}">{{$new->title}}</a></h2>
                            <span class="author mb-3 d-block">{{$new->author->name}}</span>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </section><!-- End Cu

@endsection
