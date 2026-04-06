@extends('layouts.guest')

@section('title', 'About Us')

@section('keywords', '')

@section('description', '')

@section('content')
    <style>
        .num.plus::after {
            content: "+";
            display: inline-block;
            margin-left: 2px; /* Adds a tiny bit of breathing room */
            vertical-align: middle; /* Aligns it nicely with the numbers */
        }
        .aql::after {
            content: "/2.5"; /* This adds the static part */
            font-weight: bold;
            opacity: 1; /* Optional: makes the second number slightly subtle */
            margin-left: 2px;
        }
        .num.percent-sign::after {
            content: "%";
            margin-left: 1px;
            font-weight: inherit; /* Matches the boldness of the number */
        }

        .sociales {
                text-align: center;
                margin-bottom: 20px;
            }

            #timeline {
                width: 500px;
                height: 600px;
                overflow: hidden;
                margin: 40px auto;
                position: relative;
                background: url('https://www.csslab.cl/ejemplos/timelinr/latest/images/dot.gif') 3px top repeat-y;
            }

            #dates {
                width: 100px;
                height: 600px;
                overflow: hidden;
                float: left;
            }

            #datesScroller,
            #issuesScroller {
                position: relative;
                margin: 0;
                padding: 0;
                transition: transform 0.5s ease-in-out;
            }

            #dates li {
                list-style: none;
                width: 100px;
                height: 100px;
                line-height: 100px;
                font-size: 24px;
                padding-left: 10px;
                background: url('https://www.csslab.cl/ejemplos/timelinr/latest/images/biggerdot.png') left center no-repeat;
            }

            #dates a {
                line-height: 38px;
                padding-bottom: 10px;
            }

            #dates .selected {
                font-size: 38px;
                color: #ff8c00;
            }

            #issues {
                width: 400px;
                height: 600px;
                overflow: hidden;
                float: left;
            }

            /* Each issue is 600px tall; we scroll by translating the inner scroller */
            #issues li {
                max-width: 300px;
                /* width: 400px; */
                height: 600px;
                list-style: none;
                text-align: center;
                /* add */

            }

            #issues li.selected img {
                -webkit-transform: scale(1.1, 1.1);
                -moz-transform: scale(1.1, 1.1);
                -o-transform: scale(1.1, 1.1);
                -ms-transform: scale(1.1, 1.1);
                transform: scale(1.1, 1.1);
            }

            #issues li img {
                /* float: left; */
                width: 200px;
                /* add */
                margin: 10px 30px 10px 50px;
                -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF)";
                /* IE 8 */
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF, endColorstr=#00FFFFFF);
                /* IE 6 & 7 */
                zoom: 1;
                -webkit-transition: all 2s ease-in-out;
                -moz-transition: all 2s ease-in-out;
                -o-transition: all 2s ease-in-out;
                -ms-transition: all 2s ease-in-out;
                transition: all 2s ease-in-out;
                -webkit-transform: scale(0.7, 0.7);
                -moz-transform: scale(0.7, 0.7);
                -o-transform: scale(0.7, 0.7);
                -ms-transform: scale(0.7, 0.7);
                transform: scale(0.7, 0.7);
            }

            #issues li h1 {
                color: #ff8c00;
                font-size: 38px;
                text-align: center;
                /* text-shadow: #000 1px 1px 2px; */
                font-weight: bold;
            }

            #issues li p {
                font-size: 14px;
                margin: 10px 20px;
                font-weight: 500;
                line-height: 22px;
            }

            #grad_top,
            #grad_bottom {
                width: 500px;
                height: 80px;
                position: absolute;
            }

            #grad_top {
                top: 0;
            }

            #grad_bottom {
                bottom: 0;
            }

            #next,
            #prev {
                position: absolute;
                left: 45%;
                /* left: 55%; */
                font-size: 70px;
                width: 38px;
                height: 22px;
                background-position: 0 -44px;
                background-repeat: no-repeat;
                text-indent: -9999px;
                overflow: hidden;
            }

            #next:hover,
            #prev:hover {
                background-position: 0 0;
            }

            #next {
                bottom: 0;
                background-image: url('https://www.csslab.cl/ejemplos/timelinr/latest/images/next_v.png');
            }

            #prev {
                top: 0;
                background-image: url('https://www.csslab.cl/ejemplos/timelinr/latest/images/prev_v.png');
            }

            #next.disabled,
            #prev.disabled {
                opacity: 0.2;
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
                                        <div class="bg par-elem"  data-bg="images/bg/10.jpg"  ></div>
                                    </div>
                                </div>
                                <!--ms_item end-->
                                <!--ms_item-->
                                <div class="swiper-slide ">
                                    <div class="ms-item_fs fl-wrap">
                                        <div class="bg par-elem"  data-bg="images/bg/8.jpg"></div>
                                    </div>
                                </div>
                                <!--ms_item end-->
                                <!--ms_item-->
                                <div class="swiper-slide">
                                    <div class="ms-item_fs fl-wrap">
                                        <div class="bg par-elem"  data-bg="images/bg/13.jpg"></div>
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
            <div class="column-wrap-container fl-wrap">
                <div class="col-wc_dec"></div>
                <section class="scroll_sec" id="sec1">
                    <div class="container">
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
                                    <p>At Many Wear Sourcing (MWS), we believe we are more than just a buying house; we are your strategic manufacturing partner. Based in the heart of Dhaka, we provide end-to-end supply chain solutions—from initial fabric innovation and tech-pack development to the final shipment. We take pride in ensuring your brand's unique vision is executed with technical precision.</p>
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
                <section class="scroll_sec" style="padding: 80px 0 0 0;" id="sec3">
                    <div class="container">
                        <div class="section-title">
                            <h3>Our 5-Step Excellence Roadmap</h3>
                            <p>A Proven Framework for Turning Concepts into Containers with Speed and Technical Precision</p>
                        </div>
                        <div id="timeline">
                            <div id="dates">
                                <ul id="datesScroller">
                                    <li><a href="#step1" class="selected">1</a></li>
                                    <li><a href="#step2">2</a></li>
                                    <li><a href="#step3">3</a></li>
                                    <li><a href="#step4">4</a></li>
                                    <li><a href="#step5">5</a></li>
                                </ul>
                            </div>
                
                            <div id="issues">
                                <ul id="issuesScroller">
                                    <li id="step1" class="selected">
                                        <img src="{{ asset('images/steps/Inquiry-and-costing-24-hours.jpg') }}" />
                                        <h1>Inquiry &amp; Costing (24 Hours)</h1>
                                        <p>We prioritize speed to keep your business moving by providing a rapid price analysis within 24 hours. Our team performs a strategic factory selection from our vetted network to ensure your project aligns with the best cost-to-quality ratio.</p>
                                    </li>
                                    <li id="step2">
                                        <img src="{{ asset('images/steps/factory-sampling-and-pd.jpg') }}" />
                                        <h1>Sampling &amp; PD (7 Days)</h1>
                                        <p>We transform your vision into physical reality through rapid prototyping and tech-pack development. Within just 7 days, we deliver high-quality physical prototypes and lab dips, ensuring your design is technically precise before mass production begins.</p>
                                    </li>
                                    <li id="step3">
                                        <img src="{{ asset('images/steps/Order-execution.jpg') }}" />
                                        <h1>Order Execution (60 Days)</h1>
                                        <p>Once production starts, we maintain a strict 60-day timeline to ensure your collection moves from concept to container in record time. This phase involves rigorous monitoring of every manufacturing stage, including yarn sourcing, knitting, and dyeing.</p>
                                    </li>
                                    <li id="step4">
                                        <img src="{{ asset('images/steps/Quality-gate.jpg') }}" />
                                        <h1>Quality Gate (100%)</h1>
                                        <p>Our &quot;3-Gate&quot; defense protocol provides total peace of mind through a zero-defect supply chain. We conduct multi-stage inline inspections and a final statistical audit to AQL 1.5/2.5 standards to verify that every item is retail-ready.</p>
                                    </li>
                                    <li id="step5">
                                        <img src="{{ asset('images/steps/Logistics.jpg') }}" />
                                        <h1>Logistics (100%)</h1>
                                        <p>We guarantee a seamless export experience by managing all documentation and complex logistics requirements. Our commitment to 100% on-time shipments ensures reliable global delivery to your warehouses across the UK, EU, USA, and beyond.</p>
                                    </li>
                                </ul>
                            </div>
                            <div id="grad_top"></div>
                            <div id="grad_bottom"></div>
                            <a href="#" id="next">+</a>
                            <a href="#" id="prev" style="margin-bottom: 20px;">-</a>
                        </div>

                        
                        <!-- client-list -->
                        {{--<div class="fl-wrap client-list">
                            <ul class="">
                                <li><a href="#" target="_blank"><img src="images/clients/4.png" alt=""></a></li>
                                <li><a href="#" target="_blank"><img src="images/clients/2.png" alt=""></a></li>
                                <li><a href="#" target="_blank"><img src="images/clients/4.png" alt=""></a></li>
                                <li><a href="#" target="_blank"><img src="images/clients/2.png" alt=""></a></li>
                            </ul>
                            <!-- client-list end-->
                        </div>--}}
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


        (function () {
                const datesScroller = document.getElementById('datesScroller');
                const issuesScroller = document.getElementById('issuesScroller');
                const dateLinks = Array.from(datesScroller.querySelectorAll('a'));
                const issueItems = Array.from(issuesScroller.querySelectorAll('li'));

                const nextBtn = document.getElementById('next');
                const prevBtn = document.getElementById('prev');

                // Map date href (e.g. "#1900") to the corresponding index.
                const idToIndex = new Map();
                dateLinks.forEach((a, idx) => {
                    const href = a.getAttribute('href') || '';
                    const id = href.startsWith('#') ? href.slice(1) : href;
                    if (id) idToIndex.set(id, idx);
                });

                // Each date row is 100px tall and each issue panel is 600px tall (from CSS).
                const DATE_ROW_HEIGHT = 100;
                const ISSUE_HEIGHT = 600;

                const datesWindowHeight = document.getElementById('dates').clientHeight || 600;
                const VISIBLE_DATE_COUNT = Math.max(1, Math.floor(datesWindowHeight / DATE_ROW_HEIGHT));

                let currentIndex = Math.max(0, dateLinks.findIndex(a => a.classList.contains('selected')));

                function setArrowState() {
                    const isFirst = currentIndex <= 0;
                    const isLast = currentIndex >= dateLinks.length - 1;

                    if (prevBtn) {
                        prevBtn.classList.toggle('disabled', isFirst);
                        prevBtn.setAttribute('aria-disabled', String(isFirst));
                    }
                    if (nextBtn) {
                        nextBtn.classList.toggle('disabled', isLast);
                        nextBtn.setAttribute('aria-disabled', String(isLast));
                    }
                }

                function setSelectedIndex(nextIndex, { animate } = { animate: true }) {
                    const idx = Math.max(0, Math.min(dateLinks.length - 1, nextIndex));
                    currentIndex = idx;

                    // Selected classes (used by your CSS rules).
                    dateLinks.forEach(a => a.classList.remove('selected'));
                    issueItems.forEach(li => li.classList.remove('selected'));

                    dateLinks[idx].classList.add('selected');
                    issueItems[idx].classList.add('selected');

                    // Scroll date window: keep the selected item within the visible block.
                    const maxStart = Math.max(0, dateLinks.length - VISIBLE_DATE_COUNT);
                    const startIndex = Math.min(maxStart, Math.max(0, idx - (VISIBLE_DATE_COUNT - 1)));

                    datesScroller.style.transition = animate ? '' : 'none';
                    issuesScroller.style.transition = animate ? '' : 'none';

                    datesScroller.style.transform = 'translateY(' + (-startIndex * DATE_ROW_HEIGHT) + 'px)';
                    issuesScroller.style.transform = 'translateY(' + (-idx * ISSUE_HEIGHT) + 'px)';

                    setArrowState();
                }

                // Click on dates to jump.
                dateLinks.forEach((a, idx) => {
                    a.addEventListener('click', (e) => {
                        e.preventDefault();
                        setSelectedIndex(idx, { animate: true });
                    });
                });

                // Bottom + and top - navigation.
                if (nextBtn) {
                    nextBtn.addEventListener('click', (e) => {
                        e.preventDefault();
                        if (nextBtn.classList.contains('disabled')) return;
                        setSelectedIndex(currentIndex + 1, { animate: true });
                    });
                }

                if (prevBtn) {
                    prevBtn.addEventListener('click', (e) => {
                        e.preventDefault();
                        if (prevBtn.classList.contains('disabled')) return;
                        setSelectedIndex(currentIndex - 1, { animate: true });
                    });
                }

                // Initial positioning: show years up to 1977 in the window.
                setSelectedIndex(currentIndex, { animate: false });
                setArrowState();
            })();
    </script>
@endsection
