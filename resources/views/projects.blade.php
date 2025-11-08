@extends('include.front_header')
@section('content')
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Projects</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-service-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row project-item-boxes align-items-center">
                    @if(!$projects->isEmpty())
                        @foreach($projects as $project)
                            <div class="col-md-6 project-item-box architecture bedroom">
                                <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="project-image">
                                        <div class="project-featured-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('assets/website/images/project-1.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="project-btn">
                                            <a href="project-single.html"><img src="{{ asset('assets/website/images/arrow-white.svg') }}" alt=""></a>
                                        </div>
                                    </div>     
                                    <div class="project-content">
                                        <h3></h3>
                                        <h2>{{ $project->name }}</h2>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection