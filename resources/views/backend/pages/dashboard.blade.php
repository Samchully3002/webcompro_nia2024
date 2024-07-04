@extends('dashboard')
    @section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light"></span> Dashboard
</h4>

<!-- Card Border Shadow -->
<div class="row">
  <div class="col-sm-6 col-lg-3 mb-4">
    <div class="card card-border-shadow-primary h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2 pb-1">
          <div class="avatar me-2">
            <span class="avatar-initial rounded bg-label-primary"><i class="bx bxs-user"></i></span>
          </div>
          <h4 class="ms-1 mb-0">{{$countEmp}}</h4>
        </div>
        <p class="mb-1">Our Employee</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3 mb-4">
    <div class="card card-border-shadow-warning h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2 pb-1">
          <div class="avatar me-2">
            <span class="avatar-initial rounded bg-label-warning"><i class="bx bx-error"></i></span>
          </div>
          <h4 class="ms-1 mb-0">{{$countNews}}</h4>
        </div>
        <p class="mb-1">Total News</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3 mb-4">
    <div class="card card-border-shadow-danger h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2 pb-1">
          <div class="avatar me-2">
            <span class="avatar-initial rounded bg-label-danger"><i class="bx bx-git-repo-forked"></i></span>
          </div>
          <h4 class="ms-1 mb-0">{{$countNotice}}</h4>
        </div>
        <p class="mb-1">Total Notice</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3 mb-4">
    <div class="card card-border-shadow-info h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2 pb-1">
          <div class="avatar me-2">
            <span class="avatar-initial rounded bg-label-info"><i class="bx bx-time-five"></i></span>
          </div>
          <h4 class="ms-1 mb-0">{{$countMess}}</h4>
        </div>
        <p class="mb-1">Total New Mail</p>
      </div>
    </div>
  </div>
