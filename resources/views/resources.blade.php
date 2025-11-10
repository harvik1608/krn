@extends('include.front_header')
@section('content')
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Resources</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-service-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-sidebar">
                    <div class="service-catagery-list wow fadeInUp">
                        <h3>Free Downloads</h3>
                        <ul>
                            @if(!$downloads->isEmpty())
                                @foreach($downloads as $download)
                                    <li><a href="{{ asset('uploads/download/'.$download->file) }}" download>{{ $download->name }}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="service-sidebar">
                    <div class="service-catagery-list wow fadeInUp">
                        <h3>Planning Tools</h3>
                        <ul>
                            @if(!$tools->isEmpty())
                                @foreach($tools as $tool)
                                    <li><a href="{{ $tool->link }}" target="_blank">{{ $tool->name }}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project-single-content">
                    <div class="project-gallery gallery-items">
                        <h2 class="text-anime-style-2">Blog & Insights</h2>

                        <div class="project-gallery-images">
                            @if(!$blogs->isEmpty())
                                @foreach($blogs as $blog)
                                    <div class="project-gallery-img wow fadeInUp" data-cursor-text="View">
                                        <a href="{{ asset('assets/website/images/gallery-7.jpg') }}">
                                            <figure class="image-anime reveal">
                                                <img src="{{ asset('assets/website/images/gallery-7.jpg') }}" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection