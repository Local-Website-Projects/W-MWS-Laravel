@extends('layouts.guest')

@section('title', 'About Us')

@section('keywords', '')

@section('description', '')

@section('content')
<style>
   /* Scoped container to match your theme's width */
   .roadmap-timeline-wrapper {
        background: #14142F;
        margin-top: 40px;
        padding: 180px 0 60px 0;
        width: 100%;
        min-height: 550px;
        position: relative;
        overflow: hidden;
        border-radius: 25px;
        background-size: cover;
        background-position: center;
        transition: background-image 0.6s ease-in-out;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .slider {
        position: relative;
        width: 100%;
        height: 380px;
    }

    .slide {
        display: block;
        width: 350px;
        height: 200px;
        position: absolute;
        top: 0;
        left: 50%;
        margin-left: -190px; /* Center-point adjustment */
        backface-visibility: hidden;
        transition: all 0.5s cubic-bezier(0.2, 0, 0.2, 1);
        color: white;
        border-radius: 20px;
        cursor: pointer;
        box-shadow: 0 20px 40px rgba(0,0,0,0.6);
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.1);
        background-color: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
    }

    .slide.active {
        z-index: 50 !important;
        border: 1px solid rgba(255, 255, 255, 0.4);
    }

    .slide-container {
        padding: 30px;
        background: linear-gradient(to bottom, rgb(0 0 0 / 50%) 0%, rgb(0 0 0 / 70%) 100%);
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .slide-Title {
        font-size: 20px !important;
        margin-bottom: 10px !important;
        color: #fff !important;
    }

    .slide-description ul li {
        font-family: 'Roboto', sans-serif;
        font-size: 14px !important;
        line-height: 1.3 !important;
        color: rgba(255, 255, 255, 0.9);
        text-align: justify;
        font-weight: 300;
    }
</style>

    <!-- content-->
    <div class="content"  data-pagetitle="about us">
        <div class="page-scroll-nav">
            <nav class="scroll-init page-scroll-nav_wrap">
                <ul class="no-list-style init_hidden_filter">
                    <li><a class="scroll-link fbgs act-sec" href="#sec1" data-bgtext="01"><span>About</span></a></li>
                    <li><a class="scroll-link fbgs" href="#sec2" data-bgtext="02"><span>Services</span></a></li>
                    <li><a class="scroll-link fbgs" href="#sec3" data-bgtext="03"><span>Roadmap</span></a></li>
                </ul>
                <div class="psn_button act-filter"><i class="fal fa-sort"></i> Menu </div>
            </nav>
        </div>
        <!-- hero-section-dec-->
        <div class="hero-section-dec color-bg">
            <div class="progress-indicator">
                <svg xmlns="http://www.w3.org/2000/svg"
                     viewBox="-1 -1 34 34">
                    <circle cx="16" cy="16" r="15.9155"
                            class="progress-bar__background" />
                    <circle cx="16" cy="16" r="15.9155"
                            class="progress-bar__progress
                                    js-progress-bar" />
                </svg>
            </div>
        </div>
        <!-- hero-section-dec end-->
        <!--fixed-column-wrap-->
        <div class="fixed-column-wrap">
            <div class="pr-bg"></div>
            <!--fixed-column-wrap-content-->
            <div class="fixed-column-wrap-content">
                <!--slideshow-container-->
                <div class="slideshow-container">
                    <div class="slideshow-container_wrap fl-wrap full-height">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!--ms_item-->
                                <div class="swiper-slide">
                                    <div class="ms-item_fs fl-wrap">
                                        <div class="bg par-elem"  data-bg="images/bg/10.webp"  ></div>
                                    </div>
                                </div>
                                <!--ms_item end-->
                                <!--ms_item-->
                                <div class="swiper-slide ">
                                    <div class="ms-item_fs fl-wrap">
                                        <div class="bg par-elem"  data-bg="images/bg/8.webp"></div>
                                    </div>
                                </div>
                                <!--ms_item end-->
                                <!--ms_item-->
                                <div class="swiper-slide">
                                    <div class="ms-item_fs fl-wrap">
                                        <div class="bg par-elem"  data-bg="images/bg/13.webp"></div>
                                    </div>
                                </div>
                                <!--ms_item end-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--slideshow-container end-->
                <div class="overlay"></div>
                <div class="progress-bar-wrap bot-element">
                    <div class="progress-bar"></div>
                </div>
                <!--fixed-column-wrap_title-->
                <div class="fixed-column-wrap_title first-tile_load">
                    <h2>About<br> MWS</h2>
                    <p>Your Eyes and Ears on the Ground in Bangladesh</p>
                </div>
                <!--fixed-column-wrap_title end-->
                <div class="fixed-column-dec"></div>
                <div class="scroll-notifer">
                    <div class="scroll-button">
                        <button id="scrollBtn" class="mouse-icon"></button>
                    </div>
                </div>
                <div class="section-counter">
                    <div class="sc_current"><span>01</span></div>
                    <div class="sc_total"></div>
                </div>
                <div class="fcwc-pagination fcwc-wrap"></div>
            </div>
            <!--fixed-column-wrap-content end-->
        </div>
        <!--fixed-column-wrap end-->
        <!--column-wrap-->
        <div class="column-wrap">
            <!--column-wrap-container -->
            <div class="column-wrap-container fl-wrap" style="max-width=1200px !important">
                <div class="col-wc_dec"></div>
                <section class="scroll_sec" id="sec1">
                    <div class="container" style="max-width=1200px !important"> 
                        <div class="section-title">
                            <h3>Some   Words About MWS  </h3>
                            <p>Your Eyes and Ears on the Ground in Bangladesh</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="dec-img   fl-wrap">
                                    <img src="images/about.jpg" class="respimg" alt="">
                                    <a class="video_link image-popup" href="https://vimeo.com/34741214"><i class="fas fa-play"></i><span>Play Story video</span></a>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="main-about fl-wrap">
                                    <h2>Innovative solutions to boost <br><span> your creative </span>  projects</h2>
                                    <p>At MWS, we believe we are more than just a buying house; we are your strategic manufacturing partner. Based in the heart of Dhaka, we provide end-to-end supply chain solutions—from initial fabric innovation and tech-pack development to the final shipment. We take pride in ensuring your brand's unique vision is executed with technical precision.</p>
                                    <p> Real-World Impact</p>
                                    <div class="facts-container fl-wrap">
                                        <!-- inline-facts -->
                                        <div class="inline-facts-wrap">
                                            <div class="inline-facts">
                                                <div class="milestone-counter">
                                                    <div class="stats animaper">
                                                        <div class="num plus" data-content="0" data-num="20">0</div>
                                                    </div>
                                                </div>
                                                <h6>Vetted Partner Factories</h6>
                                            </div>
                                        </div>
                                        <div class="inline-facts-wrap">
                                            <div class="inline-facts">
                                                <div class="milestone-counter">
                                                    <div class="stats animaper">
                                                        <div class="num plus" data-content="0" data-num="5">0</div>
                                                    </div>
                                                </div>
                                                <h6>Global Export Destinations</h6>
                                            </div>
                                        </div>

                                        <!-- inline-facts end -->
                                        <!-- inline-facts  -->
                                        <div class="inline-facts-wrap">
                                            <div class="inline-facts">
                                                <div class="milestone-counter">
                                                    <div class="stats animaper">
                                                        <div class="num percent-sign" data-content="0" data-num="100">0</div>
                                                    </div>
                                                </div>
                                                <h6>Socially Compliant</h6>
                                            </div>
                                        </div>
                                        <!-- inline-facts end -->
                                        <!-- inline-facts  -->
                                        <div class="inline-facts-wrap">
                                            <div class="inline-facts">
                                                <div class="milestone-counter">
                                                    <div class="stats animaper">
                                                        <div class="num aql" data-content="0" data-num="1.5">0</div>
                                                    </div>
                                                </div>
                                                <h6>AQL</h6>
                                            </div>
                                        </div>
                                        <!-- inline-facts end -->


                                    </div>
                                    <a href="{{route('portfolio')}}" class="btn ajax  color-bg  fl-btn"><span>Our Portfolio</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-number"> <span>0</span>1. </div>
                </section>
                <!-- section end-->
                <div class="section-separator fl-wrap"><span></span></div>
                <!-- section  -->
                <section class="scroll_sec" id="sec2">
                    <div class="container">
                        <div class="section-title">
                            <h3>Comprehensive Sourcing & Manufacturing Solutions</h3>
                            <p>From initial concept to global delivery, we provide end-to-end supply chain excellence through a transparency-first model.</p>
                        </div>
                        <!--process-wrap  -->
                        <div class="process-wrap fl-wrap">
                            <div class="row">
                                <div class=" col-sm-6">
                                    <div class="process-details">
                                                    <span class="pd-icon">
                                                    <i class="fal fa-tshirt"></i>
                                                    </span>
                                        <h4>Product Development</h4>
                                        <div class="clearfix"></div>
                                        <p>Transforming your creative visions into reality through rapid prototyping, precision pattern making, and innovative fabric sourcing.</p>
                                        <span class="process-numder">01.</span>
                                        <div class="show-phdc"><i class="fal fa-plus"></i> <span>Details</span></div>
                                        <div class="proces-details-content">
                                            <div class="close-hidden_pdc"><i class="fal fa-times"></i></div>
                                            <div class="proces-details-content-wrap">
                                                <ul class="pdcw_list fl-wrap">
                                                    <li>Innovation</li>
                                                    <li>Precision</li>
                                                    <li>Prototyping</li>
                                                </ul>
                                                <p>We act as your technical partner, transforming creative concepts into market-ready garments through cutting-edge fabric innovation and precise pattern making. Our rapid prototyping process ensures you receive salesman samples (SMS) and photo-shoot samples within 7 days to keep your development cycle moving.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-sm-6">
                                    <div class="process-details">
                                                    <span class="pd-icon">
                                                    <i class="fal fa-handshake"></i>
                                                    </span>
                                        <h4>Strategic Sourcing</h4>
                                        <div class="clearfix"></div>
                                        <p>Leveraging a vetted network of socially compliant factories to provide competitive pricing without compromising on ethical standards.</p>
                                        <span class="process-numder">02.</span>
                                        <div class="show-phdc"><i class="fal fa-plus"></i> <span>Details</span></div>
                                        <div class="proces-details-content">
                                            <div class="close-hidden_pdc"><i class="fal fa-times"></i></div>
                                            <div class="proces-details-content-wrap">
                                                <ul class="pdcw_list fl-wrap">
                                                    <li>Ethical</li>
                                                    <li>Vetted</li>
                                                    <li>Competitive</li>
                                                </ul>
                                                <p>We provide direct access to a vetted network of over 20 partner factories in Bangladesh that are 100% socially compliant (BSCI/SEDEX). By conducting rapid price analysis and factory selection within 24 hours, we ensure competitive pricing that respects your bottom line without compromising on ethical standards.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-sm-6">
                                    <div class="process-details">
                                                    <span class="pd-icon">
                                                    <i class="fal fa-shield-check"></i>
                                                    </span>
                                        <h4>Quality Assurance</h4>
                                        <div class="clearfix"></div>
                                        <p>Utilizing a rigorous "3-Gate" defense and AQL 1.5/2.5 audits to ensure every garment is retail-ready and defect-free.</p>
                                        <span class="process-numder">03.</span>
                                        <div class="show-phdc"><i class="fal fa-plus"></i> <span>Details</span></div>
                                        <div class="proces-details-content">
                                            <div class="close-hidden_pdc"><i class="fal fa-times"></i></div>
                                            <div class="proces-details-content-wrap">
                                                <ul class="pdcw_list fl-wrap">
                                                    <li>Inspection</li>
                                                    <li>Compliance</li>
                                                    <li>Zero-Defect</li>
                                                </ul>
                                                <p>Our "3-Gate" defense protocol involves rigorous, multi-stage inspections where textile experts manage every detail. From verifying yarn quality to on-site daily in-line monitoring and final AQL 1.5/2.5 statistical audits, we guarantee that every carton is retail-ready and defect-free.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-sm-6">
                                    <div class="process-details">
                                                    <span class="pd-icon">
                                                    <i class="fal fa-file-invoice"></i>
                                                    </span>
                                        <h4>Supply Logistics</h4>
                                        <div class="clearfix"></div>
                                        <p>Managing the entire journey from factory floor to global delivery with seamless documentation and a 100% on-time shipment guarantee.</p>
                                        <span class="process-numder">04.</span>
                                        <div class="show-phdc"><i class="fal fa-plus"></i> <span>Details</span></div>
                                        <div class="proces-details-content">
                                            <div class="close-hidden_pdc"><i class="fal fa-times"></i></div>
                                            <div class="proces-details-content-wrap">
                                                <ul class="pdcw_list fl-wrap">
                                                    <li>Transparency</li>
                                                    <li>Seamless</li>
                                                    <li>On-Time</li>
                                                </ul>
                                                <p>We offer a transparency-first model that provides a virtual "window" into the factory floor, allowing you to monitor the 60-day order execution phase from anywhere in the world. Our team manages all export documentation and global delivery to ensure 100% on-time shipments across the UK, EU, USA, and beyond.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--process-wrap   end-->
                        <div class="srv-link-text fl-wrap">
                            <h4>Ready to order your project ? Visit our contacts page :  </h4>
                            <a href="{{route('contact')}}" class="btn ajax color-bg  fl-btn"><span>Contacts</span></a>
                        </div>
                    </div>
                    <div class="section-number"> <span>0</span>2. </div>
                </section>
                <!--section end-->
                <div class="section-separator fl-wrap"><span></span></div>
                <!--section  -->
                <section class="scroll_sec" id="sec3">
                    <div class="container">
                        <div class="section-title">
                            <h3>Our 5-Step Excellence Roadmap</h3>
                            <p>A Proven Framework for Turning Concepts into Containers with Speed and Technical Precision</p>
                        </div>
                
                        <div class="roadmap-timeline-wrapper">
                            <div class="slider">
                                <div class="slide" data-bg="{{ asset('images/steps/1.jpg') }}">
                                    <div class="slide-container">
                                        <h2 class="slide-Title">1 - Inquiry & Costing</h2>
                                        <div class="slide-description">
                                            <ul><li>We prioritize speed to keep your business moving by providing a rapid price analysis within 24 hours. Our team performs a strategic factory selection from our vetted network to ensure your project aligns with the best cost-to-quality ratio.</li></ul>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="slide" data-bg="{{ asset('images/steps/2.jpg') }}">
                                    <div class="slide-container">
                                        <h2 class="slide-Title">2 - Sampling & PD</h2>
                                        <div class="slide-description">
                                            <ul><li>We transform your vision into physical reality through rapid prototyping and tech-pack development. Within just 7 days, we deliver high-quality physical prototypes and lab dips, ensuring your design is technically precise before mass production begins.</li></ul>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="slide active" data-bg="{{ asset('images/steps/3.jpg') }}">
                                    <div class="slide-container">
                                        <h2 class="slide-Title">3 - Order Execution</h2>
                                        <div class="slide-description">
                                            <ul><li>Once production starts, we maintain a strict 60-day timeline to ensure your collection moves from concept to container in record time. This phase involves rigorous monitoring of every manufacturing stage, including yarn sourcing, knitting, and dyeing.</li></ul>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="slide" data-bg="{{ asset('images/steps/4.jpg') }}">
                                    <div class="slide-container">
                                        <h2 class="slide-Title">4 - Quality Gate</h2>
                                        <div class="slide-description">
                                            <ul><li>Our "3-Gate" defense protocol provides total peace of mind through a zero-defect supply chain. We conduct multi-stage inline inspections and a final statistical audit to AQL 1.5/2.5 standards to verify that every item is retail-ready.</li></ul>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="slide" data-bg="{{ asset('images/steps/5.png') }}">
                                    <div class="slide-container">
                                        <h2 class="slide-Title">5 - Logistics</h2>
                                        <div class="slide-description">
                                            <ul><li>We guarantee a seamless export experience by managing all documentation and complex logistics requirements. Our commitment to 100% on-time shipments ensures reliable global delivery to your warehouses across the UK, EU, USA, and beyond.</li></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-number"> <span>0</span>3. </div>
                </section>
                <!--section end-->
            </div>
            <!--column-wrap-container end -->
        </div>
        <!--column-wrap end-->
        <div class="to-top-btn to-top"><i class="fal fa-long-arrow-up"></i></div>
    </div>
    <!-- content end-->

    <div class="hero-scroll-down-notifer">
        <div class="scroll-down-wrap ">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
        </div>
        <i class="far fa-angle-down"></i>
    </div>
    <!-- share-wrapper-->
    <div class="share-wrapper">
        <div class="close-share-btn"><i class="fal fa-long-arrow-left"></i></div>
        <div class="share-container fl-wrap  isShare"></div>
    </div>
    <!-- share-wrapper  end -->


    <script>
        document.getElementById('scrollBtn').addEventListener('click', function() {
            // Option B: Scroll down by the height of the current window (100vh)
            window.scrollBy({
                top: window.innerHeight,
                left: 0,
                behavior: 'smooth'
            });
        });

        var RoadmapSlider = function() {
    var $slides, $wrapper, sliderWidth, increment = 180;

    var updateVisuals = function() {
        var $active = $('.slide.active');
        var bg = $active.attr('data-bg');
        
        if (bg) {
            // Apply background ONLY to the roadmap section
            $('.roadmap-timeline-wrapper').css({
                'background-image': 'linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(' + bg + ')'
            });

            // Update card background
            $('.slide').not('.active').css('background-image', 'none');
            $active.css({
                'background-image': 'url(' + bg + ')',
                'background-size': 'cover',
                'background-position': 'center'
            });
        }
    };

    var position = function() {
        var activeIndex = $('.slide.active').index();
        var total = $slides.length;

        $slides.each(function(index) {
            var x = 0, z = 0, opacity = 0, zindex = 0, scale = 1;
            
            if (index < activeIndex) {
                // Left Slides
                x = -increment * (activeIndex - index);
                z = -200 * (activeIndex - index);
                scale = 0.8;
                opacity = 0.6;
                zindex = index;
            } else if (index > activeIndex) {
                // Right Slides
                x = increment * (index - activeIndex);
                z = -200 * (index - activeIndex);
                scale = 0.8;
                opacity = 0.6;
                zindex = total - index;
            } else {
                // Active Slide
                x = 0;
                z = 0;
                scale = 1.1;
                opacity = 1;
                zindex = 100;
            }

            $(this).css({
                'transform': 'translateX('+x+'px) translateZ('+z+'px) scale('+scale+')',
                'z-index': zindex,
                'opacity': opacity
            });
        });
    };

    return {
        init: function() {
            $slides = $('.slide');
            $wrapper = $('.roadmap-timeline-wrapper');
            if(!$wrapper.length) return;

            $(document).on('click', '.slide', function() {
                $('.slide').removeClass('active');
                $(this).addClass('active');
                position();
                updateVisuals();
            });

            position();
            updateVisuals();
        }
    };
}();

$(document).ready(function() {
    RoadmapSlider.init();
});
    </script>

    
@endsection
