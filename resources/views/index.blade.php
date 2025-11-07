@extends('include.front_header')
@section('content')
<div class="hero parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-10">
                <div class="hero-content">
                    <div class="section-title">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Welcome to <br>{{ APP_NAME }}</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Innovative Architectural Design Across England</p>
                    </div>
                    <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="{{ route('about') }}" class="btn-default">explore more</a>
                        <a href="{{ route('projects') }}" class="btn-default btn-highlighted">view projects</a>
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
                <!-- About Us Images Start -->
                <div class="about-us-images">
                    <!-- About Image 1 Start -->
                    <div class="about-img-1">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/website/images/about-img-1.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- About Image 1 End -->

                    <!-- About Image 2 Start -->
                    <div class="about-img-2">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/website/images/about-img-2.jpg') }}" alt="">
                        </figure>

                        <!-- Feedback Counter Start -->
                        <div class="experience-counter">
                            <h3><span class="counter">15</span>+</h3>
                            <p>Years of experience</p>
                        </div>
                        <!-- Feedback Counter End -->
                    </div>
                    <!-- About Image 2 End -->

                    <!-- Feedback Counter Start -->
                    <div class="feedback-counter">
                        <p><span class="counter">95</span>%</p>
                        <h3>positive feedback</h3>
                    </div>
                    <!-- Feedback Counter End -->
                </div>
                <!-- About Us Images End -->
            </div>

            <div class="col-lg-6">
                <!-- About Us Content Start -->
                <div class="about-us-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">about us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Our passion for design, your <span>vision realized</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">At <b>{{ APP_NAME }}</b>, we bring your vision to life through thoughtful, sustainable, and innovative architectural design. Whether you're planning a home extension, a new build, or a commercial development, our RIBA-chartered architects are here to guide you from concept to completion.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Us Content Body Start -->
                    <div class="about-us-content-body">
                        <!-- About Content Info Start -->
                        <div class="about-us-content-info">
                            <!-- About Us Content List Start -->
                            <div class="about-us-content-list wow fadeInUp" data-wow-delay="0.4s">
                                <ul>
                                    <li>creative expertise</li>
                                    <li>client-centered approach</li>
                                </ul>
                            </div>
                            <!-- About Us Content List End -->

                            <!-- About Us Content Button Start -->
                            <div class="about-us-content-btn wow fadeInUp" data-wow-delay="0.6s">
                                <a href="about.html" class="btn-default">read more</a>
                            </div>
                            <!-- About Us Content Button End -->
                        </div>
                        <!-- About Content Info End -->

                        <!-- About Content List Start -->
                        <div class="about-us-contact-list">
                            <!-- About Contact Item Start -->
                            <div class="about-contact-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="about-contact-content">
                                    <p>need any help?</p>
                                    <h3>{{ APP_HELPLINE_NO }}</h3>
                                </div>
                            </div>
                            <!-- About Contact Item End -->

                            <!-- About Contact Item Start -->
                            <div class="about-contact-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <figure class="image-anime">
                                        <img src="{{ asset('assets/website/images/author-1.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="about-contact-content">
                                    <h3>{{ APP_FOUNDER_NAME }}</h3>
                                    <p>founder</p>
                                </div>
                            </div>
                            <!-- About Contact Item End -->
                        </div>
                        <!-- About Content Info End -->
                    </div>
                    <!-- About Us Content Body End -->
                </div>
                <!-- About Us Content End -->
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
                        <h2 class="text-anime-style-2" data-cursor="-opaque">A behind the scenes look at <span>our agency</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">From concept to completion, discover how we bring your vision to life with innovation, collaboration, and expert craftsmanship.</p>
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
                                <img src="{{ asset('assets/website/images/why-choose-img-1.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Why Choose img 1 End -->

                        <!-- Why Choose img 2 Start -->
                        <div class="why-choose-img-2">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/website/images/why-choose-img-2.jpg') }}" alt="">
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
                                <img src="{{ asset('assets/website/images/why-choose-img-3.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Why Choose img 3 End -->

                        <!-- Why Choose img 4 Start -->
                        <div class="why-choose-img-4">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/website/images/why-choose-img-4.jpg') }}" alt="">
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
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Innovative design services for <span>every need</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content">
                    <p class="wow fadeInUp" data-wow-delay="0.2s">We offer a range of bespoke interior design services tailored to your unique needs. From concept development to final installation.</p>
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
                                <a href="service-single.html" data-cursor-text="View">
                                    <figure class="image-anime">
                                        <img src="{{ asset('assets/website/images/service-1.jpg') }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="service-btn">
                                <a href="service-single.html"><img src="{{ asset('assets/website/images/arrow-white.svg') }}" alt=""></a>
                            </div>
                            <div class="service-content">
                                <h3><a href="service-single.html">{{ $service->name }}</a></h3>
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
                                    <img src="{{ asset('assets/website/images/intro-video-bg.jpg') }}" alt="">
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
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Everything You <span>Need to Know</span></h2>
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
<div class="our-testimonials">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <!-- Our Testimonial Image Start -->
                <div class="our-testimonials-image">
                    <figure class="image-anime">
                        <img src="{{ asset('assets/website/images/testimonial-img.jpg') }}" alt="">
                    </figure>
                </div>
                <!-- Our Testimonial Image End -->
            </div>

            <div class="col-lg-6">
                <!-- Our Testimonial Content Start -->
                <div class="our-testimonial-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">client testimonials</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Trusted by thousand of <span>people & companies.</span></h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
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
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
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
                                <!-- Testimonial Slide End -->
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->

                    <!-- Testimonial Rating Counter Start -->
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
                    <!-- Testimonial Rating Counter End -->
                </div>
                <!-- Our Testimonial Content End -->
            </div>
        </div>
    </div>
</div>
<div class="our-blog">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">latest news</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Stay Updated with Our</span> Latest Insights</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content">
                    <p class="wow fadeInUp" data-wow-delay="0.2s">Your journey to inspired interiors begins here. Our blog offers a wealth of resources, including design tips, trend analyses.</p>
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
                                        <img src="{{ asset('assets/website/images/post-1.jpg') }}" alt="">
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