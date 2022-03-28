<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/js/bundles/4.20.0/compiled.0.min.js?ver=4.20.0"></script>
<div class="modal" id="startModal"  aria-labelledby="startModalLabel" style="padding-right: 16px; display: block;">
     <div class="modal-dialog">
       <div class="modal-content"style="position: absolute; margin-top: 50%; background: linear-gradient(360deg, rgba(210,216,241,1) 0%, rgba(251,217,168,1) 65%);">
         <div class="modal-header">
           <h5 class="modal-title" id="startModalLabel"><b>أهلاً وسهلاً بك، عزيزي الزائر.</b></h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
           </button>
         </div>
         <div class="modal-body text-center">     
          <i class="fa fa-book fa-5x text-info my-4"style="font-size: 56px; color: #e6a543 !important;"></i>
          <p><strong>كن قارئًا قبل أن تكون كاتبًا!</strong></p>
          <hr class="my-2">
          <a class="btn btn-primary btn-sm float-right" href="../welcome" role="button"> استمر <i class="fas fa-arrow-alt-circle-right ml-2"></i></a> 
          <a class="btn btn-outline-primary btn-sm float-right" href="../about" role="button"> من نحن ؟ </a> 
         </div>
       </div>
     </div>
   </div>
<script>$("#startModal").modal("show");$("#startModal").parent().css("display","block");$("#startModal").parent().css("visibility","visible");</script>
</div>    
</head>

