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
                    <h1 class="appear">Intelligent Integrated Logistics</h1>
                    <p class="appear">Utilizing differentiated information and communication technologies, along with our intelligent transportation system, we integrate big data and AI innovations. This includes an intelligent integrated logistics platform and a demand response mobility platform, enabling efficient transportation solutions with effective risk management and response capabilities.</p>
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
                            <span>Samchullypay</span>
                            <span class="icon-right">&nbsp;</span>
                        </label>
                        <div class="collapsible-content">
                            <div class="content">
                                <div class="text-wrapper">
                                    <p>Through an intelligent integrated logistics platform, we track logistics in real-time to locate positions, dispatch, movement status, shortest distances, and costs. With our proprietary solution enabling demand prediction and risk management through big data, we are building a leading record in the transportation platform industry.</p>
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
                                        <span>Notification Dispatch</span>
                                        <p>
                                            Work dispatch with mobile push function. With just one mobile device , we build a transparent dispatch platform, breaking away from the existing radio dispatch.
                                        </p>
                                    </div>
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_samchulypay2.svg"/>
                                        <span>Location Detector</span>
                                        <p>
                                            We provide location information of the dispatched driver to reduce waiting times without knowing when the driver will arrive. Drivers no longer need to contact you upon departure.
                                        </p>
                                    </div>
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_samchulypay3.svg"/>
                                        <span>Work Log</span>
                                        <p>
                                            Our Platform offers real-time tracking, optimizing dispatch, monitoring, and managing costs through advanced big data analytics for demand prediction and risk management.
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
                            <span>Olligo</span>
                            <span class="icon-right">&nbsp;</span>
                        </label>
                        <div class="collapsible-content">
                            <div class="content">
                                <div class="text-wrapper">
                                    <p>Through our community for transportation professionals, we offer a one-stop social network for industry news, regulatory updates, and more. Start groups and meetings based on various search criteria like location, vehicle type, and topics.</p>
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
                                        <span>Group Dispatch</span>
                                        <p>
                                            If you register tasks within your assigned group, dispatch will only be conducted within that group, ensuring that tasks are performed by drivers verified within the group.
                                        </p>
                                    </div>
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_olligo2.svg"/>
                                        <span>Rank Distribution</span>
                                        <p>
                                            The dispatch order is determined based on the task registration ranking within the group. Tasks shared will receive priority in dispatch according to their ranking.
                                        </p>
                                    </div>
                                    <div class="card">
                                        <img width="18%" src="../frontend/images/icon/ic_olligo3.svg"/>
                                        <span>Basic Document</span>
                                        <p>
                                            Do you spend time searching for documents every time you have a task? Try our Basic Document feature, where you can save documents once and have them readily available for task dispatch.
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
                            <span>Chaonda</span>
                            <span class="icon-right">&nbsp;</span>
                        </label>
                        <div class="collapsible-content">
                            <div class="content">
                                <div class="text-wrapper">
                                    <p>Based on accumulated transportation-related big data, we are creating a new transportation ecosystem that supports various demands for metropolitan travel, including congestion relief in major urban areas and achieving RE100 through carbon emission reduction effects. We enhance accessibility to public transportation in rural areas, benefiting transportation-disadvantaged individuals.</p>
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
                            <span>Commuter Bus</span>
                            <span class="icon-right">&nbsp;</span>
                        </label>
                        <div class="collapsible-content">
                            <div class="content">
                                <div class="text-wrapper">
                                    <p>We provide a unique ticketing and reservation system for commuter bus systems, incorporating accumulated transportation and information communication technologies from Samchully Networks.</p>
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