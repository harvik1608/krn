@extends('include.front_header')
@section('content')
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Blogs</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-blog">
    <div class="container">
        <div class="row">
            @if(!$blogs->isEmpty())
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <!-- Post Featured Image Start-->
                            <div class="post-featured-image">
                                <figure>
                                    <a href="{{ route('blog', ['slug' => $blog->slug]) }}" class="image-anime" data-cursor-text="View">
                                        <img src="{{ asset('uploads/blog/'.$blog->banner) }}" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="post-item-body">
                                <div class="post-item-content">
                                    <h3><a href="{{ route('blog', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a></h3>
                                </div>
                                <div class="post-item-btn">
                                    <a href="{{ route('blog', ['slug' => $blog->slug]) }}" class="post-btn">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection