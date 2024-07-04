<div id="header-wrapper">
            <div class="menu-wrapper">
                <ul class="menu-box">
                    <li >
                        <a class="logo"  href="/home">
                            <img style="width: 75%;" class="effect-off" src="../../frontend/images/icon/ic_logo.png" />
                            <img style="width: 75%;" class="effect-on" src="../../frontend/images/icon/ic_logo.png" />
                        </a>
                    </li>
                    <li class="first-menu hidden-box>"><a href="/home">Home</a></li>
                    <li class="first-menu hidden-box business">
                        <a class="btn_business">Business&nbsp;&nbsp;&nbsp;
                        <img src="../../frontend/images/icon/arrow-down.png" class="language_caret"/></a>
                        <ul class="hidden-menu" style="width: 305px;">
                            <li><a href="/our-business/intellegent-integrated-logistic"><em>Intelligent Integrated Logistics</em></a></li>
                            <li><a href="/our-business/digital-healthcare"><em>Digital Healthcare</em></a></li>
                            <li><a href="/our-business/system-development-management"><em>System Development & Management</em></a></li>
                            <li><a href="/our-business/export-voucher"><em>Export Voucher</em></a></li>
                        </ul>
                    </li>
                    <li class="first-menu hidden-box"><a href="/about-us">About</a>
                    </li>
                    <li class="first-menu hidden-box business">
                        <a class="btn_business">Community&nbsp;&nbsp;&nbsp;
                        <img src="../../frontend/images/icon/arrow-down.png" class="language_caret"/></a>
                        <ul class="hidden-menu" style="width: 150px">
                            <li><a href="/community/notice"><em>Notice</em></a></li>
                            <li><a href="/community/news"><em>News</em></a></li>
                        </ul>
                    </li>
                </ul>

                <div class="content-right">
                    <a href="https://www.youtube.com/channel/UCk4YWCZF81paAh_rzwwiKxQ" class="btn_contact_us">Our Video&nbsp;&nbsp;&nbsp; <img style="width: 12%;" src="../../frontend/images/icon/polygon.png" ></a>
                    <a href="/contact-us" class="btn_contact_us">Contact Us&nbsp;&nbsp;&nbsp; <img style="width: 12%;" src="../../frontend/images/icon/arrow.png" class="language_flag"></a>

                    {{-- <div class="right-box language">
                        <div class="lang-box hidden-box bahasa">
                            <a class="lang-btn">
                                <img style="width: 14%;" src="../../frontend/images/icon/language.png" class="language_flag"/>
                                <span>&nbsp;&nbsp;&nbsp;English&nbsp;&nbsp;&nbsp;</span>
                                <img src="../../frontend/images/icon/arrow-down.png" class="language_caret"/>
                            </a>
                            <ul class="lang-menu hidden-menu">
                                <li><a href="../en/index.html"><img src="../../frontend/images/icon/flag-english.png"/> English</a></li>
                                <li><a href="../kr/index.html"><img src="../../frontend/images/icon/flag-korea.png"/> Korea</a></li>
                                <li><a href="../in/index.html"><img src="../../frontend/images/icon/flag-indo.png"/> Indonesia</a></li>
                            </ul>
                        </div>
                    </div> --}}
                    <div class="nav-mobile">
                        <div class="nav-wrapper">
                            <a class="logo" href="#">
                                <img style="width: 75%;" src="../../frontend/images/icon/ic_logo.png" />
                            </a>
                            <div class="right-mobile">
                                <a href="https://www.youtube.com/channel/UCk4YWCZF81paAh_rzwwiKxQ" class="btn-video-mobile">Our Video&nbsp;&nbsp;&nbsp;
                                    <img style="width: 12%;" src="../../frontend/images/icon/polygon.png" >
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="ham-wrapper">
                        <a class="mobile-ham hambuger-menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>

        <div class="mobile-menu">
            <div class="inner">
                <a class="icon-mobile" href="#">
                    <img src="../../frontend/images/icon/favicon.ico" />
                    <p>Networks Indonesia Aku</p>
                </a>
                <ul>
                    <li>
                        <a class="first-menu" href="/">HOME</a>
                    </li>

                    <li>
                        <a class="first-menu">BUSINESS</a>
                        <div class="second-menu">
                            <a href="/our-business/intellegent-integrated-logistic">Intelligent Integrated Logistics</a>
                            <br />
                            <a href="/our-business/digital-healthcare">Digital Healthcare</a>
                            <br />
                            <a href="/our-business/system-development-management">System Development & Management</a>
                            <br />
                            <a href="/our-business/export-voucher">Export Voucher</a>
                        </div>
                    </li>

                    <li>
                        <a class="first-menu" href="/about-us">ABOUT</a>
                    </li>

                    <li>
                        <a class="first-menu">COMMUNITY</a>
                        <div class="second-menu">
                            <a href="/community/notice">Notice</a>
                            <br>
                            <a href="/community/news">News</a>
                        </div>
                    </li>

                    <li>
                        <a href="/contact-us" class="first-menu">CONTACT US</a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCk4YWCZF81paAh_rzwwiKxQ" class="first-menu">OUR VIDEO</a>
                    </li>
                    {{-- <li>
                        <a class="first-menu">LANGUAGE</a>
                        <div class="second-menu">
                            <a href="/"><img src="../../frontend/images/icon/flag-english.png"/> English</a>
                            <br>
                            <a href="/kr"><img src="../../frontend/images/icon/flag-korea.png"/> Korea</a>
                            <br>
                            <a href="/in"><img src="../../frontend/images/icon/flag-indo.png"/> Indonesia</a>
                        </div>
                    </li> --}}
                </ul>
            </div>
        </div>
</div>
<script>
    $('.hidden-box').mouseover(function(){
        if($('.hambuger-menu').hasClass('active')){
            return false
        } else{
            $(this).children('.hidden-menu').stop().fadeIn(200);
        }
    });
    $('.hidden-box').mouseleave(function(){
        if($('.hambuger-menu').hasClass('active')){
            return false
        } else{
            $(this).children('.hidden-menu').stop().fadeOut(200);
        }
    });

    /* header-wrapper scroll event */
    $(window).scroll(function(){
        if($(document).scrollTop() > 40){
            $("#header-wrapper").addClass("color-effect");
        } else{
            $("#header-wrapper").removeClass("color-effect");
        }
    });

    /* hambuger menu event */
    $('.pc-ham').on('click' , function(){
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            $('.pc-hidden').stop().fadeIn();
            $('.pc-bg').stop().fadeIn();
        } else{
            $(this).removeClass('active');
            $('.pc-hidden').stop().fadeOut();
            $('.pc-bg').stop().fadeOut();
        }
    });

    $('.mobile-ham').on('click' , function(){
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            $('.mobile-menu').stop().fadeIn();
            $('.nav-mobile').stop().fadeOut();
            $('.mobile-menu .inner').stop().fadeIn();
        } else{
            $(this).removeClass('active');
            $('.nav-mobile').stop().fadeIn();
            $('.mobile-menu').stop().fadeOut();
            $('.mobile-menu .inner').stop().fadeOut();
            $('.mobile-menu .second-menu').stop().fadeOut();

        }
    });

    $('.mobile-menu .first-menu').on('click' , function(){
        if(!$(this).hasClass('active')){
            $('.mobile-menu .first-menu').removeClass('active');
            $(this).addClass('active');
            $('.mobile-menu .second-menu').stop().fadeOut();
            $(this).next().stop().fadeIn();
        } else{
            $(this).removeClass('active');
            $(this).next().stop().fadeOut();
        }
    });
</script>