<!DOCTYPE html>
<html lang="en">

@include('frontend.includes.head')
<link rel="stylesheet" href="{{asset('frontend/css/home.css')}}"/>
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
                <div id="vision_txt" class="vision_text">
                    <label>ONE - STOP</label><label style="color:#40455C;">&nbsp;IT SOLUTION FOR YOUR BUSINESS</label>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="image-container">
                <a href="/intellegent-integrated-logistic">
                    <img src="../../frontend/images/IIL.jpg">
                        <div class="image-overlay">
                            <div class="ic-bisnis">
                            <img src="../../frontend/images/icon/ic_cube.svg">
                            </div><br>
                            <h1 >Intelligent Integrated Logistics</h1><br>
                            <span>Utilizing our unique transportation system and advanced technology, we offer solutions merging big data and AI. Our platforms enable efficient demand prediction and risk management.</span><br>
                            <div class="btn-more">More&nbsp;&nbsp;&nbsp;
                                <img src="../../frontend/images/icon/arrow.png">
                            </div>
                        </div>
                </a>
            </div>
        </div>
        <div class="item">
            <div class="image-container">
                <a href="/digital-healthcare">
                    <img src="../../frontend/images/DHC.jpg">
                        <div class="image-overlay">
                        <div class="ic-bisnis">
                            <img src="../../frontend/images/icon/ic_medical.svg">
                            </div><br>
                            <h1 >Digital Health Care</h1><br>
                            <span>We offer reliable health solutions through optimized customer-tailored consultations by healthcare professionals, integrating AI-based big data analysis considering customer preferences, health status, underlying conditions, and medications.</span><br>
                            <div class="btn-more">More&nbsp;&nbsp;&nbsp;
                                <img src="../../frontend/images/icon/arrow.png">
                            </div>
                        </div>
                </a>
            </div>
        </div>
        <div class="item">
            <div class="image-container">
                <a href="/system-development-management">
                    <img src="../../frontend/images/SDM.jpg">
                        <div class="image-overlay">
                        <div class="ic-bisnis">
                            <img src="../../frontend/images/icon/ic_code.svg">
                            </div><br>
                            <h1 >System development and management</h1><br>
                            <span>From planning to maintenance, we offer innovative solutions with unique expertise for domestic and global clients.</span><br>
                            <div class="btn-more">More&nbsp;&nbsp;&nbsp;
                                <img src="../../frontend/images/icon/arrow.png">
                            </div>
                        </div>
                </a>
            </div>
        </div>
        <div class="item">
            <div class="image-container">
                <a href="/export-voucher">
                    <img src="../../frontend/images/EV.jpg">
                        <div class="image-overlay">
                        <div class="ic-bisnis">
                            <img src="../../frontend/images/icon/ic_building.svg">
                            </div><br>
                            <h1 >Export Voucher</h1><br>
                            <span>We assist in every step for successful business execution, from analysis to document services and translation for global expansion.</span><br>
                            <div class="btn-more">More&nbsp;&nbsp;&nbsp;
                                <img src="../../frontend/images/icon/arrow.png">
                            </div>
                        </div>
                </a>
            </div>
        </div>

        <!-- <div class="flex-box">
            <div class="box_right">
                <img class="icon_right" src="../../frontend/images/icon/ic_cube.svg"/>
                <label>Intelligent Integrated Logistics</label><br>
                <span style="font-size:22px;">Utilizing our unique transportation system and advanced technology, we offer solutions merging big data and AI. Our platforms enable efficient demand prediction and risk management.</span>
            </div>
            <img class="img_right" src="../../frontend/images/home1.svg"/>
        </div>
        <div class="flex-box">
            <img class="img_left" src="../../frontend/images/home2.svg"/>
            <div class="box_left">
                <img class="icon_left" src="../../frontend/images/icon/ic_medical.svg"/>
                <label>Digital Health Care</label><br>
                <span style="font-size:22px;">We offer reliable health solutions through optimized customer-tailored consultations by healthcare professionals, integrating AI-based big data analysis considering customer preferences, health status, underlying conditions, and medications.</span>
            </div>
        </div>
        <div class="flex-box">
            <div class="box_right">
                <img class="icon_right" src="../../frontend/images/icon/ic_code.svg"/>
                <label>System development and management</label><br>
                <span style="font-size:22px;">From planning to maintenance, we offer innovative solutions with unique expertise for domestic and global clients.</span>
            </div>
            <img class="img_right" src="../../frontend/images/home3.svg"/>
        </div>
        <div class="flex-box">
            <img class="img_left" src="../../frontend/images/home4.svg"/>
            <div class="box_left">
                <img class="icon_left" src="../../frontend/images/icon/ic_building.svg"/>
                <label style="font-size:28px;font-weight:bold;">Global Business</label><br>
                <span style="font-size:22px;">We assist in every step for successful business execution, from analysis to document services and translation for global expansion.</span>
            </div>
        </div> -->

        <div class="clientSection">
            <div class="client_text">
                <p>Collaborating seamlessly to create value and drive success for our clients.</p>
            </div>
                <!-- <marquee behavior="scroll" direction="left">
                    <img src="../../frontend/images/icon/korea.png"/>
                    <img src="../../frontend/images/icon/ditjen.png"/>
                    <img src="../../frontend/images/icon/bni.png"/>
                    <img src="../../frontend/images/icon/jayaraya.png"/>
                    <img src="../../frontend/images/icon/ovo.png"/>
                    <img src="../../frontend/images/icon/dishub.png"/>
                </marquee> -->

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
            <label>Latest News</label>
            <div class="news_wrapper">
               @foreach($posts as $post)
               <div class="news_content">
                  <a href="{{$post->source}}">
                  <img src="{{asset('backend/images/news/'.$post->image)}}"/>
                  <label>{{$post->title}}</label>
                  <label style="font-size:16px;color:white;">{{$post->created_at}}</label>
                  </a>
               </div>
               @endforeach
            </div>
            <div class="news_footer">
               <button onMouseOver="this.style.background='#40455C'" onMouseOut="this.style.background='transparent'" type="button" onclick="location.href='/community/news'">More</button>
            </div>
        </div>

        <!-- Contact Us COntent -->
        <!-- <div style="
            padding: 100px 100px 100px 100px;
            margin: 100px 100px 100px 100px;
            border-radius: 20px 20px 20px 20px;
            background: #40455C;
            display: flex;
                justify-content: center;
                align-items: center;">
            <div style="
                display:grid;
                flex-direction: column;">
                <label style="font-size:70px;color:white;font-weight:bold;">Elevate Your<br>Business Now</label><br>
                <p style="width:40%;font-size:16px;color:white;">We offer standout IT consulting, management, and development services, providing unmatched solutions that drive transformative growth and spark innovation for your business.</p>
            </div>
            <button style="
                height:fit-content;
                padding:15px 30px 15px 30px;
                font-size:22px;
                color:black;
                border-radius: 50px;">
                <label style="margin-right:30px;">Contact Us</label>
                <img src="../../frontend/images/icon/ic_arrow_miring.svg"/>
            </button>
        </div> -->

    {{-- </div> --}}

    <!-- <div data-include="in/component/footer"></div> -->

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
        const visionText = document.getElementById('vision_txt');

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
