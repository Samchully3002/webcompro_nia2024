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
            <div class="bg-wrapper bisnis1">
                <div class="text-box">
                    <h1 class="appear">{{ __('iil') }}</h1>
                    <p class="appear">{{ __('iil-head') }}</p>
                </div>
            </div>
            <!-- bg-wrapper end -->
            <div class="scrollWrapper">
                {{-- <div class="row"> --}}
                    <div class="scrollBox box1">
                        <ul class="textBox">
                            <li class="active">
                                <span>{{ __('iilLS1') }}</span>
                                <h3>{{ __('samchullypay') }}</h3>
                            </li>
                            <li>
                                <span>{{ __('iilLS2') }}</span>
                                <h3>{{ __('olligo') }}</h3>
                            </li>
                            <li>
                                <span>{{ __('iilLS3') }}</span>
                                <h3>{{ __('chaonda') }}</h3>
                            </li>
                            <li>
                                <span>{{ __('iilLS4') }}</span>
                                <h3>{{ __('commuterbus') }}</h3>
                            </li>
                        </ul>
                        <div class="imgBox"><img width="100%" src="../frontend/images/iilLS_1.png" /></div>
                        <div class="imgBox"><img width="100%" src="../frontend/images/iilLS_2.png" /></div>
                        <div class="imgBox"><img width="100%" src="../frontend/images/iilLS_3.png" /></div>
                        <div class="imgBox"><img width="100%" src="../frontend/images/iilLS_4.png" /></div>
                    </div>
                    <div class="scrollBox box2"></div>
                    <div class="scrollBox box3"></div>
                    <div class="scrollBox box4"></div>
                {{-- </div> --}}
            </div>

            <!-- section-wrapper start -->
            <div class="product-wrapper">
                {{-- <div class="img-backdrop">
                    <img src="../frontend/images/business-backdrop.png" alt="business backdrop image"/>
                </div> --}}
                <div class="colls-wrapper">
                    <div class="wrap-collabsible">
                        <input id="collapsible" class="toggle" type="checkbox" checked="checked">
                        <label for="collapsible" class="lbl-toggle">
                            <span>01</span>
                            <span>{{ __('samchullypay') }}</span>
                            <span class="icon-right">&nbsp;</span>
                        </label>
                        <div class="collapsible-content">
                            <div class="content">
                                <div class="text-wrapper">
                                    <p>{{ __('samchullypay-content') }}</p>
                                </div>
                                <div class="img-box">
                                    <img class="lebar" src="../frontend/images/bs-samchulypay1.svg" alt="image samchully pay"/>
                                    <img class="lebar" src="../frontend/images/bs-samchulypay2.svg" alt="image samchully pay"/>
                                    <img class="lebar" src="../frontend/images/bs-samchulypay3.svg" alt="image samchully pay"/>
                                </div>
                                <div class="img-box-mobile">
                                    <button class="btn_prev_img" onclick="plusDivs(-1)">&#8249;</button>

                                    <img class="mySlides1" src="../frontend/images/bs-samchulypay1.svg" alt="image samchully pay"/>
                                    <img class="mySlides1" src="../frontend/images/bs-samchulypay2.svg" alt="image samchully pay"/>
                                    <img class="mySlides1" src="../frontend/images/bs-samchulypay3.svg" alt="image samchully pay"/>

                                    <button class="btn_next_img" onclick="plusDivs(1)">&#8250;</button>
                                </div>
                                <div class="card-wrapper">
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_samchulypay1.svg" alt="image samchully pay"/>
                                        <span>{{ __('samchullypay1') }}</span>
                                        <p> {{ __('samchullypay1-content') }}
                                        </p>
                                    </div>
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_samchulypay2.svg" alt="image samchully pay"/>
                                        <span>{{ __('samchullypay2') }}</span>
                                        <p> {{ __('samchullypay2-content') }}
                                        </p>
                                    </div>
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_samchulypay3.svg" alt="image samchully pay"/>
                                        <span>{{ __('samchullypay3') }}</span>
                                        <p> {{ __('samchullypay3-content') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="colls-wrapper">
                    <div class="wrap-collabsible">
                        <input id="collapsible1" class="toggle" type="checkbox">
                        <label for="collapsible1" class="lbl-toggle">
                            <span>02</span>
                            <span>{{ __('olligo') }}</span>
                            <span class="icon-right">&nbsp;</span>
                        </label>
                        <div class="collapsible-content">
                            <div class="content">
                                <div class="text-wrapper">
                                    <p>{{ __('olligo-content') }}</p>
                                </div>
                                <div class="img-box">
                                    <img class="lebar" src="../frontend/images/bs-olligo1.svg" alt="image olligo"/>
                                    <img class="lebar" src="../frontend/images/bs-olligo2.svg" alt="image olligo"/>
                                    <img class="lebar" src="../frontend/images/bs-olligo3.svg" alt="image olligo"/>
                                </div>
                                <div class="img-box-mobile">
                                    <button class="btn_prev_img" onclick="plusDivs(-1)">&#8249;</button>

                                    <img class="mySlides2" src="../frontend/images/bs-olligo1.svg" alt="image olligo"/>
                                    <img class="mySlides2" src="../frontend/images/bs-olligo2.svg" alt="image olligo"/>
                                    <img class="mySlides2" src="../frontend/images/bs-olligo3.svg" alt="image olligo"/>

                                    <button class="btn_next_img" onclick="plusDivs(1)">&#8250;</button>
                                </div>
                                <div class="card-wrapper">
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_olligo1.svg" alt="image olligo"/>
                                        <span>{{ __('olligo1') }}</span>
                                        <p>
                                            {{ __('olligo1-content') }}
                                        </p>
                                    </div>
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_olligo2.svg" alt="image olligo"/>
                                        <span>{{ __('olligo2') }}</span>
                                        <p>
                                            {{ __('olligo2-content') }}
                                        </p>
                                    </div>
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_olligo3.svg" alt="image olligo"/>
                                        <span>{{ __('olligo3') }}</span>
                                        <p>
                                            {{ __('olligo3-content') }}
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
                            <span>03</span>
                            <span>{{ __('chaonda') }}</span>
                            <span class="icon-right">&nbsp;</span>
                        </label>
                        <div class="collapsible-content">
                            <div class="content">
                                <div class="text-wrapper">
                                    <p>{{ __('chaonda-content') }}</p>
                                </div>
                                <div class="img-box">
                                    <img class="lebar" src="../frontend/images/bs-chaonda1.svg" alt="image chaonda"/>
                                    <img class="lebar" src="../frontend/images/bs-chaonda2.svg" alt="image chaonda"/>
                                    <img class="lebar" src="../frontend/images/bs-chaonda3.svg" alt="image chaonda"/>
                                    <img class="lebar" src="../frontend/images/bs-chaonda4.svg" alt="image chaonda"/>
                                </div>
                                <div class="img-box-mobile">
                                    <button class="btn_prev_img" onclick="plusDivs(-1)">&#8249;</button>

                                    <img class="mySlides3" src="../frontend/images/bs-chaonda1.svg" alt="image chaonda"/>
                                    <img class="mySlides3" src="../frontend/images/bs-chaonda2.svg" alt="image chaonda"/>
                                    <img class="mySlides3" src="../frontend/images/bs-chaonda3.svg" alt="image chaonda"/>
                                    <img class="mySlides3" src="../frontend/images/bs-chaonda4.svg" alt="image chaonda"/>

                                    <button class="btn_next_img" onclick="plusDivs(1)">&#8250;</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="colls-wrapper">
                    <div class="wrap-collabsible">
                        <input id="collapsible3" class="toggle" type="checkbox">
                        <label for="collapsible3" class="lbl-toggle">
                            <span>04</span>
                            <span>{{ __('commuterbus') }}</span>
                            <span class="icon-right">&nbsp;</span>
                        </label>
                        <div class="collapsible-content">
                            <div class="content">
                                <div class="text-wrapper">
                                    <p>{{ __('commuterbus-content') }}</p>
                                </div>
                                <div class="img-box">
                                    <img class="lebar" src="../frontend/images/bs-commuter1.svg" alt="image commuter"/>
                                    <img class="lebar" src="../frontend/images/bs-commuter2.svg" alt="image commuter"/>
                                    <img class="lebar" src="../frontend/images/bs-commuter3.svg" alt="image commuter"/>
                                    <img class="lebar" src="../frontend/images/bs-commuter4.svg" alt="image commuter"/>
                                </div>
                                <div class="img-box-mobile">
                                    <button class="btn_prev_img" onclick="plusDivs(-1)">&#8249;</button>

                                    <img class="mySlides4" src="../frontend/images/bs-commuter1.svg" alt="image commuter"/>
                                    <img class="mySlides4" src="../frontend/images/bs-commuter2.svg" alt="image commuter"/>
                                    <img class="mySlides4" src="../frontend/images/bs-commuter3.svg" alt="image commuter"/>
                                    <img class="mySlides4" src="../frontend/images/bs-commuter4.svg" alt="image commuter"/>

                                    <button class="btn_next_img" onclick="plusDivs(1)">&#8250;</button>
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
        {{-- <script type="text/javascript" src="../frontend/js/pages/business.js"></script> --}}
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
            $('document').ready(function(){
                gsap.registerPlugin(ScrollTrigger);
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
                        start: 'top 30%',
                        end: 'top bottom',
                        invalidateOnRefresh: true,
                        scrub: 0.5,//부드러운 스크러빙
                        // onComplete: console.log('finish'),
                        onEnter:function() {
                            $("#header-wrapper .menu-wrapper").addClass("hide");
                            $('.scrollWrapper .box1').addClass('active');
                            $('.scrollWrapper .box1 .imgBox').addClass('active');
                        },
                        onEnterBack:function() {
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
                            start: 'top 30%',
                            end: 'top bottom',
                            invalidateOnRefresh: true,
                            onEnter:function() {
                                if(i === 1){
                                    $("#header-wrapper .menu-wrapper").addClass("hide");
                                    $('.box1').css({"transition" : "none", "-moz-transition" : "none", "-o-transition" : "none", "-webkit-transition" : "none"});
                                }

                                $("#header-wrapper .menu-wrapper").addClass("hide");
                                // $('.menu-wrapper').css({'display' : 'flex'});
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
                                $('.menu-wrapper').removeClass('hide');
                                $('.scrollWrapper .scrollBox .imgBox').css({'display' : 'none'});
                                $('.scrollWrapper .scrollBox .imgBox').eq(i).css({'display' : 'block'});
                                $('.scrollWrapper .textBox li').removeClass('active');
                                $('.scrollWrapper .textBox li').eq(i).addClass('active');
                            }
                        }
                    })
                });
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
                var x3 = document.getElementsByClassName("mySlides3");
                var x4 = document.getElementsByClassName("mySlides4");

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

                if (n > x3.length) {slideIndex = 1}
                if (n < 1) {slideIndex = x3.length}
                for (i = 0; i < x3.length; i++) {
                    x3[i].style.display = "none";
                }
                x3[slideIndex-1].style.display = "block";

                if (n > x4.length) {slideIndex = 1}
                if (n < 1) {slideIndex = x4.length}
                for (i = 0; i < x4.length; i++) {
                    x4[i].style.display = "none";
                }
                x4[slideIndex-1].style.display = "block";
            }
        </script>
    </body>
</html>
