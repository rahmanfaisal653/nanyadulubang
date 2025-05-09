<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/static.css" />
    <link rel="stylesheet" href="../css/head.css" />
    <link rel="stylesheet" href="../footer/footer.css">
    <script src="dropdown.js"></script>
    <link rel="stylesheet" href="dropdown.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/221d8d21c7.js"
      crossorigin="anonymous"
    ></script>
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
            
            <div class="dropdown text-xl sm:text-2xl md:text-3xl">
              <i class="fa-solid fa-user cursor-pointer hover:text-yellow-400 transition-colors"></i>
              <div class="dropdown-content mt-2">
                <a href="profil.html" class="px-4 py-2 rounded">Profil</a>
                <a href="Login dan register.html" class="px-4 py-2 rounded">Log In</a>
                <a href="dashboard.html" class="px-4 py-2 rounded">Log Out</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
<div class="y">
  <div class="statistics-container">
    <div class="statistics-header">
        <span>Statistics</span>
        <p>Stats for content from the past 3 days update live; earnings and older content update at 7:00 am GMT+7 </p>
    </div>
    <div class="statistics-actions">
        <div class="calendar-action">
            <input type="date" class="calendar-input" />
        </div>
        
    </div>
</div>


      <div class="diagram">
        <div class="diagram-1">
          <div>
            <canvas id="Batang" width="100%" height="15%"></canvas>
          </div>
        </div>
        <!-- <div class="diagram-2">
          <canvas id="lingkaran" width="900px" height="900px"></canvas>
        </div> -->
      </div>

      <div class="recap">
        <div class="recap-1">
          <h2>Views</h2>
          <h1>12</h1>
        </div>
        <div class="recap-2">
          <h2>Like</h2>
          <h1>19</h1>
        </div>
        <div class="recap-3">
          <h2>Reply</h2>
          <h1>3</h1>
        </div>
        <div class="recap-4">
          <h2>Followers</h2>
          <h1>5</h1>
        </div>
      </div>
    </div>
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
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.6/dist/chart.umd.min.js"></script>
    <script src="diagram1.js"></script>
    <!-- <script src="diagram2.js"></script> -->
  </body>
</html>