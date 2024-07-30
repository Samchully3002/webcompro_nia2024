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
            <div class="business-wrapper">
                <div class="flipbook-view">
                    <div class="container">
                        <button onclick="prevFlip()">Prev</button>
                        <div id="flipbook" class="flipbook">
                        @foreach($content as $page)
                            <div style="background-image:url({{ asset($page) }})"></div>
                        @endforeach
                        </div>
                        <button onclick="nextFlip()">Next</button>
                    </div>
                    <div class="btn-flipbook">
                        <button onclick="openFullscreen()"><img src="{{ asset('frontend/images/icon/fb_fullscreen.svg') }}"/></button>
                        <img src="{{ asset('frontend/images/icon/fb_zoom_in.svg') }}"/>
                        <img src="{{ asset('frontend/images/icon/fb_zoom_out.svg') }}"/>
                        <img src="{{ asset('frontend/images/icon/fb_print.svg') }}"/>
                        <button id="downloadButton"><img src="{{ asset('frontend/images/icon/fb_download.svg') }}"/>
                        <a id="downloadLink" href="{{asset('frontend/INABUSAPPS.pdf')}}" download style="display: none;"></a>
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
        <script type="text/javascript" src="{{ asset('frontend/extras/modernizr.2.5.3.min.js') }}"></script>
        <script>
            document.getElementById('downloadButton').addEventListener('click', function() {
                document.getElementById('downloadLink').click();
            });
            function prevFlip(){
                $('#flipbook').turn('previous');
            };
            function nextFlip(){
                $('#flipbook').turn('next');
            };
            function loadApp() {
                $('.flipbook').turn({
                    aspectRatio:16/9,
                    width:1400,
                    height:400,
                    elevation: 50,
                    gradients: true,
                    autoCenter: true,
                    when:{
                        missing: function (e, pages) {
                            for (var i = 0; i < pages.length; i++) {
                                $('.flipbook').turn('addPage',page[pages[i]],pages[i]);
                            }
                        }
                    }
                });
                $(window).bind('keydown', function(e){
                    if (e.keyCode==37)
                        $('#flipbook').turn('previous');
                    else if (e.keyCode==39)
                        $('#flipbook').turn('next');
                });

            //Initialize the zoom viewport
                $('.flipbook-view').zoom({
                        flipbook: $('.flipbook')
                });

                //Binds the single tap event to the zoom function
                $('.flipbook-view').bind('zoom.tap', zoomTo);

                //Optional, calls the resize function when the window changes, useful when viewing on tablet or mobile phones
                $(window).resize(function() {
                    resizeViewport();
                }).bind('orientationchange', function() {
                    resizeViewport();
                });

                //Must be called initially to setup the size
                resizeViewport();
            }

            function page(num){
                var elem = $('<div />',{}).html('<div><img src="book_'+num+'.jpg></div>');
                return elem;
            }

            function zoomTo(event) {
                setTimeout(function() {
                    if ($('.flipbook-view').data().regionClicked) {
                        $('.flipbook-view').data().regionClicked = false;
                    } else {
                        if ($('.flipbook-view').zoom('value')==1) {
                            $('.flipbook-view').zoom('zoomIn', event);
                        } else {
                            $('.flipbook-view').zoom('zoomOut');
                        }
                    }
                }, 1);
            }

            var elem = document.getElementById("flipbook");

            function openFullscreen() {

            if (elem.requestFullscreen) {
                // elem.requestFullscreen();
                e.preventDefault();
                $("#flipbook").turn("zoom", 1.5);

            } else if (elem.mozRequestFullScreen) { /* Firefox */
                // elem.mozRequestFullScreen();
                e.preventDefault();
                $("#flipbook").turn("zoom", 1.5);
            } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
                // elem.webkitRequestFullscreen();
                e.preventDefault();
                $("#flipbook").turn("zoom", 1.5);
            } else if (elem.msRequestFullscreen) { /* IE/Edge */
                // elem.msRequestFullscreen();
                e.preventDefault();
                $("#flipbook").turn("zoom", 1.5);
            }
            }

            function resizeViewport() {
                var width = $(window).width(),
                    height = $(window).height(),
                    options = $('.flipbook').turn('options');

                $('.flipbook-view').css({
                    width: width,
                    height: height
                }).zoom('resize');
            }
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

             function sendCompro() {
                var sendTo = "info@nia.co.id";
                var subject= "Quotation Company Profile";
                const body = `Hello NIA! \n\n I want to ask quotation about website design and development for company profile.\n\n Thank you NIA`;
                // Construct the mailto link
                var mailtoLink = 'mailto:'+sendTo+'?subject='+subject+'&body='+body;

                window.open(mailtoLink, '_blank');
            }

            function sendMedia() {
                var sendTo = "info@nia.co.id";
                var subject= "Quotation Media News Website";
                const body = `Hello NIA! \n\n I want to ask quotation about media news website design and development.\n\n Thank you NIA`;
                // Construct the mailto link
                var mailtoLink = 'mailto:'+sendTo+'?subject='+subject+'&body='+body;

                window.open(mailtoLink, '_blank');
            }

            function sendEcommerce() {
                var sendTo = "info@nia.co.id";
                var subject= "Quotation Ecommerce Website";
                const body = `Hello NIA! \n\n I want to ask quotation about eCommerce website design and development.\n\n Thank you NIA`;
                // Construct the mailto link
                var mailtoLink = 'mailto:'+sendTo+'?subject='+subject+'&body='+body;

                window.open(mailtoLink, '_blank');
            }

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

