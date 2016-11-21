<html>
<head>
    <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.min.css">

</head>
<body>

<div class="content col-md-12 content-page">
    <div class="panel panel-default">
        <div class="header-heading">
            <img src="<?php base_url(); ?>/assets/images/kemkominfo.png" class="pull-left" height="45" style="margin: 15px;">
            <img src="<?php base_url(); ?>/assets/images/idsirtii.png" class="pull-left" height="45" style="margin: 15px;">

            <p align="center">
                <br>
                <b>LAPORAN MONITORING JARINGAN INTERNET INDONESIA</b>
            </p>

            <div class="clearfix"></div>
        </div>
        <div class="panel-heading" style="background: #fff;">
            <!-- <i class="fa fa-print pull-right" onclick="window.print();"></i> -->
            <div class="pull-right" style="">
                <a href="#" onclick="getPDF()">
                    <i class="fa fa-file-pdf-o"></i>
                    <span style="font-size: 11px;">Download PDF</span>
                </a>
            </div>

            <table>
                <tbody>
                    <tr>
                        <td width="170">TARGET ANCAMAN IP </td>
                        <td>: <b>All</b></td>
                    </tr>
                    <tr>
                        <td>PEMILIK IP </td>
                        <td>: <b>All</b></td>
                    </tr>
                    <tr>
                        <td>DARI </td>
                        <td>: 2015-05-13 00:00:00</td>
                    </tr>
                    <tr>
                        <td>SAMPAI </td>
                        <td>: 2015-05-13 23:59:59</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="alert alert-warning no-border">
            <i class="fa fa-info-circle"></i> <b>Ringkasan</b> Berdasarkan sistem analisa dan laporan monitoring jaringan internet Id-SIRTII/CC. IP All pada rentan waktu dari 2016/11/15 00:00:00 sampai 2016/11/15 23:59:59 diindikasi telah mendapatkan serangan dengan jenis klasifikasi serangan sebagai berikut :
        </div>

        <div class="panel-heading" style="margin-top: -20px;border-top: 1px solid #EDF1F2;">
            <i class="fa fa-area-chart"></i>
            <b>Jumlah Serangan berdasarkan klasifikasi.</b>
        </div>

        <div class="row wrapper" style="margin-bottom: 15px;">
            <div class="col-sm-12">
                <table width="100%">
                    <tbody>
                        <tr>
                            <td width="50%">
                                <div style="width: 550px; height: 450px;" id="id_file_pie" data-highcharts-chart="6">
                                    <div class="highcharts-container" id="highcharts-14" style="position: relative; overflow: hidden; width: 550px; height: 450px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Dosis, sans-serif;">
                                        <svg version="1.1" style="font-family:Dosis, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="550" height="450">
                                            <desc>Created with Highcharts 4.0.4</desc>
                                            <defs>
                                                <clipPath id="highcharts-15">
                                                    <rect x="-50" y="0" width="850" height="450"></rect>
                                                </clipPath>
                                            </defs>
                                            <g class="highcharts-series-group" zIndex="3">
                                                <g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(50,0) scale(1 1)" style="cursor:pointer;">
                                                    <path fill="rgba(195,32,0,1)" d="M 122.08058092243034 143.7089273282437 C 122.68648330354651 143.69804739449182 123.19807386422391 143.69157357123873 123.80413880919693 143.68711690017278 L 123.80413880919693 164.9003203357692 C 123.19807386422391 164.90477700683516 122.68648330354651 164.91125083008825 122.08058092243034 164.92213076384013 Z" zIndex="-114.96293747225461" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(195,32,0,1)" d="M 123.7306873575784 189.65605536010597 C 123.994123175455 189.6513249541269 124.2165538540104 189.64851024836466 124.48006035182475 189.6465725652925 L 124.48006035182475 210.85977600088893 C 124.2165538540104 210.86171368396109 123.994123175455 210.86452838972332 123.7306873575784 210.8692587957024 Z" zIndex="-114.96293747225461" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(230,128,0,1)" d="M 123.80528874707741 143.68710844822286 C 124.00704087448023 143.68562629986783 124.17736019715569 143.6846755768963 124.37912027210703 143.68390531892382 L 124.37912027210703 164.89710875452025 C 124.17736019715569 164.89787901249272 124.00704087448023 164.89882973546426 123.80528874707741 164.90031188381928 Z" zIndex="-114.9937940282959" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(230,128,0,1)" d="M 124.48056032481627 189.64656889053168 C 124.56827864107836 189.64592447820343 124.64233052050248 189.6455111203897 124.73005229222045 189.64517622561905 L 124.73005229222045 210.85837966121548 C 124.64233052050248 210.85871455598613 124.56827864107836 210.85912791379985 124.48056032481627 210.8597723261281 Z" zIndex="-114.9937940282959" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(0,125,0,1)" d="M 124.38027025537738 143.68390093270696 C 124.58203034121172 143.6831321013937 124.75235425749868 143.68278355753728 124.954117256978 143.68272663580666 L 124.954117256978 164.8959300714031 C 124.75235425749868 164.8959869931337 124.58203034121172 164.89633553699014 124.38027025537738 164.8971043683034 Z" zIndex="-114.99833014024" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(0,125,0,1)" d="M 124.73055228494668 189.64517431856825 C 124.8182740613964 189.64484004408422 124.89232793804291 189.64468850327708 124.98005098129478 189.64466375469854 L 124.98005098129478 210.85786719029497 C 124.89232793804291 210.8578919388735 124.8182740613964 210.85804347968065 124.73055228494668 210.85837775416468 Z" zIndex="-114.99833014024" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(26,77,179,1)" d="M 122.07943129320165 143.70894797571853 L 122.07943129320165 164.92215141131496 L 123.73018751878332 210.86926777286536 L 123.73018751878332 189.65606433726893 Z" zIndex="-113.81327918959254" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(26,77,179,1)" d="M 124.97657758157506 143.6827218501802 L 124.97657758157506 164.89592528577663 L 124.98981633981523 210.85786510958783 L 124.98981633981523 189.6446616739914 Z" zIndex="-113.84999763859307" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(195,32,0,1)" d="M 123.80413880919693 143.68711690017278 L 123.80413880919693 164.9003203357692 L 124.48006035182475 210.85977600088893 L 124.48006035182475 189.6465725652925 Z" zIndex="-113.84384425467934" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(195,32,0,1)" d="M 122.08058092243034 143.7089273282437 L 122.08058092243034 164.92213076384013 L 123.7306873575784 210.8692587957024 L 123.7306873575784 189.65605536010597 Z" zIndex="-113.81330809753206" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(230,128,0,1)" d="M 124.37912027210703 143.68390531892382 L 124.37912027210703 164.89710875452025 L 124.73005229222045 210.85837966121548 L 124.73005229222045 189.64517622561905 Z" zIndex="-113.8483406978207" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(230,128,0,1)" d="M 123.80528874707741 143.68710844822286 L 123.80528874707741 164.90031188381928 L 124.48056032481627 210.8597723261281 L 124.48056032481627 189.64656889053168 Z" zIndex="-113.84385608801294" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(0,125,0,1)" d="M 124.954117256978 143.68272663580666 L 124.954117256978 164.8959300714031 L 124.98005098129478 210.85786719029497 L 124.98005098129478 189.64466375469854 Z" zIndex="-113.8499909383742" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(0,125,0,1)" d="M 124.38027025537738 143.68390093270696 L 124.38027025537738 164.8971043683034 L 124.73055228494668 210.85837775416468 L 124.73055228494668 189.64517431856825 Z" zIndex="-113.8483468388376" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(26,77,179,1)" d="M 240 225 C 240 269.9102935513961 188.51274623054127 306.31727983645294 125 306.31727983645294 C 61.48725376945874 306.31727983645294 10.000000000000007 269.9102935513961 10 225 L 10 246.21320343559643 C 10.000000000000007 291.1234969869925 61.48725376945874 327.53048327204937 125 327.53048327204937 C 188.51274623054127 327.53048327204937 240 291.1234969869925 240 246.21320343559643 Z" zIndex="114.99057737553464" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(26,77,179,1)" d="M 124.98981633981523 189.6446616739914 C 152.60405325859733 189.64068470731033 174.99437468271316 205.4665848822633 174.99999896293065 224.99279906482604 C 175.00562324314814 244.51901324738878 152.62442057896686 260.35136135932754 125.01018366018477 260.3553383260086 C 97.39594674140267 260.3593152926897 75.00562531728686 244.5334151177367 75.00000103706935 225.00720093517396 C 74.99446696935448 205.7941839227293 96.56764146840241 190.14400292347406 123.73018751878332 189.65606433726893 L 123.73018751878332 210.86926777286536 C 96.1248566340023 211.36516039274943 74.31482876960284 227.59117978637295 75.01612683812361 247.11109645190004 C 75.71742490664438 266.63101311742713 98.66448159643565 282.0530317182115 126.26981248121666 281.55713909832747 C 153.87514336599767 281.0612464784434 175.68517123039715 264.8352270848199 174.98387316187637 245.3153104192928 C 174.29382379565993 226.10848991277658 152.16112557291945 210.8539519327791 124.98981633981523 210.85786510958783 Z" zIndex="114.99057737553464" transform="translate(0,0)" visibility="visible"></path>
                                                    <g zIndex="11500" stroke="#3366cc" stroke-width="1" stroke-linejoin="round">
                                                        <path fill="#3366cc" d="M 124.97657758157506 143.6827218501802 C 188.48932249477386 143.6735748268137 239.98706177024025 180.07314522920564 239.9999976147405 224.98343784909991 C 240.01293345924074 269.8937304689942 188.53616733162374 306.3081311264533 125.02342241842496 306.3172781498198 C 61.51067750522614 306.3264251731863 10.01293822975977 269.92685477079436 10.00000238525952 225.01656215090006 C 9.987274029515293 180.8266230222774 59.60557537732554 144.83120672399033 122.07943129320165 143.70894797571853 L 123.73018751878332 189.65606433726893 C 96.1248566340023 190.151956957153 74.31482876960284 206.37797635077652 75.01612683812361 225.8978930163036 C 75.71742490664438 245.4178096818307 98.66448159643565 260.8398282826151 126.26981248121666 260.34393566273104 C 153.87514336599767 259.848043042847 175.68517123039715 243.62202364922348 174.98387316187637 224.1021069836964 C 174.29382379565993 204.89528647718015 152.16112557291945 189.64074849718267 124.98981633981523 189.6446616739914 Z" zIndex="115" transform="translate(0,0)" visibility="visible"></path>
                                                    </g>
                                                    <g zIndex="11500" stroke="#dc3912" stroke-width="1" stroke-linejoin="round">
                                                        <path fill="#dc3912" d="M 122.08058092243034 143.7089273282437 C 122.68648330354651 143.69804739449182 123.19807386422391 143.69157357123873 123.80413880919693 143.68711690017278 L 124.48006035182475 189.6465725652925 C 124.2165538540104 189.64851024836466 123.994123175455 189.6513249541269 123.7306873575784 189.65605536010597 Z" zIndex="115" transform="translate(0,0)" visibility="visible"></path>
                                                    </g>
                                                    <g zIndex="11500" stroke="#ff9900" stroke-width="1" stroke-linejoin="round">
                                                        <path fill="#ff9900" d="M 123.80528874707741 143.68710844822286 C 124.00704087448023 143.68562629986783 124.17736019715569 143.6846755768963 124.37912027210703 143.68390531892382 L 124.73005229222045 189.64517622561905 C 124.64233052050248 189.6455111203897 124.56827864107836 189.64592447820343 124.48056032481627 189.64656889053168 Z" zIndex="115" transform="translate(0,0)" visibility="visible"></path>
                                                    </g>
                                                    <g zIndex="11500" stroke="#109618" stroke-width="1" stroke-linejoin="round">
                                                        <path fill="#109618" d="M 124.38027025537738 143.68390093270696 C 124.58203034121172 143.6831321013937 124.75235425749868 143.68278355753728 124.954117256978 143.68272663580666 L 124.98005098129478 189.64466375469854 C 124.89232793804291 189.64468850327708 124.8182740613964 189.64484004408422 124.73055228494668 189.64517431856825 Z" zIndex="115" transform="translate(0,0)" visibility="visible"></path>
                                                    </g>
                                                </g>
                                                <g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(50,0) scale(1 1)"></g>
                                            </g>
                                            <text x="275" text-anchor="middle" class="highcharts-title" zIndex="4" style="color:#333333;font-size:16px;font-weight:bold;text-transform:uppercase;fill:#333333;width:486px;" y="23">SIGNATURE</text>
                                            <g class="highcharts-legend" zIndex="7" transform="translate(302,110)">
                                                <g zIndex="1">
                                                    <g>
                                                        <g class="highcharts-legend-item" zIndex="1" transform="translate(8,3)">
                                                            <text x="21" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2" y="26">local</text>
                                                            <rect x="0" y="15" width="16" height="12" zIndex="3" fill="#3366cc"></rect>
                                                        </g>
                                                        <g class="highcharts-legend-item" zIndex="1" transform="translate(8,29)">
                                                            <text x="21" y="26" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">icmp-info</text>
                                                            <rect x="0" y="15" width="16" height="12" zIndex="3" fill="#dc3912"></rect>
                                                        </g>
                                                        <g class="highcharts-legend-item" zIndex="1" transform="translate(8,55)">
                                                            <text x="21" y="26" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">icmp</text>
                                                            <rect x="0" y="15" width="16" height="12" zIndex="3" fill="#ff9900"></rect>
                                                        </g>
                                                        <g class="highcharts-legend-item" zIndex="1" transform="translate(8,81)">
                                                            <text x="21" y="26" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">snmp</text>
                                                            <rect x="0" y="15" width="16" height="12" zIndex="3" fill="#109618"></rect>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;" transform="translate(0,-9999)">
                                                <path fill="rgba(219,219,216,0.8)" d="M 3 0 L 13 0 C 16 0 16 0 16 3 L 16 13 C 16 16 16 16 13 16 L 3 16 C 0 16 0 16 0 13 L 0 3 C 0 0 0 0 3 0"></path>
                                                <text x="8" zIndex="1" style="font-size:12px;color:#333333;fill:#333333;" y="21"></text>
                                            </g>
                                            <text x="540" text-anchor="end" zIndex="8" style="cursor:pointer;color:#909090;font-size:9px;fill:#909090;" y="445"></text>
                                        </svg>
                                    </div>
                                </div>
                            </td>
                            <td width="50%">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="5">No</th>
                                            <th>Series</th>
                                            <th>Total</th>
                                            <th>Percentage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>local</td>
                                            <td>2471</td>
                                            <td>99.6 %</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>icmp-info</td>
                                            <td>6</td>
                                            <td>0.2 %</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>icmp</td>
                                            <td>2</td>
                                            <td>0.1 %</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>snmp</td>
                                            <td>2</td>
                                            <td>0.1 %</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Total</td>
                                            <td>2481</td>
                                            <td>100 %</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="panel-heading" style="margin-top: -20px;border-top: 1px solid #EDF1F2;">
            <i class="fa fa-area-chart"></i>
            <b>Jumlah Serangan terbesar berdasarkan severity (High/Medium/Low).</b>
        </div>

        <div class="row wrapper" style="margin-bottom: 15px;">
            <div class="col-sm-12">
                <table width="100%">
                    <tbody>
                        <tr>
                            <td width="50%">
                                <div style="width: 550px; height: 450px;" id="severity_pie" data-highcharts-chart="7">
                                    <div class="highcharts-container" id="highcharts-16" style="position: relative; overflow: hidden; width: 550px; height: 450px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Dosis, sans-serif;">
                                        <svg version="1.1" style="font-family:Dosis, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="550" height="450">
                                            <desc>Created with Highcharts 4.0.4</desc>
                                            <defs>
                                                <clipPath id="highcharts-17">
                                                    <rect x="-50" y="0" width="850" height="450"></rect>
                                                </clipPath>
                                            </defs>
                                            <g class="highcharts-series-group" zIndex="3">
                                                <g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(50,0) scale(1 1)" style="cursor:pointer;">
                                                    <path fill="rgba(195,32,0,1)" d="M 123.23033710649655 143.6923487817925 C 123.8363630556804 143.6857536974511 124.3480195892035 143.6828976291417 124.954117256978 143.68272663580666 L 124.954117256978 164.8959300714031 C 124.3480195892035 164.89610106473813 123.8363630556804 164.89895713304753 123.23033710649655 164.90555221738893 Z" zIndex="-114.98638307749033" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(195,32,0,1)" d="M 124.23058135065067 189.64884729643154 C 124.49407089377408 189.645979868457 124.71653025617543 189.6447380996268 124.98005098129478 189.64466375469854 L 124.98005098129478 210.85786719029497 C 124.71653025617543 210.85794153522323 124.49407089377408 210.85918330405343 124.23058135065067 210.86205073202797 Z" zIndex="-114.98638307749033" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(26,77,179,1)" d="M 123.22918724275432 143.6923612992642 L 123.22918724275432 164.90556473486063 L 124.23008140989317 210.86205617440694 L 124.23008140989317 189.64885273881052 Z" zIndex="-113.83650172136096" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(26,77,179,1)" d="M 124.97657758157506 143.6827218501802 L 124.97657758157506 164.89592528577663 L 124.98981633981523 210.85786510958783 L 124.98981633981523 189.6446616739914 Z" zIndex="-113.84999763859307" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(195,32,0,1)" d="M 124.954117256978 143.68272663580666 L 124.954117256978 164.8959300714031 L 124.98005098129478 210.85786719029497 L 124.98005098129478 189.64466375469854 Z" zIndex="-113.8499909383742" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(195,32,0,1)" d="M 123.23033710649655 143.6923487817925 L 123.23033710649655 164.90555221738893 L 124.23058135065067 210.86205073202797 L 124.23058135065067 189.64884729643154 Z" zIndex="-113.83651924671543" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(26,77,179,1)" d="M 240 225 C 240 269.9102935513961 188.51274623054127 306.31727983645294 125 306.31727983645294 C 61.48725376945874 306.31727983645294 10.000000000000007 269.9102935513961 10 225 L 10 246.21320343559643 C 10.000000000000007 291.1234969869925 61.48725376945874 327.53048327204937 125 327.53048327204937 C 188.51274623054127 327.53048327204937 240 291.1234969869925 240 246.21320343559643 Z" zIndex="114.99650052751217" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(26,77,179,1)" d="M 124.98981633981523 189.6446616739914 C 152.60405325859733 189.64068470731033 174.99437468271316 205.4665848822633 174.99999896293065 224.99279906482604 C 175.00562324314814 244.51901324738878 152.62442057896686 260.35136135932754 125.01018366018477 260.3553383260086 C 97.39594674140267 260.3593152926897 75.00562531728686 244.5334151177367 75.00000103706935 225.00720093517396 C 74.99443116407456 205.6698761824483 96.8862162439015 189.94661606118765 124.23008140989317 189.64885273881052 L 124.23008140989317 210.86205617440694 C 96.61911791635143 211.16272808651453 74.58071380185012 227.23371857024495 75.00592809777734 246.75761809162253 C 75.43114239370456 266.2815176130001 98.15895509656507 281.86502260889347 125.76991859010681 281.5643506967859 C 153.38088208364854 281.2636787846783 175.41928619814988 265.1926883009479 174.99407190222266 245.66878877957032 C 174.57297097333964 226.33375629684699 152.33692326513284 210.85392661462285 124.98981633981523 210.85786510958783 Z" zIndex="114.99650052751217" transform="translate(0,0)" visibility="visible"></path>
                                                    <g zIndex="11500" stroke="#3366cc" stroke-width="1" stroke-linejoin="round">
                                                        <path fill="#3366cc" d="M 124.97657758157506 143.6827218501802 C 188.48932249477386 143.6735748268137 239.98706177024025 180.07314522920564 239.9999976147405 224.98343784909991 C 240.01293345924074 269.8937304689942 188.53616733162374 306.3081311264533 125.02342241842496 306.3172781498198 C 61.51067750522614 306.3264251731863 10.01293822975977 269.92685477079436 10.00000238525952 225.01656215090006 C 9.98719167737148 180.540715219631 60.33829736097346 144.37721694073164 123.22918724275432 143.6923612992642 L 124.23008140989317 189.64885273881052 C 96.61911791635143 189.9495246509181 74.58071380185012 206.02051513464852 75.00592809777734 225.5444146560261 C 75.43114239370456 245.0683141774037 98.15895509656507 260.65181917329704 125.76991859010681 260.35114726118945 C 153.38088208364854 260.05047534908186 175.41928619814988 243.97948486535148 174.99407190222266 224.4555853439739 C 174.57297097333964 205.12055286125056 152.33692326513284 189.64072317902642 124.98981633981523 189.6446616739914 Z" zIndex="115" transform="translate(0,0)" visibility="visible"></path>
                                                    </g>
                                                    <g zIndex="11500" stroke="#dc3912" stroke-width="1" stroke-linejoin="round">
                                                        <path fill="#dc3912" d="M 123.23033710649655 143.6923487817925 C 123.8363630556804 143.6857536974511 124.3480195892035 143.6828976291417 124.954117256978 143.68272663580666 L 124.98005098129478 189.64466375469854 C 124.71653025617543 189.6447380996268 124.49407089377408 189.645979868457 124.23058135065067 189.64884729643154 Z" zIndex="115" transform="translate(0,0)" visibility="visible"></path>
                                                    </g>
                                                </g>
                                                <g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(50,0) scale(1 1)"></g>
                                            </g>
                                            <text x="275" text-anchor="middle" class="highcharts-title" zIndex="4" style="color:#333333;font-size:16px;font-weight:bold;text-transform:uppercase;fill:#333333;width:486px;" y="23">SEVERITY</text>
                                            <g class="highcharts-legend" zIndex="7" transform="translate(302,110)">
                                                <g zIndex="1">
                                                    <g>
                                                        <g class="highcharts-legend-item" zIndex="1" transform="translate(8,3)">
                                                            <text x="21" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2" y="26">Medium</text>
                                                            <rect x="0" y="15" width="16" height="12" zIndex="3" fill="#3366cc"></rect>
                                                        </g>
                                                        <g class="highcharts-legend-item" zIndex="1" transform="translate(8,29)">
                                                            <text x="21" y="26" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">Low</text>
                                                            <rect x="0" y="15" width="16" height="12" zIndex="3" fill="#dc3912"></rect>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;" transform="translate(0,-9999)">
                                                <path fill="rgba(219,219,216,0.8)" d="M 3 0 L 13 0 C 16 0 16 0 16 3 L 16 13 C 16 16 16 16 13 16 L 3 16 C 0 16 0 16 0 13 L 0 3 C 0 0 0 0 3 0"></path>
                                                <text x="8" zIndex="1" style="font-size:12px;color:#333333;fill:#333333;" y="21"></text>
                                            </g>
                                            <text x="540" text-anchor="end" zIndex="8" style="cursor:pointer;color:#909090;font-size:9px;fill:#909090;" y="445"></text>
                                        </svg>
                                    </div>
                                </div>
                            </td>
                            <td width="50%">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="5">No</th>
                                            <th>Series</th>
                                            <th>Total</th>
                                            <th>Percentage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Medium</td>
                                            <td>2475</td>
                                            <td>99.8 %</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Low</td>
                                            <td>6</td>
                                            <td>0.2 %</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Total</td>
                                            <td>2481</td>
                                            <td>100 %</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="panel-heading" style="margin-top: -20px;border-top: 1px solid #EDF1F2;">
            <i class="fa fa-area-chart"></i>
            <b>Jumlah serangan terbesar berdasarkan nama serangan.</b>
        </div>

        <div class="row wrapper" style="margin-bottom: 15px;">
            <div class="col-sm-12">
                <table width="100%">
                    <tbody>
                        <tr>
                            <td width="50%">
                                <div style="width: 550px; height: 450px;" id="signame_pie" data-highcharts-chart="8">
                                    <div class="highcharts-container" id="highcharts-18" style="position: relative; overflow: hidden; width: 550px; height: 450px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Dosis, sans-serif;">
                                        <svg version="1.1" style="font-family:Dosis, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="550" height="450">
                                            <desc>Created with Highcharts 4.0.4</desc>
                                            <defs>
                                                <clipPath id="highcharts-19">
                                                    <rect x="-50" y="0" width="850" height="450"></rect>
                                                </clipPath>
                                            </defs>
                                            <g class="highcharts-series-group" zIndex="3">
                                                <g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(50,0) scale(1 1)" style="cursor:pointer;">
                                                    <path fill="rgba(195,32,0,1)" d="M 122.08058092243034 143.7089273282437 C 122.68648330354651 143.69804739449182 123.19807386422391 143.69157357123873 123.80413880919693 143.68711690017278 L 123.80413880919693 164.9003203357692 C 123.19807386422391 164.90477700683516 122.68648330354651 164.91125083008825 122.08058092243034 164.92213076384013 Z" zIndex="-114.96293747225461" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(195,32,0,1)" d="M 123.7306873575784 189.65605536010597 C 123.994123175455 189.6513249541269 124.2165538540104 189.64851024836466 124.48006035182475 189.6465725652925 L 124.48006035182475 210.85977600088893 C 124.2165538540104 210.86171368396109 123.994123175455 210.86452838972332 123.7306873575784 210.8692587957024 Z" zIndex="-114.96293747225461" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(230,128,0,1)" d="M 123.80528874707741 143.68710844822286 C 124.00704087448023 143.68562629986783 124.17736019715569 143.6846755768963 124.37912027210703 143.68390531892382 L 124.37912027210703 164.89710875452025 C 124.17736019715569 164.89787901249272 124.00704087448023 164.89882973546426 123.80528874707741 164.90031188381928 Z" zIndex="-114.9937940282959" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(230,128,0,1)" d="M 124.48056032481627 189.64656889053168 C 124.56827864107836 189.64592447820343 124.64233052050248 189.6455111203897 124.73005229222045 189.64517622561905 L 124.73005229222045 210.85837966121548 C 124.64233052050248 210.85871455598613 124.56827864107836 210.85912791379985 124.48056032481627 210.8597723261281 Z" zIndex="-114.9937940282959" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(0,125,0,1)" d="M 124.38027025537738 143.68390093270696 C 124.50116457534627 143.68344025021665 124.6032217928251 143.68315923833683 124.72411752038307 143.68295415825338 L 124.72411752038307 164.8961575938498 C 124.6032217928251 164.89636267393325 124.50116457534627 164.89664368581307 124.38027025537738 164.8971043683034 Z" zIndex="-114.99833014024" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(0,125,0,1)" d="M 124.73055228494668 189.64517431856825 C 124.78311503275924 189.64497402183335 124.82748773601091 189.64485184275514 124.88005109581873 189.64476267750146 L 124.88005109581873 210.8579661130979 C 124.82748773601091 210.85805527835157 124.78311503275924 210.85817745742978 124.73055228494668 210.85837775416468 Z" zIndex="-114.99833014024" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(128,0,128,1)" d="M 124.72526751708762 143.6829522115355 C 124.80572989287352 143.68281628906365 124.87365465798725 143.68274933605593 124.954117256978 143.68272663580666 L 124.954117256978 164.8959300714031 C 124.87365465798725 164.89595277165236 124.80572989287352 164.89601972466008 124.72526751708762 164.89615564713193 Z" zIndex="-114.99967183458757" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(128,0,128,1)" d="M 124.88055109438592 189.64476183110241 C 124.91553473603197 189.64470273437553 124.94506724260314 189.64467362437213 124.98005098129478 189.64466375469854 L 124.98005098129478 210.85786719029497 C 124.94506724260314 210.85787705996856 124.91553473603197 210.85790616997195 124.88055109438592 210.85796526669884 Z" zIndex="-114.99967183458757" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(26,77,179,1)" d="M 122.07943129320165 143.70894797571853 L 122.07943129320165 164.92215141131496 L 123.73018751878332 210.86926777286536 L 123.73018751878332 189.65606433726893 Z" zIndex="-113.81327918959254" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(26,77,179,1)" d="M 124.97657758157506 143.6827218501802 L 124.97657758157506 164.89592528577663 L 124.98981633981523 210.85786510958783 L 124.98981633981523 189.6446616739914 Z" zIndex="-113.84999763859307" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(195,32,0,1)" d="M 123.80413880919693 143.68711690017278 L 123.80413880919693 164.9003203357692 L 124.48006035182475 210.85977600088893 L 124.48006035182475 189.6465725652925 Z" zIndex="-113.84384425467934" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(195,32,0,1)" d="M 122.08058092243034 143.7089273282437 L 122.08058092243034 164.92213076384013 L 123.7306873575784 210.8692587957024 L 123.7306873575784 189.65605536010597 Z" zIndex="-113.81330809753206" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(230,128,0,1)" d="M 124.37912027210703 143.68390531892382 L 124.37912027210703 164.89710875452025 L 124.73005229222045 210.85837966121548 L 124.73005229222045 189.64517622561905 Z" zIndex="-113.8483406978207" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(230,128,0,1)" d="M 123.80528874707741 143.68710844822286 L 123.80528874707741 164.90031188381928 L 124.48056032481627 210.8597723261281 L 124.48056032481627 189.64656889053168 Z" zIndex="-113.84385608801294" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(0,125,0,1)" d="M 124.72411752038307 143.68295415825338 L 124.72411752038307 164.8961575938498 L 124.88005109581873 210.8579661130979 L 124.88005109581873 189.64476267750146 Z" zIndex="-113.84967239069763" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(0,125,0,1)" d="M 124.38027025537738 143.68390093270696 L 124.38027025537738 164.8971043683034 L 124.73055228494668 210.85837775416468 L 124.73055228494668 189.64517431856825 Z" zIndex="-113.8483468388376" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(128,0,128,1)" d="M 124.954117256978 143.68272663580666 L 124.954117256978 164.8959300714031 L 124.98005098129478 210.85786719029497 L 124.98005098129478 189.64466375469854 Z" zIndex="-113.8499909383742" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(128,0,128,1)" d="M 124.72526751708762 143.6829522115355 L 124.72526751708762 164.89615564713193 L 124.88055109438592 210.85796526669884 L 124.88055109438592 189.64476183110241 Z" zIndex="-113.8496751162417" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(26,77,179,1)" d="M 240 225 C 240 269.9102935513961 188.51274623054127 306.31727983645294 125 306.31727983645294 C 61.48725376945874 306.31727983645294 10.000000000000007 269.9102935513961 10 225 L 10 246.21320343559643 C 10.000000000000007 291.1234969869925 61.48725376945874 327.53048327204937 125 327.53048327204937 C 188.51274623054127 327.53048327204937 240 291.1234969869925 240 246.21320343559643 Z" zIndex="114.99057737553464" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(26,77,179,1)" d="M 124.98981633981523 189.6446616739914 C 152.60405325859733 189.64068470731033 174.99437468271316 205.4665848822633 174.99999896293065 224.99279906482604 C 175.00562324314814 244.51901324738878 152.62442057896686 260.35136135932754 125.01018366018477 260.3553383260086 C 97.39594674140267 260.3593152926897 75.00562531728686 244.5334151177367 75.00000103706935 225.00720093517396 C 74.99446696935448 205.7941839227293 96.56764146840241 190.14400292347406 123.73018751878332 189.65606433726893 L 123.73018751878332 210.86926777286536 C 96.1248566340023 211.36516039274943 74.31482876960284 227.59117978637295 75.01612683812361 247.11109645190004 C 75.71742490664438 266.63101311742713 98.66448159643565 282.0530317182115 126.26981248121666 281.55713909832747 C 153.87514336599767 281.0612464784434 175.68517123039715 264.8352270848199 174.98387316187637 245.3153104192928 C 174.29382379565993 226.10848991277658 152.16112557291945 210.8539519327791 124.98981633981523 210.85786510958783 Z" zIndex="114.99057737553464" transform="translate(0,0)" visibility="visible"></path>
                                                    <g zIndex="11500" stroke="#3366cc" stroke-width="1" stroke-linejoin="round">
                                                        <path fill="#3366cc" d="M 124.97657758157506 143.6827218501802 C 188.48932249477386 143.6735748268137 239.98706177024025 180.07314522920564 239.9999976147405 224.98343784909991 C 240.01293345924074 269.8937304689942 188.53616733162374 306.3081311264533 125.02342241842496 306.3172781498198 C 61.51067750522614 306.3264251731863 10.01293822975977 269.92685477079436 10.00000238525952 225.01656215090006 C 9.987274029515293 180.8266230222774 59.60557537732554 144.83120672399033 122.07943129320165 143.70894797571853 L 123.73018751878332 189.65606433726893 C 96.1248566340023 190.151956957153 74.31482876960284 206.37797635077652 75.01612683812361 225.8978930163036 C 75.71742490664438 245.4178096818307 98.66448159643565 260.8398282826151 126.26981248121666 260.34393566273104 C 153.87514336599767 259.848043042847 175.68517123039715 243.62202364922348 174.98387316187637 224.1021069836964 C 174.29382379565993 204.89528647718015 152.16112557291945 189.64074849718267 124.98981633981523 189.6446616739914 Z" zIndex="115" transform="translate(0,0)" visibility="visible"></path>
                                                    </g>
                                                    <g zIndex="11500" stroke="#dc3912" stroke-width="1" stroke-linejoin="round">
                                                        <path fill="#dc3912" d="M 122.08058092243034 143.7089273282437 C 122.68648330354651 143.69804739449182 123.19807386422391 143.69157357123873 123.80413880919693 143.68711690017278 L 124.48006035182475 189.6465725652925 C 124.2165538540104 189.64851024836466 123.994123175455 189.6513249541269 123.7306873575784 189.65605536010597 Z" zIndex="115" transform="translate(0,0)" visibility="visible"></path>
                                                    </g>
                                                    <g zIndex="11500" stroke="#ff9900" stroke-width="1" stroke-linejoin="round">
                                                        <path fill="#ff9900" d="M 123.80528874707741 143.68710844822286 C 124.00704087448023 143.68562629986783 124.17736019715569 143.6846755768963 124.37912027210703 143.68390531892382 L 124.73005229222045 189.64517622561905 C 124.64233052050248 189.6455111203897 124.56827864107836 189.64592447820343 124.48056032481627 189.64656889053168 Z" zIndex="115" transform="translate(0,0)" visibility="visible"></path>
                                                    </g>
                                                    <g zIndex="11500" stroke="#109618" stroke-width="1" stroke-linejoin="round">
                                                        <path fill="#109618" d="M 124.38027025537738 143.68390093270696 C 124.50116457534627 143.68344025021665 124.6032217928251 143.68315923833683 124.72411752038307 143.68295415825338 L 124.88005109581873 189.64476267750146 C 124.82748773601091 189.64485184275514 124.78311503275924 189.64497402183335 124.73055228494668 189.64517431856825 Z" zIndex="115" transform="translate(0,0)" visibility="visible"></path>
                                                    </g>
                                                    <g zIndex="11500" stroke="#990099" stroke-width="1" stroke-linejoin="round">
                                                        <path fill="#990099" d="M 124.72526751708762 143.6829522115355 C 124.80572989287352 143.68281628906365 124.87365465798725 143.68274933605593 124.954117256978 143.68272663580666 L 124.98005098129478 189.64466375469854 C 124.94506724260314 189.64467362437213 124.91553473603197 189.64470273437553 124.88055109438592 189.64476183110241 Z" zIndex="115" transform="translate(0,0)" visibility="visible"></path>
                                                    </g>
                                                </g>
                                                <g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(50,0) scale(1 1)"></g>
                                            </g>
                                            <text x="275" text-anchor="middle" class="highcharts-title" zIndex="4" style="color:#333333;font-size:16px;font-weight:bold;text-transform:uppercase;fill:#333333;width:486px;" y="23">TYPE-ATTACK</text>
                                            <g class="highcharts-legend" zIndex="7" transform="translate(302,110)">
                                                <g zIndex="1">
                                                    <g>
                                                        <g class="highcharts-legend-item" zIndex="1" transform="translate(8,3)">
                                                            <text x="21" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2" y="26">1</text>
                                                            <rect x="0" y="15" width="16" height="12" zIndex="3" fill="#3366cc"></rect>
                                                        </g>
                                                        <g class="highcharts-legend-item" zIndex="1" transform="translate(8,29)">
                                                            <text x="21" y="26" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">2</text>
                                                            <rect x="0" y="15" width="16" height="12" zIndex="3" fill="#dc3912"></rect>
                                                        </g>
                                                        <g class="highcharts-legend-item" zIndex="1" transform="translate(8,55)">
                                                            <text x="21" y="26" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">3</text>
                                                            <rect x="0" y="15" width="16" height="12" zIndex="3" fill="#ff9900"></rect>
                                                        </g>
                                                        <g class="highcharts-legend-item" zIndex="1" transform="translate(8,81)">
                                                            <text x="21" y="26" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">4</text>
                                                            <rect x="0" y="15" width="16" height="12" zIndex="3" fill="#109618"></rect>
                                                        </g>
                                                        <g class="highcharts-legend-item" zIndex="1" transform="translate(8,107)">
                                                            <text x="21" y="26" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">5</text>
                                                            <rect x="0" y="15" width="16" height="12" zIndex="3" fill="#990099"></rect>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;" transform="translate(0,-9999)">
                                                <path fill="rgba(219,219,216,0.8)" d="M 3 0 L 13 0 C 16 0 16 0 16 3 L 16 13 C 16 16 16 16 13 16 L 3 16 C 0 16 0 16 0 13 L 0 3 C 0 0 0 0 3 0"></path>
                                                <text x="8" zIndex="1" style="font-size:12px;color:#333333;fill:#333333;" y="21"></text>
                                            </g>
                                            <text x="540" text-anchor="end" zIndex="8" style="cursor:pointer;color:#909090;font-size:9px;fill:#909090;" y="445"></text>
                                        </svg>
                                    </div>
                                </div>
                            </td>
                            <td width="50%">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="5">No</th>
                                            <th>Series</th>
                                            <th>Total</th>
                                            <th>Percentage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>BAD-TRAFFIC same SRC/DST</td>
                                            <td>2471</td>
                                            <td>99.6 %</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>ICMP Destination Unreachable Host Unreachable</td>
                                            <td>6</td>
                                            <td>0.2 %</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>ICMP redirect host</td>
                                            <td>2</td>
                                            <td>0.1 %</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>SNMP request tcp</td>
                                            <td>1</td>
                                            <td>0 %</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>SNMP AgentX/tcp request</td>
                                            <td>1</td>
                                            <td>0 %</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Total</td>
                                            <td>2481</td>
                                            <td>100 %</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="panel-heading" style="margin-top: -20px;border-top: 1px solid #EDF1F2;">
            <i class="fa fa-area-chart"></i>
            <b>Sumber Serangan</b>
        </div>

        <div class="row wrapper" style="margin-bottom: 15px;">
            <div class="col-sm-12">
                <table width="100%">
                    <tbody>
                        <tr>
                            <td width="50%">
                                <div style="width: 550px; height: 450px;" id="sip_pie" data-highcharts-chart="9">
                                    <div class="highcharts-container" id="highcharts-20" style="position: relative; overflow: hidden; width: 550px; height: 450px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Dosis, sans-serif;">
                                        <svg version="1.1" style="font-family:Dosis, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="550" height="450">
                                            <desc>Created with Highcharts 4.0.4</desc>
                                            <defs>
                                                <clipPath id="highcharts-21">
                                                    <rect x="-50" y="0" width="850" height="450"></rect>
                                                </clipPath>
                                            </defs>
                                            <g class="highcharts-series-group" zIndex="3">
                                                <g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(50,0) scale(1 1)" style="cursor:pointer;">
                                                    <path fill="rgba(195,32,0,1)" d="M 122.08058092243034 143.7089273282437 C 122.88858549871533 143.6944183305319 123.57086698587919 143.68699098162313 124.37912027210703 143.68390531892382 L 124.37912027210703 164.89710875452025 C 123.57086698587919 164.90019441721955 122.88858549871533 164.90762176612833 122.08058092243034 164.92213076384013 Z" zIndex="-114.96293747225461" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(195,32,0,1)" d="M 123.7306873575784 189.65605536010597 C 124.08199369509362 189.64974710023128 124.37863781994747 189.646517818097 124.73005229222045 189.64517622561905 L 124.73005229222045 210.85837966121548 C 124.37863781994747 210.85972125369344 124.08199369509362 210.8629505358277 123.7306873575784 210.8692587957024 Z" zIndex="-114.96293747225461" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(230,128,0,1)" d="M 124.38027025537738 143.68390093270696 C 124.58203034121172 143.6831321013937 124.75235425749868 143.68278355753728 124.954117256978 143.68272663580666 L 124.954117256978 164.8959300714031 C 124.75235425749868 164.8959869931337 124.58203034121172 164.89633553699014 124.38027025537738 164.8971043683034 Z" zIndex="-114.99833014024" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(230,128,0,1)" d="M 124.73055228494668 189.64517431856825 C 124.8182740613964 189.64484004408422 124.89232793804291 189.64468850327708 124.98005098129478 189.64466375469854 L 124.98005098129478 210.85786719029497 C 124.89232793804291 210.8578919388735 124.8182740613964 210.85804347968065 124.73055228494668 210.85837775416468 Z" zIndex="-114.99833014024" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(26,77,179,1)" d="M 122.07943129320165 143.70894797571853 L 122.07943129320165 164.92215141131496 L 123.73018751878332 210.86926777286536 L 123.73018751878332 189.65606433726893 Z" zIndex="-113.81327918959254" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(26,77,179,1)" d="M 124.97657758157506 143.6827218501802 L 124.97657758157506 164.89592528577663 L 124.98981633981523 210.85786510958783 L 124.98981633981523 189.6446616739914 Z" zIndex="-113.84999763859307" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(195,32,0,1)" d="M 124.37912027210703 143.68390531892382 L 124.37912027210703 164.89710875452025 L 124.73005229222045 210.85837966121548 L 124.73005229222045 189.64517622561905 Z" zIndex="-113.8483406978207" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(195,32,0,1)" d="M 122.08058092243034 143.7089273282437 L 122.08058092243034 164.92213076384013 L 123.7306873575784 210.8692587957024 L 123.7306873575784 189.65605536010597 Z" zIndex="-113.81330809753206" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(230,128,0,1)" d="M 124.954117256978 143.68272663580666 L 124.954117256978 164.8959300714031 L 124.98005098129478 210.85786719029497 L 124.98005098129478 189.64466375469854 Z" zIndex="-113.8499909383742" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(230,128,0,1)" d="M 124.38027025537738 143.68390093270696 L 124.38027025537738 164.8971043683034 L 124.73055228494668 210.85837775416468 L 124.73055228494668 189.64517431856825 Z" zIndex="-113.8483468388376" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(26,77,179,1)" d="M 240 225 C 240 269.9102935513961 188.51274623054127 306.31727983645294 125 306.31727983645294 C 61.48725376945874 306.31727983645294 10.000000000000007 269.9102935513961 10 225 L 10 246.21320343559643 C 10.000000000000007 291.1234969869925 61.48725376945874 327.53048327204937 125 327.53048327204937 C 188.51274623054127 327.53048327204937 240 291.1234969869925 240 246.21320343559643 Z" zIndex="114.99057737553464" transform="translate(0,0)" visibility="visible"></path>
                                                    <path fill="rgba(26,77,179,1)" d="M 124.98981633981523 189.6446616739914 C 152.60405325859733 189.64068470731033 174.99437468271316 205.4665848822633 174.99999896293065 224.99279906482604 C 175.00562324314814 244.51901324738878 152.62442057896686 260.35136135932754 125.01018366018477 260.3553383260086 C 97.39594674140267 260.3593152926897 75.00562531728686 244.5334151177367 75.00000103706935 225.00720093517396 C 74.99446696935448 205.7941839227293 96.56764146840241 190.14400292347406 123.73018751878332 189.65606433726893 L 123.73018751878332 210.86926777286536 C 96.1248566340023 211.36516039274943 74.31482876960284 227.59117978637295 75.01612683812361 247.11109645190004 C 75.71742490664438 266.63101311742713 98.66448159643565 282.0530317182115 126.26981248121666 281.55713909832747 C 153.87514336599767 281.0612464784434 175.68517123039715 264.8352270848199 174.98387316187637 245.3153104192928 C 174.29382379565993 226.10848991277658 152.16112557291945 210.8539519327791 124.98981633981523 210.85786510958783 Z" zIndex="114.99057737553464" transform="translate(0,0)" visibility="visible"></path>
                                                    <g zIndex="11500" stroke="#3366cc" stroke-width="1" stroke-linejoin="round">
                                                        <path fill="#3366cc" d="M 124.97657758157506 143.6827218501802 C 188.48932249477386 143.6735748268137 239.98706177024025 180.07314522920564 239.9999976147405 224.98343784909991 C 240.01293345924074 269.8937304689942 188.53616733162374 306.3081311264533 125.02342241842496 306.3172781498198 C 61.51067750522614 306.3264251731863 10.01293822975977 269.92685477079436 10.00000238525952 225.01656215090006 C 9.987274029515293 180.8266230222774 59.60557537732554 144.83120672399033 122.07943129320165 143.70894797571853 L 123.73018751878332 189.65606433726893 C 96.1248566340023 190.151956957153 74.31482876960284 206.37797635077652 75.01612683812361 225.8978930163036 C 75.71742490664438 245.4178096818307 98.66448159643565 260.8398282826151 126.26981248121666 260.34393566273104 C 153.87514336599767 259.848043042847 175.68517123039715 243.62202364922348 174.98387316187637 224.1021069836964 C 174.29382379565993 204.89528647718015 152.16112557291945 189.64074849718267 124.98981633981523 189.6446616739914 Z" zIndex="115" transform="translate(0,0)" visibility="visible"></path>
                                                    </g>
                                                    <g zIndex="11500" stroke="#dc3912" stroke-width="1" stroke-linejoin="round">
                                                        <path fill="#dc3912" d="M 122.08058092243034 143.7089273282437 C 122.88858549871533 143.6944183305319 123.57086698587919 143.68699098162313 124.37912027210703 143.68390531892382 L 124.73005229222045 189.64517622561905 C 124.37863781994747 189.646517818097 124.08199369509362 189.64974710023128 123.7306873575784 189.65605536010597 Z" zIndex="115" transform="translate(0,0)" visibility="visible"></path>
                                                    </g>
                                                    <g zIndex="11500" stroke="#ff9900" stroke-width="1" stroke-linejoin="round">
                                                        <path fill="#ff9900" d="M 124.38027025537738 143.68390093270696 C 124.58203034121172 143.6831321013937 124.75235425749868 143.68278355753728 124.954117256978 143.68272663580666 L 124.98005098129478 189.64466375469854 C 124.89232793804291 189.64468850327708 124.8182740613964 189.64484004408422 124.73055228494668 189.64517431856825 Z" zIndex="115" transform="translate(0,0)" visibility="visible"></path>
                                                    </g>
                                                </g>
                                                <g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(50,0) scale(1 1)"></g>
                                            </g>
                                            <text x="275" text-anchor="middle" class="highcharts-title" zIndex="4" style="color:#333333;font-size:16px;font-weight:bold;text-transform:uppercase;fill:#333333;width:486px;" y="23">SOURCE</text>
                                            <g class="highcharts-legend" zIndex="7" transform="translate(302,110)">
                                                <g zIndex="1">
                                                    <g>
                                                        <g class="highcharts-legend-item" zIndex="1" transform="translate(8,3)">
                                                            <text x="21" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2" y="26">0.0.0.0</text>
                                                            <rect x="0" y="15" width="16" height="12" zIndex="3" fill="#3366cc"></rect>
                                                        </g>
                                                        <g class="highcharts-legend-item" zIndex="1" transform="translate(8,29)">
                                                            <text x="21" y="26" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">10.252.108.9</text>
                                                            <rect x="0" y="15" width="16" height="12" zIndex="3" fill="#dc3912"></rect>
                                                        </g>
                                                        <g class="highcharts-legend-item" zIndex="1" transform="translate(8,55)">
                                                            <text x="21" y="26" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">10.252.108.175</text>
                                                            <rect x="0" y="15" width="16" height="12" zIndex="3" fill="#ff9900"></rect>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;" transform="translate(0,-9999)">
                                                <path fill="rgba(219,219,216,0.8)" d="M 3 0 L 13 0 C 16 0 16 0 16 3 L 16 13 C 16 16 16 16 13 16 L 3 16 C 0 16 0 16 0 13 L 0 3 C 0 0 0 0 3 0"></path>
                                                <text x="8" zIndex="1" style="font-size:12px;color:#333333;fill:#333333;" y="21"></text>
                                            </g>
                                            <text x="540" text-anchor="end" zIndex="8" style="cursor:pointer;color:#909090;font-size:9px;fill:#909090;" y="445"></text>
                                        </svg>
                                    </div>
                                </div>
                            </td>
                            <td width="50%">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="5">No</th>
                                            <th>Series</th>
                                            <th>Total</th>
                                            <th>Percentage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>0.0.0.0</td>
                                            <td>2471</td>
                                            <td>99.6 %</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>10.252.108.9</td>
                                            <td>8</td>
                                            <td>0.3 %</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>10.252.108.175</td>
                                            <td>2</td>
                                            <td>0.1 %</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Total</td>
                                            <td>2481</td>
                                            <td>100 %</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="panel-heading" style="margin-top: -20px;border-top: 1px solid #EDF1F2;">
            <i class="fa fa-area-chart"></i>
            <b>Detail IP Source</b>
        </div>

        <div class="row wrapper" style="margin-bottom: 15px;">
            <div class="col-sm-12">
                <table width="100%" class="sourcedetail" style="font-size: 11px;border: solid 1px #ebebeb;">
                    <thead>
                        <tr>
                            <th rowspan="2">Series</th>
                            <th rowspan="2" width="20">From</th>
                            <th colspan="24">Hour</th>
                            <th rowspan="2" width="20">Total</th>
                            <th rowspan="2">Action</th>
                        </tr>
                        <tr>
                            <th width="27">0</th>
                            <th width="27">1</th>
                            <th width="27">2</th>
                            <th width="27">3</th>
                            <th width="27">4</th>
                            <th width="27">5</th>
                            <th width="27">6</th>
                            <th width="27">7</th>
                            <th width="27">8</th>
                            <th width="27">9</th>
                            <th width="27">10</th>
                            <th width="27">11</th>
                            <th width="27">12</th>
                            <th width="27">13</th>
                            <th width="27">14</th>
                            <th width="27">15</th>
                            <th width="27">16</th>
                            <th width="27">17</th>
                            <th width="27">18</th>
                            <th width="27">19</th>
                            <th width="27">20</th>
                            <th width="27">21</th>
                            <th width="27">22</th>
                            <th width="27">23</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="20">0.0.0.0</td>
                            <td><img src="http://10.8.0.18/matagaruda/assets/maps/flags/us.png" title="US" width="18"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>125</td>
                            <td>244</td>
                            <td>358</td>
                            <td>596</td>
                            <td>570</td>
                            <td>524</td>
                            <td>38</td>
                            <td>2</td>
                            <td>2</td>
                            <td>9</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>2</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>2471</td>
                            <td width="20" align="center">
                                <button onclick="setData('0.0.0.0')" class="btn btn-default" style="padding: 4px 0px 4px 8px;text-align: center;margin: 0px;" type="submit"> <i class="fa fa-binoculars"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td width="20">10.252.108.9</td>
                            <td><img src="http://10.8.0.18/matagaruda/assets/maps/flags/.png" title="" width="18"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>8</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>8</td>
                            <td width="20" align="center">
                                <button onclick="setData('10.252.108.9')" class="btn btn-default" style="padding: 4px 0px 4px 8px;text-align: center;margin: 0px;" type="submit"> <i class="fa fa-binoculars"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td width="20">10.252.108.175</td>
                            <td><img src="http://10.8.0.18/matagaruda/assets/maps/flags/.png" title="" width="18"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>2</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>2</td>
                            <td width="20" align="center">
                                <button onclick="setData('10.252.108.175')" class="btn btn-default" style="padding: 4px 0px 4px 8px;text-align: center;margin: 0px;" type="submit"> <i class="fa fa-binoculars"></i></button>
                            </td>
                        </tr>
                        <tr align="center">
                            <td colspan="2">Total</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>125</td>
                            <td>244</td>
                            <td>360</td>
                            <td>596</td>
                            <td>578</td>
                            <td>524</td>
                            <td>38</td>
                            <td>2</td>
                            <td>2</td>
                            <td>9</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td align="center">2481</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <hr>

        <div id="sipdetail" style="min-width: 310px; height: 400px; max-width: 100%; margin: 0 auto" data-highcharts-chart="4">
            <div class="highcharts-container" id="highcharts-10" style="position: relative; overflow: hidden; width: 1092px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Dosis, sans-serif;">
                <svg version="1.1" style="font-family:Dosis, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="1092" height="400">
                    <desc>Created with Highcharts 4.0.4</desc>
                    <defs>
                        <clipPath id="highcharts-11">
                            <rect x="0" y="0" width="842" height="317"></rect>
                        </clipPath>
                    </defs>
                    <g class="highcharts-grid" zIndex="1">
                        <path fill="none" d="M 149.5 45 L 149.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 184.5 45 L 184.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 219.5 45 L 219.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 254.5 45 L 254.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 290.5 45 L 290.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 325.5 45 L 325.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 360.5 45 L 360.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 395.5 45 L 395.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 430.5 45 L 430.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 465.5 45 L 465.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 500.5 45 L 500.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 535.5 45 L 535.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 570.5 45 L 570.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 605.5 45 L 605.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 640.5 45 L 640.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 675.5 45 L 675.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 711.5 45 L 711.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 746.5 45 L 746.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 781.5 45 L 781.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 816.5 45 L 816.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 851.5 45 L 851.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 886.5 45 L 886.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 922.5 45 L 922.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 114.5 45 L 114.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 79.5 45 L 79.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                    </g>
                    <g class="highcharts-grid" zIndex="1">
                        <path fill="none" d="M 80 362.5 L 922 362.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 353.5 L 922 353.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 344.5 L 922 344.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 335.5 L 922 335.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 326.5 L 922 326.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 317.5 L 922 317.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 308.5 L 922 308.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 299.5 L 922 299.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 290.5 L 922 290.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 280.5 L 922 280.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 271.5 L 922 271.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 262.5 L 922 262.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 253.5 L 922 253.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 244.5 L 922 244.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 235.5 L 922 235.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 226.5 L 922 226.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 217.5 L 922 217.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 208.5 L 922 208.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 199.5 L 922 199.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 190.5 L 922 190.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 181.5 L 922 181.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 172.5 L 922 172.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 163.5 L 922 163.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 154.5 L 922 154.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 145.5 L 922 145.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 136.5 L 922 136.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 127.5 L 922 127.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 117.5 L 922 117.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 108.5 L 922 108.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 99.5 L 922 99.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 90.5 L 922 90.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 81.5 L 922 81.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 72.5 L 922 72.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 63.5 L 922 63.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 54.5 L 922 54.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 44.5 L 922 44.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 44.5 L 922 44.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 80 90.5 L 922 90.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 80 136.5 L 922 136.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 80 181.5 L 922 181.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 80 226.5 L 922 226.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 80 271.5 L 922 271.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 80 317.5 L 922 317.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 80 362.5 L 922 362.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                    </g>
                    <g class="highcharts-axis" zIndex="2">
                        <path fill="none" d="M 149.5 362 L 149.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 184.5 362 L 184.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 219.5 362 L 219.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 254.5 362 L 254.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 290.5 362 L 290.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 325.5 362 L 325.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 360.5 362 L 360.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 395.5 362 L 395.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 430.5 362 L 430.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 465.5 362 L 465.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 500.5 362 L 500.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 535.5 362 L 535.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 570.5 362 L 570.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 605.5 362 L 605.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 640.5 362 L 640.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 675.5 362 L 675.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 711.5 362 L 711.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 746.5 362 L 746.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 781.5 362 L 781.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 816.5 362 L 816.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 851.5 362 L 851.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 886.5 362 L 886.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 922.5 362 L 922.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 114.5 362 L 114.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 79.5 362 L 79.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 362.5 L 922 362.5" stroke="#C0D0E0" stroke-width="1" zIndex="7" visibility="visible"></path>
                    </g>
                    <g class="highcharts-axis" zIndex="2">
                        <text x="38.4375" zIndex="7" text-anchor="middle" transform="translate(0,0) rotate(270 38.4375 203.5)" class=" highcharts-yaxis-title" style="color:#707070;text-transform:uppercase;fill:#707070;" visibility="visible" y="203.5">Value</text>
                    </g>
                    <g class="highcharts-series-group" zIndex="3">
                        <g class="highcharts-series" visibility="visible" zIndex="0.1" transform="translate(80,45) scale(1 1)" clip-path="url(#highcharts-11)">
                            <path fill="rgba(51,102,204,0)" d="M 17.541666666666668 317 L 52.625 317 L 87.70833333333334 317 L 122.79166666666667 317 L 157.875 317 L 192.95833333333334 317 L 228.04166666666666 260.39285714285717 L 263.125 206.50285714285715 L 298.20833333333337 154.87714285714287 L 333.2916666666667 47.09714285714284 L 368.37500000000006 58.87142857142857 L 403.45833333333337 79.70285714285714 L 438.5416666666667 299.7914285714286 L 473.62500000000006 316.0942857142857 L 508.70833333333337 316.0942857142857 L 543.7916666666666 312.9242857142857 L 578.875 317 L 613.9583333333334 317 L 649.0416666666666 317 L 684.125 316.0942857142857 L 719.2083333333334 317 L 754.2916666666666 317 L 789.375 317 L 824.4583333333334 317 L 824.4583333333334 317 L 17.541666666666668 317" zIndex="0"></path>
                            <path fill="none" d="M 17.541666666666668 317 L 52.625 317 L 87.70833333333334 317 L 122.79166666666667 317 L 157.875 317 L 192.95833333333334 317 L 228.04166666666666 260.39285714285717 L 263.125 206.50285714285715 L 298.20833333333337 154.87714285714287 L 333.2916666666667 47.09714285714284 L 368.37500000000006 58.87142857142857 L 403.45833333333337 79.70285714285714 L 438.5416666666667 299.7914285714286 L 473.62500000000006 316.0942857142857 L 508.70833333333337 316.0942857142857 L 543.7916666666666 312.9242857142857 L 578.875 317 L 613.9583333333334 317 L 649.0416666666666 317 L 684.125 316.0942857142857 L 719.2083333333334 317 L 754.2916666666666 317 L 789.375 317 L 824.4583333333334 317" stroke="#3366cc" stroke-width="1" zIndex="1" stroke-linejoin="round" stroke-linecap="round"></path>
                            <path fill="none" d="M 7.541666666666668 317 L 17.541666666666668 317 L 52.625 317 L 87.70833333333334 317 L 122.79166666666667 317 L 157.875 317 L 192.95833333333334 317 L 228.04166666666666 260.39285714285717 L 263.125 206.50285714285715 L 298.20833333333337 154.87714285714287 L 333.2916666666667 47.09714285714284 L 368.37500000000006 58.87142857142857 L 403.45833333333337 79.70285714285714 L 438.5416666666667 299.7914285714286 L 473.62500000000006 316.0942857142857 L 508.70833333333337 316.0942857142857 L 543.7916666666666 312.9242857142857 L 578.875 317 L 613.9583333333334 317 L 649.0416666666666 317 L 684.125 316.0942857142857 L 719.2083333333334 317 L 754.2916666666666 317 L 789.375 317 L 824.4583333333334 317 L 834.4583333333334 317" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="21" zIndex="2" class=" highcharts-tracker" style=""></path>
                        </g>
                        <g class="highcharts-markers highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(80,45) scale(1 1)" style="" clip-path="none">
                            <path fill="#3366cc" d="M 824 316 C 825.332 316 825.332 318 824 318 C 822.668 318 822.668 316 824 316 Z"></path>
                            <path fill="#3366cc" d="M 789 316 C 790.332 316 790.332 318 789 318 C 787.668 318 787.668 316 789 316 Z"></path>
                            <path fill="#3366cc" d="M 754 316 C 755.332 316 755.332 318 754 318 C 752.668 318 752.668 316 754 316 Z"></path>
                            <path fill="#3366cc" d="M 719 316 C 720.332 316 720.332 318 719 318 C 717.668 318 717.668 316 719 316 Z"></path>
                            <path fill="#3366cc" d="M 684 315.0942857142857 C 685.332 315.0942857142857 685.332 317.0942857142857 684 317.0942857142857 C 682.668 317.0942857142857 682.668 315.0942857142857 684 315.0942857142857 Z"></path>
                            <path fill="#3366cc" d="M 649 316 C 650.332 316 650.332 318 649 318 C 647.668 318 647.668 316 649 316 Z"></path>
                            <path fill="#3366cc" d="M 613 316 C 614.332 316 614.332 318 613 318 C 611.668 318 611.668 316 613 316 Z"></path>
                            <path fill="#3366cc" d="M 578 316 C 579.332 316 579.332 318 578 318 C 576.668 318 576.668 316 578 316 Z"></path>
                            <path fill="#3366cc" d="M 543 311.9242857142857 C 544.332 311.9242857142857 544.332 313.9242857142857 543 313.9242857142857 C 541.668 313.9242857142857 541.668 311.9242857142857 543 311.9242857142857 Z"></path>
                            <path fill="#3366cc" d="M 508 315.0942857142857 C 509.332 315.0942857142857 509.332 317.0942857142857 508 317.0942857142857 C 506.668 317.0942857142857 506.668 315.0942857142857 508 315.0942857142857 Z"></path>
                            <path fill="#3366cc" d="M 473 315.0942857142857 C 474.332 315.0942857142857 474.332 317.0942857142857 473 317.0942857142857 C 471.668 317.0942857142857 471.668 315.0942857142857 473 315.0942857142857 Z"></path>
                            <path fill="#3366cc" d="M 438 298.7914285714286 C 439.332 298.7914285714286 439.332 300.7914285714286 438 300.7914285714286 C 436.668 300.7914285714286 436.668 298.7914285714286 438 298.7914285714286 Z"></path>
                            <path fill="#3366cc" d="M 403 78.70285714285714 C 404.332 78.70285714285714 404.332 80.70285714285714 403 80.70285714285714 C 401.668 80.70285714285714 401.668 78.70285714285714 403 78.70285714285714 Z"></path>
                            <path fill="#3366cc" d="M 368 57.87142857142857 C 369.332 57.87142857142857 369.332 59.87142857142857 368 59.87142857142857 C 366.668 59.87142857142857 366.668 57.87142857142857 368 57.87142857142857 Z"></path>
                            <path fill="#3366cc" d="M 333 46.09714285714284 C 334.332 46.09714285714284 334.332 48.09714285714284 333 48.09714285714284 C 331.668 48.09714285714284 331.668 46.09714285714284 333 46.09714285714284 Z"></path>
                            <path fill="#3366cc" d="M 298 153.87714285714287 C 299.332 153.87714285714287 299.332 155.87714285714287 298 155.87714285714287 C 296.668 155.87714285714287 296.668 153.87714285714287 298 153.87714285714287 Z"></path>
                            <path fill="#3366cc" d="M 263 205.50285714285715 C 264.332 205.50285714285715 264.332 207.50285714285715 263 207.50285714285715 C 261.668 207.50285714285715 261.668 205.50285714285715 263 205.50285714285715 Z"></path>
                            <path fill="#3366cc" d="M 228 259.39285714285717 C 229.332 259.39285714285717 229.332 261.39285714285717 228 261.39285714285717 C 226.668 261.39285714285717 226.668 259.39285714285717 228 259.39285714285717 Z"></path>
                            <path fill="#3366cc" d="M 192 316 C 193.332 316 193.332 318 192 318 C 190.668 318 190.668 316 192 316 Z"></path>
                            <path fill="#3366cc" d="M 157 316 C 158.332 316 158.332 318 157 318 C 155.668 318 155.668 316 157 316 Z"></path>
                            <path fill="#3366cc" d="M 122 316 C 123.332 316 123.332 318 122 318 C 120.668 318 120.668 316 122 316 Z"></path>
                            <path fill="#3366cc" d="M 87 316 C 88.332 316 88.332 318 87 318 C 85.668 318 85.668 316 87 316 Z"></path>
                            <path fill="#3366cc" d="M 52 316 C 53.332 316 53.332 318 52 318 C 50.668 318 50.668 316 52 316 Z"></path>
                            <path fill="#3366cc" d="M 17 316 C 18.332 316 18.332 318 17 318 C 15.668 318 15.668 316 17 316 Z"></path>
                        </g>
                        <g class="highcharts-series" visibility="visible" zIndex="0.1" transform="translate(80,45) scale(1 1)" clip-path="url(#highcharts-11)">
                            <path fill="rgba(220,57,18,0)" d="M 17.541666666666668 317 L 52.625 317 L 87.70833333333334 317 L 122.79166666666667 317 L 157.875 317 L 192.95833333333334 317 L 228.04166666666666 317 L 263.125 317 L 298.20833333333337 317 L 333.2916666666667 317 L 368.37500000000006 313.37714285714287 L 403.45833333333337 317 L 438.5416666666667 317 L 473.62500000000006 317 L 508.70833333333337 317 L 543.7916666666666 317 L 578.875 317 L 613.9583333333334 317 L 649.0416666666666 317 L 684.125 317 L 719.2083333333334 317 L 754.2916666666666 317 L 789.375 317 L 824.4583333333334 317 L 824.4583333333334 317 L 17.541666666666668 317" zIndex="0"></path>
                            <path fill="none" d="M 17.541666666666668 317 L 52.625 317 L 87.70833333333334 317 L 122.79166666666667 317 L 157.875 317 L 192.95833333333334 317 L 228.04166666666666 317 L 263.125 317 L 298.20833333333337 317 L 333.2916666666667 317 L 368.37500000000006 313.37714285714287 L 403.45833333333337 317 L 438.5416666666667 317 L 473.62500000000006 317 L 508.70833333333337 317 L 543.7916666666666 317 L 578.875 317 L 613.9583333333334 317 L 649.0416666666666 317 L 684.125 317 L 719.2083333333334 317 L 754.2916666666666 317 L 789.375 317 L 824.4583333333334 317" stroke="#dc3912" stroke-width="1" zIndex="1" stroke-linejoin="round" stroke-linecap="round"></path>
                            <path fill="none" d="M 7.541666666666668 317 L 17.541666666666668 317 L 52.625 317 L 87.70833333333334 317 L 122.79166666666667 317 L 157.875 317 L 192.95833333333334 317 L 228.04166666666666 317 L 263.125 317 L 298.20833333333337 317 L 333.2916666666667 317 L 368.37500000000006 313.37714285714287 L 403.45833333333337 317 L 438.5416666666667 317 L 473.62500000000006 317 L 508.70833333333337 317 L 543.7916666666666 317 L 578.875 317 L 613.9583333333334 317 L 649.0416666666666 317 L 684.125 317 L 719.2083333333334 317 L 754.2916666666666 317 L 789.375 317 L 824.4583333333334 317 L 834.4583333333334 317" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="21" zIndex="2" class=" highcharts-tracker" style=""></path>
                        </g>
                        <g class="highcharts-markers highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(80,45) scale(1 1)" style="" clip-path="none">
                            <path fill="#dc3912" d="M 824 316 L 825 317 824 318 823 317 Z"></path>
                            <path fill="#dc3912" d="M 789 316 L 790 317 789 318 788 317 Z"></path>
                            <path fill="#dc3912" d="M 754 316 L 755 317 754 318 753 317 Z"></path>
                            <path fill="#dc3912" d="M 719 316 L 720 317 719 318 718 317 Z"></path>
                            <path fill="#dc3912" d="M 684 316 L 685 317 684 318 683 317 Z"></path>
                            <path fill="#dc3912" d="M 649 316 L 650 317 649 318 648 317 Z"></path>
                            <path fill="#dc3912" d="M 613 316 L 614 317 613 318 612 317 Z"></path>
                            <path fill="#dc3912" d="M 578 316 L 579 317 578 318 577 317 Z"></path>
                            <path fill="#dc3912" d="M 543 316 L 544 317 543 318 542 317 Z"></path>
                            <path fill="#dc3912" d="M 508 316 L 509 317 508 318 507 317 Z"></path>
                            <path fill="#dc3912" d="M 473 316 L 474 317 473 318 472 317 Z"></path>
                            <path fill="#dc3912" d="M 438 316 L 439 317 438 318 437 317 Z"></path>
                            <path fill="#dc3912" d="M 403 316 L 404 317 403 318 402 317 Z"></path>
                            <path fill="#dc3912" d="M 368 312.37714285714287 L 369 313.37714285714287 368 314.37714285714287 367 313.37714285714287 Z"></path>
                            <path fill="#dc3912" d="M 333 316 L 334 317 333 318 332 317 Z"></path>
                            <path fill="#dc3912" d="M 298 316 L 299 317 298 318 297 317 Z"></path>
                            <path fill="#dc3912" d="M 263 316 L 264 317 263 318 262 317 Z"></path>
                            <path fill="#dc3912" d="M 228 316 L 229 317 228 318 227 317 Z"></path>
                            <path fill="#dc3912" d="M 192 316 L 193 317 192 318 191 317 Z"></path>
                            <path fill="#dc3912" d="M 157 316 L 158 317 157 318 156 317 Z"></path>
                            <path fill="#dc3912" d="M 122 316 L 123 317 122 318 121 317 Z"></path>
                            <path fill="#dc3912" d="M 87 316 L 88 317 87 318 86 317 Z"></path>
                            <path fill="#dc3912" d="M 52 316 L 53 317 52 318 51 317 Z"></path>
                            <path fill="#dc3912" d="M 17 316 L 18 317 17 318 16 317 Z"></path>
                        </g>
                        <g class="highcharts-series" visibility="visible" zIndex="0.1" transform="translate(80,45) scale(1 1)" clip-path="url(#highcharts-11)">
                            <path fill="rgba(255,153,0,0)" d="M 17.541666666666668 317 L 52.625 317 L 87.70833333333334 317 L 122.79166666666667 317 L 157.875 317 L 192.95833333333334 317 L 228.04166666666666 317 L 263.125 317 L 298.20833333333337 316.0942857142857 L 333.2916666666667 317 L 368.37500000000006 317 L 403.45833333333337 317 L 438.5416666666667 317 L 473.62500000000006 317 L 508.70833333333337 317 L 543.7916666666666 317 L 578.875 317 L 613.9583333333334 317 L 649.0416666666666 317 L 684.125 317 L 719.2083333333334 317 L 754.2916666666666 317 L 789.375 317 L 824.4583333333334 317 L 824.4583333333334 317 L 17.541666666666668 317" zIndex="0"></path>
                            <path fill="none" d="M 17.541666666666668 317 L 52.625 317 L 87.70833333333334 317 L 122.79166666666667 317 L 157.875 317 L 192.95833333333334 317 L 228.04166666666666 317 L 263.125 317 L 298.20833333333337 316.0942857142857 L 333.2916666666667 317 L 368.37500000000006 317 L 403.45833333333337 317 L 438.5416666666667 317 L 473.62500000000006 317 L 508.70833333333337 317 L 543.7916666666666 317 L 578.875 317 L 613.9583333333334 317 L 649.0416666666666 317 L 684.125 317 L 719.2083333333334 317 L 754.2916666666666 317 L 789.375 317 L 824.4583333333334 317" stroke="#ff9900" stroke-width="1" zIndex="1" stroke-linejoin="round" stroke-linecap="round"></path>
                            <path fill="none" d="M 7.541666666666668 317 L 17.541666666666668 317 L 52.625 317 L 87.70833333333334 317 L 122.79166666666667 317 L 157.875 317 L 192.95833333333334 317 L 228.04166666666666 317 L 263.125 317 L 298.20833333333337 316.0942857142857 L 333.2916666666667 317 L 368.37500000000006 317 L 403.45833333333337 317 L 438.5416666666667 317 L 473.62500000000006 317 L 508.70833333333337 317 L 543.7916666666666 317 L 578.875 317 L 613.9583333333334 317 L 649.0416666666666 317 L 684.125 317 L 719.2083333333334 317 L 754.2916666666666 317 L 789.375 317 L 824.4583333333334 317 L 834.4583333333334 317" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="21" zIndex="2" class=" highcharts-tracker" style=""></path>
                        </g>
                        <g class="highcharts-markers highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(80,45) scale(1 1)" style="" clip-path="none">
                            <path fill="#ff9900" d="M 823 316 L 825 316 825 318 823 318 Z"></path>
                            <path fill="#ff9900" d="M 788 316 L 790 316 790 318 788 318 Z"></path>
                            <path fill="#ff9900" d="M 753 316 L 755 316 755 318 753 318 Z"></path>
                            <path fill="#ff9900" d="M 718 316 L 720 316 720 318 718 318 Z"></path>
                            <path fill="#ff9900" d="M 683 316 L 685 316 685 318 683 318 Z"></path>
                            <path fill="#ff9900" d="M 648 316 L 650 316 650 318 648 318 Z"></path>
                            <path fill="#ff9900" d="M 612 316 L 614 316 614 318 612 318 Z"></path>
                            <path fill="#ff9900" d="M 577 316 L 579 316 579 318 577 318 Z"></path>
                            <path fill="#ff9900" d="M 542 316 L 544 316 544 318 542 318 Z"></path>
                            <path fill="#ff9900" d="M 507 316 L 509 316 509 318 507 318 Z"></path>
                            <path fill="#ff9900" d="M 472 316 L 474 316 474 318 472 318 Z"></path>
                            <path fill="#ff9900" d="M 437 316 L 439 316 439 318 437 318 Z"></path>
                            <path fill="#ff9900" d="M 402 316 L 404 316 404 318 402 318 Z"></path>
                            <path fill="#ff9900" d="M 367 316 L 369 316 369 318 367 318 Z"></path>
                            <path fill="#ff9900" d="M 332 316 L 334 316 334 318 332 318 Z"></path>
                            <path fill="#ff9900" d="M 297 315.0942857142857 L 299 315.0942857142857 299 317.0942857142857 297 317.0942857142857 Z"></path>
                            <path fill="#ff9900" d="M 262 316 L 264 316 264 318 262 318 Z"></path>
                            <path fill="#ff9900" d="M 227 316 L 229 316 229 318 227 318 Z"></path>
                            <path fill="#ff9900" d="M 191 316 L 193 316 193 318 191 318 Z"></path>
                            <path fill="#ff9900" d="M 156 316 L 158 316 158 318 156 318 Z"></path>
                            <path fill="#ff9900" d="M 121 316 L 123 316 123 318 121 318 Z"></path>
                            <path fill="#ff9900" d="M 86 316 L 88 316 88 318 86 318 Z"></path>
                            <path fill="#ff9900" d="M 51 316 L 53 316 53 318 51 318 Z"></path>
                            <path fill="#ff9900" d="M 16 316 L 18 316 18 318 16 318 Z"></path>
                        </g>
                    </g>
                    <text x="546" text-anchor="middle" class="highcharts-title" zIndex="4" style="color:#333333;font-size:16px;font-weight:bold;text-transform:uppercase;fill:#333333;width:1028px;" y="23">
                        <tspan>DAILY SCAN COUNT (DETAIL SOURCE ATTACK)</tspan>
                    </text>
                    <g class="highcharts-legend" zIndex="7" transform="translate(953,60)">
                        <rect x="0.5" y="0.5" width="107" height="88" strokeWidth="1" stroke="#909090" stroke-width="1" fill="#FFFFFF" visibility="visible"></rect>
                        <g zIndex="1">
                            <g>
                                <g class="highcharts-legend-item" zIndex="1" transform="translate(8,3)">
                                    <text x="21" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2" y="16">0.0.0.0</text>
                                    <rect x="0" y="5" width="16" height="12" zIndex="3" fill="#3366cc"></rect>
                                </g>
                                <g class="highcharts-legend-item" zIndex="1" transform="translate(8,29)">
                                    <text x="21" y="16" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">10.252.108.9</text>
                                    <rect x="0" y="5" width="16" height="12" zIndex="3" fill="#dc3912"></rect>
                                </g>
                                <g class="highcharts-legend-item" zIndex="1" transform="translate(8,55)">
                                    <text x="21" y="16" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">10.252.108.175</text>
                                    <rect x="0" y="5" width="16" height="12" zIndex="3" fill="#ff9900"></rect>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g class="highcharts-axis-labels highcharts-xaxis-labels" zIndex="7">
                        <text x="97.54166666666667" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">0</text>
                        <text x="132.62500000000003" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">1</text>
                        <text x="167.70833333333334" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">2</text>
                        <text x="202.79166666666669" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">3</text>
                        <text x="237.875" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">4</text>
                        <text x="272.9583333333333" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">5</text>
                        <text x="308.0416666666667" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">6</text>
                        <text x="343.125" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">7</text>
                        <text x="378.20833333333337" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">8</text>
                        <text x="413.2916666666667" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">9</text>
                        <text x="448.375" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">10</text>
                        <text x="483.45833333333337" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">11</text>
                        <text x="518.5416666666667" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">12</text>
                        <text x="553.6250000000001" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">13</text>
                        <text x="588.7083333333334" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">14</text>
                        <text x="623.7916666666667" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">15</text>
                        <text x="658.875" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">16</text>
                        <text x="693.9583333333334" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">17</text>
                        <text x="729.0416666666667" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">18</text>
                        <text x="764.125" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">19</text>
                        <text x="799.2083333333334" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">20</text>
                        <text x="834.2916666666667" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">21</text>
                        <text x="869.375" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">22</text>
                        <text x="904.4583333333334" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">23</text>
                    </g>
                    <g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7">
                        <text x="65" text-anchor="end" style="width:60px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="367.5" opacity="1">0</text>
                        <text x="65" text-anchor="end" style="width:60px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="322.2142857142857" opacity="1">100</text>
                        <text x="65" text-anchor="end" style="width:60px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="276.92857142857144" opacity="1">200</text>
                        <text x="65" text-anchor="end" style="width:60px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="231.6428571428571" opacity="1">300</text>
                        <text x="65" text-anchor="end" style="width:60px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="186.35714285714286" opacity="1">400</text>
                        <text x="65" text-anchor="end" style="width:60px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="141.07142857142858" opacity="1">500</text>
                        <text x="65" text-anchor="end" style="width:60px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="95.78571428571428" opacity="1">600</text>
                        <text x="65" text-anchor="end" style="width:60px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="50.5" opacity="1">700</text>
                    </g>
                    <g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;" transform="translate(0,-9999)">
                        <path fill="rgba(219,219,216,0.8)" d="M 3 0 L 13 0 C 16 0 16 0 16 3 L 16 13 C 16 16 16 16 13 16 L 3 16 C 0 16 0 16 0 13 L 0 3 C 0 0 0 0 3 0"></path>
                        <text x="8" zIndex="1" style="font-size:12px;color:#333333;fill:#333333;" y="21"></text>
                    </g>
                    <text x="1082" text-anchor="end" zIndex="8" style="cursor:pointer;color:#909090;font-size:9px;fill:#909090;" y="395"></text>
                </svg>
            </div>
        </div>
        <br>

        <div class="panel-heading" style="margin-top: -20px;border-top: 1px solid #EDF1F2;">
            <i class="fa fa-area-chart"></i>
            <b>Detail IP Destination</b>
        </div>

        <div class="row wrapper" style="margin-bottom: 15px;">
            <div class="col-sm-12">
                <table width="100%" class="sourcedetail" style="font-size: 11px;border: solid 1px #ebebeb;">
                    <thead>
                        <tr>
                            <th rowspan="2">Series</th>
                            <th rowspan="2" width="20">From</th>
                            <th colspan="24">Hour</th>
                            <th rowspan="2" width="20">Total</th>
                            <th rowspan="2">Action</th>
                        </tr>
                        <tr>
                            <th width="27">0</th>
                            <th width="27">1</th>
                            <th width="27">2</th>
                            <th width="27">3</th>
                            <th width="27">4</th>
                            <th width="27">5</th>
                            <th width="27">6</th>
                            <th width="27">7</th>
                            <th width="27">8</th>
                            <th width="27">9</th>
                            <th width="27">10</th>
                            <th width="27">11</th>
                            <th width="27">12</th>
                            <th width="27">13</th>
                            <th width="27">14</th>
                            <th width="27">15</th>
                            <th width="27">16</th>
                            <th width="27">17</th>
                            <th width="27">18</th>
                            <th width="27">19</th>
                            <th width="27">20</th>
                            <th width="27">21</th>
                            <th width="27">22</th>
                            <th width="27">23</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="20">255.255.255.255</td>
                            <td><img src="http://10.8.0.18/matagaruda/assets/maps/flags/us.png" title="US" width="18"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>125</td>
                            <td>244</td>
                            <td>356</td>
                            <td>596</td>
                            <td>570</td>
                            <td>522</td>
                            <td>36</td>
                            <td>2</td>
                            <td>2</td>
                            <td>9</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>2</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>2465</td>
                            <td width="20" align="center">
                                <button onclick="setDataDip('255.255.255.255')" class="btn btn-default" style="padding: 4px 0px 4px 8px;text-align: center;margin: 0px;" type="submit"> <i class="fa fa-binoculars"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td width="20">10.252.108.17</td>
                            <td><img src="http://10.8.0.18/matagaruda/assets/maps/flags/us.png" title="US" width="18"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>2</td>
                            <td></td>
                            <td>8</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>10</td>
                            <td width="20" align="center">
                                <button onclick="setDataDip('10.252.108.17')" class="btn btn-default" style="padding: 4px 0px 4px 8px;text-align: center;margin: 0px;" type="submit"> <i class="fa fa-binoculars"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td width="20">224.0.0.22</td>
                            <td><img src="http://10.8.0.18/matagaruda/assets/maps/flags/.png" title="" width="18"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>2</td>
                            <td></td>
                            <td></td>
                            <td>2</td>
                            <td>2</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>6</td>
                            <td width="20" align="center">
                                <button onclick="setDataDip('224.0.0.22')" class="btn btn-default" style="padding: 4px 0px 4px 8px;text-align: center;margin: 0px;" type="submit"> <i class="fa fa-binoculars"></i></button>
                            </td>
                        </tr>
                        <tr align="center">
                            <td colspan="2">Total</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>125</td>
                            <td>244</td>
                            <td>360</td>
                            <td>596</td>
                            <td>578</td>
                            <td>524</td>
                            <td>38</td>
                            <td>2</td>
                            <td>2</td>
                            <td>9</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td align="center">2481</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <br>

        <div id="dipdetail" style="min-width: 310px; height: 400px; max-width: 100%; margin: 0 auto" data-highcharts-chart="5">
            <div class="highcharts-container" id="highcharts-12" style="position: relative; overflow: hidden; width: 1092px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Dosis, sans-serif;">
                <svg version="1.1" style="font-family:Dosis, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="1092" height="400">
                    <desc>Created with Highcharts 4.0.4</desc>
                    <defs>
                        <clipPath id="highcharts-13">
                            <rect x="0" y="0" width="842" height="317"></rect>
                        </clipPath>
                    </defs>
                    <g class="highcharts-grid" zIndex="1">
                        <path fill="none" d="M 149.5 45 L 149.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 184.5 45 L 184.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 219.5 45 L 219.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 254.5 45 L 254.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 290.5 45 L 290.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 325.5 45 L 325.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 360.5 45 L 360.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 395.5 45 L 395.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 430.5 45 L 430.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 465.5 45 L 465.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 500.5 45 L 500.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 535.5 45 L 535.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 570.5 45 L 570.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 605.5 45 L 605.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 640.5 45 L 640.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 675.5 45 L 675.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 711.5 45 L 711.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 746.5 45 L 746.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 781.5 45 L 781.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 816.5 45 L 816.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 851.5 45 L 851.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 886.5 45 L 886.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 922.5 45 L 922.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 114.5 45 L 114.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 79.5 45 L 79.5 362" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                    </g>
                    <g class="highcharts-grid" zIndex="1">
                        <path fill="none" d="M 80 362.5 L 922 362.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 353.5 L 922 353.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 344.5 L 922 344.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 335.5 L 922 335.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 326.5 L 922 326.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 317.5 L 922 317.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 308.5 L 922 308.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 299.5 L 922 299.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 290.5 L 922 290.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 280.5 L 922 280.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 271.5 L 922 271.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 262.5 L 922 262.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 253.5 L 922 253.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 244.5 L 922 244.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 235.5 L 922 235.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 226.5 L 922 226.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 217.5 L 922 217.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 208.5 L 922 208.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 199.5 L 922 199.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 190.5 L 922 190.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 181.5 L 922 181.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 172.5 L 922 172.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 163.5 L 922 163.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 154.5 L 922 154.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 145.5 L 922 145.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 136.5 L 922 136.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 127.5 L 922 127.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 117.5 L 922 117.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 108.5 L 922 108.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 99.5 L 922 99.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 90.5 L 922 90.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 81.5 L 922 81.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 72.5 L 922 72.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 63.5 L 922 63.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 54.5 L 922 54.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 44.5 L 922 44.5" stroke="#E0E0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 44.5 L 922 44.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 80 90.5 L 922 90.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 80 136.5 L 922 136.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 80 181.5 L 922 181.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 80 226.5 L 922 226.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 80 271.5 L 922 271.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 80 317.5 L 922 317.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                        <path fill="none" d="M 80 362.5 L 922 362.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path>
                    </g>
                    <g class="highcharts-axis" zIndex="2">
                        <path fill="none" d="M 149.5 362 L 149.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 184.5 362 L 184.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 219.5 362 L 219.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 254.5 362 L 254.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 290.5 362 L 290.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 325.5 362 L 325.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 360.5 362 L 360.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 395.5 362 L 395.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 430.5 362 L 430.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 465.5 362 L 465.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 500.5 362 L 500.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 535.5 362 L 535.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 570.5 362 L 570.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 605.5 362 L 605.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 640.5 362 L 640.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 675.5 362 L 675.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 711.5 362 L 711.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 746.5 362 L 746.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 781.5 362 L 781.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 816.5 362 L 816.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 851.5 362 L 851.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 886.5 362 L 886.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 922.5 362 L 922.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 114.5 362 L 114.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 79.5 362 L 79.5 372" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                        <path fill="none" d="M 80 362.5 L 922 362.5" stroke="#C0D0E0" stroke-width="1" zIndex="7" visibility="visible"></path>
                    </g>
                    <g class="highcharts-axis" zIndex="2">
                        <text x="38.4375" zIndex="7" text-anchor="middle" transform="translate(0,0) rotate(270 38.4375 203.5)" class=" highcharts-yaxis-title" style="color:#707070;text-transform:uppercase;fill:#707070;" visibility="visible" y="203.5">Value</text>
                    </g>
                    <g class="highcharts-series-group" zIndex="3">
                        <g class="highcharts-series" visibility="visible" zIndex="0.1" transform="translate(80,45) scale(1 1)" clip-path="url(#highcharts-13)">
                            <path fill="rgba(51,102,204,0)" d="M 17.541666666666668 317 L 52.625 317 L 87.70833333333334 317 L 122.79166666666667 317 L 157.875 317 L 192.95833333333334 317 L 228.04166666666666 260.39285714285717 L 263.125 206.50285714285715 L 298.20833333333337 155.78285714285715 L 333.2916666666667 47.09714285714284 L 368.37500000000006 58.87142857142857 L 403.45833333333337 80.60857142857142 L 438.5416666666667 300.69714285714286 L 473.62500000000006 316.0942857142857 L 508.70833333333337 316.0942857142857 L 543.7916666666666 312.9242857142857 L 578.875 317 L 613.9583333333334 317 L 649.0416666666666 317 L 684.125 316.0942857142857 L 719.2083333333334 317 L 754.2916666666666 317 L 789.375 317 L 824.4583333333334 317 L 824.4583333333334 317 L 17.541666666666668 317" zIndex="0"></path>
                            <path fill="none" d="M 17.541666666666668 317 L 52.625 317 L 87.70833333333334 317 L 122.79166666666667 317 L 157.875 317 L 192.95833333333334 317 L 228.04166666666666 260.39285714285717 L 263.125 206.50285714285715 L 298.20833333333337 155.78285714285715 L 333.2916666666667 47.09714285714284 L 368.37500000000006 58.87142857142857 L 403.45833333333337 80.60857142857142 L 438.5416666666667 300.69714285714286 L 473.62500000000006 316.0942857142857 L 508.70833333333337 316.0942857142857 L 543.7916666666666 312.9242857142857 L 578.875 317 L 613.9583333333334 317 L 649.0416666666666 317 L 684.125 316.0942857142857 L 719.2083333333334 317 L 754.2916666666666 317 L 789.375 317 L 824.4583333333334 317" stroke="#3366cc" stroke-width="1" zIndex="1" stroke-linejoin="round" stroke-linecap="round"></path>
                            <path fill="none" d="M 7.541666666666668 317 L 17.541666666666668 317 L 52.625 317 L 87.70833333333334 317 L 122.79166666666667 317 L 157.875 317 L 192.95833333333334 317 L 228.04166666666666 260.39285714285717 L 263.125 206.50285714285715 L 298.20833333333337 155.78285714285715 L 333.2916666666667 47.09714285714284 L 368.37500000000006 58.87142857142857 L 403.45833333333337 80.60857142857142 L 438.5416666666667 300.69714285714286 L 473.62500000000006 316.0942857142857 L 508.70833333333337 316.0942857142857 L 543.7916666666666 312.9242857142857 L 578.875 317 L 613.9583333333334 317 L 649.0416666666666 317 L 684.125 316.0942857142857 L 719.2083333333334 317 L 754.2916666666666 317 L 789.375 317 L 824.4583333333334 317 L 834.4583333333334 317" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="21" zIndex="2" class=" highcharts-tracker" style=""></path>
                        </g>
                        <g class="highcharts-markers highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(80,45) scale(1 1)" style="" clip-path="none">
                            <path fill="#3366cc" d="M 824 316 C 825.332 316 825.332 318 824 318 C 822.668 318 822.668 316 824 316 Z"></path>
                            <path fill="#3366cc" d="M 789 316 C 790.332 316 790.332 318 789 318 C 787.668 318 787.668 316 789 316 Z"></path>
                            <path fill="#3366cc" d="M 754 316 C 755.332 316 755.332 318 754 318 C 752.668 318 752.668 316 754 316 Z"></path>
                            <path fill="#3366cc" d="M 719 316 C 720.332 316 720.332 318 719 318 C 717.668 318 717.668 316 719 316 Z"></path>
                            <path fill="#3366cc" d="M 684 315.0942857142857 C 685.332 315.0942857142857 685.332 317.0942857142857 684 317.0942857142857 C 682.668 317.0942857142857 682.668 315.0942857142857 684 315.0942857142857 Z"></path>
                            <path fill="#3366cc" d="M 649 316 C 650.332 316 650.332 318 649 318 C 647.668 318 647.668 316 649 316 Z"></path>
                            <path fill="#3366cc" d="M 613 316 C 614.332 316 614.332 318 613 318 C 611.668 318 611.668 316 613 316 Z"></path>
                            <path fill="#3366cc" d="M 578 316 C 579.332 316 579.332 318 578 318 C 576.668 318 576.668 316 578 316 Z"></path>
                            <path fill="#3366cc" d="M 543 311.9242857142857 C 544.332 311.9242857142857 544.332 313.9242857142857 543 313.9242857142857 C 541.668 313.9242857142857 541.668 311.9242857142857 543 311.9242857142857 Z"></path>
                            <path fill="#3366cc" d="M 508 315.0942857142857 C 509.332 315.0942857142857 509.332 317.0942857142857 508 317.0942857142857 C 506.668 317.0942857142857 506.668 315.0942857142857 508 315.0942857142857 Z"></path>
                            <path fill="#3366cc" d="M 473 315.0942857142857 C 474.332 315.0942857142857 474.332 317.0942857142857 473 317.0942857142857 C 471.668 317.0942857142857 471.668 315.0942857142857 473 315.0942857142857 Z"></path>
                            <path fill="#3366cc" d="M 438 299.69714285714286 C 439.332 299.69714285714286 439.332 301.69714285714286 438 301.69714285714286 C 436.668 301.69714285714286 436.668 299.69714285714286 438 299.69714285714286 Z"></path>
                            <path fill="#3366cc" d="M 403 79.60857142857142 C 404.332 79.60857142857142 404.332 81.60857142857142 403 81.60857142857142 C 401.668 81.60857142857142 401.668 79.60857142857142 403 79.60857142857142 Z"></path>
                            <path fill="#3366cc" d="M 368 57.87142857142857 C 369.332 57.87142857142857 369.332 59.87142857142857 368 59.87142857142857 C 366.668 59.87142857142857 366.668 57.87142857142857 368 57.87142857142857 Z"></path>
                            <path fill="#3366cc" d="M 333 46.09714285714284 C 334.332 46.09714285714284 334.332 48.09714285714284 333 48.09714285714284 C 331.668 48.09714285714284 331.668 46.09714285714284 333 46.09714285714284 Z"></path>
                            <path fill="#3366cc" d="M 298 154.78285714285715 C 299.332 154.78285714285715 299.332 156.78285714285715 298 156.78285714285715 C 296.668 156.78285714285715 296.668 154.78285714285715 298 154.78285714285715 Z"></path>
                            <path fill="#3366cc" d="M 263 205.50285714285715 C 264.332 205.50285714285715 264.332 207.50285714285715 263 207.50285714285715 C 261.668 207.50285714285715 261.668 205.50285714285715 263 205.50285714285715 Z"></path>
                            <path fill="#3366cc" d="M 228 259.39285714285717 C 229.332 259.39285714285717 229.332 261.39285714285717 228 261.39285714285717 C 226.668 261.39285714285717 226.668 259.39285714285717 228 259.39285714285717 Z"></path>
                            <path fill="#3366cc" d="M 192 316 C 193.332 316 193.332 318 192 318 C 190.668 318 190.668 316 192 316 Z"></path>
                            <path fill="#3366cc" d="M 157 316 C 158.332 316 158.332 318 157 318 C 155.668 318 155.668 316 157 316 Z"></path>
                            <path fill="#3366cc" d="M 122 316 C 123.332 316 123.332 318 122 318 C 120.668 318 120.668 316 122 316 Z"></path>
                            <path fill="#3366cc" d="M 87 316 C 88.332 316 88.332 318 87 318 C 85.668 318 85.668 316 87 316 Z"></path>
                            <path fill="#3366cc" d="M 52 316 C 53.332 316 53.332 318 52 318 C 50.668 318 50.668 316 52 316 Z"></path>
                            <path fill="#3366cc" d="M 17 316 C 18.332 316 18.332 318 17 318 C 15.668 318 15.668 316 17 316 Z"></path>
                        </g>
                        <g class="highcharts-series" visibility="visible" zIndex="0.1" transform="translate(80,45) scale(1 1)" clip-path="url(#highcharts-13)">
                            <path fill="rgba(220,57,18,0)" d="M 17.541666666666668 317 L 52.625 317 L 87.70833333333334 317 L 122.79166666666667 317 L 157.875 317 L 192.95833333333334 317 L 228.04166666666666 317 L 263.125 317 L 298.20833333333337 316.0942857142857 L 333.2916666666667 317 L 368.37500000000006 313.37714285714287 L 403.45833333333337 317 L 438.5416666666667 317 L 473.62500000000006 317 L 508.70833333333337 317 L 543.7916666666666 317 L 578.875 317 L 613.9583333333334 317 L 649.0416666666666 317 L 684.125 317 L 719.2083333333334 317 L 754.2916666666666 317 L 789.375 317 L 824.4583333333334 317 L 824.4583333333334 317 L 17.541666666666668 317" zIndex="0"></path>
                            <path fill="none" d="M 17.541666666666668 317 L 52.625 317 L 87.70833333333334 317 L 122.79166666666667 317 L 157.875 317 L 192.95833333333334 317 L 228.04166666666666 317 L 263.125 317 L 298.20833333333337 316.0942857142857 L 333.2916666666667 317 L 368.37500000000006 313.37714285714287 L 403.45833333333337 317 L 438.5416666666667 317 L 473.62500000000006 317 L 508.70833333333337 317 L 543.7916666666666 317 L 578.875 317 L 613.9583333333334 317 L 649.0416666666666 317 L 684.125 317 L 719.2083333333334 317 L 754.2916666666666 317 L 789.375 317 L 824.4583333333334 317" stroke="#dc3912" stroke-width="1" zIndex="1" stroke-linejoin="round" stroke-linecap="round"></path>
                            <path fill="none" d="M 7.541666666666668 317 L 17.541666666666668 317 L 52.625 317 L 87.70833333333334 317 L 122.79166666666667 317 L 157.875 317 L 192.95833333333334 317 L 228.04166666666666 317 L 263.125 317 L 298.20833333333337 316.0942857142857 L 333.2916666666667 317 L 368.37500000000006 313.37714285714287 L 403.45833333333337 317 L 438.5416666666667 317 L 473.62500000000006 317 L 508.70833333333337 317 L 543.7916666666666 317 L 578.875 317 L 613.9583333333334 317 L 649.0416666666666 317 L 684.125 317 L 719.2083333333334 317 L 754.2916666666666 317 L 789.375 317 L 824.4583333333334 317 L 834.4583333333334 317" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="21" zIndex="2" class=" highcharts-tracker" style=""></path>
                        </g>
                        <g class="highcharts-markers highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(80,45) scale(1 1)" style="" clip-path="none">
                            <path fill="#dc3912" d="M 824 316 L 825 317 824 318 823 317 Z"></path>
                            <path fill="#dc3912" d="M 789 316 L 790 317 789 318 788 317 Z"></path>
                            <path fill="#dc3912" d="M 754 316 L 755 317 754 318 753 317 Z"></path>
                            <path fill="#dc3912" d="M 719 316 L 720 317 719 318 718 317 Z"></path>
                            <path fill="#dc3912" d="M 684 316 L 685 317 684 318 683 317 Z"></path>
                            <path fill="#dc3912" d="M 649 316 L 650 317 649 318 648 317 Z"></path>
                            <path fill="#dc3912" d="M 613 316 L 614 317 613 318 612 317 Z"></path>
                            <path fill="#dc3912" d="M 578 316 L 579 317 578 318 577 317 Z"></path>
                            <path fill="#dc3912" d="M 543 316 L 544 317 543 318 542 317 Z"></path>
                            <path fill="#dc3912" d="M 508 316 L 509 317 508 318 507 317 Z"></path>
                            <path fill="#dc3912" d="M 473 316 L 474 317 473 318 472 317 Z"></path>
                            <path fill="#dc3912" d="M 438 316 L 439 317 438 318 437 317 Z"></path>
                            <path fill="#dc3912" d="M 403 316 L 404 317 403 318 402 317 Z"></path>
                            <path fill="#dc3912" d="M 368 312.37714285714287 L 369 313.37714285714287 368 314.37714285714287 367 313.37714285714287 Z"></path>
                            <path fill="#dc3912" d="M 333 316 L 334 317 333 318 332 317 Z"></path>
                            <path fill="#dc3912" d="M 298 315.0942857142857 L 299 316.0942857142857 298 317.0942857142857 297 316.0942857142857 Z"></path>
                            <path fill="#dc3912" d="M 263 316 L 264 317 263 318 262 317 Z"></path>
                            <path fill="#dc3912" d="M 228 316 L 229 317 228 318 227 317 Z"></path>
                            <path fill="#dc3912" d="M 192 316 L 193 317 192 318 191 317 Z"></path>
                            <path fill="#dc3912" d="M 157 316 L 158 317 157 318 156 317 Z"></path>
                            <path fill="#dc3912" d="M 122 316 L 123 317 122 318 121 317 Z"></path>
                            <path fill="#dc3912" d="M 87 316 L 88 317 87 318 86 317 Z"></path>
                            <path fill="#dc3912" d="M 52 316 L 53 317 52 318 51 317 Z"></path>
                            <path fill="#dc3912" d="M 17 316 L 18 317 17 318 16 317 Z"></path>
                        </g>
                        <g class="highcharts-series" visibility="visible" zIndex="0.1" transform="translate(80,45) scale(1 1)" clip-path="url(#highcharts-13)">
                            <path fill="rgba(255,153,0,0)" d="M 17.541666666666668 317 L 52.625 317 L 87.70833333333334 317 L 122.79166666666667 317 L 157.875 317 L 192.95833333333334 317 L 228.04166666666666 317 L 263.125 317 L 298.20833333333337 316.0942857142857 L 333.2916666666667 317 L 368.37500000000006 317 L 403.45833333333337 316.0942857142857 L 438.5416666666667 316.0942857142857 L 473.62500000000006 317 L 508.70833333333337 317 L 543.7916666666666 317 L 578.875 317 L 613.9583333333334 317 L 649.0416666666666 317 L 684.125 317 L 719.2083333333334 317 L 754.2916666666666 317 L 789.375 317 L 824.4583333333334 317 L 824.4583333333334 317 L 17.541666666666668 317" zIndex="0"></path>
                            <path fill="none" d="M 17.541666666666668 317 L 52.625 317 L 87.70833333333334 317 L 122.79166666666667 317 L 157.875 317 L 192.95833333333334 317 L 228.04166666666666 317 L 263.125 317 L 298.20833333333337 316.0942857142857 L 333.2916666666667 317 L 368.37500000000006 317 L 403.45833333333337 316.0942857142857 L 438.5416666666667 316.0942857142857 L 473.62500000000006 317 L 508.70833333333337 317 L 543.7916666666666 317 L 578.875 317 L 613.9583333333334 317 L 649.0416666666666 317 L 684.125 317 L 719.2083333333334 317 L 754.2916666666666 317 L 789.375 317 L 824.4583333333334 317" stroke="#ff9900" stroke-width="1" zIndex="1" stroke-linejoin="round" stroke-linecap="round"></path>
                            <path fill="none" d="M 7.541666666666668 317 L 17.541666666666668 317 L 52.625 317 L 87.70833333333334 317 L 122.79166666666667 317 L 157.875 317 L 192.95833333333334 317 L 228.04166666666666 317 L 263.125 317 L 298.20833333333337 316.0942857142857 L 333.2916666666667 317 L 368.37500000000006 317 L 403.45833333333337 316.0942857142857 L 438.5416666666667 316.0942857142857 L 473.62500000000006 317 L 508.70833333333337 317 L 543.7916666666666 317 L 578.875 317 L 613.9583333333334 317 L 649.0416666666666 317 L 684.125 317 L 719.2083333333334 317 L 754.2916666666666 317 L 789.375 317 L 824.4583333333334 317 L 834.4583333333334 317" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="21" zIndex="2" class=" highcharts-tracker" style=""></path>
                        </g>
                        <g class="highcharts-markers highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(80,45) scale(1 1)" style="" clip-path="none">
                            <path fill="#ff9900" d="M 823 316 L 825 316 825 318 823 318 Z"></path>
                            <path fill="#ff9900" d="M 788 316 L 790 316 790 318 788 318 Z"></path>
                            <path fill="#ff9900" d="M 753 316 L 755 316 755 318 753 318 Z"></path>
                            <path fill="#ff9900" d="M 718 316 L 720 316 720 318 718 318 Z"></path>
                            <path fill="#ff9900" d="M 683 316 L 685 316 685 318 683 318 Z"></path>
                            <path fill="#ff9900" d="M 648 316 L 650 316 650 318 648 318 Z"></path>
                            <path fill="#ff9900" d="M 612 316 L 614 316 614 318 612 318 Z"></path>
                            <path fill="#ff9900" d="M 577 316 L 579 316 579 318 577 318 Z"></path>
                            <path fill="#ff9900" d="M 542 316 L 544 316 544 318 542 318 Z"></path>
                            <path fill="#ff9900" d="M 507 316 L 509 316 509 318 507 318 Z"></path>
                            <path fill="#ff9900" d="M 472 316 L 474 316 474 318 472 318 Z"></path>
                            <path fill="#ff9900" d="M 437 315.0942857142857 L 439 315.0942857142857 439 317.0942857142857 437 317.0942857142857 Z"></path>
                            <path fill="#ff9900" d="M 402 315.0942857142857 L 404 315.0942857142857 404 317.0942857142857 402 317.0942857142857 Z"></path>
                            <path fill="#ff9900" d="M 367 316 L 369 316 369 318 367 318 Z"></path>
                            <path fill="#ff9900" d="M 332 316 L 334 316 334 318 332 318 Z"></path>
                            <path fill="#ff9900" d="M 297 315.0942857142857 L 299 315.0942857142857 299 317.0942857142857 297 317.0942857142857 Z"></path>
                            <path fill="#ff9900" d="M 262 316 L 264 316 264 318 262 318 Z"></path>
                            <path fill="#ff9900" d="M 227 316 L 229 316 229 318 227 318 Z"></path>
                            <path fill="#ff9900" d="M 191 316 L 193 316 193 318 191 318 Z"></path>
                            <path fill="#ff9900" d="M 156 316 L 158 316 158 318 156 318 Z"></path>
                            <path fill="#ff9900" d="M 121 316 L 123 316 123 318 121 318 Z"></path>
                            <path fill="#ff9900" d="M 86 316 L 88 316 88 318 86 318 Z"></path>
                            <path fill="#ff9900" d="M 51 316 L 53 316 53 318 51 318 Z"></path>
                            <path fill="#ff9900" d="M 16 316 L 18 316 18 318 16 318 Z"></path>
                        </g>
                    </g>
                    <text x="546" text-anchor="middle" class="highcharts-title" zIndex="4" style="color:#333333;font-size:16px;font-weight:bold;text-transform:uppercase;fill:#333333;width:1028px;" y="23">
                        <tspan>DAILY SCAN COUNT (DETAIL SOURCE ATTACK)</tspan>
                    </text>
                    <g class="highcharts-legend" zIndex="7" transform="translate(940,60)">
                        <rect x="0.5" y="0.5" width="121" height="88" strokeWidth="1" stroke="#909090" stroke-width="1" fill="#FFFFFF" visibility="visible"></rect>
                        <g zIndex="1">
                            <g>
                                <g class="highcharts-legend-item" zIndex="1" transform="translate(8,3)">
                                    <text x="21" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2" y="16">255.255.255.255</text>
                                    <rect x="0" y="5" width="16" height="12" zIndex="3" fill="#3366cc"></rect>
                                </g>
                                <g class="highcharts-legend-item" zIndex="1" transform="translate(8,29)">
                                    <text x="21" y="16" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">10.252.108.17</text>
                                    <rect x="0" y="5" width="16" height="12" zIndex="3" fill="#dc3912"></rect>
                                </g>
                                <g class="highcharts-legend-item" zIndex="1" transform="translate(8,55)">
                                    <text x="21" y="16" style="color:#333333;font-size:13px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">224.0.0.22</text>
                                    <rect x="0" y="5" width="16" height="12" zIndex="3" fill="#ff9900"></rect>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g class="highcharts-axis-labels highcharts-xaxis-labels" zIndex="7">
                        <text x="97.54166666666667" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">0</text>
                        <text x="132.62500000000003" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">1</text>
                        <text x="167.70833333333334" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">2</text>
                        <text x="202.79166666666669" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">3</text>
                        <text x="237.875" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">4</text>
                        <text x="272.9583333333333" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">5</text>
                        <text x="308.0416666666667" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">6</text>
                        <text x="343.125" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">7</text>
                        <text x="378.20833333333337" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">8</text>
                        <text x="413.2916666666667" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">9</text>
                        <text x="448.375" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">10</text>
                        <text x="483.45833333333337" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">11</text>
                        <text x="518.5416666666667" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">12</text>
                        <text x="553.6250000000001" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">13</text>
                        <text x="588.7083333333334" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">14</text>
                        <text x="623.7916666666667" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">15</text>
                        <text x="658.875" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">16</text>
                        <text x="693.9583333333334" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">17</text>
                        <text x="729.0416666666667" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">18</text>
                        <text x="764.125" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">19</text>
                        <text x="799.2083333333334" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">20</text>
                        <text x="834.2916666666667" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">21</text>
                        <text x="869.375" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">22</text>
                        <text x="904.4583333333334" text-anchor="middle" style="width:15px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="383" opacity="1">23</text>
                    </g>
                    <g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7">
                        <text x="65" text-anchor="end" style="width:60px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="367.5" opacity="1">0</text>
                        <text x="65" text-anchor="end" style="width:60px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="322.2142857142857" opacity="1">100</text>
                        <text x="65" text-anchor="end" style="width:60px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="276.92857142857144" opacity="1">200</text>
                        <text x="65" text-anchor="end" style="width:60px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="231.6428571428571" opacity="1">300</text>
                        <text x="65" text-anchor="end" style="width:60px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="186.35714285714286" opacity="1">400</text>
                        <text x="65" text-anchor="end" style="width:60px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="141.07142857142858" opacity="1">500</text>
                        <text x="65" text-anchor="end" style="width:60px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="95.78571428571428" opacity="1">
                            600
                        </text>
                        <text x="65" text-anchor="end" style="width:60px;color:#606060;cursor:default;font-size:12px;fill:#606060;" y="50.5" opacity="1">
                            700
                        </text>
                    </g>
                    <g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;" transform="translate(0,-9999)">
                        <path fill="rgba(219,219,216,0.8)" d="M 3 0 L 13 0 C 16 0 16 0 16 3 L 16 13 C 16 16 16 16 13 16 L 3 16 C 0 16 0 16 0 13 L 0 3 C 0 0 0 0 3 0">
                        </path>
                        <text x="8" zIndex="1" style="font-size:12px;color:#333333;fill:#333333;" y="21">
                        </text>
                    </g>
                    <text x="1082" text-anchor="end" zIndex="8" style="cursor:pointer;color:#909090;font-size:9px;fill:#909090;" y="395">
                    </text>
                </svg>
            </div>
        </div>
        <br>

    </div>
</div>
</body>