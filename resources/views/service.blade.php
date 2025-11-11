@extends('include.front_header')
@section('content')
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">{{ $service->name }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-service-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-single-content">
                    <div class="service-feature-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('uploads/service/'.$service->avatar) }}" alt="">
                        </figure>
                    </div>
                    <div class="service-entry">
                        <p class="wow fadeInUp"><?php echo $service->description; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-sidebar">
                    <div class="service-catagery-list wow fadeInUp">
                        <h3>Other Services</h3>
                        <ul>
                            @if(!$services->isEmpty())
                                @foreach($services as $row)
                                    @if($row->slug != $service->slug)
                                        <li><a href="{{ route('service', ['slug' => $row->slug]) }}">{{ $row->name }}</a></li>
                                    @endif
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection