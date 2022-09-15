
<!DOCTYPE html>
<html lang="en"dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/userpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   
</head>  
<body>
    <nav class="navbar">
        <div class="max-width">
            <img class="log" src="img/logo.png" alt="">
            <div class="logo" ><a href="#">Student<span>  Forum</span></a></div>
        </div>
    </nav>
    <!--search box-->
    <div class="searchBox">
        <form action="https://www.google.com/search" method="get">
           <input class="searchInput" type="search" name="q" placeholder="Search">
           <button class="searchButton" type="submit">
           <i class="fa fa-search">
           search
           </i>
           </button>
        </form>
        </div>
    <!--sidebar-->
    <div class="wrapper">
        <input type="checkbox" id="btn" hidden>
        <label for="btn" class="menu-btn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
        </label>
        <nav id="sidebar">
           <div class="title">
              Side Menu
           </div>
           <ul class="list-items">
              <li><a href="home.php"><i class="fas fa-home"></i>Profile</a></li>
              <li><a href="topics.html"><i class="fas fa-address-book"></i>Topics</a></li>
              <li><a href="starttopic.html"><i class="fas fa-address-book"></i>Start Topics</a></li>
              <li><a href="aboutus.html"><i class="fas fa-user"></i>About us</a></li>
              <div class="icons">
                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                 <a href="#"><i class="fab fa-twitter"></i></a>
                 <a href="#"><i class="fab fa-github"></i></a>
                 <a href="#"><i class="fab fa-youtube"></i></a>
              </div>
           </ul>
        </nav>
        
    </div>
</body>
</html>