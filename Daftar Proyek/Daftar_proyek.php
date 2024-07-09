<!DOCTYPE html>
<html lang="en">

<head>
  <title>Daftar Proyek</title>
  <link rel="icon" type="image/x-icon" href="https://img.icons8.com/papercut/60/building.png" />
  <link rel="stylesheet" href="../asset/style/products.css" />
  <meta charset="UTF-8" />

  <link rel="stylesheet" href="../asset/style/daftar_proyek.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
</head>

<body class="body">
  <header>
    <nav class="navbar navbar-expand-lg shadow bg-body rounded">
      <div class="container-fluid">
        <a href="http://localhost/APPLICATION-WEDEVELOPARCH/dasboard.php"><img
            src="http://localhost/Application-Wedeveloparch/asset/icon/wedev-logo.png" alt="" width="60"
            height="60" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">Layanan</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item"
                    href="http://localhost/APPLICATION-WEDEVELOPARCH/primary-page/home.php">Desain</a></li>
                <li><a class="dropdown-item"
                    href="http://localhost/APPLICATION-WEDEVELOPARCH/primary-page/home.php">Jasa</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page"
                href="http://localhost/Application-Wedeveloparch/pages/Sign-In.php"> Daftar Proyek</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"
                href="https://api.whatsapp.com/send/?phone=62083862928254&text&type=phone_number&app_absent=0"
                tabindex="-1" aria-disabled="true">Contact</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle me-3" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <div class="profile-pic">
                  <img src="../asset/icon/profile2.gif" alt="Profile Picture" class="m-0">
                </div>
              </a>
              <ul class="dropdown-menu me-4" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="http://localhost/APPLICATION-WEDEVELOPARCH/pages/Sign-In.php"><i
                      class="fas fa-sign-out-alt fa-fw"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="text-center mt-5">
      <h1>Semua <span class="text-danger">Daftar</span> Proyek</h1><br>
      <div class="filter-buttons">
        <button onclick="filterItems('jasa')" class="rounded-2 border-info bg-light me-3 p-2"
          href="http://localhost/FP-PEMWEB/Application-Wedeveloparch/primary-page/home.php">Jasa</button>
        <button onclick="filterItems('desain')" class="rounded-2 border-info bg-light me-3 p-2"
          href="http://localhost/FP-PEMWEB/Application-Wedeveloparch/primary-page/home.php">Desain</button>
      </div>

      <div class="container">
        <div class="row height d-flex justify-content-center align-items-center">
          <div class="col-md-6">
            <div class="form">
              <i class="fa fa-search"></i>
              <input type="text" class="form-control form-input" placeholder="Search anything...">
              <span class="left-pan"><i class="fa fa-microphone"></i><img src="http://localhost/APPLICATION-WEDEVELOPARCH/asset/icon/mic.gif" width="25px" alt="mic"></span>
            </div>
          </div>
        </div>
      </div>

      <div class="items"><br>
        <?php
        // Koneksi ke database
        $koneksi = mysqli_connect("localhost", "root", "", "fp_pemweb");
        // Check connection
        if (!$koneksi) {
          die("Connection failed: " . mysqli_connect_error());
        }

        // Mengatur halaman saat ini
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 3; // Jumlah data per halaman
        $offset = ($page - 1) * $limit;

        // Query untuk menampilkan data proyek dengan limit dan offset
        $sql = "SELECT * FROM project LIMIT $limit OFFSET $offset";
        $result = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="item ' . $row["nama_perusahaan_terkait"] . '">
              <div class="card ms-5 me-5 mt-3 rounded-2 shadow">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="card border-0">
                        <div class="card-body">
                        <img src="../admin/tb_project/img/' . $row['image'] . '" alt="property" width="65%">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card border-0">
                        <div class="card-body text-start">
                          <h5 class="card-title"><strong>' . $row["nama_proyek"] . '</strong></h5>
                          <div>
                            <p>Lama Pengerjaan : ' . $row["lama_pengerjaan"] . ' Hari</p>
                            <p>Ukuran : ' . $row["ukuran"] . '</p>
                            <p>Biaya : Rp ' . number_format($row["biaya"], 2, ',', '.') . '</p>
                            <p><strong>' . $row["nama_perusahaan_terkait"] . '</strong></p>
                          </div>
                          <a href="#" class="btn btn-danger">Detail</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>';
          }
        } else {
          echo "Tidak ada data proyek.";
        }

        // Menampilkan tombol pagination
        $total_records = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM project"));
        $total_pages = ceil($total_records / $limit);
        echo "<nav aria-label='Page navigation example '>
          <ul class='pagination justify-content-center mt-5'>";
        if ($page > 1) {
          echo "<li class='page-item'><a class='page-link' href='?page=" . ($page - 1) . "' tabindex='-1'>Previous</a></li>";
        } else {
          echo "<li class='page-item disabled'><a class='page-link' href='#' tabindex='-1'>Previous</a></li>";
        }
        for ($i = 1; $i <= $total_pages; $i++) {
          if ($i == $page) {
            echo "<li class='page-item active'><a class='page-link' href='?page=$i'>$i</a></li>";
          } else {
            echo "<li class='page-item'><a class='page-link' href='?page=$i'>$i</a></li>";
          }
        }
        if ($page < $total_pages) {
          echo "<li class='page-item'><a class='page-link' href='?page=" . ($page + 1) . "'>Next</a></li>";
        } else {
          echo "<li class='page-item disabled'><a class='page-link' href='#'>Next</a></li>";
        }
        echo "</ul>
        </nav>";

        mysqli_close($koneksi);
        ?>
      </div><br><br>

      <footer class="bg-dark">
        <div class="container-2">
          <div class="row">
            <div class="col ms-1 text-light">
              <h6>PERUSAHAAN</h6>
              <hr>
              <h5>CV Wirakata Studio</h5><br>
              <h5>CV Arcite Design</h5><br>
              <h5>CV Karya Kreatif</h5>
            </div>
            <div class="col">
              <h6>CONTACT US</h6>
              <hr class="text-light">
              <a href="https://api.whatsapp.com/send/?phone=62083862928254&text&type=phone_number&app_absent=0"
                class="rounded border-3 shadow">
                <img src="../Application-Wedeveloparch/asset/icon/icon-wa.png" alt="" class="w-10">
              </a>
            </div>
            <div class="navbar-brand col d-flex align-items-center">
              <a class="navbar-brand text-light" style="font-size: 50px" href="#"><span
                  style="color: #006e90; font-size: 50px"><strong
                    class="text-primary">We</strong></span><strong>DevelopArch</strong></a>
            </div>
          </div>
        </div><br>
        <hr class="text-light">
        <p class="text-center text-light">@Copyright | 2024</p>
      </footer>
      <script src="../asset/script/script.js"></script>
      <script>
        document.querySelectorAll('.dropdown-toggle').forEach(item => {
          item.addEventListener('click', event => {
            if (event.target.classList.contains('dropdown-toggle')) {
              event.target.classList.toggle('toggle-change');
            } else if (event.target.parentElement.classList.contains('dropdown-toggle')) {
              event.target.parentElement.classList.toggle('toggle-change');
            }
          });
        });
      </script>
            <script>
          // Ambil elemen input pencarian
const searchInput = document.querySelector('.form-input');

// Ambil semua item proyek
const items = document.querySelectorAll('.item');

// Tambahkan event listener untuk input
searchInput.addEventListener('input', function() {
    const searchTerm = searchInput.value.toLowerCase();

    items.forEach(item => {
        const projectName = item.querySelector('.card-title').innerText.toLowerCase();
        if (projectName.includes(searchTerm)) {
            item.style.display = 'block'; // Tampilkan item jika cocok dengan pencarian
        } else {
            item.style.display = 'none'; // Sembunyikan item jika tidak cocok
        }
    });
});
        </script>
</body>

</html>