@extends('frontend.layouts.main')
@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1">
                    <img class="img-fluid" src="{{asset('assets/img/slider/main-slider2.png')}}" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                    <img class="img-fluid" src="{{asset('assets/img/slider/main-slider3.png')}}" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                    <video loop="true" autoplay="autoplay" muted style="width: 100%;">
                        <source src="{{asset('assets/img/slider/video_slider.mp4')}}" type="video/mp4"/>
                    </video>
                </button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('assets/img/slider/main-slider2.png')}}" alt="Image">
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('assets/img/slider/main-slider3.png')}}" alt="Image">
                </div>
                <div class="carousel-item">
                    <video loop="true" autoplay="autoplay" muted style="width: 100%;">
                        <source src="{{asset('assets/img/slider/video_slider.mp4')}}" type="video/mp4"/>
                    </video>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="news-updates">
        <marquee onmouseover="this.stop();" onmouseout="this.start();">
            <h4>
                <!--<a href="https://www.ugc.ac.in/pdfnews/4656721_CUET_Public-Notice.pdf" target="_blank" style="color: #ff6c3a;">Inviting comments/suggestions/feedback on the proposed revised methodology for CUET (UG) and CUET (PG) 2025. |  </a>-->
                <a href="https://www.ugc.ac.in/pdfnews/7026802_Establishment-of-Equal-Opportunity-Cells.pdf"
                   target="_blank" style="color: #ff6c3a;">Establishment of Equal Opportunity Centre and SC/ST Cell in
                    HEIs
                    and Submission of Data on Grievance Redressal (Last date extended upto 07-02-2025) |</a>
                <!-- <a href="https://fhei.ugc.ac.in/" target="_blank" style="color: #ff6c3a;">Eligible Foreign Higher Educational Institutions are invited to set up their campuses in India, may apply on the portal at https://fhei.ugc.ac.in/ |</a>-->
                <a href="https://deemed.ugc.ac.in/" target="_blank" style="color: #ff6c3a;"> Invitation of applications
                    from
                    eligible colleges for Deemed to be University status, may apply on the portal at
                    https://deemed.ugc.ac.in/ | </a>
                <a href="https://aucollege.ugc.ac.in/" target="_blank" style="color: #ff6c3a;">Invitation of
                    applications
                    from eligible colleges for conferment/extension of Autonomous status, colleges may apply on the
                    portal
                    at https://aucollege.ugc.ac.in</a>
            </h4>

        </marquee>
    </div>

    <div class="box-offer bg-gray" style="padding: 5px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <img style="width: 100%; cursor: pointer;" alt=""
                         src="https://cbpssubscriber.mygov.in/assets/uploads/X0qP81f7lg3YqNFI?2" id="myGovImage">
                    <br>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <section class="short-info">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-container aos-init aos-animate" data-aos="zoom-out">
                            <h3>
                                <span class="red-color">About </span>University Grants Commission
                            </h3>
                            <p class="text-justify">
                                The University Grants Commission (UGC) came into existence on 28th December,
                                1953 and became a
                                statutory Organization of the Government of India by an Act of Parliament in 1956, for
                                the
                                coordination,determination and maintenance of standards of teaching, examination and
                                research in
                                university education.
                            </p>
                        </div>
                        <div class="text-container aos-init aos-animate" data-aos="fade-right">
                            <a href="Home/AboutUGC.html" class="button btn btn-sm btn-red radius25">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="section-tabs">
        <div class="page-content tab-parallax">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <section class="icon-box-tabs">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="pills-contact-tab1" data-bs-toggle="pill"
                                       data-bs-target="#pills-5" type="button" role="tab" aria-controls="pills-5"
                                       aria-selected="true" data-toggle="tab" aria-expanded="false"
                                       data-aos="fade-right"
                                       data-aos-delay="400">
                                        <i class="fa fa-laptop" aria-hidden="true"></i>
                                        <div class="text-center">
                                            <p>

                                                e-Governance
                                                <br>
                                                @UGC
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-home-tab" data-bs-toggle="pill"
                                       data-bs-target="#pills-1"
                                       type="button" role="tab" aria-controls="pills-1" aria-selected="false"
                                       data-toggle="tab" aria-expanded="true" data-aos="fade-right" tabindex="-1">
                                        <i class="fas fa-hand-pointer"></i>
                                        <div class="text-center">
                                            <p>
                                                Key<br> Initiatives
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                       data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                       aria-selected="false" data-toggle="tab" aria-expanded="false"
                                       data-aos="fade-right"
                                       data-aos-delay="100" tabindex="-1">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                        <div class="text-center">
                                            <p>
                                                Student
                                                <br>
                                                Corner
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                       data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3"
                                       aria-selected="false" data-toggle="tab" aria-expanded="false"
                                       data-aos="fade-right"
                                       data-aos-delay="200" tabindex="-1">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                        <div class="text-center">
                                            <p>
                                                Faculty Corner/<br>
                                                Non-Teaching Staff
                                            </p></div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                       data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4"
                                       aria-selected="false" data-toggle="tab" aria-expanded="false"
                                       data-aos="fade-right"
                                       data-aos-delay="300" tabindex="-1">
                                        <i class="fa fa-institution" aria-hidden="true"></i>
                                        <div class="text-center">
                                            <p>
                                                Details of<br>
                                                HEIs
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-Newsletter-tab" data-bs-toggle="pill"
                                       data-bs-target="#pills-6" type="button" role="tab" aria-controls="pills-6"
                                       aria-selected="false" data-toggle="tab" aria-expanded="false"
                                       data-aos="fade-right"
                                       data-aos-delay="300" tabindex="-1">
                                        <i class="fa fa-globe" aria-hidden="true"></i>
                                        <div class="text-center">
                                            <p>
                                                UGC <br>
                                                Green Initiatives<img src="{{asset('assets/img/JPG/blink_new.gif')}}"
                                                                      style="height:10%;width:10%;">
                                            </p>
                                        </div>
                                    </a>
                                </li>

                            </ul>


                            <div class="panel-body">
                                <div class="tab-content" id="pills-tabContent">

                                    <div class="tab-pane show active animated fadeInUp" id="pills-5" role="tabpanel"
                                         aria-labelledby="pills-contact-tab">
                                        <div class="col-sm-12">
                                            <div class="title">
                                                <h2>
                                                    <span class="red-color">e-Governance </span>@UGC
                                                </h2>
                                            </div>
                                            <div class="row section7 p0" style="background: none;">
                                                <div class="col-sm-3">
                                                    <a href="https://equivalence.ugc.ac.in/" target="_blank">
                                                        <div class="text-container aos-init aos-animate"
                                                             data-aos="fade-up">
                                                            <img src="{{asset('assets/img/eGovernance/7032830_UGC_Equivalence.jpg')}}"
                                                                 class="img-responsive center-img cols-img2"
                                                                 alt="UGC Equivalence Portal"
                                                                 style="width: 160px; height: 80px">
                                                            <div class="text">
                                                                <h4> UGC Equivalence Portal</h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-sm-3">
                                                    <a href="https://phdexcellence.ugc.ac.in/" target="_blank">
                                                        <div class="text-container aos-init aos-animate"
                                                             data-aos="fade-up">
                                                            <img src="{{asset('assets/img/eGovernance/PhD_Citation_Portal.jpg')}}"
                                                                 class="img-responsive center-img cols-img2"
                                                                 alt="UGC Ph.D. Excellence Citation Portal"
                                                                 style="width: 160px; height: 80px">
                                                            <div class="text">
                                                                <h4> UGC Ph.D. Excellence Citation Portal</h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-sm-3">
                                                    <a href="https://fhei.ugc.ac.in/" target="_blank">
                                                        <div class="text-container aos-init aos-animate"
                                                             data-aos="fade-up">
                                                            <img src="{{asset('assets/img/eGovernance/fhei_logo.png')}}"
                                                                 class="img-responsive center-img cols-img2"
                                                                 alt="UGC FHEI"
                                                                 style="width: 160px; height: 80px">
                                                            <div class="text">
                                                                <h4> UGC FHEI</h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-sm-3">
                                                    <a href="https://mmc.ugc.ac.in/" target="_blank">
                                                        <div class="text-container aos-init aos-animate"
                                                             data-aos="fade-up">
                                                            <img src="{{asset('assets/img/eGovernance/mmmc.png')}}"
                                                                 class="img-responsive center-img cols-img2"
                                                                 alt="Malviya Mission"
                                                                 style="width: 160px; height: 80px">
                                                            <div class="text">
                                                                <h4> Malviya Mission</h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>


                                            </div>
                                            <br>
                                            <div class="buttons mt_30">
                                                <center>
                                                    <a data-animation-in="zoomIn" href="Home/egovernance.html"
                                                       class="button btn btn-md btn-default btn-dark radius25">View
                                                        All</a>
                                                </center>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane  animated fadeInUp" id="pills-1" role="tabpanel"
                                         aria-labelledby="pills-home-tab">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="heading-title-alt">
                                                    <h2>
                                                        <span class="red-color">Key </span>Initiatives
                                                    </h2>
                                                </div>
                                                <ul class="tabs-list">

                                                    <li>
                                                        <a href="KeyInitiative606c.html?ID=wQlmePt3qJ/k1is00h8F8w==">
                                                                    <span>
                                                                        <i class="fa fa-sm fa-plus"></i>
                                                                    </span>Women Leaders: Shaping Academic Excellence
                                                            for Viksit Bharat @ 2047
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="KeyInitiative5c33.html?ID=ZEtulRk89N+enNPOjil4Wg==">
                                                                    <span>
                                                                        <i class="fa fa-sm fa-plus"></i>
                                                                    </span>Compendium of UGC Regulations 1957-2023
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="KeyInitiativea244.html?ID=UJRQmSQU4NUDsGgf837fMQ==">
                                                                    <span>
                                                                        <i class="fa fa-sm fa-plus"></i>
                                                                    </span>List of Eligible Indian institutions to
                                                            collaborate as per Regulations on Academic Collaboration
                                                            between
                                                            Indian and Foreign HEIs to offer Twinning, Joint Degree and
                                                            Dual
                                                            Degree Programmes in 2022 with foreign institutions.
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="KeyInitiative4753.html?ID=FuC+upco6qVqT6mOpUReXg==">
                                                                    <span>
                                                                        <i class="fa fa-sm fa-plus"></i>
                                                                    </span>Guidelines on Mulya Pravah 2.0
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="KeyInitiativeb7b2.html?ID=CjV3jqYIZhtroLHLDug2Ew==">
                                                                    <span>
                                                                        <i class="fa fa-sm fa-plus"></i>
                                                                    </span>National Higher Education Qualifications
                                                            Framework (NHEQF)
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="KeyInitiative191b.html?ID=PMXFYjzmJehU3tphrwWQSA==">
                                                                    <span>
                                                                        <i class="fa fa-sm fa-plus"></i>
                                                                    </span>Guidelines for Promotion at HEI
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="KeyInitiativef2c7.html?ID=bE9fWYDGqyYqwJ0y26Z4tg==">
                                                                    <span>
                                                                        <i class="fa fa-sm fa-plus"></i>
                                                                    </span>Guidelines for Training/Orientation of
                                                            Faculty on Indian Knowledge System (IKS)
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="KeyInitiative739e.html?ID=zTPDjUIHVSxLuFL/Kq4EXA==">
                                                                    <span>
                                                                        <i class="fa fa-sm fa-plus"></i>
                                                                    </span>National Credit Framework (NCrF)
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="KeyInitiative3332.html?ID=VQnigtvLvoA0UAhQPVdzTA==">
                                                                    <span>
                                                                        <i class="fa fa-sm fa-plus"></i>
                                                                    </span>Fostering Social Responsibility &amp;
                                                            Community Engagement 2.0
                                                        </a>
                                                    </li>

                                                </ul>
                                                <br>
                                                <div class="buttons">
                                                    <a data-animation-in="zoomIn" href="MajorInitatives.html"
                                                       target="_blank"
                                                       class="button btn btn-md btn-default btn-dark radius25">
                                                        View All
                                                        Initiatives
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <img src="{{asset('assets/img/KeyInitiatives/KeyInitiatives.jpg')}}"
                                                     class="img-responsive"
                                                     alt="">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane animated fadeInUp" id="pills-2" role="tabpanel"
                                         aria-labelledby="pills-profile-tab">
                                        <div class="col-sm-12">
                                            <div class="title">
                                                <h2>
                                                    <span class="red-color">Student </span>Corner
                                                </h2>
                                            </div>
                                            <div class="row services6 p0">
                                                <div class="col-sm-3">
                                                    <a href="Home/student_Corner.html">
                                                        <div class="box-container text-center aos-init aos-animate"
                                                             data-aos="fade-up" data-aos-delay="100">
                                                            <i class="fa fa-graduation-cap fa-2x"></i>
                                                            <h3>Fellowships</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-sm-3">
                                                    <a href="Home/student_Corner.html">
                                                        <div class="box-container text-center aos-init aos-animate"
                                                             data-aos="fade-up" data-aos-delay="200">
                                                            <i class="fa fa-rupee fa-2x"></i>
                                                            <h3>Scholarships</h3>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="col-sm-3">
                                                    <a href="Home/student_Corner.html">
                                                        <div class="box-container text-center aos-init aos-animate"
                                                             data-aos="fade-up" data-aos-delay="300">
                                                            <i class="fa fa-desktop  fa-2x"></i>
                                                            <h3>Portals / Helplines</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="buttons">
                                                <center>
                                                    <a data-animation-in="zoomIn" href="Home/student_Corner.html"
                                                       target="_blank"
                                                       class="button btn btn-md btn-default btn-dark radius25">View
                                                        All</a>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane animated fadeInUp" id="pills-3" role="tabpanel"
                                         aria-labelledby="pills-contact-tab">
                                        <div class="col-sm-12">
                                            <div class="title">
                                                <h2>
                                                    <span class="red-color">Faculty </span>Corner
                                                </h2>
                                            </div>
                                            <div class="row services6 p0">
                                                <div class="col-sm-3">
                                                    <a href="Home/faculty_Corner.html">
                                                        <div class="box-container text-center aos-init aos-animate"
                                                             data-aos="fade-up" data-aos-delay="100">
                                                            <i class="fa fa-trophy fa-2x"></i>
                                                            <h3>UGC Research Awards </h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-sm-3">
                                                    <a href="Home/faculty_Corner.html">
                                                        <div class="box-container text-center aos-init aos-animate"
                                                             data-aos="fade-up" data-aos-delay="200">
                                                            <i class="fa fa-wheelchair fa-2x"></i>
                                                            <h3>Portals / Helplines </h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-sm-3">
                                                    <a href="Home/faculty_Corner.html">
                                                        <div class="box-container text-center aos-init aos-animate"
                                                             data-aos="fade-up">
                                                            <i class="fa fa-stethoscope  fa-2x"></i>
                                                            <h3>Regulations</h3>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                            <br>
                                            <div class="buttons">
                                                <center>
                                                    <a data-animation-in="zoomIn" href="Home/faculty_Corner.html"
                                                       target="_blank"
                                                       class="button btn btn-md btn-default btn-dark radius25">View
                                                        All</a>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane animated fadeInUp" id="pills-4" role="tabpanel"
                                         aria-labelledby="pills-contact-tab">
                                        <div class="col-sm-12">
                                            <div class="title">
                                                <h2>
                                                    <span class="red-color">Details of </span>HEIs
                                                </h2>
                                            </div>
                                            <div class="row services6 p0">
                                                <div class="col-sm-3">
                                                    <a href="universitydetails/universitya17a.html?type=ddmCMsxJZgXH2S/m0uMOKQ==">

                                                        <div class="box-container text-center aos-init aos-animate"
                                                             data-aos="fade-up" data-aos-delay="300">
                                                            <i class="fa fa-institution fa-2x"></i>
                                                            <h3>
                                                                Central Universities <br> <br>
                                                                <label id="lblcentralcount">57</label>

                                                            </h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-sm-3">
                                                    <a href="universitydetails/university33fe.html?type=LZ1FUMk6U2JWGNLvhWfVSA==">
                                                        <div class="box-container text-center aos-init aos-animate"
                                                             data-aos="fade-up" data-aos-delay="200">
                                                            <i class="fa fa-institution  fa-2x"></i>
                                                            <h3>
                                                                State Universities <br> <br>
                                                                <label id="lblstate">504</label>

                                                            </h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-sm-3">
                                                    <a href="universitydetails/university2842.html?type=UCL6fMspL2LJS89kv++N3A==">
                                                        <div class="box-container text-center aos-init aos-animate"
                                                             data-aos="fade-up">
                                                            <i class="fa fa-building  fa-2x"></i>
                                                            <h3>
                                                                Deemed to be Universities <br> <br>
                                                                <label id="lbldeemedcnt">145</label>

                                                            </h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-sm-3">
                                                    <a href="universitydetails/university732b.html?type=0wBmFB1Rb4JGVzq9UP/iOg==">
                                                        <div class="box-container text-center aos-init aos-animate"
                                                             data-aos="fade-up" data-aos-delay="100">
                                                            <i class="fa fa-building-o  fa-2x"></i>
                                                            <h3>
                                                                Private Universities <br> <br>
                                                                <label id="lblprivatecnt">512</label>

                                                            </h3>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                            <br>
                                            <div class="buttons">
                                                <center>


                                                    <a data-animation-in="zoomIn"
                                                       href="universitydetails/university2630.html?type=MuOh4z0uqRaY2k8Ag10I0g=="
                                                       class="button btn btn-md btn-default btn-dark radius25">View
                                                        All</a>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane  animated fadeInUp" id="pills-6" role="tabpanel"
                                         aria-labelledby="pills-Newsletter-tab">
                                        <div class="col-sm-12">
                                            <div class="title">
                                                <h2>
                                                    <span class="red-color">UGC </span>Green Initiatives

                                                </h2>
                                            </div>
                                            <div class="row section7 p0" style="background: none;">
                                                <div class="col-sm-12">
                                                    <a href="{{asset('assets/img/JPG/GREEN_PAGE_Final.jpg')}}"
                                                       target="_blank">
                                                        <div class="text-container aos-init aos-animate"
                                                             data-aos="fade-up">
                                                            <img src="{{asset('assets/img/JPG/GREEN_PAGE_Final.jpg')}}"
                                                                 class="img-responsive center-img cols-img2" alt=""
                                                                 style="width: 100%; height: 100%">

                                                        </div>
                                                    </a>
                                                </div>


                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                        <!--tabs square end-->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-xxl py-5">
        <div class="title padding">
            <h2>
                <span class="red-color">Star Performer </span>of the Month
            </h2>
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 text-center">
                    <img src="{{asset('assets/img/Star_Performer/0294894_Ms.-SUNITA.jpg')}}" class="perfom-img">
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <img src="{{asset('assets/img/Star_Performer//6018559_Umesh-Sharma-Jan-2025.jpg')}}"
                         class="perfom-img">
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <img src="{{asset('assets/img/Star_Performer/3224992_Sridhar-Jagilinki-Assistant.jpg')}}"
                         class="perfom-img">
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <img src="{{asset('assets/img/Star_Performer/1989216_Raj-Kumari-US.jpg')}}" class="perfom-img">
                </div>
            </div>
        </div>
        <div class="container text-center mb-3">
            <a data-animation-in="zoomIn" href="Star_Performer.html"
               class="button btn btn-md btn-default btn-dark radius25">View All</a>
        </div>
    </div>

    <section class="box-offer bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="box-container text-center" data-aos="fade-right">
                        <div class="box-title">
                            <span class="price-top">Notices</span><i class="fa fa-lg fa-chart-bar"></i>
                        </div>
                        <div class="box-body">

                            <div class="scroll-marquee">
                                <marquee direction="up" scrollamount="3" scrolldelay="200" behavior="scroll"
                                         onmouseover="this.stop();" onmouseout="this.start();" height="150">
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/7110542_Public-Notice-Draft-Guidelines-for-Multiple-Entry-and-Multiple-Exit.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                Public Notice regarding: Inviting Comments/Suggestions/Feedback on the
                                                Draft
                                                Guidelines for Multiple Entry and Multiple Exit in Academic Programmes
                                                Offered in HEIs.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        10/07/2025
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/8475537_NSPC-Letter-2025.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                letter regarding: Participation in the National Students Paryavaran
                                                Competition (NSPC) from 1st July 2025 to 21st August 2025.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        04/07/2025
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/7242561_Advisory-for-Awareness-and-accessibility-of-essential-services.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                letter regarding: Awareness and Accessibility of Essential Services.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        04/07/2025
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/0306952_Univ-of-combo-name-Public-Notice.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                Public Notice regarding: Violation of UGC Act, 1956 by "University of
                                                Colombo".
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        03/07/2025
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/7099777_Stamp-Desig-Compitition.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                letter regarding: Stamp Design Competition on UN@80.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        02/07/2025
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/8264407_UGC-SWAYAM-1696-course-letter.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                letter regarding: Requesting HEIs to review and map relevant SWAYAM
                                                courses
                                                to be offered in the July 2025 Semester, with their existing University
                                                curriculum.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        01/07/2025
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/6060758_NATMO.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                letter regarding: National Atlas and Thematic Mapping Organization
                                                (NATMO).
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        30/06/2025
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/5320626_Nomination-for-the-Sardar-Patel-Unity-Award_0001.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                letter regarding: Nomination for the Sardar Patel Unity Award 2025
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        27/06/2025
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/3758313_Invitation-for-proposals-reg.-NCMM.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>Invitation
                                                for proposals for recognition of Centre of Excellence under National
                                                Critical Mineral Mission (NCMM)
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        27/06/2025
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/1223890_CCTV-Hackathon-Letter.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                letter regarding: Participation in Nationwide Forensics Hackathon on
                                                "CCTV
                                                Surveillance Security and Forensics Hackathon 2.0""
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        25/06/2025
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/7295859_Samvidhan-Hatya-Diwas.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                letter regarding: Observation on Samvidhan Hatya Diwas.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        25/06/2025
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/7023232_Nasha-Mukt-Bharat-Pakhwada.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                letter regarding: नशा मुक्त भारत पखवाड़ा / Nasha Mukt Bharat Pakhwada.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        24/06/2025
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/9854575_Sadak-Suraksha-Abhiyan.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                letter regarding: Sadak Suraksha Abhiyan.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        20/06/2025
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/3891767_Letter-of-NEP-SAARTHIs.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                letter regarding: Nomination for NEP SAARTHIs.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        19/06/2025
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/4348743_Olympic-Day-2025.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                letter regarding: Celebration of Olympic Day on 23rd June 2025 in Higher
                                                Education Institutions.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        17/06/2025
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/5905884_World-No-Tobacco-Day.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                letter regarding: Observance of World No Tobacco Day (WNTD).
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        17/06/2025
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/4533652_circular-for-anti-ragging-regulations-2009.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                regulations on curbing the menace of ragging in higher educational
                                                institutions in order to prohibit, prevent and eliminate the scourge of
                                                ragging.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        17/06/2025
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/2641044_Establishing-animal-welfare-socities.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                letter regarding: Establishing Animal Welfare Societies in Higher
                                                Educational Institutions
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        13/06/2025
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/7708894_World-Blood-Donor-Day.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                letter regarding: Observance of World Blood Donor Day on 14th June,
                                                2025.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        13/06/2025
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/3027780_Show-Cause-Notice-to-University.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                letter regarding: Show Cause Notice for Non-Compliance with UGC
                                                Anti-Ragging
                                                Regulations 2009
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        10/06/2025
                                    </h6>

                                </marquee>
                            </div>
                        </div>
                        <div class="buttons">
                            <a data-animation-in="zoomIn" href="Notices.html"
                               class="button btn btn-md btn-default btn-outline-dark delay4 radius25">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box-container text-center" data-aos="fade-right" data-aos-delay="100">
                        <div class="box-title">
                        <span class="price-top bg_blue">
                            Circulars
                        </span>
                        </div>
                        <div class="box-body">
                            <div class="scroll-marquee">
                                <marquee direction="up" scrollamount="3" scrolldelay="200" behavior="scroll"
                                         onmouseover="this.stop();" onmouseout="this.start();" height="150">
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/0554849_Dearness-allowance.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                Circular regarding: Grant of Dearness Relief to Central Government
                                                pensioners/family pensioners revised rate effective from 01-07-2024
                                                shall be
                                                enhanced from 50% to 53%.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        19/11/2024
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/0934728_Circular-Grant-of-Dearness-Relief.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>Circular
                                                regarding: Grant of Dearness Relief to Central Government
                                                Pensioners/Family
                                                Pensioners revised rate effective from 01-01-2024
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        20/03/2024
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/6265488_DA-Circular.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>Circular
                                                regarding: Revision of rates of Dearness allowance to Central Government
                                                Employees effective from 01-01-2024.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        15/03/2024
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/9110892_Circular-immovable-movable-property.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>Circular
                                                regarding: Declaration of immovable/movable property etc. by the UGC
                                                employees under Regulation 18(1) of the UGC employees (Conduct)
                                                Regulations,
                                                1967.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        16/01/2024
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/7005067_Office-Memorandum001.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>Office
                                                Memorandum: Withdraw the circular regarding "Coverage under Central
                                                Civil
                                                Services (Pension) Rules, in place of the National Pension System, of
                                                those
                                                Central Government employees.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        07/11/2023
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/4369607_Circular-Vigilance-Awarness-Week.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                Circular regarding: Vigilance Awareness Week from 30th October 2023 to
                                                5th
                                                November, 2023.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        27/10/2023
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/5763563_circular001_30_Oct.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                Circular regarding: Revision of rates of Dearness Allowance to Central
                                                Government Employees effective from 01-07-2023 shall be enhanced from
                                                42% to
                                                46% of the Basic Pay.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        30/10/2023
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/2139137_CCS001.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                Circular regarding: Amendment in the CCS (Leave) Rules, 1972 consequent
                                                upon
                                                the implementation of the recommendation of 7 CPC.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        27/10/2023
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/8874866_Circular-Central-Civil-Services-Pension-Rules.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>Circular
                                                regarding: Coverage under Central Civil Services (Pension) Rules, in
                                                place
                                                of the National Pension System, of those Central Government employees
                                                who
                                                were recruited against the posts/vacancies advertised/notified for
                                                recruitment, on or before 22-12-2003
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        21/03/2023
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/8212051_Circular-payment-of-gratuity-Act-1972.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>Circular
                                                regarding: Applicability of Payment of Gratuity Act 1972 to educational
                                                institutions under the Ministry of Education
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        17/01/2023
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/3942969_Central-Civil-Services-(Implementation-of-National-Pension-System)-Rules.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                Notice regarding Options under Central Civil Services (Implementation of
                                                National Pension System) Rules 2021.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        17/11/2022
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/0064351_CIRCULAR_003-(1).pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>Options
                                                under Central Civil Services (Implementation of National Pension System)
                                                Rules, 2021 to avail benefits under the old pension scheme on the death
                                                of a
                                                Government servant covered under the National Pension System during
                                                service
                                                or his discharge from service on account of invalidation or disabl
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        03/11/2022
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/0684946_CIRCULAR-003-1.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                Circular regarding: Ceiling of Rs. 5 lakh on subscription to General
                                                provident Fund (GPF) in a financial year.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        28/10/2022
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/4159568_CIRCULAR_003.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>Grant
                                                of
                                                Dearness Relief to Central Government pensioners/family pensioners-
                                                revised
                                                rate effective from 01-07-2022 shall be enhanced from 34% to 38%
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        14/10/2022
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/5590166_Circular-DA-April.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                Circular regarding: Grant of Dearness Allowance (DA) to Central
                                                Government
                                                pensioners/family pensioners - Revised Rates effective from 01.01.2022
                                                shall
                                                be enhanced from the existing rate of 3l% to 34%.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        11/04/2022
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/3064138_Circular-DA-March.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                Circular regarding: Grant of Dearness Allowance (DA) to Central
                                                Government
                                                employees - Revised Rates effective from 01.01.2022 shall be enhanced
                                                from
                                                the existing rate of 3l% to 34%.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        07/04/2022
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/6594326_Declaration-property-Circular.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>Declaration
                                                of immovable/movable property etc. by the UGC employees under Regulation
                                                18(1) of the UGC employees (Conduct) Regulations, 1967
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        24/11/2021
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/3868541_DA-Circular.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>Grant
                                                of
                                                Dearness Allowance (DA) to the employees of the Central Government
                                                Revised
                                                Rates effective from 01-07-2021 shall be enhanced the existing rate of
                                                28%
                                                to 31%
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        01/11/2021
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/7350093_circular-Divyagjan-10-2021.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                Circular reg.: Grant of transport allowance at double the normal rates
                                                to
                                                Deaf and Dumb employed in Central Government.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        12/10/2021
                                    </h6>
                                    <panel>
                                        <panel class="text-justify">
                                            <a href="https://www.ugc.ac.in/pdfnews/8886434_calculation-of-Gratuity-and-Cash-payment-in-lieu-of-leave.pdf">
                                                <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                                Circular reg.: Govt. of India circular relating to Central Government
                                                employees retired during the period from January, 2020 to June, 2021-
                                                Calculation of Gratuity and cash payment in lieu of leave.
                                            </a>

                                        </panel>
                                    </panel>
                                    <h6>
                                        <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                        11/10/2021
                                    </h6>

                                </marquee>
                            </div>
                        </div>

                        <div class="buttons">
                            <a data-animation-in="zoomIn" href="Circulars.html"
                               class="button btn btn-md btn-default btn-outline-dark delay4 radius25">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box-container text-center" data-aos="fade-right" data-aos-delay="200">
                        <div class="box-title">
                        <span class="price-top bg_green">
                            International Cooperation
                        </span>
                        </div>
                        <div class="box-body">
                            <marquee direction="up" scrollamount="3" scrolldelay="200" behavior="scroll"
                                     onmouseover="this.stop();" onmouseout="this.start();" height="150"
                                     style="text-align: justify; max-height: 124px">
                                <panel>
                                    <panel class="text-justify">
                                        <a href="https://www.ugc.ac.in/pdfnews/0775288_Public-Notice---Equivalence-Regulations.pdf">
                                            <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                            Public
                                            Notice regarding: University Grants Commission (Recognition and Grant of
                                            Equivalence to Qualifications obtained from Foreign Educational
                                            Institutions)
                                            Regulations, 2025.
                                        </a>

                                    </panel>
                                </panel>
                                <h6>
                                    <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                    07/04/2025
                                </h6>
                                <panel>
                                    <panel class="text-justify">
                                        <a href="https://www.ugc.ac.in/pdfnews/8994238_MICEHL-BATISSE-Award-2025.pdf">
                                            <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                            Public
                                            Notice regarding: Call for 2025 Michel Batisse Award for Biosphere Reserve
                                            Management.
                                        </a>

                                    </panel>
                                </panel>
                                <h6>
                                    <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                    25/03/2025
                                </h6>
                                <panel>
                                    <panel class="text-justify">
                                        <a href="https://www.ugc.ac.in/pdfnews/5472033_Public-Notice-UNESCO-Japan.pdf">
                                            <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                            Public
                                            Notice regarding: Call for Nominations for the 2025 UNESCO-Japan Prize on
                                            Education for Sustainable Development.
                                        </a>

                                    </panel>
                                </panel>
                                <h6>
                                    <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                    24/03/2025
                                </h6>
                                <panel>
                                    <panel class="text-justify">
                                        <a href="https://www.ugc.ac.in/pdfnews/0804182_Public-Notice-Security-Clearance.pdf">
                                            <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>Public
                                            Notice regarding: Instructions on seeking Security Clearance by Educational
                                            Institutions.
                                        </a>

                                    </panel>
                                </panel>
                                <h6>
                                    <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                    12/02/2025
                                </h6>
                                <panel>
                                    <panel class="text-justify">
                                        <a href="https://www.ugc.ac.in/pdfnews/6005483_Public-Notice-G20-Talent-Visa.pdf">
                                            <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                            Public
                                            Notice regarding: G20 Talent Visa
                                        </a>

                                    </panel>
                                </panel>
                                <h6>
                                    <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                    17/12/2024
                                </h6>
                                <panel>
                                    <panel class="text-justify">
                                        <a href="https://www.ugc.ac.in/pdfnews/4077347_INCP-2-Public-Notice.pdf">
                                            <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>Public
                                            Notice regarding: List of eligible proposals by Indian and Norwegian
                                            experts.
                                        </a>

                                    </panel>
                                </panel>
                                <h6>
                                    <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                    06/12/2024
                                </h6>
                                <panel>
                                    <panel class="text-justify">
                                        <a href="https://www.ugc.ac.in/pdfnews/9674282_PC-Mahalanobis-International-Award.pdf">
                                            <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>Public
                                            Notice regarding: Call for nominations for Prof. P. C. Mahalanobis
                                            International
                                            Award in Statistics for the year 2025.
                                        </a>

                                    </panel>
                                </panel>
                                <h6>
                                    <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                    22/10/2024
                                </h6>
                                <panel>
                                    <panel class="text-justify">
                                        <a href="https://www.ugc.ac.in/pdfnews/7491216_UNESCO-AI-Fozan.pdf">
                                            <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>Public
                                            Notice regarding: UNESCO-AI Fozan International Prize for Promotion of Young
                                            Scientists in Science, Technology, Engineering and Mathematics.
                                        </a>

                                    </panel>
                                </panel>
                                <h6>
                                    <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                    22/10/2024
                                </h6>
                                <panel>
                                    <panel class="text-justify">
                                        <a href="https://www.ugc.ac.in/pdfnews/0831363_Public-Notice---Summer-Internship-in-USA.pdf">
                                            <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>Public
                                            Notice regarding: Announcement of the Khorana Program for Scholars 2025 -
                                            Summer
                                            Internship Opportunity in the USA.
                                        </a>

                                    </panel>
                                </panel>
                                <h6>
                                    <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                    26/09/2024
                                </h6>
                                <panel>
                                    <panel class="text-justify">
                                        <a href="https://www.ugc.ac.in/pdfnews/4043441_India_france-year-of-innovation.pdf">
                                            <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                            Public
                                            Notice regarding: India-France year of Innovation.
                                        </a>

                                    </panel>
                                </panel>
                                <h6>
                                    <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                    18/06/2024
                                </h6>
                                <panel>
                                    <panel class="text-justify">
                                        <a href="https://www.ugc.ac.in/pdfnews/7145009_INCP2-Letter.pdf">
                                            <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                            Public
                                            Notice regarding: Call for Applications for Indo-Norwegian Cooperation
                                            Programme
                                            in Higher Education and Research-INCP2
                                        </a>

                                    </panel>
                                </panel>
                                <h6>
                                    <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                    06/06/2024
                                </h6>
                                <panel>
                                    <panel class="text-justify">
                                        <a href="https://www.ugc.ac.in/pdfnews/5246872_UNESCO-Prize-for-Girls.pdf">
                                            <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                            Public
                                            Notice regarding: Extension of date for submission of nominations for the
                                            2024
                                            UNESCO Prize for Girls' and Women's Education.
                                        </a>

                                    </panel>
                                </panel>
                                <h6>
                                    <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                    29/05/2024
                                </h6>
                                <panel>
                                    <panel class="text-justify">
                                        <a href="https://www.ugc.ac.in/pdfnews/0054521_List-of-Eligible-Indian-Institution-for-Collaboration.pdf">
                                            <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>List of
                                            Eligible Indian institutions to collaborate as per Regulations on Academic
                                            Collaboration between Indian and Foreign HEIs to offer Twinning, Joint
                                            Degree
                                            and Dual Degree Programmes in 2022 with foreign institutions.
                                        </a>

                                    </panel>
                                </panel>
                                <h6>
                                    <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                    14/05/2024
                                </h6>
                                <panel>
                                    <panel class="text-justify">
                                        <a href="https://www.ugc.ac.in/pdfnews/3514110_UNESCO-Prize.pdf">
                                            <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>Public
                                            Notice regarding: Extension of date for submission of nominations for the
                                            2024
                                            UNESCO prize for Girls' and Women's Education.
                                        </a>

                                    </panel>
                                </panel>
                                <h6>
                                    <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                    06/05/2024
                                </h6>
                                <panel>
                                    <panel class="text-justify">
                                        <a href="https://www.ugc.ac.in/pdfnews/6358114_Public-Notice-UNESCO.pdf">
                                            <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>Public
                                            notice regarding: Call for Candidates for the 2024 UNESCO International
                                            Centre
                                            of Martial Arts (ICM) for Youth Development and Engagement.
                                        </a>

                                    </panel>
                                </panel>
                                <h6>
                                    <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                    19/04/2024
                                </h6>
                                <panel>
                                    <panel class="text-justify">
                                        <a href="https://www.ugc.ac.in/pdfnews/1406554_DUO-Sweden-2024-Notice.pdf">
                                            <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>UGC
                                            public
                                            notice regarding: Call for Applications for the ASEM DUO-Sweden Programme
                                            2024.
                                        </a>

                                    </panel>
                                </panel>
                                <h6>
                                    <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                    12/04/2024
                                </h6>
                                <panel>
                                    <panel class="text-justify">
                                        <a href="https://www.ugc.ac.in/pdfnews/9979456_Romamnian-Scholarship.pdf">
                                            <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>Public
                                            Notice regarding: Romanian Government offers scholarship to Indian Students.
                                        </a>

                                    </panel>
                                </panel>
                                <h6>
                                    <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                    12/04/2024
                                </h6>
                                <panel>
                                    <panel class="text-justify">
                                        <a href="https://www.ugc.ac.in/pdfnews/8942488_Public-Notice-SAU.pdf">
                                            <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>Public
                                            Notice regarding: Admission Notice of South Asian University for the
                                            Academic
                                            Year 2024-25.
                                        </a>

                                    </panel>
                                </panel>
                                <h6>
                                    <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                    05/04/2024
                                </h6>
                                <panel>
                                    <panel class="text-justify">
                                        <a href="https://www.ugc.ac.in/pdfnews/1358899_Public-Notice-UNESCO-prize-for-girls-and-womens-education.pdf">
                                            <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>Call for
                                            nominations for the 2024 UNESCO Prize for Girls and Women's Education
                                        </a>

                                    </panel>
                                </panel>
                                <h6>
                                    <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                    28/03/2024
                                </h6>
                                <panel>
                                    <panel class="text-justify">
                                        <a href="https://www.ugc.ac.in/pdfnews/4691191_Public-Notice-DUO-BelgiumWallonia-Brussels-2024.pdf">
                                            <i class="fa fa-pencil-square-o orange-text" aria-hidden="true"></i>Call for
                                            Application for DUO-Belgium/Wallonia-Brussels 2024.
                                        </a>

                                    </panel>
                                </panel>
                                <h6>
                                    <i class="fa fa-calendar orange-text" aria-hidden="true"></i> Published on :
                                    01/03/2024
                                </h6>

                            </marquee>
                        </div>
                        <div class="buttons">
                            <a data-animation-in="zoomIn" href="incorp.html"
                               class="button btn btn-md btn-default btn-outline-dark delay4 radius25">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="creative-tables">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12">
                    <div class="tables" data-aos="fade-right" data-aos-delay="200">
                        <div class="table1">
                            <div class="table-header">
                                <h2>Helpline Number @UGC</h2>
                            </div>
                            <div class="table-body box_custom">
                                <marquee direction="up" scrollamount="3" scrolldelay="200" behavior="scroll"
                                         onmouseover="this.stop();" onmouseout="this.start();" height="170">
                                <span>
                                                    <h5>
                                                        UGC Office Helpline:011-23604446

                                                                </h5><h5>
                                                                    ,<br>011-23604200
                                                                </h5>



                                                    <hr>
                                                    <h5>
                                                        Covid -19 Helpline:1800-111-657

                                                                </h5><h5>Email: covid19help.ugc@gov.in</h5>



                                                    <hr>
                                                    <h5>
                                                        Scholarship/Fellowship Helpline:011-23604505

                                                                </h5><h5>Email: netjrf-ugc@gov.in</h5>



                                                    <hr>
                                                    <h5>
                                                        National Scholarship Portal Helpline:0120-6619540

                                                                </h5><h5>Email: helpdesk@nsp.gov.in</h5>



                                                    <hr>
                                                    <h5>
                                                        UGC e-Samadhan Portal:1800-111-656 (General Inquiry)

                                                                </h5><h5>
                                                                    ,<br>+91 79-2326-8279 (For Technical Queries)
                                                                </h5>



                                                    <hr>
                                                    <h5>
                                                        Anti-ragging Helpline:1800-180-5522

                                                                </h5><h5>Email: helpline@antiragging.in</h5>



                                                    <hr>


                                </span>
                                </marquee>
                            </div>
                        </div>
                        <div class="table-bg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12">
                    <div class="tables" data-aos="fade-right">
                        <div class="table1">
                            <div class="table-header">
                                <h2>e-Samadhaan / Anti Ragging</h2>
                            </div>
                            <div class="table-body box_custom">
                                <div class="antiRagging">
                                    <a href="https://www.antiragging.in/" target="_blank">
                                        <img src="{{asset('assets/img/MainPage/anti-raging.png')}}"
                                             class="img-responsive"
                                             alt="UGC Anti-ragging">
                                    </a>
                                    <h5>
                                        <span>24x7 Helpline Number</span><br>
                                        1800-180-5522 (Toll Free)
                                    </h5>
                                </div>
                                <center>
                                    <a href="https://samadhaan.ugc.ac.in/Home/Index" target="_blank">
                                        <img src="{{asset('assets/img/MainPage/E-samadhan_Logo_New.png')}}"
                                             class="img-responsive"
                                             alt="UGC Student Grievance" style="width: 80%;">

                                    </a>
                                </center>

                            </div>

                        </div>
                        <div class="table-bg">
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12">
                    <div class="tables" data-aos="fade-right" data-aos-delay="400">
                        <div class="table1">
                            <div class="table-header">
                                <h2>RTIs</h2>
                            </div>
                            <div class="table-body box_custom">
                                <marquee direction="up" scrollamount="3" scrolldelay="200" behavior="scroll"
                                         onmouseover="this.stop();" onmouseout="this.start();" height="170">
                                    <ul class="custom_ul">
                                        <li>
                                        <span>
                                            <i class="fa fa-check-circle fa-sm"></i>
                                        </span><a href="subpage/ErrorPage/ErrorPage/index669b.html" target="_blank">Right
                                                to Information Act</a>

                                        </li>
                                        <hr>
                                        <li>
                                        <span>
                                            <i class="fa fa-check-circle fa-sm"></i>
                                        </span><a href="subpage/ErrorPage/ErrorPage/index669b.html" target="_blank">
                                                Consolidated Quarterly Return from CPIOs of University
                                                Grants
                                                Commission, New Delhi
                                            </a>
                                        </li>
                                        <hr>
                                        <li>
                                        <span>
                                            <i class="fa fa-check-circle fa-sm"></i>
                                        </span><a href="subpage/ErrorPage/ErrorPage/index669b.html" target="_blank">
                                                Information to be published in pursuance of section 4(1)(b)
                                                of
                                                Right to Information Act, 2005 (BEING UPDATED)
                                            </a>
                                        </li>
                                        <hr>
                                        <li>
                                        <span>
                                            <i class="fa fa-check-circle fa-sm"></i>
                                        </span><a href="subpage/ErrorPage/ErrorPage/index669b.html" target="_blank">
                                                Central Public Information Officer &amp; Appellate Authority as
                                                on
                                                22.11.2022
                                            </a>
                                        </li>
                                    </ul>
                                </marquee>
                                <center>
                                    <strong>
                                        <a href="rti.html" target="_blank">
                                            View
                                            More
                                        </a>
                                    </strong>
                                </center>
                            </div>


                        </div>
                        <div class="table-bg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section7">
        <div class="container">
            <div class="title padding">
                <h2>
                    <span class="red-color">Social Media</span> Engagements
                </h2>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-4 col-xs-12" style="display:none;">
                    <div class="twitterBox">
                        <center>
                            <h4 class="text-center twitter_box">
                                <img src="{{asset('assets/img/MainPage/twitter_x_new_logo_x_round_circle_blue_icon_256074.png')}}"
                                     style="height: 30px;">

                            </h4>
                        </center>
                        <div class="box_shadow" style="overflow-y: hidden;">
                            <div class="twitter-timeline twitter-timeline-rendered"
                                 style="display: flex; width: 100%; max-width: 100%; margin-top: 0px; margin-bottom: 0px;"
                                 data-twitter-extracted-i1752614804848634465="true">


                                <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true"
                                        allowfullscreen="true" class=""
                                        style="position: static; visibility: visible; width: 100%; height: 244px; display: block; flex-grow: 1;"
                                        title="Twitter Timeline"
                                        src="https://twitter.com/home?ref_src=twsrc%5Etfw"></iframe>
                            </div>
                            {{--                        <script async="" src="Scripts/widgets.js" charset="utf-8"></script>--}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-xs-12">
                    <div class="facebookBox">
                        <h4 class="text-center">
                            <i class="fa-brands fa-facebook-f"></i>
                        </h4>
                        <div class="box_shadow" style="overflow-y: hidden; overflow-x: hidden;">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FUniversityGrantsCommission&amp;tabs=timeline&amp;width=360&amp;height=245&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId"
                                    width="360" height="245" style="border: none; overflow: hidden" scrolling="no"
                                    frameborder="0" allowfullscreen="true"
                                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-xs-12">
                    <div class="youtubeBox">
                        <h4 class="text-center">
                            <i class="fa-brands fa-youtube"></i>
                        </h4>
                        <div class="box_shadow">
                            <iframe width="100%" height="242"
                                    src="https://www.youtube.com/embed/watch?v=U-voWzM9Jfs&amp;list=UULFlbbWYTjSiXnhShJ0Z1-05g&amp;index=1"
                                    frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="partners style2">
        <div class="container">
            <div class="title padding">
                <h2>
                    <span class="red-color">Digital </span>Initiatives
                </h2>
            </div>
        </div>
        <div class="marquee-container">
            <div class="marquee-track marquee-left">
                <div class="scroll-card">
                    <img class="marquee-logo" src="{{asset('assets/img/mainpage/datagov_logo.png')}}"/>
                </div>
                <div class="scroll-card">
                    <img class="marquee-logo" src="{{asset('assets/img/mainpage/DEB.jpg')}}"/>
                </div>
                <div class="scroll-card">
                    <img class="marquee-logo" src="{{asset('assets/img/mainpage/dialgov-logo.png')}}"/>
                </div>
                <div class="scroll-card">
                    <img class="marquee-logo" src="{{asset('assets/img/mainpage/digital_india.png')}}"/>
                </div>
                <div class="scroll-card">
                    <img class="marquee-logo" src="{{asset('assets/img/mainpage/E-samadhan_Logo_New.png')}}"/>
                </div>
                <div class="scroll-card">
                    <img class="marquee-logo" src="{{asset('assets/img/mainpage/india_gov_logo.png')}}"/>
                </div>
                <div class="scroll-card">
                    <img class="marquee-logo" src="{{asset('assets/img/mainpage/logo-1.jpg')}}"/>
                </div>
                <div class="scroll-card">
                    <img class="marquee-logo" src="{{asset('assets/img/mainpage/logo-2.jpg')}}"/>
                </div>
                <div class="scroll-card">
                    <img class="marquee-logo" src="{{asset('assets/img/mainpage/logo-3.jpg')}}"/>
                </div>
                <div class="scroll-card">
                    <img class="marquee-logo" src="{{asset('assets/img/mainpage/logo-4.jpg')}}"/>
                </div>
                <div class="scroll-card">
                    <img class="marquee-logo" src="{{asset('assets/img/mainpage/logo-5.jpg')}}"/>
                </div>
                <div class="scroll-card">
                    <img class="marquee-logo" src="{{asset('assets/img/mainpage/m1.png')}}"/>
                </div>
                <div class="scroll-card">
                    <img class="marquee-logo" src="{{asset('assets/img/mainpage/my_gov_logo.png')}}"/>
                </div>
                <div class="scroll-card">
                    <img class="marquee-logo" src="{{asset('assets/img/mainpage/my_visit.png')}}"/>
                </div>
                <div class="scroll-card">
                    <img class="marquee-logo" src="{{asset('assets/img/mainpage/NTA.jpg')}}"/>
                </div>
                <div class="scroll-card">
                    <img class="marquee-logo" src="{{asset('assets/img/mainpage/onlineservice_logo.png')}}"/>
                </div>
                <div class="scroll-card">
                    <img class="marquee-logo" src="{{asset('assets/img/mainpage/rti_logo.png')}}"/>
                </div>
                <div class="scroll-card">
                    <img class="marquee-logo" src="{{asset('assets/img/mainpage/UAMP.jpg')}}"/>
                </div>
            </div>
        </div>
    </div>

@endsection