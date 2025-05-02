<?php
session_start();

if (!isset($_SESSION['id_user'])) {
  header("Location: logindanregister.php");
  exit;
}
include '../koneksi.php'; // koneksi ke database

// Ambil semua data komunitas dari tabel
$komunitas = $conn->query("SELECT * FROM tb_komunitas WHERE flag = 1 ORDER BY id_komunitas DESC");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/community.css">
    <link rel="stylesheet" href="../css/head.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <script src="dropdown.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://kit.fontawesome.com/221d8d21c7.js" crossorigin="anonymous"></script>
</head>

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
          
          <div class="dropdown text-xl sm:text-2xl md:text-3xl">
            <i class="fa-solid fa-user cursor-pointer hover:text-yellow-400 transition-colors"></i>
            <div class="dropdown-content mt-2">
              <a href="profil.php" class="px-4 py-2 rounded">Profil</a>
              <a href="logindanregister.php" class="px-4 py-2 rounded">Log In</a>
              <a href="dashboard.php" class="px-4 py-2 rounded">Log Out</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="p-6">
  <div class="flex flex-col lg:flex-row gap-6">
    
    <!-- Kiri: Welcome Section -->
    <div class="flex-1 bg-gray-800 p-8 rounded-lg shadow-md">
      <h1 class="text-4xl font-bold mb-4 text-white">Welcome to the Community</h1>
      <p class="mb-6 text-xl text-gray-300">
        This is a community where people share their knowledge, experiences, and stories. 
        Join us today and learn from the best.
      </p>
      <div class="flex space-x-4">
        <a href="../create_komunitas.php" class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded-full">
          Create a Space
        </a>
        <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded-full">
          Discover Space
        </a>
      </div>
    </div>

    <!-- Kanan: Pending Invites -->
    <div class="w-full lg:w-1/3 bg-gray-700 p-6 rounded-lg shadow-md">
      <h2 class="text-2xl font-bold mb-4 text-white">Pending Invites</h2>

      <!-- List pending invites -->
      <div class="space-y-4">
        <div class="flex items-center space-x-4">
          <img src="profilecom.jpg" alt="" class="w-12 h-12 rounded-full object-cover">
          <div>
            <p class="text-white font-bold"><a href="#">Design</a></p>
            <p class="text-gray-300 text-sm">Let's join community..</p>
          </div>
        </div>

        <div class="flex items-center space-x-4">
          <img src="profilecom3.jpg" alt="" class="w-12 h-12 rounded-full object-cover">
          <div>
            <p class="text-white font-bold"><a href="#">AI</a></p>
            <p class="text-gray-300 text-sm">Let's join community..</p>
          </div>
        </div>

        <div class="flex items-center space-x-4">
          <img src="profilecom2.jpg" alt="" class="w-12 h-12 rounded-full object-cover">
          <div>
            <p class="text-white font-bold"><a href="#">Data Base</a></p>
            <p class="text-gray-300 text-sm">Let's join community..</p>
          </div>
        </div>

        <div class="flex items-center space-x-4">
          <img src="profilecom5.jpg" alt="" class="w-12 h-12 rounded-full object-cover">
          <div>
            <p class="text-white font-bold"><a href="#">Belgia</a></p>
            <p class="text-gray-300 text-sm">Let's join community..</p>
          </div>
        </div>
      </div>
    </div>

  </div>

 <!-- Discover Spaces -->
<div class="mt-12">
  <h2 class="text-3xl font-bold text-white mb-2">Discover Spaces</h2>
  <p class="text-gray-300 mb-6">Spaces you might like</p>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php while ($row = $komunitas->fetch_assoc()): ?>
      <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
        <img src="../images/<?php echo htmlspecialchars($row['cover']); ?>" alt="Cover Komunitas" class="w-full h-40 object-cover rounded-md mb-4">

        <div class="flex items-center space-x-4">
          <img src="../images/<?php echo htmlspecialchars($row['images']); ?>" alt="Logo Komunitas" class="w-12 h-12 object-cover rounded-full">
          <h2 class="text-white text-xl font-bold"><?php echo htmlspecialchars($row['namakomunitas']); ?></h2>
        </div>

        <p class="text-gray-400 text-sm mt-4"><?php echo htmlspecialchars($row['deskripsi']); ?></p>

        <div class="mt-4 flex flex-wrap gap-3">
          <a href="#" class="text-yellow-400 hover:underline">Lihat Detail</a>
          <?php $id = htmlspecialchars($row['id_komunitas']); ?>
          <a href="../update_komunitas.php?id=<?php echo $row['id_komunitas']; ?>" class="text-blue-400 hover:underline">Edit</a>
          <a href="../delete_komunitas.php?id=<?php echo $row['id_komunitas']; ?>" class="text-red-400 hover:underline" onclick="return confirm('Yakin ingin menghapus komunitas ini?');">Hapus</a>

        </div>
      </div>
    <?php endwhile; ?>
  </div>
</div>



</main>


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