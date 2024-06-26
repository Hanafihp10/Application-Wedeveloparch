<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Product</title>
        <link rel="icon" type="image/x-icon" href="https://img.icons8.com/papercut/60/building.png">
        <link rel="stylesheet" href="../asset/style/products.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>
    <body class="body">
        <header>
        <nav class="navbar navbar-expand-lg shadow bg-body rounded">
        <div class="container-fluid">
        <img src="http://localhost/FP-PEMWEB/Application-Wedeveloparch/asset/icon/wedev-logo.png" alt="" width="60" height="60" />
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Layanan</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Perancangan Denah</a></li>
                                <li><a class="dropdown-item" href="#">Desain 3D</a></li>
                                <li><a class="dropdown-item" href="#">Pembuatan DED</a></li>
                                <li><a class="dropdown-item" href="#">Gambar Detail Arsitektur</a></li>
                                <li><a class="dropdown-item" href="#">Desain Exterior & Interior</a></li>
                                <li><a class="dropdown-item" href="#">Estimasi RAB</a></li>
                                <li><a class="dropdown-item" href="#">Desain Landscape</a></li>
                            </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://api.whatsapp.com/send/?phone=62083862928254&text&type=phone_number&app_absent=0" tabindex="-1" aria-disabled="true">Contact</a>
                    </li>
                </ul>
                <img href="#" src="https://img.icons8.com/?size=100&id=c8SsrDOfQgn3&format=png&color=000000" alt="" width="60">
            </div>
        </div>
    </nav>
        </header>
        <main>
            <div class="scrolled-offset mt-6">
                <div class="container mb-5 py-5">
                    <div class="intro d-flex justify-content-center">
                        <div class="text-start col">
                            <div class="Intro">
                                <h1><strong>Tonton, Pahami,<br>Tumbuh Bersama.</strong></h1>
                                <p>Nikmati pembelajaran tanpa batas yang difasilitasi oleh mentor ahli di bidangnya.</p>
                            </div>
                        </div>
                        <div class="img-intro col-7 m-5">
                            <img src="../asset/Image/Product-image/product-1.jpeg" class="portrait m-1">
                            <img src="https://i.pinimg.com/236x/fa/86/6d/fa866de2c00e775e8eeacbdc08357da4.jpg" class="img-2 m-1 img-fluid" style="border-radius: 5%; width:150px;  height:400px">
                            <img src="https://i.pinimg.com/236x/d6/64/cf/d664cfafd5b38379c5c0638695925bd9.jpg" class="img-2 m-1 img-fluid" style="border-radius: 5%; width:150px;  height:400px">
                        </div>
                    </div>
                    <!--searching-->
                    <h3 class="fw-bold text-center mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">Temukan Product yang sesuai<br>dengan minat Anda</h3>
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="col-md-5">
                            <div class=" button-srch input-group aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
                                <input type="text" class="form-control" id="inputSearchCourse" placeholder="Cari Product yang anda sukai">
                                <button class="btn px-4 border-start-0" id="btnSearchCourse"><img width="30" height="30" src="../asset/icon/search.png" alt="search--v1"/></button>
                            </div>
                        </div>
                    </div>
                    <!--Category-->
                    <div id="card-category">
                        <div class="button list mt-5 mb-4 text-center aos-init aos-animate">
                            <button class="btn btn-outline-dark px-3 " data-category="">Semua</button>
                            <button class="btn btn-outline-dark px-3 ms-1" data-category="basic">Basic</button>
                            <button class="btn btn-outline-dark px-3 ms-1" data-category="intermediate">Intermediate</button>
                        </div>
                    </div>
                    <!--PRODUCT-->
                    <div class="container-1 ms-2 me-2 p-4 shadow p-3 mb-5 bg-body rounded">
                        <div class="row">
                            <div class="col">
                                <img src="https://i.pinimg.com/564x/d8/b8/43/d8b84382447839bb30b990e38f5feb73.jpg" class=" landscape img-fluid img-tumbnail">
                            </div>
                            <div class="col">
                                <div class="row mt-2">
                                    <div class="col d-flex justify-content-center align-items">
                                        <img src="../asset/icon/brand-logo.png" class="img-fluid" style="border-radius:50%; width:100px; height:90px;">
                                    </div>
                                    <div class="col-10 mt-1">
                                        <h4 class="mb-1">Graphic design</h4>
                                        <img width="20" height="auto" src="https://img.icons8.com/ios/50/marker--v1.png" alt="marker--v1" class="float-start me-1"/>
                                        <p class="mb-1">Jl. Gorongan 5 Depok</p>
                                        <img width="20" height="auto" src="https://img.icons8.com/sf-ultralight/25/home.png" alt="home" class="float-start me-1"/>
                                        <p class="">53 Proyek kebangun</p>
                                    </div>
                                </div>
                                <div class="mt-2 ">
                                    <p>Dengan menggunakan kelas me-{nilai}, Anda dapat dengan mudah mengatur margin kanan dari elemen
                                        sesuai kebutuhan desain Anda.dimana {nilai} adalah angka dari 0 hingga 5 yang menunjukkan besar margin kanan yang diinginkan.
                                    </p>
                                    <a class="track-click" data-id="45426" style="color:  #5C4009;" href="/profile/pranata-design">
                                        Read more &gt;
                                    </a>
                                </div>
                                <div class="float-end">
                                    <button type="Summit" class="btn btn-outline-dark">Minta Penawaran</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-1 ms-2 me-2 p-4 shadow p-3 mb-5 bg-body rounded">
                        <div class="row">
                            <div class="col">
                                <img src="https://i.pinimg.com/564x/ee/a7/24/eea7242a584facb89f209cb45c6bd8d9.jpg" class=" landscape img-fluid img-tumbnail">
                            </div>
                            <div class="col">
                                <div class="row mt-2">
                                    <div class="col d-flex justify-content-center align-items">
                                        <img src="../asset/icon/brand-logo.png" class="img-fluid" style="border-radius:50%; width:90px; height:90px;">
                                    </div>
                                    <div class="col-10 mt-1">
                                        <h4 class="mb-1">Graphic design</h4>
                                        <img width="20" height="auto" src="https://img.icons8.com/ios/50/marker--v1.png" alt="marker--v1" class="float-start me-1"/>
                                        <p class="mb-1">Jl. Gorongan 5 Depok</p>
                                        <img width="20" height="auto" src="https://img.icons8.com/sf-ultralight/25/home.png" alt="home" class="float-start me-1"/>
                                        <p class="">53 Proyek kebangun</p>
                                    </div>
                                </div>
                                <div class="mt-2 ">
                                    <p>Dengan menggunakan kelas me-{nilai}, Anda dapat dengan mudah mengatur margin kanan dari elemen
                                        sesuai kebutuhan desain Anda.dimana {nilai} adalah angka dari 0 hingga 5 yang menunjukkan besar margin kanan yang diinginkan.
                                    </p>
                                    <a class="track-click" data-id="45426" style="color:  #5C4009;" href="/profile/pranata-design">
                                        Read more &gt;
                                    </a>
                                </div>
                                <div class="float-end">
                                    <button type="button" class="btn btn-light">Minta Penawaran</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-1 ms-2 me-2 p-4 shadow p-3 mb-5 bg-body rounded">
                        <div class="row">
                            <div class="col">
                                <img src="https://i.pinimg.com/564x/d8/b8/43/d8b84382447839bb30b990e38f5feb73.jpg" class=" landscape img-fluid img-tumbnail">
                            </div>
                            <div class="col">
                                <div class="row mt-2">
                                    <div class="col d-flex justify-content-center align-items">
                                        <img src="../asset/icon/brand-logo.png" class="img-fluid" style="border-radius:50%; width:90px; height:90px;">
                                    </div>
                                    <div class="col-10 mt-1">
                                        <h4 class="mb-1">Graphic design</h4>
                                        <img width="20" height="auto" src="https://img.icons8.com/ios/50/marker--v1.png" alt="marker--v1" class="float-start me-1"/>
                                        <p class="mb-1">Jl. Gorongan 5 Depok</p>
                                        <img width="20" height="auto" src="https://img.icons8.com/sf-ultralight/25/home.png" alt="home" class="float-start me-1"/>
                                        <p class="">53 Proyek kebangun</p>
                                    </div>
                                </div>
                                <div class="mt-2 ">
                                    <p>Dengan menggunakan kelas me-{nilai}, Anda dapat dengan mudah mengatur margin kanan dari elemen
                                        sesuai kebutuhan desain Anda.dimana {nilai} adalah angka dari 0 hingga 5 yang menunjukkan besar margin kanan yang diinginkan.
                                    </p>
                                    <a class="track-click" data-id="45426" style="color:  #5C4009;" href="/profile/pranata-design">
                                        Read more &gt;
                                    </a>
                                </div>
                                <div class="float-end">
                                    <button type="button" class="btn btn-light">Minta Penawaran</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="bg-dark">
            <div class="container-2">
                <div class="row">
                    <div class="col ms-5">
                        <h6>CONTACT US</h6>
                        <p><strong>Address</strong></p>
                        <p>Jl. Veteran No. 1 A, Babakan, Tangerang</p>
                        <p><strong>Phone</strong></p>
                        <p>082299820100</p>
                        <p><strong>Email</strong></p>
                        <p>Wedeveloparch@gmail.com</p>
                    </div>
                    <div class="col">
                        <h6>CONTACT US</h6>
                        <p><strong>Address</strong></p>
                        <p>Jl. Veteran No. 1 A, Babakan, Tangerang</p>
                        <p><strong>Phone</strong></p>
                        <p>082299820100</p>
                        <p><strong>Email</strong></p>
                        <p>Wedeveloparch@gmail.com</p>
                    </div>
                    <div class="navbar-brand col d-flex align-items-center">
                        <a class="navbar-brand text-light" style="font-size:50px"  href="#"><span style="color: #5C4009;font-size:50px"><strong>We</strong></span><strong>developarch</strong></a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="../asset/script/script.js"></script>
    </body>
</html>
