<?php
include("../koneksi.php");
session_start();

if (!isset($_SESSION['id_user'])) {
  header("Location: logindanregister.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookmark</title>
    <link rel="stylesheet" href="../css/bookmark.css">
    <link rel="stylesheet" href="../css/head.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <script src="../js/dropdown.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/221d8d21c7.js" crossorigin="anonymous"></script>
    
</head>
<body class="badan">
    
  <header class="px-2 sm:px-3 md:px-5 py-1.5 bg-[#232121] text-[#ffc107]">
    <div class="container mx-auto">
      <div class="flex items-center justify-between gap-4">
        
        <div class="flex items-center">
          <figure class="w-8 sm:w-10 md:w-12">
            <img src="../images/dw.png" alt="logo" class="w-full" />
          </figure>
          <p class="font-bold text-xl sm:text-2xl md:text-3xl ml-2" style="color: #ffc107;">NanyaDuluBang</p>
        </div>
  
        
        <nav class="hidden sm:block flex-1">
              <ul class="flex items-center justify-center gap-4 sm:gap-6 md:gap-10 text-xl sm:text-2xl md:text-3xl">
                <li>
                  <a href="dashboard.php" class="hover:text-yellow-400 transition-colors">
                    <i class="fa-solid fa-house"></i>
                  </a>
                </li>
                <li>
                  <a href="community.php" class="hover:text-yellow-400 transition-colors">
                    <i class="fa-solid fa-people-group"></i>
                  </a>
                </li>
                <li>
                  <a href="static.php" class="hover:text-yellow-400 transition-colors">
                    <i class="fa-solid fa-chart-simple"></i>
                  </a>
                </li>
                <li>
                  <a href="notifikasi.php" class="hover:text-yellow-400 transition-colors">
                    <i class="fa-solid fa-bell"></i>
                  </a>
                </li>
                <li>
                  <a href="bookmark.php" class="hover:text-yellow-400 transition-colors">
                    <i class="fa-solid fa-bookmark"></i>
                  </a>
                </li>
              </ul>
            </nav>
      
            
            <nav class="sm:hidden fixed bottom-0 left-0 right-0 bg-[#232121] py-3 px-4">
              <ul class="flex items-center justify-between text-xl">
                <li>
                  <a href="dashboard.php" class="hover:text-yellow-400 transition-colors">
                    <i class="fa-solid fa-house"></i>
                  </a>
                </li>
                <li>
                  <a href="community.php" class="hover:text-yellow-400 transition-colors">
                    <i class="fa-solid fa-people-group"></i>
                  </a>
                </li>
                <li>
                  <a href="static.php" class="hover:text-yellow-400 transition-colors">
                    <i class="fa-solid fa-chart-simple"></i>
                  </a>
                </li>
                <li>
                  <a href="notifikasi.php" class="hover:text-yellow-400 transition-colors">
                    <i class="fa-solid fa-bell"></i>
                  </a>
                </li>
                <li>
                  <a href="bookmark.php" class="hover:text-yellow-400 transition-colors">
                    <i class="fa-solid fa-bookmark"></i>
                  </a>
                </li>
              </ul>
            </nav>
  
        
        <div class="flex items-center gap-4">
          <div class="relative hidden sm:block">
            <input 
              type="search" 
              placeholder="Search" 
              class="w-48 md:w-64 h-9 rounded-full bg-[#2c2c2c] text-white px-4 text-sm"
            />
          </div>
          
          <div class="dropdown text-xl sm:text-2xl md:text-3xl pb-2">
                <i class="fa-solid fa-user cursor-pointer hover:text-yellow-400 transition-colors"></i>
                <div class="dropdown-content mt-2">
                  <a href="profil.php" class="px-4 py-2 rounded">Profil</a>
                  <a href="../logout.php" class="px-4 py-2 rounded">Log Out</a>
                </div>
              </div>
        </div>
      </div>
    </div>
  </header>


<div class="notif-aside">
  <section class="container-notif grid-container">
    <div class="search-bookmark">
        <input type="search" placeholder="   Search">
      </div>
      
  

          <div class="isi-notif mx-2 my-2">
            <div class="pesan-masuk1 ">
                  <div class="notif1">
                  <div class="notif-profile">
                      <i class="fa-solid fa-user"></i>
                  </div>
              
                  <div class="notif2">
                      <div class="pengirim">
                      <span class="nama-pengirim"><b>Tsubasa</b></span>
                      <span class="username-pengirim">@ozora000</span>
                      <span class="tanggal-notif"> - 12 Feb</span>
                      </div>

                      
      
                      <div class="balasan">
                          <div>🚀 Mulai Belajar Membuat Game 3D dengan Unity! 🚀<img src="https://game-ace.com/wp-content/uploads/2019/09/Rigging-3D-modeling-method.jpg">
                            Unity adalah salah satu game engine paling populer dan mudah digunakan untuk membuat game 3D. Dengan berbagai tutorial dan sumber daya yang tersedia, kamu bisa belajar cara membuat game dari nol hingga jadi. Mulai dari dasar-dasar seperti membuat objek dan mengatur fisika, hingga mempelajari scripting dengan C#. Jangan ragu untuk mencoba dan eksplorasi kreativitasmu dalam dunia game development! 🎮👾 <span style="color: rgb(91, 86, 234);">#BelajarUnity #GameDevelopment #3DGame</span></div>
                      </div>

                      <div class="ikon-balasan">
                          <div><i class="fa-solid fa-comment"></i></div>
                          <div><i class="fa-solid fa-heart"></i></div>
                          <div><i class="fa-solid fa-bookmark" style="color: #ffc107;"></i></div>
                          <div><i class="fa-solid fa-chart-simple"></i></i></div>
                      </div>
                  </div>
                </div>
                </div>
            <div class="pesan-masuk2 ">
                  <div class="notif1">
                  <div class="notif-profile">
                      <i class="fa-solid fa-user"></i>
                  </div>
              
                  <div class="notif2">
                      <div class="pengirim">
                      <span class="nama-pengirim"><b>Lord Gaben</b></span>
                      <span class="username-pengirim">@iownsteam</span>
                      <span class="tanggal-notif"> - 28 aug</span>
                      </div>

                      
      
                      <div class="balasan">
                        <div>Best Practices for Clean Code <span style="color: rgb(91, 86, 234);">#github #coding #java #unity #c++</span>
                          <img src="https://www.php-qb.net/wp-content/uploads/2022/08/github-code-search-1-1024x657.png" alt="">Let's talk about the best practices and tips for writing clean and maintainable code. Share your experiences and favorite resources! <span style="color: rgb(91, 86, 234);">#Coding #BestPractices</span>
                        </div>
                      </div>

                      <div class="ikon-balasan">
                          <div><i class="fa-solid fa-comment"></i></div>
                          <div><i class="fa-solid fa-heart"></i></div>
                          <div><i class="fa-solid fa-bookmark" style="color: #ffc107;"></i></div>
                          <div><i class="fa-solid fa-chart-simple"></i></i></div>
                      </div>
                  </div>
                </div>
              </div>
            <div class="pesan-masuk3 ">
                  <div class="notif1">
                  <div class="notif-profile">
                      <i class="fa-solid fa-user"></i>
                  </div>
              
                  <div class="notif2">
                      <div class="pengirim">
                      <span class="nama-pengirim"><b>Genghiskhan</b></span>
                      <span class="username-pengirim">@genghiskan</span>
                      <span class="tanggal-notif"> - 7 apr</span>
                      </div>

                      
      
                      <div class="balasan grid">🌏 Temukan Dunia Baru dengan Program Exchange Student di BINUS! 🌏
                        <img src="https://sis.binus.ac.id/wp-content/uploads/2014/08/student-exchange-acid-even-extended.jpg" alt="" class="rounded-md grid grid">
                          <div>BINUS University menawarkan kesempatan luar biasa bagi mahasiswa dari seluruh dunia untuk bergabung dalam program exchange student. Dengan berbagai program studi yang disediakan, kamu bisa mengeksplorasi budaya, lingkungan, dan sistem pendidikan yang berbeda selama satu atau dua semester1. Jangan lewatkan kesempatan ini untuk memperluas wawasan dan jaringan globalmu! 🌟📚 <span style="color: rgb(91, 86, 234);">#ExchangeStudent #BINUSUniversity #StudyAbroad</span></div>
                      </div>

                      <div class="ikon-balasan">
                          <div><i class="fa-solid fa-comment"></i></div>
                          <div><i class="fa-solid fa-heart"></i></div>
                          <div><i class="fa-solid fa-bookmark" style="color: #ffc107;"></i></div>
                          <div><i class="fa-solid fa-chart-simple"></i></i></div>
                      </div>
                  </div>
                </div>
                </div>
            <div class="pesan-masuk4 ">
                  <div class="notif1">
                  <div class="notif-profile">
                      <i class="fa-solid fa-user"></i>
                  </div>
              
                  <div class="notif2">
                      <div class="pengirim">
                      <span class="nama-pengirim"><b>Miyamoto Mushashi</b></span>
                      <span class="username-pengirim">@miyashi111</span>
                      <span class="tanggal-notif"> - 1 des</span>
                      </div>

                      
      
                      <div class="balasan">🌟 Tomoe Gozen: Legenda Onna-Musha Terkenal 🌟
                        <img src="https://th.bing.com/th/id/OIP.I4wJnQvi0GeqoeRbsVlDiQHaKp?rs=1&pid=ImgDetMain" alt="">
                          <div>Tomoe Gozen, seorang onna-musha (prajurit samurai wanita) legendaris dari akhir abad ke-12, dikenal karena keberanian dan kekuatannya di Pertempuran Awazu pada tahun 1184. 
                            Dia melayani Minamoto no Yoshinaka selama Perang Genpei dan dikenal karena keberanian serta keterampilannya dalam medan perang1. Meskipun banyak dari kisahnya yang terinspirasi oleh legenda, Tomoe Gozen tetap menjadi simbol kekuatan dan keberanian wanita di Jepang. 🗡️ <span style="color: rgb(91, 86, 234);">#TomoeGozen #OnnaMusha #LegendaJepang</span></div>
                      </div>

                      <div class="ikon-balasan">
                          <div><i class="fa-solid fa-comment"></i></div>
                          <div><i class="fa-solid fa-heart"></i></div>
                          <div><i class="fa-solid fa-bookmark" style="color: #ffc107;"></i></div>
                          <div><i class="fa-solid fa-chart-simple"></i></i></div>
                      </div>
                  </div>
                </div>
                </div>
            
              
                  
            <div class="pesan-masuk6 ">
                  <div class="notif1">
                  <div class="notif-profile">
                      <i class="fa-solid fa-user"></i>
                  </div>
              
                  <div class="notif2">
                      <div class="pengirim">
                      <span class="nama-pengirim"><b>Zhang fei</b></span>
                      <span class="username-pengirim">@zhangwei</span>
                      <span class="tanggal-notif"> - 25 des</span>
                      </div>

                      
      
                      <div class="balasan">
                        🌟 Zaman Tiga Negara: Sejarah yang Menawan 🌟
                        <img src="https://th.bing.com/th/id/OIP.YqOKYKNWM5QW6qgfTCKmqQHaGI?rs=1&pid=ImgDetMain" alt="">
                          <div>Zaman Tiga Negara, atau dikenal sebagai Samkok, adalah salah satu periode paling dramatis dalam sejarah Tiongkok yang berlangsung dari tahun 220 hingga 280 Masehi. Setelah jatuhnya Dinasti Han, Tiongkok terpecah menjadi tiga negara yang saling bermusuhan: Cao Wei, Shu Han, dan Wu2. Periode ini penuh dengan intrik politik, strategi militer, dan tokoh-tokoh legendaris seperti Cao Cao, Liu Bei, dan Sun Quan. 
                            Zaman Tiga Negara tidak hanya menjadi inspirasi bagi banyak karya fiksi sejarah, tetapi juga memberikan wawasan tentang kekuasaan, kekuatan, dan ketidakstabilan yang menghantui Tiongkok2. 🗡️ <span style="color: rgb(91, 86, 234);">#ZamanTigaNegara #SejarahTiongkok #Samkok</span></div>
                      </div>

                      <div class="ikon-balasan">
                          <div><i class="fa-solid fa-comment"></i></div>
                          <div><i class="fa-solid fa-heart"></i></div>
                          <div><i class="fa-solid fa-bookmark" style="color: #ffc107;"></i></div>
                          <div><i class="fa-solid fa-chart-simple"></i></i></div>
                      </div>
                  </div>
                </div>
                </div>
              </div>
  </section>

  <aside>
    <div class="item3">
      <p class="subscribe">Subscribe To Premium</p>
      <p class="text-subscribe">
        Subscribe to unlock new features and if eligible, receive a share of
        revenue.
      </p>
      <p class="button-subscribe">
        <a
          href="#"
          class="btn btn-main bg-warning rounded-full px-1.7 py-0.5 mt-1 ml-2.5"
          >Subscribe</a
        >
      </p>
    </div>

    <div class="item4">
      <p class="trending-top-title">Trending Top</p>

      <div class="d-flex justify-content-between">
        <div class="mt-1">
          <p class="title-trending">#TimnasDay</p>
          <p class="view-trending">44.9k posts</p>
        </div>

        <div>
          <p class="material-icons" style="margin-top: 3px"></p>
        </div>
      </div>

      <div class="d-flex justify-content-between">
        <div class="mt-1">
          <p class="title-trending">#Covid19</p>
          <p class="view-trending">23.5k posts</p>
        </div>

        <div>
          <p class="material-icons" style="margin-top: 3px"></p>
        </div>
      </div>

      <div class="d-flex justify-content-between">
        <div class="mt-1">
          <p class="title-trending">#AI</p>
          <p class="view-trending">20.5k posts</p>
        </div>

        <div>
          <p class="material-icons" style="margin-top: 3px"></p>
        </div>
      </div>

      <div class="d-flex justify-content-between">
        <div class="mt-1">
          <p class="title-trending">#Tech</p>
          <p class="view-trending">15.5k posts</p>
        </div>

        <div>
          <p class="material-icons" style="margin-top: 3px"></p>
        </div>
      </div>

      <div class="d-flex justify-content-between">
        <div class="mt-1">
          <p class="title-trending">#Bussiness</p>
          <p class="view-trending">12.3k posts</p>
        </div>

        <div>
          <p class="material-icons" style="margin-top: 3px"></p>
        </div>
      </div>

      <div class="d-flex justify-content-between">
        <div class="mt-1">
          <p class="title-trending">#Education</p>
          <p class="view-trending">8.5k posts</p>
        </div>

        <div>
          <p class="material-icons" style="margin-top: 3px"></p>
        </div>
      </div>
    </div>

    <div class="item5">
      <p class="suggest-top-title">Who to Follow</p>

      <div class="d-flex justify-content-around">
        <div class="p-2">
          <img
            class="rounded-full h-9 w-9 mr--1"
            src="Gambar WhatsApp 2024-11-21 pukul 15.36.20_e967883c.jpg"
            alt="profile-picture"
          />
        </div>

        <div class="p-2">
          <p class="nickname">el</p>
          <p class="username">@elcuomo</p>
        </div>

        <div class="ml-auto p-2">
          <p class="button-follow">
            <a
              href="#"
              class="btn btn-main bg-warning rounded-full px-1.7 py-0.5 mt-1 ml-2.5"
              >Follow</a
            >
          </p>
        </div>
      </div>

      <div class="d-flex justify-content-around">
        <div class="p-2">
          <img
            class="rounded-full h-9 w-9 mr--1"
            src="Gambar WhatsApp 2024-11-21 pukul 15.36.20_eb6a64a6.jpg"
            alt="profile-picture"
          />
        </div>

        <div class="p-2">
          <p class="nickname">rixx</p>
          <p class="username">@zafixx</p>
        </div>

        <div class="ml-auto p-2">
          <p class="button-follow">
            <a
              href="#"
              class="btn btn-main bg-warning rounded-full px-1.7 py-0.5 mt-1 ml-2.5"
              >Follow</a
            >
          </p>
        </div>
      </div>

      <div class="d-flex justify-content-around">
        <div class="p-2">
          <img
            class="rounded-full h-9 w-9 mr--1"
            src="Gambar WhatsApp 2024-11-21 pukul 15.36.21_4d134837.jpg"
            alt="profile-picture"
          />
        </div>

        <div class="p-2">
          <p class="nickname">golll</p>
          <p class="username">@gopaltak</p>
        </div>

        <div class="ml-auto p-2">
          <p class="button-follow">
            <a
              href="#"
              class="btn btn-main bg-warning rounded-full px-1.7 py-0.5 mt-1 ml-2.5"
              >Follow</a
            >
          </p>
        </div>
      </div>
  </aside>
</div>


<footer>

  <div class="logo-footer1 d-flex">
    <img class="logo-footer-img" src="../images/dw.png" alt="">
    <span class="logo-footer2">NanyaDuluBang</span>
  </div>

  <div class="hr-footer">
    <hr />
  </div>

  <div class="isi-footer1">
    <div class="kolom1">
      <div>© 2020 Copyright: NanyaDuluBang.com</div>
    </div>
    <div class="kolom2">
      <div>About us</div>
      <div>Ethics</div>
      <div>Accesibility</div>
      <div>Web info</div>
    </div>
    <div class="kolom3">
      <div>Contact</div>
      <div>Privacy</div>
      <div>Ads</div>
      <div>FAQ</div>
    </div>
  </div>
</footer>
    
</body>
</html>