@extends('layouts.guest')

@section('title', 'Home')

@section('keywords', '')

@section('description', '')

@section('content')
    <div class="content" data-pagetitle="Portfolio">
        <div class="fixed-bottom-panel">
            <div class="gallery-filters-wrap">
                <div class="gallery-filters init_hidden_filter">
                    <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">All products</a>
                    <a href="#" class="gallery-filter" data-filter=".web">Knitwear</a>
                    <a href="#" class="gallery-filter" data-filter=".photography">Woven</a>
                    <a href="#" class="gallery-filter" data-filter=".branding">Denim</a>
                    <a href="#" class="gallery-filter" data-filter=".uides">Sweater</a>
                </div>
                <div class="psn_button act-filter"><i class="fal fa-sort"></i> FIlter </div>
            </div>
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
            <!--fixed-column-wrap-content-->
            <div class="fixed-column-wrap-content">
                <div class="bg"  data-bg="images/bg/13.jpg"></div>
                <div class="overlay"></div>
                <div class="progress-bar-wrap bot-element">
                    <div class="progress-bar"></div>
                </div>
                <!--fixed-column-wrap_title-->
                <div class="fixed-column-wrap_title first-tile_load">
                    <h2>Product<br>Showcase</h2>
                    <p>A Diverse Portfolio of Technical Precision and Sustainable Style</p>
                </div>
                <!--fixed-column-wrap_title end-->
                <div class="fixed-column-dec"></div>
                <div class="fixed-column-linedec"></div>
                <div class="scroll-notifer">Scroll Down  </div>
                <div class="folio-counter fcc_column">
                    <div class="num-album"><span></span></div>
                    <div class="all-album"></div>
                </div>
            </div>
            <!--fixed-column-wrap-content end-->
        </div>
        <!--fixed-column-wrap end-->
        <!--column-wrap-->
        <div class="column-wrap dark-bg">
            <!--column-wrap-container -->
            <div class="column-wrap-container no-pad-cwc fl-wrap">
                <!-- portfolio start -->
                <div class="gallery-items min-pad    fl-wrap  " id="port-scroll">
                    <!-- gallery-item-->
                    <div class="gallery-item  web branding">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/1.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/1.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> Branding</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Fitness Studio Website<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item  photography uides">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/2.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/2.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> UI/UX</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Architecture Agensy<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item  web">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/3.jpg"    alt="">
                            <div class="grid-det">
                                <a href="https://vimeo.com/6698875" class="grid-media-zoom   image-popup"><i class="far fa-play"></i></a>
                                <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> Photography</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Video Project<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item gallery-item-second  photography">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/4.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/4.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> Branding</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Photography Project<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item  uides web">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/5.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/5.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> Branding</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Kent Brant Concept<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item    branding">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/6.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/6.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> Branding</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Corporate website<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item  uides">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/7.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/7.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> Branding</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Travel Agensy<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item  web  photography">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/8.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/8.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> Branding</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Sport  Agensy<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item  uides">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/9.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/9.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> UI/UX</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Barbershop Website<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item  web branding">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/10.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/10.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> Branding</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Online Shop Website<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item  photography branding">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/17.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/17.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Photography  </a> <a href="#"> Branding</a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Photography Studio<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item web branding">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/18.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/18.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Development</a> <a href="#"> Design </a></div>
                                <div class="grid-det-item">
                                    <a href="portfolio-single.html" class="ajax grid-det_link">Vintage Branding<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                </div>
                <!-- portfolio end -->
            </div>
            <!--column-wrap-container end -->
        </div>
        <!--column-wrap end-->
        <div class="to-top-btn to-top"><i class="fal fa-long-arrow-up"></i></div>
    </div>
@endsection
