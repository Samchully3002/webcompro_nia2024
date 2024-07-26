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
                    <button>{{ __('btn-inquire') }}</button>
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
                    <button>{{ __('btn-inquire') }}</button>
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
                    <button>{{ __('btn-inquire') }}</button>
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
                    <button>{{ __('btn-inquire') }}</button>
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

        <script>
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