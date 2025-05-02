<?php
session_start();
include "../koneksi.php";

if (!isset($_SESSION['id_user'])) {
  header("Location: logindanregister.php");
  exit;
}

$dashboard_query = mysqli_query($conn,
" SELECT p.judul, p.konten, p.tag, u.username, u.id_user
  FROM tb_posting p
  JOIN tb_user u ON p.id_user = u.id_user
  ORDER BY p.tgl DESC");
  
$semua_postingan = [];
while($dashboard = mysqli_fetch_assoc($dashboard_query)){
	$semua_postingan[] = $dashboard;
}

$id_saya = $_SESSION['id_user'];
$users = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user != '$id_saya'");

$base = "../images/";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/head.css" />
    <link rel="stylesheet" href="../css/dropdown.css" />
    <link rel="stylesheet" href="../footer/footer.css" />
    <script src="dropdown.js"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <script
      src="https://kit.fontawesome.com/221d8d21c7.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <body>
      <header class="px-2 sm:px-3 md:px-5 py-1.5 bg-[#232121] text-[#ffc107]">
        <div class="container mx-auto">
          <div class="flex items-center justify-between gap-4">
            
            <div class="flex items-center">
              <figure class="w-8 sm:w-10 md:w-12">
                <img src="../images/dw.png" alt="logo" class="w-full" />
              </figure>
              <p class="font-bold text-xl sm:text-2xl md:text-3xl ml-2" style="color: #ffc107;">NanyaDuluBang WKWKWK</p>
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

    <main class="main">
      <div class="marginset">
      <div class="grid-container mx-5">
        <div class="grid-item item1">
          <div class="d-flex">
            <div class="acc">
              <img
                class="rounded-full h-9 w-9 mr--1"
                src="Gambar WhatsApp 2024-11-21 pukul 15.36.21_f57e5564.jpg"
                alt=""
              />
            </div>

            <div class="grid">
              <div class="share-post">
                <input
                  type="text"
                  id="notifikasi-text"
                  placeholder="What do you want to ask or share ?"
                />
              </div>

              <div class="d-flex">
                <p class="choose-item1">
                <a href="#">Ask</a>|<a href="#">Answer</a>|<a href="#">Post</a>
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- content 1 -->
		<?php foreach($semua_postingan as $dashboard): 
  $id_penulis = $dashboard['id_user'];
  $username_penulis = $dashboard['username'];
  $cekFollow = mysqli_query($conn, "SELECT * FROM tb_follower WHERE id_user='$id_penulis' AND id_follower='$id_saya'");
  $sudahFollow = mysqli_num_rows($cekFollow) > 0;
?>
        <div class="grid-item item2">
          <div class="d-flex">
            <div class="acc">
              <img
                class="rounded-full h-10 w-10 mr--1"
                src="<?php echo $base ?>dw.png"
                alt=""
              />
            </div>

            <div class="username-item2">
              <p class="font-bold text-lg">
					<?= htmlspecialchars($username_penulis) ?>
					<?php if ($id_penulis != $id_saya): ?> |
				 <button onclick="followToggle(<?= $id_penulis ?>, this)">
					<?= $sudahFollow ? 'Following' : 'Follow' ?>
				</button>
        <?php endif; ?>
              <p class="text-base">Information Sciences from Moi University | <a href="#">Jan 24</a></p>
            </div>
          </div>

          <div class="main-content">
            <div class="text-content text-base">
              <p>
                <?php echo $dashboard['judul']."<br>";
                 echo $dashboard['konten']."<br><br>";
                 echo $dashboard['tag']."<br>";
				 ?>
              </p>
            </div> 

            <div>
              
            </div>
          </div>

          <div class="d-flex justify-content-between mx-2 my-1">
            <div>
              <div class="d-flex gap-1">
                <div>
                  <button class="comment" id="comment-btn2">
                    <i class="fa-regular fa-comment"></i>
                  </button>
                </div>

                <div class="count">
                  <p>120</p>
                </div>
              </div>
            </div>

            <div>
              <div class="d-flex gap-1">
                <div>
                  <button class="repost">
                    <i class="fa-solid fa-retweet"></i>
                  </button>
                </div>

                <div class="count">
                  <p>90</p>
                </div>
              </div>
            </div>

            <div>
              <div class="d-flex gap-1">
                <div>
                  <button onclick="Toggle1()" class="like" id="like-btn1">
                    <i class="fa-regular fa-heart"></i>
                  </button>
                </div>

                <div class="count">
                  <p>700</p>
                </div>
              </div>
            </div>

            <div>
              <div class="d-flex gap-1">
                <div>
                  <button class="chart">
                    <i class="fa-regular fa-chart-bar"></i>
                  </button>
                </div>

                <div class="count">
                  <p>2k</p>
                </div>
              </div>
            </div>

            <div class="d-flex gap-2.5">
              <div>
                <button onclick="Toogle6()" class="bookmark" id="bookmark-btn1">
                  <i class="fa-regular fa-bookmark"></i>
                </button>
              </div>
              <div>
                <button onclick="Toogle6()" class="search" id="search-btn1">
                  <i class="fa-regular fa-share-from-square"></i>
                </button>
              </div>
            </div>
          </div>
			
        </div>
		<?php endforeach ?>



        <!-- Subscribe -->
        <div class="grid-item item3">
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

        <!-- Trending Top -->
        <div class="grid-item item4">
          <p class="trending-top-title">Trending Top</p>

          <div class="d-flex justify-content-between">
            <div class="mt-1">
              <p class="title-trending">#UX</p>
              <p class="view-trending">44.9k posts</p>
            </div>

            <div>
              <p class="material-icons" style="margin-top: 3px">more_horiz</p>
            </div>
          </div>

          <div class="d-flex justify-content-between">
            <div class="mt-1">
              <p class="title-trending">#Machine</p>
              <p class="view-trending">23.5k posts</p>
            </div>

            <div>
              <p class="material-icons" style="margin-top: 3px">more_horiz</p>
            </div>
          </div>

          <div class="d-flex justify-content-between">
            <div class="mt-1">
              <p class="title-trending">#AI</p>
              <p class="view-trending">20.5k posts</p>
            </div>

            <div>
              <p class="material-icons" style="margin-top: 3px">more_horiz</p>
            </div>
          </div>

          <div class="d-flex justify-content-between">
            <div class="mt-1">
              <p class="title-trending">#Tech</p>
              <p class="view-trending">15.5k posts</p>
            </div>

            <div>
              <p class="material-icons" style="margin-top: 3px">more_horiz</p>
            </div>
          </div>

          <div class="d-flex justify-content-between">
            <div class="mt-1">
              <p class="title-trending">#Bussiness</p>
              <p class="view-trending">12.3k posts</p>
            </div>

            <div>
              <p class="material-icons" style="margin-top: 3px">more_horiz</p>
            </div>
          </div>

          <div class="d-flex justify-content-between">
            <div class="mt-1">
              <p class="title-trending">#Education</p>
              <p class="view-trending">8.5k posts</p>
            </div>

            <div>
              <p class="material-icons" style="margin-top: 3px">more_horiz</p>
            </div>
          </div>
        </div>

        <!-- Follow -->
        <div class="grid-item item5">
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
        </div>
      </div>
      </div>
    </div>


      <footer>
        <div class="logo-footer1 d-flex">
          <img class="logo-footer-img" src="../images/dw.png" alt="" />
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
    </main>
	<script>
function followToggle(idUser, btn) {
  fetch('../follow_toggle.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded'
    },
    body: 'id_user=' + idUser
  })
  .then(response => response.text())
  .then(response => {
    if (response === 'followed') {
      btn.innerText = 'Following';
    } else if (response === 'unfollowed') {
      btn.innerText = 'Follow';
    } else {
      alert("Respon: " + response);
    }
  });
}
</script>
    <script src="dashboard.js"></script>
  </body>
</html>
