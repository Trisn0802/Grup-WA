<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- My CSS -->
  <link rel="stylesheet" href="style.css" />

  <!-- Web Logo -->
  <link rel="icon" href="Logo-only.png" type="x-icon">

  <title>Barudak Cibaduyut</title>
</head>
<style>
  body{
    overflow-x: hidden;
}

.a-btn {
  transition: 0.4s;
  border: 1px solid white;
  text-decoration: none;
  padding: 15px 32px;
  background-color: white;
  color: #212121;
  width: 100%;
  height: 100%;
  border-radius: 8px;
}

.a-btn:hover {
  background-color: gold;
  border: 1px solid gold;
  color: #212121;
}

.a-disable {
  cursor: not-allowed;
  background: #919191;
  color: white;
  text-decoration: none;
  border-radius: 8px;
  opacity: 0.3;
  padding: 15px 32px;
}

.a-disable:hover {
  color: white;
}

.hr-nav {
  border: 3px solid white;
  border-radius: 3px;
  width: 100%;
}

</style>
<body id="home">
  <!-- Navbar -->
<nav class="navbar navbar-dark bg-dark fixed-top fw-semibold">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="Logo-only.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Barudak Cibaduyut
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color: #515151">
      <div class="offcanvas-header ">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Barudak Cibaduyut</h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body justify-content-center align-content-center">
        <ul class="navbar-nav justify-content-end flex-grow-1">
        <li class="nav-item">
            <a class="a-btn" aria-current="page" href="#home">Home</a>
          </li>
          <br>
          <br>
          <li class="nav-item">
            <a class="a-btn" aria-current="page" href="#about">About</a>
          </li>
          <br>
          <br>
          <li class="nav-item">
            <a class="a-btn" aria-current="page" href="#circle">Circle</a>
          </li>
          <br>
          <br>
          <li class="nav-item">
            <a class="a-btn" aria-current="page" href="#contact">Contact</a>
          </li>
          <br>
          <br>
          <li class="nav-item">
            <a class="a-btn" aria-current="page" href="#brother">Brother's</a>
          </li>
          <br>
          <br>
          <li class="nav-item">
            <a class="a-disable" aria-current="page" href="#">Komentar</a>
          </li>
          <br>
          <hr class="hr-nav bg-white">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Anggota
            </a>
            <ul class="dropdown-menu">
            <li>
            <a class="dropdown-item" aria-current="page" href="ari.php">Ari</a>
          </li>
          <li>
            <a class="dropdown-item" aria-current="page" href="iqbal.php">Iqbal</a>
          </li>
          <li>
            <a class="dropdown-item" aria-current="page" href="luqman.php">Luqman</a>
          </li>
          <li>
            <a class="dropdown-item" aria-current="page" href="reza.php">Reza</a>
          </li>
          <li>
            <a class="dropdown-item" aria-current="page" href="ilham.php">Mamink</a>
          </li>
          <li>
            <a class="dropdown-item" aria-current="page" href="fahri.php">Fahri</a>
          </li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Coming Soon</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<!-- Akhir Navbar -->

  <!-- Jumbotron -->
  <section class="jumbotron text-center">
    <img src="img/Barudak Cibaduyut2.png" alt="Trisna Almuti" width="200" class="rounded-circle img-thumbnail" />
    <h1 class="display-4" style="font-weight: bold;">Barudak Cibaduyut</h1>
    <p class="lead">Group . 9 Participants</p>
    <p class="pengunjung"><?php
      $filename = 'counter.txt';
       
      function counter(){		
        global $filename;	
       
        if(file_exists($filename)){		
          $value = file_get_contents($filename);	
        }else{		
          $value = 0;		
        }
       
        file_put_contents($filename, ++$value);		
      }
       
      counter();	
       
      echo 'Total pengunjung: '.file_get_contents($filename);	
      ?></p>
      <div class="mb-3">
    <a href="https://chat.whatsapp.com/DYgkzBXPtr82CFlOelriEA" class="fw-bold a-btn">Join Grup</a>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1"
        d="M0,96L34.3,90.7C68.6,85,137,75,206,80C274.3,85,343,107,411,133.3C480,160,549,192,617,186.7C685.7,181,754,139,823,112C891.4,85,960,75,1029,101.3C1097.1,128,1166,192,1234,213.3C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- Akhir Jumbotron -->

  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>About Grup</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5 text-center">
        <div class="col-md-4">
          <p>Just a random grup</p>
        </div>
        <div class="col-md-4">
          <p>U can spell a randomly sh*t in here</p>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffd297" fill-opacity="1"
        d="M0,32L34.3,53.3C68.6,75,137,117,206,128C274.3,139,343,117,411,128C480,139,549,181,617,197.3C685.7,213,754,203,823,176C891.4,149,960,107,1029,122.7C1097.1,139,1166,213,1234,202.7C1302.9,192,1371,96,1406,48L1440,0L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- Akhir About -->

  <!-- Circle -->
  <section id="circle">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Circle</h2>
        </div>
      </div>
      <b class="row justify-content-center">
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/My Projects/Trisna2.jpg" class="card-img-top" alt="projects1" />
            <div class="card-body">
              <p class="card-text text-center">Trisna Almuti <a href="http://wa.me/62895711856677">(Trisna)</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/My Projects/Ari.jpg" class="card-img-top" alt="projects2" />
            <div class="card-body">
              <p class="card-text text-center">Achamad Riyadi <a href="http://wa.me/62895324930938">(Ari)</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/My Projects/Iqbal2.jpg" class="card-img-top" alt="projects3" />
            <div class="card-body">
              <p class="card-text text-center">Muhammad Iqbal Januari <a href="http://wa.me/6289668240038">(Iqbal)</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/My Projects/Luqman.jpg" class="card-img-top" alt="projects4" />
            <div class="card-body">
              <p class="card-text text-center">Luqman Nul Hakim <a href="http://wa.me/6283875498517">(Luqman)</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/My Projects/Reza4.jpg" class="card-img-top" alt="projects5" />
            <div class="card-body">
              <p class="card-text text-center">Mochamad Reza Saputra <a href="http://wa.me/6289506122706">(Reza)</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/My Projects/Mamink.jpg" class="card-img-top" alt="projects5" />
            <div class="card-body">
              <p class="card-text text-center">Ilham Maulana <a href="http://wa.me/6285774291142">(Mamink)</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/My Projects/Fahri.jpg" class="card-img-top" alt="projects5" />
            <div class="card-body">
              <p class="card-text text-center">Fahri Agung Laksono <a href="http://wa.me/6281382394225">(Fahri)</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/My Projects/Nando.png" class="card-img-top" alt="projects5" />
            <div class="card-body">
              <p class="card-text text-center">Nando <a href="http://wa.me/628889696977">(Nando)</a></p>
            </div>
          </div>
        </div>
    </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffd297" fill-opacity="1"
        d="M0,64L40,69.3C80,75,160,85,240,112C320,139,400,181,480,186.7C560,192,640,160,720,154.7C800,149,880,171,960,181.3C1040,192,1120,192,1200,165.3C1280,139,1360,85,1400,58.7L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- Akhir Circle -->

  <!-- Brother's -->
  <section>
    <section id="brother">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Brother's</h2>
          </div>
        </div>
        <div class="col-md-17 mb-5">
          <div class="card">
            <img src="img/Family.jpg" class="card-img-top" alt="projects6" />
            <div class="card-body">
              <p class="card-text text-center">Brother's Orion</p>
            </div>
          </div>
        </div>
        <div class="col-md-17 mb-5">
          <div class="card">
            <img src="img/Family2.jpg" class="card-img-top" alt="projects7" />
            <div class="card-body">
              <p class="card-text text-center">Brother's Perpusnas</p>
            </div>
          </div>
        </div>
        <div class="col-md-17 mb-5">
          <div class="card">
            <img src="img/Family3.jpg" class="card-img-top" alt="projects7" />
            <div class="card-body">
              <p class="card-text text-center">Brother's Event Wibu</p>
            </div>
          </div>
        </div>
        <div class="col-md-17 mb-5">
          <div class="card">
            <img src="img/Family Blok M (1).jpg" class="card-img-top" alt="projects7" />
            <div class="card-body">
              <p class="card-text text-center">Brother's Event Wibu 2</p>
            </div>
          </div>
        </div>
        <div class="col-md-17 mb-5">
          <div class="card">
            <img src="img/Family Blok M (2).jpg" class="card-img-top" alt="projects7" />
            <div class="card-body">
              <p class="card-text text-center">Brother's Event Wibu 3</p>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffd297" fill-opacity="1"
          d="M0,64L48,58.7C96,53,192,43,288,74.7C384,107,480,181,576,192C672,203,768,149,864,112C960,75,1056,53,1152,58.7C1248,64,1344,96,1392,112L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
      </svg>
    </section>
    <!-- Akhir Brother's -->

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-success mb-3">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0d6efd" fill-opacity="1"
          d="M0,64L40,101.3C80,139,160,213,240,224C320,235,400,181,480,181.3C560,181,640,235,720,234.7C800,235,880,181,960,160C1040,139,1120,149,1200,138.7C1280,128,1360,96,1400,80L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
        </path>
      </svg>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer class="bg-primary text-white text-center p-3">
      <p>Crate by Siswa SMKN 1 JAKARTA <br><a href="https://www.facebook.com/profile.php?id=100009981306756"
          class="text-white fw-bold">(Trisna Almuti XII RPL)</a></p>
    </footer>
    <!-- Akhir Footer -->
    <script src="js/bootstrap.bundle.js">
    </script>
<!-- 
    <script src="js/bootstrap.bundle.min.js">
    </script> -->
</body>

</html>