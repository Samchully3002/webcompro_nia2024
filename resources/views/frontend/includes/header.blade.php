<div id="header-wrapper">
    <div class="menu-wrapper">
        <ul class="menu-box">
            <li >
                <a class="logo" href="/">
                    <img style="width: 75%;" class="effect-off" src="../../frontend/images/icon/ic_logo.png" alt="logo feature"/>
                    <img style="width: 75%;" class="effect-on" src="../../frontend/images/icon/logo_ftr.svg" alt="logo feature"/>
                </a>
            </li>
            <li class="first-menu hidden-box"><a id="nav" href="/">{{ __('navbar-home') }}</a></li>
            <li class="first-menu hidden-box business">
                <div id="nav1" class="btn_business">{{ __('navbar-business') }}&nbsp;&nbsp;&nbsp;
                    <img width="13pt" src="../../frontend/images/icon/ic_arrow_white.png" class="language_caret" alt="language caret"/>
                </div>
                <ul class="hidden-menu">
                    <li><a href="/our-business/intellegent-integrated-logistic"><em>{{ __('iil') }}</em></a></li>
                    <li><a href="/our-business/digital-healthcare"><em>{{ __('dh') }}</em></a></li>
                    <li><a href="/our-business/system-development-management"><em>{{ __('sdm') }}</em></a></li>
                    <li><a href="/our-business/export-voucher"><em>{{ __('ev') }}</em></a></li>
                    <li><a href="/our-business/web-design"><em>{{ __('wdd') }}</em></a></li>
                    <li><a href="/our-business/creative-solutions"><em>{{ __('cs') }}</em></a></li>
                </ul>
            </li>
            <li class="first-menu hidden-box"><a id="nav2" href="/about-us">{{ __('navbar-about') }}</a>
            </li>
            <li class="first-menu hidden-box business">
                <div id="nav3" class="btn_business">{{ __('navbar-community') }}&nbsp;&nbsp;&nbsp;
                    <img width="13pt" src="../../frontend/images/icon/ic_arrow_white.png" class="language_caret" alt="language caret"/>
                </div>
                <ul class="hidden-menu">
                    <li><a href="/community/notice"><em>{{ __('navbar-notice') }}</em></a></li>
                    <li><a href="/community/news"><em>{{ __('navbar-news') }}</em></a></li>
                </ul>
            </li>
        </ul>

        <div class="content-right">
            <a id="nav4" target="blank" href="https://www.youtube.com/channel/UCk4YWCZF81paAh_rzwwiKxQ" class="btn_youtube">{{ __('navbar-video') }}&nbsp;&nbsp;&nbsp; <img src="../../frontend/images/icon/polygon.png"  alt="icon youtube"/></a>
            <a id="nav5" href="/contact-us" class="btn_contact_us">{{ __('navbar-contact') }}&nbsp;&nbsp;&nbsp; <img src="../../frontend/images/icon/arrow.png" alt="icon arrow"/></a>

            <div class="right-box language">
                <div class="lang-box hidden-box bahasa">
                    @foreach($available_locales as $locale_name => $available_locale)
                    @if($available_locale === $current_locale)
                    <a id="choseLang" class="lang-btn">
                        <img src="../../frontend/images/icon/language.png" class="language_flag" alt="icon lang flag"/>
                        <span>{{ $locale_name }}</span>
                        <img src="../../frontend/images/icon/ic_arrow_white.png" class="language_caret" alt="icon lang caret"/>
                    </a>
                    @else
                    <ul class="lang-menu hidden-menu">
                        @foreach($available_locales as $locale_name => $available_locale)
                        @if($available_locale === $current_locale)
                        @else
                        <li><a href="/lang/{{ $available_locale }}"><img src="../../frontend/images/icon/{{( $available_locale)}}.png" alt="icon all icon language"/> {{ $locale_name }}</a></li>
                        @endif
                        @endforeach
                    </ul>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="nav-mobile">
                <div class="nav-wrapper">
                    <a class="logo" href="/">
                        <img style="width: 75%;" class="effect-off" src="../../frontend/images/icon/ic_logo.png" alt="logo feature"/>
                        <img style="width: 75%;" class="effect-on" src="../../frontend/images/icon/logo_ftr.svg" alt="logo feature"/>
                        {{-- <img style="width: 75%;" src="../../frontend/images/icon/ic_logo.png" alt="icon"/> --}}
                    </a>
                    <div class="right-mobile">
                        <a id="btn1" target="blank" href="https://www.youtube.com/channel/UCk4YWCZF81paAh_rzwwiKxQ" class="btn-video-mobile">{{ __('navbar-video') }}&nbsp;&nbsp;&nbsp;
                            <img style="width: 12%;" src="../../frontend/images/icon/polygon.png" alt="icon"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="ham-wrapper">
                <a class="mobile-ham hambuger-menu" href="javascript:void(0)">
                    <span id="spn1"></span>
                    <span id="spn2"></span>
                    <span id="spn3"></span>
                </a>
            </div>
        </div>
    </div>

    <div class="mobile-menu">
        <div class="inner">
            <a class="icon-mobile" href="#">
                <img src="../../frontend/images/icon/favicon.ico" alt="favico"/>
                <p>Networks Indonesia Aku</p>
            </a>
            <ul>
                <li>
                    <a class="first-menu" href="/">{{ __('navbar-home') }}</a>
                </li>

                <li>
                    <a class="first-menu">{{ __('navbar-business') }}&nbsp;&nbsp;&nbsp;
                        <img width="13pt" src="../../frontend/images/icon/ic_arrow_black.png" class="language_caret" alt="language caret"/></a>
                    <div class="second-menu">
                        <a href="/our-business/intellegent-integrated-logistic">{{ __('iil') }}</a>
                        <br />
                        <a href="/our-business/digital-healthcare">{{ __('dh') }}</a>
                        <br />
                        <a href="/our-business/system-development-management">{{ __('sdm') }}</a>
                        <br />
                        <a href="/our-business/export-voucher">{{ __('ev') }}</a>
                        <br />
                        <a href="/our-business/web-design">{{ __('wdd') }}</a>
                        <br />
                        <a href="/our-business/creative-solutions">{{ __('cs') }}</a>
                    </div>
                </li>

                <li>
                    <a class="first-menu" href="/about-us">{{ __('navbar-about') }}</a>
                </li>
                <li>
                    <a class="first-menu">{{ __('navbar-community') }}&nbsp;&nbsp;&nbsp;
                        <img width="13pt" src="../../frontend/images/icon/ic_arrow_black.png" class="language_caret" alt="language caret"/></a>
                    <div class="second-menu">
                        <a href="/community/notice">{{ __('navbar-notice') }}</a>
                        <br>
                        <a href="/community/news">{{ __('navbar-news') }}</a>
                    </div>
                </li>

                <li>
                    <a href="/contact-us" class="first-menu">{{ __('navbar-contact') }}</a>
                </li>
                <li>
                    <a target="blank" href="https://www.youtube.com/channel/UCk4YWCZF81paAh_rzwwiKxQ" class="first-menu">{{ __('navbar-video') }}</a>
                </li>
                <li>
                    <a class="first-menu">{{__ ('navbar-lang') }}</a>
                    <div class="second-menu">
                        @foreach($available_locales as $locale_name => $available_locale)
                            @if($available_locale != $current_locale)
                                <a href="/lang/{{ $available_locale }}"><img src="../../frontend/images/icon/{{( $available_locale)}}.png" alt="available local lang"/> {{ $locale_name }}</a>
                            @endif
                        @endforeach
                    </div>
                </li>
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
        if($(document).scrollTop() > 200){
            $("#header-wrapper").addClass("color-effect");
            $("#nav1").addClass("color-effect");
            $("#choseLang").addClass("color-effect");
            $("#nav5").addClass("color-effect");
            $("#nav").css("color", "#444");
            $("#nav1").css("color", "#444");
            $("#nav2").css("color", "#444");
            $("#nav3").css("color", "#444");
            $("#nav4").css("color", "#444");
            $("#nav5").css("color", "#444");
            $("#choseLang").css("color", "#444");
            $("#btn1").addClass("color-effect");
            $("#spn1").addClass("add");
            $("#spn2").addClass("add");
            $("#spn3").addClass("add");
        } else{
            $("#header-wrapper").removeClass("color-effect");
            $("#nav1").removeClass("color-effect");
            $("#choseLang").removeClass("color-effect");
            $("#nav").css("color", "#ffffff");
            $("#nav1").css("color", "#ffffff");
            $("#nav2").css("color", "#ffffff");
            $("#nav3").css("color", "#ffffff");
            $("#nav4").css("color", "#ffffff");
            $("#nav5").css("color", "#ffffff");
            $("#choseLang").css("color", "#ffffff");
            $("#btn1").removeClass("color-effect");
            $("#spn1").removeClass("add");
            $("#spn2").removeClass("add");
            $("#spn3").removeClass("add");
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
