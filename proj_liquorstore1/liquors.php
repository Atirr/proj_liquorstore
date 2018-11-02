<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
    <style>
        body{
        background-image: url("brandon-morgan-102110-unsplash.png");
        }
    </style>
</head>

<body>
    <!--SIDENAV-->
        <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="index.php">Home</a>
                <a href="liquors.php">Liquors</a>
                <a href="party.php">Party!</a>
                <a href="contact.php">Contact</a>
              </div>
              
              <div id="main">
                <!--<h2>Sidenav Push Example</h2>
                <p>Click on the element below to open the side navigation menu, and push this content to the right. Notice that we add a black see-through background-color to body when the sidenav is opened.</p>-->
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
              </div>
              
              <script>
              function openNav() {
                  document.getElementById("mySidenav").style.width = "250px";
                  document.getElementById("main").style.marginLeft = "250px";
                  document.body.style.backgroundImage = "0.4";
              }
              
              function closeNav() {
                  document.getElementById("mySidenav").style.width = "0";
                  document.getElementById("main").style.marginLeft= "0";
                  document.body.style.backgroundCcolor = "black";
              }
              </script>

<!--SEARCH-->
  <div class="search">
  <input type="text" class="search-box" />
  <input type="submit" value="" class="search-btn" />
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<!--CONTPRODUCT-->
<div class="contprod">
<!--<div class="beer"><img src="liquors.jpg" alt="liquors" width="225" height="225"></div>-->
<div class="beer">
<div class="dropdown">
  <button class="dropbtn">Beer</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
</div>

<div class="wine">
<div class="dropdown">
  <button class="dropbtn">Wine</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
</div>

<div class="liquors">
<div class="dropdown">
  <button class="dropbtn">Liquor</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
</div>

</div>

<!--<div class="wine"><img src="liquors.jpg" alt="liquors" width="225" height="225"></div>
<div class="liquors"><img src="liquors.jpg" alt="liquors" width="225" height="225"></div>-->

<!--<div class="text"><p><a href="store.php">Pick Yours!</a></p></div>-->
    
</body>
</html>