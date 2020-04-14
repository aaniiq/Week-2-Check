
<!DOCTYPE html>
<html>
<title>PHP-1</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="script" href="Assignment1-2.php">
<link rel="script" href="Assignment1-3.php">
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
    <a href="Assignment1-1.php" class="w3-bar-item w3-button w3-padding-large w3-black">
        <i class="fa fa-user w3-xxlarge"></i>
        <p>ABOUT</p>
    </a>

    <a href="Assignment1-2.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
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
        <a href="mainckeck.html" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
        <a href="maincheck2.html" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
        <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
    </div>
</div>

<div class="w3-padding-large" id="main">
    <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
        <h1 class="w3-jumbo"><span class="w3-hide-small"></span> Alber Adilov</h1>
        <p>Astana IT Uinverity / IT-1919</p>
        <img src="https://sun9-33.userapi.com/c850620/v850620177/1542b6/5gMuUbdRBqM.jpg" style="height: 700px; width:
        660px;"
             alt="boy"
             class="w3-image"
             width="992" height="1108">
    </header>

    <!-- About Section -->
    <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
        <h2 class="w3-text-light-grey">Alber Adilov </h2>
        <hr style="width:200px" class="w3-opacity">
        <p>My name is Alber. Not alberT or something else. I'm 17 years old. From Uralsk. Have two sisters and great
            , unique friends)I've studied in Urlask KTL. Was winner of a lot of olympiads and projects.Was invited to
            Nazarbayev University but i did another choise and now im student of Astana IT University. My prof is
            Industrial Automation , but in the next year, im gonna change it to Software Engineer. Because coding in JAVA is the best thing that i had) About ma hobbies, playing on musical instruments . Currently i play on 8+ musical instruments. Was drummer of professional music band. Have huge experience in this spehere. </p>

        <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
        <p class="w3-wide">C++</p>
        <div class="w3-white">
            <div class="w3-dark-grey" style="height:28px;width:40%"></div>
        </div>
        <p class="w3-wide">Python</p>
        <div class="w3-white">
            <div class="w3-dark-grey" style="height:28px;width:30%"></div>
        </div>
        <p class="w3-wide">Java</p>
        <div class="w3-white">
            <div class="w3-dark-grey" style="height:28px;width:80%"></div>
        </div>
        <p class="w3-wide">HTML</p>
        <div class="w3-white">
            <div class="w3-dark-grey" style="height:28px;width:50%"></div>
        </div><br>

        <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">11+</span><br>
                Partners
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">55+</span><br>
                Projects Done
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">89+</span><br>
                Happy Clients
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">150+</span><br>
                Meetings
            </div>
        </div>

        <button class="w3-button w3-light-grey w3-padding-large w3-section">
            <i class="fa fa-download"></i> Download Resume
        </button>






        <!-- Footer -->
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