
<!DOCTYPE html>
<html>
<title>PHP-2</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="script" href="Assignment1-1.php">
<link rel="script" href="Assignment1-3.php">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
    .w3-row-padding img {margin-bottom: 12px}
    /* Set the width of the sidebar to 120px */
    .w3-sidebar {width: 120px;background: #222;}
    /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
    #main {margin-left: 120px}
    /* Remove margins from "page content" on small screens */
    @media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <img src="https://sun9-22.userapi.com/c849228/v849228177/1c479b/nI_jXJxeDFw.jpg" style="width:100%">
    <br><br>
    <a href="Assignment1-1.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-user w3-xxlarge"></i>
        <p>ABOUT</p>
    </a>

    <a href="Assignment1-2.php" class="w3-bar-item w3-button w3-padding-large w3-black">
        <i class="fa fa-eye w3-xxlarge"></i>
        <p>PHOTOS</p>
    </a>
    <a href="Assignment1-3.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-envelope w3-xxlarge"></i>
        <p>CONTACT</p>
    </a>
</nav>

<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
        <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
        <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
        <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
        <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
    </div>
</div>

<div class="w3-padding-large" id="main">
    <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
        <h1 class="w3-jumbo"><span class="w3-hide-small"></span> Alber Adilov</h1>
        <p>Astana IT Uinverity / IT-1919</p>
        <img src="https://sun9-33.userapi.com/c850620/v850620177/1542b6/5gMuUbdRBqM.jpg" style="height: 700px; width:
        660px;"
             alt="boy"
             class="w3-image"
             width="992" height="1108">
    </header>

    <div class="w3-padding-64 w3-content" id="photos">
        <h2 class="w3-text-light-grey">My Photos</h2>
        <hr style="width:200px" class="w3-opacity">

        <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
                <img src="https://sun9-24.userapi.com/c854324/v854324177/7847c/CSOQN8HqlZw.jpg" style="width:100%">
                <img src="https://sun9-10.userapi.com/c848528/v848528177/1c0575/aRY44MwOauU.jpg" style="width:100%">
                <img src="https://sun9-42.userapi.com/c848416/v848416177/1bf48e/dvn_GRqhMeM.jpg" style="width:100%">
            </div>

            <div class="w3-half">

                <img src="https://sun9-15.userapi.com/c850532/v850532177/14fc9b/XwOWH-PJj6Q.jpg" style="width:100%">
                <img src="https://sun9-45.userapi.com/c851232/v851232177/14e956/6QEcP33Uv4c.jpg" style="width:100%">

            </div>
        </div>
    </div>


    <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <!-- End footer -->
    </footer>

</div>

</body>
</html>