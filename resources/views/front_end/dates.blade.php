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


<section class="home" id="home" style="margin-top: -210px;">

<div class="container">

    <div class="row min-vh-100 align-items-center text-center text-md-left">

        <div class="col-md-6 pl-md-5 content" data-aos="fade-left">
         <h2 style="font-family: 'Cairo', sans-serif;text-align: right;margin-top: 10px;font-size: 30px;background-color: rgb(3, 119, 13);padding-right: 20px;color: azure;margin-right: -30px;width: 580px;">مواعـيد العيادات الخارجية  مستشفى الاقصى </h2>                  

        </div>

    </div>

</div>

</section>

<div class="container" style="margin-top: -230px;">

<table class="table" style="font-family: 'Cairo', sans-serif;">
   <thead>
         <tr>
               <th scope="col">#</th>
               <th scope="col">العيادة</th>
               <th scope="col">السبت</th>
               <th scope="col">الاحد</th>
               <th scope="col">الاثنين</th>
               <th scope="col">الثلاثاء</th>
               <th scope="col">الاربعاء</th>
               <th scope="col">الخميس</th>

         </tr>
   </thead>
   <tbody>
      
         <tr>
               <td scope="row">1</td>
               <td>عيادة الجراحة</td>
               <td>--- </td> 
               <td>إستشاري د. إياد الجبري</td>
               <td>إستشاري د. أحمد الناجي</td>
               <td>أخصائي د. حامد حجازي</td>
               <td>إستشاري د. إياد الجبري</td>
               <td>إستشاري د. أحمد الناجي</td>
         </tr>
         <tr>
               <td scope="row">2</td>
               <td>عيادة العظام</td>
               <td>استشاري د. محمد السرحي</td>
               <td>أخصائي د. ياسر الزعزوع</td>
               <td>استشاري د. بسام مقداد</td>
               <td>أخصائي د. ياسر الزعزوع</td>
               <td>أخصائي د. ياسر الزعزوع</td>
               <td>استشاري د. بسام مقداد</td>
         </tr>
         <tr>
               <td scope="row">3</td>
               <td>عيادة العيون</td>
               <td>أخصائي د. أسامة حسن</td>
               <td>أخصائي أحمد الحاطي</td>
               <td>أخصائي د. أسامة حسن</td>
               <td>أخصائي أحمد الحاطي</td>
               <td>أخصائي أحمد الحاطي</td>
               <td>أخصائي د. عمرو أبو عمارة</td>
         </tr>
         <tr>
               <td scope="row">4</td>
               <td>عيادة القلب</td>
               <td>---</td>
               <td>---</td>
               <td>---</td>
               <td>---</td>
               <td>أخصائي د. ناصر حمد</td>
               <td>---</td>
         </tr>
         <tr>
               <td scope="row">5</td>
               <td>عيادة انف اذن وحنجرة</td>
               <td>---</td>
               <td>أخصائي د. ناظم أبو مراحيل</td>
               <td>---</td>
               <td>أخصائي د. عبد الفتاح بدوان</td>
               <td>---</td>
               <td>إستشاري د. عيسى مسلم</td>
         </tr>
         <tr>
               <td scope="row">6</td>
               <td>عيادة جراحة الاطفال</td>
               <td>Christ</td>
               <td>أخصائي د. سلامة أبو ندى</td>
               <td>---</td>
               <td>أخصائي د. سلامة أبو ندى</td>
               <td>---</td>
               <td>---</td>
         </tr> 
          <tr>
               <td scope="row">7</td>
               <td>عيادة قلب الاطفال</td>
               <td>---</td>
               <td>---</td>
               <td>---</td>
               <td>د. أيمن الزهار</td>
               <td>---</td>
               <td>---</td>
         </tr> 
          <tr>
               <td scope="row">8</td>
               <td>عيادة الباطنة </td>
               <td>د.رنا كراز</td>
               <td>---</td>
               <td>استشاري د.علاء أبو الريش</td>
               <td>د.رنا كراز</td>
               <td>استشاري د.علاء أبو الريش</td>
               <td>---</td>
         </tr> 
          <tr>
               <td scope="row">9</td>
               <td>عيادة الأعصاب</td>
               <td>د. مصباح تايه</td>
               <td>---</td>
               <td>د. مصباح تايه</td>
               <td>---</td>
               <td>---</td>
               <td>---</td>
         </tr> 
          <tr>
               <td scope="row">10</td>
               <td>عيادة طب الأسرة</td>
               <td>د. بسام بشير</td>
               <td>د. بسام بشير</td>
               <td>د. بسام بشير</td>
               <td>د. بسام بشير</td>
               <td>د. بسام بشير</td>
               <td>د. بسام بشير</td>
         </tr>
         <tr>
               <td scope="row">11</td>
               <td>عيادة النساء والولادة</td>
               <td>---</td>
               <td>أخصائي د. سلوى أبو سليم</td>
               <td>أخصائي د. سلوى أبو سليم</td>
               <td>أخصائي د. سلوى أبو سليم</td>
               <td>أخصائي د. سلوى أبو سليم</td>
               <td>---</td>
         </tr> 
          <tr>
               <td scope="row">12</td>
               <td>عيادة الجلدية</td>
               <td>أخصائي د. رائد حسين</td>
               <td>أخصائي د. رائد حسين</td>
               <td>أخصائي د. رائد حسين</td>
               <td>أخصائي د. رائد حسين</td>
               <td>أخصائي د. رائد حسين</td>
               <td>أخصائي د. رائد حسين</td>
         </tr> 
          <tr>
               <td scope="row">13</td>
               <td>عيادة الأسنان رجال</td>
               <td>د. ساهر حسين</td>
               <td>د. ساهر حسين</td>
               <td>د. ساهر حسين</td>
               <td>د. ساهر حسين</td>
               <td>د. ساهر حسين</td>
               <td>---</td>
         </tr>
         <tr>
               <td scope="row">14</td>
               <td>عيادة الاسنان نساء</td>
               <td>د. دعاء أبو قاسم</td>
               <td>د. دعاء أبو قاسم</td>
               <td>د. دعاء أبو قاسم</td>
               <td>د. دعاء أبو قاسم</td>
               <td>د. دعاء أبو قاسم</td>
               <td>د. دعاء أبو قاسم</td>
         </tr> 
          <tr>
               <td scope="row">15</td>
               <td>عيادة التغذية</td>
               <td>---</td>
               <td>---</td>
               <td>---</td>
               <td>---</td>
               <td>أخصائية د. ريم عبد الهادي</td>
               <td>---</td>
         </tr> 
          <tr>
               <td scope="row">16</td>
               <td>عيادة المسالك البولية</td>
               <td>أخصائي د. أكرم أبو زعيتر</td>
               <td>أخصائي د. أكرم أبو زعيتر</td>
               <td>أخصائي د. أكرم أبو زعيتر</td>
               <td>أخصائي د. أكرم أبو زعيتر</td>
               <td>أخصائي د. أكرم أبو زعيتر</td>
               <td>أخصائي د. أكرم أبو زعيتر</td>
         </tr>
         <tr>
               <td scope="row">17</td>
               <td>التصوير بالاتراسوند</td>
               <td>---</td>
               <td>أخصائي د. جميل بشير</td>
               <td>أخصائي د. جميل بشير</td>
               <td>أخصائي د. جميل بشير</td>
               <td>أخصائي د. جميل بشير</td>
               <td>أخصائي د. جميل بشير</td>
         </tr>
   </tbody>
</table>
</div>
<!--  footer -->
<footer class="text-center">
    <p>جميع الحقوق محفوظة لدي مستشفى الاقصى &copy; 2022</p>
</footer>
<!-- End Footer -->

<!-- jQuery -->
<script src="asset/js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap js -->
<script src="asset/js/bootstrap.min.js"></script>
</body>
</html>

