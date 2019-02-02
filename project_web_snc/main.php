<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_snc";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if (!$connection){
        die("Connection Failed:".mysqli_connect_error());
    }

    else{
    	echo "berhasil";
    }
$query = mysqli_query($connection,"SELECT * FROM tentang_kami ORDER BY id DESC");
?>

<!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Selamat Datang Di Website Smekti Nircable Community</h1>
      <h2>
      Ini adalah website resmi smekti nircable community, semua informasi tentang
      kami ada di sini
      </h2>
      <a href="#about" class="btn-get-started">Mulai Mengenal Kami</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Tentang Kami</h2>
            <p class="p-style"><?php echo $data["isi"];?></p>
            </div>
            <?php $no++; } ?>
        <?php } ?>
          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

      </div>
    </section><!-- #about -->
    
    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Peraturan Organisasi</h3>
          <p class="section-description">Berikut peraturan-peraturan dari smekti nircable community</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><i class="fa fa-desktop"></i></div>
              <h4 class="title">Pasal Satu</h4>
              <p class="description">"Anggota SNC dilarang mengakses situs-situs internet yang diluar kewajaran dan batas-batas peraturan perundang-undangan yang berupa pornografi, pornoaksi, dll."</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-desktop"></i></div>
              <h4 class="title">Pasal Dua</h4>
              <p class="description">"Anggota SNC dilarang terlibat atau berhubungan dengan apa saja yang dapat merusak dan mencemarkan nama baik SNC."</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-desktop"></i></div>
              <h4 class="title">Pasal Tiga</h4>
              <p class="description">"Anggota SNC harus berjanji tidak akan melakukan hal tersebut diatas"</p>
            </div>
          </div>

         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-desktop"></i></div>
              <h4 class="title">Pasal Empat</h4>
              <p class="description">"Anggota SNC harus mau berbagi ilmu yang telah diperoleh dari manapun kepada sesame anggota maupun orang lain."</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-desktop"></i></div>
              <h4 class="title">Pasal Lima</h4>
              <p class="description">"Harus memakai celana panjang dan baju bebas rapi."</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-desktop"></i></div>
              <h4 class="title">Pasal Enam</h4>
              <p class="description">"Bagi anggota yang berhalangan hadir pada pertemuan snc maka mereka harus memberitahuakannya ke pada senior."</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-desktop"></i></div>
              <h4 class="title">Pasal Tujuh</h4>
              <p class="description">"Bagi yang terlambat hadir harus memberitahukan keterlambatannya ke senior."</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->   

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Berita</h3>
          <p class="section-description">Kumpulan berita seputar teknologi terbaru</p>
        </div>
        <div class="row">

          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">Semua Berita</li>
              <li data-filter=".filter-app">Berita IT</li>
              <li data-filter=".filter-card">Berita Elektro</li>
              <li data-filter=".filter-logo">Berita SNC</li>
              <li data-filter=".filter-web">Berita Start UP</li>
            </ul>
          </div>
        </div>

        <div class="row" id="portfolio-wrapper">
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="style/img/portfolio/app1.jpg" alt="">
              <div class="details">
                <h4>App 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="style/img/portfolio/web2.jpg" alt="">
              <div class="details">
                <h4>Web 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="style/img/portfolio/app3.jpg" alt="">
              <div class="details">
                <h4>App 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="style/img/portfolio/card1.jpg" alt="">
              <div class="details">
                <h4>Card 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="style/img/portfolio/card2.jpg" alt="">
              <div class="details">
                <h4>Card 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="style/img/portfolio/web3.jpg" alt="">
              <div class="details">
                <h4>Web 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="style/img/portfolio/card3.jpg" alt="">
              <div class="details">
                <h4>Card 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="style/img/portfolio/app2.jpg" alt="">
              <div class="details">
                <h4>App 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="style/img/portfolio/logo1.jpg" alt="">
              <div class="details">
                <h4>Logo 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="style/img/portfolio/logo3.jpg" alt="">
              <div class="details">
                <h4>Logo 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="style/img/portfolio/web1.jpg" alt="">
              <div class="details">
                <h4>Web 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="style/img/portfolio/logo2.jpg" alt="">
              <div class="details">
                <h4>Logo 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Kepengurusan</h3>
          <p class="section-description">Kepengerusan snc tahun 2018/2019</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="style/img/team-1.jpg" alt=""></div>
              <h4>Arif Rahman</h4>
              <span>Ketua Umum SNC</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="style/img/team-3.jpg" alt=""></div>
              <h4>Tyo</h4>
              <span>Wakil Ketua SNC</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="style/img/team-2.jpg" alt=""></div>
              <h4>Vidia Levandri</h4>
              <span>Sekretaris SNC</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="style/img/team-4.jpg" alt=""></div>
              <h4>Cezar</h4>
              <span>Bendahara</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">KONTAK</h3>
          <p class="section-description">Informasi kontak kami, jika ada pertanyaan bisa tulis
          pesan di bawah kolom
          </p>
        </div>
      </div>    

      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Gedung Smkn 3 Mataram<br>Kota Mataram, NTB</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>snc2009@gmail.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>08786432211</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Pesan Telah Terkirim</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Tulis Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Tulis Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Tulis Subjek" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Tulis Pesan"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Kirim Pesan</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>