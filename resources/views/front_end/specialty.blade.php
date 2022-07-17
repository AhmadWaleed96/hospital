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
<section class="home" id="home" style="margin-top: -250px;">

<div class="container">

    <div class="row min-vh-100 align-items-center text-center text-md-left">

        <div class="col-md-6 pl-md-5 content" data-aos="fade-left">
         <h2 style="font-family: 'Cairo', sans-serif;text-align: right;margin-top: 10px;font-size: 40px;background-color: rgb(90, 221, 101);padding-right: 20px;color: azure;margin-right: -30px;width: 500px;">تخصـصـات مستشفى الاقصى</h2>                  

        </div>

    </div>

</div>

</section>




<!-- about -->
<div id="about"  class="about" style="margin-top: -250px;" >
<div class="container">
   <div class="row d_flex">
      <div class="col-md-7">
         <div class="titlepage">
            <h2 style="font-family: 'Cairo', sans-serif;text-align: right;margin-top: 10px;">التخصصات الطبية </h2>                  
               <span></span>
            <p style="font-family: 'Cairo', sans-serif;text-align: right;">  قسم جراحة العظام     , العلاج  الطبيعي ,  قسم الطوارئ  , الاستقبال العمليات  الصغرى  , قسم العيون ,  قسم الجراحة   ,  الانف والاذن والحنجرة , قسم الاشعة  , قسم الباطنة , المختبرات والتحاليل الطبية, الصيدلية .
               المنظار , العمليات الجراحية بجميع انواعها.
              </p>
         </div>
      </div>
      <div class="col-md-5">
         <div class="about_img">
            <figure><img src="asset/images/tr2.svg" alt="#"/></figure>
         </div>
      </div>
   </div>
</div>
</div>
<!-- end about -->

<!--  contact -->

<div id="about"  class="about" style="margin-top: -70px;" >
<div class="container">
   <div class="row d_flex">
      <div class="col-md-7">
         <div class="titlepage">
            <h2 style="font-family: 'Cairo', sans-serif;text-align: right;">مشـاريع مستقـبلية </h2>                  
               <span></span>
            <p style="font-family: 'Cairo', sans-serif;text-align: right;">يسعي مستشفى الأقصى الي تقديم أرقي خدمة طبية وذلك من خلال استقدام الكفاءات البشرية وتأمين الاجهزة الطبية ذات التقنية العالية وتوفير المستلزمات الطبية الكاملة في المستشفى و كل من شأنه رفع وتسهيل مراجعة المريض للمستشفى  وفي هذا الصدد يعتزم المستشفى القيام بمشروعات جديدة ، وإدخال جهاز رنين+   C R لتوفير خدمه لجميع المواطنين 
               </p>
         </div>
      </div>
      <div class="col-md-5">
         <div class="about_img">
            <figure><img src="asset/images/tr7.svg" alt="#"/></figure>
         </div>
      </div>
   </div>
</div>
</div>
<!-- end contact -->

<footer class="text-center">
        <p>Eng_mosa hmd &copy; 2021-2022</p>
    </footer>
    <!-- End Footer -->

    <!-- jQuery -->
    <script src="asset/js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap js -->
    <script src="asset/js/bootstrap.min.js"></script>
    </body>
</html>

