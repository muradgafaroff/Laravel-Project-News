@extends('main.layout')
@section('content')

<main id="main">
    <section>
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">About us</h1>
                </div>
            </div>

            <div class="row mb-5">

                <div class="d-md-flex post-entry-2 half">
                    <a href="#" class="me-4 thumbnail">
                        <img src="{{asset($about->image1)}}" alt="" class="img-fluid">
                    </a>
                    <div class="ps-md-5 mt-4 mt-md-0">

                        <h2 class="mb-4 display-4">{!! $about->title1  !!}</h2>
                                {!! $about->text1 !!}
                    </div>
                </div>

                <div class="d-md-flex post-entry-2 half mt-5">
                    <a href="#" class="me-4 thumbnail order-2">
                        <img src="{{asset($about->image2)}}" alt="" class="img-fluid">
                    </a>
                    <div class="pe-md-5 mt-4 mt-md-0">

                        <h2 class="mb-4 display-4">{!! $about->title2 !!}</h2>

                      {!! $about->text2 !!}
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="mb-5 bg-light py-5">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-between align-items-lg-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <h2 class="display-4 mb-4">{!! $about->title3 !!}</h2>
                    {!! $about->text3 !!}
                    <p><a href="#" class="more">View All Blog Posts</a></p>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-10">
                            <img src="{{asset($about->image3)}}" alt="" class="img-fluid mb-4">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <h2 class="display-4">Our Team</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sint sed, fugit distinctio ad eius itaque deserunt doloribus harum excepturi laudantium sit officiis et eaque blanditiis. Dolore natus excepturi recusandae.</p>
                        </div>
                    </div>
                </div>
                @foreach($authors as $author)
                <div class="col-lg-4 text-center mb-5">
                    <img src="{{asset($author->image)}}" alt="" class="img-fluid rounded-circle w-50 mb-4">
                    <h4>{{$author->name}}</h4>
                    <span class="d-block mb-3 text-uppercase">{{$author->about}}</span>
                    <p>{!! $author->description !!}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection
