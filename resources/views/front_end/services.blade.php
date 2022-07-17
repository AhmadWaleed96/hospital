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

<section class="home" id="home" style="margin-top:-200px">

<div class="container">

    <div class="row min-vh-100 align-items-center text-center text-md-left">

        <div class="col-md-6 pl-md-5 content" data-aos="fade-left">
         <h2 style="font-family: 'Cairo', sans-serif;text-align: right;font-size: 40px;background-color: rgb(3, 119, 13);padding-right: 20px;color: azure;margin-right: -30px;">نبذة عن  مستشفى الاقصى</h2>                  

        </div>

    </div>

</div>

</section>



<!-- about -->
<div id="about"  class="about" style="margin-top:-240px" >
<div class="container">
   <div class="row d_flex">
      <div class="col-md-7">
         <div class="titlepage">
            <h2 style="font-family: 'Cairo', sans-serif;text-align: right;margin-top: 10px;">نشـأتـــه</h2>                  
               <span></span>
            <p style="font-family: 'Cairo', sans-serif;text-align: right;">جاء إنشاء مستشفى الاقصى الطبي في مدينة دير البلح تلبية لحاجة المواطنين الملحة في المنطقة الوسطي في هذا المجال ، حيث لا يوجد إلا مستشفى واحد هو ( مستشفى شهداء الأقصى ) ولا يتسع إلا إلي خمسين شخص مع العلم أن المحافظة الوسطي تعداد سكانها يصل الي (250) الف نسمة ، إضافة إلي تدني المستوي المعيشي للأفراد داخل المجتمع الفلسطيني بسبب حصار الاحتلال علي شعبنا المضطهد.</p>
         </div>
      </div>
      <div class="col-md-5">
         <div class="about_img">
            <figure><img src="asset/images/tr.svg" alt="#"/></figure>
         </div>
      </div>
   </div>
</div>
</div>
<!-- end about -->


<!--  contact -->

<div id="about"  class="about" >
<div class="container">
   <div class="row d_flex">
      <div class="col-md-7">
         <div class="titlepage">
            <h2 style="font-family: 'Cairo', sans-serif;text-align: right;margin-top: 10px;">لماذا مستشفى الاقصى </h2>                  
               <span></span>
            <p style="font-family: 'Cairo', sans-serif;text-align: right;">برزت الحاجة الي مستشفى الاقص الطبي في سنوات الانتفاضة بسبب سوء الحياة الاقتصادية  للمواطنين الذين يعانون من البطالة ، وإضافة الي الارتفاع الكبير في نسبة عدد السكان ، والضغط علي المؤسسات  الرسمية  في هذا المجال ، والذي أصبح لا يلبي حاجات المواطن. 
               فكان مستشفى  الاقصى تلبية لحاجات المواطنين الطبية والعلمية والعمل علي الحد من انتشار الامراض والاوبئة بين المواطنين فأصبح يقدم خدماته إلي اكثر من (90) الف حالة سنويا.
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


<!--  footer -->

<div id="about"  class="about" >
<div class="container">
   <div class="row d_flex">
      <div class="col-md-7">
         <div class="titlepage">
            <h2 style="font-family: 'Cairo', sans-serif;text-align: right;margin-top: 10px;">نشاطات المستشفى </h2>                  
               <span></span>
            <p style="font-family: 'Cairo', sans-serif;text-align: right;">يقدم المستشفى الكشف الطبي والعلاج لكافة شرائح المجتمع بصورة عامة فضلا عن أسعار المستشفى الرمزية للمقتدرين والي الاسر الفقيرة والمحتاجة مجانا ، حيث  يعمل المستشفى علي الارتقاء بنوع الخدمات الطبية  والصحية  في قطاع غزة ، و يساهم في التخفيف من معاناة  المواطنين  بسبب  ندرة الخدمات  الطبية  مقارنة بعدد السكان و المساهمة في توفير الادوية بأسعار مقبولة للمواطنين ، لجعلها في متناول أيديهم للحد من انتشار الامراض و المساهمة في تنمية المجتمع المحلي في نشر الثقافة الصحية ، العمل المتواصل لإيجاد كادر طبي متميز له القدرة علي تشخيص ومعالجة الامراض قبل مضاعفتها .
               العمل علي الارتقاء بالأقسام الطبية والتخصصات بما يتناسب والتطلعات المستقبلية وحاجة المواطنين إليها.
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

