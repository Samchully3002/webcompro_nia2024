<!DOCTYPE html>
<html lang="en">

@include('frontend.includes.head',['meta'=>$meta])
<!-- dev -->
<!-- <link rel="stylesheet" href="{{asset('frontend/css/home.css')}}"/> -->
 <!-- production -->
<link rel="stylesheet" href="{{asset('frontend/css/home.css')}}"/>
</head>
<body>
<!-- <div data-include="component/header"></div> -->
@include('frontend.includes.header')

    {{-- <div class="page page-in" id="page-main"> --}}
        <div class="container_video_text">
            <!-- Video start -->
            <div class="video-wrap">
                <div class="video-mask">
                  <div class="slideshow-container">
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <div class="sliderVideo">
                          <div class="slideVideo">
                            <video controls id="slide1" autoplay muted>
                                <source src="../frontend/video/video.mp4" type="video/mp4">
                            </video>
                          </div>
                        </div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <div class="sliderVideo">
                          <div class="slideVideo">
                            <video controls id="slide2" autoplay muted>
                                <source src="../frontend/video/company_profile.mp4" type="video/mp4">
                            </video>
                          </div>
                        </div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <div class="sliderVideo">
                          <div class="slideVideo">
                            <video controls id="slide3" autoplay muted>
                                <source src="../frontend/video/record_code.mp4" type="video/mp4">
                            </video>
                          </div>
                        </div>
                    </div>
                    <a class="prev" onclick="toPrevSlide()">&#10094;</a>
                    <a class="next" onclick="toNextSlide()">&#10095;</a>
                  </div><br>
                  <div class="bullets" style="text-align:center">
                    <span class="dot" onclick="setActiveSlide(0)"></span>
                    <span class="dot" onclick="setActiveSlide(1)"></span>
                    <span class="dot" onclick="setActiveSlide(2)"></span>
                  </div>
                </div>
            </div>
            <div class="container_text">
                <div id="visi_txt" class="vision_text">
                    <label>ONE - STOP</label><label style="color:#40455C;">&nbsp;IT SOLUTION FOR YOUR BUSINESS</label>
                </div>
            </div>
        </div>

{{-- ================================================= New to Old Design ============================================================== --}}
        {{-- 01 --}}
        <div class="item">
            <div class="wrap-box">
                <div class="left">
                    <img src="../../frontend/images/icon/ic_homeLogistic.svg" alt="icon arrow">
                    <p >{{ __('iil') }}</p><br>
                    <span>{{ __('iil-content') }}</span><br>
                </div>
                <img class="right" src="../../frontend/images/IIL.jpg"/>
            </div>
        </div>
        {{-- 02 --}}
        <div class="item">
            <div class="wrap-box">
                <img class="leftInvert" src="../../frontend/images/DHC.jpg"/>
                <div class="rightInvert">
                    <img src="../../frontend/images/icon/ic_medical.svg" alt="icon arrow">
                    <p >{{ __('dh') }}</p><br>
                    <span>{{ __('dh-content') }}</span><br>
                </div>
            </div>
        </div>
        {{-- 03 --}}
        <div class="item">
            <div class="wrap-box">
                <div class="left">
                    <img src="../../frontend/images/icon/ic_code.svg" alt="icon arrow">
                    <p >{{ __('sdm') }}</p><br>
                    <span>{{ __('sdm-content') }}</span><br>
                </div>
                <img class="right" src="../../frontend/images/SDM.jpg"/>
            </div>
        </div>
        {{-- 04 --}}
        <div class="item">
            <div class="wrap-box">
                <img class="leftInvert" src="../../frontend/images/EV.jpg"/>
                <div class="rightInvert">
                    <img src="../../frontend/images/icon/ic_building.svg" alt="icon arrow">
                    <p >{{ __('ev') }}</p><br>
                    <span>{{ __('ev-content') }}</span><br>
                </div>
            </div>
        </div>
        {{-- 05 --}}
        <div class="item">
            <div class="wrap-box">
                <div class="left">
                    <img src="../../frontend/images/icon/global.svg" alt="icon arrow">
                    <p >{{ __('wdd') }}</p><br>
                    <span>{{ __('wdd-content') }}</span><br>
                </div>
                <img class="right" src="../../frontend/images/WDD.jpg"/>
            </div>
        </div>
        {{-- 06 --}}
        <div class="item">
            <div class="wrap-box">
                <img class="leftInvert" src="../../frontend/images/CS.jpg"/>
                <div class="rightInvert">
                    <img src="../../frontend/images/icon/designtools.svg" alt="icon arrow">
                    <p >{{ __('cs') }}</p><br>
                    <span>{{ __('cs-content') }}</span><br>
                </div>
            </div>
        </div>

