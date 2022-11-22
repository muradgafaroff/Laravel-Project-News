@extends('main.layout')
@section('content')

    <main id="main">

        <section class="single-post-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 post-content" data-aos="fade-up">

                        <!-- ======= Single Post Content ======= -->
                        <div class="single-post">
                            <div class="post-meta"><span class="date"></span>{{$news->category->name}} <span
                                    class="mx-1">&bullet;</span>{{$news->date}}<span></span></div>
                            <h1 class="mb-5">{{$news->title}}</h1>


                            <figure class="my-4">
                                <img src="{{asset($news->image)}}" alt="" class="img-fluid">
                            </figure>
                            <p>{{$news->description}}</p>
                        </div>

                        <!-- ======= Comments ======= -->

                        <div class="comments">
                            <h5 class="comment-title py-4">{{ count($news->comments) }} Comments</h5>
                            @forelse($news->comments as $comment)
                                <div class="comment d-flex mb-4">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm rounded-circle">
                                            <img class="avatar-img" src="{{asset('assets/img/'.$comment->userphoto)}}"
                                                 alt=""
                                                 class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-2 ms-sm-3">
                                        <div class="comment-meta d-flex align-items-baseline">
                                            <h6 class="me-2">{{$comment->username}}</h6>
                                            <span class="text-muted">{{$comment->date}}</span>
                                        </div>
                                        <div class="comment-body">
                                            {{$comment->description}}
                                        </div>
                                    </div>
                                </div>
                            @empty
                                No comments
                            @endforelse
                        </div><!-- End Comments -->

                        <!-- ======= Comments Form ======= -->
                        <form action="{{route('single.post')}}" method="post">
                            @csrf
                            <div class="row justify-content-center mt-5">

                                <div class="col-lg-12">
                                    <h5 class="comment-title">Leave a Comment</h5>
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <label for="comment-name">Name</label>
                                            <input type="text" class="form-control" name="username"
                                                   placeholder="Enter your name">
                                        </div>
                                        <input type="hidden" class="form-control" name="id"
                                               value="{{$news->id}}">

                                        <div class="col-lg-6 mb-3">
                                            <label for="comment-email">Email</label>
                                            <input type="email" class="form-control" name="email"
                                                   placeholder="Enter your email">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="comment-message">Message</label>

                                            <textarea class="form-control" name="message"
                                                      placeholder="Enter your name" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <input type="submit" class="btn btn-primary" value="Post comment">
                                        </div>

                                    </div>
                                </div>
                            </div><!-- End Comments Form -->
                        </form>
                    </div>
                    <div class="col-md-3">
                        <!-- ======= Sidebar ======= -->
                        <div class="aside-block">


                            <div class="trending">
                                <h3>Popular</h3>
                                <ul class="trending-post">
                                    @foreach($trendNews as $new)
                                        <li>
                                            <a href="{{route('single',$new->id)}}">

                                                <div class="post-meta"><span
                                                        class="date">{{$new->category->name}}</span>
                                                    <span
                                                        class="mx-1">&bullet;</span> <span>{{$new->date}}</span>
                                                    <span> <i class="fa fa-eye"
                                                              aria-hidden="true"></i></span>{{$new->view_count}}</div>
                                                <h3>{{$new->title}}</h3>
                                                <span class="author">{{$new->author->name}}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>


                        <div class="aside-block">
                            <h3 class="aside-title">Categories</h3>
                            <ul class="aside-links list-unstyled">
                                @foreach($category as $cat)
                                    <li><a href="{{route('page',$cat->id)}}"><i
                                                class="bi bi-chevron-right"></i> {{$cat->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div><!-- End Categories -->


                    </div>

                </div>
            </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
