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
                    <a href="#" class="gallery-filter" data-filter=".accessories">Accessories</a>
                    <a href="#" class="gallery-filter" data-filter=".denim">Denim</a>
                    <a href="#" class="gallery-filter" data-filter=".home-textiles">Home Textiles</a>
                    <a href="#" class="gallery-filter" data-filter=".knitewear">Knitewear</a>
                    <a href="#" class="gallery-filter" data-filter=".outerwear">Outerwear</a>
                    <a href="#" class="gallery-filter" data-filter=".sweaters">Sweaters</a>
                    <a href="#" class="gallery-filter" data-filter=".workwear">Workwear</a>
                    <a href="#" class="gallery-filter" data-filter=".woven">Woven</a>
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
                <div class="scroll-notifer">
                    <div class="scroll-button">
                        <button id="scrollBtn" class="mouse-icon"></button>
                    </div>
                </div>
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
                    <div class="gallery-item accessories">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/20.jpg" alt="">
                            <div class="grid-det">
                                <a href="images/folio/20.jpg" class="grid-media-zoom image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"> Accessories</a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Bags<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item accessories">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/21.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/21.jpg" class="grid-media-zoom image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"> Accessories</a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Caps<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item denim">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/6.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/6.jpg" class="grid-media-zoom image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"> Denim</a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Shirts<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item denim">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/7.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/7.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"> Denim</a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Pants<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item denim knitewear">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/8.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/8.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"> Denim</a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Pants<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item sweaters">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/9.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/9.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"> Sweaters</a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Sweaters<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item denim">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/10.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/10.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"> Denim</a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Pants<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item workwear">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/31.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/31.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"> Workwear</a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Workwear<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item workwear">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/32.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/32.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"> Workwear</a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Workwear<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item workwear">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/33.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/33.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"> Workwear</a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Workwear<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item workwear">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/34.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/34.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"> Workwear</a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Workwear<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item sweaters">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/17.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/17.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"> Sweaters</a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Sweaters<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item sweaters">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/13.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/13.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"> Sweaters</a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Sweaters<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                
                    <!-- gallery-item-->
                    <div class="gallery-item knitewear">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/22.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/22.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#"> Knitewear </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Polo T-Shirts<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item woven">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/35.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/35.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#"> Woven </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Kids Wear<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item woven">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/36.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/36.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#"> Woven </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Tops<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item woven">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/37.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/37.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#"> Woven </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Pants<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item woven">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/38.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/38.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#"> Woven </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Shirts<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item knitewear">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/23.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/23.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#"> Knitewear </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Inners<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item knitewear">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/24.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/24.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#"> Knitewear </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Hoodies<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item home-textiles">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/25.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/25.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#"> Home Textiles</a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Home Textiles<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item home-textiles">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/26.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/26.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#"> Home Textiles </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Home Textiles<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item outerwear">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/27.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/27.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#"> Outerwear </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Overcoats<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item outerwear">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/28.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/28.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#"> Outerwear </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Jackets<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item outerwear">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/29.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/29.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#"> Outerwear </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Overcoats<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item outerwear">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="images/folio/30.jpg"    alt="">
                            <div class="grid-det">
                                <a href="images/folio/30.jpg" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#"> Outerwear </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Jackets<i class="fal fa-long-arrow-right"></i></a>
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

    <script>
        document.getElementById('scrollBtn').addEventListener('click', function() {
            // Option B: Scroll down by the height of the current window (100vh)
            window.scrollBy({
                top: window.innerHeight,
                left: 0,
                behavior: 'smooth'
            });
        });
    </script>
@endsection
