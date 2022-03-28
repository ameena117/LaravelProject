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
          <i class="fas fa-book fa-5x text-info my-4"></i>
          <p><strong>من فضلك قم بتقييم الكتاب بعد القراءة وإخبارنا برأيك.</strong></p>
          <hr class="my-2">
          <a class="btn btn-primary btn-sm float-right" href="#" role="button"> حسناً <i class="fas fa-arrow-alt-circle-right ml-2"></i></a> 
         </div>
       </div>
     </div>
   </div>
<script>$("#startModal").modal("show");$("#startModal").parent().css("display","block");$("#startModal").parent().css("visibility","visible");</script>
</div>  
<body dir="rtl">
<header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light align-content-center" style="height: 117px;
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
                                <a class="nav-link active border border-left me-3" aria-current="page" href="client"
                                    style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#061862; font-size: 24px; ">الصفحة
                                    الرئيسية</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link active border border-left me-3" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown"
                                    style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#061862; font-size: 24px; ">
                                    تصفح
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#"
                                            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#061862; font-size: 20px;">كتب</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"
                                            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#061862; font-size: 20px;">روايات</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#"
                                            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#061862; font-size: 20px;">English</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active border border-left me-3" aria-current="page" href="about"
                                    style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#061862; font-size: 24px; ">عن
                                    المكتبة</a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link active border border-left me-3 mx-5" aria-current="page" href="contact"
                                    style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#061862; font-size: 24px;">اتصل
                                    بنا</a>
                            </li>
                        </ul>
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
                        <ul class="nav-item dropdown mx-5" style="right: 30%;">
                                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown">
                                    {{ Auth::guard('client')->user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('client.logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('client.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form> </li>                      
                                @endguest
                                </ul>

                                
                            </ul>
                    </div>
                </div>
                <br>
            </nav>
        </header>
<div class="container p-5 border border-primary mb-5 mt-5 " style="background: linear-gradient(90deg, rgba(210,216,241,1) 0%, rgba(251,217,168,1) 65%);">        
    <div class="card  border-primary text-dark" style="font-family: Kufyan Arabic Medium !; font-weight: bold; color: #061862;">
        <div class="row p-2">        
                <div class="col-6 mt-3">
                <h3 class="text-dark text-center"> عنوان الكتاب </h3>    
                <hr>
                <div class="mt-5 text-md-center">
                   <p>عمَّ تتساءل يا ترى؟</p>
                   <p>انضم إلى إيفا ووالدتها في رحلة استكشاف علمية عن العالم المحيط بنا</p>
                   <p class="mt-4 mb-5">شارك هذا الكتاب مع من تقابله من الأطفال وشجعهم دائما على التساؤل</p></div>            
                   <a class="btn btn-primary btn-sm mt-5 mx-5" href="#" >تحميل الكتاب مجاناً</a>
                </div>        
                <div class="col-6">
                <img class="img-fluid mb-2 mt-2" src="https://static.wixstatic.com/media/60b729_7a959da69ea74795a1507a64808fdd91~mv2.png/v1/fill/w_495,h_495,al_c,q_85,usm_0.66_1.00_0.01/%D8%A3%D9%86%D8%A7%20%D8%A3%D8%AA%D8%B3%D8%A7%D8%A1%D9%84%20(5).webp" alt="أنا أتساءل (5).png" style="width:396px;height:396px;object-fit:cover;object-position:50% 50%"></wix-image>
            </div>
            </div>
        </div>
    </div>
    </body>    

    <footer>
    <div class=" mt-2" style="background: rgb(6,24,98);
    background: linear-gradient(90deg, rgba(6,24,98,1) 0%, rgba(199,91,13,1) 65%);">
        <div class="row mx-4">
            <div class="col-md-6 p-3">
                <div>
                    <small class="text-light"> جميع الحقوق محفوظة &copy; ۲۰۲۰-۲۰۲۱</small>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>