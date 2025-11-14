@extends('include.front_header')
@section('content')
<div class="hero parallaxie" style="background-image: url({{ asset('uploads/'.BANNER)  }});">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-10">
                <div class="hero-content">
                    <div class="section-title">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Welcome to <br>{{ APP_NAME }}</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Innovative Architectural Design Across England</p>
                    </div>
                    <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="{{ route('projects') }}" class="btn-default">view projects</a>
                        <!-- <a href="{{ route('projects') }}" class="btn-default btn-highlighted">view projects</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-us-images">
                    <div class="about-img-1">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('uploads/'.ABOUT_IMAGE_1) }}" alt="">
                        </figure>
                    </div>
                    <div class="about-img-2">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('uploads/'.ABOUT_IMAGE_2) }}" alt="">
                        </figure>
                        <div class="experience-counter">
                            <h3><span class="counter">{{ YEAR_OF_EXPERIENCE }}</span>+</h3>
                            <p>Years of experience</p>
                        </div>
                    </div>
                    <?php if(POSITIVE_FEEDBACK > 0) { ?>
                        <div class="feedback-counter">
                            <p><span class="counter">{{ POSITIVE_FEEDBACK }}</span>%</p>
                            <h3>positive feedback</h3>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-us-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">about us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>{{ ABOUT_US_TITLE }}</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">{{ ABOUT_US }}</p>
                    </div>
                    <div class="about-us-content-body">
                        <div class="about-us-content-info">
                            <div class="about-us-content-list wow fadeInUp" data-wow-delay="0.4s">
                                <ul>
                                    @php 
                                        $points = explode(",",ABOUT_US_POINT);
                                    @endphp
                                    @if(!empty($points))
                                        @foreach($points as $point)
                                            <li>{{ ucwords(strtolower($point)) }}</li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            <!-- <div class="about-us-content-btn wow fadeInUp" data-wow-delay="0.6s">
                                <a href="{{ route('about') }}" class="btn-default">read more</a>
                            </div> -->
                        </div>
                        <div class="about-us-contact-list">
                            <div class="about-contact-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="about-contact-content">
                                    <p>need any help?</p>
                                    <h3><a href="tel: {{ APP_HELPLINE_NO }}">{{ APP_HELPLINE_NO }}</a></h3>
                                </div>
                            </div>
                            <div class="about-contact-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <figure class="image-anime">
                                        <img src="{{ asset('assets/website/images/author-1.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="about-contact-content">
                                    <h3>need any help?</h3>
                                    <p><a href="mail: {{ APP_EMAIL }}">{{ APP_EMAIL }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="why-choose-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="why-choose-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">why choose us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>{{ WHY_CHOOSE_US_TITLE }}</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">{{ WHY_CHOOSE_US }}</p>
                    </div>
                    <div class="why-choose-item-list">
                        @if(!empty($reasons->toArray()))
                            @php
                                $no = 0; 
                            @endphp
                            @foreach($reasons as $reason)
                                @php 
                                    $no = $no+2;
                                @endphp
                                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.{{ $no }}s">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/website/images/icon-why-choose-1.svg') }}" alt="">
                                    </div>
                                    <div class="why-choose-item-content">
                                        <h3>{{ $reason->name }}</h3>
                                        <!-- <p>We provide personalized interior design services that reflect your unique vision and lifestyle.</p> -->
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <!-- Why Choose Item List End -->
                </div>
                <!-- Why Choose Content End -->
            </div>

            <div class="col-lg-7">
                <!-- Why Choose Images Images Start -->
                <div class="why-choose-images">
                    <!-- Why Choose Box 1 Start -->
                    <div class="why-choose-img-box-1">
                        <!-- Why Choose img 1 Start -->
                        <div class="why-choose-img-1">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('uploads/'.WHY_CHOOSE_1) }}" alt="">
                            </figure>
                        </div>
                        <!-- Why Choose img 1 End -->

                        <!-- Why Choose img 2 Start -->
                        <div class="why-choose-img-2">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('uploads/'.WHY_CHOOSE_2) }}" alt="">
                            </figure>
                        </div>
                        <!-- Why Choose img 2 End -->
                    </div>
                    <!-- Why Choose Box 1 End -->

                    <!-- Why Choose Box 2 Start -->
                    <div class="why-choose-img-box-2">
                        <!-- Why Choose img 3 Start -->
                        <div class="why-choose-img-3">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('uploads/'.WHY_CHOOSE_3) }}" alt="">
                            </figure>
                        </div>
                        <!-- Why Choose img 3 End -->

                        <!-- Why Choose img 4 Start -->
                        <div class="why-choose-img-4">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('uploads/'.WHY_CHOOSE_4) }}" alt="">
                            </figure>
                        </div>
                        <!-- Why Choose img 4 End -->
                    </div>
                    <!-- Why Choose Box 2 End -->
                </div>
                <!-- Why Choose Images Images End -->
            </div>
        </div>
    </div>
