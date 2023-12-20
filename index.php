<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <title>Project</title>
</head>
<body>

  <header>
    <div class="container">
      <nav>
          <a href="#about"><img src="images/logo1.png" alt="logo" class="logo"></a>
          <div class="nav-links" id="navlinks">
            <i class='fa fa-times' onclick="hideMenu()"></i>
          <ul>
              <li><a href="#home">Home</a></li>
              <li><a href="#about">About Us</a></li>
              <li><a href="#contact">Contact Us</a></li>
          </ul>
          </div>
          <i class="fa fa-bars" onclick="showMenu()"></i>

          <a href="#"><div id="form-open" class="pulsa">
              <button id="cta" class="cta">
                Masuk<div class="star a"></div>
              <div class="star b"></div>
              <div class="star c"></div>
              <div class="star d"></div>
              <div class="star e"></div>
              <div class="star f"></div>
              <div class="star g"></div>
              <svg version="1.1" viewBox="0 0 1024 1024" width="24px" class="rocket"><path fill="#3A7EB9" d="M662.72 462.784l136.448 169.408v173.248l-136.448-48.32zM342.72 457.344L206.272 626.816v173.248l136.448-48.384z"></path><path fill="#D48171" d="M570.688 418.688l-142.848 1.152a266.496 266.496 0 0 1-20.288-0.576l3.712 448.64c0.256 28.928 94.272 130.048 94.272 130.048s93.888-102.656 93.632-131.584l-3.712-448.96a344.64 344.64 0 0 1-24.768 1.28z"></path><path fill="#E9DF92" d="M531.456 599.296l-63.04 0.576c-3.008 0-5.952-0.064-8.96-0.384l2.176 257.792c0.128 16.64 41.728 74.816 41.728 74.816s41.344-58.944 41.28-75.52l-2.176-257.92c-3.648 0.384-7.296 0.64-11.008 0.64z"></path><path fill="#B5D5EB" d="M554.304 93.568a324.352 324.352 0 0 0-110.592 1.728L342.72 240.768v584.512c13.824-0.96 27.968-1.536 42.368-1.536h245.248c11.84 0 23.36 0.384 34.816 1.024V253.312L554.304 93.568z"></path><path fill="#3A7EB9" d="M541.44 94.144L500.416 35.008l-45.696 59.136v29.504h89.024v-29.504zM459.456 288.64h88.96v88.896h-88.96zM459.456 467.456h88.96v88.96h-88.96zM459.456 634.176h88.96v88.896h-88.96zM364.928 788.736h277.76v44.352h-277.76z"></path></svg>
              </button>
            </div></a>
      </nav>
    </div>
  </header>

<div class="slider">
    <div class="slide active" style="background-image: url(images/page1.png)">
      <div class="caption-1">
        <div id="home">

          <div class="form-container">
            <img class="form-close" src="images/close.png">
            <!-- login from -->
            <div class="form login-form">
              <form action="login.php" method="post">
                <h2>Log In</h2>
                <div class="input-box">
                  <input type="email" name="email" id="email" placeholder="Enter your email" required>
                  <img class="email" src="images/mail.png">
                </div>
                <div class="input-box">
                  <input type="password" name="password" itemid="email" placeholder="Enter your password" id="password" required>
                  <img class="password" src="images/lock.png">
                  <img class="pw-hide" src="images/visibility_off.png" id="visibility_off">
                </div>

                <div class="option-field">
                  <span class="checkbox">
                    <input type="checkbox" id="check">
                    <label for="check">Remember Me</label>
                  </span>
                  <a href="#" class="forgot-pw">Forgot Password?</a>
                </div>

                <button onclick="showToast()" type="submit" id="btn-masuk" name="sendlog" value="Login Now" class="btn-login">Login Now</button>

                <div class="login-signup">Don't have an account? <a href="index.php" id="signup">Sign Up</a></div>
              </form>
            </div>

            <!-- Signup form -->
            <div class="form signup-form">
              <form action="register.php" method="post">
                <h2>Sign Up</h2>
                <div class="input-box">
                  <input type="email" name="email" id="email" placeholder="Enter your email" required>
                  <img class="email" src="images/mail.png">
                </div>
                <div class="input-box">
                  <input type="password" name="password" itemid="password" placeholder="Create password" id="password" required>
                  <img class="password" src="images/lock.png">
                  <img class="pw-hide" src="images/visibility_off.png" id="visibility_off">
                </div>
                <div class="input-box">
                  <input type="password" name="cpassword" itemid="cpassword" placeholder="Confirm password" id="password" required>
                  <img class="password" src="images/lock.png">
                  <img class="pw-hide" src="images/visibility_off.png" id="visibility_off">
                </div>

                <button onclick="showToast()" type="submit" name="sendreg" value="Sign Up Now" class="btn-login">Sign Up Now</button>

                <div class="login-signup">Already have an account? <a href="index.php" id="login">Log In</a></div>
              </form>
            </div>
          </div>

          <table class="buttons">
              <tr>
                  <div class="btn-1">
                    <a href="sun.php">
                      <button type="submit" class="btn-sun">
                          <img class="gambar-btn" src="images/Sun.png" alt="matahari">
                          <span class="eng">Sun</span>
                          <span class="in">Matahari</span>
                      </button></a>
                  </div>

                  <div class="btn-2">
                    <a href="mercury.php">
                      <button type="submit" class="btn-mercury">
                          <img class="gambar-btn" src="images/Mercury.png" alt="merkurius">
                          <span class="eng">Mercury</span>
                          <span class="in">Merkurius</span>
                      </button></a>
                  </div>
                  

                  <div class="btn-1">
                    <a href="venus.php">
                      <button type="submit" class="btn-venus">
                          <img class="gambar-btn" src="images/Venus.png" alt="venus">
                          <span class="eng">Venus</span>
                          <span class="in">Venus</span>
                      </button></a>
                  </div>

                  <div class="btn-2">
                    <a href="earth.php">
                      <button type="submit" class="btn-earth">
                          <img class="gambar-btn" src="images/Earth.png" alt="bumi">
                          <span class="eng">Earth</span>
                          <span class="in">Bumi</span>
                      </button></a>
                  </div>

                  <div class="btn-1">
                    <a href="mars.php">
                      <button type="submit" class="btn-mars">
                          <img class="gambar-btn" src="images/Mars.png" alt="mars">
                          <span class="eng">Mars</span>
                          <span class="in">Mars</span>
                      </button></a>
                  </div>

                  <div class="btn-2">
                    <a href="jupiter.php">
                      <button type="submit" class="btn-jupiter">
                          <img class="gambar-btn" src="images/Jupiter.png" alt="jupiter">
                          <span class="eng">Jupiter</span>
                          <span class="in">Jupiter</span>
                      </button></a>
                  </div>

                  <div class="btn-1">
                    <a href="saturn.php">
                      <button type="submit" class="btn-saturn">
                          <img class="gambar-btn7" src="images/Saturnus.png" alt="saturnus">
                          <span class="eng">Saturn</span>
                          <span class="in">Saturnus</span>
                      </button></a>
                  </div>

                  <div class="btn-2">
                    <a href="uranus.php">
                      <button type="submit" class="btn-uranus">
                          <img class="gambar-btn" src="images/Uranus.png" alt="uranus">
                          <span class="eng">Uranus</span>
                          <span class="in">Uranus</span>
                      </button></a>
                  </div>

                  <div class="btn-1">
                    <a href="neptune.php">
                      <button type="submit" class="btn-neptune">
                          <img class="gambar-btn" src="images/neptune.png" alt="neptunus">
                          <span class="eng">Neptune</span>
                          <span class="in">Neptunus</span>
                      </button></a>
                  </div>
              </tr>
          </table>
        </div>
      </div>
    </div>

      <div id="sun" class="slide" style="background-image: url(images/bgStarrySky.jpg)">
        <div class="caption-2" id="sun">
          <div class="row">
            <div class="content-left">
              <img class="img-sun" src="images/Sun.png" alt="matahari">
            </div>
            <div class="content-right">
              <h1>Sun <span>Matahari</span></h1>
              <p align="justify">Matahari itu bintang yang paling deket sama kita di tata surya. Dia super gede, ukurannya sekitar 109 kali lebih besar dari Bumi! Matahari punya energi yang luar biasa, dia ngeluarin cahaya dan panas yang bikin kita bisa hidup di Bumi.</p>
            </div>
          </div>
        </div>
      </div>

    <div class="slide" style="background-image: url(images/bgStarrySky.jpg)">
      <div class="caption-2">
        <div class="row">
          <div class="content-left">
            <img class="img-mercury" src="images/Mercury.png" alt="merkurius">
          </div>
          <div class="content-right">
            <h1>Mercury <span>Merkurius</span></h1>
            <p align="justify">Merkurius adalah planet terkecil di tata surya kita. Meskipun terdekat dengan matahari, Merkurius bukanlah yang paling panas di antara semua planet. Planet yang lebih panas adalah Venus.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="slide" style="background-image: url(images/bgStarrySky.jpg)">
      <div class="caption-2">
        <div class="row">
          <div class="content-left">
            <img class="img-venus" src="images/Venus.png" alt="venus">
          </div>
          <div class="content-right">
            <h1>Venus <br><span>Venus</span></h1>
            <p align="justify">Venus adalah planet yang sangat panas meskipun tidak paling dekat dengan Matahari. Venus bisa jadi sangat cerah di langit malam karena pantulan cahaya dari Matahari. Selain itu, hari di Venus lebih lama dari tahunnya karena planet ini berputar sangat lambat. Orang-orang dulu sering menyebut Venus sebagai "Bintang Fajar" atau "Senja".</p>
          </div>
        </div>
      </div>
    </div>

    <div class="slide" style="background-image: url(images/bgStarrySky.jpg)">
      <div class="caption-2">
        <div class="row">
          <div class="content-left">
            <img class="img-earth" src="images/Earth.png" alt="bumi">
          </div>
          <div class="content-right">
            <h1>Earth <br><span>Bumi</span></h1>
            <p align="justify">Bumi adalah rumah kita di ruang angkasa! Dia itu seperti sebuah bola besar yang banyak terbuat dari batu-batu. Ada banyak tempat menarik di Bumi, seperti gunung tinggi, lembah dalam, dan dataran luas. Tapi, yang membuat Bumi benar-benar spesial adalah airnya. 70% dari permukaannya tertutupi oleh air! Tahu nggak? Bumi adalah satu-satunya planet di tata surya kita yang punya banyak lautan dan sungai.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="slide" style="background-image: url(images/bgStarrySky.jpg)">
      <div class="caption-2">
        <div class="row">
          <div class="content-left">
            <img class="img-mars" src="images/Mars.png" alt="mars">
          </div>
          <div class="content-right">
            <h1>Mars <br><span>Mars</span></h1>
            <p align="justify">Mars itu seperti gurun dingin di luar angkasa. Ukurannya sekitar setengah dari Bumi. Mars disebut juga Planet Merah karena tanahnya yang berisi besi berkarat. Tahukah kamu, di Mars ada musim seperti di Bumi! Ada gunung berapi, lembah, dan cuaca juga. Udara di sana sangat tipis, terdiri dari gas-gas seperti karbon dioksida, nitrogen, dan argon.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="slide" style="background-image: url(images/bgStarrySky.jpg)">
      <div class="caption-2">
        <div class="row">
          <div class="content-left">
            <img class="img-jupiter" src="images/Jupiter.png" alt="jupiter">
          </div>
          <div class="content-right">
            <h1>Jupiter <span>Jupiter</span></h1>
            <p align="justify">Jupiter itu seperti raksasa gas di tata surya kita. Meskipun besar, dia sebenarnya bukan bintang karena dia nggak bisa menyala sendiri. Uniknya, Jupiter nggak punya permukaan yang keras kayak Bumi, tapi mungkin punya inti kecil di dalamnya. Dia juga punya cincin tapi sayangnya cincinnya nggak keliatan dengan jelas kaya cincin planet lain. Oh ya, satu lagi, Jupiter itu segede 1.300 kali ukuran Bumi!</p>
          </div>
        </div>
      </div>
    </div>

    <div class="slide" style="background-image: url(images/bgStarrySky.jpg)">
      <div class="caption-2">
        <div class="row">
          <div class="content-left">
            <img class="img-saturn" src="images/Saturnus.png" alt="saturnus">
          </div>
          <div class="content-right">
            <h1>Saturn <span>Saturnus</span></h1>
            <p align="justify">Saturnus itu seperti planet yang pakai topi paling keren di tata surya kita! Jadi, Saturnus ini punya cincin, bukan cuma dia yang punya cincin, tapi cincin Saturnus yang paling cantik. Cincinnya itu terbuat dari potongan-potongan es dan batu kecil yang berputar-putar mengelilingi Saturnus. Saturnus ini juga kebanyakan terbuat dari gas hydrogen dan helium, mirip seperti Jupiter.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="slide" style="background-image: url(images/bgStarrySky.jpg)">
      <div class="caption-2">
        <div class="row">
          <div class="content-left">
            <img class="img-uranus" src="images/Uranus.png" alt="uranus">
          </div>
          <div class="content-right">
            <h1>Uranus <span>Uranus</span></h1>
            <p align="justify">Uranus memiliki warna biru-hijau yang indah. Ukuran planet ini lebih kecil dari Jupiter dan Saturnus. Dia adalah planet ketujuh dari Matahari dan terkenal karena sumbunya yang miring, berbeda dengan planet lainnya. Oleh karena itu dia dikenal dengan "Planet Tidur".</p>
          </div>
        </div>
      </div>
    </div>

    <div class="slide" style="background-image: url(images/bgStarrySky.jpg)">
      <div class="caption-2">
        <div class="row">
          <div class="content-left">
            <img class="img-neptune" src="images/neptune.png" alt="neptunus">
          </div>
          <div class="content-right">
            <h1>Neptune <span>Neptunus</span></h1>
            <p align="justify">Neptunus adalah planet terakhir di tata surya kita. Dia jauh banget dari matahari, lebih dari 30 kali lebih jauh daripada Bumi dari matahari. Neptunus adalah planet biru yang punya badai besar, "Badai Besar Biru". Kita harus berhati-hati kalau berkunjung ke sana!</p>
          </div>
        </div>
      </div>
    </div>

    <div class="controls">
      <span class="prev">❮</span>
      <span class="next">❯</span>
    </div>
  </div>  

  <div id="about" class="about">
    <video id="bg-video" autoplay muted loop>
      <source src="video/Moving stars overlay.mp4" type="video/mp4">
    </video>
    <div class="about-info">
    <center>
      <h3>Welcome To Planetaria 🪐</h3>
      <p>Website ini kami beri nama "Planetaria" yang secara langsung merujuk pada planet dan astronomi, menyoroti fokus situs web pada topik ini yaitu edukasi tentang planet untuk anak-anak. Website ini bisa menjadi sebuah media pembelajaran yang menyajikan informasi menarik dan menyenangkan tentang planet-planet yang ada di tata surya kita. Anak-anak bisa belajar tentang nama, warna, ukuran, jarak, dan ciri-ciri khusus dari setiap planet dengan melihat gambar, atau animasi yang interaktif. Website ini cocok untuk anak-anak usia 4-10 tahun yang ingin menambah wawasan dan mengembangkan minat mereka terhadap ilmu pengetahuan alam, khususnya astronomi. Website ini mudah diakses, gratis, dan aman untuk anak-anak. Website ini juga bisa menjadi sumber referensi bagi orang tua dan guru yang ingin memberikan edukasi planet untuk anak-anak secara menyenangkan dan efektif.</p>
    </center>
    </div>
  </div>

  <div id="contact">
    <video id="bg-video" autoplay muted loop>
      <source src="video/Moving stars overlay.mp4" type="video/mp4">
    </video>
    <div class="contact-info">
        <center>
          <h3>Our Team</h3>
          <div class="card-grup">
          <div class="card-client">
            <div class="user-picture">
                <img src="images/fitri.png" alt="profile">
            </div>
            <p class="name-client">Fitri Azzahra H

            </p>
            <div class="social-media">
                <a href="https://github.com/fitriazzhr" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 475 512">
                    <path d="M256,32C132.3,32,32,134.9,32,261.7c0,101.5,64.2,187.5,153.2,217.9a17.56,17.56,0,0,0,3.8.4c8.3,0,11.5-6.1,11.5-11.4,0-5.5-.2-19.9-.3-39.1a102.4,102.4,0,0,1-22.6,2.7c-43.1,0-52.9-33.5-52.9-33.5-10.2-26.5-24.9-33.6-24.9-33.6-19.5-13.7-.1-14.1,1.4-14.1h.1c22.5,2,34.3,23.8,34.3,23.8,11.2,19.6,26.2,25.1,39.6,25.1a63,63,0,0,0,25.6-6c2-14.8,7.8-24.9,14.2-30.7-49.7-5.8-102-25.5-102-113.5,0-25.1,8.7-45.6,23-61.6-2.3-5.8-10-29.2,2.2-60.8a18.64,18.64,0,0,1,5-.5c8.1,0,26.4,3.1,56.6,24.1a208.21,208.21,0,0,1,112.2,0c30.2-21,48.5-24.1,56.6-24.1a18.64,18.64,0,0,1,5,.5c12.2,31.6,4.5,55,2.2,60.8,14.3,16.1,23,36.6,23,61.6,0,88.2-52.4,107.6-102.3,113.3,8,7.1,15.2,21.1,15.2,42.5,0,30.7-.3,55.5-.3,63,0,5.4,3.1,11.5,11.4,11.5a19.35,19.35,0,0,0,4-.4C415.9,449.2,480,363.1,480,261.7,480,134.9,379.7,32,256,32Z" fill="white"></path>
                  </svg>
                  <span class="tooltip-social">Github</span>
                </a>
                <a href="https://www.instagram.com/_fitriazzahraa/?hl=en" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                    </svg>
                    <span class="tooltip-social">Instagram</span>
                </a>
                <a href="https://wa.me/qr/JZZBYHS6UQKRI1" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.5 16.5">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" fill="white"></path>
                  </svg>
                  <span class="tooltip-social">Whatsapp</span>
                </a>
            </div>
          </div>

          <div class="card-client">
            <div class="user-picture">
                <img src="images/shilda.jpg" alt="profile">
            </div>
            <p class="name-client">Shilda Riri D
            </p>
            <div class="social-media">
              <a href="https://github.com/shilda14" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 475 512">
                  <path d="M256,32C132.3,32,32,134.9,32,261.7c0,101.5,64.2,187.5,153.2,217.9a17.56,17.56,0,0,0,3.8.4c8.3,0,11.5-6.1,11.5-11.4,0-5.5-.2-19.9-.3-39.1a102.4,102.4,0,0,1-22.6,2.7c-43.1,0-52.9-33.5-52.9-33.5-10.2-26.5-24.9-33.6-24.9-33.6-19.5-13.7-.1-14.1,1.4-14.1h.1c22.5,2,34.3,23.8,34.3,23.8,11.2,19.6,26.2,25.1,39.6,25.1a63,63,0,0,0,25.6-6c2-14.8,7.8-24.9,14.2-30.7-49.7-5.8-102-25.5-102-113.5,0-25.1,8.7-45.6,23-61.6-2.3-5.8-10-29.2,2.2-60.8a18.64,18.64,0,0,1,5-.5c8.1,0,26.4,3.1,56.6,24.1a208.21,208.21,0,0,1,112.2,0c30.2-21,48.5-24.1,56.6-24.1a18.64,18.64,0,0,1,5,.5c12.2,31.6,4.5,55,2.2,60.8,14.3,16.1,23,36.6,23,61.6,0,88.2-52.4,107.6-102.3,113.3,8,7.1,15.2,21.1,15.2,42.5,0,30.7-.3,55.5-.3,63,0,5.4,3.1,11.5,11.4,11.5a19.35,19.35,0,0,0,4-.4C415.9,449.2,480,363.1,480,261.7,480,134.9,379.7,32,256,32Z" fill="white"></path>
                </svg>
                <span class="tooltip-social">Github</span>
              </a>
              <a href="https://www.instagram.com/shildardm/?hl=en" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                      <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                  </svg>
                  <span class="tooltip-social">Instagram</span>
              </a>
              <a href="https://wa.me/qr/ONB6NFP5DXLXA1" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.5 16.5">
                  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" fill="white"></path>
                </svg>
                <span class="tooltip-social">Whatsapp</span>
              </a>
            </div>
          </div>

          <div class="card-client">
            <div class="user-picture">
                <img src="images/ainun.jpg" alt="profile">
            </div>
            <p class="name-client">Ainun Permata
            </p>
            <div class="social-media">
              <a href="https://github.com/permatta" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 475 512">
                  <path d="M256,32C132.3,32,32,134.9,32,261.7c0,101.5,64.2,187.5,153.2,217.9a17.56,17.56,0,0,0,3.8.4c8.3,0,11.5-6.1,11.5-11.4,0-5.5-.2-19.9-.3-39.1a102.4,102.4,0,0,1-22.6,2.7c-43.1,0-52.9-33.5-52.9-33.5-10.2-26.5-24.9-33.6-24.9-33.6-19.5-13.7-.1-14.1,1.4-14.1h.1c22.5,2,34.3,23.8,34.3,23.8,11.2,19.6,26.2,25.1,39.6,25.1a63,63,0,0,0,25.6-6c2-14.8,7.8-24.9,14.2-30.7-49.7-5.8-102-25.5-102-113.5,0-25.1,8.7-45.6,23-61.6-2.3-5.8-10-29.2,2.2-60.8a18.64,18.64,0,0,1,5-.5c8.1,0,26.4,3.1,56.6,24.1a208.21,208.21,0,0,1,112.2,0c30.2-21,48.5-24.1,56.6-24.1a18.64,18.64,0,0,1,5,.5c12.2,31.6,4.5,55,2.2,60.8,14.3,16.1,23,36.6,23,61.6,0,88.2-52.4,107.6-102.3,113.3,8,7.1,15.2,21.1,15.2,42.5,0,30.7-.3,55.5-.3,63,0,5.4,3.1,11.5,11.4,11.5a19.35,19.35,0,0,0,4-.4C415.9,449.2,480,363.1,480,261.7,480,134.9,379.7,32,256,32Z" fill="white"></path>
                </svg>
                <span class="tooltip-social">Github</span>
              </a>
              <a href="https://www.instagram.com/tessunagrie/?hl=en" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                      <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                  </svg>
                  <span class="tooltip-social">Instagram</span>
              </a>
              <a href="https://wa.me/qr/5RU5GNOBZ7CEI1" target="_blank"> 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.5 16.5">
                  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" fill="white"></path>
                </svg>
                <span class="tooltip-social">Whatsapp</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </center>
      
    <div class="row">
      <div class="contact-left">
        <video id="bg-video" autoplay muted loop>
          <source src="video/Moving stars overlay.mp4" type="video/mp4">
        </video>
        <h3>Our Location</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.8659844575386!2d107.44212597460213!3d-6.538603293454219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690e68a1406c01%3A0xa66f34eb29c41198!2sIndonesia%20University%20Of%20Education%2C%20Campus%20Purwakarta!5e0!3m2!1sen!2sid!4v1702159387904!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="contact-right">
        <form name="myForm" action="contact_form.php" method="post" onsubmit="return validateForm()">
          <div class="form-contain">
              <label for="name">Nama</label>
              <input id="name" type="name" name="nama" placeholder="Nama" required>
              <label for="email">Email</label>
              <input id="email" type="email" name="email" placeholder="example@gmail.com" required>
              <label for="pesan">Message</label>
              <textarea id="message" name="message" rows="6" placeholder="Your Message"></textarea>
              <button onclick="showToast()" type="submit" id="btn-contact" name="send" class="btn-submit" type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>


    <script src="script.js"></script>
    <script src="dist/sweetalert2.all.min.js"></script>
</body>
</html>
