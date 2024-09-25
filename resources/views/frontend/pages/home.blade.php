<!DOCTYPE html>
<html lang="en">

@include('frontend.includes.head',['meta'=>$meta])
<!-- dev -->
<link rel="stylesheet" href="{{asset('frontend/css/home.css')}}"/>
<link rel="stylesheet" href="{{asset('frontend/lib/swiper-bundle.min.css')}}" />
 <!-- production -->
{{-- <link rel="stylesheet" href="{{asset('frontend/css/minify/home.min.css')}}"/> --}}
</head>
<body>
<!-- <div data-include="component/header"></div> -->
@include('frontend.includes.header')
{{-- ================================================ VIDEO SLIDER FROM SAMCHULLY ================================================ --}}
    <section class="mainWrapper swiper">
        <h2>{{__('txt-vid1')}}<br>{{__('txt-vid2')}}<br>{{__('txt-vid3')}}</h2>
        <div id="mainSld" class="swiper-wrapper">
            <a class="swiper-button-prev"></a>
            <div class="item swiper-slide">
                <!-- <img src="./assets/images/main-img01.jpg" /> -->
                <video id="video1" src="../frontend/video/company_profile.mp4" autoplay muted loop playsinline></video>
                <div class="textBox">
                    <p>{{ __('header-video1') }}</p>
                </div>
            </div>
            <div class="item swiper-slide">
                <!-- <img src="./assets/images/main-img12.png" /> -->
                <video id="video2" src="../frontend/video/main-video02.mp4" autoplay muted loop playsinline></video>
                <div class="textBox">
                    <div data-swiper-parallax="-100">
                        <h4>{{ __('header-video2') }}</h4>
                    </div>
                </div>
            </div>
            <div class="item swiper-slide">
                <!-- <img src="./assets/images/main-img13.png" /> -->
                <video id="video3" src="../frontend/video/main-video03.mp4" autoplay muted loop playsinline></video>
                <div class="textBox">
                    <div data-swiper-parallax="-100">
                        <h4>{{ __('header-video3') }}</h4>
                    </div>
                </div>
            </div>
            <a class="swiper-button-next"></a>
        </div>
        <div class="pagination"></div>
    </section>
{{-- ================================================ VIDEO SLIDER FROM SAMCHULLY ================================================ --}}
    {{-- <div class="container_text"> --}}
        <div class="vision_text">
            <label>ONE - STOP</label><label style="color:#40455C;">&nbsp;IT SOLUTION FOR YOUR BUSINESS</label>
        </div>
    {{-- </div> --}}

