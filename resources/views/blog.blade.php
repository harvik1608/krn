@extends('include.front_header')
@section('content')
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">{{ $blog->title }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-single-post">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="post-image">
                    <figure class="image-anime reveal">
                        <img src="{{ asset('assets/website/images/post-1.jpg') }}" alt="">
                    </figure>
                </div>
                <div class="post-content">
                    <div class="post-entry">
                        <p class="wow fadeInUp"><?php echo $blog->description; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection