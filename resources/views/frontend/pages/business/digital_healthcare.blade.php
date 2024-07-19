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
            <div class="bg-wrapper bisnis2">
                <div class="text-box">
                    <h1 class="appear">{{ __('dh') }}</h1>
                    <p class="appear">{{ __('dh-head') }}</p>
                </div>
            </div>
            <!-- bg-wrapper end -->

            <!-- section-wrapper start -->
            <div class="product-box">
                <div class="product-wrapper">
                    <div class="colls-wrapper">
                        <div class="wrap-collabsible">
                            <input id="collapsible2" class="toggle" type="checkbox" checked="">
                                <label for="collapsible2" class="lbl-toggle">
                                    <span>01</span>
                                    <span>{{ __('healthyhada') }}</span>
                                    <span class="icon-right">&nbsp;</span>
                                </label>
                            <div class="collapsible-content">
                                <div class="content">
                                    <div class="text-wrapper">
                                        <p>{{ __('healthyhada-content') }}</p>
                                    </div>
                                    <div class="img-box1">
                                        <img src="../frontend/images/bs-healthada1.svg"/>
                                        <img src="../frontend/images/bs-healthada2.svg"/>
                                    </div>
                                    <div class="card-wrapper">
                                        <div class="card">
                                            <img width="18%" src="../frontend/images/icon/user.svg"/>
                                            <span>{{ __('healthyhada1') }}</span>
                                            <p>
                                                {{ __('healthyhada1-content') }}
                                            </p>
                                        </div>
                                        <div class="card">
                                            <img width="18%" src="../frontend/images/icon/data.svg"/>
                                            <span>{{ __('healthyhada2') }}</span>
                                            <p>
                                                {{ __('healthyhada2-content') }}
                                            </p>
                                        </div>
                                        <div class="card">
                                            <img width="18%" src="../frontend/images/icon/people.svg"/>
                                            <span>{{ __('healthyhada3') }}</span>
                                            <p>
                                                {{ __('healthyhada3-content') }}
                                            </p>
                                        </div>
                                    </div>
                            </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- section-wrapper end -->
        </div>

        <!-- <div data-include="component/footer"></div> -->
        @include('frontend.includes.footer')
        <script>
            // var coll = document.getElementsByClassName("collapsible");
            // var i;

            // for (i = 0; i < coll.length; i++) {
            //     coll[i].addEventListener("click", function() {
            //         this.classList.toggle("active");
            //         var content = this.nextElementSibling;
            //         if (content.style.display === "block") {
            //         content.style.display = "none";
            //         } else {
            //         content.style.display = "block";
            //         }
            //     });
            // }
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