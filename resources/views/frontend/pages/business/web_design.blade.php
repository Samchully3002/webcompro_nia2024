<!DOCTYPE html>
<html lang="en">

@include('frontend.includes.head')
    <link rel="stylesheet" href="{{asset('frontend/css/business.css')}}"/>
    </head>

    <body>
    @include('frontend.includes.header')
    <!-- <div data-include="component/header"></div> -->
         <div class="page page-scroll page-in">
            <!-- bg-wrapper start -->
            <div class="bg-wrapper bisnis5">
                <div class="text-box">
                    <h1 class="appear">{{ __('wdd') }}</h1>
                    <p class="appear">{{ __('wdd-head') }}</p>
                </div>
            </div>
            <!-- bg-wrapper end -->

            <!-- section-business start -->
            <div id="flipbookWrapper" class="business-wrapper">
                <div  class="flipbook-view">
                    <div class="btn-flipbook" style="visibility: hidden;">
                        <img src="{{ asset('frontend/images/icon/close-circle.svg') }}"/>
                    </div>
                    <div id="flipContainer" class="container">
                        <button onclick="prevFlip()"><img src="{{ asset('frontend/images/icon/arrow-left.svg') }}"/></button>
                        <div id="flipbook" class="flipbook">
                            @foreach($content as $page)
                                {{-- <div id="img_flip" class="img_flip" style="background-image:url({{ asset($page) }});"></div> --}}
                                <div>
                                    <img id="flipImg" class="img_flip" src="{{ asset($page) }}"/>
                                </div>

                            @endforeach
                        </div>
                        <button onclick="nextFlip()"><img src="{{ asset('frontend/images/icon/arrow-right.svg') }}"/></button>
                        <iframe
                            src="{{asset('frontend/WebDevProposalPricelist.pdf')}}" id="myFrame"
                            style="position: absolute;width:0;height:0;border:0;">
                        </iframe>
                    </div>
                    <div class="container-mobile">
                        <button class="btn_prev_img" onclick="plusFlip(-1)">&#8249;</button>
                        @foreach($content as $page)
                            <div>
                                <img id="imgFlip1" class="fade mySlides5" src="{{ asset($page) }}" alt="image samchully pay"/>
                            </div>
                        @endforeach
                        <button class="btn_next_img" onclick="plusFlip(1)">&#8250;</button>
                    </div>
                    <div class="btn-flipbook">
                        <img onclick="fullView()" style="cursor: pointer" src="{{ asset('frontend/images/icon/fb_fullscreen.svg') }}"/>
                        {{-- <img id="btn_zoomIn" onclick="zoomIn()" style="cursor: pointer;" src="{{ asset('frontend/images/icon/fb_zoom_in.svg') }}"/>
                        <img id="btn_zoomOut" onclick="zoomOut()" style="cursor: pointer;" src="{{ asset('frontend/images/icon/fb_zoom_out.svg') }}"/> --}}
                        <img onclick="print()" style="cursor: pointer;" src="{{ asset('frontend/images/icon/fb_print.svg') }}"/>
                        <img id="downloadButton" style="cursor: pointer;" src="{{ asset('frontend/images/icon/fb_download.svg') }}"/>
                        <a id="downloadLink" href="{{asset('frontend/WebDevProposalPricelist.pdf')}}" download style="display: none;"></a>
                    </div>
                </div>
            </div>
            <!-- section-business end -->

            <!-- section-wrapper start -->
            <div class="pricing-wrapper">
                <div class="card">
                    <div class="title">
                        <span>{{ __('compro') }}</span>
                        <p>{{ __('compro-content') }}</p>
                    </div>
                    <div class="list">
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('compro1') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('compro2') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('compro3') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('compro4') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('compro5') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('compro6') }}</p>
                    </div>
                    <button onclick="sendCompro()">{{ __('btn-contact') }}</button>
                </div>
                <div class="card">
                    <div class="title">
                        <span>{{ __('media') }}</span>
                        <p>{{ __('media-content') }}</p>
                    </div>
                    <div class="list">
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('media1') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('media2') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('media3') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('media4') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('media5') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('media6') }}</p>
                    </div>
                    <button onclick="sendMedia()">{{ __('btn-contact') }}</button>
                </div>
                <div class="card">
                    <div class="title">
                        <span>{{ __('ecommerce') }}</span>
                        <p>{{ __('ecommerce-content') }}</p>
                    </div>
                    <div class="list">
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('ecommerce1') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('ecommerce2') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('ecommerce3') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('ecommerce4') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('ecommerce5') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('ecommerce6') }}</p>
                    </div>
                    <button onclick="sendEcommerce()">{{ __('btn-contact') }}</button>
                </div>
            </div>
            <!-- section-wrapper end -->

            <!-- section-streamlined start -->
            {{-- <div class="dekstop-streamlined">
                <div class="our-history dekstop">
                <div class="box">
                    <!-- Left Content -->
                    <div class="left-box">
                        <div class="container-imageyear">
                            <h1>{{__ ('streamlined') }}</h1>
                        </div>
                    </div>
                    <!-- Right Content -->
                    <div class="right-box">
                        <div class="wrapper">
                            <span>01</span>
                            <div class="text">
                                <span>{{ __('pro') }}</span>
                                <p>{{ __('pro-content') }}</p>
                            </div>
                        </div>
                        <div class="wrapper">
                            <span>02</span>
                            <div class="text">
                                <span>{{ __('str') }}</span>
                                <p>{{ __('str-content') }}</p>
                            </div>
                        </div>
                        <div class="wrapper">
                            <span>03</span>
                            <div class="text">
                                <span>{{ __('des') }}</span>
                                <p>{{ __('des-content') }}</p>
                            </div>
                        </div>
                        <div class="wrapper">
                            <span>04</span>
                            <div class="text">
                                <span>{{ __('dev') }}</span>
                                <p>{{ __('dev-content') }}</p>
                            </div>
                        </div>
                        <div class="wrapper">
                            <span>05</span>
                            <div class="text">
                                <span>{{ __('qa') }}</span>
                                <p>{{ __('qa-content') }}</p>
                            </div>
                        </div>
                        <div class="wrapper">
                            <span>06</span>
                            <div class="text">
                                <span>{{ __('lau') }}</span>
                                <p>{{ __('lau-content') }}</p>
                            </div>
                        </div>
                        <div class="wrapper">
                            <span>07</span>
                            <div class="text">
                                <span>{{ __('as') }}</span>
                                <p>{{ __('as-content') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             </div>

            <div class="mobile-streamlined">
                <div class="our-history mobile">
                <div class="box">
                    <div class="right-box">
                        <h1>{{__ ('streamlined') }}</h1>
                        <div class="wrapper">
                            <span>01</span>
                            <div class="text">
                                <span>{{ __('pro') }}</span>
                                <p>{{ __('pro-content') }}</p>
                            </div>
                        </div>
                        <div class="wrapper">
                            <span>02</span>
                            <div class="text">
                                <span>{{ __('str') }}</span>
                                <p>{{ __('str-content') }}</p>
                            </div>
                        </div>
                        <div class="wrapper">
                            <span>03</span>
                            <div class="text">
                                <span>{{ __('des') }}</span>
                                <p>{{ __('des-content') }}</p>
                            </div>
                        </div>
                        <div class="wrapper">
                            <span>04</span>
                            <div class="text">
                                <span>{{ __('dev') }}</span>
                                <p>{{ __('dev-content') }}</p>
                            </div>
                        </div>
                        <div class="wrapper">
                            <span>05</span>
                            <div class="text">
                                <span>{{ __('qa') }}</span>
                                <p>{{ __('qa-content') }}</p>
                            </div>
                        </div>
                        <div class="wrapper">
                            <span>06</span>
                            <div class="text">
                                <span>{{ __('lau') }}</span>
                                <p>{{ __('lau-content') }}</p>
                            </div>
                        </div>
                        <div class="wrapper">
                            <span>07</span>
                            <div class="text">
                                <span>{{ __('as') }}</span>
                                <p>{{ __('as-content') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div> --}}

             <!-- section-streamlined end -->
        </div>

        @include('frontend.includes.footer')
        <script type="text/javascript" src="{{ asset('frontend/js/modernizr.2.5.3.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/flipbook/turn.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/flipbook/turn.html4.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/pages/business.js')}}"></script>
        <script>

            var elem = document.getElementById("flipbookWrapper");
            var imgFlip = document.getElementById("flipImg");
            var zoom_el = document.getElementById("flipContainer");
            var zom1= true;
            var zom2= true;
            var zom3= true;

            var slideIndex = 1;
            showFlip(slideIndex);

            function plusFlip(n) {
                showFlip(slideIndex += n);
            }

            function showFlip(n) {
            var i;
            var x1 = document.getElementsByClassName("mySlides5");
            if (n > x1.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x1.length}
            for (i = 0; i < x1.length; i++) {
                x1[i].style.display = "none";
            }
            x1[slideIndex-1].style.display = "block";
        }

            function zoomIn() {

                if (zom1 == true) {
                    let currWidth = zoom_el.clientWidth;
                    zoom_el.style.MozTransform = (currWidth + 100) + "px";
                    zoom_el.style.WebkitTransform = (currWidth + 100) + "px";
                    zom1 = false
                    zom2 = true
                    zom3 = true
                } else if (zom2 == true){
                    let currWidth = zoom_el.clientWidth;
                    zoom_el.style.MozTransform = (currWidth + 100) + "px";
                    zoom_el.style.WebkitTransform = (currWidth + 100) + "px";
                    zom1 = false
                    zom2 = false
                    zom3 = true
                } else if (zom3 == true){
                    let currWidth = zoom_el.clientWidth;
                    zoom_el.style.MozTransform = (currWidth + 100) + "px";
                    zoom_el.style.WebkitTransform = (currWidth + 100) + "px";
                    zom1 = false
                    zom2 = false
                    zom3 = false
                } else {
                    document.getElementById("btn_zoomIn").disabled = true;
                }
            }

            function zoomOut() {
                // $('#flipbook').turn('zoom', 0.5, 0);

                if (zom3 == false) {
                    zoom_el.style.zoom = 1.5;
                    zoom_el.style.MozTransform = 'scale(1.5)';
                    zoom_el.style.WebkitTransform = 'scale(1.5)';
                    autoCenter: true
                    zom1 = false
                    zom2 = false
                    zom3 = true
                } else if (zom2 == false){
                    zoom_el.style.zoom= 1.2;
                    zoom_el.style.MozTransform = 'scale(1.2)';
                    zoom_el.style.WebkitTransform = 'scale(1.2)';
                    autoCenter: true
                    zom1 = false
                    zom2 = true
                    zom3 = true
                } else if (zom1 == false){
                    zoom_el.style.zoom= 1;
                    zoom_el.style.MozTransform = 'scale(1)';
                    zoom_el.style.WebkitTransform = 'scale(1)';
                    autoCenter: true
                    zom1 = true
                    zom2 = true
                    zom3 = true
                } else {
                    document.getElementById("btn_zoomOut").disabled = true;
                }
            }

            function canToggleFullscreen() {
                return !!(document.fullscreenEnabled || document.webkitFullscreenEnabled || document.msFullscreenEnabled);
            }
            /** return true if fullScreenElement exists, indicating the document is in full screen mode. */
            function isFullscreen() {
                return !!(document.fullScreenElement || document.webkitFullscreenElement || document.msFullscreenElement);
            }

            function getStatusFS() {
                return document.fullscreenElement || document.webkitFullscreenElement || document.mozFullScreenElement || document.msFullscreenElement;
            }

            function isFullscreenEnable(elem) {
                return getStatusFS() === elem;
            }

            /** If the browser is capable, requests to be in full screen mode. */
            function enterFullscreen() {
                // var page = document.documentElement
                const fullScreenFn = elem.requestFullscreen || elem.webkitRequestFullscreen || elem.msRequestFullscreen;
                if (fullScreenFn) {
                    fullScreenFn.apply(elem);
                }
            }

            /** If the browser is capable, exits full screen mode */
            function exitFullscreen() {
                const exitFullScreenFn = document.exitFullScreen || document.webkitExitFullscreen || document.msExitFullscreen;
                if (exitFullScreenFn) {
                    exitFullScreenFn.apply(document);
                }
            }

            /** Toggles between full screen modes.  The changing of inner text */
            function fullView() {
                if (!canToggleFullscreen()) {
                    console.log("unvaible");
                }
                if (!isFullscreen()) {
                    enterFullscreen();
                    console.log("cancel");
                    imgFlip.classList.add('fs');
                    // zoom_el.style.width = '2000px';
                    // zoom_el.style.height = '600px';
                } else {
                    exitFullscreen();
                    console.log("enter");
                    zoom_el.style.width = '1600px';
                    zoom_el.style.height = '400px';
                    // imgFlip.style.backgroundSize = '1600px' + ' 400px';
                    // zoom_el.style.WebkitTransform = 'scale(1)';
                }
            }

            function loadApp() {
                function updateFlipbookSize() {
                    var width = $('.flipbook').width();
                    var height = $('.flipbook').height();

                    $('.flipbook').turn('size', width, height);
                }

                $('.flipbook').turn({
                    aspectRatio: 16 / 9,
                    width: $('.flipbook').width(),
                    height: $('.flipbook').height(),
                    elevation: 50,
                    gradients: true,
                    autoCenter: true,
                });

                // Update flipbook size on window resize
                $(window).on('resize', function() {
                    updateFlipbookSize();
                });

                // Bind keyboard events for navigation
                $(window).bind('keydown', function(e) {
                    if (e.keyCode === 37) {
                        $('#flipbook').turn('previous');
                    } else if (e.keyCode === 39) {
                        $('#flipbook').turn('next');
                    }
                });

                // Initial size update
                updateFlipbookSize();
            }
            function prevFlip(){
                $('#flipbook').turn('previous');
            };
            function nextFlip(){
                $('#flipbook').turn('next');
            };

            function zoomTo(event) {
                setTimeout(function() {
                    if ($('#flipbook').data().regionClicked) {
                        $('#flipbook').data().regionClicked = false;
                    } else {
                        if ($('#flipbook').zoom('value')==1) {
                            $('#flipbook').zoom('zoomIn', event);
                        } else {
                            $('#flipbook').zoom('zoomOut');
                        }
                    }
                }, 1);
            }

            // function resizeViewport() {
            //     var width = $(window).width(),
            //         height = $(window).height(),
            //         options = $('#flipbook').turn('options');

            //     $('#flipbook').css({
            //         width: width,
            //         height: height
            //     }).zoom('resize');
            // }
            yepnope({
                test : Modernizr.csstransforms,
                yep: ['{{ asset('frontend/lib/turn.js') }}'],
                nope: ['{{ asset('frontend/lib/turn.html4.min.js') }}'],
                both: ['{{ asset('frontend/css/business.css') }}'],
                complete: loadApp
            });

            document.addEventListener('DOMContentLoaded', function() {
                const appearElements = document.querySelectorAll('.appear');

                function appearOnScroll() {
                    appearElements.forEach((element, index) => {
                        // Jika elemen sudah memiliki class 'active', abaikan
                        if (element.classList.contains('active')) {
                            return;
                        }

                        if (isElementInViewport(element)) {
                            setTimeout(() => {
                                element.classList.add('active');
                            }, index * 200); // Delay munculnya setiap elemen
                        } else {
                            // Hapus class 'active' saat elemen keluar dari viewport
                            element.classList.remove('active');
                        }
                    });
                }

                function isElementInViewport(el) {
                    const rect = el.getBoundingClientRect();
                    return (
                        rect.top >= 0 &&
                        rect.left >= 0 &&
                        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                    );
                }

                // Handler untuk event scroll
                window.addEventListener('scroll', appearOnScroll);

                // Handler untuk event resize (jika ada perubahan ukuran viewport)
                window.addEventListener('resize', appearOnScroll);

                // Panggil sekali ketika halaman dimuat (jika elemen sudah ada di viewport pada awalnya)
                appearOnScroll();
            });

            $(document).ready(function () {
            $(document).on("scroll", function () {
                var windowHeight = $(window).height(); // Tinggi jendela browser
                var scrollPosition = $(document).scrollTop() + windowHeight / 2; // Scroll position di tengah jendela browser

                $(".wrapper").each(function () {
                    let elementOffsetTop = $(this).offset().top;

                    if (elementOffsetTop <= scrollPosition) {
                        // Tambahkan kelas 'active' untuk mengatur opacity ke 1
                        $(this).addClass("active");
                    } else {
                        // Hapus kelas 'active' untuk mengatur opacity ke 0.2
                        $(this).removeClass("active");
                    }
                });
            });
        });
        </script>
    </body>
</html>

