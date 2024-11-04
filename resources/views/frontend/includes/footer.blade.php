<div class="scale-in-footer">
<div id="footer-wrapper">
    <div class="row">
        <!-- <div class="imx"> -->

            <div class="clear footer-top">

                <div class="footer3blok">
                    <div class="blok">
                        <img src="{{asset('frontend/images/icon/logo_ftr.svg')}}" alt="PT. Networks Indonesia Aku" class="logo-footer" alt="logo footer">
                        <div class="location clear">
                            <div class="address">
                                <span class="title">{{ __ ('footer-tagline')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="blok">
                        <div>
                            <h1>{{ __ ('footer-company')}}</h1>
                            <ul>
                                <li><a href="/about-us">{{ __ ('footer-about')}}</a></li>
                                <li><a href="/community/notice">{{ __ ('footer-notice')}}</a></li>
                                <li><a href="/community/news">{{ __ ('footer-news')}}</a></li>
                                <li><a href="https://www.youtube.com/@networksindonesiaaku4258" target="_blank" rel="noopener">{{ __ ('footer-videos')}}</a></li>
                                <li><a href="/contact">{{ __ ('footer-contact')}}</a></li>
                            </ul>
                        </div>
                        <div>
                            <h1>{{ __ ('footer-business')}}</h1>
                            <ul>
                                <li><a href="/intellegent-integrated-logistic">{{ __ ('iil')}}</a></li>
                                <li><a href="/digital-healthcare">{{ __ ('dh')}}</a></li>
                                <li><a href="/system-development-management">{{ __ ('sdm')}}</a></li>
                                <li><a href="/export-voucher">{{ __ ('ev')}}</a></li>
                                <li><a href="/web-design">{{ __ ('wdd')}}</a></li>
                                <li><a href="/creative-solutions">{{ __ ('cs')}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="blok">
                        <div>
                            <h3>{{ __ ('footer-address')}}</h3>
                            <p>{{ __ ('footer-address1')}}</p>
                            <p>{{ __ ('footer-address2')}}</p>
                            <p>{{ __ ('footer-address3')}}</p>
                            <p>{{ __ ('footer-address4')}}</p>
                        </div>
                        <div>
                            <h3>{{ __ ('footer-hq')}}</h3>
                            <p><a href="https://www.sclnetworks.co.kr" target="_blank" rel="noopener">https://www.sclnetworks.co.kr</a></p>
                        </div>
                        <div>
                            <h3>{{ __ ('footer-email1')}}</h3>
                            <p><a href="mailto:info@nia.co.id" target="_blank" rel="noopener">{{ __ ('footer-email2')}}</a></p>
                        </div>
                        <div class="gapDiantara">
                            <a href="https://instagram.com/networksindonesiaaku" target="_blank"><img src='{{asset("frontend/images/icon/ig.png")}}'  alt="instagram icon"/></a>
                            <a href="https://www.tiktok.com/@networksindonesiaaku" target="_blank"><img src='{{asset("frontend/images/icon/tk.png")}}' alt="tiktok icon"/></a>
                            <a href="https://www.facebook.com/profile.php?id=100086498050992" target="_blank"><img src='{{asset("frontend/images/icon/fb.png")}}' alt="facebook icon"/></a>
                            <a href="https://www.youtube.com/@networksindonesiaaku4258?themeRefresh=1" target="_blank"><img src='{{asset("frontend/images/icon/yt.png")}}' alt="youtube icon"/></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clear layoutMobile">
                <div class="copyright fl">
                <em>PT. Networks Indonesia Aku. Copyright  © 2024</em>

                </div>
                <ul class="sitemap btn-box fr">
                <!-- <li><a>Terms and Conditions</a></li> -->
                    <li><a href="/privacy-policy">{{ __ ('footer-privacy') }}</a></li>
                    <!-- <li><a>Cookies</a></li> -->
                </ul>
            </div>
            <!-- recording visitor -->
             <form id="form_visitor" name="form_visitor" method="POST" onsubmit="return false">
                @csrf
                <input type="hidden" id="visited" name="visited" />
                <input type="hidden" id="ip" name="ip" />
             </form>
            <!-- recording visitor -->
        <!-- </div> -->
    </div>
</div>
</div>

<script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            const elements = document.querySelectorAll('.scale-in-footer');

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
