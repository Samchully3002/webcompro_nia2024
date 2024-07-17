<!DOCTYPE html>
<html lang="en">
   @include('frontend.includes.head')
   <link rel="stylesheet" href="{{asset('frontend/css/contact.css')}}"/>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src="https://www.google.com/recaptcha/api.js?render={{env('RECAPTCHA_SITE_KEY')}}"></script>


   </head>
   <body>
      <!-- <div data-include="component/header"></div> -->
      @include('frontend.includes.header')

        {{-- <div class="page-introduction"> --}}

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
                            <a href="https://instagram.com/networksindonesiaaku" target="_blank"><img src='../../frontend/images/icon/ig.png' /></a>
                            <a href="https://www.tiktok.com/@networksindonesiaaku" target="_blank"><img src='../../frontend/images/icon/tk.png' /></a>
                            <a href="https://www.facebook.com/profile.php?id=100086498050992" target="_blank"><img src='../../frontend/images/icon/fb.png' /></a>
                            <a href="https://www.youtube.com/@networksindonesiaaku4258?themeRefresh=1" target="_blank"><img src='../../frontend/images/icon/yt.png' /></a>
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
                                                    placeholder="{{__ ('form-name') }}"
                                                />
                                            </label>

                                            <label>
                                                <input
                                                    id="email"
                                                    name="email"
                                                    type="text"
                                                    placeholder="{{__ ('form-email') }}"
                                                />
                                            </label>

                                            <label>
                                                <textarea
                                                    id="message"
                                                    name="message"
                                                    placeholder="{{__ ('form-msg') }}"
                                                ></textarea>
                                            </label>

                                            <!-- <label class="check-box">
                                                <input
                                                    type="checkbox"
                                                    class="checkbox-type1"
                                                />
                                                <em
                                                    >Saya menyetujui pengumpulan dan
                                                    penggunaan informasi pribadi.</em
                                                >
                                            </label> -->
                                           
                                            <div class="g-recaptcha" name="g-recaptcha" id="g-recaptcha"  data-sitekey="{{env('RECAPTCHA_SITE_KEY')}}"></div>
                                            <br/>
                                            <button type="button" id="btn_form_message">{{__ ('btn-submit') }}</button>
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
            <!-- map-wrapper end -->

            {{-- </div> --}}

            @include('frontend.includes.footer')

        <script type="text/javascript">
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
                    let data = new FormData(form);

                    $.ajax({
                        url: "{{ route('contact-us-submit') }}",
                        type: "POST",
                        data: data,
                        dataType: "JSON",
                        processData: false,
                        contentType: false,
                            success: function(response) {
                                $('#form_message')[0].reset();
                                dispNotif('Saving Data Success', response.message, 'success');
                            },
                            error: function(xhr, status, error) {
                                dispNotif('', 'error saving data', 'error');
                            }

                        });

                    })
            });
        </script>

    </body>
</html>
