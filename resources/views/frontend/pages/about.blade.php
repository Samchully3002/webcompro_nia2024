<!DOCTYPE html>
<html lang="en">

    @include('frontend.includes.head')
    <link rel="stylesheet" href="{{asset('frontend/css/about.css')}}"/>
</head>
<body>
    <!-- <div data-include="component/header"></div> -->
    @include('frontend.includes.header')
    {{-- <div class="page-introduction"> --}}

        <!-- Banner top -->
        <div class="banner-wrapper">
            <div class="box">
                <div class="left-content">
                    <img src="../frontend/images/icon_10_about.svg">
                    <span >{{__ ('10years') }}</span>
                </div>
                <div class="right-content">
                    <span>
                        {{__ ('10years-content') }}
                    </span>
                </div>
            </div>
        </div>
        <!-- Banner top end -->

        <!-- CEO Message start -->
        <div class="ceo_message">
            <div class="img_wrapper">
                <img src="../frontend/images/CEO_Photo.png"/>
            </div>
            <div class="text_wrapper">

                <span class="muncul">{{__ ('ceo') }}</span><br>
                <p class="muncul">
                    {{__ ('ceo-msg1') }}
                    {{__ ('ceo-msg2') }}
                </p>
            </div>
        </div>
        <!-- CEO Message end -->

        <!-- Our History Start -->
            <div class="our-history ">
                <div class="title">
                    <p>{{__ ('story') }}</p>
                </div>


                <div class="dekstop-history">
                    <div class="box">
                       <!-- Left Content -->
                       <div class="left-box">
                          <div class="container-imageyear">
                             <img id="year_img" style="border-radius: 20px; box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.2);" src="{{asset('frontend/images/story2024.png')}}"/>
                             <h1 id="year_history" style="font-weight: 500; font-size: 40px;">2024</h1>
                          </div>
                       </div>
                       <!-- Right Content -->
                    <div class="right-box">
                        <div class="wrapper list_history">
                            <ul class="hist_2024">
                                <li class="row">
                                    <div class="row_month">
                                    <p>{{__ ('april') }}</p>
                                    </div>
                                    <div class="row_history">
                                    <p>{{__ ('2024apr') }}</p>
                                    </div>
                                </li>
                                <hr class="rounded">
                                <li class="row">
                                    <div class="row_month">
                                    <p>{{__ ('february') }}</p>
                                    </div>
                                    <div class="row_history">
                                    <p>{{__ ('2024feb-1') }}</p>
                                    <p>{{__ ('2024feb-2') }}</p>
                                    </div>
                                </li>
                                <hr class="rounded">
                                <li class="row">
                                    <div class="row_month">
                                    <p>{{__ ('january') }}</p>
                                    </div>
                                    <div class="row_history">
                                    <p>{{__ ('2024jan-1') }}</p>
                                    <p>{{__ ('2024jan-2') }}</p>
                                    <p>{{__ ('2024jan-3') }}</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="hist_2023">
                                <li class="row">
                                    <div class="row_month">
                                    <p>{{__ ('november') }}</p>
                                    </div>
                                    <div class="row_history">
                                    <p>{{__ ('2023nov') }}</p>
                                    </div>
                                </li>
                                <hr class="rounded">
                                <li class="row">
                                    <div class="row_month">
                                    <p>{{__ ('october') }}</p>
                                    </div>
                                    <div class="row_history">
                                    <p>{{__ ('2023oct') }}</p>
                                    </div>
                                </li>
                                <hr class="rounded">
                                <li class="row">
                                    <div class="row_month">
                                    <p>{{__ ('august') }}</p>
                                    </div>
                                    <div class="row_history">
                                    <p>{{__ ('2023aug') }}</p>
                                    </div>
                                </li>
                                <hr class="rounded">
                                <li class="row">
                                    <div class="row_month">
                                    <p>{{__ ('july') }}</p>
                                    </div>
                                    <div class="row_history">
                                    <p>{{__ ('2023jul') }}</p>
                                    </div>
                                </li>
                                <hr class="rounded">
                                <li class="row">
                                    <div class="row_month">
                                    <p>{{__ ('january') }}</p>
                                    </div>
                                    <div class="row_history">
                                    <p>{{__ ('2023jan') }}</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="hist_2022">
                             <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('november') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2022nov') }}</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('october') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2022oct') }}</p>
                                </div>
                             </li>
                            </ul>
                            <ul class="hist_2021">
                             <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('december') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2021dec-1') }}</p>
                                   <p>{{__ ('2021dec-2') }}</p>
                                   <p>{{__ ('2021dec-3') }}</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('july') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2021jul') }}</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('may') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2021may') }}</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('march') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2021mar') }}</p>
                                </div>
                             </li>
                            </ul>
                            <ul class="hist_2020">
                             <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('december') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2020dec') }}</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('november') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2020nov-1') }}</p>
                                   <p>{{__ ('2020nov-2') }}</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('may') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2020may') }}</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('march') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2020mar') }}</p>
                                </div>
                             </li>
                            </ul>
                            <ul class="hist_2019">
                             <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('july') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2019jul') }}</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('june') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2019jun') }}</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('may') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2019may') }}</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('february') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2019feb') }}</p>
                                </div>
                             </li>
                            </ul>
                            <ul class="hist_2018">
                             <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('september') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2018sep') }}</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('june') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2018jun') }}</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('march') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2018mar') }}</p>
                                </div>
                             </li>
                            </ul>
                            <ul class="hist_2017">
                                <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('january') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2017jan') }}</p>
                                </div>
                             </li>
                            </ul>
                            <ul class="hist_2016">
                             <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('october') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2016oct') }}</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('june') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2016jun') }}</p>
                                </div>
                             </li>
                            </ul>
                            <ul class="hist_2015">
                             <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('may') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2015may') }}</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('february') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2015feb') }}</p>
                                </div>
                             </li>
                            </ul>
                            <ul class="hist_2014">
                             <li class="row">
                                <div class="row_month">
                                   <p>{{__ ('october') }}</p>
                                </div>
                                <div class="row_history">
                                   <p>{{__ ('2014oct') }}</p>
                                </div>
                             </li>
                          </ul>
                        </div>
                       </div>
                    </div>
                 </div>

                <div class="mobile-history">
                    <div class="product-wrapper">
                        <div class="colls-wrapper">
                            <div class="wrap-collabsible">
                                <input id="collapsible" class="toggle" type="checkbox" checked="checked">
                                <label for="collapsible" class="lbl-toggle">
                                    <span>2024</span>
                                    <span class="icon-right">&nbsp;</span>
                                </label>
                                <div class="collapsible-content">
                                    <div class="content">
                                        <div class="img-box">
                                            <img src="../frontend/images/story2024.png"/>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('april') }}</h1>
                                            <p>{{__ ('2024apr')}}</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('february') }}</h1>
                                            <p>{{__ ('2024feb-1')}}</p>
                                            <p>{{__ ('2024feb-2')}}</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('january') }}</h1>
                                            <p>{{__ ('2024jan-1')}}</p>
                                            <p>{{__ ('2024jan-2')}}</p>
                                            <p>{{__ ('2024jan-3')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="colls-wrapper">
                            <div class="wrap-collabsible">
                                <input id="collapsible2" class="toggle" type="checkbox">
                                <label for="collapsible2" class="lbl-toggle">
                                    <span>2023</span>
                                    <span class="icon-right">&nbsp;</span>
                                </label>
                                <div class="collapsible-content">
                                    <div class="content">
                                        <div class="img-box">
                                            <img src="../frontend/images/story2023.png"/>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('november') }}</h1>
                                            <p>{{__ ('2023nov')}}</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('october') }}</h1>
                                            <p>{{__ ('2023oct')}}</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('august') }}</h1>
                                            <p>{{__ ('2023aug')}}</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('july') }}</h1>
                                            <p>{{__ ('2023jul')}}</p>  
                                        </div>
                                        <div class="text-wrapper">
                                                <h1 >{{__ ('january') }}</h1>
                                                <p>{{__ ('2023jan')}}</p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="colls-wrapper">
                            <div class="wrap-collabsible">
                                <input id="collapsible3" class="toggle" type="checkbox">
                                <label for="collapsible3" class="lbl-toggle">
                                    <span>2022</span>
                                    <span class="icon-right">&nbsp;</span>
                                </label>
                                <div class="collapsible-content">
                                    <div class="content">
                                        <div class="img-box">
                                            <img src="../frontend/images/story2022.png"/>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('november') }}</h1>
                                            <p>{{__ ('2022nov')}}</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('october') }}</h1>
                                            <p>{{__ ('2022oct')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="colls-wrapper">
                            <div class="wrap-collabsible">
                                <input id="collapsible4" class="toggle" type="checkbox">
                                <label for="collapsible4" class="lbl-toggle">
                                    <span>2021</span>
                                    <span class="icon-right">&nbsp;</span>
                                </label>
                                <div class="collapsible-content">
                                    <div class="content">
                                        <div class="img-box">
                                            <img src="../frontend/images/story2021.png"/>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('december') }}</h1>
                                            <p>{{__ ('2021dec-1')}}</p>
                                            <p>{{__ ('2021dec-2')}}</p>
                                            <p>{{__ ('2021dec-3')}}</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('july') }}</h1>
                                            <p>{{__ ('2021jul')}}</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('may') }}</h1>
                                            <p>{{__ ('2021may')}}</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('march') }}</h1>
                                            <p>{{__ ('2021mar')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="colls-wrapper">
                            <div class="wrap-collabsible">
                                <input id="collapsible5" class="toggle" type="checkbox">
                                <label for="collapsible5" class="lbl-toggle">
                                    <span>2020</span>
                                    <span class="icon-right">&nbsp;</span>
                                </label>
                                <div class="collapsible-content">
                                    <div class="content">
                                        <div class="img-box">
                                            <img src="../frontend/images/story2020.png"/>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('december') }}</h1>
                                            <p>{{__ ('2020dec')}}</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('november') }}</h1>
                                            <p>{{__ ('2020nov-1')}}</p>
                                            <p>{{__ ('2020nov-2')}}</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('may') }}</h1>
                                            <p>{{__ ('2020may')}}</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('march') }}</h1>
                                            <p>{{__ ('2020mar')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="colls-wrapper">
                            <div class="wrap-collabsible">
                                <input id="collapsible6" class="toggle" type="checkbox">
                                <label for="collapsible6" class="lbl-toggle">
                                    <span>2019</span>
                                    <span class="icon-right">&nbsp;</span>
                                </label>
                                <div class="collapsible-content">
                                    <div class="content">
                                        <div class="img-box">
                                            <img src="../frontend/images/story2019.png"/>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('july') }}</h1>
                                            <p>{{__ ('2019jul')}}</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('june') }}</h1>
                                            <p>{{__ ('2019jun')}}</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('may') }}</h1>
                                            <p>{{__ ('2019may')}}</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('february') }}</h1>
                                            <p>{{__ ('2019feb')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="colls-wrapper">
                            <div class="wrap-collabsible">
                                <input id="collapsible7" class="toggle" type="checkbox">
                                <label for="collapsible7" class="lbl-toggle">
                                    <span>2018</span>
                                    <span class="icon-right">&nbsp;</span>
                                </label>
                                <div class="collapsible-content">
                                    <div class="content">
                                        <div class="img-box">
                                            <img src="../frontend/images/story2018.png"/>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('september') }}</h1>
                                            <p>{{__ ('2018sep')}}</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('june') }}</h1>
                                            <p>{{__ ('2018jun')}}</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('march') }}</h1>
                                            <p>{{__ ('2018mar')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="colls-wrapper">
                            <div class="wrap-collabsible">
                                <input id="collapsible8" class="toggle" type="checkbox">
                                <label for="collapsible8" class="lbl-toggle">
                                    <span>2017</span>
                                    <span class="icon-right">&nbsp;</span>
                                </label>
                                <div class="collapsible-content">
                                    <div class="content">
                                        <div class="img-box">
                                            <img src="../frontend/images/story2017.png"/>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('january') }}</h1>
                                            <p>{{__ ('2017jan')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="colls-wrapper">
                            <div class="wrap-collabsible">
                                <input id="collapsible9" class="toggle" type="checkbox">
                                <label for="collapsible9" class="lbl-toggle">
                                    <span>2016</span>
                                    <span class="icon-right">&nbsp;</span>
                                </label>
                                <div class="collapsible-content">
                                    <div class="content">
                                        <div class="img-box">
                                            <img src="../frontend/images/story2016.png"/>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('october') }}</h1>
                                            <p>{{__ ('2016oct')}}</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('june') }}</h1>
                                            <p>{{__ ('2016jun')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="colls-wrapper">
                            <div class="wrap-collabsible">
                                <input id="collapsible10" class="toggle" type="checkbox">
                                <label for="collapsible10" class="lbl-toggle">
                                    <span>2015</span>
                                    <span class="icon-right">&nbsp;</span>
                                </label>
                                <div class="collapsible-content">
                                    <div class="content">
                                        <div class="img-box">
                                            <img src="../frontend/images/story2015.png"/>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('may') }}</h1>
                                            <p>{{__ ('2015may')}}</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('february') }}</h1>
                                            <p>{{__ ('2015feb')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="colls-wrapper">
                            <div class="wrap-collabsible">
                                <input id="collapsible11" class="toggle" type="checkbox">
                                <label for="collapsible11" class="lbl-toggle">
                                    <span>2014</span>
                                    <span class="icon-right">&nbsp;</span>
                                </label>
                                <div class="collapsible-content">
                                    <div class="content">
                                        <div class="img-box">
                                            <img src="../frontend/images/story2014.png"/>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >{{__ ('october') }}</h1>
                                            <p>{{__ ('2014oct')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <!-- Our History End -->

        <!-- Core Value Start -->
        <div class="core">
            <!-- Title Text -->
            <div class="core-title">
                <p class="muncul">{{__ ('core') }}</p>
            </div>
            <!-- Title Text -->
            <!-- Core Text -->
            <div class="core-text">
                <div class=core-img>
                    <img src="../frontend/images/icon/ic_core_C.svg"/>
                </div>
                <div class=core-img>
                    <img src="../frontend/images/icon/ic_core_O.svg"/>
                </div>
                <div class=core-img>
                    <img src="../frontend/images/icon/ic_core_N.svg"/>
                </div>
                <div class=core-img>
                    <img src="../frontend/images/icon/ic_core_N2.svg"/>
                </div>
                <div class=core-img>
                    <img src="../frontend/images/icon/ic_core_E.svg"/>
                </div>
                <div class=core-img>
                    <img src="../frontend/images/icon/ic_core_C2.svg"/>
                </div>
                <div class=core-img>
                    <img src="../frontend/images/icon/ic_core_T.svg"/>
                </div>
            </div>
            <!-- Core Text -->
            <!-- Core Full Text -->
            <div class="full-text">
                <!-- Line 1 -->
                <div class="wrapper">
                    <div class="item muncul">
                        <p>
                        <span style="font-weight:bold;color:rgb(13, 73, 136);">C</span>ommunication
                        </p>
                    </div>
                    <div class="item muncul">
                        <p>
                        <span style="font-weight:bold;color:rgb(200, 7, 6);">O</span>pportunity
                        </p>
                    </div>
                    <div class="item muncul">
                        <p>
                        <span style="font-weight:bold;color:rgb(255, 162, 2);">N</span>ecessary
                        </p>
                    </div>
                </div>
                <!-- Line 2 -->
                <div class="wrapper">
                    <div class="item muncul">
                        <p>
                        <span style="font-weight:bold;color:rgb(123, 53, 85);">N</span>ew
                        </p>
                    </div>
                    <div class="item muncul">
                        <p>
                        <span style="font-weight:bold;color:rgb(49, 107, 27);">E</span>enviroment
                        </p>
                    </div>
                    <div class="item muncul">
                        <p>
                        <span style="font-weight:bold;color:rgb(94, 72, 158);">C</span>reative
                        </p>
                    </div>
                    <div class="item muncul">
                        <p>
                        <span style="font-weight:bold;color:rgb(52, 123, 191);">T</span>rust
                        </p>
                    </div>
                </div>
            </div>
            <!-- Core Full Text -->
            <!-- subtitle Core Value -->
            <div class="subtitle">
                <p>
                {{__ ('core-sub')}}
                </p>
            </div>
        </div>
        <!-- Core Value End -->

        <!-- Team Member Start -->
        <div class="team-member">
            <!-- Title Line -->
            <div class="wrapper">
                <div class="title">
                    <p>{{__ ('team') }}</p>
                </div>
                <div class="subtitle">
                    <p">{{__ ('team-sub') }}</p>
                </div>
            </div>
            <!-- Title Line -->
            <!-- List Team Member -->
            <div class="list">
                <div class="row">
                    <!-- photo 1 ceo -->
                    <div class="item">
                        <div class="item-wrap">
                            <div class="box">
                                <div class="wrap">
                                    <div class="item">
                                        <div class="foto-box">
                                            <img src="../frontend/images/tm_mr_son.png">
                                        </div>
                                    </div>
                                    <div class="text-item">
                                        <div class="title">
                                            <p>Mr. Son</p>
                                        </div>
                                        <div class="subtitle">
                                            <p>President of Indonesia Branch office</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="back">
                                <div class="content">
                                    <p>"There is no such a small success to be celebrated."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photo 1 ceo -->
                    <!-- photo 2 general -->
                    <div class="item">
                        <div class="item-wrap">
                            <div class="box">
                                <div class="wrap">
                                    <div class="item">
                                        <div class="foto-box">
                                            <img src="../frontend/images/tm_miss_kim.png">
                                        </div>
                                    </div>
                                    <div class="text-item">
                                        <div class="title">
                                            <p>Ms. Kim</p>
                                        </div>
                                        <div class="subtitle">
                                            <p>Deputy General Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="back">
                                <div class="content">
                                    <p>"Every difficulty is an opportunity to grow and learn."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photo 2 general -->
                </div>
                <!-- line 2 -->
               <!-- return data employee -->
            @foreach($list as $group)
            <div class="row">
            <!-- photo 1 galang -->
             @foreach($group as $item)
             <div class="item">
                <div class="item-wrap">
                    <div class="box">
                        <div class="wrap">
                            <div class="item">
                                <div class="foto-box">
                                    <img src="{{asset('backend/images/employee/'.$item['image'])}}">
                                </div>
                            </div>
                            <div class="text-item">
                                <div class="title">
                                    <p>{{$item['fullname']}}</p>
                                </div>
                                <div class="subtitle">
                                    <p>{{$item['role']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="back">
                                <div class="content">
                                    <p>{{$item['quotes']}}</p>
                                </div>
                            </div>
                </div>
            </div>
             @endforeach
            <!-- photo 1 galang -->
        </div>
            @endforeach
    </div>
            </div>
        </div>
        {{-- Team Member end --}}

        {{-- Our office start --}}
        <div class="our-office">
            <div class="wrapper">
                <section class="wrap-content">
                    <div class="marquee">
                        <img src="../frontend/images/office1.png"/>
                        <img src="../frontend/images/office2.png"/>
                        <img src="../frontend/images/office3.png"/>
                        <img src="../frontend/images/office4.png"/>
                        <img src="../frontend/images/office5.png"/>
                        <img src="../frontend/images/office6.png"/>

                        <img src="../frontend/images/office1.png"/>
                        <img src="../frontend/images/office2.png"/>
                        <img src="../frontend/images/office3.png"/>
                        <img src="../frontend/images/office4.png"/>
                        <img src="../frontend/images/office5.png"/>
                        <img src="../frontend/images/office6.png"/>

                        <img src="../frontend/images/office1.png"/>
                        <img src="../frontend/images/office2.png"/>
                        <img src="../frontend/images/office3.png"/>
                        <img src="../frontend/images/office4.png"/>
                        <img src="../frontend/images/office5.png"/>
                        <img src="../frontend/images/office6.png"/>

                        <img src="../frontend/images/office1.png"/>
                        <img src="../frontend/images/office2.png"/>
                        <img src="../frontend/images/office3.png"/>
                        <img src="../frontend/images/office4.png"/>
                        <img src="../frontend/images/office5.png"/>
                        <img src="../frontend/images/office6.png"/>

                    {{-- <marquee>
                    <ul class="list-content">
                        <li class="contents">
                            <img src="../frontend/images/office_foto_1.svg"/>
                        </li>
                        <li class="contents">
                            <img src="../frontend/images/office_foto_2.svg"/>
                        </li>
                        <li class="contents">
                            <img src="../frontend/images/office_foto_3.svg"/>
                        </li>
                        <li class="contents">
                            <img src="../frontend/images/office_foto_4.svg"/>
                        </li>
                        <li class="contents">
                            <img src="../frontend/images/office_foto_5.svg"/>
                        </li>
                    </ul>
                </marquee> --}}
                </section>
            </div>
        </div>
        {{-- Our office end --}}
        <div class="office-maps">
            <div class="box">
                <div class="img-wrapper">
                    <img src="../frontend/images/office_loc_map.png"/>
                </div>
                <div class="container-card-maps">
                        <div class="card-maps">
                            <div class="content-card-maps">
                                <h1>{{__ ('korea') }}</h1>
                                <p>{{__ ('kr-address1') }} <br> {{__ ('kr-address2') }} <br> {{__ ('kr-address3') }} <br> {{__ ('kr-address4') }}</p>
                            </div>
                        </div>
                        <div class="card-maps">
                            <div class="content-card-maps">
                                <h1>{{__ ('indo') }}</h1>
                                <p>{{__ ('in-address1') }} <br> {{__ ('in-address2') }} <br> {{__ ('in-address3') }} <br> {{__ ('in-address4') }} <br> {{__ ('in-address5') }}</p>
                            </div>
                        </div>
                        <div class="card-maps">
                            <div class="content-card-maps">
                                <h1>{{__ ('malay') }}</h1>
                                <p>{{__ ('my-address1') }} <br>{{__ ('my-address2') }} <br> {{__ ('my-address3') }} <br> {{__ ('my-address4') }}</p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}

    @include('frontend.includes.footer')

</body>
<script src="{{asset('frontend/js/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>
<script type="text/javascript" src="{{asset('frontend/js/pages/about.js')}}"></script>

</html>
