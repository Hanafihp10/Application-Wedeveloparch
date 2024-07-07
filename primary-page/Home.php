<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
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
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Layanan</a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="#desain-jasa">Desain</a></li>
                                                <li><a class="dropdown-item" href="#desain-jasa">Jasa</a></li>
                                            </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="http://localhost/FP-PEMWEB/Application-Wedeveloparch/Daftar%20Proyek/Daftar_proyek.php"> Daftar Proyek</a>
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
        <div class="row ms-4 mt-5 me-4">
            <div class="col-sm-3">
                <div class="card shadow">
                <div class="card-body text-center" style="font-size: 16px">
                    <h5 class="card-title" style="font-size: 15px"><b>Layanan Perusahaan</b></h5><hr>
                    <div style="font-size: 14px">
                        <p href="#" class="list-group-item list-group-item-action">Desain 3D</p><hr>
                        <p href="#" class="list-group-item list-group-item-action">Desain Interior & Eksterior</p><hr>
                        <p href="#" class="list-group-item list-group-item-action">Desain Landscape</p><hr>
                        <p href="#" class="list-group-item list-group-item-action">Detail Gambar Arsitektur</p><hr>
                        <p href="#" class="list-group-item list-group-item-action">Perancangan Denah</p><hr>
                        <p href="#" class="list-group-item list-group-item-action">Pembuatan DED</p><hr>
                        <p href="#" class="list-group-item list-group-item-action">Estimasi RAB</p><hr>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="card border-0">
                <div class="card-body">
                    <h3><strong>Bangun Rumah Impianmu,<br><span class="text-danger"><b>Sekarang!</b></span></strong></h3>
                    <p style="font-size: 15px">Nikmati layanan kami yang akan diselesaikan oleh para ahli kontruksi.</p><hr>
                    <img src="../asset/Image/Product-image/product-1.jpeg" class="portrait m-1" style="border-radius: 5%; width:280px;  height:300px">
                    <img src="https://i.pinimg.com/236x/d6/64/cf/d664cfafd5b38379c5c0638695925bd9.jpg" class="img-2 m-1 img-fluid" style="border-radius: 5%; width:150px;  height:300px">
                    <img src="https://i.pinimg.com/236x/d6/64/cf/d664cfafd5b38379c5c0638695925bd9.jpg" class="img-2 m-1 img-fluid" style="border-radius: 5%; width:150px;  height:300px">
                    <img src="https://i.pinimg.com/236x/d6/64/cf/d664cfafd5b38379c5c0638695925bd9.jpg" class="img-2 m-1 img-fluid" style="border-radius: 5%; width:150px;  height:300px">
                </div>
                </div>
            </div>
        </div><br>

        <div>
            <h2 id="desain-jasa" class="text-center"><b>Temukan Kantor Terdekat</b></h2><br>
            <div class="filter-container text-center">
                    <label for="region-filter"> Wilayah : </label>
                    <select id="region-filter">
                        <option value="all">Semua</option><hr>
                        <option value="jatim">Jawa Timur</option><hr>
                        <option value="jateng">Jawa Tengah</option><hr>
                        <option value="jogja">Yogyakarta</option><hr>
                        <option value="jabar">Jawa Barat</option><hr>
                        <option value="jakarta">Jakarta</option><hr>
                    </select>
                    <label class="ms-4" for="service-filter">Layanan : </label>
                    <select id="service-filter">
                        <option value="all">Semua</option><hr>
                        <option value="desain">Desain</option><hr>
                        <option value="jasa">Jasa</option><hr>
                    </select>
            </div><br>

            <div class="row row-cols-1 row-cols-md-3 g-4 ms-4 me-4 items-container">
                <div class="col item" data-region="jatim" data-service="desain">
                    <div class="card border-1 rounded-2 shadow">
                        <img src="http://localhost/FP-PEMWEB/Application-Wedeveloparch/asset/icon/logo-wirakata.jpeg" class="card-img-top mx-auto d-block" alt="..." style="width: 100px; height: 100px">
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col">
                                    <h5><b>CV Wirakata Studio</b></h5><hr>
                                    <img width="20" height="auto" src="https://img.icons8.com/ios/50/marker--v1.png" alt="marker--v1" class="float-start me-1"/>
                                    <p class="fs-20" value="jatim"> Surabaya </p>
                                    <img width="20" height="auto" src="https://img.icons8.com/sf-ultralight/25/home.png" alt="home" class="float-start me-1"/>
                                    <p class="">Jl. Setail No.1, Darmo, Kec. Wonokromo, Surabaya, Jawa Timur 60241</p>
                                </div>
                            </div>
                            <p class="card-text">CV Wirakata Studio adalah sebuah perusahaan dibidang desain arsitektur bangunan</b></p>
                            
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Detail
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">CV Wirakata Studio</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <h1>Form Pembelian</h1>
                                <?php include 'proses.php'; ?>
    <!-- Form untuk input transaksi -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nama_transaksi">Nama    :</label>
        <input type="text" id="nama_transaksi" name="nama_transaksi" required><br><br>

        <label for="kategori_proyek_transaksi">Kategori     :</label>
        <select id="kategori_proyek_transaksi" name="kategori_proyek_transaksi" required>
            <option value="Pilih">Pilih</option>
            <option value="Desain">Desain</option>
            <option value="Jasa">Jasa</option>
        </select><br><br>

        <label for="pesanan">Pesanan    :</label>
        <input type="text" id="pesanan" name="pesanan" required><br><br>

        <label for="alamat">Alamat   :</label>
        <input type="text" id="alamat" name="alamat" required><br><br>

        <label for="no_hp">No HP   :</label>
        <input type="text" id="no_hp" name="no_hp" required><br><br>

        <button type="submit" name="submit_transaksi">Submit Pesanan</button>
    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col item" data-region="jatim" data-service="jasa">
                    <div class="card border-1 rounded-2 shadow">
                        <img src="http://localhost/FP-PEMWEB/Application-Wedeveloparch/asset/icon/logo-arcite.jpeg" class="card-img-top mx-auto d-block" alt="..." style="width: 100px; height: 100px">
                        <div class="card-body">
                                <div class="row align-items-start">
                                    <div class="col">
                                        <h5><b>CV Arcite Design</b></h5><hr>
                                        <img width="20" height="auto" src="https://img.icons8.com/ios/50/marker--v1.png" alt="marker--v1" class="float-start me-1"/>
                                        <p class="fs-20" value="jatim"> Malang </p>
                                        <img width="20" height="auto" src="https://img.icons8.com/sf-ultralight/25/home.png" alt="home" class="float-start me-1"/>
                                        <p class="">Jl. Merdeka Selatan, Kiduldalem, Kec. Klojen, Kota Malang, Jawa Timur 65119</p>
                                    </div>
                                </div>
                                <p class="card-text">CV Arcite Design adalah sebuah perusahaan dibidang desain arsitektur bangunan</b></p>
                            <button class="border-1 rounded-2 border-primary text-primary"><b>Pesan Sekarang</b></button>
                        </div>
                    </div>
                </div>
                <div class="col item" data-region="jatim" data-service="desain">
                    <div class="card border-1 rounded-2 shadow">
                        <img src="http://localhost/FP-PEMWEB/Application-Wedeveloparch/asset/icon/logo-kreatif.jpeg" class="card-img-top mx-auto d-block" alt="..." style="width: 100px; height: 100px">
                            <div class="card-body">
                                <div class="row align-items-start">
                                    <div class="col">
                                        <h5><b>CV Karya Kreatif</b></h5><hr>
                                        <img width="20" height="auto" src="https://img.icons8.com/ios/50/marker--v1.png" alt="marker--v1" class="float-start me-1"/>
                                        <p class="fs-20" value="jatim"> Kediri </p>
                                        <img width="20" height="auto" src="https://img.icons8.com/sf-ultralight/25/home.png" alt="home" class="float-start me-1"/>
                                        <p class="">Jl. Panglima Sudirman, Kp. Dalem, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                    </div>
                                </div>
                                <p class="card-text">CV Karya Kreatif adalah sebuah perusahaan dibidang desain arsitektur bangunan</b></p>
                            <button class="border-1 rounded-2 border-primary text-primary"><b>Pesan Sekarang</b></button>
                        </div>
                    </div>
                </div>


                <div class="col item" data-region="jateng" data-service="desain">
                    <div class="card border-1 rounded-2 shadow">
                        <img src="http://localhost/FP-PEMWEB/Application-Wedeveloparch/asset/icon/logo-wirakata.jpeg" class="card-img-top mx-auto d-block" alt="..." style="width: 100px; height: 100px">
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col">
                                    <h5><b>CV Wirakata Studio</b></h5><hr>
                                    <img width="20" height="auto" src="https://img.icons8.com/ios/50/marker--v1.png" alt="marker--v1" class="float-start me-1"/>
                                    <p class="fs-20" value="jateng"> Semarang </p>
                                    <img width="20" height="auto" src="https://img.icons8.com/sf-ultralight/25/home.png" alt="home" class="float-start me-1"/>
                                    <p class="">Jl. Setail No.1, Darmo, Kec. Wonokromo, Surabaya, Jawa Timur 60241</p>
                                </div>
                            </div>
                            <p class="card-text">CV Wirakata Studio adalah sebuah perusahaan dibidang desain arsitektur bangunan</b></p>
                            
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Detail
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">CV Wirakata Studio</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <h1>Form Pembelian</h1>
                                <form id="pembelianForm" onsubmit="handleFormSubmit(event)">
                                    <label for="user_id">User ID:</label>
                                    <input type="text" id="user_id" name="user_id" required><br><br>
                                    <label for="produk">Produk:</label>
                                    <input type="text" id="produk" name="produk" required><br><br>
                                    <label for="jumlah">Jumlah:</label>
                                    <input type="number" id="jumlah" name="jumlah" required><br><br>
                                    <label for="harga">Harga:</label>
                                    <input type="number" step="0.01" id="harga" name="harga" required><br><br>
                                    <button type="submit">Pesan Sekarang</button>
                                </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col item" data-region="jateng" data-service="jasa">
                    <div class="card border-1 rounded-2 shadow">
                        <img src="http://localhost/FP-PEMWEB/Application-Wedeveloparch/asset/icon/logo-arcite.jpeg" class="card-img-top mx-auto d-block" alt="..." style="width: 100px; height: 100px">
                        <div class="card-body">
                                <div class="row align-items-start">
                                    <div class="col">
                                        <h5><b>CV Arcite Design</b></h5><hr>
                                        <img width="20" height="auto" src="https://img.icons8.com/ios/50/marker--v1.png" alt="marker--v1" class="float-start me-1"/>
                                        <p class="fs-20" value="jateng"> Pekalongan </p>
                                        <img width="20" height="auto" src="https://img.icons8.com/sf-ultralight/25/home.png" alt="home" class="float-start me-1"/>
                                        <p class="">Jl. Merdeka Selatan, Kiduldalem, Kec. Klojen, Kota Malang, Jawa Timur 65119</p>
                                    </div>
                                </div>
                                <p class="card-text">CV Arcite Design adalah sebuah perusahaan dibidang desain arsitektur bangunan</b></p>
                            <button class="border-1 rounded-2 border-primary text-primary"><b>Pesan Sekarang</b></button>
                        </div>
                    </div>
                </div>
                <div class="col item" data-region="jateng" data-service="desain">
                    <div class="card border-1 rounded-2 shadow">
                        <img src="http://localhost/FP-PEMWEB/Application-Wedeveloparch/asset/icon/logo-kreatif.jpeg" class="card-img-top mx-auto d-block" alt="..." style="width: 100px; height: 100px">
                            <div class="card-body">
                                <div class="row align-items-start">
                                    <div class="col">
                                        <h5><b>CV Karya Kreatif</b></h5><hr>
                                        <img width="20" height="auto" src="https://img.icons8.com/ios/50/marker--v1.png" alt="marker--v1" class="float-start me-1"/>
                                        <p class="fs-20" value="jateng"> Solo </p>
                                        <img width="20" height="auto" src="https://img.icons8.com/sf-ultralight/25/home.png" alt="home" class="float-start me-1"/>
                                        <p class="">Jl. Panglima Sudirman, Kp. Dalem, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                    </div>
                                </div>
                                <p class="card-text">CV Karya Kreatif adalah sebuah perusahaan dibidang desain arsitektur bangunan</b></p>
                            <button class="border-1 rounded-2 border-primary text-primary"><b>Pesan Sekarang</b></button>
                        </div>
                    </div>
                </div>


                <div class="col item" data-region="jogja" data-service="desain">
                    <div class="card border-1 rounded-2 shadow">
                        <img src="http://localhost/FP-PEMWEB/Application-Wedeveloparch/asset/icon/logo-wirakata.jpeg" class="card-img-top mx-auto d-block" alt="..." style="width: 100px; height: 100px">
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col">
                                    <h5><b>CV Wirakata Studio</b></h5><hr>
                                    <img width="20" height="auto" src="https://img.icons8.com/ios/50/marker--v1.png" alt="marker--v1" class="float-start me-1"/>
                                    <p class="fs-20" value="jogja"> Kulon Progo </p>
                                    <img width="20" height="auto" src="https://img.icons8.com/sf-ultralight/25/home.png" alt="home" class="float-start me-1"/>
                                    <p class="">Jl. Setail No.1, Darmo, Kec. Wonokromo, Surabaya, Jawa Timur 60241</p>
                                </div>
                            </div>
                            <p class="card-text">CV Wirakata Studio adalah sebuah perusahaan dibidang desain arsitektur bangunan</b></p>
                            
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Detail
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">CV Wirakata Studio</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <h1>Form Pembelian</h1>
                                <form id="pembelianForm" onsubmit="handleFormSubmit(event)">
                                    <label for="user_id">User ID:</label>
                                    <input type="text" id="user_id" name="user_id" required><br><br>
                                    <label for="produk">Produk:</label>
                                    <input type="text" id="produk" name="produk" required><br><br>
                                    <label for="jumlah">Jumlah:</label>
                                    <input type="number" id="jumlah" name="jumlah" required><br><br>
                                    <label for="harga">Harga:</label>
                                    <input type="number" step="0.01" id="harga" name="harga" required><br><br>
                                    <button type="submit">Pesan Sekarang</button>
                                </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col item" data-region="jogja" data-service="jasa">
                    <div class="card border-1 rounded-2 shadow">
                        <img src="http://localhost/FP-PEMWEB/Application-Wedeveloparch/asset/icon/logo-arcite.jpeg" class="card-img-top mx-auto d-block" alt="..." style="width: 100px; height: 100px">
                        <div class="card-body">
                                <div class="row align-items-start">
                                    <div class="col">
                                        <h5><b>CV Arcite Design</b></h5><hr>
                                        <img width="20" height="auto" src="https://img.icons8.com/ios/50/marker--v1.png" alt="marker--v1" class="float-start me-1"/>
                                        <p class="fs-20" value="jogja"> Sleman </p>
                                        <img width="20" height="auto" src="https://img.icons8.com/sf-ultralight/25/home.png" alt="home" class="float-start me-1"/>
                                        <p class="">Jl. Merdeka Selatan, Kiduldalem, Kec. Klojen, Kota Malang, Jawa Timur 65119</p>
                                    </div>
                                </div>
                                <p class="card-text">CV Arcite Design adalah sebuah perusahaan dibidang desain arsitektur bangunan</b></p>
                            <button class="border-1 rounded-2 border-primary text-primary"><b>Pesan Sekarang</b></button>
                        </div>
                    </div>
                </div>
                <div class="col item" data-region="jogja" data-service="desain">
                    <div class="card border-1 rounded-2 shadow">
                        <img src="http://localhost/FP-PEMWEB/Application-Wedeveloparch/asset/icon/logo-kreatif.jpeg" class="card-img-top mx-auto d-block" alt="..." style="width: 100px; height: 100px">
                            <div class="card-body">
                                <div class="row align-items-start">
                                    <div class="col">
                                        <h5><b>CV Karya Kreatif</b></h5><hr>
                                        <img width="20" height="auto" src="https://img.icons8.com/ios/50/marker--v1.png" alt="marker--v1" class="float-start me-1"/>
                                        <p class="fs-20" value="jogja"> Bantul </p>
                                        <img width="20" height="auto" src="https://img.icons8.com/sf-ultralight/25/home.png" alt="home" class="float-start me-1"/>
                                        <p class="">Jl. Panglima Sudirman, Kp. Dalem, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                    </div>
                                </div>
                                <p class="card-text">CV Karya Kreatif adalah sebuah perusahaan dibidang desain arsitektur bangunan</b></p>
                            <button class="border-1 rounded-2 border-primary text-primary"><b>Pesan Sekarang</b></button>
                        </div>
                    </div>
                </div>


                <div class="col item" data-region="jabar" data-service="desain">
                    <div class="card border-1 rounded-2 shadow">
                        <img src="http://localhost/FP-PEMWEB/Application-Wedeveloparch/asset/icon/logo-wirakata.jpeg" class="card-img-top mx-auto d-block" alt="..." style="width: 100px; height: 100px">
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col">
                                    <h5><b>CV Wirakata Studio</b></h5><hr>
                                    <img width="20" height="auto" src="https://img.icons8.com/ios/50/marker--v1.png" alt="marker--v1" class="float-start me-1"/>
                                    <p class="fs-20" value="jabar"> Cirebon </p>
                                    <img width="20" height="auto" src="https://img.icons8.com/sf-ultralight/25/home.png" alt="home" class="float-start me-1"/>
                                    <p class="">Jl. Setail No.1, Darmo, Kec. Wonokromo, Surabaya, Jawa Timur 60241</p>
                                </div>
                            </div>
                            <p class="card-text">CV Wirakata Studio adalah sebuah perusahaan dibidang desain arsitektur bangunan</b></p>
                            
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Detail
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">CV Wirakata Studio</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <h1>Form Pembelian</h1>
                                <form id="pembelianForm" onsubmit="handleFormSubmit(event)">
                                    <label for="user_id">User ID:</label>
                                    <input type="text" id="user_id" name="user_id" required><br><br>
                                    <label for="produk">Produk:</label>
                                    <input type="text" id="produk" name="produk" required><br><br>
                                    <label for="jumlah">Jumlah:</label>
                                    <input type="number" id="jumlah" name="jumlah" required><br><br>
                                    <label for="harga">Harga:</label>
                                    <input type="number" step="0.01" id="harga" name="harga" required><br><br>
                                    <button type="submit">Pesan Sekarang</button>
                                </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col item" data-region="jabar" data-service="jasa">
                    <div class="card border-1 rounded-2 shadow">
                        <img src="http://localhost/FP-PEMWEB/Application-Wedeveloparch/asset/icon/logo-arcite.jpeg" class="card-img-top mx-auto d-block" alt="..." style="width: 100px; height: 100px">
                        <div class="card-body">
                                <div class="row align-items-start">
                                    <div class="col">
                                        <h5><b>CV Arcite Design</b></h5><hr>
                                        <img width="20" height="auto" src="https://img.icons8.com/ios/50/marker--v1.png" alt="marker--v1" class="float-start me-1"/>
                                        <p class="fs-20" value="jabar"> Bogor </p>
                                        <img width="20" height="auto" src="https://img.icons8.com/sf-ultralight/25/home.png" alt="home" class="float-start me-1"/>
                                        <p class="">Jl. Merdeka Selatan, Kiduldalem, Kec. Klojen, Kota Malang, Jawa Timur 65119</p>
                                    </div>
                                </div>
                                <p class="card-text">CV Arcite Design adalah sebuah perusahaan dibidang desain arsitektur bangunan</b></p>
                            <button class="border-1 rounded-2 border-primary text-primary"><b>Pesan Sekarang</b></button>
                        </div>
                    </div>
                </div>
                <div class="col item" data-region="jabar" data-service="desain">
                    <div class="card border-1 rounded-2 shadow">
                        <img src="http://localhost/FP-PEMWEB/Application-Wedeveloparch/asset/icon/logo-kreatif.jpeg" class="card-img-top mx-auto d-block" alt="..." style="width: 100px; height: 100px">
                            <div class="card-body">
                                <div class="row align-items-start">
                                    <div class="col">
                                        <h5><b>CV Karya Kreatif</b></h5><hr>
                                        <img width="20" height="auto" src="https://img.icons8.com/ios/50/marker--v1.png" alt="marker--v1" class="float-start me-1"/>
                                        <p class="fs-20" value="jabar"> Bandung </p>
                                        <img width="20" height="auto" src="https://img.icons8.com/sf-ultralight/25/home.png" alt="home" class="float-start me-1"/>
                                        <p class="">Jl. Panglima Sudirman, Kp. Dalem, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                    </div>
                                </div>
                                <p class="card-text">CV Karya Kreatif adalah sebuah perusahaan dibidang desain arsitektur bangunan</b></p>
                            <button class="border-1 rounded-2 border-primary text-primary"><b>Pesan Sekarang</b></button>
                        </div>
                    </div>
                </div>


                <div class="col item" data-region="jakarta" data-service="desain">
                    <div class="card border-1 rounded-2 shadow">
                        <img src="http://localhost/FP-PEMWEB/Application-Wedeveloparch/asset/icon/logo-wirakata.jpeg" class="card-img-top mx-auto d-block" alt="..." style="width: 100px; height: 100px">
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col">
                                    <h5><b>CV Wirakata Studio</b></h5><hr>
                                    <img width="20" height="auto" src="https://img.icons8.com/ios/50/marker--v1.png" alt="marker--v1" class="float-start me-1"/>
                                    <p class="fs-20" value="jakarta"> Jakarta Selatan </p>
                                    <img width="20" height="auto" src="https://img.icons8.com/sf-ultralight/25/home.png" alt="home" class="float-start me-1"/>
                                    <p class="">Jl. Setail No.1, Darmo, Kec. Wonokromo, Surabaya, Jawa Timur 60241</p>
                                </div>
                            </div>
                            <p class="card-text">CV Wirakata Studio adalah sebuah perusahaan dibidang desain arsitektur bangunan</b></p>
                            
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Detail
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">CV Wirakata Studio</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <h1>Form Pembelian</h1>
                                <form id="pembelianForm" onsubmit="handleFormSubmit(event)">
                                    <label for="user_id">User ID:</label>
                                    <input type="text" id="user_id" name="user_id" required><br><br>
                                    <label for="produk">Produk:</label>
                                    <input type="text" id="produk" name="produk" required><br><br>
                                    <label for="jumlah">Jumlah:</label>
                                    <input type="number" id="jumlah" name="jumlah" required><br><br>
                                    <label for="harga">Harga:</label>
                                    <input type="number" step="0.01" id="harga" name="harga" required><br><br>
                                    <button type="submit">Pesan Sekarang</button>
                                </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col item" data-region="jakarta" data-service="jasa">
                    <div class="card border-1 rounded-2 shadow">
                        <img src="http://localhost/FP-PEMWEB/Application-Wedeveloparch/asset/icon/logo-arcite.jpeg" class="card-img-top mx-auto d-block" alt="..." style="width: 100px; height: 100px">
                        <div class="card-body">
                                <div class="row align-items-start">
                                    <div class="col">
                                        <h5><b>CV Arcite Design</b></h5><hr>
                                        <img width="20" height="auto" src="https://img.icons8.com/ios/50/marker--v1.png" alt="marker--v1" class="float-start me-1"/>
                                        <p class="fs-20" value="jakarta"> Jakarta Barat </p>
                                        <img width="20" height="auto" src="https://img.icons8.com/sf-ultralight/25/home.png" alt="home" class="float-start me-1"/>
                                        <p class="">Jl. Merdeka Selatan, Kiduldalem, Kec. Klojen, Kota Malang, Jawa Timur 65119</p>
                                    </div>
                                </div>
                                <p class="card-text">CV Arcite Design adalah sebuah perusahaan dibidang desain arsitektur bangunan</b></p>
                            <button class="border-1 rounded-2 border-primary text-primary"><b>Pesan Sekarang</b></button>
                        </div>
                    </div>
                </div>
                <div class="col item" data-region="jakarta" data-service="desain">
                    <div class="card border-1 rounded-2 shadow">
                        <img src="http://localhost/FP-PEMWEB/Application-Wedeveloparch/asset/icon/logo-kreatif.jpeg" class="card-img-top mx-auto d-block" alt="..." style="width: 100px; height: 100px">
                            <div class="card-body">
                                <div class="row align-items-start">
                                    <div class="col">
                                        <h5><b>CV Karya Kreatif</b></h5><hr>
                                        <img width="20" height="auto" src="https://img.icons8.com/ios/50/marker--v1.png" alt="marker--v1" class="float-start me-1"/>
                                        <p class="fs-20" value="jakarta"> Jakarta Pusat </p>
                                        <img width="20" height="auto" src="https://img.icons8.com/sf-ultralight/25/home.png" alt="home" class="float-start me-1"/>
                                        <p class="">Jl. Panglima Sudirman, Kp. Dalem, Kec. Kota, Kota Kediri, Jawa Timur 64129</p>
                                    </div>
                                </div>
                                <p class="card-text">CV Karya Kreatif adalah sebuah perusahaan dibidang desain arsitektur bangunan</b></p>
                            <button class="border-1 rounded-2 border-primary text-primary"><b>Pesan Sekarang</b></button>
                        </div>
                    </div>
                </div>

            </div><br><br>

            <script>
                const regionFilter = document.getElementById('region-filter');
                const serviceFilter = document.getElementById('service-filter');
                const items = document.querySelectorAll('.item');

                function filterItems() {
                    const selectedRegion = regionFilter.value;
                    const selectedService = serviceFilter.value;

                    items.forEach(item => {
                        const itemRegion = item.getAttribute('data-region');
                        const itemService = item.getAttribute('data-service');

                        if ((selectedRegion === 'all' || itemRegion === selectedRegion) &&
                            (selectedService === 'all' || itemService === selectedService)) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                            }
                    });
                }

                regionFilter.addEventListener('change', filterItems);
                serviceFilter.addEventListener('change', filterItems);

                // Initial filter to show all items
                filterItems();
            </script>
        </div>
        </main><br><br>

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
                        <a class="navbar-brand text-light" style="font-size:50px"  href="#"><span style="color: #5C4009;font-size:50px"><strong class="text-primary">We</strong></span><strong>developarch</strong></a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="../asset/script/script.js"></script>
    </body>
</html>
