@extends('layouts.guest')

@section('title', 'Roadmap')

@section('keywords', '')

@section('description', '')

@section('content')
    <div class="content full-height" data-pagetitle="Home">
        <!-- fw-carousel-wrap -->
        <div class="hero-carousel-wrap  full-height   fl-wrap">
            <!-- fw-carousel  -->
            <div class="hero-carousel   fl-wrap full-height lightgallery">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- swiper-slide-->
                        <div class="swiper-slide hov_zoom">
                            <div class="bg"  data-bg="{{asset('images/bg/long/2.jpg')}}" data-swiper-parallax="10%"></div>
                            <div class="overlay"></div>
                            <div class="grid-carousel-title">
                                <h3><a href="#" class="ajax">Inquiry & Costing (24 Hours)</a></h3>
                                <div class="clearfix"></div>
                                <h4>We prioritize speed to keep your business moving by providing a rapid price analysis within 24 hours. Our team performs a strategic factory selection from our vetted network to ensure your project aligns with the best cost-to-quality ratio.</h4>
                            </div>
                            <div class="carousle-item-number"><span>01.</span></div>
                            <div class="carousle-item-dec"></div>
                        </div>
                        <!-- swiper-slide end-->
                        <!-- swiper-slide-->
                        <div class="swiper-slide hov_zoom">
                            <div class="bg"  data-bg="{{asset('images/bg/long/4.jpg')}}" data-swiper-parallax="10%"></div>
                            <div class="overlay"></div>
                            <div class="grid-carousel-title">
                                <h3><a href="#" class="ajax">Sampling & PD (7 Days)</a></h3>
                                <div class="clearfix"></div>
                                <h4>We transform your vision into physical reality through rapid prototyping and tech-pack development. Within just 7 days, we deliver high-quality physical prototypes and lab dips, ensuring your design is technically precise before mass production begins.</h4>
                            </div>
                            <div class="carousle-item-number"><span>02.</span></div>
                            <div class="carousle-item-dec"></div>
                        </div>
                        <!-- swiper-slide end-->
                        <!-- swiper-slide-->
                        <div class="swiper-slide hov_zoom">
                            <div class="bg"  data-bg="{{asset('images/bg/long/9.jpg')}}" data-swiper-parallax="10%"></div>
                            <div class="overlay"></div>
                            <div class="grid-carousel-title">
                                <h3><a href="#" class="ajax">Order Execution (60 Days)</a></h3>
                                <div class="clearfix"></div>
                                <h4>Once production starts, we maintain a strict 60-day timeline to ensure your collection moves from concept to container in record time. This phase involves rigorous monitoring of every manufacturing stage, including yarn sourcing, knitting, and dyeing.</h4>
                            </div>
                            <div class="carousle-item-number"><span>03.</span></div>
                            <div class="carousle-item-dec"></div>
                        </div>
                        <!-- swiper-slide end-->
                        <!-- swiper-slide-->
                        <div class="swiper-slide hov_zoom">
                            <div class="bg"  data-bg="{{asset('images/bg/long/8.jpg')}}" data-swiper-parallax="10%"></div>
                            <div class="overlay"></div>
                            <div class="grid-carousel-title">
                                <h3><a href="#" class="ajax">Quality Gate (100%)</a></h3>
                                <div class="clearfix"></div>
                                <h4>Our "3-Gate" defense protocol provides total peace of mind through a zero-defect supply chain. We conduct multi-stage inline inspections and a final statistical audit to AQL 1.5/2.5 standards to verify that every item is retail-ready.</h4>
                            </div>
                            <div class="carousle-item-number"><span>04.</span></div>
                            <div class="carousle-item-dec"></div>
                        </div>
                        <!-- swiper-slide end-->
                        <!-- swiper-slide-->
                        <div class="swiper-slide hov_zoom">
                            <div class="bg"  data-bg="{{asset('images/bg/long/5.jpg')}}" data-swiper-parallax="10%"></div>
                            <div class="overlay"></div>
                            <div class="grid-carousel-title">
                                <h3><a href="#" class="ajax">Logistics (100%)</a></h3>
                                <div class="clearfix"></div>
                                <h4>We guarantee a seamless export experience by managing all documentation and complex logistics requirements. Our commitment to 100% on-time shipments ensures reliable global delivery to your warehouses across the UK, EU, USA, and beyond.</h4>
                            </div>
                            <div class="carousle-item-number"><span>05.</span></div>
                            <div class="carousle-item-dec"></div>
                        </div>
                        <!-- swiper-slide end-->
                    </div>
                </div>
            </div>
            <!-- fw-carousel end -->
            <div class="fs-slider-controls-wrap fscw2">
                <div class="fs-slider-wrap_pagination-wrap">
                    <div class="fs-slider-wrap_pagination"></div>
                </div>
            </div>
            <div class="ss-slider-cont ss-slider-cont-prev"><i class="fal fa-angle-left"></i></div>
            <div class="ss-slider-cont ss-slider-cont-next"><i class="fal fa-angle-right"></i></div>
        </div>
        <!-- fw-carousel-wrap end -->
        <div class="hsc_counter-wrap">
            <div class="hsc_counter"><span></span></div>
            <div class="hsc_total"></div>
        </div>
        <div class="fs-pg-idicator_wrap color-bg">
            <div class="slider-progress-bar">
                            <span>
                                <svg class="circ" width="50" height="50"  >
                                    <circle class="circ2" cx="20" cy="20" r="18" stroke="rgba(255,255,255,0.4)" stroke-width="1" fill="none"/>
                                    <circle class="circ1" cx="20" cy="20" r="18" stroke="#fff" stroke-width="2" fill="none"/>
                                </svg>
                            </span>
            </div>
        </div>
        <div class="hero-scroll-down-notifer">
            <div class="scroll-down-wrap ">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
            </div>
            <i class="far fa-angle-down"></i>
        </div>
        <div class="body-color-bg"></div>
    </div>
@endsection
