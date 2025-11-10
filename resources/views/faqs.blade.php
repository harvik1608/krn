@extends('include.front_header')
@section('content')
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">FAQ</h1>
                </div>
            </div>
        </div>
    </div>
</div>
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
@endsection