{{-- ================================================= New to Old Design ============================================================== --}}

    <div class=row>
      {{-- 01 --}}
      <div class="item">
        <a href="/intellegent-integrated-logistic" class="wrap-box">
            <div class="txtbox">
                <img src="../../frontend/images/icon/ic_homeLogistic.svg" alt="icon arrow">
                <p >{{ __('iil') }}</p><br>
                <span>{{ __('iil-content') }}</span><br>
            </div>
            <img class="subImg" src="../../frontend/images/IIL.jpg"/>
        </a>
      </div>
      {{-- 02 --}}
      <div class="item">
        <a href="/digital-healthcare" class="wrap-box">
            <img class="subImg" src="../../frontend/images/DHC.jpg"/>
            <div class="txtbox">
                <img src="../../frontend/images/icon/ic_medical.svg" alt="icon arrow">
                <p >{{ __('dh') }}</p><br>
                <span>{{ __('dh-content') }}</span><br>
            </div>
        </a>
      </div>
      {{-- 03 --}}
      <div class="item">
        <a href="/system-development-management" class="wrap-box">
            <div class="txtbox">
                <img src="../../frontend/images/icon/ic_code.svg" alt="icon arrow">
                <p >{{ __('sdm') }}</p><br>
                <span>{{ __('sdm-content') }}</span><br>
            </div>
            <img class="subImg" src="../../frontend/images/SDM.jpg"/>
        </a>
      </div>
      {{-- 04 --}}
      <div class="item">
        <a href="/export-voucher" class="wrap-box">
            <img class="subImg" src="../../frontend/images/EV.jpg"/>
            <div class="txtbox">
                <img src="../../frontend/images/icon/ic_building.svg" alt="icon arrow">
                <p >{{ __('ev') }}</p><br>
                <span>{{ __('ev-content') }}</span><br>
            </div>
        </a>
      </div>
      {{-- 05 --}}
      <div class="item">
        <a href="/web-design" class="wrap-box">
            <div class="txtbox">
                <img src="../../frontend/images/icon/global.svg" alt="icon arrow">
                <p >{{ __('wdd') }}</p><br>
                <span>{{ __('wdd-content') }}</span><br>
            </div>
            <img class="subImg" src="../../frontend/images/WDD.jpg"/>
        </a>
      </div>
      {{-- 06 --}}
      <div class="item">
        <a href="/creative-solutions" class="wrap-box">
            <img class="subImg" src="../../frontend/images/CS.jpg"/>
            <div class="txtbox">
                <img src="../../frontend/images/icon/designtools.svg" alt="icon arrow">
                <p >{{ __('cs') }}</p><br>
                <span>{{ __('cs-content') }}</span><br>
            </div>
        </a>
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
    <script src="../frontend/lib/swiper-bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            /* main sld event start */
            const swiper = new Swiper('.swiper', {
                // loopAdditionalSlides:1,
                direction: 'horizontal',
                parallax: true, // 패럴랙스 활성화
                speed: 1500, // 패럴랙스 스피드 (옵션)
                initialSlide: 0 ,
                slidesPerView:"auto",
                allowTouchMove : true,
                effect : 'fade',
                fadeEffect: { crossFade: true },
                allowTouchMove:false,
                observer: true,
                observeParents: true,
                autoplayDisableOnInteraction:true,
                loop:true,
                loopedSlides:1,
                autoplay:{
                    delay: 4300,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination : {   // 페이저 버튼 사용자 설정
                    el : '.pagination',  // 페이저 버튼을 담을 태그 설정
                    clickable : false,  // 버튼 클릭 여부
                    type : 'bullets', // 버튼 모양 결정 "bullets", "fraction"
                    renderBullet : function (index, className) {  // className이 기본값이 들어가게 필수 설정
                        return '<a href="#" class="' + className + '">' + (index + 1) + '</a>'
                    },
                    renderFraction: function (currentClass, totalClass) { // type이 fraction일 때 사용
                        return '<span class="' + currentClass + '"></span>' + '<span class="' + totalClass + '"></span>';
                    }
                },
                a11y: { // 웹접근성
                    enabled: true,
                    prevSlideMessage: 'previous slide',
                    nextSlideMessage: 'next slide',
                    slideLabelMessage: 'This is slide',
                },
                on: {
                    slideChange: function(swiper){
                        let i = swiper.realIndex;
                        let video1 = $('#video1').get(0);
                        let video2 = $('#video2').get(0);
                        let video3 = $('#video3').get(0);
                        $(".mainWrapper h3").removeClass('active');

                        video1.currentTime = 0;
                        $('#video1').get(0).pause();
                        video2.currentTime = 0;
                        $('#video2').get(0).pause();
                        video3.currentTime = 0;
                        $('#video3').get(0).pause();

                        $('#video'+(i+1)).get(0).play();

                        if(i !== 0){
                            $('.mainWrapper h2').addClass('active');
                            $(".mainWrapper p").addClass('active2');
                        } else{
                            $('.mainWrapper h2').removeClass('active');
                            $(".mainWrapper p").removeClass('active2');
                        }
                    },
                },
            });
        });

        // new WOW().init();
        // // Ambil elemen video
        // const videoD = document.querySelector('.video-dekstop');
        // const videoM = document.querySelector('.video-mobile');
        // // Ambil elemen kontainer video
        // const container = document.querySelector('.container_video_text');

        // // Hitung tinggi kontainer video
        // const containerHeight = container.offsetHeight;

        // // Tentukan posisi tengah layar vertikal
        // const middleOfScreen = window.innerHeight / 1;

        // // Tentukan kapan scaling harus dimulai (misalnya pada 1999px dari atas kontainer)
        // const startScalingAt = container.offsetTop + containerHeight - middleOfScreen;

        // // Faktor penurunan kecepatan scaling
        // const scaleSlowFactor = 0.5; // Sesuaikan nilai ini untuk kecepatan scaling yang diinginkan

        // // Tambahkan event listener untuk mendeteksi scroll mouse
        // window.addEventListener('scroll', function() {
        //     // Dapatkan posisi scroll vertikal saat ini
        //     let scrollPosition = window.scrollY + middleOfScreen;

        //     // Hitung nilai scale berdasarkan posisi scroll
        //     let scaleValue = 1;
        //     if (scrollPosition >= startScalingAt) {
        //         scaleValue = 1 - (scrollPosition - startScalingAt) * scaleSlowFactor / (containerHeight - middleOfScreen);
        //         // Pastikan scaleValue tidak kurang dari 0
        //         scaleValue = Math.max(scaleValue, 0);
        //     }

        //     // Terapkan transformasi pada video tanpa rotasi
        //     videoD.style.transform = `scale(${scaleValue})`;
        //     videoM.style.transform = `scale(${scaleValue})`;
        // });

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

// ============================================= JS FOR VIDEO SLIDER FROM WEBSITE SAMCHULLY =============================================
    </script>

</body>

</html>
