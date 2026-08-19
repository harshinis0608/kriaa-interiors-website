<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/header.css">
</head>
<body>
    <header class="header">
    <div class="container">
        <div class="left-header">
            <!-- HAMBURGER -->
            <div class="hamburger" onclick="toggleMenu()"> ☰ </div>
        
            <!-- LOGO IMAGE -->
            <div class="logo">
            <img src="../images/logo.jpeg" alt="Kriaa Interiors Logo">
            </div>
        </div>

        <!-- NAVIGATION -->
        <nav class="nav" id="navMenu">
            <ul>

<li>
  <a href="../php/index.php"
     class="<?php if($currentPage == 'index.php') echo 'active'; ?>">
     HOME
  </a>
</li>

<li class="dropdown">
  <a href="#"
     class="<?php if($currentPage == 'about.php' || $currentPage == 'our_team.php') echo 'active'; ?>">
     ABOUT US ▾
  </a>

  <ul class="dropdown-menu">
    <li>
      <a href="../php/about.php"
         class="<?php if($currentPage == 'about.php') echo 'active'; ?>">
         OUR STORY
      </a>
    </li>

    <li>
      <a href="../php/our_team.php"
         class="<?php if($currentPage == 'our_team.php') echo 'active'; ?>">
         OUR TEAM
      </a>
    </li>
  </ul>
</li>

<li>
  <a href="../php/services.php"
     class="<?php if($currentPage == 'services.php') echo 'active'; ?>">
     SERVICES
  </a>
</li>

<li>
  <a href="gallery.php"
     class="<?php if($currentPage == 'gallery.php') echo 'active'; ?>">
     GALLERY
  </a>
</li>

<li>
  <a href="../php/contactus.php"
     class="<?php if($currentPage == 'contactus.php') echo 'active'; ?>">
     CONTACT US
  </a>
</li>

</ul>
        </nav>

        <!-- CTA BUTTON -->
        <div class="cta">
            <a href="../php/contactus.php" class="cta-btn">START A PROJECT</a>
        </div>

    </div>
</header>
<script>
function toggleMenu() {
  document.getElementById("navMenu").classList.toggle("active");
}
</script>
</body>
</html>