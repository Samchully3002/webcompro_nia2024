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
                    <h1 class="appear">{{ __('ev') }}</h1>
                    <p class="appear">{{ __('ev-head') }}</p>
                </div>
            </div>
            <!-- bg-wrapper end -->

            <!-- section-wrapper start -->
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
                                        <img width="18%" src="../frontend/images/icon/ic_exportvoucher01-A.svg" alt="image export voucher"/>
                                        <span>{{ __('rnc1') }}</span>
                                        <p>
                                            {{ __('rnc1-content') }}
                                        </p>
                                    </div>
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_exportvoucher01-B.svg" alt="image export voucher"/>
                                        <span>{{ __('rnc2') }}</span>
                                        <p>
                                            {{ __('rnc2-content') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="card-wrapper">
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_exportvoucher01-C.svg" alt="image export voucher"/>
                                        <span>{{ __('rnc3') }}</span>
                                        <p>
                                            {{ __('rnc3-content') }}
                                        </p>
                                    </div>
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_exportvoucher01-D.svg" alt="image export voucher"/>
                                        <span>{{ __('rnc4') }}</span>
                                        <p>
                                            {{ __('rnc4-content') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="card-wrapper">
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_exportvoucher01-E.svg" alt="image export voucher"/>
                                        <span>{{ __('rnc5') }}</span>
                                        <p>
                                            {{ __('rnc5-content') }}
                                        </p>
                                    </div>
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_exportvoucher01-F.svg" alt="image export voucher"/>
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
                                        <img width="18%" src="../frontend/images/icon/ic_exportvoucher03-A.svg" alt="image export voucher"/>
                                        <span>{{ __('md1') }}</span>
                                        <p>
                                            {{ __('md1-content') }}
                                        </p>
                                    </div>
                                    {{-- <div class="card-grey">
                                        <img width="30%" src="../frontend/images/icon/ic_exportvoucher03-B.svg" alt="image export voucher"/>
                                        <span>{{ __('md2') }}</span>
                                        <p>
                                            {{ __('md2-content') }}
                                        </p>
                                    </div>
                                    <div class="card-grey">
                                        <img width="30%" src="../frontend/images/icon/ic_exportvoucher03-C.svg" alt="image export voucher"/>
                                        <span>{{ __('md3') }}</span>
                                        <p>
                                            {{ __('md3-content') }}
                                        </p>
                                    </div> --}}
                                    <div class="card-grey">
                                        <img width="18%" src="../frontend/images/icon/designtools.svg" alt="image export voucher"/>
                                        <span>{{ __('md4') }}</span>
                                        <p>
                                            {{ __('md4-content') }}
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
                                        <img width="18%" src="../frontend/images/icon/ic_exportvoucher04-A.svg" alt="image export voucher"/>
                                        <span>{{ __('its1') }}</span>
                                        <p>
                                            {{ __('its1-content') }}
                                        </p>
                                    </div>
                                    <div class="card-grey">
                                        <img width="18%" src="../frontend/images/icon/ic_exportvoucher04-B.svg" alt="image export voucher"/>
                                        <span>{{ __('its2') }}</span>
                                        <p>
                                            {{ __('its2-content') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="card-wrapper">
                                    <div class="card-grey">
                                        <img width="18%" src="../frontend/images/icon/ic_exportvoucher04-C.svg" alt="image export voucher"/>
                                        <span>{{ __('its3') }}</span>
                                        <p>
                                            {{ __('its3-content') }}
                                        </p>
                                    </div>
                                    <div class="card-grey">
                                        <img width="18%" src="../frontend/images/icon/ic_exportvoucher04-D.svg"/>
                                        <span>{{ __('its4') }}</span>
                                        <p>
                                            {{ __('its4-content') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
            <!-- section-wrapper end -->
        </div>

        <!-- <div data-include="component/footer"></div> -->
        @include('frontend.includes.footer')
        <!-- <script type="text/javascript" src="{{asset('frontend/js/pages/business.js')}}"></script> -->
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

    </body>
</html>