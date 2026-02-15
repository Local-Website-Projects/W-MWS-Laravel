@extends('layouts.guest')

@section('title', 'Home')

@section('keywords', '')

@section('description', '')

@section('content')
    <div class="content full-height" data-pagetitle="Home">
        <div class="fl-wrap full-height hero-conatiner">
            <div class="hero-wrapper fl-wrap full-height hidden-item">
                <span class="hc_dec"></span>
                <!-- fs-slider-wrap  -->
                <!-- hero-slider-wrap -->
                <div class="hero-slider-wrap home-half-slider fl-wrap full-height">
                    <div class="hero-slider fs-gallery-wrap fl-wrap full-height">
                        <div class="swiper-container">
                            <div class="swiper-wrapper" >
                                <!-- swiper-slide-->
                                <div class="swiper-slide">
                                    <div class="half-hero-wrap">
                                        <div class="hhw_header">Welcome to MWS</div>
                                        <h1>Crafting Quality <br><span> Powering the</span> Global<br><span>Apparel Supply Chain.</span></h1>
                                        <h4>We bridge the gap between your creative designs and final delivery with an unyielding commitment to ethics and quality.</h4>
                                        <div class="clearfix"></div>
                                        <a href="#" class="btn ajax  fl-btn color-bg"><span>Our portfolio</span></a>
                                    </div>
                                </div>
                                <!-- swiper-slide end-->
                                <!-- swiper-slide-->
                                <div class="swiper-slide">
                                    <div class="half-hero-wrap">
                                        <div class="hhw_header">Welcome to MWS</div>
                                        <h1>Your Premier <br> Partner <br/><span>In Bangladesh</span></h1>
                                        <h4>Providing end-to-end supply chain solutions from initial fabric innovation and tech-pack development to the final shipment.</h4>
                                        <div class="clearfix"></div>
                                        <a href="#" class="btn ajax  fl-btn color-bg"><span>Contact Us</span></a>
                                    </div>
                                </div>
                                <!-- swiper-slide end-->
                                <!-- swiper-slide-->
                                <div class="swiper-slide">
                                    <div class="half-hero-wrap">
                                        <div class="hhw_header">Welcome to MWS</div>
                                        <h1>Building A <br>Supply Chain <br> With <span>  A Conscience</span> </h1>
                                        <h4>We partner exclusively with BSCI, SEDEX, and LEED-certified facilities to ensure every piece meets the highest global standards.</h4>
                                        <div class="clearfix"></div>
                                        <a href="#" class="btn  ajax  fl-btn color-bg"><span>View project</span></a>
                                    </div>
                                </div>
                                <!-- swiper-slide end-->
                                <!-- swiper-slide-->
                                <div class="swiper-slide">
                                    <div class="half-hero-wrap">
                                        <div class="hhw_header">Welcome to MWS</div>
                                        <h1>Where Your Vision <br> Features <br>Meets Technical  <span> Precision</span></h1>
                                        <h4>Our 5-step excellence roadmap ensures rapid price analysis, fast sampling, and rigorous monitoring for total peace of mind.</h4>
                                        <div class="clearfix"></div>
                                        <a href="#" class="btn ajax  fl-btn color-bg"><span>About us</span></a>
                                    </div>
                                </div>
                                <!-- swiper-slide end-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- hero-slider-wrap  end-->
                <!-- hero-slider-img-->
                <div class="hero-slider-img hero-slider-wrap_halftwo hidden-item">
                    <div class="swiper-container">
                        <div class="swiper-wrapper" >
                            <!-- swiper-slide-->
                            <div class="swiper-slide">
                                <div class="bg"  data-bg="images/bg/10.jpg" data-swiper-parallax="20%"></div>
                                <div class="overlay"></div>
                            </div>
                            <!-- swiper-slide end-->
                            <!-- swiper-slide-->
                            <div class="swiper-slide">
                                <div class="bg"  data-bg="images/bg/7.jpg" data-swiper-parallax="20%"></div>
                                <div class="overlay"></div>
                            </div>
                            <!-- swiper-slide end-->
                            <!-- swiper-slide-->
                            <div class="swiper-slide">
                                <div class="bg"  data-bg="images/bg/8.jpg" data-swiper-parallax="20%"></div>
                                <div class="overlay"></div>
                            </div>
                            <!-- swiper-slide end-->
                            <!-- swiper-slide-->
                            <div class="swiper-slide">
                                <div class="bg"  data-bg="images/bg/13.jpg" data-swiper-parallax="20%"></div>
                                <div class="overlay"></div>
                            </div>
                            <!-- swiper-slide end-->
                        </div>
                    </div>
                    <div class="hero-corner-dec"></div>
                    <div class="hero-corner-dec2"></div>
                </div>
                <!-- hero-slider-img  end-->
                <!-- slider-controls -->
                <div class="slider-progress-bar">
                                <span>
                                    <svg class="circ" width="50" height="50">
                                        <circle class="circ2" cx="25" cy="25" r="23" stroke="rgba(255,255,255,0.4)" stroke-width="1" fill="none"/>
                                        <circle class="circ1" cx="25" cy="25" r="23" stroke="#fff" stroke-width="2" fill="none"/>
                                    </svg>
                                </span>
                </div>
                <div class="clone-counter">
                    <div class="current">01</div>
                </div>
                <div class="swiper-counter hs_counter">
                    <div class="current">01</div>
                    <div class="total"></div>
                </div>
                <div class="hero-slider_control-wrap">
                    <div class="hsc hsc-prev"><span><i class="fal fa-angle-left"></i></span> </div>
                    <div class="hsc hsc-next"><span><i class="fal fa-angle-right"></i></span></div>
                </div>
                <!-- slider-controls end-->
                <a href="{{route('about')}}" class="ajax start-btn"><span> Start explore <i class="fal fa-long-arrow-right"></i></span></a>
                <div class="play-pause_slider hsc_pp auto_actslider"><i class="fas fa-play"></i></div>
            </div>
            <!-- hero-container end-->
            <div class="hero-decor-numb"><span>40.7143528  </span><span>-74.0059731 </span> <a href="https://www.google.com.ua/maps/" target="_blank" class="hero-decor-numb-tooltip">Based In NewYork</a></div>
            <div class="hero-slider-wrap_pagination"></div>
            <div class="hero-scroll-down-notifer">
                <div class="scroll-down-wrap ">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                </div>
                <i class="far fa-angle-down"></i>
            </div>
        </div>
    </div>
@endsection


