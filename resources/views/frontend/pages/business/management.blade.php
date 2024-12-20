<!DOCTYPE html>
<html lang="en">

        @include('frontend.includes.head')
        {{-- CSS --}}
        <link rel="stylesheet" href="{{asset('frontend/css/business.css')}}"/>
        <link rel="stylesheet" href="{{asset('frontend/lib/swiper-bundle.min.css')}}" />
        {{-- SCRIPT --}}
        <script src="{{asset('frontend/lib/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('frontend/lib/gsap.min.js')}}"></script>
        <script src="{{asset('frontend/lib/ScrollTrigger.min.js')}}"></script>
        <script src="{{asset('frontend/lib/ScrollToPlugin.min.js')}}"></script>
        <script src="{{asset('frontend/lib/CSSRulePlugin.min.js')}}"></script>
    </head>

    <body>
    @include('frontend.includes.header')
        <!-- <div data-include="component/header"></div> -->

        <div class="page page-scroll page-in">
            <!-- bg-wrapper start -->
            <div class="bg-wrapper bisnis3">
                <div class="text-box">
                    <h1 class="appear">{{ __('sdm') }}</h1>
                    <p class="appear">{{ __('sdm-head') }}</p>
                </div>
            </div>
            <!-- bg-wrapper end -->
            <div class="scrollWrapper">
                {{-- <div class="row"> --}}
                    <div class="scrollBox box1">
                        <ul class="textBox">
                            <li class="active">
                                <span>{{ __('sdmLS1') }}</span>
                                <h3>{{ __('tnr') }}</h3>
                            </li>
                            <li>
                                <span>{{ __('sdmLS2') }}</span>
                                <h3>{{ __('pis') }}</h3>
                            </li>
                            <li>
                                <span>{{ __('sdmLS3') }}</span>
                                <h3>{{ __('iba') }}</h3>
                            </li>
                        </ul>
                        <div class="imgBox"><img width="100%" src="../frontend/images/smLS_1.png" /></div>
                        <div class="imgBox"><img width="100%" src="../frontend/images/smLS_2.png" /></div>
                        <div class="imgBox"><img width="100%" src="../frontend/images/smLS_3.png" /></div>
                    </div>
                    <div class="scrollBox box2"></div>
                    <div class="scrollBox box3"></div>
                {{-- </div> --}}
            </div>
            <!-- section-wrapper start -->
          <div class="product-box">
            <div class="product-wrapper">

                <div class="colls-wrapper">
                    <div class="wrap-collabsible">
                        <input id="collapsible" class="toggle" type="checkbox" checked="checked">
                        <label for="collapsible" class="lbl-toggle">
                            <span>01</span>
                            <span>{{ __('tnr') }}</span>
                            <span class="icon-right">&nbsp;</span>
                        </label>
                        <div class="collapsible-content">
                            <div class="content">
                                <div class="text-wrapper">
                                    <p>{{ __('tnr-content') }}</p>
                                </div>
                                <div class="t_img-box">
                                    <img class="lebar" src="../frontend/images/bs-ticketing1.svg" alt="image ticketing"/>
                                    <img class="lebar" src="../frontend/images/bs-ticketing2.svg" alt="image ticketing"/>
                                    <img class="lebar" src="../frontend/images/bs-ticketing3.svg" alt="image ticketing"/>
                                </div>
                                <div class="img-box-mobile">

                                    <button class="btn_prev_img" onclick="plusDivs(-1)">&#8249;</button>

                                    <img class="mySlides1" src="../frontend/images/bs-ticketing1.svg" alt="image ticketing"/>
                                    <img class="mySlides1" src="../frontend/images/bs-ticketing2.svg" alt="image ticketing"/>
                                    <img class="mySlides1" src="../frontend/images/bs-ticketing3.svg" alt="image ticketing"/>

                                    <button class="btn_next_img" onclick="plusDivs(1)">&#8250;</button>

                                </div>
                                <div class="card-wrapper">
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/reserv.svg" alt="image samchully pay"/>
                                        <span>{{ __('tnr1') }}</span>
                                        <p>
                                            {{ __('tnr1-content') }}
                                        </p>
                                    </div>
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/kiosk.svg" alt="image samchully pay"/>
                                        <span>{{ __('tnr2') }}</span>
                                        <p>
                                            {{ __('tnr2-content') }}
                                        </p>
                                    </div>
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/settlement.svg" alt="image samchully pay"/>
                                        <span>{{ __('tnr3') }}</span>
                                        <p>
                                            {{ __('tnr3-content') }}
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
                            <span>{{ __('pis') }}</span>
                            <span class="icon-right">&nbsp;</span>
                        </label>
                        <div class="collapsible-content">
                            <div class="content">
                                <div class="text-wrapper">
                                    <p>{{ __('pis-content') }}</p>
                                </div>
                                <div class="img-box1">
                                    <img src="../frontend/images/bs-payment1.svg" alt="image bs payment"/>
                                    <img src="../frontend/images/bs-payment2.svg" alt="image bs payment"/>
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
                            <span>{{ __('iba') }}</span>
                            <span class="icon-right">&nbsp;</span>
                        </label>
                        <div class="collapsible-content">
                            <div class="content">
                                <div class="text-wrapper">
                                    <p>{{ __('iba-content') }}</p>
                                    <button id="downloadButton">PDF&nbsp;&nbsp;<img src="../../frontend/images/icon/download.svg" /></button>
                                    <a id="downloadLink" href="{{asset('frontend/INABUSAPPS.pdf')}}" download style="display: none;"></a>
                                </div>
                                <div class="img-box" style="gap: 0px !important;">
                                    <img class="lebar" src="../frontend/images/iba1.png"/>
                                    <img class="lebar" src="../frontend/images/iba2.png"/>
                                    <img class="lebar" src="../frontend/images/iba3.png"/>
                                    <img class="lebar" src="../frontend/images/iba4.png"/>
                                </div>
                                <div class="img-box-mobile">

                                    <button class="btn_prev_img" onclick="plusDivs(-1)">&#8249;</button>

                                    <img class="mySlides2" src="../frontend/images/iba1.png"/>
                                    <img class="mySlides2" src="../frontend/images/iba2.png"/>
                                    <img class="mySlides2" src="../frontend/images/iba3.png"/>
                                    <img class="mySlides2" src="../frontend/images/iba4.png"/>

                                    <button class="btn_next_img" onclick="plusDivs(1)">&#8250;</button>

                                </div>
                                <div class="card-wrapper">
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_iba1.svg"/>
                                        <span>{{ __('iba1') }}</span>
                                        <p>
                                            {{ __('iba1-content') }}
                                        </p>
                                    </div>
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_iba2.svg"/>
                                        <span>{{ __('iba2') }}</span>
                                        <p>
                                            {{ __('iba2-content') }}
                                        </p>
                                    </div>
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_iba3.svg"/>
                                        <span>{{ __('iba3') }}</span>
                                        <p>
                                            {{ __('iba3-content') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- section-wrapper end -->
        </div>
      </div>

        <!-- <div data-include="component/footer"></div> -->
        @include('frontend.includes.footer')
        <script>

            $('document').ready(function(){
                gsap.registerPlugin(ScrollTrigger);

                gsap.timeline({
                    onComplete:function(){}
                })
                gsap.timeline({
                    scrollTrigger: {
                        trigger: '.scrollWrapper',
                        start: 'top top',
                        end: 'bottom bottom',
                        pin: '.scrollWrapper .scrollBox',
                        pinSpacing: false,
                        invalidateOnRefresh: true,
                        scrub: 1,//부드러운 스크러빙
                    }
                });

                gsap.timeline({
                    scrollTrigger: {
                        trigger: '.scrollWrapper',
                        start: 'top',
                        end: 'top bottom',
                        invalidateOnRefresh: true,
                        scrub: 0.5,//부드러운 스크러빙
                        // onComplete: console.log('finish'),
                        onEnter:function() {
                            $("#header-wrapper").css({'display' : 'none'});
                            $('.scrollWrapper .box1').addClass('active');
                            $('.scrollWrapper .box1 .imgBox').addClass('active');
                        },
                        onEnterBack:function() {
                            $("#header-wrapper").css({'display' : 'unset'});
                            $('.scrollWrapper .box1').removeClass('active');
                            $('.scrollWrapper .box1 .imgBox').removeClass('active');
                        }
                    }
                });

                $('.scrollWrapper .scrollBox').each(function(i){
                    let nowInner = this;
                    gsap.timeline({
                        scrollTrigger: {
                            trigger: $(this),
                            start: 'top',
                            end: 'top bottom',
                            invalidateOnRefresh: true,
                            onEnter:function() {
                                $("#header-wrapper").css({'display' : 'none'});
                                if(i === 1){
                                    $('.box1').css({"transition" : "none", "-moz-transition" : "none", "-o-transition" : "none", "-webkit-transition" : "none"});
                                }
                                $('.scrollWrapper .scrollBox .imgBox').css({'display' : 'none'});
                                $('.scrollWrapper .scrollBox .imgBox').eq(i).css({'display' : 'block'});
                                $('.scrollWrapper .textBox li').removeClass('active');
                                $('.scrollWrapper .textBox li').eq(i).addClass('active');
                            },
                            onEnterBack:function() {
                                if(i === 1){
                                    $('.box1').css({"transition" : "all 0.5s", "-moz-transition" : "all 0.5s", "-o-transition" : "all 0.5s", "-webkit-transition" : "all 0.5s"});
                                }

                                if(i === 3){
                                    $('.box1').css({"transition" : "none", "-moz-transition" : "none", "-o-transition" : "none", "-webkit-transition" : "none"});
                                }
                                $('.scrollWrapper .scrollBox .imgBox').css({'display' : 'none'});
                                $('.scrollWrapper .scrollBox .imgBox').eq(i).css({'display' : 'block'});
                                $('.scrollWrapper .textBox li').removeClass('active');
                                $('.scrollWrapper .textBox li').eq(i).addClass('active');
                            }
                        }
                    })
                });

                gsap.timeline({
                    scrollTrigger: {
                        trigger: '.product-wrapper',
                        start: 'top',
                        end: 'top bottom',
                        invalidateOnRefresh: true,
                        scrub: 0.5,//부드러운 스크러빙
                        // onComplete: console.log('finish'),
                        onEnter:function() {
                            $("#header-wrapper").css({'display' : 'unset'});
                        },
                        onEnterBack:function() {
                            $("#header-wrapper").css({'display' : 'none'});
                        }
                    }
                });
            });

            var coll = document.getElementsByClassName("collapsible");
            var i;

            for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                    content.style.display = "none";
                    } else {
                    content.style.display = "block";
                    }
                });
            }

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

            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
            showDivs(slideIndex += n);
            }

            function showDivs(n) {
            var i;
            var x1 = document.getElementsByClassName("mySlides1");
            var x2 = document.getElementsByClassName("mySlides2");

            if (n > x1.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x1.length}
            for (i = 0; i < x1.length; i++) {
                x1[i].style.display = "none";
            }
            x1[slideIndex-1].style.display = "block";

            if (n > x2.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x2.length}
            for (i = 0; i < x2.length; i++) {
                x2[i].style.display = "none";
            }
            x2[slideIndex-1].style.display = "block";
            }


            document.getElementById('downloadButton').addEventListener('click', function() {
            document.getElementById('downloadLink').click();
        });
        </script>

    </body>
</html>
