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

<!-- ======= Book A Section ======= -->
        <section id="book-a-table" class="book-a-table p-4">
            <div class="container">

                <div class="section-title">
                    <h2 style="text-align-last: center; padding: 10px; border-bottom: 5px solid rgb(21, 226, 35); width: 20%; position: relative; right: 50%; transform: translate(50% , 0)">حجز مواعيد</h2>
                </div>

                <form method="POST" class="email-form p-5">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="الاسم" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="الايميل" data-rule="email" data-msg="Please enter a valid email">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="رقم الهاتف" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <input type="date" name="date" class="form-control" id="date" placeholder="الناريخ" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <input type="datetime" class="form-control" name="time" id="time" placeholder="الوقت" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <input type="number" class="form-control" name="people" id="people" placeholder="عدد الاشخاص" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="رسالة ..."></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="text-center"><button type="submit" onclick="performStore()" class="btn" style="background-color: rgb(21, 226, 35); color: white; border: none; border-radius: 10px; padding: 10px 30px; outline-color: rgb(21, 226, 35);">حجز</button></div>
                </form>

            </div>
        </section>
        <!-- End Book A Section -->


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

    <script src="{{ asset('asset/js/crud.js') }}"></script>

    <script>
        function performStore() {

 let formData = new FormData();
     formData.append('name',document.getElementById('name').value);
     formData.append('email',document.getElementById('email').value);
     formData.append('mobile',document.getElementById('mobile').value);
     formData.append('number_of_people',document.getElementById('number_of_people').value);
     formData.append('time',document.getElementById('time').value);
     formData.append('date',document.getElementById('date').value);
     formData.append('nots',document.getElementById('nots').value);

 store('/books',formData);

 }

   </script>
    </body>
</html>

