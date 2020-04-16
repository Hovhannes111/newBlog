@extends('layouts.app')
@section('content')
<main>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active dot-style">

            <div class="single-slider  hero-overly slider-height d-flex align-items-center"
                 data-background="/img/hero/evenement-720x480.jpg">
                <div class="container">
                    <div class="row justify-content-end text-center">
                        <div class="col-xl-4">
                            <div class="h1-slider-caption">
                                <img src="{{ asset('/img/logo/slider_logo.png') }}" alt="slogan">
                                <!--<h1 data-animation="fadeInUp" data-delay=".4s">Armenian Engineering Week</h1>-->
                                <!--<h3 data-animation="fadeInDown" data-delay=".4s">6 - 11 July 2020</h3>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider  hero-overly slider-height d-flex align-items-center"
                 data-background="/img/hero/evenement-720x480.png">
                <div class="container">
                    <div class="row justify-content-end text-center">
                        <div class="col-xl-4">
                            <div class="h1-slider-caption">
                                <img src="{{ asset('/img/logo/slider_logo.png') }}" alt="slogan">
                                <!--<h1 data-animation="fadeInUp" data-delay=".4s">Armenian Engineering Week</h1>-->
                                <!--<h3 data-animation="fadeInDown" data-delay=".4s">6 - 11 July 2020</h3>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider  hero-overly slider-height d-flex align-items-center"
                 data-background="/img/hero/evenement.jpg">
                <div class="container">
                    <div class="row justify-content-end text-center">
                        <div class="col-xl-4">
                            <div class="h1-slider-caption">
                                <img src="{{ asset('/img/logo/slider_logo.png') }}" alt="slogan">
                                <!--<h1 data-animation="fadeInUp" data-delay=".4s">Armenian Engineering Week</h1>-->
                                <!--<h3 data-animation="fadeInDown" data-delay=".4s">6 - 11 July 2020</h3>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider  hero-overly slider-height d-flex align-items-center"
                 data-background="/img/hero/evenemen.jpg">
                <div class="container">
                    <div class="row justify-content-end text-center">
                        <div class="col-xl-4">
                            <div class="h1-slider-caption">
                                <img src="{{ asset('/img/logo/slider_logo.png') }}" alt="slogan">
                                <!--<h1 data-animation="fadeInUp" data-delay=".4s">Armenian Engineering Week</h1>-->
                                <!--<h3 data-animation="fadeInDown" data-delay=".4s">6 - 11 July 2020</h3>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- Make customer Start-->
    <section class="make-customer-area customar-padding fix" id="about">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="customer-img mb-120">
                        <img src="{{ asset('/img/customer/gallery-img-1.jpg') }}" class="customar-img1" alt="">
                        <img src="{{ asset('/img/customer/customar2.png') }}" class="customar-img2" alt="">
                        <div class="service-experience heartbeat">
                            <h3><br></h3>
                        </div>
                    </div>
                </div>
                <div class=" col-xl-6 col-lg-6">
                    <div class="customer-caption">
                        <h2> About The Forum </h2>
                        <div class="caption-details">
                            <p>We are pleased to invite you to take part in the “Yerevan Engineering Week” Forum - Expo,
                                held in Yerevan, the week of July 6 - 11, 2020. </p>
                            <p>The forum will present the latest developments in dynamic and fast-growing industries,
                                such as Automotive, 5G
                                Wireless Communication, Semiconductor, Industrial IOT, mmWave RF Systems, Data Science
                                and Machine Learning.
                            </p>
                            <a href="#" class="btn more-btn1 apricot">Registration <i class="ti-angle-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Make customer End-->

    <!-- Room Start -->
    <section class="room-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <!--font-back-tittle  -->
                    <div class="font-back-tittle mb-45">
                        <div class="archivment-front">
                            <h3>Forum Topics</h3>
                        </div>
                        <h3 class="archivment-back">TOPICS</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="#">
                                <img src="{{ asset('/img/rooms/gallery-img-2.jpg') }}" alt=""></a>
                        </div>
                        <div class="room-caption">

                            <div class="per-night">
                                <span>
			  				Design & Test of Active Safety Systems, Autonomous and Electric Vehicles, Trends in the Automotive Industry
			  			</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="#"><img src="{{ asset('/img/rooms/Semiconductor_234x156.jpg') }}" alt=""></a>
                        </div>
                        <div class="room-caption">

                            <div class="per-night">
                                <span>Design of Prototyping Platforms for 5G Wireless Communications</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="#"> <img src="{{ asset('/img/rooms/Electronics_234x156.jpg') }}" alt=""></a>
                        </div>
                        <div class="room-caption">

                            <div class="per-night">
                                <span>Current trends in 5G Integrated circuits, testing problems and challenges</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="#">
                                <img src="{{ asset('/img/rooms/Wireless_234x156.jpg') }}" alt=""></a>
                        </div>
                        <div class="room-caption">

                            <div class="per-night">
                                <span>
			  				Design & Development of Radio Frequency Systems
			  			</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="#"><img src="{{ asset('/img/rooms/400px-SDR_et_WF.jpg') }}" alt=""></a>
                        </div>
                        <div class="room-caption">

                            <div class="per-night">
                                <span>Design of SDR systems in Open Source (GNU Radio, RFNoC) and LabVIEW environments</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="#"> <img src="{{ asset('/img/rooms/RF_234x156.jpg') }}" alt=""></a>
                        </div>
                        <div class="room-caption">

                            <div class="per-night">
                                <span>Modern testing systems for complex integrated circuits and RF MCU’s</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="#"><img src="{{ asset('/img/rooms/1-5ZuLCsB1KXEPgHu-qJ8WxQ.jpg') }}" alt=""></a>
                        </div>
                        <div class="room-caption">

                            <div class="per-night">
                                <span>Industrial IOT</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="#"> <img src="{{ asset('/img/rooms/1-5ZuLCsB1KXEPgHu-qJ8WxQ.jpg') }}" alt=""></a>
                        </div>
                        <div class="room-caption">

                            <div class="per-night">
                                <span>Data Science and Machine Learning in Engineering Applications</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="#"> <img src="{{ asset('/img/rooms/Academia_234x156.jpg') }}" alt=""></a>
                        </div>
                        <div class="room-caption">

                            <div class="per-night">
                                <span>Education & Research Labs and Prototyping Platforms</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- Room End -->
    <section class="info-panel-area fix" id="program">
        <div class="container-fluid p-0">

            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <!-- Seciton Tittle  -->
                    <div class="font-back-tittle mb-50">
                        <div class="archivment-front">
                            <h3>Technical Program</h3>
                        </div>
                        <h3 class="archivment-back">Technical Program</h3>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12 customer-caption">
                            <div class="info-panel caption-details">
                                <p class="pera-dtails">Engineering Week will last 5 days starting from Monday, June
                                    24</p>
                                <div class="event-list">
                                    <div class="row justify-content-between section-top-border">
                                        <div class="group-row row-header col-lg-12">
                                            <div class="col-lg-10 bold-font tgl">
                                                Monday, June 24
                                            </div>
                                            <div class="col-xl-2 icon tgl">
                                                +
                                            </div>
                                        </div>

                                        <div class="toggle" style="display: none;">

                                            <div class="group-row">
                                                <div class="col-xl-8 lefted" style="font-weight: 600;">
                                                    Marriott, Tigran Metz Hall
                                                </div>
                                                <div class="col-xl-8">

                                                </div>
                                            </div>
                                            <br>
                                            <div class="group-row">
                                                <div class="col-xl-8 lefted">
                                                    09:00 – 10:00&nbsp;&nbsp;&nbsp;Registration, Coffee
                                                </div>
                                                <div class="col-xl-8">

                                                </div>
                                            </div>
                                            <div class="group-row">
                                                <div class="col-xl-8 lefted">
                                                    10:00 – 12:00&nbsp;&nbsp;&nbsp;Opening Ceremony and Keynotes
                                                </div>
                                                <div class="col-xl-8">

                                                </div>
                                            </div>
                                            <div class="group-row">
                                                <div class="col-xl-8 lefted">
                                                    12:00 – 13:30&nbsp;&nbsp;&nbsp;Lunch
                                                </div>
                                                <div class="col-xl-8">

                                                </div>
                                            </div>
                                            <div class="group-row">
                                                <div class="col-xl-8 lefted">
                                                    13:30 – 17:00&nbsp;&nbsp;&nbsp;Industry Panel
                                                </div>
                                                <div class="col-xl-8">

                                                </div>
                                            </div>
                                            <div class="group-row">
                                                <ul class="unorder-list">
                                                    <li>
                                                        Automotive
                                                    </li>
                                                    <li>
                                                        Semiconductor
                                                    </li>
                                                    <li>Wireless Communication</li>
                                                    <li>RF Systems &amp; Devices</li>
                                                    <li>Industrial IOT</li>
                                                    <li>Education Technologies</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row justify-content-between section-top-border">
                                        <div class="group-row row-header col-lg-12">
                                            <div class="col-lg-10 bold-font tgl">
                                                Monday, June 24
                                            </div>
                                            <div class="col-xl-2 icon tgl">
                                                +
                                            </div>
                                        </div>
                                        <div class="toggle" style="display:none">
                                            <div class="flex dr-row">
                                                <div class=" col-xl-8">
                                                    <div class="group-row">
                                                        <div class="col-xl-8 lefted underline" style="font-weight:600;">
                                                            Automotive Track
                                                        </div>
                                                        <div class="col-xl-8 right-text" style="font-weight:600;">
                                                            Marriott, Ararat 1 Hall
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="group-row">
                                                        <div class="col-xl-8 lefted">
                                                            10:00 – 13:00
                                                        </div>
                                                        <div class="col-xl-8">

                                                        </div>
                                                    </div>
                                                    <div class="group-row">
                                                        <ul class="unorder-list">
                                                            <li>How Safe Highly Automated Cars Should Be</li>
                                                            <li>ADAS Sensor-Fusion Test</li>
                                                            <li>Challenges of Hybrid &amp; Electric Vehicle Test</li>
                                                            <li>Sourcing ADAS Test Data</li>
                                                            <li>Data Engineering In Automotive</li>

                                                        </ul>
                                                    </div>
                                                    <div class="group-row">
                                                        <div class="col-xl-8 lefted">
                                                            13:00 – 14:00&nbsp;&nbsp;&nbsp;Lunch Break
                                                        </div>
                                                        <div class="col-xl-8">

                                                        </div>
                                                    </div>

                                                    <div class="group-row">
                                                        <div class="col-xl-8 lefted">
                                                            14:00 – 17:00
                                                        </div>
                                                        <div class="col-xl-8">

                                                        </div>
                                                    </div>
                                                    <div class="group-row">
                                                        <ul class="unorder-list">
                                                            <li>From Sensor Prototyping to Vehicle End-of-Line Test -
                                                                Challenges,
                                                                Expectations and Solutions
                                                            </li>
                                                            <li>Things you should know to Future-Proof a Physical Test
                                                                System
                                                            </li>
                                                            <li>Infotainment Test Systems</li>
                                                            <li>V-Model and Process Analysis for ADAS</li>


                                                        </ul>
                                                    </div>
                                                </div>


                                                <div class=" col-xl-8">
                                                    <div class="group-row">
                                                        <div class="col-xl-8 lefted underline" style="font-weight:600;">
                                                            Semiconductor Track
                                                        </div>
                                                        <div class="col-xl-8 right-text" style="font-weight:600;">
                                                            Marriott, Ararat 2 Hall
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="group-row">
                                                        <div class="col-xl-8 lefted">
                                                            10:00 – 13:00
                                                        </div>
                                                        <div class="col-xl-8">

                                                        </div>
                                                    </div>
                                                    <div class="group-row">
                                                        <ul class="unorder-list">

                                                            <li>High-Power Semiconductor Test</li>
                                                            <li>Wafer-Level Reliability &amp; Parametric Test</li>
                                                            <li>5G IC Test – Sub 6 GHz</li>
                                                            <li>mmWave 5G IC Test problems. Over-the-Air Testing</li>
                                                            <li>IoT Test - Bluetooth 5.1 and NB-IoT</li>


                                                        </ul>
                                                    </div>
                                                    <div class="group-row">
                                                        <div class="col-xl-8 lefted">
                                                            13:00 – 14:00&nbsp;&nbsp;&nbsp;Lunch Break
                                                        </div>
                                                        <div class="col-xl-8">

                                                        </div>
                                                    </div>

                                                    <div class="group-row">
                                                        <div class="col-xl-8 lefted">
                                                            14:00 – 17:00
                                                        </div>
                                                        <div class="col-xl-8">

                                                        </div>
                                                    </div>
                                                    <div class="group-row">
                                                        <ul class="unorder-list">
                                                            <li>NFC - Technologies and Test Solutions</li>
                                                            <li>VCSEL - Trends and Test Challenges in Optoelectronics
                                                            </li>
                                                            <li>MEMS Trends and Test Solutions</li>
                                                            <li>Design-to-Test – Bridging the Gap between Design &amp;
                                                                Test
                                                            </li>
                                                            <li>Machine Learning in Semiconductor Test</li>
                                                            <li>Semiconductor Factory Automation</li>
                                                        </ul>
                                                    </div>

                                                </div>

                                            </div>


                                        </div>


                                    </div>
                                    <div class="row justify-content-between section-top-border">
                                        <div class="group-row row-header col-lg-12">
                                            <div class="col-lg-10 bold-font tgl">
                                                Monday, June 24
                                            </div>
                                            <div class="col-xl-2 icon tgl">
                                                +
                                            </div>

                                        </div>
                                        <div class="toggle" style="display:none">
                                            <div class="flex dr-row">
                                                <div class=" col-xl-8">
                                                    <div class="group-row">
                                                        <div class="col-xl-8 lefted underline" style="font-weight:600;">
                                                            Wireless Comm &amp; RF Track
                                                        </div>
                                                        <div class="col-xl-8 right-text" style="font-weight:600;">
                                                            Marriott, Ararat 1 Hall
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="group-row">
                                                        <div class="col-xl-8 lefted">
                                                            10:00 – 13:00
                                                        </div>
                                                        <div class="col-xl-8">

                                                        </div>
                                                    </div>
                                                    <div class="group-row">
                                                        <ul class="unorder-list">
                                                            <li>Trends and Evolution of Wireless Communication Systems
                                                            </li>
                                                            <li>System Design for Cellular Standard Implementation</li>
                                                            <li>5G Prototyping Systems using mmWave Technologies</li>
                                                            <li>5G Prototyping Systems based on USRP</li>
                                                            <li>Direction of Arrival Measurement based on Multichannel
                                                                SDR Systems
                                                                using MU-MIMO &amp; CP-OFDM Technologies
                                                            </li>
                                                            <li>SDR Development using GNU Radio &amp; RF NoC</li>


                                                        </ul>
                                                    </div>
                                                    <div class="group-row">
                                                        <div class="col-xl-8 lefted">
                                                            13:00 – 14:00&nbsp;&nbsp;&nbsp;Lunch Break
                                                        </div>
                                                        <div class="col-xl-8">

                                                        </div>
                                                    </div>

                                                    <div class="group-row">
                                                        <div class="col-xl-8 lefted">
                                                            14:00 – 17:00
                                                        </div>
                                                        <div class="col-xl-8">

                                                        </div>
                                                    </div>
                                                    <div class="group-row">
                                                        <ul class="unorder-list">
                                                            <li>RF Test Systems</li>
                                                            <li>Simulation Systems for Global Navigation Satellite
                                                                Systems (GNSS)
                                                            </li>
                                                            <li>Target Simulation Systems for RADARs</li>
                                                            <li>Design and Development of modern RADARs using
                                                                Multicarrier Modulated
                                                                Signals
                                                            </li>
                                                            <li>RF Design using 6 GHz Receiver, LTE-1800 and UMTS-2100
                                                                Amplifiers
                                                            </li>
                                                            <li>Antenna Development - from Design to Production</li>

                                                        </ul>
                                                    </div>
                                                    <div class="group-row">
                                                        <div class="col-xl-8 lefted">
                                                            17:00&nbsp;&nbsp;&nbsp;Free Evening
                                                        </div>
                                                        <div class="col-xl-8">

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class=" col-xl-8">
                                                    <div class="group-row">
                                                        <div class="col-xl-8 lefted underline" style="font-weight:600;">
                                                            Industrial IOT Track
                                                        </div>
                                                        <div class="col-xl-8 right-text" style="font-weight:600;">
                                                            Marriott, Ararat 2 Hall
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="group-row">
                                                        <div class="col-xl-8 lefted">
                                                            10:00 – 13:00
                                                        </div>
                                                        <div class="col-xl-8"></div>
                                                    </div>
                                                    <div class="group-row">
                                                        <ul class="unorder-list">

                                                            <li>Making IoT Work for Test</li>
                                                            <li>IIoT Enabled Intelligent Services</li>
                                                            <li>IIoT &amp; AR/MR Technologies Integration: The Future of
                                                                Systems
                                                                Maintenance
                                                            </li>
                                                            <li>Smart Manufacturing. IT/OT Convergence and Time
                                                                Sensitive
                                                                Networking
                                                            </li>
                                                            <li>Big Data Management in Test &amp; Measurement</li>
                                                            <li>Building the Internet of Tomorrow</li>


                                                        </ul>
                                                    </div>


                                                    <div class="group-row">
                                                        <div class="col-xl-8 lefted">
                                                            13:00 – 14:00&nbsp;&nbsp;&nbsp;Lunch Break
                                                        </div>
                                                        <div class="col-xl-8">

                                                        </div>
                                                    </div>

                                                    <div class="group-row">
                                                        <div class="col-xl-8 lefted">
                                                            14:00 – 17:00
                                                        </div>
                                                        <div class="col-xl-8">
                                                        </div>
                                                    </div>
                                                    <div class="group-row">
                                                        <ul class="unorder-list">

                                                            <li>FPGA Acceleration for Big Data &amp; AI Computing</li>
                                                            <li>Industrial Cybersecurity</li>
                                                            <li>IoT based Industrial Asset Monitoring</li>
                                                            <li>Advancing Research with IIoT</li>


                                                        </ul>
                                                    </div>


                                                    <div class="group-row">
                                                        <div class="col-xl-8 lefted">
                                                            17:00&nbsp;&nbsp;&nbsp;Free Evening
                                                        </div>
                                                        <div class="col-xl-8">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                        </div>


                                    </div>
                                    <div class="row justify-content-between section-top-border">
                                        <div class="group-row row-header col-lg-12">
                                            <div class="col-lg-10 bold-font tgl">
                                                Monday, June 24
                                            </div>
                                            <div class="col-xl-2 icon tgl">
                                                +
                                            </div>
                                        </div>
                                        <!-- &#8722; -->
                                        <div class="toggle" style="display:none">
                                            <div class="group-row">
                                                <div class="col-xl-8 lefted">
                                                    Cultural Tours - Getting to know Yerevan and Armenia
                                                </div>
                                                <div class="col-xl-8">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row justify-content-between section-top-border">
                                        <div class="group-row row-header col-lg-12">
                                            <div class="col-lg-10 bold-font tgl">
                                                Monday, June 24
                                            </div>
                                            <div class="col-xl-2 icon tgl">
                                                +
                                            </div>
                                        </div>

                                        <div class="toggle" style="display:none">
                                            <div class="group-row">
                                                <div class="col-xl-8 lefted" style="font-weight:600;">
                                                    Vanadzor Center of Technology
                                                </div>
                                                <div class="col-xl-8">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="group-row">
                                                <div class="col-xl-8 lefted">
                                                    10:30 – 11:00&nbsp;&nbsp;&nbsp;Registration, Coffee
                                                </div>
                                                <div class="col-xl-8">

                                                </div>
                                            </div>
                                            <div class="group-row">
                                                <div class="col-xl-8 lefted">
                                                    11:00 – 11:30&nbsp;&nbsp;&nbsp;Opening Remarks
                                                </div>
                                                <div class="col-xl-8">

                                                </div>
                                            </div>
                                            <div class="group-row">
                                                <div class="col-xl-8 lefted">
                                                    11:30 – 13:00&nbsp;&nbsp;&nbsp;Armenia Engineering Week Sum-Up
                                                </div>
                                                <div class="col-xl-8">

                                                </div>
                                            </div>
                                            <div class="group-row">
                                                <div class="col-xl-8 lefted">
                                                    13:00 – 14:30&nbsp;&nbsp;&nbsp;Lunch Break
                                                </div>
                                                <div class="col-xl-8">


                                                </div>
                                            </div>

                                            <div class="group-row">
                                                <div class="col-xl-8 lefted">
                                                    14:30 – 16:00&nbsp;&nbsp;&nbsp;Exhibition
                                                </div>
                                                <div class="col-xl-8">

                                                </div>
                                            </div>
                                            <div class="group-row">
                                                <div class="col-xl-8 lefted">
                                                    16:00 – 16:30&nbsp;&nbsp;&nbsp;Coffee Break
                                                </div>
                                                <div class="col-xl-8">

                                                </div>
                                            </div>
                                            <div class="group-row">
                                                <div class="col-xl-8 lefted">
                                                    16:30 – 18:00&nbsp;&nbsp;&nbsp;Start-Up Demos
                                                </div>
                                                <div class="col-xl-8">

                                                </div>
                                            </div>
                                            <div class="group-row">
                                                <div class="col-xl-8 lefted">
                                                    18:00 – 19:00&nbsp;&nbsp;&nbsp;Dinner
                                                </div>
                                                <div class="col-xl-8">

                                                </div>
                                            </div>
                                            <div class="group-row">
                                                <div class="col-xl-8 lefted">
                                                    19:00 – 21:00&nbsp;&nbsp;&nbsp;Concert, Reception
                                                </div>
                                                <div class="col-xl-8">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery img Start-->
    <div class="gallery-area fix" id="cprogram">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <!-- Seciton Tittle  -->
                    <div class="font-back-tittle mb-50">
                        <div class="archivment-front">
                            <h3>Cultural Program</h3>
                        </div>
                        <h3 class="archivment-back">Recent News</h3>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallery-active owl-carousel">
                            <div class="gallery-img">
                                <a href="#"><img src="{{ asset('/img/gallery/yere2.jpg') }}" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="{{ asset('/img/gallery/yere7.jpg') }}" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="{{ asset('/img/gallery/yere5.jpg') }}" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="{{ asset('/img/gallery/yere8.jpg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery img End-->
    <!-- Blog Start -->
    <div class="blog-area fix " id="sponsors">
        <div class="blog-area blog-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">

                        <div class="font-back-tittle mb-50">
                            <div class="archivment-front">
                                <h3>Organizers</h3>
                            </div>
                            <h3 class="archivment-back">Organizers</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">

                        <div class="single-blog mb-30">
                            <div class="blog-img">
                                <img src="{{ asset('/img/our_blog/gov_en.png') }}" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">

                        <div class="single-blog mb-30">
                            <div class="blog-img">
                                <img src="{{ asset('/img/our_blog/Engineering-Association_Logo.png') }}" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">

                        <div class="single-blog mb-30">
                            <div class="blog-img">
                                <img src="{{ asset('/img/our_blog/EIF.png') }}" alt="">
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Blog End -->
            </div>
        </div>
    </div>

    <!-- partners img Start-->
    <div class="partners-area fix" id="partners">

        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="partners-active owl-carousel">
                        <div class="partners-img">
                            <a href="#"><img src="{{ asset('/img/our_blog/pmi.png') }}" alt=""></a>
                        </div>
                        <div class="partners-img">
                            <a href="#"><img src="{{ asset('/img/our_blog/GTC.png') }}" alt=""></a>
                        </div>
                        <div class="partners-img">
                            <a href="#"><img src="{{ asset('/img/our_blog/unnamed.png') }}" alt=""></a>
                        </div>
                        <div class="partners-img">
                            <a href="#"><img src="{{ asset('/img/our_blog/unnamed.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- partners img End-->
</main>
@endsection
