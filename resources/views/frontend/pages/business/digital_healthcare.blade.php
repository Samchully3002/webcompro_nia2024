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
            <div class="bg-wrapper bisnis2">
                <div class="text-box">
                    <h1 class="appear">{{ __('dh') }}</h1>
                    <p class="appear">{{ __('dh-head') }}</p>
                </div>
            </div>
            <!-- bg-wrapper end -->
            <div class="scrollWrapper">
                {{-- <div class="row"> --}}
                    <div class="scrollBox box1">
                        <ul class="textBox">
                            <li class="active">
                                <span>{{ __('hcLS') }}</span>
                                <h3>{{ __('healthyhada') }}</h3>
                            </li>
                        </ul>
                        <div class="imgBox"><img width="100%" src="../frontend/images/hcLS.png" /></div>
                    </div>
                {{-- </div> --}}
            </div>
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
                                        <img src="../frontend/images/bs-healthada1.svg" alt="image healthada"/>
                                        <img src="../frontend/images/bs-healthada2.svg" alt="image healthada"/>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- section-wrapper end -->

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
        </script>

    </body>
</html>