</div>
<div class="our-services">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">our services</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span>{{ SERVICE_TITLE }}</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content">
                    <p class="wow fadeInUp" data-wow-delay="0.2s">{{ SERVICE }}</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>

        <div class="row">
            @if(!empty($services->toArray()))
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp">
                            <div class="service-image">
                                <a href="{{ route('service', ['slug' => $service->slug]) }}" data-cursor-text="View">
                                    <figure class="image-anime">
                                        <img src="{{ asset('uploads/service/'.$service->avatar) }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="service-btn">
                                <a href="{{ route('service', ['slug' => $service->slug]) }}"><img src="{{ asset('assets/website/images/arrow-white.svg') }}" alt=""></a>
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
@if(APP_VIDEO != "")
    <div class="intro-video">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Intro Video Image Start -->
                    <div class="intro-video-box">
                        <!-- Intro Image Start -->
                        <div class="intro-video-image">
                            <a href="{{ APP_VIDEO }}" class="popup-video" data-cursor-text="Play">
                                <figure class="image-anime">
                                    <img src="{{ asset('uploads/'.VIDEO) }}" alt="">
                                </figure>
                            </a>                            
                        </div>
                        <!-- Intro Image End -->

                        <!-- Video Play Button Start -->
                        <div class="video-play-button">
                            <a href="{{ APP_VIDEO }}" class="popup-video" data-cursor-text="Play">play</a>
                        </div>
                        <!-- Video Play Button End -->
                    </div>
                    <!-- Intro Video Btn End -->
                </div>
            </div>
        </div>
    </div>
@endif
<div class="page-faqs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3 class="wow fadeInUp">FAQ</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Need to Know</span></h2>
                </div>
                <div class="page-faqs-catagery">
                    <div class="our-faq-section page-faq-accordion" id="general_information">
                        <div class="faq-accordion" id="accordion">
                            @if(!empty($faqs->toArray()))
                                @php
                                    $no = 0; 
                                @endphp
                                @foreach($faqs as $faq)
                                    @php 
                                        $no++;
                                    @endphp
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.{{ $no*2 }}s">
                                        <h2 class="accordion-header" id="heading{{ $no }}">
                                            <button class="accordion-button {{ $no > 1 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $no }}" aria-expanded="true" aria-controls="collapse{{ $no }}">
                                                <span>{{ $no }}.</span> {{ $faq->question }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $no }}" class="accordion-collapse collapse {{ $no == 1 ? 'show' : '' }}" aria-labelledby="heading{{ $no }}" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p><?php echo $faq->answer; ?></p>
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
    </div>
</div>
<!-- <div class="our-testimonials">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="our-testimonials-image">
                    <figure class="image-anime">
                        <img src="{{ asset('uploads/'.TESTIMONIAL) }}" alt="">
                    </figure>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="our-testimonial-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">client testimonials</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Trusted by thousand of <span>people & companies.</span></h2>
                    </div>
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <div class="swiper-slide">
                                    <div class="testimonial-item">  
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>                                        
                                        <div class="testimonial-body">
                                            <div class="testimonial-content">
                                                <p>I couldn't be happier with the transformation of my home! From our very first consultation, the team at took the time to understand my vision and preferences.</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('assets/website/images/author-1.jpg') }}" alt="">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>{{ APP_FOUNDER_NAME }}</h3>
                                                <p>founder</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">  
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>                                        
                                        <div class="testimonial-content">
                                            <p>I couldn't be happier with the transformation of my home! From our very first consultation, the team at took the time to understand my vision and preferences.</p>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('assets/website/images/author-1.jpg') }}" alt="">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>{{ APP_FOUNDER_NAME }}</h3>
                                                <p>founder</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-rating-counter">
                        <div class="rating-counter">
                            <h2><span class="counter">4.82</span></h2>
                        </div>
                        <div class="testimonial-rating-content">
                            <div class="testimonial-client-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p>2,488 reviews</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="our-blog">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">latest news</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span>{{ INSIGHT_TITLE }}</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content">
                    <p class="wow fadeInUp" data-wow-delay="0.2s">{{ INSIGHT }}</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>

        <div class="row">
            @if(!empty($blogs->toArray()))
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <!-- Post Featured Image Start-->
                            <div class="post-featured-image">
                                <figure>
                                    <a href="{{ url('blog/'.$blog->slug) }}" class="image-anime" data-cursor-text="View">
                                        <img src="{{ asset('uploads/blog/'.$blog->banner) }}" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="post-item-body">
                                <div class="post-item-content">
                                    <h3><a href="{{ url('blog/'.$blog->slug) }}">{{ $blog->title }}</a></h3>
                                </div>
                                <div class="post-item-btn">
                                    <a href="{{ url('blog/'.$blog->slug) }}" class="post-btn">read more</a>
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