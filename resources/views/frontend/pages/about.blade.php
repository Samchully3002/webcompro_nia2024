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
                    <span >Years of  Proven Experience</span>
                </div>
                <div class="right-content">
                    <span>
                        With a decade worth of experience and excellent infrastructure, NIA is your reliable partner.
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

                <h1 class="muncul">CEO Greetings</h1><br>
                <p class="muncul">
                As a subsidiary of Samchully Networks from South Korea, PT Networks Indonesia Aku was established in Jakarta, Indonesia in 2021 with a clear mission: "To become a leading IT company in Indonesia, emphasizing environmentally friendly products and services. We aim to create technology for the advancement of transportation and infrastructure, healthcare technology, education, logistics, smart factories, online payment systems, and their development." As specialists in the IT field, we offer a diverse range of services through information data and develop solutions through application/web platforms.<br><br>
                NIA prioritizes 'integration' and 'innovation' as its core foundation. With the vision of "Focusing on innovation, high-quality services, and advanced technological solutions, we are determined to make a meaningful contribution to advancing the world of information technology. Through this commitment, we strive to build strong, long-term relationships with customers, becoming a reliable partner and continuing to be a leading provider of IT solutions." We are committed to continually building and maintaining trust, aligning with the rapid changes in technology trends.
                </p>
            </div>
        </div>
        <!-- CEO Message end -->

        <!-- Our History Start -->
            <div class="our-history ">
                <div class="title">
                    <p>Our Stories</p>
                </div>

                <div class="dekstop-history">
                    <div class="box">
                       <!-- Left Content -->
                       <div class="left-box">
                          <div class="container-imageyear">
                             <img id="year_img" style="border-radius: 20px; box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.2);" src="{{asset('../frontend/images/story2024.png')}}"/>
                             <h1 id="year_history" style="font-weight: 500; font-size: 40px;">2024</h1>
                          </div>
                       </div>
                       <!-- Right Content -->
                    <div class="right-box">
                        <div class="wrapper list_history">
                            <ul class="hist_2024">
                                <li class="row">
                                    <div class="row_month">
                                    <p>April</p>
                                    </div>
                                    <div class="row_history">
                                    <p>Samchully Networks was selected as partner for the Voucher Export project led by Korea SMEs &amp; Startups Agency (KOSME) and Korea Trade Investment Promotion Agency (KONTRA) and PT NIA as project executor.</p>
                                    </div>
                                </li>
                                <hr class="rounded">
                                <li class="row">
                                    <div class="row_month">
                                    <p>February</p>
                                    </div>
                                    <div class="row_history">
                                    <p>Selected as Demonstration Agency for Indonesian Test Bed Support Project Agricultural Machinery Verification Management and Operation Service (Korea Agricultural Technology Promotion Agency/KOAT).</p>
                                    <p>Patent Application for Optimal Route Operation Techniques for Demand Responsive Transport (DRT).</p>
                                    </div>
                                </li>
                                <hr class="rounded">
                                <li class="row">
                                    <div class="row_month">
                                    <p>January</p>
                                    </div>
                                    <div class="row_history">
                                    <p>Development of Demand Response Transportation Platform "Chaonda"</p>
                                    <p>The Leuwipanjang terminal, Bandung, which was developed by PT NIA, was inaugurated by the President of Indonesia, Mr. Ir. Joko Widodo.</p>
                                    <p>Registered as a Design Specialty Company (Multimedia Design) at The Korea Institute of Design Promotion.</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="hist_2023">
                                <li class="row">
                                    <div class="row_month">
                                    <p>November</p>
                                    </div>
                                    <div class="row_history">
                                    <p>Awarded for Best ODA Implementer at Development Cooperation Day - Prime Minister Awards (Son Dong-kwon, Vice President Samchully Networks Co., Ltd.)</p>
                                    </div>
                                </li>
                                <hr class="rounded">
                                <li class="row">
                                    <div class="row_month">
                                    <p>October</p>
                                    </div>
                                    <div class="row_history">
                                    <p>Completion of the 'Master Plan and Pilot Operation for the Bus Terminal Improvement and ITS(Intelligent Transport System) Implementation in the Republic of Indonesia'</p>
                                    </div>
                                </li>
                                <hr class="rounded">
                                <li class="row">
                                    <div class="row_month">
                                    <p>August</p>
                                    </div>
                                    <div class="row_history">
                                    <p>Relocation of Indonesia's Corporate (AIA Central Building)</p>
                                    </div>
                                </li>
                                <hr class="rounded">
                                <li class="row">
                                    <div class="row_month">
                                    <p>July</p>
                                    </div>
                                    <div class="row_history">
                                    <p>Proceeded the 2nd Invitational Training in Korea for Civil Servants from the Ministry of Transport and Directorate General of Land Transportation in Indonesia</p>
                                    </div>
                                </li>
                                <hr class="rounded">
                                <li class="row">
                                    <div class="row_month">
                                    <p>January</p>
                                    </div>
                                    <div class="row_history">
                                    <p>Acquired Certificate from the Small and Medium Business Technology Innovation Association (Inno-Biz)</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="hist_2022">
                             <li class="row">
                                <div class="row_month">
                                   <p>November</p>
                                </div>
                                <div class="row_history">
                                   <p>Proceeded the 1st Invitational Training in Korea for Civil Servants from the Ministry of Transport and Directorate General of Land Transportation in Indonesia</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>October</p>
                                </div>
                                <div class="row_history">
                                   <p>Completed the 2nd Year of 'Master Plan and Pilot Operation for the Bus Terminal Improvement and ITS(Intelligent Transport System) Implementation in the Republic of Indonesia</p>
                                </div>
                             </li>
                            </ul>
                            <ul class="hist_2021">
                             <li class="row">
                                <div class="row_month">
                                   <p>December</p>
                                </div>
                                <div class="row_history">
                                   <p>Completed the 1st Year of 'Master Plan and Pilot Operation for the Bus Terminal Improvement and ITS(Intelligent Transport System) Implementation in the Republic of Indonesia</p>
                                   <p>Establishment of the Local Corporation in Indonesia (PT Networks Indonesia Aku)</p>
                                   <p>Selected as Host Company for 'Master Plan and Pilot Operation for the Bus Terminal Improvement and ITS(Intelligent Transport System) Implementation in the Republic of Indonesia' Project (ODA, MOLIT)</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>July</p>
                                </div>
                                <div class="row_history">
                                   <p>Reacquired Certification from Korea Management Innovation Small and Medium Business Association (Main Biz)</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>May</p>
                                </div>
                                <div class="row_history">
                                   <p>Developed the Healthcare Platform "Healthyhada"</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>February</p>
                                </div>
                                <div class="row_history">
                                   <p>Launched ‘Olligo’, a transportation platform in the construction sector</p>
                                </div>
                             </li>
                            </ul>
                            <ul class="hist_2020">
                             <li class="row">
                                <div class="row_month">
                                   <p>December</p>
                                </div>
                                <div class="row_history">
                                   <p>Selected as "Small Strong Company in Seoul" by Ministry of Employment and Labor</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>November</p>
                                </div>
                                <div class="row_history">
                                   <p>Developed the Contruction Transport Platform "Olligo"</p>
                                   <p>Launched the “24 Hour Environment”, a Garbage Vehicle Tracking Transportation System for Construction</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>May</p>
                                </div>
                                <div class="row_history">
                                   <p>Acquired Overseas (Cambodia, Phnom Penh) Construction Business (Construction Engineering/ Information Communication Construction Business)</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>August</p>
                                </div>
                                <div class="row_history">
                                   <p>Opened the Jeju Branch</p>
                                </div>
                             </li>
                            </ul>
                            <ul class="hist_2019">
                             <li class="row">
                                <div class="row_month">
                                   <p>July</p>
                                </div>
                                <div class="row_history">
                                   <p>KOVA Venture Business Registration (No. 20190729-42348).</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>June</p>
                                </div>
                                <div class="row_history">
                                   <p>Acquired Certification from the Korea Management Innovation Small and Medium Business Association (Main Biz)</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>May</p>
                                </div>
                                <div class="row_history">
                                   <p>Patent Acquisition: Automatic Vehicle Dispatching System (Patent No. 10-2038795)</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>February</p>
                                </div>
                                <div class="row_history">
                                   <p>Developed & Launched the Special Transportation Vehicle Intermediary Platform "Samchully PAY"</p>
                                </div>
                             </li>
                            </ul>
                            <ul class="hist_2018">
                             <li class="row">
                                <div class="row_month">
                                   <p>September</p>
                                </div>
                                <div class="row_history">
                                   <p>Establishment of a Corporate Research Institute (Institute of Technology No. 2018113469)</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>June</p>
                                </div>
                                <div class="row_history">
                                   <p>Acquired Quality Management System Certification ISO9001:2015 (No. 21-A-3486 Rev. 0)</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>March</p>
                                </div>
                                <div class="row_history">
                                   <p>Designed & Developed Ticketing System based on Cloud</p>
                                </div>
                             </li>
                            </ul>
                            <ul class="hist_2017">
                                <li class="row">
                                <div class="row_month">
                                   <p>January</p>
                                </div>
                                <div class="row_history">
                                   <p>Establishment of 25 Transport Platform Branches & Agencies All Across the Republic of Korea</p>
                                </div>
                             </li>
                            </ul>
                            <ul class="hist_2016">
                             <li class="row">
                                <div class="row_month">
                                   <p>October</p>
                                </div>
                                <div class="row_history">
                                   <p>Developed and Maintenance Ticketing System for Guided Cruise for the National Cruise Association</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>June</p>
                                </div>
                                <div class="row_history">
                                   <p>Developed and Launced of an Integrated Intelligent Transportation Platform (Commercialization)</p>
                                </div>
                             </li>
                            </ul>
                            <ul class="hist_2015">
                             <li class="row">
                                <div class="row_month">
                                   <p>May</p>
                                </div>
                                <div class="row_history">
                                   <p>Designed & Developed Mobile Wireless Telecommunication Relay Service (TRS) Solution (KT, KT Powertell, etc.)</p>
                                </div>
                             </li>
                             <hr class="rounded">
                             <li class="row">
                                <div class="row_month">
                                   <p>February</p>
                                </div>
                                <div class="row_history">
                                   <p>Opened and Operated Integrated Transport Call Center</p>
                                </div>
                             </li>
                            </ul>
                            <ul class="hist_2014">
                             <li class="row">
                                <div class="row_month">
                                   <p>October</p>
                                </div>
                                <div class="row_history">
                                   <p>Established Samchully Networks Co., Ltd. (Head Office, in Seoul, Korea)</p>
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
                                            <h1 >April</h1>
                                            <p>Samchully Networks was selected as partner for the Voucher Export project led by Korea SMEs & Startups Agency (KOSME) and Korea Trade Investment Promotion Agency (KONTRA) and PT NIA as project executor.</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >Maret</h1>
                                            <p>Registered as a Design Specialty Company (Multimedia Design) at The Korea Institute of Design Promotion</p>
                                            <p>Patent Application for Optimal Route Operation Techniques for Demand Responsive Transport (DRT)</p>
                                            <p>Development of Demand Response Transportation Platform "Cha-onda"</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >February</h1>
                                            <p>Selected as Demonstration Agency for Indonesian Test Bed Support Project Agricultural Machinery Verification Management and Operation Service (Korea Agricultural Technology Promotion Agency/KOAT)</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >January</h1>
                                            <p>The Leuwipanjang terminal, Bandung, which was developed by PT NIA, was inaugurated by the President of Indonesia, Mr. Ir. Joko Widodo</p>
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
                                            <h1 >December</h1>
                                            <p>Acquired Certificate from the Small and Medium Business Technology Innovation Association (Inno-Biz)</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >November</h1>
                                            <p>Awarded for Best ODA Implementer at Development Cooperation Day - Prime Minister Awards (Son Dong-kwon, Vice President Samchully Networks Co., Ltd.)</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >October</h1>
                                            <p>Relocation of Indonesia's Corporate (AIA Central Building)</p>
                                            <p>Completion of the 'Master Plan and Pilot Operation for the Bus Terminal Improvement and ITS(Intelligent Transport System) Implementation in the Republic of Indonesia</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >July</h1>
                                            <p>Proceeded the 2nd Invitational Training in Korea for Civil Servants from the Ministry of Transport and Directorate General of Land Transportation in Indonesia</p>
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
                                            <h1 >November</h1>
                                            <p>Proceeded the 1st Invitational Training in Korea for Civil Servants from the Ministry of Transport and Directorate General of Land Transportation in Indonesia</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >October</h1>
                                            <p>Completed the 2nd Year of 'Master Plan and Pilot Operation for the Bus Terminal Improvement and ITS(Intelligent Transport System) Implementation in the Republic of Indonesia</p>
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
                                            <h1 >December</h1>
                                            <p>Completed the 1st Year of 'Master Plan and Pilot Operation for the Bus Terminal Improvement and ITS(Intelligent Transport System) Implementation in the Republic of Indonesia</p>
                                            <p>Establishment of the Local Corporation in Indonesia (PT Networks Indonesia Aku)</p>
                                            <p>Selected as Host Company for 'Master Plan and Pilot Operation for the Bus Terminal Improvement and ITS(Intelligent Transport System) Implementation in the Republic of Indonesia' Project (ODA, MOLIT)</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >August</h1>
                                            <p>Developed the Healthcare Platform "Healthyhada"</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >July</h1>
                                            <p>Reacquired Certification from Korea Management Innovation Small and Medium Business Association (Main Biz)</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >February</h1>
                                            <p>Launched ‘Olligo’, a transportation platform in the construction sector</p>
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
                                            <h1 >December</h1>
                                            <p>Selected as "Small Strong Company in Seoul" by Ministry of Employment and Labor</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >November</h1>
                                            <p>Developed the Contruction Transport Platform "Olligo"</p>
                                            <p>Launched the “24 Hour Environment”, a Garbage Vehicle Tracking Transportation System for Construction</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >August</h1>
                                            <p>Opened the Jeju Branch</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >May</h1>
                                            <p>Acquired Overseas (Cambodia, Phnom Penh) Construction Business (Construction Engineering/ Information Communication Construction Business)</p>
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
                                            <h1 >December</h1>
                                            <p>Acquired Certification from the Korea Management Innovation Small and Medium Business Association (Main Biz)</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >November</h1>
                                            <p>Patent Acquisition: Automatic Vehicle Dispatching System (Patent No. 10-2038795)</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >February</h1>
                                            <p>Developed & Launched the Special Transportation Vehicle Intermediary Platform "Samchully PAY"</p>
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
                                            <h1 >December</h1>
                                            <p>Establishment of a Corporate Research Institute (Institute of Technology No. 2018113469)</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >May</h1>
                                            <p>Acquired Quality Management System Certification ISO9001:2015 (No. 21-A-3486 Rev. 0)</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >March</h1>
                                            <p>Designed & Developed Ticketing System based on Cloud</p>
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
                                            <h1 >March</h1>
                                            <p>Establishment of 25 Transport Platform Branches & Agencies All Across the Republic of Korea</p>
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
                                            <h1 >December</h1>
                                            <p>Developed and Maintenance Ticketing System for Guided Cruise for the National Cruise Association</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >August</h1>
                                            <p>Developed and Launced of an Integrated Intelligent Transportation Platform (Commercialization)</p>
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
                                            <h1 >October</h1>
                                            <p>Designed & Developed Mobile Wireless Telecommunication Relay Service (TRS) Solution (KT, KT Powertell, etc.)</p>
                                        </div>
                                        <div class="text-wrapper">
                                            <h1 >Juni</h1>
                                            <p>Opened and Operated Integrated Transport Call Center</p>
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
                                            <h1 >December</h1>
                                            <p>Established Samchully Networks Co., Ltd. (Head Office, in Seoul, Korea)</p>
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
                <p class="muncul">Core Values Guide Us to Excellence</p>
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
                Expanding our commitment to integrity, innovation, collaboration,
                and continuous improvement.
                </p>
            </div>
        </div>
        <!-- Core Value End -->

        <!-- Team Member Start -->
        <div class="team-member">
            <!-- Title Line -->
            <div class="wrapper">
                <div class="title">
                    <p>Team Member</p>
                </div>
                <div class="subtitle">
                    <p">Collaboration fuels our success, turning shared visions into remarkable achievements.</p>
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
                                            <img src="../frontend/images/tm_mr_son.svg">
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
                                            <img src="../frontend/images/tm_miss_kim.svg">
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
                                    <p>"There is no such a small success to be celebrated."</p>
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
                        <img src="../frontend/images/office_foto_1.svg"/>
                        <img src="../frontend/images/office_foto_2.svg"/>
                        <img src="../frontend/images/office_foto_3.svg"/>
                        <img src="../frontend/images/office_foto_4.svg"/>
                        <img src="../frontend/images/office_foto_5.svg"/>

                        <img src="../frontend/images/office_foto_1.svg"/>
                        <img src="../frontend/images/office_foto_2.svg"/>
                        <img src="../frontend/images/office_foto_3.svg"/>
                        <img src="../frontend/images/office_foto_4.svg"/>
                        <img src="../frontend/images/office_foto_5.svg"/>

                        <img src="../frontend/images/office_foto_1.svg"/>
                        <img src="../frontend/images/office_foto_2.svg"/>
                        <img src="../frontend/images/office_foto_3.svg"/>
                        <img src="../frontend/images/office_foto_4.svg"/>
                        <img src="../frontend/images/office_foto_5.svg"/>

                        <img src="../frontend/images/office_foto_1.svg"/>
                        <img src="../frontend/images/office_foto_2.svg"/>
                        <img src="../frontend/images/office_foto_3.svg"/>
                        <img src="../frontend/images/office_foto_4.svg"/>
                        <img src="../frontend/images/office_foto_5.svg"/>

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
                    <img src="../frontend/images/office_loc_map.svg"/>
                </div>
                <div class="container-card-maps">
                        <div class="card-maps">
                            <div class="content-card-maps">
                                <h1>Korea</h1>
                                <p>JH Jangheung Building  4th Floor, <br> Magokjungang 6-ro, <br> Gangseo-gu, <br> Seoul 07802</p>
                            </div>
                        </div>
                        <div class="card-maps">
                            <div class="content-card-maps">
                                <h1>Indonesia</h1>
                                <p>AIA CENTRAL 21 st Floor. <br> Jenderal Sudirman Street, <br> Number Kav. 48A, Karet Semanggi, <br> Setiabudi, South Jakarta City, <br> DKI Jakarta 12930</p>
                            </div>
                        </div>
                        <div class="card-maps">
                            <div class="content-card-maps">
                                <h1>Malaysia</h1>
                                <p>126, MY Negeri Sembilan Seremban Seremban, 67, <br> Pusat Komersial Saujana 3 Street, <br> Pusat Komersial Saujana 70300</p>
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