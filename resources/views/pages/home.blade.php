@extends('main.layout')
@section('content')

    <main id="main">

        <!-- ======= Hero Slider Section ======= -->
        <section id="hero-slider" class="hero-slider">
            <div class="container-md" data-aos="fade-in">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper sliderFeaturedPosts">
                            <div class="swiper-wrapper">
                                @foreach($slider as $s)
                                    <div class="swiper-slide">
                                        <a href="{{$s->url}}" class="img-bg d-flex align-items-end"
                                           style="background-image: url({{asset($s->image)}});">
                                            <div class="img-bg-inner">
                                                <h2>{{$s->title}}</h2>
                                                <p>{!! getTextSubStr($s->description) !!}  </p>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                            <div class="custom-swiper-button-next">
                                <span class="bi-chevron-right"></span>
                            </div>
                            <div class="custom-swiper-button-prev">
                                <span class="bi-chevron-left"></span>
                            </div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Hero Slider Section -->


        <section class="category-section">
            <div class="container" data-aos="fade-up">


                <div class="row">
                    <div class="col-md-9">


                        <div class="row">
                            @foreach($news as $new)

                                <div class="col-lg-4">

                                    <div class="post-entry-1 border-bottom">
                                        <a href="{{route('single',$new->id)}}"><img src="{{asset($new->image)}}"
                                                                                    alt=""
                                                                                    class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">{{$new->category->name}}</span> <span
                                                class="mx-1">&bullet;</span> <span>{{$new->date}}</span>
                                            <span> <i class="fa fa-eye"
                                                      aria-hidden="true"></i></span>{{$new->view_count}}
                                        </div>
                                        <h2 class="mb-2"><a href="{{route('single',$new->id)}}">{!! $new->title !!}</a></h2>
                                        <span class="author mb-3 d-block">{{$new->author->name}}</span>
                                        <p class="mb-4 d-block">{!! getTextSubStr($new->description) !!} </p>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-3">

                        <div class="trending">
                            <h3>Trending</h3>
                            <ul class="trending-post">
                                @foreach($trendNews as $new)
                                    <li>
                                        <a href="{{route('single',$new->id)}}">

                                            <div class="post-meta"><span class="date">{{$new->category->name}}</span>
                                                <span
                                                    class="mx-1">&bullet;</span> <span>{{$new->date}}</span>
                                                <span> <i class="fa fa-eye"
                                                          aria-hidden="true"></i></span>{{$new->view_count}}</div>
                                            <h3>{!! $new->title !!}</h3>
                                            <span class="author">{{$new->author->name}}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div> <!-- End Trending Section -->
                </div>
            </div>

        </section> <!-- End Post Grid Section -->
        @foreach($category as $cat)
            <!-- ======= Culture Category Section ======= -->

            <section class="category-section">
                <div class="container" data-aos="fade-up">

                    <div class="section-header d-flex justify-content-between align-items-center mb-5">
                        <h2>{{$cat->name}}</h2>
                        <div><a href="" class="more">See All {{$cat->name}}</a></div>
                    </div>

                    <div class="row">
                        <div class="col-md-9">


                            <div class="row">
                                @foreach($cat->news()->orderBy('id','DESC')->get() as $new)

                                    <div class="col-lg-4">

                                        <div class="post-entry-1 border-bottom">
                                            <a href="{{route('single',$new->id)}}"><img src="{{asset($new->image)}}" alt=""
                                                                            class="img-fluid"></a>
                                            <div class="post-meta"><span class="date">{{$cat->name}}</span> <span
                                                    class="mx-1">&bullet;</span> <span>{{$new->date}}</span>
                                                <span> <i class="fa fa-eye"
                                                          aria-hidden="true"></i></span>{{$new->view_count}}</div>
                                            <h2 class="mb-2"><a href="{{route('single',$new->id)}}">{!! $new->title !!}</a>
                                            </h2>
                                            <span class="author mb-3 d-block">{{$new->author->name}}</span>
                                            <p class="mb-4 d-block">{!!getTextSubStr($new->description) !!} </p>
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-md-3">
                            @foreach($cat->news()->orderBy('view_count','DESC')->get() as $new)

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">{{$cat->name}}</span> <span class="mx-1">&bullet;</span>
                                        <span>{{$new->date}}</span>
                                        <span> <i class="fa fa-eye" aria-hidden="true"></i></span>{{$new->view_count}}
                                    </div>
                                    <h2 class="mb-2"><a href="{{route('single',$new->id)}}">{!! $new->title !!}</a></h2>
                                    <span class="author mb-3 d-block">{{$new->author->name}}</span>
                                </div>

                            @endforeach

                        </div>
                        {{$category->links('pagination::bootstrap-4')}}
                    </div>
                </div>
            </section><!-- End Culture Category Section -->
        @endforeach


    </main><!-- End #main -->

@endsection
