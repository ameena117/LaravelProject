<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">   
</head>
<script type="text/javascript" src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/js/bundles/4.20.0/compiled.0.min.js?ver=4.20.0"></script>

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
                                            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#061862; font-size: 20px;">كتب أدبية</a>
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
                                <a class="nav-link active border border-left me-3" aria-current="page" href="../about"
                                    style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#061862; font-size: 24px; "><span class="fa fa-info-circle"style="color: #061862;"></span> عن
                                    المكتبة</a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link active border border-left me-3 mx-5" aria-current="page" href="../contact"
                                    style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#061862; font-size: 24px;"><span class="fa fa-phone"style="color: #061862;"></span> اتصل
                                    بنا</a>
                            </li>
                        <?php if(Auth::guard('client')->guest() and Auth::guard('admin')->guest()): ?>
                              <ul class="nav-item dropdown mx-5" style="right: 17%;">
                                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown">
                                   انت غير مسجل
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="<?php echo e(route('client.login')); ?>"
                                            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#061862; font-size: 20px;"><?php echo e(__('تسجيل الدخول')); ?></a>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo e(route('client.register')); ?>"
                                            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#061862; font-size: 20px;"><?php echo e(__('اشتراك ')); ?></a>
                                    </li>
                                </ul>
                        </ul>
                        <?php elseif ( Auth::guard('admin')->guest()) : ?> 
                        <ul class="nav-item dropdown mx-5" style="right: 17%;">
                                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown">
                                    <?php echo e(Auth::guard('client')->user()->name); ?>

                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="<?php echo e(route('client.logout')); ?>"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <?php echo e(__('تسجيل الخروج')); ?>

                                </a>
                                <form id="logout-form" action="<?php echo e(route('client.logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form> </li>                      

                        <?php else : ?>
                          <ul class="nav-item dropdown mx-5" style="right: 17%;">
                                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown">
                                    <?php echo e(Auth::guard('admin')->user()->name); ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="<?php echo e(route('admin.home')); ?>"><?php echo e(__('لوحة التحكم')); ?></a></li> 
                                    <li><a class="dropdown-item" href="<?php echo e(route('admin.logout')); ?>"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    <?php echo e(__('تسجيل الخروج')); ?>
                                </a>
                                <form id="logout-form" action="<?php echo e(route('admin.logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form> </li>             
                                <?php endif; ?>
                                </ul>
                        </ul></ul>
                    </div>
                </div>
                <br>
            </nav>
        </header>
        
        <main class="container">
        @yield('content')
        </main>
    <div class="btn-toolbar col-sm-12" role="toolbar" aria-label="Toolbar with button groups"style="display: flex;flex-wrap: nowrap;justify-content: center;align-items: center;">
  <div class="btn-group mx-2" role="group" aria-label="First group">
    <a type="button" class="btn btn-secondary" href="b1"> &laquo; Prev </a>
  </div>
  <div class="btn-group mx-2" role="group" aria-label="Second group">
    <a type="button" class="btn btn-secondary" href="b1">1</a>
    <a type="button" class="btn btn-secondary" href="b2">2</a>
    <a type="button" class="btn btn-secondary" href="b3">3</a>
  </div>
  <div class="btn-group mx-2" role="group" aria-label="Third group">
  <a type="button" class="btn btn-secondary" href="b4">4</a>
    <a type="button" class="btn btn-secondary" href="b5">5</a>
    <a type="button" class="btn btn-secondary" href="b6">6</a>
  </div>
  <div class="btn-group mx-2" role="group" aria-label="Fourth group">
  <a type="button" class="btn btn-secondary" href="b7">7</a>
    <a type="button" class="btn btn-secondary" href="b8">8</a>
    <a type="button" class="btn btn-secondary" href="b9">9</a>
  </div>
  <div class="btn-group mx-2" role="group" aria-label="Last group">
    <a type="button" class="btn btn-secondary" href="b9">Next &raquo;</a>
  </div>
</div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        
</body>    
</html>

