<?php
include 'config/koneksi.php';
include 'config/data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="theme-color" content="#BC8887" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Undangan Pernikahan</title>

  <meta property="og:title" content="Undangan Pernikahan Sherly & Daeng - Sabtu, 21 Maret 2020">
  <meta property="og:description" content="Undangan Pernikahan Sherly & Daeng - Sabtu, 21 Maret 2020 di RM Pondok Kenanga, Jakasampurna Bekasi">
  <meta property="og:locale" content="id_ID" />
  <meta name="twitter:card" content="summary_large_image">
  <!-- Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <!-- Bulma Version 0.8.x-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css" />
  <!-- <link rel="stylesheet" href="https://unpkg.com/bulma-tooltip@0.1.5/dist/bulma-tooltip.min.css" /> -->


  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

  <link rel="stylesheet" type="text/css" href="css/menikah.css" />
  <link rel="stylesheet" type="text/css" href="css/jquery.countdown.css" />
  <link rel="stylesheet" type="text/css" href="css/countdown.css" />
  <link rel="stylesheet" type="text/css" href="css/background.css" />
  <link rel="stylesheet" type="text/css" href="css/imageSlider.css" />
  <link rel="stylesheet" type="text/css" href="css/splide.css" />
  <link rel="stylesheet" type="text/css" href="css/timeline.css" />
</head>
<script src="https://kit.fontawesome.com/237c69a9d4.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/jquery.coundown.js"></script>
<link rel="icon" type="image/png" href="image/favicon.png" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23064379-20"></script>
</head>

<body>

  <div class="modal fade" id="welcomeModal" tabindex="-1" role="dialog" aria-labelledby="welcomeModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <center>
            <p>Selamat Datang</p>
            <p>Tamu</p>
            <br><br><br>
            <img src="image/icon-A4.svg" width="80" height="10">
            <br><br><br>
            Tanpa mengurangi rasa hormat, kami memberikan kabar bahagia ini dan memohon restu dari rekan sekalian untuk senantiasa mendoakan kelancaran acara pernikahan kami.
            <br><br><br>
            <button type="button" id="play" class="btn btn-brown" data-bs-dismiss="modal">Buka Undangan</button>
          </center>
        </div>
      </div>
    </div>
  </div>
  <!-- End Welcome Popup -->

  <a id="play2" class="btn btn-custom-outline fixedButton" role="button"><i class="fa-solid fa-circle-pause"></i></a>

  <!-- Begin Preloader -->
  <div class="preloader-wrapper">
    <div class="preloader">
      <img src="image/favicon.png" alt="Flower" />
    </div>
  </div>
  <!-- End Preloader-->
  <!-- Begin Header -->
  <div class="header-wrapper" id="home">
    <!-- Begin Hero -->
    <section class="hero is-large">
      <!-- Begin Hero Content-->
      <div class="hero-body">
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>
        <div class="container has-text-centered">
          <h1 class="subtitle">Undangan Pernikahan</h1>
          <h2 class="title"><?php echo $mempelaiPria['nama']; ?> & <?php echo $mempelaiWanita['nama']; ?></h2>
        </div>
      </div><br><br><br><br>
      <!-- End Hero Content-->
      <!-- Begin Hero Menu -->
    </section>
    <!-- End Hero -->
  </div>
  <!-- End Header -->

  <!-- Begin Main Content -->
  <div class="main-content">

    <!-- Begin Bride-section-->
    <section class="section-light no-padding-top regular-section has-text-centered has-vertically-aligned-content" id="regular-section">
      <div class="section-bg">
        <div class="judul" data-aos="zoom-in" data-aos-easing="linear">Mempelai</div>

        <br><br><br><br><br><br>

        <div class="container">
          <div class="columns">
            <div class="column has-text-centered">
              <div class="oval-container" data-aos="zoom-in" data-aos-easing="linear">
                <img src="wedding/<?php echo $fotoP ?>" alt="Image 1" class="oval-image">
                <div class="nama-lengkap" data-aos="zoom-in" data-aos-easing="linear"><?php echo $mempelaiPria['namaLengkap']; ?></div>
              </div>
            </div>
            <div class="column has-text-centered">
              <div class="oval-container" data-aos="zoom-in" data-aos-easing="linear">
                <img src="wedding/<?php echo $fotoW ?>" alt="Image 2" class="oval-image">
                <div class="nama-lengkap" data-aos="zoom-in" data-aos-easing="linear"><?php echo $mempelaiWanita['namaLengkap']; ?></div>
              </div>
            </div>
          </div>
        </div>


        <span class="space40px"></span>
        <span class="space40px"></span>
        <span class="space40px"></span>
        <br>
        <div data-aos="zoom-in" data-aos-easing="linear">
          <img src="image/divider-leaves.png" class="divider has-text-centered" alt="~~~">
        </div>
        <span class="space40px"></span>
        <span class="space40px"></span>

      </div>
    </section>
    <!-- End Bride-section-->

    <!-- Begin Gallery Section -->
    <section class="section-dark" id="Gallery">
      <div class="judul has-text-centered" data-aos="zoom-in" data-aos-easing="linear">Gallery</div>
      <div class="space40px"></div>
      <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
          <section class="splide" data-aos="zoom-in" data-aos-easing="linear">
            <div class="splide__track">
              <ul class="splide__list">
                <?php
                while ($row4 = mysqli_fetch_assoc($result7)) {
                  $id = $row4['id'];
                  $foto = $row4['foto'];

                  echo '<li class="splide__slide">';
                  echo '<img src="wedding/' . $foto . ' ?>" width="300" height="400">';
                  echo '</li>';
                }
                ?>
              </ul>
            </div>
          </section>
        </div>
      </div>
      <div class="space40px"></div>
    </section>
    <!-- End Gallery Content -->

    <!-- Begin Waktu Section -->
    <section class="section-light" id="Waktu">
      <div class="section-bg">
        <div class="judul has-text-centered" data-aos="zoom-in" data-aos-easing="linear">Save the Date</div>
        <br><br>
        <!-- Start Countdown -->
        <div class="countdownwrap has-text-centered" data-aos="zoom-in" data-aos-easing="linear"></div>
        <script type="text/javascript">
          var tanggal = '<?php echo $tanggal['tanggal']; ?> <?php echo $tanggal['waktu']; ?>';
          var ringer = {
            countdown_to: tanggal,
            rings: {
              'DAYS': {
                s: 86400000, // milliseconds in a day,
                max: 365
              },
              'HOURS': {
                s: 3600000, // milliseconds per hour,
                max: 24
              },
              'MINUTES': {
                s: 60000, // milliseconds per minute
                max: 60
              },
              'SECONDS': {
                s: 1000,
                max: 60
              }
            },
            r_count: 4,
            r_spacing: 10, // px
            r_size: 100, // px
            r_thickness: 5, // px
            update_interval: 11, // ms

            init: function() {
              $r = ringer;
              $r.cvs = document.createElement('canvas');

              $r.size = {
                w: ($r.r_size + $r.r_thickness) * $r.r_count + ($r.r_spacing * ($r.r_count - 1)),
                h: ($r.r_size + $r.r_thickness)
              };

              $r.cvs.setAttribute('width', $r.size.w);
              $r.cvs.setAttribute('height', $r.size.h);
              $r.ctx = $r.cvs.getContext('2d');
              $(".countdownwrap").append($r.cvs);
              $r.cvs = $($r.cvs);
              $r.ctx.textAlign = 'center';
              $r.actual_size = $r.r_size + $r.r_thickness;
              $r.countdown_to_time = new Date($r.countdown_to).getTime();
              $r.cvs.css({
                width: $r.size.w + "px",
                height: $r.size.h + "px"
              });
              $r.go();
            },
            ctx: null,
            go: function() {
              var idx = 0;

              $r.time = Math.max(($r.countdown_to_time - new Date().getTime()), 0);

              if ($r.time === 0) {
                // Countdown has ended, set all values to 0
                for (var r_key in $r.rings) {
                  $r.unit(idx++, r_key, {
                    s: 1,
                    max: 1
                  });
                }
              } else {
                // Countdown is still ongoing
                for (var r_key in $r.rings) {
                  $r.unit(idx++, r_key, $r.rings[r_key]);
                }
                setTimeout($r.go, $r.update_interval);
              }
            },
            unit: function(idx, label, ring) {
              var x, y, value, ring_secs = ring.s;
              value = parseInt($r.time / ring_secs);
              $r.time -= value * ring_secs;

              x = ($r.r_size * .5 + $r.r_thickness * .5);
              x += +(idx * ($r.r_size + $r.r_spacing + $r.r_thickness));
              y = $r.r_size * .5;
              y += $r.r_thickness * .5;

              // calculate arc end angle
              var degrees = 360 - (value / ring.max) * 360.0;
              var endAngle = degrees * (Math.PI / 180);

              $r.ctx.save();
              $r.ctx.translate(x, y);
              $r.ctx.clearRect($r.actual_size * -0.5, $r.actual_size * -0.5, $r.actual_size, $r.actual_size);

              // first circle
              $r.ctx.strokeStyle = "rgba(128, 128, 128, 0.2)";
              $r.ctx.beginPath();
              $r.ctx.arc(0, 0, $r.r_size / 2, 0, 2 * Math.PI, 2);
              $r.ctx.lineWidth = $r.r_thickness;
              $r.ctx.stroke();

              // second circle
              $r.ctx.strokeStyle = "rgba(153, 110, 109, 1)";
              $r.ctx.beginPath();
              $r.ctx.arc(0, 0, $r.r_size / 2, 0, endAngle, 1);
              $r.ctx.lineWidth = $r.r_thickness;
              $r.ctx.stroke();

              // label
              $r.ctx.fillStyle = "#000000";
              $r.ctx.font = '12px Helvetica';
              $r.ctx.fillText(label, 0, 23);
              $r.ctx.fillText(label, 0, 23);

              $r.ctx.font = 'bold 40px Helvetica';
              $r.ctx.fillText(value > 0 ? Math.floor(value) : 0, 0, 10);

              $r.ctx.restore();
            }
          };

          ringer.init();
        </script>
        <!-- End Countdown -->

        <div class="space40px"></div>
        <div class="main-content has-text-centered" data-aos="zoom-in" data-aos-easing="linear">

        </div>
      </div>
    </section>
    <!-- End Waktu Content -->

    <!-- Begin Lokasi Section -->
    <section class="section-darker" id="lokasi">
      <div class="container">
        <div class="column is-12 regular-section" data-aos="zoom-in" data-aos-easing="linear">
          <div class="judul has-text-centered">Lokasi</div>
          <div class="space40px"></div>
          <p class="tempat is-larger has-text-centered">
            <strong>Gedung Ainia Rasyifa</strong>
            <br>
            Jl. WR Supratman No.18, Tj. Laut
            <br>
            Kec. Bontang Sel., Kota Bontang, Kalimantan Timur 75325
            <br>
          </p>
        </div>
        <div class="section-map" data-aos="zoom-in" data-aos-easing="linear">
          <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Gedung%20Ainia%20Rasyifa%20Jl.%20WR%20Soepratman%20No.18,%20Tj.%20Laut,%20Kec.%20Bontang%20Sel.,%20Kota%20Bontang,%20Kalimantan%20Timur%2075325+(Lokasi)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure acres/hectares on map</a></iframe></div>
        </div>
        <div class="space40px"></div>
        <div class="has-text-centered" data-aos="zoom-in" data-aos-easing="linear">
          <a href="https://goo.gl/maps/gdWJAuBdSouH5SZ76" class="button btn-cta" target="_blank" data-aos="zoom-in">
            <i class="fa-solid fa-location-dot"></i>&nbsp Arahkan Ke Lokasi
          </a>
        </div>
      </div>
    </section>
    <!-- End Lokasi Content -->

    <!-- Begin Tentang -->
    <section class="section-light regular-section is-fullheight" id="tentang">
      <div class="section-bg">
        <div class="judul has-text-centered" data-aos="zoom-in" data-aos-easing="linear">Tentang <?php echo $mempelaiPria['nama']; ?> & <?php echo $mempelaiWanita['nama']; ?></div>
        <div class="space40px"></div>
        <!-- The Timeline -->

        <ul class="timeline" data-aos="zoom-in" data-aos-easing="linear">

          <?php
          if (mysqli_num_rows($result8) > 0) {
            // Initialize the counter variable
            $counter = 1;

            // Loop through each row and generate HTML code
            while ($row = mysqli_fetch_assoc($result8)) {
              $judul = $row['judul'];
              $tanggal = $row['tanggal'];
              $deskripsi = $row['deskripsi'];
              $foto = $row['foto'];

              // Generate the HTML code for each item, including the row number
              if ($counter % 2 == 1) {
                echo '<li>';
                echo '<div class="direction-r">';
                echo '<div class="flag-wrapper">';
                echo '<span class="flag text-biasa">' . $judul . '</span>';
                echo '<span class="time-wrapper"><span class="time text-biasa">' . $tanggal . '</span></span>';               
                echo '</div>';
                echo '<br><br><div class="desc"><img src="wedding/' . $foto  . '" width="200" height="300"></div>';
                echo '<div class="desc text-biasa">' . $deskripsi . '</div>';
                echo '</div>';
                echo '</li>';
              } else {
                echo '<li>';
                echo '<div class="direction-l">';
                echo '<div class="flag-wrapper">';
                echo '<span class="flag text-biasa">' . $judul . '</span>';
                echo '<span class="time-wrapper"><span class="time text-biasa">' . $tanggal . '</span></span>';
                echo '</div>';
                echo '<br><br><div class="desc"><img src="wedding/' . $foto  . '" width="200" height="300"></div>';
                echo '<div class="desc text-biasa">' . $deskripsi . '</div>';
                echo '</div>';
                echo '</li>';
              }

              // Increment the counter
              $counter++;
            }
          } else {
            echo 'No ';
          }
          ?>

        </ul>
        <!-- partial -->
        <div class="space40px"></div>
      </div>
    </section>
    <!-- End Tentang -->

    <!-- Begin Kirim Amplop -->
    <section class="section-dark regular-section is-fullheight" id="amplop">
      <div class="judul has-text-centered" data-aos="zoom-in" data-aos-easing="linear">Kirim Amplop</div>
      <div class="space40px"></div>
      <p class="has-text-centered" data-aos="zoom-in" data-aos-easing="linear">Jika berkenan memberikan hadiah, bisa dikirim melalui rekening berikut</p>
      <div class="space40px"></div>
      <!-- Button trigger modal -->
      <div class="has-text-centered">
        <button type="button" class="btn btn-brown has" data-aos="zoom-in" data-aos-easing="linear" data-bs-toggle="modal" data-bs-target="#amplopModal">
          <i class="fa-solid fa-envelope"></i> Kirim Amplop
        </button>
      </div>
      <div class="space40px"></div>

      <!-- Modal Amplop -->
      <div class="modal" id="amplopModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Amplop Digital</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="col">
                <div class="col-auto text-center">
                  <div class="card">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item text-biasa "><strong>DANA</strong> 081234567899</li>
                      <li class="list-group-item text-biasa"><strong>DANA</strong> 081234567899</li>
                      <li class="list-group-item text-biasa"><strong>DANA</strong> 081234567899</li>
                    </ul>
                  </div>
                  <br>
                  <div class="card">
                    <ul class="list-group list-group-flush ">
                      <li class="list-group-item text-biasa"><strong>BCA</strong> 081234567899</li>
                      <li class="list-group-item text-biasa"><strong>BRI</strong> 081234567899</li>
                      <li class="list-group-item text-biasa"><strong>MANDIRI</strong> 081234567899</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Ucapan -->
      <div class="modal" id="ucapanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Kirim Ucapan & Doa</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="config/add.php" method="POST">
                <div class="mb-3">
                  <label class="form-label">Nama</label>
                  <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Ucapan & Doa</label>
                  <textarea class="form-control" name="ucapan" rows="3" required></textarea>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="submit_ucapan" class="btn btn-success">Kirim</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Kirim Amplop -->

    <!-- Begin Ucapan -->
    <section class="section-light regular-section is-fullheight" id="ucapan">
      <div class="section-bg">
        <div class="judul has-text-centered" data-aos="zoom-in" data-aos-easing="linear">Ucapan & Doa</div>
        <div class="space40px"></div>

        <div class="has-text-centered">
          <?php


          ?>
          <section class="splide splide2" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
              <ul class="splide__list">
                <?php
                while ($row3 = mysqli_fetch_assoc($result6)) {
                  $id = $row3['id'];
                  $nama = $row3['nama'];
                  $ucapan = $row3['ucapan'];

                  echo '<li class="splide__slide splide__slide2"> " ' . $ucapan . ' " <br><br>' . $nama .  '</li>';
                }
                ?>
              </ul>
            </div>
          </section>
        </div>

        <div class="space40px"></div>
        <!-- Button trigger modal -->
        <div class="has-text-centered">
          <button type="button" class="btn btn-brown has" data-aos="zoom-in" data-aos-easing="linear" data-bs-toggle="modal" data-bs-target="#ucapanModal">
            <i class="fa-solid fa-comment"></i> Kirim Ucapan
          </button>
        </div>
        <div class="space40px"></div>


      </div>
    </section>
    <!-- End Ucapan -->


    <!-- Begin RSVP Content -->
    <section class="section-dark contact" id="rsvp">
      <div class="container">
        <div class="columns is-multiline">
          <div class="column is-12 prolog has-text-centered" data-aos="zoom-in" data-aos-easing="linear">
            <p class="h5 text-biasa">
              Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir dan memberikan do'a restu kepada kedua mempelai.
            </p>

            <p><i>Hormat Kami Yang Mengundang</i></p>
            <div class="space40px"></div>

            <div class="space40px"></div>
            <div data-aos="zoom-in" data-aos-easing="linear">
              <img src="image/divider-leaves.png" class="divider has-text-centered" alt="~~~">
            </div>
            <div class="space40px"></div>
          </div>

        </div>
      </div>
    </section>
    <!-- End RSVP Content -->
  </div>
  <!-- End Main Content -->

  <!-- Begin Footer -->
  <div class="footer" data-aos="fade-up" data-aos-easing="linear">
    <div class="container">
      <p><a href="#home"><i class="fa-solid fa-heart fa-xl"></i></i></a>
        <a href="#Waktu"><i class="fa-solid fa-clock fa-xl"></i></a>
        <a href="#lokasi"><i class="fa-solid fa-location-dot fa-xl"></i></a>
        <a href="#Gallery"><i class="fa-solid fa-image fa-xl"></i></a>
        <a href="#amplop"><i class="fa-solid fa-envelope fa-xl"></i></a>
      </p>
    </div>
  </div>
  <!-- End Footer -->

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
  <script src="js/menikah.js"></script>
  <script src="js/background.js"></script>
  <script src="js/imageSlider.js"></script>
  <script src="js/splide.js"></script>
  <script>
    AOS.init({
      easing: "ease-out",
      duration: 800,
    });
  </script>
  <script>
    $(document).ready(function() {
      // Scroll to the top of the page
      $('html, body').animate({
        scrollTop: 0
      }, 'slow');
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#welcomeModal').modal('show');
    });
  </script>
  <script>
    var audio = new Audio('audio/tes.mp3'); // Replace with the actual path to your audio file
    var playButton = document.getElementById('play');

    playButton.addEventListener('click', function() {
      if (audio.paused) {
        audio.play();
      }
    });
  </script>
  <script>
    var audio = new Audio('audio/tes.mp3'); // Replace with the actual path to your audio file
    var playButton = document.getElementById('play2');

    playButton.addEventListener('click', function() {
      if (audio.paused) {
        audio.play();
        playButton.innerHTML = '<i class="fas fa-circle-pause"></i>';
      } else {
        audio.pause();
        playButton.innerHTML = '<i class="fas fa-circle-play"></i>';
      }
    });
  </script>

</body>

</html>