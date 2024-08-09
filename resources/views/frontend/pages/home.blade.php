<!DOCTYPE html>
<html lang="en">

@include('frontend.includes.head',['meta'=>$meta])
<!-- dev -->
<!-- <link rel="stylesheet" href="{{asset('frontend/css/home.css')}}"/> -->
 <!-- production -->
<<<<<<< HEAD
<link rel="stylesheet" href="{{asset('frontend/css/home.css')}}"/>
=======
<link rel="stylesheet" href="{{asset('frontend/css/minify/home.min.css')}}"/>
>>>>>>> 1c40c8fa17db8cd0a7094e5b0766199b077d2924
</head>
<body>
<!-- <div data-include="component/header"></div> -->
@include('frontend.includes.header')

    {{-- <div class="page page-in" id="page-main"> --}}
        <div class="container_video_text">
            <!-- Video start -->
            <div class="video-wrap fade-out">
                <div class="video-mask">
                    <video class="video-dekstop" autoplay muted loop>
                        <source src="../frontend/video/video.mp4" type="video/mp4">
                    </video>
                    <video class="video-mobile" autoplay muted loop>
                        <source src="../frontend/video/mobile.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <!-- Video end -->
            <div class="container_text">
                <div id="visi_txt" class="vision_text">
                    <label>ONE - STOP</label><label style="color:#40455C;">&nbsp;IT SOLUTION FOR YOUR BUSINESS</label>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="image-container">
                <a href="/intellegent-integrated-logistic">
                    <img src="../../frontend/images/IIL.jpg" alt="intellegent integrated logistic image banner">
                        <div class="image-overlay">
                            <div class="ic-bisnis">
                            <img src="../../frontend/images/icon/ic_cube.svg" alt="icon arrow">
                            </div><br>
                            <p >{{ __('iil') }}</p><br>
                            <span>{{ __('iil-content') }}</span><br>
                            <div class="btn-more">
                                <span>{{ __('btn-more') }}</span>&nbsp;&nbsp;&nbsp;
                                <img src="../../frontend/images/icon/arrow.png" alt="icon arrow">
                            </div>
                        </div>
                </a>
            </div>
        </div>
        <div class="item">
            <div class="image-container">
                <a href="/digital-healthcare">
                    <img src="../../frontend/images/DHC.jpg" alt="digital healthcare image banner">
                        <div class="image-overlay">
                        <div class="ic-bisnis">
                            <img src="../../frontend/images/icon/ic_medical.svg" alt="icon arrow">
                            </div><br>
                            <p >{{ __('dh') }}</p><br>
                            <span>{{ __('dh-content') }}</span><br>
                            <div class="btn-more">{{ __('btn-more') }}&nbsp;&nbsp;&nbsp;
                                <img src="../../frontend/images/icon/arrow.png" alt="icon arrow">
                            </div>
                        </div>
                </a>
            </div>
        </div>
        <div class="item">
            <div class="image-container">
                <a href="/system-development-management">
                    <img src="../../frontend/images/SDM.jpg" alt="system developement and management image banner">
                        <div class="image-overlay">
                        <div class="ic-bisnis">
                            <img src="../../frontend/images/icon/ic_code.svg" alt="icon arrow">
                            </div><br>
                            <p >{{ __('sdm') }}</p><br>
                            <span>{{ __('sdm-content') }}</span><br>
                            <div class="btn-more">{{ __('btn-more') }}&nbsp;&nbsp;&nbsp;
                                <img src="../../frontend/images/icon/arrow.png" alt="icon arrow">
                            </div>
                        </div>
                </a>
            </div>
        </div>
        <div class="item">
            <div class="image-container">
                <a href="/export-voucher">
                    <img src="../../frontend/images/EV.jpg" alt="export voucher image banner">
                        <div class="image-overlay">
                        <div class="ic-bisnis">
                            <img src="../../frontend/images/icon/ic_building.svg" alt="icon arrow">
                            </div><br>
                            <p >{{ __('ev') }}</p><br>
                            <span>{{ __('ev-content') }}</span><br>
                            <div class="btn-more">{{ __('btn-more') }}&nbsp;&nbsp;&nbsp;
                                <img src="../../frontend/images/icon/arrow.png" alt="icon arrow">
                            </div>
                        </div>
                </a>
            </div>
        </div>
        {{-- <div class="item">
            <div class="image-container">
                <a href="/web-design">
                    <img src="../../frontend/images/WDD.jpg" alt="export voucher image banner">
                    <div class="image-overlay">
                        <div class="ic-bisnis">
                            <img src="../../frontend/images/icon/global.svg" alt="icon arrow">
                        </div><br>
                        <p >{{ __('wdd') }}</p><br>
                        <span>{{ __('wdd-content') }}</span><br>
                        <div class="btn-more">{{ __('btn-more') }}&nbsp;&nbsp;&nbsp;
                            <img src="../../frontend/images/icon/arrow.png" alt="icon arrow">
                        </div>
                    </div>
                </a>
            </div>
<<<<<<< HEAD
        </div>
        <div class="item">
            <div class="image-container">
                <a href="/creative-solutions">
                    <img src="../../frontend/images/CS.jpg" alt="export voucher image banner">
                        <div class="image-overlay">
                        <div class="ic-bisnis">
                            <img src="../../frontend/images/icon/designtools.svg" alt="icon arrow">
                            </div><br>
                            <p >{{ __('cs') }}</p><br>
                            <span>{{ __('cs-content') }}</span><br>
                            <div class="btn-more">{{ __('btn-more') }}&nbsp;&nbsp;&nbsp;
                                <img src="../../frontend/images/icon/arrow.png" alt="icon arrow">
                            </div>
                        </div>
                </a>
            </div>
        </div>
=======
        </div> --}}
>>>>>>> 1c40c8fa17db8cd0a7094e5b0766199b077d2924


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
    </script>

<script>
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
</script>
    <script>
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
    </script>
    <script>
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
    </script>

</body>

</html>