<body dir="rtl">
<header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light align-content-center" style="    height: 117px;
            ">
                <div class=" container-fluid float-right text-center" style="background-color: #fce7d7;">
                    <img src="https://i.postimg.cc/59BTJw4D/logo.png" alt="" class="me-5" style="width: 160px; height: 106px;">
                    <h1 class="navbar-brand"style="font-family: Kufyan Arabic Medium ! ; color: #d13b05; font-size: 40px; ">مكتبة اقرأ</h1>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-5 mb-2 >
                            <li class="nav-item">
                                <a class="nav-link active border border-left me-3" aria-current="page" href="../welcome"
                                    style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#061862; font-size: 24px; "><span class="fa fa-home"style="color: #061862;"></span> الصفحة
                                    الرئيسية</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link active border border-left me-3" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown"
                                    style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#061862; font-size: 24px; "><span class="fa fa-bookmark"style="color: #061862;"></span> 
                                    تصفح
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../literature"
                                            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#061862; font-size: 20px;"> كتب أدبية</a>
                                    </li>
                                    <li><a class="dropdown-item" href="../novel"
                                            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#061862; font-size: 20px;">روايات وقصص</a>
                                    </li>
                                    <li><a class="dropdown-item" href="../islam"
                                            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#061862; font-size: 20px;">كتب دينية </a>
                                    </li>
                                    <li>
                                    </li>
                                    <li><a class="dropdown-item" href="../english"
                                            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#061862; font-size: 20px;">اللغة الإنجليزية</a>
                                    </li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#"
                                            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#061862; font-size: 20px;">المزيد... </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active border border-left me-3" aria-current="page" href="about"
                                    style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#061862; font-size: 24px; "><span class="fa fa-info-circle"style="color: #061862;"></span> عن
                                    المكتبة</a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link active border border-left me-3 mx-5" aria-current="page" href="contact"
                                    style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#061862; font-size: 24px;"><span class="fa fa-phone"style="color: #061862;"></span> اتصل
                                    بنا</a>
                            </li>
                        @if (Auth::guard('client')->guest())
                        <lu class="nav-item">
                            <a class="nav-link btn btn-outline-primary mx-3" href="{{ route('client.login') }}">{{ __('Login') }}</a>
                        </lu>
                        @if (Route::has('client.register'))
                            <lu class="nav-item">
                                <a class="nav-link btn btn-outline-primary mx-3" href="{{ route('client.register') }}">{{ __('Register') }}</a>
                            </lu>
                        @endif
                        @else
                        <ul class="nav-item dropdown mx-5" style="right: 15%;">
                                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown">
                                    {{ Auth::guard('client')->user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('client.logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('تسجيل الخروج') }}
                                </a>
                                <form id="logout-form" action="{{ route('client.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form> </li>                      
                                @endguest
                                </ul>
                            </ul>                        
                        </ul>
                    </div>
                </div>
                <br>
            </nav>
        </header>
<div class=" border-bottom">
        <section>
        <div class="container p-5">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://i.postimg.cc/PqfYLnYm/mg1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.postimg.cc/CLy8GqbM/mg2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.postimg.cc/YSSLrfBR/mg3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <hr>
            <section>
                <main class="mt-5">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 text-center">
                            <h1 class="display 4 fw-normal">ما هو اخر كتاب قرأته؟</h1>
                            <p class=" lead text-muted fw-normal mb-4">أنّ القراءة تختلف من شخص إلى آخر باختلاف أسلوبه
                                ورغبته,هنا تجتمع كل الأذواق</p>
                        </div>
                    </div>
                </main>
            </section>

        </section>
      <section class="bg-light">
                <main class="mt-5">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 text-center">
                            <h4 class="display 4 fw-normal">الأكثر زيارة</h4>
                            <br>
                            <div class="row">
                                <div class=" col-sm-12 col-lg-4 mb-2">
                                    <div class="card">
                                    <div class="card-body">
                                        <a href="../books/b1"><img src="https://i.postimg.cc/V6xJWxrZ/z1.png" alt="HTML tutorial"
                                                style="width:250px;height:250px;"></a>
                                    </div>
                                    <div class=" col-12 mb-2">
                                    <a class="btn fa fa-eye "style="color: #6b757f;"href="../books/b1"></a>
                                    <span>||</span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #8d8d8d;"></span>
                                    <span class="fa fa-star"style="color: #8d8d8d;"></span>
                                    <span> ||</span>
                                    <a class="btn fa fa-download"style="color: #6b757f;"></a>

</div>
</div>
                                </div>
                                <div class=" col-sm-12 col-lg-4 mb-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <a href="../books/b2"><img src="https://i.postimg.cc/zX1Lb11V/z2.png" alt="HTML tutorial"
                                                    style="width:250px;height:250px;"></a>
                                         </div>
                                    <div class=" col-12 mb-2">
                                    <a class="btn fa fa-eye "style="color: #6b757f;"href="../books/b2"></a>
                                    <span>||</span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span> ||</span>
                                    <a class="btn fa fa-download"style="color: #6b757f;"></a>

</div>
                                    </div>
</div>
                                <div class=" col-sm-12 col-lg-4 mb-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <a href="../books/b3"><img src="https://i.postimg.cc/j2Yj7ymG/z3.png" alt="HTML tutorial"
                                                    style="width:250px;height:250px;"></a>
                                         </div>
                                    <div class=" col-12 mb-2">
                                    <a class="btn fa fa-eye "style="color: #6b757f;"href="../books/b3"></a>
                                    <span>||</span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #8d8d8d;"></span>
                                    <span> ||</span>
                                    <a class="btn fa fa-download"style="color: #6b757f;"></a>

</div>
                                    </div>
                                </div>
                            </div>
                </main>
            </section>
            <section class="bg-light">
            <main class="mt-5">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 text-center ">
                            <h4 class="display 4 fw-normal">جديدنا</h4>
                           
                            <div class="row">
                                <div class=" col-sm-12 col-lg-4 mb-2">
                                    <div class="card">
                                    <div class="card-body">
                                        <a href="../books/b4"><img src="https://i.postimg.cc/qRVrb4wK/g1.png" alt="HTML tutorial"
                                                style="width:250px;height:250px;"></a>
                                    </div>
                                    <div class=" col-12 mb-2">
                                    <a class="btn fa fa-eye "style="color: #6b757f;"href="../books/b4"></a>
                                    <span>||</span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #8d8d8d;"></span>
                                    <span> ||</span>
                                    <a class="btn fa fa-download"style="color: #6b757f;"></a>

</div>
</div>
                                </div>
                                <div class=" col-sm-12 col-lg-4 mb-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <a href="../books/b5"><img src="https://i.postimg.cc/hvMqtxB8/g2.png" alt="HTML tutorial"
                                                    style="width:250px;height:250px;"></a>
                                         </div>
                                    <div class=" col-12 mb-2">
                                    <a class="btn fa fa-eye "style="color: #6b757f;" href="../books/b5"></a>
                                    <span>||</span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #8d8d8d;"></span>
                                    <span class="fa fa-star"style="color: #8d8d8d;"></span>
                                    <span> ||</span>
                                    <a class="btn fa fa-download"style="color: #6b757f;"></a>

</div>
                                    </div>
                                </div>
                                <div class=" col-sm-12 col-lg-4 mb-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <a href="../books/b6"><img src="https://i.postimg.cc/W3vRmSp6/g3.png" alt="HTML tutorial"
                                                    style="width:250px;height:250px;"></a>
                                         </div>
                                    <div class=" col-12 mb-2">
                                    <a class="btn fa fa-eye "style="color: #6b757f;"href="../books/b5"></a>
                                    <span>||</span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span> ||</span>
                                    <a class="btn fa fa-download"style="color: #6b757f;"></a>

</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </main>
            </section>
            <br>
            
            <section class="bg-light">
            <main class="mt-5">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 text-center ">
                            <h4 class="display 4 fw-normal">!ننصحك بقرأتها</h4>
                            <div class="row">
                                <div class=" col-sm-12 col-lg-4 mb-2">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="../books/b7"><img src="https://i.postimg.cc/fTbGvVsF/y1.png" alt="HTML tutorial"
                                                style="width:250px;height:250px;"></a>
                                    </div>
                                    <div class=" col-12 mb-2">
                                    <a class="btn fa fa-eye "style="color: #6b757f;"href="../books/b7"></a>
                                    <span>||</span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #8d8d8d;"></span>
                                    <span> ||</span>
                                    <a class="btn fa fa-download"style="color: #6b757f;"></a>

</div>
                                </div>
</div>
                                <div class=" col-sm-12 col-lg-4 mb-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <a href="../books/b8"><img src="https://i.postimg.cc/VvkV4VxM/y2.png" alt="HTML tutorial"
                                                    style="width:250px;height:250px;"></a>
                                         </div>
                                    <div class=" col-12 mb-2">
                                    <a class="btn fa fa-eye "style="color: #6b757f;"href="../books/b8"></a>
                                    <span>||</span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span> ||</span>
                                    <a class="btn fa fa-download"style="color: #6b757f;"></a>

</div>
                                    </div>
                                </div>
                                <div class=" col-sm-12 col-lg-4 mb-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <a href="../books/b9"><img src="https://i.postimg.cc/t4qYktJb/y3.png" alt="HTML tutorial"
                                                    style="width:250px;height:250px;"></a>
                                         </div>
                                    <div class=" col-12 mb-2">
                                    <a class="btn fa fa-eye "style="color: #6b757f;"href="../books/b9"></a>
                                    <span>||</span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #8d8d8d;"></span>
                                    <span class="fa fa-star"style="color: #8d8d8d;"></span>
                                    <span> ||</span>
                                    <a class="btn fa fa-download"style="color: #6b757f;"></a>

</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </main>

            </section>
            
            <section>
                <main class="mt-5">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 text-center">
                            <h1 class="display 4 fw-normal">هل تفضل المقالات العلمية أم الأدبية؟</h1>
                            <p class=" lead text-muted fw-normal mb-4">للأسف، نحن لا نعيش في عالم مثالي، فكثيرة هي
                                المشاكل وقليلة هي الحلول، والأكثر هي الأفواه التي تحاول أن توصل صوتها وتعبر عن رأيها فـ
                                "ليس بالفم حيلة"، لذلك نحن نكتب , وأنت اقرأ</p>
                        </div>
                    </div>
                </main>
            </section>
            <section class="bg-light">
                <main class="mt-5">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 text-center ">
                            <h4 class="display 4 fw-normal">مقالات مختارة</h4>
                            <div class="row">
                                <div class=" col-sm-12 col-lg-4 mb-2">
                                    <div class="card">
                                    <div class="card">
                                        <a
                                            href="https://ar.wikipedia.org/wiki/%D8%A3%D8%B3%D8%A8%D8%A7%D8%A8_%D8%A7%D9%84%D8%AD%D8%B1%D8%A8_%D8%A7%D9%84%D8%B9%D8%A7%D9%84%D9%85%D9%8A%D8%A9_%D8%A7%D9%84%D8%AB%D8%A7%D9%86%D9%8A%D8%A9">
                                            <img src="https://i.postimg.cc/vTT056nt/m1.png" alt="HTML tutorial"
                                                style="width:250px;height:250px;"></a>
                                                <div class=" col-12 mb-2">
                                                <a class="btn fa fa-eye "style="color: #6b757f;"></a>
                                    <span>||</span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #8d8d8d;"></span>
                                    <span class="fa fa-star"style="color: #8d8d8d;"></span>
                                    <span class="fa fa-star"style="color: #8d8d8d;"></span>
                                    <span> ||</span>
                                    <a class="btn fa fa-download"style="color: #6b757f;"></a>

</div></div>
                                    <div class="card-body">
                                        <p class="card-text">أسباب الحرب العالمية الثانية
                                        </p>
                                    </div>                                    
                                </div>
                                </div>
                                <div class=" col-sm-12 col-lg-4 mb-2">
                                    <div class="card">
                                        <div class="card">
                                            <a
                                                href="https://ar.wikipedia.org/wiki/%D9%85%D8%A7%D8%B1%D9%8A_%D9%83%D9%88%D8%B1%D9%8A">
                                                <img src="https://i.postimg.cc/5NHP0Lbx/m2.png" alt="HTML tutorial"
                                                    style="width:250px;height:250px;"></a>
                                                    <div class=" col-12 mb-2">
                                                    <a class="btn fa fa-eye "style="color: #6b757f;"></a>
                                    <span>||</span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #8d8d8d;"></span>
                                    <span class="fa fa-star"style="color: #8d8d8d;"></span>
                                    <span> ||</span>
                                    <a class="btn fa fa-download"style="color: #6b757f;"></a>

</div>                                    
</div>
                                        <div class="card-body">
                                            <p class="card-text">ماري كوري
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-sm-12 col-lg-4 mb-2">
                                    <div class="card">
                                        <div class="card">
                                            <a
                                                href="https://ar.wikipedia.org/wiki/%D8%A3%D9%86%D9%88%D8%A7%D8%B9_%D8%A7%D9%84%D9%85%D8%BA%D8%A7%D9%84%D8%B7%D8%A7%D8%AA">
                                                <img src="https://i.postimg.cc/PrzMN40n/m3.png" alt="HTML tutorial"
                                                    style="width:250px;height:250px;"></a>
                                                    <div class=" col-12 mb-2">
                                                    <a class="btn fa fa-eye "style="color: #6b757f;"></a>
                                    <span>||</span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #8d8d8d;"></span>
                                    <span> ||</span>
                                    <a class="btn fa fa-download"style="color: #6b757f;"></a>

</div>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">أنواع المغالطات
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </main>

            </section>
        </section>

    </div>

        </section>
        <footer>
    <div class=" mt-2" style="background: rgb(6,24,98); background: linear-gradient(90deg, rgba(6,24,98,1) 0%, rgba(199,91,13,1) 65%);">
        <div class="row mx-4">
                 <div class="col-6">
                    <small class="text-light"> جميع الحقوق محفوظة &copy; ۲۰۲۰-۲۰۲۱</small>
                  </div>  
                  <div class="col-6 "style="text-align:left;">
                    <a class="btn btn-outline-dark fa fa-facebook"style="color:#fff ;"></a>
                    <a class="btn btn-outline-dark fa fa-instagram"style="color: #fff;"></a>
                    <a class="btn btn-outline-dark fa fa-twitter"style="color: #fff;"></a>
                    <a class="btn btn-outline-dark fa fa-linkedin"style="color: #fff;"></a>
                </div>
    </div>
</footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>