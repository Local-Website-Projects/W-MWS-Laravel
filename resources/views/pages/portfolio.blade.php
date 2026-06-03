@extends('layouts.guest')

@section('title', 'Home')

@section('keywords', '')

@section('description', '')

@push('styles')
<style>
    .hero-section-dec.color-bg{
        display:none;
    }
</style>
@endpush

@section('content')

    <div class="content" data-pagetitle="Portfolio">
        <div class="fixed-bottom-panel">
            <div class="gallery-filters-wrap">
                <div class="gallery-filters init_hidden_filter">
                    <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">All products</a>
                    <a href="#" class="gallery-filter" data-filter=".knitewear">Knitewear</a>
                    <a href="#" class="gallery-filter" data-filter=".woven">Woven</a>
                    <a href="#" class="gallery-filter" data-filter=".denim">Denim</a>
                    <a href="#" class="gallery-filter" data-filter=".sweaters">Sweaters</a>
                    <a href="#" class="gallery-filter" data-filter=".outerwear">Outerwear</a>
                    <a href="#" class="gallery-filter" data-filter=".workwear">Workwear</a>
                    <a href="#" class="gallery-filter" data-filter=".home-textiles">Home Textiles</a>
                    <a href="#" class="gallery-filter" data-filter=".accessories">Accessories</a>   
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
                <div class="bg"  data-bg="images/bg/13.webp"></div>
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
                            <img  src="{{ asset('images/folio/accessories/1.png') }}" alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/accessories/1.png') }}" class="grid-media-zoom image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"> </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Accessories<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item accessories">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{ asset('images/folio/accessories/2.png') }}" alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/accessories/2.png') }}" class="grid-media-zoom image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"> </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Accessories<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item accessories">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{ asset('images/folio/accessories/3.png') }}" alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/accessories/3.png') }}" class="grid-media-zoom image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"> </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Accessories<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item denim">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{ asset('images/folio/denim/1.png') }}" alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/denim/1.png') }}" class="grid-media-zoom image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"> </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Denim<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item denim">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{ asset('images/folio/denim/2.png') }}"    alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/denim/2.png') }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"> </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Denim<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item denim">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{ asset('images/folio/denim/3.png') }}"    alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/denim/3.png') }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"> </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Denim<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item denim">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{ asset('images/folio/denim/4.png') }}"    alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/denim/4.png') }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"> </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Denim<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item sweaters">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{ asset('images/folio/sweaters/1.png') }}"    alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/sweaters/1.png') }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"></a></div>
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
                            <img  src="{{ asset('images/folio/sweaters/2.png') }}"    alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/sweaters/2.png') }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"></a></div>
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
                            <img  src="{{ asset('images/folio/sweaters/3.png') }}"    alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/sweaters/3.png') }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"></a></div>
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
                            <img  src="{{ asset('images/folio/sweaters/4.jpeg') }}"    alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/sweaters/4.jpeg') }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"></a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Sweaters<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    
                    <!-- gallery-item-->
                    <div class="gallery-item workwear">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{ asset('images/folio/workwear/1.png') }}"    alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/workwear/1.png') }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"></a></div>
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
                            <img  src="{{ asset('images/folio/workwear/2.png') }}"    alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/workwear/2.png') }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio  </a> <a href="#"></a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Workwear<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item knitewear">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{ asset('images/folio/knitwear/1.png') }}"    alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/knitwear/1.png') }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#">  </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Knitwear<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item knitewear">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{ asset('images/folio/knitwear/2.png') }}"    alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/knitwear/2.png') }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#">  </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Knitwear<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item knitewear">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{ asset('images/folio/knitwear/3.png') }}"    alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/knitwear/3.png') }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#">  </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Knitwear<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item knitewear">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{ asset('images/folio/knitwear/4.png') }}"    alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/knitwear/4.png') }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#">  </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Knitwear<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->



                    <!-- gallery-item-->
                    <div class="gallery-item woven">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{ asset('images/folio/woven/1.png') }}"    alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/woven/1.png') }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#">  </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Woven<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item woven">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{ asset('images/folio/woven/2.png') }}"    alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/woven/2.png') }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#">  </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Woven<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item woven">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{ asset('images/folio/woven/3.png') }}"    alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/woven/3.png') }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#">  </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Woven<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item woven">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{ asset('images/folio/woven/4.png') }}"    alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/woven/4.png') }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#">  </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Woven<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item woven">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{ asset('images/folio/woven/5.jpeg') }}"    alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/woven/5.jpeg') }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#">  </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Woven<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    
                    <!-- gallery-item-->
                    <div class="gallery-item home-textiles">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{ asset('images/folio/hometextile/1.jpeg') }}"    alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/hometextile/1.jpeg') }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#"> </a></div>
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
                            <img  src="{{ asset('images/folio/outerwear/1.jpeg') }}"    alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/outerwear/1.jpeg') }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#"> </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Outerwears<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item outerwear">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{ asset('images/folio/outerwear/2.png') }}"    alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/outerwear/2.png') }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#"> </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Outerwears<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item outerwear">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="{{ asset('images/folio/outerwear/3.png') }}"    alt="">
                            <div class="grid-det">
                                <a href="{{ asset('images/folio/outerwear/3.png') }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                <div class="grid-det_category"><a href="#">Portfolio</a> <a href="#"> </a></div>
                                <div class="grid-det-item">
                                    <a href="#" class="ajax grid-det_link">Outerwears<i class="fal fa-long-arrow-right"></i></a>
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
