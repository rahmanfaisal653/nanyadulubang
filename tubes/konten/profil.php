<?php
	

session_start();
include("../koneksi.php");
if (!isset($_SESSION['id_user'])) {
  header("Location: logindanregister.php");
  exit;
}

	$id_user = $_SESSION['id_user'];
	
	$username_query= mysqli_query($conn,"SELECT nama FROM tb_user WHERE id_user = '$id_user'");
	$username = mysqli_fetch_assoc($username_query);
	
	$result= mysqli_query($conn,"SELECT id_post,judul,konten,tgl,tag FROM tb_posting WHERE id_user = '$id_user' ORDER BY id_post DESC");
	$semua_posting = [];
	while($postingan = mysqli_fetch_assoc($result)) {
    $semua_posting[] = $postingan;
}
	

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil</title>
    <link rel="stylesheet" href="../css/head.css" />
    <link rel="stylesheet" href="../css/profil.css" />
    <link rel="stylesheet" href="../css/dropdown.css" />
    <link rel="stylesheet" href="../footer/footer.css" />
    <script src="../js/dropdown.js"></script>
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
  
  <body class="swift">
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


<main>
  <div class="profile-aside flex">
    <div class="profile">
      <div class="akun-container">
        <div class="photo-profile">
          <img
                class="rounded-full "
                src="https://th.bing.com/th/id/OIP.DLsjn5h5m7wOrKnXB3FxaAHaHa?w=198&h=198&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                alt=""
              />
        </div>

      <div class="data-diri flex">
        <div class="profile-nama">
          <h1><?php echo $username['nama'];?></h1>
          <button type="button">Edit Profile</button>
        </div>

        <div class="follower">
          <h2>Follower</h2>
          <h3>117.666</h3>
        </div>

        <div class="following">
          <h2>Following</h2>
          <h3>1.246</h3>
        </div>

        <div class="share-profile">
          <button type="button"><i class="fa-solid fa-share"></i></button>
        </div>
      </div>


    </div>

<div class="container mt-1 px-0">
    <div class="row justify-content-start">
        <div class="col-md-6">
            <form method="POST" action="../proses_posting.php">
                <!-- Input Judul -->
                <div class="mb-1">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" placeholder="Judul">
                </div>
                
                <!-- Textarea Posting -->
                <div class="mb-1">
                    <label for="konten" class="form-label">Isi Posting</label>
                    <textarea name="konten" id="konten" class="form-control" rows="5" maxlength="500" placeholder="Ketik Sesuatu"></textarea>
                </div>
                
                <!-- Input Tag -->
                <div class="mb-3">
                    <label for="tag" class="form-label">Tag</label>
                    <input type="text" name="tag" id="tag" class="form-control"placeholder="Tag">
                </div>
                
                <!-- Tombol Submit -->
                <button type="submit" name="kirim" class="btn btn-primary">Posting</button>
            </form>
        </div>
    </div>
</div>
		

	

<div>
	</div>
	
	<?php foreach($semua_posting as $postingan): ?>
		<div class="postingan-container position-relative"> 
        <div class="grid-item item2">
          <div class="user d-flex">
            <div class="acc">
              <img
                class="rounded-full h-9 w-9 mr--1"
                src="https://th.bing.com/th/id/OIP.DLsjn5h5m7wOrKnXB3FxaAHaHa?w=198&h=198&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                alt=""
              />
            </div>

            <div class="username-item2">
              <p><?php echo $username['nama'];?> | <a href="#">Follow</a></p>
              <p>
                
                <a href="#"><?php echo date('d M Y',strtotime($postingan['tgl']));?></a>
              </p>
            </div>
			
			<div>
				<a href="" class="btn btn-warning btn-sm position-absolute top-0 end-0 m-3">
					<i class="fas fa-pencil-alt"></i> Edit
				</a>
    </div>
          </div>

          <div class="main-content">
            <div class="text-content">
              <?php
			  
				echo $postingan['judul']."<br>";
				echo $postingan['konten']."<br><br>";
				echo $postingan['tag']."<br>";
				
			  ?>
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
			
			<div>
				<a href="../delete_postingan.php?id_post=<?= $postingan['id_post']; ?>" onclick="return confirm('Yakin mau hapus postingan ini?')" class="btn btn-sm btn-danger">
					<i class="fas fa-trash"></i> Delete
				</a>
			</div>
          </div>  
      </div>
     </div>
	 <?php endforeach;?>
	 
	 
	 
	
	
      
      <div class="pengalaman-container flex gap-4">
          <div class="logo-perusahaan">
            <img src="https://logos-world.net/wp-content/uploads/2020/09/Google-Symbol.png" alt="">
          </div>

          <div class="isi-container">
            <span><p><b>Game Developer</b></p></span>
            <span><p>Google - Wiraswasta</p></span>
            <span><p>Des 2010 - Saat ini</p></span>
            <span><p>Singapura - Jarak jauh</p></span>
          </div>
      </div>

      <div class="keahlian-container flex gap-4">
        <div class="logo-perusahaan">
          <img src="https://download.logo.wine/logo/Massachusetts_Institute_of_Technology/Massachusetts_Institute_of_Technology-Logo.wine.png" alt="">
        </div>
        <div class="isi-container">
          <span><p><b>Massachusetts Institute of Technology</b></p></span>
            <span><p>Gelar Sarjana, Sistem Informasi</p></span>
            <span><p>Des 2005 - Des 2008</p></span>
            <span><p>IPK : 4.0</p></span>
        </div>

      </div>



  </div>
  
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

</main>



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
  </body>
</html>