{{-- ======================================================== finish him up================================ --}}

        <div class="clientSection">
            <div class="client_text">
                <p>{{ __('title-client') }}</p>
            </div>

                <div class="marquee-container">
                    <div class="marquee">
                        <img src="../../frontend/images/icon/korea.png" alt="Korea"/>
                        <img src="../../frontend/images/icon/ditjen.png" alt="Ditjen"/>
                        <img src="../../frontend/images/icon/bni.png" alt="BNI"/>
                        <img src="../../frontend/images/icon/jayaraya.png" alt="Jayaraya"/>
                        <img src="../../frontend/images/icon/ovo.png" alt="OVO"/>
                        <img src="../../frontend/images/icon/dishub.png" alt="Dishub"/>

                        <img src="../../frontend/images/icon/korea.png" alt="Korea"/>
                        <img src="../../frontend/images/icon/ditjen.png" alt="Ditjen"/>
                        <img src="../../frontend/images/icon/bni.png" alt="BNI"/>
                        <img src="../../frontend/images/icon/jayaraya.png" alt="Jayaraya"/>
                        <img src="../../frontend/images/icon/ovo.png" alt="OVO"/>
                        <img src="../../frontend/images/icon/dishub.png" alt="Dishub"/>
                        <img src="../../frontend/images/icon/korea.png" alt="Korea"/>
                        <img src="../../frontend/images/icon/ditjen.png" alt="Ditjen"/>
                        <img src="../../frontend/images/icon/bni.png" alt="BNI"/>
                        <img src="../../frontend/images/icon/jayaraya.png" alt="Jayaraya"/>
                        <img src="../../frontend/images/icon/ovo.png" alt="OVO"/>
                        <img src="../../frontend/images/icon/dishub.png" alt="Dishub"/>
                        <img src="../../frontend/images/icon/korea.png" alt="Korea"/>
                        <img src="../../frontend/images/icon/ditjen.png" alt="Ditjen"/>
                        <img src="../../frontend/images/icon/bni.png" alt="BNI"/>
                        <img src="../../frontend/images/icon/jayaraya.png" alt="Jayaraya"/>
                        <img src="../../frontend/images/icon/ovo.png" alt="OVO"/>
                        <img src="../../frontend/images/icon/dishub.png" alt="Dishub"/>
                        <img src="../../frontend/images/icon/korea.png" alt="Korea"/>
                        <img src="../../frontend/images/icon/ditjen.png" alt="Ditjen"/>
                        <img src="../../frontend/images/icon/bni.png" alt="BNI"/>
                        <img src="../../frontend/images/icon/jayaraya.png" alt="Jayaraya"/>
                        <img src="../../frontend/images/icon/ovo.png" alt="OVO"/>
                        <img src="../../frontend/images/icon/dishub.png" alt="Dishub"/>
                    </div>
                </div>
        </div>

        <div class="news_box">
            <label>{{ __('latest-news') }}</label>
            <div class="news_wrapper">
               @foreach($posts as $post)
               <div class="news_content">
                  <a href="{{$post->source}}">
                  <img src="{{asset('backend/images/news/'.$post->image)}}" alt="news post images {{$post->title}}"/>
                  <label>{{$post->title}}</label>
                  <label style="font-size:16px;color:white;">{{date('Y.m.d', strtotime($post->created_at));}}</label>
                  </a>
               </div>
               @endforeach
            </div>
            <div class="news_footer">
               <button onMouseOver="this.style.background='#40455C'" onMouseOut="this.style.background='transparent'" type="button" onclick="location.href='/community/news'">{{ __('btn-more') }}</button>
            </div>
        </div>

    {{-- </div> --}}


    @include('frontend.includes.footer')

    <script src="../frontend/js/wow.min.js"></script>
    <script>
        new WOW().init();
        // Ambil elemen video
        const videoD = document.querySelector('.video-dekstop');
        const videoM = document.querySelector('.video-mobile');
        // Ambil elemen kontainer video
        const container = document.querySelector('.container_video_text');

        // Hitung tinggi kontainer video
        const containerHeight = container.offsetHeight;

        // Tentukan posisi tengah layar vertikal
        const middleOfScreen = window.innerHeight / 1;

        // Tentukan kapan scaling harus dimulai (misalnya pada 1999px dari atas kontainer)
        const startScalingAt = container.offsetTop + containerHeight - middleOfScreen;

        // Faktor penurunan kecepatan scaling
        const scaleSlowFactor = 0.5; // Sesuaikan nilai ini untuk kecepatan scaling yang diinginkan

        // Tambahkan event listener untuk mendeteksi scroll mouse
        window.addEventListener('scroll', function() {
            // Dapatkan posisi scroll vertikal saat ini
            let scrollPosition = window.scrollY + middleOfScreen;

            // Hitung nilai scale berdasarkan posisi scroll
            let scaleValue = 1;
            if (scrollPosition >= startScalingAt) {
                scaleValue = 1 - (scrollPosition - startScalingAt) * scaleSlowFactor / (containerHeight - middleOfScreen);
                // Pastikan scaleValue tidak kurang dari 0
                scaleValue = Math.max(scaleValue, 0);
            }

            // Terapkan transformasi pada video tanpa rotasi
            videoD.style.transform = `scale(${scaleValue})`;
            videoM.style.transform = `scale(${scaleValue})`;
        });

        document.addEventListener("DOMContentLoaded", function() {
            const elements = document.querySelectorAll('.item');

            function checkVisibility() {
                elements.forEach(element => {
                    const rect = element.getBoundingClientRect();
                    if (rect.top < window.innerHeight && rect.bottom >= 0) {
                        element.classList.add('visible');
                    } else {
                        element.classList.remove('visible');
                    }
                });
            }

            window.addEventListener('scroll', checkVisibility);
            window.addEventListener('resize', checkVisibility);

            // Initial check on load
            checkVisibility();
        });

        // Mendapatkan elemen vision_text
        const visionText = document.getElementById('visi_txt');

        // Mendeteksi saat pengguna melakukan scroll
        window.addEventListener('scroll', () => {
            // Mendapatkan posisi scroll vertikal saat ini
            const scrollPosition = window.scrollY;

            // Menentukan kondisi untuk mengubah skala
            if (scrollPosition > 0) {
                visionText.style.transform = 'scale(1)';
            } else {
                visionText.style.transform = 'scale(0.5)';
            }
        });

        playVideo = function (video) {
            if (video && video.length) {
            video[0].play();
            video[0].controls = true;
            }
        }

        var slider = $('.slideshow-container');
        var setActiveSlide = function (slideIndex, autoplay) {
            const activeSlide = slider.find('.mySlides').eq(slideIndex);
            if (!activeSlide) return;
            activeSlideIndex = slideIndex;
            slider.find('.mySlides').hide(); // hide all slides
            activeSlide.show(); // display active slide
            $('.bullets').find('.dot').removeClass('active');
            $('.bullets').find('.dot').eq(slideIndex).addClass('active');

            // Pause all video
            // slider.find('video').each(function(elemIndex, elem  ) {
            // elem.pause();
            // });
            if (autoplay) {
            playVideo(activeSlide.find('video'));
            }
        };
        var activeSlideIndex = 0;
        setActiveSlide(activeSlideIndex);

        var toNextSlide = function(autoplay) {
            // Return if last slide
            if (activeSlideIndex >= slider.find('.mySlides').length) return;
            setActiveSlide(activeSlideIndex + 1, autoplay);
        }
        var toPrevSlide = function() {
            // Return if first slide
            if (activeSlideIndex === 0) return;
            setActiveSlide(activeSlideIndex -1);
        }

        // ADD EVENT LISTENERS
        $('video').on('play', function(e) {
            $(e.target).parents('.slideVideo').addClass('playing');
        });
        $('video').on('pause', function(e) {
            $(e.target).parents('.slideVideo').removeClass('playing');
        });

        $('video').on('ended', function(e) {
            toNextSlide(true);
        });
    </script>

</body>

</html>
