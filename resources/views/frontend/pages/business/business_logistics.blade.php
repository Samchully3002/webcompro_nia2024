<!DOCTYPE html>
<html lang="en">

@include('frontend.includes.head')
    <link rel="stylesheet" href="{{asset('frontend/css/business.css')}}"/>
    </head>

    <body>
    @include('frontend.includes.header')
        <!-- <div data-include="component/header"></div> -->

        <div class="page page-scroll page-in">
            <!-- bg-wrapper start -->
            <div class="bg-wrapper bisnis1">
                <div class="text-box">
                    <h1 class="appear">{{ __('iil') }}</h1>
                    <p class="appear">{{ __('iil-head') }}</p>
                </div>
            </div>
            <!-- bg-wrapper end -->

            <!-- section-wrapper start -->
          <div class="product-box">
            <div class="product-wrapper">
                {{-- <div class="img-backdrop">
                    <img src="../frontend/images/business-backdrop.png"/>
                </div> --}}
                <div class="colls-wrapper">
                    <div class="wrap-collabsible">
                        <input id="collapsible" class="toggle" type="checkbox" checked="checked">
                        <label for="collapsible" class="lbl-toggle">
                            <span>01</span>
                            <span>{{ __('samchullypay') }}</span>
                            <span class="icon-right">&nbsp;</span>
                        </label>
                        <div class="collapsible-content">
                            <div class="content">
                                <div class="text-wrapper">
                                    <p>{{ __('samchullypay-content') }}</p>
                                </div>
                                <div class="img-box">
                                    <img src="../frontend/images/bs-samchulypay1.svg"/>
                                    <img src="../frontend/images/bs-samchulypay2.svg"/>
                                    <img src="../frontend/images/bs-samchulypay3.svg"/>
                                </div>
                                <div class="img-box-mobile">
                                    <button class="btn_prev_img" onclick="plusDivs(-1)">&#8249;</button>

                                    <img class="mySlides1" src="../frontend/images/bs-samchulypay1.svg"/>
                                    <img class="mySlides1" src="../frontend/images/bs-samchulypay2.svg"/>
                                    <img class="mySlides1" src="../frontend/images/bs-samchulypay3.svg"/>

                                    <button class="btn_next_img" onclick="plusDivs(1)">&#8250;</button>
                                </div>
                                <div class="card-wrapper">
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_samchulypay1.svg"/>
                                        <span>{{ __('samchullypay1') }}</span>
                                        <p> {{ __('samchullypay1-content') }}
                                        </p>
                                    </div>
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_samchulypay2.svg"/>
                                        <span>{{ __('samchullypay2') }}</span>
                                        <p> {{ __('samchullypay2-content') }}
                                        </p>
                                    </div>
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_samchulypay3.svg"/>
                                        <span>{{ __('samchullypay3') }}</span>
                                        <p> {{ __('samchullypay2-content') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="colls-wrapper">
                    <div class="wrap-collabsible">
                        <input id="collapsible1" class="toggle" type="checkbox">
                        <label for="collapsible1" class="lbl-toggle">
                            <span>02</span>
                            <span>{{ __('olligo') }}</span>
                            <span class="icon-right">&nbsp;</span>
                        </label>
                        <div class="collapsible-content">
                            <div class="content">
                                <div class="text-wrapper">
                                    <p>{{ __('olligo-content') }}</p>
                                </div>
                                <div class="img-box">
                                    <img src="../frontend/images/bs-olligo1.svg"/>
                                    <img src="../frontend/images/bs-olligo2.svg"/>
                                    <img src="../frontend/images/bs-olligo3.svg"/>
                                </div>
                                <div class="img-box-mobile">
                                    <button class="btn_prev_img" onclick="plusDivs(-1)">&#8249;</button>

                                    <img class="mySlides2" src="../frontend/images/bs-olligo1.svg"/>
                                    <img class="mySlides2" src="../frontend/images/bs-olligo2.svg"/>
                                    <img class="mySlides2" src="../frontend/images/bs-olligo3.svg"/>

                                    <button class="btn_next_img" onclick="plusDivs(1)">&#8250;</button>
                                </div>
                                <div class="card-wrapper">
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_olligo1.svg"/>
                                        <span>{{ __('olligo1') }}</span>
                                        <p>
                                            {{ __('olligo1-content') }}
                                        </p>
                                    </div>
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_olligo2.svg"/>
                                        <span>{{ __('olligo2') }}</span>
                                        <p>
                                            {{ __('olligo2-content') }}
                                        </p>
                                    </div>
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_olligo3.svg"/>
                                        <span>{{ __('olligo3') }}</span>
                                        <p>
                                            {{ __('olligo3-content') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="colls-wrapper">
                    <div class="wrap-collabsible">
                        <input id="collapsible2" class="toggle" type="checkbox">
                        <label for="collapsible2" class="lbl-toggle">
                            <span>03</span>
                            <span>{{ __('chaonda') }}</span>
                            <span class="icon-right">&nbsp;</span>
                        </label>
                        <div class="collapsible-content">
                            <div class="content">
                                <div class="text-wrapper">
                                    <p>{{ __('chaonda-content') }}</p>
                                </div>
                                <div class="img-box">
                                    <img src="../frontend/images/bs-chaonda1.svg"/>
                                    <img src="../frontend/images/bs-chaonda2.svg"/>
                                    <img src="../frontend/images/bs-chaonda3.svg"/>
                                    <img src="../frontend/images/bs-chaonda4.svg"/>
                                </div>
                                <div class="img-box-mobile">
                                    <button class="btn_prev_img" onclick="plusDivs(-1)">&#8249;</button>

                                    <img class="mySlides3" src="../frontend/images/bs-chaonda1.svg"/>
                                    <img class="mySlides3" src="../frontend/images/bs-chaonda2.svg"/>
                                    <img class="mySlides3" src="../frontend/images/bs-chaonda3.svg"/>
                                    <img class="mySlides3" src="../frontend/images/bs-chaonda4.svg"/>

                                    <button class="btn_next_img" onclick="plusDivs(1)">&#8250;</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="colls-wrapper">
                    <div class="wrap-collabsible">
                        <input id="collapsible3" class="toggle" type="checkbox">
                        <label for="collapsible3" class="lbl-toggle">
                            <span>04</span>
                            <span>{{ __('commuterbus') }}</span>
                            <span class="icon-right">&nbsp;</span>
                        </label>
                        <div class="collapsible-content">
                            <div class="content">
                                <div class="text-wrapper">
                                    <p>{{ __('commuterbus-content') }}</p>
                                </div>
                                <div class="img-box">
                                    <img src="../frontend/images/bs-commuter1.svg"/>
                                    <img src="../frontend/images/bs-commuter2.svg"/>
                                    <img src="../frontend/images/bs-commuter3.svg"/>
                                    <img src="../frontend/images/bs-commuter4.svg"/>
                                </div>
                                <div class="img-box-mobile">
                                    <button class="btn_prev_img" onclick="plusDivs(-1)">&#8249;</button>

                                    <img class="mySlides4" src="../frontend/images/bs-commuter1.svg"/>
                                    <img class="mySlides4" src="../frontend/images/bs-commuter2.svg"/>
                                    <img class="mySlides4" src="../frontend/images/bs-commuter3.svg"/>
                                    <img class="mySlides4" src="../frontend/images/bs-commuter4.svg"/>

                                    <button class="btn_next_img" onclick="plusDivs(1)">&#8250;</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
          </div>
            <!-- section-wrapper end -->
        </div>

        <!-- <div data-include="component/footer"></div> -->
        @include('frontend.includes.footer')
        <script type="text/javascript" src="{{asset('frontend/js/pages/business.js')}}"></script>

    </body>
</html>