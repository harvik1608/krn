@extends('include.front_header')
@section('content')
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Services</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-services">
    <div class="container">
        <div class="row">
           @if(!$services->isEmpty())
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <!-- Service Item Start -->
                        <div class="service-item wow fadeInUp">
                            <!-- Service Image Start -->
                            <div class="service-image">
                                <a href="{{ route('service', ['slug' => $service->slug]) }}" data-cursor-text="View">
                                    <figure class="image-anime">
                                        <img src="{{ asset('uploads/service/'.$service->avatar) }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="service-btn">
                                <a href="{{ route('service', ['slug' => $service->slug]) }}">
                                    <img src="{{ asset('assets/website/images/arrow-white.svg') }}" alt="">
                                </a>
                            </div>
                            <div class="service-content">
                                <h3><a href="{{ route('service', ['slug' => $service->slug]) }}">{{ $service->name }}</a></h3>
                                <p>{{ $service->short_description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection