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
    <title>Notifikasi</title>
    <link rel="stylesheet" href="../css/notifikasi.css">
    <link rel="stylesheet" href="../css/head.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <script src="dropdown.js"></script>
    <link rel="stylesheet" href="../footer/footer.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script src="https://kit.fontawesome.com/221d8d21c7.js" crossorigin="anonymous"></script>
    
</head>
<body class="body">
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
              <a href="dashboard.html" class="hover:text-yellow-400 transition-colors">
                <i class="fa-solid fa-house"></i>
              </a>
            </li>
            <li>
              <a href="community.html" class="hover:text-yellow-400 transition-colors">
                <i class="fa-solid fa-people-group"></i>
              </a>
            </li>
            <li>
              <a href="static.html" class="hover:text-yellow-400 transition-colors">
                <i class="fa-solid fa-chart-simple"></i>
              </a>
            </li>
            <li>
              <a href="notifikasi.html" class="hover:text-yellow-400 transition-colors">
                <i class="fa-solid fa-bell"></i>
              </a>
            </li>
            <li>
              <a href="bookmark.html" class="hover:text-yellow-400 transition-colors">
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
    

<div class="notif-aside flex">
  <section class="container-notif grid-container">
    <div class="semua-mention my-2">
      <div class="semua">
          <h2>Semua</h2>
      </div>

      <div class="mention">
          <h2>Mention</h2>
      </div>
  </div>

          <div class="isi-notif mx-2 my-2">
            <div class="pesan-masuk1 ">
                  <div class="notif1">
                  <div class="notif-profile">
                      <i class="fa-solid fa-user"></i>
                  </div>
              
                  <div class="notif2">
                      <div class="pengirim">
                      <span class="nama-pengirim"><b>Kanye</b></span>
                      <span class="username-pengirim">@ye</span>
                      <span class="tanggal-notif"> - 30 Feb</span>
                      </div>

                      <div class="membalas">
                          <div>membalas</div>
                          <div class="username-pengirim">@yoshimitsu__009</div>
                      </div>
      
                      <div class="balasan">
                          <div>Wah, artikel terbaru kamu keren banget, Bener-bener membuka mata tentang pentingnya hidup berkelanjutan. 
                            Udah mulai nerapin beberapa tipsnya di rumah, dan hasilnya luar biasa. Terima kasih banyak udah berbagi pengetahuan!</div>
                      </div>

                      <div class="ikon-balasan">
                          <div><i class="komen fa-solid fa-comment"></i>
                  
                        </div>
                          
                          <div><i class="fa-solid fa-heart"></i></div>
                          <div><i class="fa-solid fa-bookmark"></i></div>
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
                      <span class="nama-pengirim"><b>Raditya Dika</b></span>
                      <span class="username-pengirim">@radityadikaaaaa</span>
                      <span class="tanggal-notif"> - 12 jan</span>
                      </div>

                      <div class="membalas">
                          <div>membalas</div>
                          <div class="username-pengirim">@5minutescraft</div>
                      </div>
      
                      <div class="balasan">
                          <div>Coba liat nih bang<span style="color: rgb(91, 86, 234);">@yoshimitsu__009</span></div>
                      </div>

                      <div class="ikon-balasan">
                          <div><i class="fa-solid fa-comment"></i></div>
                          <div><i class="fa-solid fa-heart"></i></div>
                          <div><i class="fa-solid fa-bookmark"></i></div>
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
                      <span class="nama-pengirim"><b>QinXieHuang</b></span>
                      <span class="username-pengirim">@qinxiehuang</span>
                      <span class="tanggal-notif"> - 22 jul</span>
                      </div>

                      <div class="membalas">
                          <div>membalas</div>
                          <div class="username-pengirim">@yoshimitsu__009</div>
                      </div>
      
                      <div class="balasan grid">
                        <img src="kantor.jpeg" alt="" class="rounded-md grid grid">
                          <div>Baru aja nyelesaikan proyek besar di kantor dan bangga banget sama tim! Semua kerja keras dan dedikasi kita bener-bener terbayar. 
                            Semoga banyak kolaborasi sukses lainnya di masa depan. Terima kasih tim! <span style="color: rgb(91, 86, 234);">#TeamWork #Success</span></div>
                      </div>

                      <div class="ikon-balasan">
                          <div><i class="fa-solid fa-comment"></i></div>
                          <div><i class="fa-solid fa-heart"></i></div>
                          <div><i class="fa-solid fa-bookmark"></i></div>
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

                      <div class="membalas">
                          <div>membalas</div>
                          <div class="username-pengirim">@yoshimitsu__009</div>
                      </div>
      
                      <div class="balasan">
                          <div>Hari ini ikutan konferensi teknologi tahunan, dan pembicara utama membahas tentang pentingnya AI yang etis. 
                            Materinya bener-bener menggugah pikiran dan motivasi banget. Kudu banget buat yang minat sama teknologi!</div>
                      </div>

                      <div class="ikon-balasan">
                          <div><i class="fa-solid fa-comment"></i></div>
                          <div><i class="fa-solid fa-heart"></i></div>
                          <div><i class="fa-solid fa-bookmark"></i></div>
                          <div><i class="fa-solid fa-chart-simple"></i></i></div>
                      </div>
                  </div>
                </div>
                </div>
            <div class="pesan-masuk5 ">
                  <div class="notif1">
                  <div class="notif-profile">
                      <i class="fa-solid fa-user"></i>
                  </div>
              
                  <div class="notif2">
                      <div class="pengirim">
                      <span class="nama-pengirim"><b>BaldwinIV</b></span>
                      <span class="username-pengirim">@Chadd__</span>
                      <span class="tanggal-notif"> - 14 nov</span>
                      </div>

                      <div class="membalas">
                          <div>membalas</div>
                          <div class="username-pengirim">@yoshimitsu__009</div>
                      </div>
      
                      <div class="balasan grid">
                        <img src="cozy cafe.jpeg" alt="" class="rounded-md">
                          <div>Eh, kafe yang lo rekomendasiin beneran cozy banget! Kopinya juga enak, makasih ya</div>
                      </div>

                      <div class="ikon-balasan">
                          <div><i class="fa-solid fa-comment"></i></div>
                          <div><i class="fa-solid fa-heart"></i></div>
                          <div><i class="fa-solid fa-bookmark"></i></div>
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
                      <span class="nama-pengirim"><b>Oda Nobunaga</b></span>
                      <span class="username-pengirim">@daimyoshogun</span>
                      <span class="tanggal-notif"> - 2 jan</span>
                      </div>

                      <div class="membalas">
                          <div>membalas</div>
                          <div class="username-pengirim">@yoshimitsu__009</div>
                      </div>
      
                      <div class="balasan">
                          <div>Makasih banyak udah share artikel ini, Beneran informatif dan ngasih banyak hal buat dipikirin. 
                            Bagian tentang privasi digitalnya paling suka sih. Terus berkarya ya dan semoga makin sukses!</div>
                      </div>

                      <div class="ikon-balasan">
                          <div><i class="fa-solid fa-comment"></i></div>
                          <div><i class="fa-solid fa-heart"></i></div>
                          <div><i class="fa-solid fa-bookmark"></i></div>
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

    <script src="https://kit.fontawesome.com/221d8d21c7.js" crossorigin="anonymous"></script>
</body>
</html>