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
    <!---->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
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

<!--CONTACTFORM-->
<div class="text-center">               
           <a href="#myModal" class="trigger-btn" data-toggle="modal"><p class="textcontact">contact</p></a>
    </div>
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog contact-modal">
            <div class="modal-content">
                <div class="modal-header">				
                    <h4 class="modal-title">Contact Us</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="confirmation.php" method="post">
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" class="form-control" name="inputName" id="inputName" required>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" name="inputEmail" id="inputEmail" required>
                        </div>
                        <div class="form-group">
                            <label for="inputMessage">Message</label>
                            <textarea class="form-control" name="inputMessage" id="inputMessage" rows="4" required></textarea>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Send">
                        <input type="button" name="button" class="btn btn-link" data-dismiss="modal" value="Cancel">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>