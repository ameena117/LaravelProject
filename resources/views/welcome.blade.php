@extends('layout')
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
</head>

<body dir="rtl">
@section('content')
           
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
        <section class="container">
            
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
                                        <a href="../books/b1"><img src="https://i.postimg.cc/V6xJWxrZ/z1.png"class="btn btn-outline-secondary" alt="HTML tutorial"
                                                style="width:250px;height:250px;"></a>
                                    </div>
                                    <div class=" col-12 ">
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
                                            <a href="../books/b2"><img src="https://i.postimg.cc/zX1Lb11V/z2.png"class="btn btn-outline-secondary" alt="HTML tutorial"
                                                    style="width:250px;height:250px;"></a>
                                         </div>
                                    <div class=" col-12 ">
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
                                            <a href="../books/b3"><img src="https://i.postimg.cc/j2Yj7ymG/z3.png"class="btn btn-outline-secondary" alt="HTML tutorial"
                                                    style="width:250px;height:250px;"></a>
                                         </div>
                                    <div class=" col-12 ">
                                    <a class="btn fa fa-eye "style="color: #6b757f;"href="../books/b3"></a>
                                    <span>||</span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #8d8d8d;"></span>
                                    <span> ||</span>
                                    <a class="btn fa fa-download"style="color: #6b757f;" href="https://foulabook.com/book/downloading/829246002"></a>

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
                                        <a href="../books/b4"><img src="https://i.postimg.cc/qRVrb4wK/g1.png"class="btn btn-outline-secondary" alt="HTML tutorial"
                                                style="width:250px;height:250px;"></a>
                                    </div>
                                    <div class=" col-12 ">
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
                                            <a href="../books/b5"><img src="https://i.postimg.cc/hvMqtxB8/g2.png"class="btn btn-outline-secondary" alt="HTML tutorial"
                                                    style="width:250px;height:250px;"></a>
                                         </div>
                                    <div class=" col-12 ">
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
                                            <a href="../books/b6"><img src="https://i.postimg.cc/W3vRmSp6/g3.png"class="btn btn-outline-secondary" alt="HTML tutorial"
                                                    style="width:250px;height:250px;"></a>
                                         </div>
                                    <div class=" col-12 ">
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
                                        <a href="../books/b7"><img src="https://i.postimg.cc/fTbGvVsF/y1.png"class="btn btn-outline-secondary" alt="HTML tutorial"
                                                style="width:250px;height:250px;"></a>
                                    </div>
                                    <div class=" col-12 ">
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
                                            <a href="../books/b8"><img src="https://i.postimg.cc/VvkV4VxM/y2.png"class="btn btn-outline-secondary" alt="HTML tutorial"
                                                    style="width:250px;height:250px;"></a>
                                         </div>
                                    <div class=" col-12 ">
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
                                            <a href="../books/b9"><img src="https://i.postimg.cc/t4qYktJb/y3.png"class="btn btn-outline-secondary" alt="HTML tutorial"
                                                    style="width:250px;height:250px;"></a>
                                         </div>
                                    <div class=" col-12 ">
                                    <a class="btn fa fa-eye "style="color: #6b757f;"href="../books/b9"></a>
                                    <span>||</span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #fdcc0d;"></span>
                                    <span class="fa fa-star"style="color: #8d8d8d;"></span>
                                    <span class="fa fa-star"style="color: #8d8d8d;"></span>
                                    <span> ||</span>
                                    <a class="btn fa fa-download"style="color: #6b757f;" href="https://foulabook.com/book/downloading/230502534"></a>

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
                                    <div class="card-body">
                                        <a
                                            href="https://ar.wikipedia.org/wiki/%D8%A3%D8%B3%D8%A8%D8%A7%D8%A8_%D8%A7%D9%84%D8%AD%D8%B1%D8%A8_%D8%A7%D9%84%D8%B9%D8%A7%D9%84%D9%85%D9%8A%D8%A9_%D8%A7%D9%84%D8%AB%D8%A7%D9%86%D9%8A%D8%A9">
                                            <img src="https://i.postimg.cc/vTT056nt/m1.png"class="btn btn-outline-secondary" alt="HTML tutorial"
                                                style="width:250px;height:250px;"></a>
                                                <div class=" col-12 ">
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
                                    <div class="card-footer">
                                        <p class="card-text">أسباب الحرب العالمية الثانية
                                        </p>
                                    </div>                                    
                                </div>
                                </div>
                                <div class=" col-sm-12 col-lg-4 mb-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <a
                                                href="https://ar.wikipedia.org/wiki/%D9%85%D8%A7%D8%B1%D9%8A_%D9%83%D9%88%D8%B1%D9%8A">
                                                <img src="https://i.postimg.cc/5NHP0Lbx/m2.png"class="btn btn-outline-secondary" alt="HTML tutorial"
                                                    style="width:250px;height:250px;"></a>
                                                    <div class=" col-12 ">
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
                                        <div class="card-footer">
                                            <p class="card-text">ماري كوري
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-sm-12 col-lg-4 mb-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <a
                                                href="https://ar.wikipedia.org/wiki/%D8%A3%D9%86%D9%88%D8%A7%D8%B9_%D8%A7%D9%84%D9%85%D8%BA%D8%A7%D9%84%D8%B7%D8%A7%D8%AA">
                                                <img src="https://i.postimg.cc/PrzMN40n/m3.png"class="btn btn-outline-secondary" alt="HTML tutorial"
                                                    style="width:250px;height:250px;"></a>
                                                    <div class=" col-12 ">
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
                                        <div class="card-footer">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
@endsection