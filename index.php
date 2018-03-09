<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Radio Twentestad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Stijltjes -->
	 <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.css" />
   <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
   <link rel="stylesheet" type="text/css" media="screen" href="css/animate.css" />
   <link rel="stylesheet" type="text/css" media="screen" href="css/jquery-ui.css" />
   <link rel="stylesheet" type="text/css" media="screen" href="fontawesome/web-fonts-with-css/css/fontawesome-all.css" />

	 <!-- fonts -->
	 <link href="https://fonts.googleapis.com/css?family=Krona+One" rel="stylesheet"> 

</head>
<body style="overflow-x: hidden;">
  	<!-- Navbar -->
	<nav class="navbar navbar-toggleable-md navbar-inverse bg-blur text-center fixed-top animated fadeIn" id="navbar">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="container page-scroll">
			<a class="navbar-brand" href="#top">Radio Twentestad</a>

			<div class="collapse navbar-collapse" id="navbarsExampleDefault">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="#luisteren">Luisteren<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Schema</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Over ons</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Artiestengala</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
  <!-- Header -->
  <div id="top" class="parallax header">
    <div class="container header-textblock text-center">
    <h1 class="display-3 header-text animated bounceInLeft"><left>RADIO</left> <right>TWENTESTAD</right></h1>
      <p class="page-scroll animated bounceInRight"><a class="header-button" href="#luisteren" role="button">Lees verder</a></p>
    </div>
  </div>

  <!-- body -->
  <div class="main">
    <section id="luisteren" class="parallax luisteren text-center">
      <div class="container">
        <div class="header-container"><h2 class="header-text header-luisteren">LUISTEREN</h2></div>
        <audio controls id="player">
          <source src="http://radioloho.gkstreamen.nl:8044/;" type="audio/mpeg">
          Your browser does not support the audio element.
        </audio>
        <div class="player fixed-bottom">
          <p><a class="player-button far fa-play-circle" onclick="playToggle();" id="playbutton" role="button"></a></p>
          <p id="timeDisplay">00:00</p>
          <input type="range" min="0.0" max="1.0" value="0.5" step="0.01" onchange="changeVolume(this.value);">
        </div>    
      </div>
    </section>
  </div>
  <br>
  <footer class="container text-center"> 
    <p>&copy; Radio Twentestad 2018</p>
  </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <!-- Scrippies -->
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/Smoothscroll.js"></script>
    <script>
    $(document).ready(function(){
    
      
    });
    var playing = false;
    var player = document.getElementById("player"); 
    var timeDisplay = document.getElementById("timeDisplay")

    player.ontimeupdate = function() {
      var minutes = Math.floor(player.currentTime / 60); // 7
      var seconds = Math.round(player.currentTime % 60); // 30
      var time = minutes + ":" + seconds;
      timeDisplay.innerHTML = time;
    };
    
    function changeVolume(value){
      player.volume = value;
    }
    $( function() {
      $( "#slider" ).slider({
        min: 0.0,
        max: 1.0,
        step: 0.1,
        change: function(event, ui) {
            
        }
      });
    });

    function playToggle(){
      if(playing){
        player.pause();
        playing = !playing;
      }
      else{
        player.play();
        playing = !playing;
      }
    }
    </script>
  </body>
</html>