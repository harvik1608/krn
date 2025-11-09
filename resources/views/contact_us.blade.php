@extends('include.front_header')
@section('content')
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- Contact Us Image Start -->
                <div class="contact-us-image">
                    <figure class="image-anime reveal">
                        <img src="{{ asset('uploads/'.CONTACT_US_IMAGE) }}" alt="">
                    </figure>
                </div>
                <!-- Contact Us Image End -->
            </div>
            
            <div class="col-lg-6">
                <!-- Contact Us Form Start -->
                <div class="contact-us-form">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">contact form</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">We would love to hear <span>from you</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Your email address will not be published. Required fields are marked *</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Contact Form Start -->
                    <div class="contact-form">
                        <!-- Contact Form Start -->
                        <form id="contactForm" action="{{ route('submit.contact-us') }}" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.4s">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name*" />
                                    <div class="help-block with-errors name-error"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name ="email" class="form-control" id="email" placeholder="Your Email*" />
                                    <div class="help-block with-errors email-error"></div>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone*" />
                                    <div class="help-block with-errors phone-error"></div>
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <textarea name="message" class="form-control" id="message" rows="4" placeholder="Your Message*"></textarea>
                                    <div class="help-block with-errors message-error"></div>
                                </div>
                                <div id="msgSubmit" class="h3 hidden"></div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn-default">submit</button>
                                </div>
                            </div>
                        </form>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Form End -->
                </div>
                <!-- Contact Us Form End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Contact Us End -->

<!-- Google Map Section Start -->
<div class="google-map">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Our contact</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Get in touch with us</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">Get in touch to discuss your employee wellbeing needs today. Please give us a call, drop us an email or fill out the contact form and we'll get back to you.</p>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-12">
                <!-- Google Map IFrame Start -->
                <div class="google-map-iframe">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2476.3454266235894!2d-0.4089861235427637!3d51.635198801359415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48766b1ea9bb1d29%3A0x3ec2d4ea7f22caa9!2sHampermill%20Ln%2C%20United%20Kingdom!5e0!3m2!1sen!2sin!4v1762660438396!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Google Map IFrame End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Contact Info Box Start -->
                <div class="contact-info-box">
                    <!-- Conatct Info Item Start -->
                    <div class="contact-info-item wow fadeInUp">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <!-- Icon Box End -->

                        <!-- Contact Info Content Start -->
                        <div class="contact-info-content">
                            <h3>phone number</h3>
                            <p>{{ APP_PHONE }}</p>
                        </div>
                        <!-- Contact Info Content End -->
                    </div>
                    <!-- Conatct Info Item End -->

                    <!-- Conatct Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <!-- Icon Box End -->

                        <!-- Contact Info Content Start -->
                        <div class="contact-info-content">
                            <h3>e-mail support</h3>
                            <p>{{ APP_EMAIL }}</p>
                        </div>
                        <!-- Contact Info Content End -->
                    </div>
                    <!-- Conatct Info Item End -->

                    <!-- Conatct Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <i class="fa-solid fa-house"></i>
                        </div>
                        <!-- Icon Box End -->

                        <!-- Contact Info Content Start -->
                        <div class="contact-info-content">
                            <h3>headquarter</h3>
                            <p>{{ APP_ADDRESS }}</p>
                        </div>
                        <!-- Contact Info Content End -->
                    </div>
                    <!-- Conatct Info Item End -->
                </div>
                <!-- Contact Info Box End -->
            </div>
        </div>
    </div>
</div>
@endsection