</div>
<!--/ Card Border Shadow -->
<div class="row">
  <!-- Vehicles overview -->
  <div class="col-xxl-6 mb-4 order-5 order-xxl-0">
    <div class="card h-100">
      <div class="card-header">
        <div class="card-title mb-0">
          <h5 class="m-0">Most Visited Pages</h5>
        </div>
      </div>
      <div class="card-body">
        <div class="vehicles-overview-progress progress rounded-2 mb-3" style="height: 46px;">
    
        </div>
        <div class="table-responsive">
          <table class="table card-table">
            <tbody class="table-border-bottom-0">
              <tr>
                <td class="w-50 ps-0">
                  <div class="d-flex justify-content-start align-items-center">
                    <div class="me-2">
                      <i class="bx bxs-home"></i>
                    </div>
                    <h6 class="mb-0 fw-normal">Homepage</h6>
                  </div>
                </td>
                <td class="text-end pe-0 text-nowrap">
                  <h6 class="mb-0">2hr 10min</h6>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-medium">39.7%</span>
                </td>
              </tr>
              <tr>
                <td class="w-50 ps-0">
                  <div class="d-flex justify-content-start align-items-center">
                    <div class="me-2">
                      <i class="bx bx-briefcase"></i>
                    </div>
                    <h6 class="mb-0 fw-normal">About</h6>
                  </div>
                </td>
                <td class="text-end pe-0 text-nowrap">
                  <h6 class="mb-0">3hr 15min</h6>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-medium">28.3%</span>
                </td>
              </tr>
              <tr>
                <td class="w-50 ps-0">
                  <div class="d-flex justify-content-start align-items-center">
                    <div class="me-2">
                      <i class="bx bx-book-open"></i>
                    </div>
                    <h6 class="mb-0 fw-normal">News</h6>
                  </div>
                </td>
                <td class="text-end pe-0 text-nowrap">
                  <h6 class="mb-0">1hr 24min</h6>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-medium">17.4%</span>
                </td>
              </tr>
              <tr>
                <td class="w-50 ps-0">
                  <div class="d-flex justify-content-start align-items-center">
                    <div class="me-2">
                      <i class="bx bx-notepad"></i>
                    </div>
                    <h6 class="mb-0 fw-normal">Notice</h6>
                  </div>
                </td>
                <td class="text-end pe-0 text-nowrap">
                  <h6 class="mb-0">5hr 19min</h6>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-medium">14.6%</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--/ Vehicles overview -->
  <!-- Shipment statistics-->
  <div class="col-lg-6 col-xxl-6 mb-4 order-3 order-xxl-1">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Visitor statistics</h5>
          <small class="text-muted">Total number of visitors 23.8k</small>
        </div>
        <div class="dropdown">
          <button type="button" class="btn btn-label-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">January</button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="javascript:void(0);">January</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">February</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">March</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">April</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">May</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">June</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">July</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">August</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">September</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">October</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">November</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">December</a></li>
          </ul>
        </div>
      </div>
      <div class="card-body" style="position: relative;">
        <div id="shipmentStatisticsChart" style="min-height: 270px;"><div id="apexchartsnurxzla6" class="apexcharts-canvas apexchartsnurxzla6 apexcharts-theme-light" style="width: 551px; height: 270px;"><svg id="SvgjsSvg1286" width="551" height="270" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="551" height="270"><div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" style="height: 40px; inset: auto 0px -5px; position: absolute;" xmlns="http://www.w3.org/1999/xhtml"><div class="apexcharts-legend-series" style="margin: 0px 10px;" rel="1" seriesname="Generic" data:collapsed="false"><span class="apexcharts-legend-marker" style="background: rgb(255, 171, 0) !important; color: rgb(255, 171, 0); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="1" data:collapsed="false"></span><span class="apexcharts-legend-text" style="color: rgb(86, 106, 127); font-size: 15px; font-weight: 400; font-family: Public Sans;" rel="1" i="0" data:default-text="Generic" data:collapsed="false">Generic</span></div><div class="apexcharts-legend-series" style="margin: 0px 10px;" rel="2" seriesname="Backlink" data:collapsed="false"><span class="apexcharts-legend-marker" style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="2" data:collapsed="false"></span><span class="apexcharts-legend-text" style="color: rgb(86, 106, 127); font-size: 15px; font-weight: 400; font-family: Public Sans;" rel="2" i="1" data:default-text="Backlink" data:collapsed="false">Backlink</span></div></div><style type="text/css">	
    	
      .apexcharts-legend {	
        display: flex;	
        overflow: auto;	
        padding: 0 10px;	
      }	
      .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {	
        flex-wrap: wrap	
      }	
      .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
        flex-direction: column;	
        bottom: 0;	
      }	
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
        justify-content: flex-start;	
      }	
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {	
        justify-content: center;  	
      }	
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {	
        justify-content: flex-end;	
      }	
      .apexcharts-legend-series {	
        cursor: pointer;	
        line-height: normal;	
      }	
      .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{	
        display: flex;	
        align-items: center;	
      }	
      .apexcharts-legend-text {	
        position: relative;	
        font-size: 14px;	
      }	
      .apexcharts-legend-text *, .apexcharts-legend-marker * {	
        pointer-events: none;	
      }	
      .apexcharts-legend-marker {	
        position: relative;	
        display: inline-block;	
        cursor: pointer;	
        margin-right: 3px;	
        border-style: solid;
      }	
      	
      .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{	
        display: inline-block;	
      }	
      .apexcharts-legend-series.apexcharts-no-click {	
        cursor: auto;	
      }	
      .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {	
        display: none !important;	
      }	
      .apexcharts-inactive-legend {	
        opacity: 0.45;	
      }</style></foreignObject><g id="SvgjsG1288" class="apexcharts-inner apexcharts-graphical" transform="translate(75.64758762783475, 30)"><defs id="SvgjsDefs1287"><clipPath id="gridRectMasknurxzla6"><rect id="SvgjsRect1294" width="471.1416721343994" height="164.70080061721802" x="-18.814259380764433" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasknurxzla6"></clipPath><clipPath id="nonForecastMasknurxzla6"></clipPath><clipPath id="gridRectMarkerMasknurxzla6"><rect id="SvgjsRect1295" width="453.51315337287053" height="181.70080061721802" x="-10" y="-10" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1293" x1="0" y1="0" x2="0" y2="161.70080061721802" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="161.70080061721802" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1344" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1345" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1347" font-family="Public Sans" x="0" y="190.70080061721802" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Public Sans;"><tspan id="SvgjsTspan1348">1 Jan</tspan><title>1 Jan</title></text><text id="SvgjsText1350" font-family="Public Sans" x="48.16812815254118" y="190.70080061721802" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Public Sans;"><tspan id="SvgjsTspan1351">2 Jan</tspan><title>2 Jan</title></text><text id="SvgjsText1353" font-family="Public Sans" x="96.33625630508234" y="190.70080061721802" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Public Sans;"><tspan id="SvgjsTspan1354">3 Jan</tspan><title>3 Jan</title></text><text id="SvgjsText1356" font-family="Public Sans" x="144.50438445762353" y="190.70080061721802" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Public Sans;"><tspan id="SvgjsTspan1357">4 Jan</tspan><title>4 Jan</title></text><text id="SvgjsText1359" font-family="Public Sans" x="192.6725126101647" y="190.70080061721802" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Public Sans;"><tspan id="SvgjsTspan1360">5 Jan</tspan><title>5 Jan</title></text><text id="SvgjsText1362" font-family="Public Sans" x="240.84064076270585" y="190.70080061721802" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Public Sans;"><tspan id="SvgjsTspan1363">6 Jan</tspan><title>6 Jan</title></text><text id="SvgjsText1365" font-family="Public Sans" x="289.008768915247" y="190.70080061721802" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Public Sans;"><tspan id="SvgjsTspan1366">7 Jan</tspan><title>7 Jan</title></text><text id="SvgjsText1368" font-family="Public Sans" x="337.17689706778816" y="190.70080061721802" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Public Sans;"><tspan id="SvgjsTspan1369">8 Jan</tspan><title>8 Jan</title></text><text id="SvgjsText1371" font-family="Public Sans" x="385.3450252203293" y="190.70080061721802" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Public Sans;"><tspan id="SvgjsTspan1372">9 Jan</tspan><title>9 Jan</title></text><text id="SvgjsText1374" font-family="Public Sans" x="433.5131533728705" y="190.70080061721802" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Public Sans;"><tspan id="SvgjsTspan1375">10 Jan</tspan><title>10 Jan</title></text></g></g><g id="SvgjsG1388" class="apexcharts-grid"><g id="SvgjsG1389" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1391" x1="-15.314259380764431" y1="0" x2="448.827412753635" y2="0" stroke="#e0e0e0" stroke-dasharray="8" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1392" x1="-15.314259380764431" y1="40.425200154304505" x2="448.827412753635" y2="40.425200154304505" stroke="#e0e0e0" stroke-dasharray="8" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1393" x1="-15.314259380764431" y1="80.85040030860901" x2="448.827412753635" y2="80.85040030860901" stroke="#e0e0e0" stroke-dasharray="8" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1394" x1="-15.314259380764431" y1="121.27560046291352" x2="448.827412753635" y2="121.27560046291352" stroke="#e0e0e0" stroke-dasharray="8" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1395" x1="-15.314259380764431" y1="161.70080061721802" x2="448.827412753635" y2="161.70080061721802" stroke="#e0e0e0" stroke-dasharray="8" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1390" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1397" x1="0" y1="161.70080061721802" x2="433.51315337287053" y2="161.70080061721802" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1396" x1="0" y1="1" x2="0" y2="161.70080061721802" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1296" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1297" class="apexcharts-series" rel="1" seriesName="Generic" data:realIndex="0"><path id="SvgjsPath1301" d="M -7.225219222881175 198.1260007715225L -7.225219222881175 52.5102401851654Q -7.225219222881175 48.5102401851654 -3.225219222881175 48.5102401851654L 3.225219222881175 48.5102401851654Q 7.225219222881175 48.5102401851654 7.225219222881175 52.5102401851654L 7.225219222881175 52.5102401851654L 7.225219222881175 198.1260007715225Q 7.225219222881175 202.1260007715225 3.225219222881175 202.1260007715225L -3.225219222881175 202.1260007715225Q -7.225219222881175 202.1260007715225 -7.225219222881175 198.1260007715225z" fill="rgba(255,171,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknurxzla6)" pathTo="M -7.225219222881175 198.1260007715225L -7.225219222881175 52.5102401851654Q -7.225219222881175 48.5102401851654 -3.225219222881175 48.5102401851654L 3.225219222881175 48.5102401851654Q 7.225219222881175 48.5102401851654 7.225219222881175 52.5102401851654L 7.225219222881175 52.5102401851654L 7.225219222881175 198.1260007715225Q 7.225219222881175 202.1260007715225 3.225219222881175 202.1260007715225L -3.225219222881175 202.1260007715225Q -7.225219222881175 202.1260007715225 -7.225219222881175 198.1260007715225z" pathFrom="M -7.225219222881175 198.1260007715225L -7.225219222881175 198.1260007715225L 7.225219222881175 198.1260007715225L 7.225219222881175 198.1260007715225L 7.225219222881175 198.1260007715225L 7.225219222881175 198.1260007715225L 7.225219222881175 198.1260007715225L -7.225219222881175 198.1260007715225" cy="48.5102401851654" cx="7.225219222881175" j="0" val="38" barHeight="153.6157605863571" barWidth="14.45043844576235"></path><path id="SvgjsPath1303" d="M 40.94290892965999 198.1260007715225L 40.94290892965999 24.212600077152246Q 40.94290892965999 20.212600077152246 44.94290892965999 20.212600077152246L 51.393347375422344 20.212600077152246Q 55.393347375422344 20.212600077152246 55.393347375422344 24.212600077152246L 55.393347375422344 24.212600077152246L 55.393347375422344 198.1260007715225Q 55.393347375422344 202.1260007715225 51.393347375422344 202.1260007715225L 44.94290892965999 202.1260007715225Q 40.94290892965999 202.1260007715225 40.94290892965999 198.1260007715225z" fill="rgba(255,171,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknurxzla6)" pathTo="M 40.94290892965999 198.1260007715225L 40.94290892965999 24.212600077152246Q 40.94290892965999 20.212600077152246 44.94290892965999 20.212600077152246L 51.393347375422344 20.212600077152246Q 55.393347375422344 20.212600077152246 55.393347375422344 24.212600077152246L 55.393347375422344 24.212600077152246L 55.393347375422344 198.1260007715225Q 55.393347375422344 202.1260007715225 51.393347375422344 202.1260007715225L 44.94290892965999 202.1260007715225Q 40.94290892965999 202.1260007715225 40.94290892965999 198.1260007715225z" pathFrom="M 40.94290892965999 198.1260007715225L 40.94290892965999 198.1260007715225L 55.393347375422344 198.1260007715225L 55.393347375422344 198.1260007715225L 55.393347375422344 198.1260007715225L 55.393347375422344 198.1260007715225L 55.393347375422344 198.1260007715225L 40.94290892965999 198.1260007715225" cy="20.212600077152246" cx="55.393347375422344" j="1" val="45" barHeight="181.91340069437027" barWidth="14.45043844576235"></path><path id="SvgjsPath1305" d="M 89.11103708220115 198.1260007715225L 89.11103708220115 72.72284026231765Q 89.11103708220115 68.72284026231765 93.11103708220115 68.72284026231765L 99.5614755279635 68.72284026231765Q 103.5614755279635 68.72284026231765 103.5614755279635 72.72284026231765L 103.5614755279635 72.72284026231765L 103.5614755279635 198.1260007715225Q 103.5614755279635 202.1260007715225 99.5614755279635 202.1260007715225L 93.11103708220115 202.1260007715225Q 89.11103708220115 202.1260007715225 89.11103708220115 198.1260007715225z" fill="rgba(255,171,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknurxzla6)" pathTo="M 89.11103708220115 198.1260007715225L 89.11103708220115 72.72284026231765Q 89.11103708220115 68.72284026231765 93.11103708220115 68.72284026231765L 99.5614755279635 68.72284026231765Q 103.5614755279635 68.72284026231765 103.5614755279635 72.72284026231765L 103.5614755279635 72.72284026231765L 103.5614755279635 198.1260007715225Q 103.5614755279635 202.1260007715225 99.5614755279635 202.1260007715225L 93.11103708220115 202.1260007715225Q 89.11103708220115 202.1260007715225 89.11103708220115 198.1260007715225z" pathFrom="M 89.11103708220115 198.1260007715225L 89.11103708220115 198.1260007715225L 103.5614755279635 198.1260007715225L 103.5614755279635 198.1260007715225L 103.5614755279635 198.1260007715225L 103.5614755279635 198.1260007715225L 103.5614755279635 198.1260007715225L 89.11103708220115 198.1260007715225" cy="68.72284026231765" cx="103.5614755279635" j="2" val="33" barHeight="133.40316050920487" barWidth="14.45043844576235"></path><path id="SvgjsPath1307" d="M 137.27916523474232 198.1260007715225L 137.27916523474232 52.5102401851654Q 137.27916523474232 48.5102401851654 141.27916523474232 48.5102401851654L 147.72960368050468 48.5102401851654Q 151.72960368050468 48.5102401851654 151.72960368050468 52.5102401851654L 151.72960368050468 52.5102401851654L 151.72960368050468 198.1260007715225Q 151.72960368050468 202.1260007715225 147.72960368050468 202.1260007715225L 141.27916523474232 202.1260007715225Q 137.27916523474232 202.1260007715225 137.27916523474232 198.1260007715225z" fill="rgba(255,171,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknurxzla6)" pathTo="M 137.27916523474232 198.1260007715225L 137.27916523474232 52.5102401851654Q 137.27916523474232 48.5102401851654 141.27916523474232 48.5102401851654L 147.72960368050468 48.5102401851654Q 151.72960368050468 48.5102401851654 151.72960368050468 52.5102401851654L 151.72960368050468 52.5102401851654L 151.72960368050468 198.1260007715225Q 151.72960368050468 202.1260007715225 147.72960368050468 202.1260007715225L 141.27916523474232 202.1260007715225Q 137.27916523474232 202.1260007715225 137.27916523474232 198.1260007715225z" pathFrom="M 137.27916523474232 198.1260007715225L 137.27916523474232 198.1260007715225L 151.72960368050468 198.1260007715225L 151.72960368050468 198.1260007715225L 151.72960368050468 198.1260007715225L 151.72960368050468 198.1260007715225L 151.72960368050468 198.1260007715225L 137.27916523474232 198.1260007715225" cy="48.5102401851654" cx="151.72960368050468" j="3" val="38" barHeight="153.6157605863571" barWidth="14.45043844576235"></path><path id="SvgjsPath1309" d="M 185.44729338728348 198.1260007715225L 185.44729338728348 76.7653602777481Q 185.44729338728348 72.7653602777481 189.44729338728348 72.7653602777481L 195.89773183304584 72.7653602777481Q 199.89773183304584 72.7653602777481 199.89773183304584 76.7653602777481L 199.89773183304584 76.7653602777481L 199.89773183304584 198.1260007715225Q 199.89773183304584 202.1260007715225 195.89773183304584 202.1260007715225L 189.44729338728348 202.1260007715225Q 185.44729338728348 202.1260007715225 185.44729338728348 198.1260007715225z" fill="rgba(255,171,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknurxzla6)" pathTo="M 185.44729338728348 198.1260007715225L 185.44729338728348 76.7653602777481Q 185.44729338728348 72.7653602777481 189.44729338728348 72.7653602777481L 195.89773183304584 72.7653602777481Q 199.89773183304584 72.7653602777481 199.89773183304584 76.7653602777481L 199.89773183304584 76.7653602777481L 199.89773183304584 198.1260007715225Q 199.89773183304584 202.1260007715225 195.89773183304584 202.1260007715225L 189.44729338728348 202.1260007715225Q 185.44729338728348 202.1260007715225 185.44729338728348 198.1260007715225z" pathFrom="M 185.44729338728348 198.1260007715225L 185.44729338728348 198.1260007715225L 199.89773183304584 198.1260007715225L 199.89773183304584 198.1260007715225L 199.89773183304584 198.1260007715225L 199.89773183304584 198.1260007715225L 199.89773183304584 198.1260007715225L 185.44729338728348 198.1260007715225" cy="72.7653602777481" cx="199.89773183304584" j="4" val="32" barHeight="129.3606404937744" barWidth="14.45043844576235"></path><path id="SvgjsPath1311" d="M 233.61542153982467 198.1260007715225L 233.61542153982467 4Q 233.61542153982467 0 237.61542153982467 0L 244.06585998558702 0Q 248.06585998558702 0 248.06585998558702 4L 248.06585998558702 4L 248.06585998558702 198.1260007715225Q 248.06585998558702 202.1260007715225 244.06585998558702 202.1260007715225L 237.61542153982467 202.1260007715225Q 233.61542153982467 202.1260007715225 233.61542153982467 198.1260007715225z" fill="rgba(255,171,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknurxzla6)" pathTo="M 233.61542153982467 198.1260007715225L 233.61542153982467 4Q 233.61542153982467 0 237.61542153982467 0L 244.06585998558702 0Q 248.06585998558702 0 248.06585998558702 4L 248.06585998558702 4L 248.06585998558702 198.1260007715225Q 248.06585998558702 202.1260007715225 244.06585998558702 202.1260007715225L 237.61542153982467 202.1260007715225Q 233.61542153982467 202.1260007715225 233.61542153982467 198.1260007715225z" pathFrom="M 233.61542153982467 198.1260007715225L 233.61542153982467 198.1260007715225L 248.06585998558702 198.1260007715225L 248.06585998558702 198.1260007715225L 248.06585998558702 198.1260007715225L 248.06585998558702 198.1260007715225L 248.06585998558702 198.1260007715225L 233.61542153982467 198.1260007715225" cy="0" cx="248.06585998558702" j="5" val="50" barHeight="202.1260007715225" barWidth="14.45043844576235"></path><path id="SvgjsPath1313" d="M 281.78354969236585 198.1260007715225L 281.78354969236585 12.085040030860881Q 281.78354969236585 8.085040030860881 285.78354969236585 8.085040030860881L 292.2339881381282 8.085040030860881Q 296.2339881381282 8.085040030860881 296.2339881381282 12.085040030860881L 296.2339881381282 12.085040030860881L 296.2339881381282 198.1260007715225Q 296.2339881381282 202.1260007715225 292.2339881381282 202.1260007715225L 285.78354969236585 202.1260007715225Q 281.78354969236585 202.1260007715225 281.78354969236585 198.1260007715225z" fill="rgba(255,171,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknurxzla6)" pathTo="M 281.78354969236585 198.1260007715225L 281.78354969236585 12.085040030860881Q 281.78354969236585 8.085040030860881 285.78354969236585 8.085040030860881L 292.2339881381282 8.085040030860881Q 296.2339881381282 8.085040030860881 296.2339881381282 12.085040030860881L 296.2339881381282 12.085040030860881L 296.2339881381282 198.1260007715225Q 296.2339881381282 202.1260007715225 292.2339881381282 202.1260007715225L 285.78354969236585 202.1260007715225Q 281.78354969236585 202.1260007715225 281.78354969236585 198.1260007715225z" pathFrom="M 281.78354969236585 198.1260007715225L 281.78354969236585 198.1260007715225L 296.2339881381282 198.1260007715225L 296.2339881381282 198.1260007715225L 296.2339881381282 198.1260007715225L 296.2339881381282 198.1260007715225L 296.2339881381282 198.1260007715225L 281.78354969236585 198.1260007715225" cy="8.085040030860881" cx="296.2339881381282" j="6" val="48" barHeight="194.04096074066163" barWidth="14.45043844576235"></path><path id="SvgjsPath1315" d="M 329.951677844907 198.1260007715225L 329.951677844907 44.42520015430449Q 329.951677844907 40.42520015430449 333.951677844907 40.42520015430449L 340.40211629066937 40.42520015430449Q 344.40211629066937 40.42520015430449 344.40211629066937 44.42520015430449L 344.40211629066937 44.42520015430449L 344.40211629066937 198.1260007715225Q 344.40211629066937 202.1260007715225 340.40211629066937 202.1260007715225L 333.951677844907 202.1260007715225Q 329.951677844907 202.1260007715225 329.951677844907 198.1260007715225z" fill="rgba(255,171,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknurxzla6)" pathTo="M 329.951677844907 198.1260007715225L 329.951677844907 44.42520015430449Q 329.951677844907 40.42520015430449 333.951677844907 40.42520015430449L 340.40211629066937 40.42520015430449Q 344.40211629066937 40.42520015430449 344.40211629066937 44.42520015430449L 344.40211629066937 44.42520015430449L 344.40211629066937 198.1260007715225Q 344.40211629066937 202.1260007715225 340.40211629066937 202.1260007715225L 333.951677844907 202.1260007715225Q 329.951677844907 202.1260007715225 329.951677844907 198.1260007715225z" pathFrom="M 329.951677844907 198.1260007715225L 329.951677844907 198.1260007715225L 344.40211629066937 198.1260007715225L 344.40211629066937 198.1260007715225L 344.40211629066937 198.1260007715225L 344.40211629066937 198.1260007715225L 344.40211629066937 198.1260007715225L 329.951677844907 198.1260007715225" cy="40.42520015430449" cx="344.40211629066937" j="7" val="40" barHeight="161.70080061721802" barWidth="14.45043844576235"></path><path id="SvgjsPath1317" d="M 378.11980599744817 198.1260007715225L 378.11980599744817 36.34016012344361Q 378.11980599744817 32.34016012344361 382.11980599744817 32.34016012344361L 388.5702444432105 32.34016012344361Q 392.5702444432105 32.34016012344361 392.5702444432105 36.34016012344361L 392.5702444432105 36.34016012344361L 392.5702444432105 198.1260007715225Q 392.5702444432105 202.1260007715225 388.5702444432105 202.1260007715225L 382.11980599744817 202.1260007715225Q 378.11980599744817 202.1260007715225 378.11980599744817 198.1260007715225z" fill="rgba(255,171,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknurxzla6)" pathTo="M 378.11980599744817 198.1260007715225L 378.11980599744817 36.34016012344361Q 378.11980599744817 32.34016012344361 382.11980599744817 32.34016012344361L 388.5702444432105 32.34016012344361Q 392.5702444432105 32.34016012344361 392.5702444432105 36.34016012344361L 392.5702444432105 36.34016012344361L 392.5702444432105 198.1260007715225Q 392.5702444432105 202.1260007715225 388.5702444432105 202.1260007715225L 382.11980599744817 202.1260007715225Q 378.11980599744817 202.1260007715225 378.11980599744817 198.1260007715225z" pathFrom="M 378.11980599744817 198.1260007715225L 378.11980599744817 198.1260007715225L 392.5702444432105 198.1260007715225L 392.5702444432105 198.1260007715225L 392.5702444432105 198.1260007715225L 392.5702444432105 198.1260007715225L 392.5702444432105 198.1260007715225L 378.11980599744817 198.1260007715225" cy="32.34016012344361" cx="392.5702444432105" j="8" val="42" barHeight="169.7858406480789" barWidth="14.45043844576235"></path><path id="SvgjsPath1319" d="M 426.2879341499893 198.1260007715225L 426.2879341499893 56.552760200595856Q 426.2879341499893 52.552760200595856 430.2879341499893 52.552760200595856L 436.7383725957517 52.552760200595856Q 440.7383725957517 52.552760200595856 440.7383725957517 56.552760200595856L 440.7383725957517 56.552760200595856L 440.7383725957517 198.1260007715225Q 440.7383725957517 202.1260007715225 436.7383725957517 202.1260007715225L 430.2879341499893 202.1260007715225Q 426.2879341499893 202.1260007715225 426.2879341499893 198.1260007715225z" fill="rgba(255,171,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknurxzla6)" pathTo="M 426.2879341499893 198.1260007715225L 426.2879341499893 56.552760200595856Q 426.2879341499893 52.552760200595856 430.2879341499893 52.552760200595856L 436.7383725957517 52.552760200595856Q 440.7383725957517 52.552760200595856 440.7383725957517 56.552760200595856L 440.7383725957517 56.552760200595856L 440.7383725957517 198.1260007715225Q 440.7383725957517 202.1260007715225 436.7383725957517 202.1260007715225L 430.2879341499893 202.1260007715225Q 426.2879341499893 202.1260007715225 426.2879341499893 198.1260007715225z" pathFrom="M 426.2879341499893 198.1260007715225L 426.2879341499893 198.1260007715225L 440.7383725957517 198.1260007715225L 440.7383725957517 198.1260007715225L 440.7383725957517 198.1260007715225L 440.7383725957517 198.1260007715225L 440.7383725957517 198.1260007715225L 426.2879341499893 198.1260007715225" cy="52.552760200595856" cx="440.7383725957517" j="9" val="37" barHeight="149.57324057092666" barWidth="14.45043844576235"></path><g id="SvgjsG1299" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1300" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1302" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1304" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1306" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1308" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1310" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1312" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1314" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1316" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1318" className="apexcharts-bar-goals-groups"></g></g></g></g><g id="SvgjsG1320" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1321" class="apexcharts-series" seriesName="Backlink" data:longestSeries="true" rel="1" data:realIndex="1"><path id="SvgjsPath1343" d="M 0 109.14804041662215C 16.858844853389407 109.14804041662215 31.30928329915176 88.9354403394699 48.168128152541165 88.9354403394699C 65.02697300593057 88.9354403394699 79.47741145169292 109.14804041662215 96.33625630508233 109.14804041662215C 113.19510115847174 109.14804041662215 127.64553960423409 72.7653602777481 144.5043844576235 72.7653602777481C 161.3632293110129 72.7653602777481 175.81366775677526 88.9354403394699 192.67251261016466 88.9354403394699C 209.53135746355406 88.9354403394699 223.98179590931642 24.2551200925827 240.84064076270585 24.2551200925827C 257.6994856160953 24.2551200925827 272.1499240618576 72.7653602777481 289.008768915247 72.7653602777481C 305.86761376863643 72.7653602777481 320.31805221439873 48.5102401851654 337.17689706778816 48.5102401851654C 354.0357419211776 48.5102401851654 368.4861803669399 97.0204803703308 385.3450252203293 97.0204803703308C 402.20387007371875 97.0204803703308 416.65430851948105 64.68032024688719 433.5131533728705 64.68032024688719" fill="none" fill-opacity="1" stroke="rgba(105,108,255,1)" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="1" clip-path="url(#gridRectMasknurxzla6)" pathTo="M 0 109.14804041662215C 16.858844853389407 109.14804041662215 31.30928329915176 88.9354403394699 48.168128152541165 88.9354403394699C 65.02697300593057 88.9354403394699 79.47741145169292 109.14804041662215 96.33625630508233 109.14804041662215C 113.19510115847174 109.14804041662215 127.64553960423409 72.7653602777481 144.5043844576235 72.7653602777481C 161.3632293110129 72.7653602777481 175.81366775677526 88.9354403394699 192.67251261016466 88.9354403394699C 209.53135746355406 88.9354403394699 223.98179590931642 24.2551200925827 240.84064076270585 24.2551200925827C 257.6994856160953 24.2551200925827 272.1499240618576 72.7653602777481 289.008768915247 72.7653602777481C 305.86761376863643 72.7653602777481 320.31805221439873 48.5102401851654 337.17689706778816 48.5102401851654C 354.0357419211776 48.5102401851654 368.4861803669399 97.0204803703308 385.3450252203293 97.0204803703308C 402.20387007371875 97.0204803703308 416.65430851948105 64.68032024688719 433.5131533728705 64.68032024688719" pathFrom="M -1 202.1260007715225L -1 202.1260007715225L 48.168128152541165 202.1260007715225L 96.33625630508233 202.1260007715225L 144.5043844576235 202.1260007715225L 192.67251261016466 202.1260007715225L 240.84064076270585 202.1260007715225L 289.008768915247 202.1260007715225L 337.17689706778816 202.1260007715225L 385.3450252203293 202.1260007715225L 433.5131533728705 202.1260007715225"></path><g id="SvgjsG1322" class="apexcharts-series-markers-wrap" data:realIndex="1"><g id="SvgjsG1324" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMasknurxzla6)"><circle id="SvgjsCircle1325" r="4" cx="0" cy="109.14804041662215" class="apexcharts-marker wnhvfmupq" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="4"></circle><circle id="SvgjsCircle1326" r="4" cx="48.168128152541165" cy="88.9354403394699" class="apexcharts-marker w2jncolhi" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1327" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMasknurxzla6)"><circle id="SvgjsCircle1328" r="4" cx="96.33625630508233" cy="109.14804041662215" class="apexcharts-marker wf5cye3hk" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1329" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMasknurxzla6)"><circle id="SvgjsCircle1330" r="4" cx="144.5043844576235" cy="72.7653602777481" class="apexcharts-marker wzxb3n2zej" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1331" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMasknurxzla6)"><circle id="SvgjsCircle1332" r="4" cx="192.67251261016466" cy="88.9354403394699" class="apexcharts-marker wglnw5byqj" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1333" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMasknurxzla6)"><circle id="SvgjsCircle1334" r="4" cx="240.84064076270585" cy="24.2551200925827" class="apexcharts-marker wb2dz79zn" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1335" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMasknurxzla6)"><circle id="SvgjsCircle1336" r="4" cx="289.008768915247" cy="72.7653602777481" class="apexcharts-marker wgzd6ev7tk" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1337" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMasknurxzla6)"><circle id="SvgjsCircle1338" r="4" cx="337.17689706778816" cy="48.5102401851654" class="apexcharts-marker wxh5866sr" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="7" j="7" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1339" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMasknurxzla6)"><circle id="SvgjsCircle1340" r="4" cx="385.3450252203293" cy="97.0204803703308" class="apexcharts-marker wtesa2wpt" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="8" j="8" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1341" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMasknurxzla6)"><circle id="SvgjsCircle1342" r="4" cx="433.5131533728705" cy="64.68032024688719" class="apexcharts-marker wkoxzzdep" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="9" j="9" index="1" default-marker-size="4"></circle></g></g></g><g id="SvgjsG1298" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1323" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1398" x1="-15.314259380764431" y1="0" x2="448.827412753635" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1399" x1="-15.314259380764431" y1="0" x2="448.827412753635" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1400" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1401" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1402" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1292" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1376" class="apexcharts-yaxis" rel="0" transform="translate(26.333328247070312, 0)"><g id="SvgjsG1377" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1378" font-family="Public Sans" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Public Sans;"><tspan id="SvgjsTspan1379">50%</tspan><title>50%</title></text><text id="SvgjsText1380" font-family="Public Sans" x="20" y="71.82520015430451" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Public Sans;"><tspan id="SvgjsTspan1381">40%</tspan><title>40%</title></text><text id="SvgjsText1382" font-family="Public Sans" x="20" y="112.25040030860902" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Public Sans;"><tspan id="SvgjsTspan1383">30%</tspan><title>30%</title></text><text id="SvgjsText1384" font-family="Public Sans" x="20" y="152.67560046291354" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Public Sans;"><tspan id="SvgjsTspan1385">20%</tspan><title>20%</title></text><text id="SvgjsText1386" font-family="Public Sans" x="20" y="193.10080061721803" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Public Sans;"><tspan id="SvgjsTspan1387">10%</tspan><title>10%</title></text></g></g><g id="SvgjsG1289" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 171, 0);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
      <div class="resize-triggers"><div class="expand-trigger"><div style="width: 600px; height: 295px;"></div></div><div class="contract-trigger"></div></div></div>
    </div>
  </div>
</div>
<!--/ On route vehicles Table -->


</div>
    @stop