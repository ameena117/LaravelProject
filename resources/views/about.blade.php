@extends('layout')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
</head>

<body dir="rtl">
@section('content')
        
    <div class="container p-5 border border-primary mb-5 mt-5 w-75" style="background: linear-gradient(90deg, rgba(210,216,241,1) 0%, rgba(251,217,168,1) 65%);">
        <div class="card border-primary">
            <div class="card-header  text-center">
                <h1 style="font-family: Kufyan Arabic Medium; font-weight: bold; color: #061862;" >عن المكتبة</h1>
            </div>
            <div class="card-body text-end">
                <ul class="navbar-nav">
                    <li class="m-3">
                        <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> <span>PDF</span> مكتبة الكترونية تقدم لك كتب متنوعة بصيغة  <i class="fa fa-certificate " style="color: #df470f;"></i></h4>
                        
                        <h4 class="" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> لقرائتها وتصفحها في أي وقت تريد وفي أي مكان     </h4>
                    </li>
                    <hr class="dropdown-divider">
                    <li class="m-3">
                        <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">  استمتع بقراءة كتب وروايات متنوعة مع المكتبة  <i class="fa fa-certificate" style="color: #df470f;"></i> </h4>
                        <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> الالكترونية الأكثر زيارة في الوطن العربي     </h4>
                    </li>
                </ul>

            </div>
         
        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    
</body>
</html>
@endsection