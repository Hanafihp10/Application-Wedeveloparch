<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Daftar Proyek</title>
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/papercut/60/building.png" />
    <link rel="stylesheet" href="../asset/style/products.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </head>
  <body class="body">
    <header>
      <nav class="navbar navbar-expand-lg shadow bg-body rounded">
        <div class="container-fluid">
          <img src="http://localhost/Application-Wedeveloparch/asset/icon/wedev-logo.png" alt="" width="60" height="60" />
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Layanan</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="../Application-Wedeveloparch/primary-page/Home.php">Desain</a></li>
                  <li><a class="dropdown-item" href="../Application-Wedeveloparch/primary-page/Home.php">Jasa</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="http://localhost/Application-Wedeveloparch/pages/Sign-In.php"> Daftar Proyek</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://api.whatsapp.com/send/?phone=62083862928254&text&type=phone_number&app_absent=0" tabindex="-1" aria-disabled="true">Contact</a>
              </li>
            </ul>
            <img href="#" src="https://img.icons8.com/?size=100&id=c8SsrDOfQgn3&format=png&color=000000" alt="" width="60" />
          </div>
        </div>
      </nav>
    </header>

    <main>
        <div class="text-center mt-5">
        <h1>Semua <span class="text-danger">Daftar</span>  Proyek</h1><br>
        <div class="filter-buttons">
            <button onclick="filterItems('jasa')" class="rounded-2 border-info bg-light me-3" href="http://localhost/FP-PEMWEB/Application-Wedeveloparch/primary-page/home.php">Jasa</button>
            <button onclick="filterItems('desain')" class="rounded-2 border-info bg-light me-3" href="http://localhost/FP-PEMWEB/Application-Wedeveloparch/primary-page/home.php">Desain</button>
          </div>

          <div class="items"><br>
            <div class="item jasa">
                <div class="card ms-5 me-5 mt-3 rounded-2 shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                              <div class="card border-0">
                                <div class="card-body">
                                    <img src="http://localhost/Application-Wedeveloparch/asset/Image/Product-image/Rumah-PakEdi.jpeg" alt="" class="w-75 h-75">
                                  <img src="" alt="">
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="card border-0">
                                <div class="card-body text-start">
                                  <h5 class="card-title"><strong>Renovasi Rumah Bapak Edi</strong></h5>
                                  <div>
                                    <p>Lama Pengerjaan : 7 Hari</p>
                                    <p>Ukuran : 6m x 6m</p>
                                    <p>Biaya : Rp 0</p>
                                    <p><strong>CV House Parctic</strong></p>
                                </div>
                                <a href="#" class="btn btn-danger">Detail</a>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="item desain">
                <div class="card ms-5 me-5 mt-3 rounded-2 shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                              <div class="card border-0">
                                <div class="card-body">
                                  <img src="http://localhost/Application-Wedeveloparch/asset/Image/Product-image/product-3.jpeg" alt="" class="w-50 h-50">
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="card border-0">
                                <div class="card-body text-start">
                                  <h5 class="card-title"><strong>Desain Rumah Bapak Mulyono</strong></h5>
                                  <div>
                                    <p>Lama Pengerjaan : 10 Hari</p>
                                    <p>Ukuran : 6m x 6m</p>
                                    <p>Biaya : Rp 0</p>
                                    <p><strong>CV Wardana Group</strong></p>
                                </div>
                                <a href="#" class="btn btn-danger">Detail</a>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
      
        <script>
            function filterItems(category) {
              var items = document.querySelectorAll(".item");
              items.forEach(function (item) {
                if (item.classList.contains(category)) {
                  item.style.display = "block";
                } else {
                  item.style.display = "none";
                }
              });
      
              var buttons = document.querySelectorAll(".filter-buttons button");
              buttons.forEach(function (button) {
                button.classList.remove("active");
              });
      
              event.target.classList.add("active");
            }
        </script>
        </div><br><br>
     

        <footer class="bg-dark">
            <div class="container-2">
                <div class="row">
                    <div class="col ms-1 text-light">
                        <h6>PERUSAHAAN</h6><hr>
                        <h5>CV Wirakata Studio</h5><br>
                        <h5>CV Arcite Design</h5><br>
                        <h5>CV Karya Kreatif</h5>
                    </div>
                    <div class="col">
                        <h6>CONTACT US</h6><hr class="text-light">
                        <a href="https://api.whatsapp.com/send/?phone=62083862928254&text&type=phone_number&app_absent=0" class="rounded border-3 shadow">
                            <img src="../Application-Wedeveloparch/asset/icon/icon-wa.png" alt="" class="w-10">
                        </a>
                    </div>
                    <div class="navbar-brand col d-flex align-items-center">
                        <a class="navbar-brand text-light" style="font-size: 50px" href="#"
                            ><span style="color: #006e90; font-size: 50px"><strong class="text-primary">We</strong></span
                            ><strong>DevelopArch</strong></a>
                    </div>  
                </div>
            </div><br>
            <hr class="text-light">
            <p class="text-center text-light">@Copyright | 2024</p>
        </footer>
    <script src="../asset/script/script.js"></script>
  </body>
</html>
