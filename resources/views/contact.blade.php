@extends('layout')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/js/bundles/4.20.0/compiled.0.min.js?ver=4.20.0"></script>
</head>
<body dir="rtl">
    @section('content')
    <div class="container p-5 border border-primary mb-5 mt-5 w-100 " style="background: linear-gradient(90deg, rgba(210,216,241,1) 0%, rgba(251,217,168,1) 65%); ">
 <div class="card  border-primary ">
            <div class="card-header  text-center">
                <h1 style="font-family: Kufyan Arabic Medium; font-weight: bold; color: #061862;" >اتصل بنا</h1>
            </div>
            <div class="text-center">
                <img src="https://i.postimg.cc/j2r8jzcc/flag.jpg" alt="" srcset="" class="m-2" style=" width: 140px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <h3 style="font-family: Kufyan Arabic Medium;" class="p-2">فلسطين - المكتب الرئيسي</h3>
            <hr class="dropdown-divider">
            </div>
            <div class="card-body text-center">
                <ul class="navbar-nav">
                    <li class="m-1">
                        <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">رام الله - فلسطين <i class="fa fa-map-marker"style="color: #df470f;"></i></h4>
                    </li>
                    <li class="m-1">
                        <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">+972 2984633 <i class="fa fa-phone" style="color: #df470f;"></i></h4>
                    </li>
                    <li class="m-1">
                        <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">+972 592003001 <i class="fa fa-mobile"style="color: #df470f;"></i></h4>
                    </li>
                    <li class="m-1">
                        <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">info@iqralibrary.com <i class="fa fa-envelope" style="color: #df470f;"></i></h4>
                    </li>
                    <li class="m-1">
                        <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">+972 592004444 <i class="fa fa-whatsapp" style="color: #df470f;"></i></h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
@endsection