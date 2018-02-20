<!DOCTYPE html>
<html>
<title>Corex Corporation</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4, .bgimg-5 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('http://corex.byethost10.com/p1.png');
    min-height: 100%;
}

/* Second image (Team) */
.bgimg-2 {
    background-image: url("http://corex.byethost10.com/p2.png");
    min-height: 400px;
}

/* Third image (Parteners) */
.bgimg-3 {
    background-image: url("http://corex.byethost10.com/p3.png");
    min-height: 400px;
}

.bgimg-4 {
    background-image: url("http://corex.byethost10.com/c3.png");
    min-height: 400px;
}

.bgimg-5 {
    background-image: url("http://corex.byethost10.com/c4.png");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4, .bgimg-5 {
        background-attachment: scroll;
    }
}

.proj
{
  float:left;
}

</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-industry"></i> ABOUT</a>
    <a href="#team" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-users"></i> OUR TEAM</a>
    <a href="#parteners" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-handshake-o"></i> PARTNERS</a>
    <a href="#projects" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-handshake-o"></i> PROJECTS</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#team" class="w3-bar-item w3-button" onclick="toggleFunction()">OUR TEAM</a>
    <a href="#parteners" class="w3-bar-item w3-button" onclick="toggleFunction()">PARTNERS</a>
    <a href="#projects" class="w3-bar-item w3-button" onclick="toggleFunction()">PROJECTS</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <img src="http://corex.byethost10.com/logo.png">
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">About the company</h3>
  <p class="w3-center"><em>We are about the future!</em></p>
  <p>
  Corex Corporation is a central company that own some small companies named divisions.
  Beeing under the same umbrella, <b>Corex Technology, Corex Security and Corex Industries</b>
  bring solutions to people and companies in the County. We are about the future, so we create and
  develop new systems every day, to be sure that we provide to our clients the best services.
  Corex Technology is the division that research and improve the Technology that company have.
  At Corex Technology, <b>modern</b> is the keyword. Corex Security is the division that protect the
  integrity of our employees. <b>Safety</b> is their moto. Corex Industries is the division that is
  manufacturing the parts and products that Corex is need. Our employees work every day at high standards, to
  be sure that we have the best parts at the time every day. <b>Production</b> is the word around that division.</p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p><b><i class="fa fa-user w3-margin-right"></i>Brian Sinacore</b></p><br>
      <img src="http://corex.byethost10.com/sinacore.png" class="w3-image" alt="Photo of Me" width="130" height="80">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p><br><br>
        Hello, my name is Brian Sinacore. I'm an 26 years old man, and the owner of Corex Corporation.
        I've started this project to help people and companies with the best technical solutions.
        I'm searching every day for the best engineers, IT specialists, and workers for our divisions.
        I think that having the best people in their domain, is the key for getting success with a company.
        That's why I think Corex will be somewhere at the top in one day.
      </p>
    </div>
  </div>
  <p class="w3-large w3-center w3-padding-16">Corex Corporation Divisions value:</p>
  <p class="w3-wide"><i class="fa fa-joomla"></i>Corex Technology</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-green w3-center" style="width:100%">$421 mil</div>
  </div>
  <p class="w3-wide"><i class="fa fa-shield"></i>Corex Security</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-green w3-center" style="width:100%">$125 mil</div>
  </div>
  <p class="w3-wide"><i class="fa fa-industry"></i>Corex Industries</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-green w3-center" style="width:100%">$276 mil</div>
  </div>
</div>

<!-- Second Parallax Image with team Text -->
<div class="bgimg-2 w3-display-container">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">OUR TEAM</span>
  </div>
</div>

<!-- Container (Team Section) -->
<div class="w3-content w3-container w3-padding-64" id="team">
  <h3 class="w3-center">Corex Corporation team</h3>
  <p class="w3-center"><em>Here are some photos of our main members.<br> Click on the images to make them bigger</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="http://corex.byethost10.com/sinacore.png" style="width:20px height:20px" onclick="onClick(this)" class="w3-hover-opacity" alt="Brian Sinacore<br>Founder">
    </div>

    <div class="w3-col m3">
      <img src="http://corex.byethost10.com/conrad.png" style="width:20px height:20px" onclick="onClick(this)" class="w3-hover-opacity" alt="Conrad McConaughey<br>Head Of Corex Security">
    </div>

    <div class="w3-col m3">
      <img src="http://corex.byethost10.com/lisa.png" style="width:20px height:20px" onclick="onClick(this)" class="w3-hover-opacity" alt="Lisa Smith<br>Assistant Head Of Corex Security">
    </div>

    <div class="w3-col m3">
      <img src="http://corex.byethost10.com/bryan.png" style="width:20px height:20px" onclick="onClick(this)" class="w3-hover-opacity" alt="Bryan Daniels<br>Car Engineer">
    </div>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with parteners Text -->
<div class="bgimg-3 w3-display-container">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">PARTNERS</span>
  </div>
</div>

<div class="w3-content w3-container w3-padding-64" id="parteners">
  <center>
    <img src="http://corex.byethost10.com/c1.png">
    <img src="http://corex.byethost10.com/c2.png">
  </center>
</div>


<div class="bgimg-5 w3-display-container">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">PROJECTS</span>
  </div>
</div>

<div class="w3-content w3-container w3-padding-64" id="projects">
  <div class="proj">
    <center><img src="http://corex.byethost10.com/p4.png" width="550px"></center>
  <center>
    <h2>Get involved in the AI Era</h2><br>
    Get in to drive to the future. With the help of our tehnicians and specialists, we can
    develop the cars of tomorrow. Self-driving cars are using multiple algorithms to provides
    you the best and safest driving, just by telling the car where you want to go.
  </center>
  <br>
  </div>
  <div class="proj">
    <center><img src="http://corex.byethost10.com/p5.png" width="550px"></center>
  <center>
    <h2>The guns won't be what there was</h2><br>
    From the begining of the firearms, this industry seems to grow up. We pay special attention to this industry also,
    and we bring many improvments to guns. From termosensors to auto-aim, design and power, the guns remain a priority to us.
  </center>
  <br>
  </div>
  <div class="proj">
    <center><img src="http://corex.byethost10.com/p6.png" width="550px"></center>
  <center>
    <h2>The industry like it's need to be</h2><br>
    With such big goals, we need to have a big line of production. Self made robots are the best way to improve
    a factory production, helping in delivering what we need at the time.
  </center>
  <br>
  </div>
</div>


<!-- 4-th Parallax Image with contact Text -->
<div class="bgimg-4 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">Where we work</h3>
  <p class="w3-center"><em>We'd like to hear your opinion!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <div class="w3-round-large" style="width:100%;height:400px;"><img src="http://corex.byethost10.com/m1.png" style="width:100%;height:300px;"></div>
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> San Francisco, California<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: enterprise.corex@gmail.com<br>
      </div>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
        </div>
        <textarea class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></textarea>
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <!--<i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>-->
    <h4>
      Corex Corporation&reg;<br>
      <?php echo date("d-m-Y") ?><br>
      Corex Technology | Corex Industries | Corex Security
  </h4>
  </div>
</footer>
<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
</body>
</html>
