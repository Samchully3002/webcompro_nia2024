<!DOCTYPE html>
<html lang="en">
   @include('frontend.includes.head')
   <link rel="stylesheet" href="{{asset('frontend/css/contact.css')}}"/>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
   <link rel="stylesheet" href="{{asset('frontend/lib/swiper-bundle.min.css')}}" />
   </head>
   <body>
      <!-- <div data-include="component/header"></div> -->
      @include('frontend.includes.header')
            <!-- Banner top -->
            <div class="header-wrapper">
                <div class="box">
                    <div class="left-content">
                    <div class="text-box">
                    <div class="appear">
                        <span>{{__ ('contact') }}</span>
                    </div>


                        <div class="appear">
                            <h3>{{__ ('address') }}</h3>
                            <p>{{__ ('address1') }}</p>
                            <p>{{__ ('address2') }}</p>
                            <p>{{__ ('address3') }}</p>
                            <p>{{__ ('address4') }}</p>
                        </div>
                        <div class="appear">
                            <h3>{{__ ('hq') }}</h3>
                            <p><a href="https://www.sclnetworks.co.kr" target="_blank" rel="noopener">https://www.sclnetworks.co.kr</a></p>
                        </div>
                        <div class="appear">
                            <h3>{{__ ('email1') }}</h3>
                            <p><a href="mailto:info@nia.co.id" target="_blank" rel="noopener">{{__ ('email2') }}</a></p>
                        </div>
                        <div class="appear">
                            <a href="https://instagram.com/networksindonesiaaku" target="_blank"><img src='../../frontend/images/icon/ig.png' alt="image icon" /></a>
                            <a href="https://www.tiktok.com/@networksindonesiaaku" target="_blank"><img src='../../frontend/images/icon/tk.png' alt="image icon" /></a>
                            <a href="https://www.facebook.com/profile.php?id=100086498050992" target="_blank"><img src='../../frontend/images/icon/fb.png' alt="image icon"/></a>
                            <a href="https://www.youtube.com/@networksindonesiaaku4258?themeRefresh=1" target="_blank"><img src='../../frontend/images/icon/yt.png' alt="image icon"/></a>
                        </div>
                    </div>
                    </div>
                    <div class="right-content">
                        <!-- contact-wrapper start -->
                        <div class="contact-wrapper">
                            <div class="">
                                <div class="">
                                    <div class="form-box">
                                    <form id="form_message" name="form_message" method="POST" onsubmit="return false">
                                    @csrf
                                            <label>
                                                <input
                                                    id="sender"
                                                    name="sender"
                                                    type="text"
                                                    onblur="validate()"
                                                    placeholder="{{__ ('form-name') }}"
                                                />
                                            </label>

                                            <label>
                                                <input
                                                    id="email"
                                                    name="email"
                                                    type="text"
                                                    onblur="validate()"
                                                    placeholder="{{__ ('form-email') }}"
                                                />
                                            </label>

                                            <label>
                                                <textarea
                                                    id="message"
                                                    name="message"
                                                    onblur="validate()"
                                                    placeholder="{{__ ('form-msg') }}"
                                                ></textarea>
                                            </label>
                                                <div class="g-recaptcha" data-sitekey="6Lc4BhEqAAAAACVcTeYp0Nh6UiXzJGz9vw9UO9cS"></div>
                                            <button type="submit" id="btn_form_message" disabled>{{__ ('btn-submit') }}</button>
                                        </form>
                                        <iframe
                                            id="iframe1"
                                            name="iframe1"
                                            style="display: none"
                                        ></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- contact-wrapper end -->
                    </div>
                </div>
            </div>
            <!-- Banner top end -->

            <!-- map-wrapper start -->
            <div class="map-wrapper">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3456496281106!2d106.8144257745311!3d-6.218068060901542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f15549fa3d23%3A0x6e35f06585ecba5f!2sAIA%20Central!5e0!3m2!1sid!2sid!4v1701683012463!5m2!1sid!2sid"

                        ></iframe>
            </div>

            @include('frontend.includes.footer')

        <script src="../frontend/lib/swiper-bundle.min.js"></script>
        <script>
            function validate() {

                // let valid = true;
                let valid1 = checkEmpty($("#message"));
                let valid2 = checkEmpty($("#sender"));
                let valid3 = checkEmail($("#email"));
                // document.getElementById("btn_form_message").disabled = true;
                $("#btn_form_message").attr("disabled", true);

                if((valid1) && (valid2) && (valid3)){
                    // document.getElementById("btn_form_message").disabled = false;
                    $("#btn_form_message")
                        .css("cursor","pointer")
                        .css("background","rgb(18, 165, 229)")
                        .attr("disabled",false);
                }else{
                    $("#btn_form_message")
                        .css("cursor","not-allowed")
                        .css("background","rgb(131, 131, 131)")
                        .attr("disabled",true);
                }
            }
            function checkEmpty(obj) {
                var name = $(obj).attr("name");
                $("."+name+"-validation").html("");
                $(obj).css("border","");
                if($(obj).val() == "") {
                    $(obj).css("border","#FF0000 1px solid");
                    $("."+name+"-validation").html("Required");
                    return false;
                }

                return true;
            }

            function checkEmail(obj) {
                var result = true;

                var name = $(obj).attr("name");
                $("."+name+"-validation").html("");
                $(obj).css("border","");

                result = checkEmpty(obj);

                if(!result) {
                    $(obj).css("border","#FF0000 1px solid");
                    $("."+name+"-validation").html("Required");
                    return false;
                }

                var email_regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,3})+$/;
                result = email_regex.test($(obj).val());

                if(!result) {
                    $(obj).css("border","#FF0000 1px solid");
                    $("."+name+"-validation").html("Invalid");
                    return false;
                }

                return result;
            }

            function dispNotif(title, message, status){
                Swal.fire({
                title: '',
                text: message,
                icon: status
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

                $("#btn_form_message").click(function(e) {

                e.preventDefault();
                let form = $('#form_message')[0];

                grecaptcha.execute("{{ env('RECAPTCHA_SITE_KEY') }}", {action: '/contactus/submit'}).then(function(token) {
                    $('#form_message').prepend('<input type="hidden" name="gresponse" id="gresponse" value="' + token + '">');
                    let data = new FormData(form);

                    $.ajax({
                        url: "{{ route('contactussubmit') }}",
                        type: "POST",
                        data: data,
                        dataType: "JSON",
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            dispNotif('sending message success', response.message, 'success');
                            $('#form_message')[0].reset();
                            $("#btn_form_message")
                            .css("cursor","not-allowed")
                            .css("background","rgb(131, 131, 131)")
                            .attr("disabled",true);

                        },
                        error: function(xhr, status, error) {
                            dispNotif('', 'error sending message', 'error');
                        }

                    });

                })
                });
            });

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

        </script>

    </body>
</html>
