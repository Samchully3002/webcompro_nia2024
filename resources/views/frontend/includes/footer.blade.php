<div class="scale-in-footer">
<div id="footer-wrapper">
    <div class="row">
        <!-- <div class="imx"> -->

            <div class="clear footer-top">

                <div class="footer3blok">
                    <div class="blok">
                        <img src="{{asset('frontend/images/icon/logo_ftr.svg')}}" alt="PT. Networks Indonesia Aku" class="logo-footer">
                        <div class="location clear">
                            <div class="address">
                                <span class="title">Connecting The World Through Technology</span>
                            </div>
                        </div>
                    </div>
                    <div class="blok">
                        <div>
                            <h1>Our Company</h1>
                            <ul>
                                <li><a href="/about-us">About Us</a></li>
                                <li><a href="/community/news">News</a></li>
                                <li><a href="/community/notice">Notice</a></li>
                                <li><a href="https://www.youtube.com/@networksindonesiaaku4258" target="_blank" rel="noopener">Our Videos</a></li>
                                <li><a href="/contact">Contact Us</a></li>
                            </ul>
                        </div>
                        <div>
                            <h1>Business</h1>
                            <ul>
                                <li><a href="/intellegent-integrated-logistic">Intelligent Integrated Logistics</a></li>
                                <li><a href="/digital-healthcare">Digital Health Care</a></li>
                                <li><a href="/system-development-management">System Development & Management</a></li>
                                <li><a href="/export-voucher">Export Voucher</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="blok">
                        <div>
                            <h3>PT. Networks Indonesia Aku</h3>
                            <p>AIA CENTRAL 21st Floor.</p>
                            <p>Jenderal Sudirman Street, Number Kav. 48A,</p>
                            <p>Karet Semanggi, Kecamatan Setiabudi,</p>
                            <p>South Jakarta City, DKI Jakarta 12930</p>
                        </div>
                        <div>
                            <h3>Samchully Networks (South Korea HQ)</h3>
                            <p><a href="https://www.sclnetworks.co.kr" target="_blank" rel="noopener">https://www.sclnetworks.co.kr</a></p>
                        </div>
                        <div>
                            <h3>Email</h3>
                            <p><a href="mailto:networksindonesiaku@gmail.com" target="_blank" rel="noopener">info@nia.co.id</a></p>
                        </div>
                        <div class="gapDiantara">
                            <a href="https://instagram.com/networksindonesiaaku" target="_blank"><img src='{{asset("frontend/images/icon/ig.png")}}' /></a>
                            <a href="https://www.tiktok.com/@networksindonesiaaku" target="_blank"><img src='{{asset("frontend/images/icon/tk.png")}}' /></a>
                            <a href="https://www.facebook.com/profile.php?id=100086498050992" target="_blank"><img src='{{asset("frontend/images/icon/fb.png")}}' /></a>
                            <a href="https://www.youtube.com/@networksindonesiaaku4258?themeRefresh=1" target="_blank"><img src='{{asset("frontend/images/icon/yt.png")}}' /></a>            
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
                    <li><a href="/privacy-policy">Privacy Policy</a></li>
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