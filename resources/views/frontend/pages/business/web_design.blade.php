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
            <div class="bg-wrapper bisnis4">
                <div class="text-box">
                    <h1 class="appear">{{ __('wdd') }}</h1>
                    <p class="appear">{{ __('wdd-head') }}</p>
                </div>
            </div>
            <!-- bg-wrapper end -->

            <!-- section-wrapper start -->
<<<<<<< HEAD
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
                    <button>{{ __('btn-contact') }}</button>
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
                    <button>{{ __('btn-contact') }}</button>
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
                    <button>{{ __('btn-contact') }}</button>
                </div>
            </div>
            <!-- section-wrapper end -->

            <!-- section-business start -->
            <div class="business-wrapper">
                <div class="content">
                    <div class="box">
                        <img src="../frontend/images/icon/design.svg"/>
                        <div class="text">
                            <span>{{ __('prodesign') }}</span>
                            <p>{{ __('prodesign-content') }}</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="../frontend/images/icon/responsive.svg"/>
                        <div class="text">
                            <span>{{ __('responsive') }}</span>
                            <p>{{ __('responsive-content') }}</p>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="box">
                        <img src="../frontend/images/icon/seo.svg"/>
                        <div class="text">
                            <span>{{ __('seo') }}</span>
                            <p>{{ __('seo-content') }}</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="../frontend/images/icon/fast.svg"/>
                        <div class="text">
                            <span>{{ __('fast') }}</span>
                            <p>{{ __('fast-content') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section-business end -->

             <!-- section-streamlined start -->
            <div class="our-history ">
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
=======
          <div class="product-box">
            <div class="product-wrapper">

                <div class="colls-wrapper">
                    <div class="wrap-collabsible">
                        <input id="collapsible" class="toggle" type="checkbox" checked="checked">
                        <label for="collapsible" class="lbl-toggle">
                            <span>01</span>
                            <span>{{ __('rnc') }}</span>
                            <span class="icon-right">&nbsp;</span>
                        </label>
                        <div class="collapsible-content">
                            <div class="content">
                                <div class="text-wrapper">
                                    <p>{{ __('rnc-content') }}</p>
                                </div>
                                <div class="card-wrapper">
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_exportvoucher01-A.svg"/>
                                        <span>{{ __('rnc1') }}</span>
                                        <p>
                                            {{ __('rnc1-content') }}
                                        </p>
                                    </div>
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_exportvoucher01-B.svg"/>
                                        <span>{{ __('rnc2') }}</span>
                                        <p>
                                            {{ __('rnc2-content') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="card-wrapper">
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_exportvoucher01-C.svg"/>
                                        <span>{{ __('rnc3') }}</span>
                                        <p>
                                            {{ __('rnc3-content') }}
                                        </p>
                                    </div>
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_exportvoucher01-D.svg"/>
                                        <span>{{ __('rnc4') }}</span>
                                        <p>
                                            {{ __('rnc4-content') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="card-wrapper">
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_exportvoucher01-E.svg"/>
                                        <span>{{ __('rnc5') }}</span>
                                        <p>
                                            {{ __('rnc5-content') }}
                                        </p>
                                    </div>
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_exportvoucher01-F.svg"/>
                                        <span>{{ __('rnc6') }}</span>
                                        <p>
                                            {{ __('rnc6-content') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="colls-wrapper">
                    <div class="wrap-collabsible">
                        <input id="collapsible2" class="toggle" type="checkbox">
                        <label for="collapsible2" class="lbl-toggle">
                            <span>02</span>
                            <span>{{ __('oba') }}</span>
                            <span class="icon-right">&nbsp;</span>
                        </label>
                        <div class="collapsible-content">
                            <div class="content">
                                <div class="text-wrapper">
                                    <p>{{ __('oba-content') }}</p>
                                </div>
                                <div class="card-wrapper">
                                    <div class="card-grey">
                                        <span class="span-title">01</span>
                                        <span>{{ __('oba1') }}</span>
                                        <p>
                                            {{ __('oba1-content') }}
                                        </p>
                                    </div>
                                    <div class="card-grey">
                                        <span class="span-title">02</span>
                                        <span>{{ __('oba2') }}</span>
                                        <p>
                                            {{ __('oba2-content') }}
                                        </p>
                                    </div>
                                    <div class="card-grey">
                                        <span class="span-title">03</span>
                                        <span>{{ __('oba3') }}</span>
                                        <p>
                                            {{ __('oba3-content') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="colls-wrapper">
                    <div class="wrap-collabsible">
                        <input id="collapsible3" class="toggle" type="checkbox">
                        <label for="collapsible3" class="lbl-toggle">
                            <span>03</span>
                            <span>{{ __('md') }}</span>
                            <span class="icon-right">&nbsp;</span>
                        </label>
                        <div class="collapsible-content">
                            <div class="content">
                                <div class="text-wrapper">
                                    <p>{{ __('md-content') }}</p>
                                </div>
                                <div class="card-wrapper">
                                    <div class="card-grey">
                                        <img width="30%" src="../frontend/images/icon/ic_exportvoucher03-A.svg"/>
                                        <span>{{ __('md1') }}</span>
                                        <p>
                                            {{ __('md1-content') }}
                                        </p>
                                    </div>
                                    <div class="card-grey">
                                        <img width="30%" src="../frontend/images/icon/ic_exportvoucher03-B.svg"/>
                                        <span>{{ __('md2') }}</span>
                                        <p>
                                            {{ __('md2-content') }}
                                        </p>
                                    </div>
                                    <div class="card-grey">
                                        <img width="30%" src="../frontend/images/icon/ic_exportvoucher03-C.svg"/>
                                        <span>{{ __('md3') }}</span>
                                        <p>
                                            {{ __('md3-content') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="colls-wrapper">
                    <div class="wrap-collabsible">
                        <input id="collapsible4" class="toggle" type="checkbox">
                        <label for="collapsible4" class="lbl-toggle">
                            <span>04</span>
                            <span>{{ __('its') }}</span>
                            <span class="icon-right">&nbsp;</span>
                        </label>
                        <div class="collapsible-content">
                            <div class="content">
                                <div class="text-wrapper">
                                    <p>{{ __('its-content') }}</p>
                                </div>
                                <div class="card-wrapper">
                                    <div class="card-grey">
                                        <img width="18%" src="../frontend/images/icon/ic_exportvoucher04-A.svg"/>
                                        <span>{{ __('its1') }}</span>
                                        <p>
                                            {{ __('its1-content') }}
                                        </p>
                                    </div>
                                    <div class="card-grey">
                                        <img width="18%" src="../frontend/images/icon/ic_exportvoucher04-B.svg"/>
                                        <span>{{ __('its2') }}</span>
                                        <p>
                                            {{ __('its2-content') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="card-wrapper">
                                    <div class="card-grey">
                                        <img width="18%" src="../frontend/images/icon/ic_exportvoucher04-C.svg"/>
                                        <span>{{ __('its3') }}</span>
                                        <p>
                                            {{ __('its3-content') }}
                                        </p>
                                    </div>
                                    <div class="card-grey">
                                        <img width="18%" src="../frontend/images/icon/ic_exportvoucher01-D.svg"/>
                                        <span>{{ __('its4') }}</span>
                                        <p>
                                            {{ __('its4-content') }}
                                        </p>
                                    </div>
                                </div>
>>>>>>> 6927d0e56e496c576558a75a994795b27a5282e5
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
             <!-- section-streamlined end -->
        </div>

        @include('frontend.includes.footer')

=======
          </div>
            <!-- section-wrapper end -->
        </div>

        <!-- <div data-include="component/footer"></div> -->
        @include('frontend.includes.footer')
        <!-- <script type="text/javascript" src="{{asset('frontend/js/pages/business.js')}}"></script> -->
>>>>>>> 6927d0e56e496c576558a75a994795b27a5282e5
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
<<<<<<< HEAD
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
=======

>>>>>>> 6927d0e56e496c576558a75a994795b27a5282e5
    </body>
</html>
