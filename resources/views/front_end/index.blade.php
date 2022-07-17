<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title style="font-family: 'Cairo', sans-serif;" >مستفي الاقصى</title>
    <!-- favicon -->
    <link rel="icon" type="asset/image/png" href="asset/images/logo.png">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <!-- Bootstrap RTL -->
    <link rel="stylesheet" href="asset/css/bootstrap-rtl.css">
    <!--  Custom css  -->
    <link rel="stylesheet" href="asset/css/custom.css?v=<?php echo time(); ?>">
    <!-- Font -->
    <link rel="stylesheet" href="asset/font/droid-kufi.css">

    <link rel="stylesheet" href="asset/css/lightbox.min.css">

    <script type="text/javascript" src="asset/js/lightbox-plus-jquery.min.js"></script>

</head>

<body>

    <!--    Start navbar    -->
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
            <a href="index.php" class="navbar-brand"><img width="80px" src="asset/images/logo.jpg"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{url('/')}}" class="nav-link">الرئسية</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/specialty')}}" class="nav-link">تخصصاتنا</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/dates')}}" class="nav-link">مواعيدنا</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/servicese')}}" class="nav-link">من نحن</a>
                    </li>
                        <button type="button" class="btn btn-outline-success"><a href="{{route('login')}}" class="nav-link">تسجيل الدخول </a></button>


                </ul>
            </div>
        </div>
    </nav>
    <!--    End navbar    -->
<section class="home" id="home">

<div class="container">

    <div class="row min-vh-100 align-items-center text-center text-md-left">

        <div class="col-md-6 pr-md-5" data-aos="zoom-in">
            <img src="asset/images/Medicine-bro.svg" width="100%" alt="">
        </div>

        <div class="col-md-6 pl-md-5 content" data-aos="fade-left">
            <h1 style="font-size: 30px;"><span>مسـتشفى الاقصى </span></h1>
            <h3>نقدم خدمة عالية المستوى لضمان راحتك</h3>
            <a href="services.php"><button class="button">المزيد </button></a>
        </div>

    </div>

</div>

</section>

<!-- End banar -->



<!-- Start about -->
<section class="about" id="about">

<div class="container">

    <div class="row min-vh-100 align-items-center">

        <div class="col-md-6 d-none d-md-block" data-aos="fade-left">
            <img src="asset/images/Ambulance-bro.svg" width="100%" alt="">
        </div>


        <div class="col-md-6 content" data-aos="fade-left" style="direction: ltr;">

            <div class="box" >

            <h3 style="margin-left: 260px;color: rgb(21, 226, 35);"> <i class="fas fa-ambulance"></i> قسم خدمات المرضى </h3>
                <p>الإشراف على راحة المرضى  بالأقسام وكذالك المراجعين للعيادات الخارجية</p>
            </div>

            <div class="box">
                <h3 style="margin-left: 270px; color: rgb(21, 226, 35);"> <i class="fas fa-procedures"></i>قسم خدمات الطوارىء </h3>
                <p  style="margin-left: -40px;">نقدم لكم خدمة استقبال الحالة الطارئ على مدار الـ 24 ساعة  </p>
            </div>

            <div class="box">
                <h3 style="margin-left: 220px;color: rgb(21, 226, 35);"> <i class="fas fa-stethoscope"></i> قسم التخصصات المتعددة </h3>
                <p>نقدم لكم كافة التخصصات الطبية بأفضل واكفأ الاطباء </p>
            </div>

        </div>


    </div>

</div>

</section>


<!-- End aboute -->


<!-- Start about2 -->
<section class="facility" id="facility">

<div class="container">

<h1 class="heading"><span>'</span> مستشفانا <span>'</span></h1>

<div class="box-container">

    <div class="box" data-aos="zoom-in">
        <a href="asset/images/img1.jpg" title="our team">
            <img src="asset/images/21.jpg" alt="">
        </a>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="asset/images/img2.jpg" title="our lab">
            <img src="asset/images/4.jpg" alt="">
        </a>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="asset/images/img3.jpg" title="emergency rooms">
            <img src="asset/images/45.jpg" alt="">
        </a>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="asset/images/img4.jpg" title="expert doctors">
            <img src="asset/images/033.jpg" alt="">
        </a>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="asset/images/img5.jpg" title="expert doctors">
            <img src="asset/images/0.jpg" alt="">
        </a>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="asset/images/img6.jpg" title="emergency rooms">
            <img src="asset/images/02.jpg" alt="">
        </a>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="asset/images/img7.jpg" title="expert doctors">
            <img src="asset/images/06.jpg" alt="">
        </a>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="asset/images/img8.jpg" title="emergency rooms">
            <img src="asset/images/08.jpg" alt="">
        </a>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="asset/images/img9.jpg" title="enough beds">
            <img src="asset/images/20.jpg" alt="">
        </a>
    </div>

</div>

</div>

</section>
<!-- End about2 -->

<footer class="text-center">
    <strong>    جميع الحقوق محفوظة  {{ now()->year }}-{{ now()->year+1 }} &copy;<a href="#">{{ env('APP_NAME') }}</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> {{ env('APP_VERSION') }}
    </footer>
    <!-- End Footer -->

    <!-- jQuery -->
    <script src="asset/js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap js -->
    <script src="asset/js/bootstrap.min.js"></script>
    </body>
</html>

