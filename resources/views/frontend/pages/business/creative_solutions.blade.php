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
            <div class="bg-wrapper bisnis6">
                <div class="text-box">
                    <h1 class="appear">{{ __('cs') }}</h1>
                    <p class="appear">{{ __('cs-head') }}</p>
                </div>
            </div>
            <!-- bg-wrapper end -->
            <div id="flipbook-view" class="business-wrapper">
                <div  class="flipbook-view">
                    <div id="flipContainer" class="container">
                        <button onclick="prevFlip()">Prev</button>
                        <div id="flipbook" class="flipbook">
                        @foreach($content as $page)
                            <div style="background-image:url({{ asset($page) }})"></div>
                        @endforeach
                        </div>
                        <button onclick="nextFlip()">Next</button>
                        <iframe
                            src="{{asset('frontend/CreativeSolutionsRateCard.pdf')}}" id="myFrame"
                            style="position: absolute;width:0;height:0;border:0;">
                        </iframe>
                    </div>
                    <div class="btn-flipbook">
                        <button onclick="fullView()"><img src="{{ asset('frontend/images/icon/fb_fullscreen.svg') }}"/></button>
                        <img src="{{ asset('frontend/images/icon/fb_zoom_in.svg') }}"/>
                        <img src="{{ asset('frontend/images/icon/fb_zoom_out.svg') }}"/>
                        <button onclick="print()"><img src="{{ asset('frontend/images/icon/fb_print.svg') }}"/></button>
                        <button id="downloadButton"><img src="{{ asset('frontend/images/icon/fb_download.svg') }}"/>
                        <a id="downloadLink" href="{{asset('frontend/CreativeSolutionsRateCard.pdf')}}" download style="display: none;"></a>
                    </div>
                </div>
            </div>

            <!-- section-wrapper start -->
            <div class="pricing-wrapper">
                <div class="card">
                    <div class="title">
                        <span>{{ __('cs1') }}</span>
                        <p>{{ __('cs1-content') }}</p>
                    </div>
                    <div class="list">
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('cs1-content1') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('cs1-content2') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('cs1-content3') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('cs1-content4') }}</p>
                    </div>
                    <button onclick="sendCompro()">{{ __('btn-inquire') }}</button>
                </div>
                <div class="card">
                    <div class="title">
                        <span>{{ __('cs2') }}</span>
                        <p>{{ __('cs2-content') }}</p>
                    </div>
                    <div class="list">
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('cs2-content1') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('cs2-content2') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('cs2-content3') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('cs2-content4') }}</p>
                    </div>
                    <button onclick="sendPromo()">{{ __('btn-inquire') }}</button>
                </div>
                <div class="card">
                    <div class="title">
                        <span>{{ __('cs3') }}</span>
                        <p>{{ __('cs3-content') }}</p>
                    </div>
                    <div class="list">
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('cs3-content1') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('cs3-content2') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('cs3-content3') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('cs3-content4') }}</p>
                    </div>
                    <button onclick="sendEvent()">{{ __('btn-inquire') }}</button>
                </div>
                <div class="card">
                    <div class="title">
                        <span>{{ __('cs4') }}</span>
                        <p>{{ __('cs4-content') }}</p>
                    </div>
                    <div class="list">
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('cs4-content1') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('cs4-content2') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('cs4-content3') }}</p>
                        <p><img src="../frontend/images/icon/greencheck.svg"/>{{ __('cs4-content4') }}</p>
                    </div>
                    <button onclick="sendSocial()">{{ __('btn-inquire') }}</button>
                </div>
            </div>
            <!-- section-wrapper end -->

            <!-- section-business start -->
            <div class="business-wrapper">
                <div class="content">
                    <div class="box">
                        <img src="../frontend/images/icon/ae.svg"/>
                        <div class="text">
                            <span>{{ __('ae') }}</span>
                            <p>{{ __('ae-content') }}</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="../frontend/images/icon/bste.svg"/>
                        <div class="text">
                            <span>{{ __('bste') }}</span>
                            <p>{{ __('bste-content') }}</p>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="box">
                        <img src="../frontend/images/icon/rdp.svg"/>
                        <div class="text">
                            <span>{{ __('rdp') }}</span>
                            <p>{{ __('rdp-content') }}</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="../frontend/images/icon/sca.svg"/>
                        <div class="text">
                            <span>{{ __('sca') }}</span>
                            <p>{{ __('sca-content') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section-business end -->

             <!-- section-streamlined start -->
             <div class="dekstop-streamlined">
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
                                <span>{{ __('pb') }}</span>
                                <p>{{ __('pb-content') }}</p>
                            </div>
                        </div>
                        <div class="wrapper">
                            <span>02</span>
                            <div class="text">
                                <span>{{ __('cre') }}</span>
                                <p>{{ __('cre-content') }}</p>
                            </div>
                        </div>
                        <div class="wrapper">
                            <span>03</span>
                            <div class="text">
                                <span>{{ __('pro') }}</span>
                                <p>{{ __('pro-content') }}</p>
                            </div>
                        </div>
                        <div class="wrapper">
                            <span>04</span>
                            <div class="text">
                                <span>{{ __('pp') }}</span>
                                <p>{{ __('pp-content') }}</p>
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
                                <span>{{ __('pb') }}</span>
                                <p>{{ __('pb-content') }}</p>
                            </div>
                        </div>
                        <div class="wrapper">
                            <span>02</span>
                            <div class="text">
                                <span>{{ __('cre') }}</span>
                                <p>{{ __('cre-content') }}</p>
                            </div>
                        </div>
                        <div class="wrapper">
                            <span>03</span>
                            <div class="text">
                                <span>{{ __('pro') }}</span>
                                <p>{{ __('pro-content') }}</p>
                            </div>
                        </div>
                        <div class="wrapper">
                            <span>04</span>
                            <div class="text">
                                <span>{{ __('pp') }}</span>
                                <p>{{ __('pp-content') }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </div>

             <!-- section-streamlined end -->
        </div>

        @include('frontend.includes.footer')
        <script type="text/javascript" src="{{ asset('frontend/extras/modernizr.2.5.3.min.js') }}"></script>

        <script>
            function sendCompro() {
                var sendTo = "info@nia.co.id";
                var subject= "Quotation Company Profile";
                const body = `Hello NIA! \n\n I want to ask quotation about website design and development for company profile.\n\n Thank you NIA`;
                // Construct the mailto link
                var mailtoLink = 'mailto:'+sendTo+'?subject='+subject+'&body='+body;

                window.open(mailtoLink, '_blank');
            }
            function sendPromo() {
                var sendTo = "info@nia.co.id";
                var subject= "Quotation Promotial Video";
                const body = `Hello NIA! \n\n I want to ask quotation about promotial video for my company or business.\n\n Thank you NIA`;
                // Construct the mailto link
                var mailtoLink = 'mailto:'+sendTo+'?subject='+subject+'&body='+body;

                window.open(mailtoLink, '_blank');
            }
            function sendEvent() {
                var sendTo = "info@nia.co.id";
                var subject= "Quotation Event Filming";
                const body = `Hello NIA! \n\n I want to ask quotation about documentation film for my event.\n\n Thank you NIA`;
                // Construct the mailto link
                var mailtoLink = 'mailto:'+sendTo+'?subject='+subject+'&body='+body;

                window.open(mailtoLink, '_blank');
            }
            function sendSocial() {
                var sendTo = "info@nia.co.id";
                var subject= "Quotation Social Media Handling";
                const body = `Hello NIA! \n\n I want to ask quotation about Social Media Content for branding my business.\n\n Thank you NIA`;
                // Construct the mailto link
                var mailtoLink = 'mailto:'+sendTo+'?subject='+subject+'&body='+body;

                window.open(mailtoLink, '_blank');
            }

            var elem = document.getElementById("flipbook-view");
            let print = () => {
                let objFra = document.getElementById('myFrame');
                objFra.contentWindow.focus();
                objFra.contentWindow.print();
            }
            document.getElementById('downloadButton').addEventListener('click', function() {
                document.getElementById('downloadLink').click();
            });

            function fullView(){
                if (elem.requestFullscreen) {
                    elem.requestFullscreen();
                    $('.flipbook').turn({
                        aspectRatio:16/9,
                        width:1200,
                        height:400,
                        elevation: 50,
                        gradients: true,
                        autoCenter: true,
                    });
                } else if (elem.mozRequestFullScreen) { /* Firefox */
                    elem.mozRequestFullScreen();
                } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
                    elem.webkitRequestFullscreen();
                } else if (elem.msRequestFullscreen) { /* IE/Edge */
                    elem.msRequestFullscreen();
                }
            };
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

                //Binds the single tap event to the zoom function
                // $('.flipbook-view').bind('zoom.tap', zoomTo);

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

            // function zoomTo(event) {
            //     setTimeout(function() {
            //         if ($('.flipbook-view').data().regionClicked) {
            //             $('.flipbook-view').data().regionClicked = false;
            //         } else {
            //             if ($('.flipbook-view').zoom('value')==1) {
            //                 $('.flipbook-view').zoom('zoomIn', event);
            //             } else {
            //                 $('.flipbook-view').zoom('zoomOut');
            //             }
            //         }
            //     }, 1);
            // }

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
        </script>
        <script>
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
