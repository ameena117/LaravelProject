@extends('books.blayout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
</head>

<body dir="rtl">
    @section('content')
    <div class="container p-5 border border-primary mb-5 mt-5 " style="background: linear-gradient(90deg, rgba(210,216,241,1) 0%, rgba(251,217,168,1) 65%);">        
    <div class="card  border-primary text-dark" style="font-family: Kufyan Arabic Medium !; font-weight: bold; color: #061862;">
    <div class="row p-2">    
        <div class="col-md-6 col-sm-12 mt-3">
                <h3 class="text-dark text-center"> شيفرة دافينشي</h3>    
                <hr>
                <div class="mt-5 text-md-center">
                   <p class="mt-4  p-3"> شيفرة دا فينشي رواية تشويق وغموض بوليسية خيالية للمؤلف الأمريكي دان براون نشرت عام 2003.</p>
                     <p>تدور أغلب أحداث الرواية حول اختراعات وأعمال دافنتشي الفنية. اكتشف لانغدون والفرنسية الحسناء صوفي نوفو خبيرة فك الشفرات -والتي يتضح لاحقا أن لها دور كبير في الرواية-..</p>
                </div>
                </div>        
                <div class="col-md-6 col-sm-12">
                <img class="img-fluid mb-2 mt-2" src="https://i.postimg.cc/VvkV4VxM/y2.png"  style="width:396px;height:396px;object-fit:cover;object-position:50% 50%"></wix-image>
            </div>
            </div>
        </div>
        <a class="btn btn-primary btn-sm mt-3" href="#" >تحميل الكتاب مجاناً</a>
    </div>
    </body>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>@endsection