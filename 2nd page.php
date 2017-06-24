<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="image/gif/png" href="D.png">
  <meta charset="UTF-8">
  <title>Welcome to Dreaming World....</title>
  <link href='https://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>
</head>
<body>
<audio controls autoplay loop hidden>
  <source src="k.ogg" type="audio/ogg">
  <source src="may-it-be .mp3" type="audio/mpeg" >

</audio>
  <style>
    html {
      box-sizing: border-box;
      background:#000000;
      font-family:'helvetica neue';
      font-size: 20px;
      font-weight: 200;
    }
    body {
      margin: 0;
    }
    *, *:before, *:after {
      box-sizing: inherit;
    }

    .panels {
      min-height:100vh;
      overflow: hidden;
      display: flex;
    }

    .panel {
      background:#6B0F9C;
      box-shadow:inset 0 0 0 5px rgba(247, 246, 244);
      color:white;
      text-align: center;
      align-items:center;
      /* Safari transitionend event.propertyName === flex */
      /* Chrome + FF transitionend event.propertyName === flex-grow */
      transition:
        font-size 0.7s cubic-bezier(0.61,-0.19, 0.7,-0.11),
        flex 0.7s cubic-bezier(0.61,-0.19, 0.7,-0.11),
        background 0.2s;
      font-size: 20px;
      background-size:cover;
      background-position:center;
      flex: 1;
      justify-content: center;
      display: flex;
      flex-direction: column;
    }


    .panel1 { background-image:url(page2.jpg); }
    .panel2 { background-image:url(4_3.jpg); }
    .panel3 { background-image:url(frozen_elsa-wallpaper-3000x2000.jpg); }
    .panel4 { background-image:url(image.png); }
    .panel5 { background-image:url(scarlett-johansson-cinderella-annie-leibovitz.jpg); }

    /* Flex Items */
    .panel > * {
      margin:0;
      width: 100%;
      transition:transform 0.5s;
      flex: 1 0 auto;
      display:flex;
      justify-content: center;
      align-items: center;
    }

    .panel > *:first-child { transform: translateY(-100%); }
    .panel.open-active > *:first-child { transform: translateY(0); }
    .panel > *:last-child { transform: translateY(100%); }
    .panel.open-active > *:last-child { transform: translateY(0); }

    .panel p {
      text-transform: uppercase;
      font-family: 'Amatic SC', cursive;
      text-shadow:0 0 4px rgba(247, 246, 244), 0 0 14px rgba(247, 246, 244);
      font-size: 2em;
    }
    .panel p:nth-child(2) {
      font-size: 4em;
    }

    .panel.open {
      flex: 5;
      font-size:40px;
    }

    .cta {
      color:white;
      text-decoration: none;
    }

  </style>
  
  <style>
img {
    border-radius: 8px;
}
</style>
  
  


  <div class="panels">
    <div class="panel panel1">
      <p>Hey</p>
      <p>Let's</p>
      <p>Fly</p>
    </div>
    <div class="panel panel2">
      <p>Join</p>
      <p>with</p>
      <p>Us...</p>
    </div>
    <div class="panel panel3">
      <p>A new</p>
      <p>World</p>
      <p>"Dreaming World"</p>
    </div>
    <div class="panel panel4">
      <p>Relax</p>
      <p>All</p>
      <p>Your Pain</p>
    </div>
    <div class="panel panel5">
      <p>You're</p>
      <p>in</p>
      <p>Dreaming World... </p>
    </div>
  </div>

  <script>
    const panels = document.querySelectorAll('.panel');

    function toggleOpen() {
      console.log('Hello');
      this.classList.toggle('open');
    }

    function toggleActive(e) {
      console.log(e.propertyName);
      if (e.propertyName.includes('flex')) {
        this.classList.toggle('open-active');
      }
    }

    panels.forEach(panel => panel.addEventListener('click', toggleOpen));
    panels.forEach(panel => panel.addEventListener('transitionend', toggleActive));
  </script>
  
  <p> <font color="white">

<center> <img src="download.png"> </center>

