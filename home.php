<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:signin.html');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="styles.css" rel="stylesheet">
  <link href="join.css" rel="stylesheet">
  <title>Soundworld </title>
</head>
<body class="full-height-grow">
  <div class="container full-height-grow">
    <header class="main-header">
      <a href="#" class="brand-logo">
        <img src="images/logo.png">
        <div class="brand-logo-name">Soundworld</div>
      </a>
      <nav class="main-nav">
        <ul>
          <li><a href="#">Playlist</a></li>
          <li><a href="#">trending</a></li>
          <li><a href="logout.php">logout</a></li>
        </ul>
      </nav>
    </header>
    <section class="join-main-section">
      <h1 class="join-text">
        Join the
        <span class="accent-text">fun.</span>
      </h1>
      <h1 class="join-text">Welcome
      <span class="accent-text"><?php echo $_SESSION['username']; ?></span>
      </h1>
     
    </section>
  </div>

  <div class="join-page-circle-1"></div>
  <div class="join-page-circle-2"></div>

  <footer class="main-footer">
    <div class="container">
      <nav class="footer-nav">
        <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <nav class="footer-nav">
        <ul>
          <li>
            <a href="#" class="social-link">
              <img src="images/twitter.svg">
              Twitter
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <img src="images/facebook.svg">
              Facebook
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </footer>
</body>
</html>