<br>  <br> <br>
<center>
<div> 
	

<a href="Stories/1Cindarella.php">
<img style="background:url(Stories/2_5.jpg)" width="300" height="300" src="Stories/Cinderella11.png" width="10%" height="5%" alt="" />		
</a>

<a href="Stories/2Beauty And The Beast.php">
<img style="background:url(Stories/2_3.jpg)" width="300" height="300" src="Stories/2_1.png" width="10%" height="5%" alt="" />		
</a>
<a href="Stories/3Snow White.php">
<img style="background:url(Stories/3_2.jpg)" width="300" height="300" src="Stories/3_2.png" width="10%" height="5%" alt="" />		
</a>
<a href="Stories/4Rapunzel.php">
<img style="background:url(Stories/3_1.jpg)" width="300" height="300" src="Stories/4_1.png" width="10%" height="5%" alt="" />		
</a>
<a href="Stories/5Brave Merida.php">
<img style="background:url(Stories/5_1.jpg)" width="300" height="300" src="Stories/5_1.png" width="10%" height="5%" alt="" />		
</a>
<a href="Stories/6Ariel's Story.php">
<img style="background:url(Stories/6_1.jpg)" width="300" height="300" src="Stories/6_1.png" width="10%" height="5%" alt="" />		
</a>
<a href="Stories/7Aurora's Story.php">
<img style="background:url(Stories/7_2.jpg)" width="300" height="300" src="Stories/7_1.png" width="10%" height="5%" alt="" />		
</a>
<a href="Stories/8Belle's Story.php">
<img style="background:url(Stories/8_1.jpg)" width="300" height="300" src="Stories/8_1.png" width="10%" height="5%" alt="" />		
</a>
<a href="Stories/9Mulan's Story.php">
<img style="background:url(Stories/9_1.jpg)" width="300" height="300" src="Stories/9_1.png" width="10%" height="5%" alt="" />		
</a>
<a href="Stories/10Tiana's Story.php">
<img style="background:url(Stories/10_1.jpg)" width="300" height="300" src="Stories/10_2.png" width="10%" height="5%" alt="" />		
</a>
<a href="Stories/11Jasmine's Story.php">
<img style="background:url(Stories/11_2.jpg)" width="300" height="300" src="Stories/11_1.png" width="10%" height="5%" alt="" />		
</a>
<a href="Stories/12Pocahonta's Story.php">
<img style="background:url(Stories/12_2.jpg)" width="300" height="300" src="Stories/12_1.png" width="10%" height="5%" alt="" />		
</a>
<a href="Stories/13Frozen's Story.php">
<img style="background:url(Stories/13_1.jpg)" width="300" height="300" src="Stories/13_4.png" width="10%" height="5%" alt="" />		
</a>
<a href="Stories/14Peter Pan's Story.php">
<img style="background:url(Stories/14_1.jpg)" width="300" height="300" src="Stories/14_1.png" width="10%" height="5%" alt="" />		
</a>
<a href="Stories/15TinkerBell's Story.php">
<img style="background:url(Stories/15_1.jpg)" width="300" height="300" src="Stories/15_1.png" width="10%" height="5%" alt="" />		
</a>
<a href="Stories/16Jack And The Beanstalk's Story.php">
<img style="background:url(Stories/16_2.jpg)" width="300" height="300" src="Stories/16_1.png" width="10%" height="5%" alt="" />		
</a>



</div> </center>


<br>
<br> 
<center>
<a href="DW Music Player.php">
<img border="0" alt="Dw" src="MusicPlayer-icon.png" width="300" height="150">
</a>
</center> <br> 
<center>
<a href="index.php">
<img border="0" alt="Dw" src="Back_home_button.png" width="300" height="150">
</a>
</center>
<br> 
<center>
<a href="Login Form.php">
<img border="0" alt="Dw" src="Sign-Up-Button-PNG-HD.png" width="300" height="75">
</a>
</center>
<a href="CK/ck.php">Chathura kariyawasam</a>







  </font> </p>

</body>
</html>
