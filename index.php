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
						<a class="nav-link" href="#schema">Schema</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#over">Over ons</a>
          </li>
					<li class="nav-item">
						<a class="nav-link" href="#gala">Artiestengala</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
		</div>
  </nav>

  <div id="alertContainer" class="fixed-top alert-container col-sm-3 offset-sm-9"></div>
  <!-- Header -->
  <div id="top" class="parallax header">
    <div class="filter">
    <div class="container header-textblock text-center">
    <h1 class="display-3 header-text animated bounceInLeft"><left>RADIO</left> <right>TWENTESTAD</right></h1>
      <p class="page-scroll animated bounceInRight"><a class="header-button" href="#luisteren" role="button">Lees verder</a></p>
    </div>
    </div>
  </div>

  <!-- body -->
  <div class="main">
  <section id="luisteren" class="parallax luisteren text-center">
    <div class="filter">
      <div class="container">
        <div class="header-container"><h2 class="header-text header-luisteren">LUISTEREN</h2></div>
        <!-- Audio player -->
        <audio controls id="player" style="display: none">
          <source src="http://radioloho.gkstreamen.nl:8044/;" type="audio/mpeg">
          Your browser does not support the audio element.
        </audio>
        <div class="player-pill col-sm-6 offset-sm-3">
          <p class="page-scroll player-button"><a class="header-button fas fa-play fa-3x" id="player-button" onclick="playToggle();" role="button"></a></p>
          <div class="player-text-container">
            <p><b>Radio Twentestad</b></p>
            <p>Je luistert nu naar radio twentestad</p>
          </div>
          <input class="player-slider" type="range" min="0.0" max="1.0" value="0.5" step="0.01" onchange="changeVolume(this.value);">
          <i class="fas fa-volume-up player-volume-icon fa-2x"></i>
        </div>
        <div class="sub-header"><h3>UITZENDING GEMIST?</h3></div>
        <iframe class="gemist-frame" width="200" height="250" src="https://www.mixcloud.com/widget/follow/?dark=1&u=%2Fradiotwentestad%2F" frameborder="0" ></iframe>
      </div>
    </div>
  </section>

    <section id="schema" class="parallax schema text-center">
      <div class="container">
        <div class="header-container"><h2 class="header-text header-schema">PROGRAMMERING</h2></div>
        <ul class="nav nav-tabs row" id="myTab" role="tablist" style="border-bottom: none">
          <li class="nav-item schema-link col-sm">
            <a class="nav-link active" id="maandag-tab" data-toggle="tab" href="#maandag" role="tab" aria-controls="maandag" aria-selected="true">MAANDAG</a>
          </li>
          <li class="nav-item schema-link col-sm">
            <a class="nav-link" id="dinsdag-tab" data-toggle="tab" href="#dinsdag" role="tab" aria-controls="dinsdag" aria-selected="false">DINSDAG</a>
          </li>
          <li class="nav-item schema-link col-sm">
            <a class="nav-link" id="woensdag-tab" data-toggle="tab" href="#woensdag" role="tab" aria-controls="woensdag" aria-selected="false">WOENSDAG</a>
          </li>
          <li class="nav-item schema-link col-sm">
            <a class="nav-link" id="donderdag-tab" data-toggle="tab" href="#donderdag" role="tab" aria-controls="donderdag" aria-selected="false">DONDERDAG</a>
          </li>
          <li class="nav-item schema-link col-sm">
            <a class="nav-link" id="vrijdag-tab" data-toggle="tab" href="#vrijdag" role="tab" aria-controls="vrijdag" aria-selected="false">VRIJDAG</a>
          </li>
          <li class="nav-item schema-link col-sm">
            <a class="nav-link" id="zaterdag-tab" data-toggle="tab" href="#zaterdag" role="tab" aria-controls="zaterdag" aria-selected="false">ZATERDAG</a>
          </li>
          <li class="nav-item schema-link col-sm">
            <a class="nav-link" id="zondag-tab" data-toggle="tab" href="#zondag" role="tab" aria-controls="zondag" aria-selected="false">ZONDAG</a>
          </li>
        </ul>

        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="maandag" role="tabpanel" aria-labelledby="maandag-tab">
            <div class="row">
              <div class="col-sm-3">10:00 ~ 12:00</div>
              <div class="col-sm-8">''De Maandag Ochtend Show'' - Robin Ganzevles & Peter Hagenaars & Michel Grevink & Hans Koster</div>
            </div>
          </div>
          <div class="tab-pane fade" id="dinsdag" role="tabpanel" aria-labelledby="dinsdag-tab">
            <div class="row">
              <div class="col-sm-3">10:00 ~ 12:00</div>
              <div class="col-sm-8"> ''de Dinsdag Ochtend Show'' -  Ria Oude Sanderink & Peter Hagenaars & wesley treder</div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">19:00 ~ 22:00</div>
              <div class="col-sm-8">''Dit is Thijs" - Thijs Fleer ( Tuffel Fm)</div>
            </div>
          </div>
          <div class="tab-pane fade" id="woensdag" role="tabpanel" aria-labelledby="woensdag-tab">
            <div class="row">
              <div class="col-sm-3">10:00 ~ 12:00</div>
              <div class="col-sm-8"> ''de Woensdag Ochtend Show'' -  Peter Hagenaars & Theo Gerard & joost kuipers (LoHo Radio)</div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">20:00 ~ 22:00</div>
              <div class="col-sm-8"> ''Ziet Zwart Van Het Vinyl'' - JanWillem Kroese ( Radio OZO Enschede)</div>
            </div>
          </div>
          <div class="tab-pane fade" id="donderdag" role="tabpanel" aria-labelledby="donderdag-tab">
            <div class="row">
              <div class="col-sm-3">10:00 ~ 12:00</div>
              <div class="col-sm-8">'' Dinkel Old Music'' - Gerrit van Gils (LoHo Radio)</div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">19:00 ~ 21:00</div>
              <div class="col-sm-8">RobinRadio-Robin Ganzevles (RobinRadio)</div>
            </div>
          </div>
          <div class="tab-pane fade" id="vrijdag" role="tabpanel" aria-labelledby="vrijdag-tab">
            <div class="row">
              <div class="col-sm-3">10:00 ~ 12:00</div>
              <div class="col-sm-8">''de Vrijdag Ochtend Show'' - Thijs Fleer & Michel Grevink (LoHo Radio)</div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">20:00 ~ 22:00</div>
              <div class="col-sm-8">''de Vrijdag Avond Show'' - Albert Staal, JanWillem Kroese & Alexander Robers ( Radio OZO Enschede)</div>
            </div>
          </div>
          <div class="tab-pane fade" id="zaterdag" role="tabpanel" aria-labelledby="zaterdag-tab">
            <div class="row">
              <div class="col-sm-3">09:00 ~ 10:00</div>
              <div class="col-sm-8">Shanties bij de vleet met Max Thurmer</div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">10:00 ~ 12:00</div>
              <div class="col-sm-8">Jaren 70 muziek met Geerhard Hannink</div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">12:00 ~ 14:00</div>
              <div class="col-sm-8">Streektaal radio met Ben Nijkamp</div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">14:00 ~ 15:00</div>
              <div class="col-sm-8">Shanties bij de vleet met Max Thurmer</div>
            </div>
          </div>
          <div class="tab-pane fade" id="zondag" role="tabpanel" aria-labelledby="zondag-tab">
            <div class="row">
              <div class="col-sm-3">12:00 ~ 14:00</div>
              <div class="col-sm-8">"Het Artiesten Gala" met Henk en Michel Grevink</div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">14:00 ~ 17:00</div>
              <div class="col-sm-8">"Grijs Gedraaid" met Albert Staal (Radio OZO Enschede)</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="over" class="parallax over">
      <div class="filter-hard">
        <div class="container">
          <div class="header-container text-center"><h2 class="header-text header-luisteren">OVER ONS</h2></div>
          <div class="over-container">
            <h3>Het begon allemaal in 1986</h3>
            <p class="over-text">Het programma begon bij Radio Enschede met Herman Lippinkhof, Gerard Keizer en vader en zoon Henk en Michel Grevink. Zij maakten de eerste tijd het programma vanuit de toenmalige Varia Studio aan de Hoogstraat. Al snel groeide het programma uit tot een vaste waarde in de programmering van Radio Enschede. "Een populair onderdeel van Het Artiestengala was 'Het Dingetje', waarbij de luisteraars moesten raden welk ding werd omschreven," "Ook werden er veel verzoekplaten aangevraagd en kwamen er veel artiesten langs in de studio. De eerste artieste die bij mij in de uitzending langs kwam, was zangeres Pauline van 'Ik laat je niet gaan'."</p>
          </div>
          <div id="carouselOver" class="carousel slide" data-ride="carousel" style="margin-bottom: 30px;">
            <ol class="carousel-indicators">
              <li data-target="#carouselOver" data-slide-to="0" class="active"></li>
              <li data-target="#carouselOver" data-slide-to="1"></li>
              <li data-target="#carouselOver" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/over_1.jpeg" alt="First pic">
                <div class="filter-img"></div>
                </img>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/over_2.jpeg" alt="Second pic">
                <div class="filter-img"></div>
                </img>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/over_3.jpeg" alt="Third pic">
                <div class="filter-img"></div>
                </img>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselOver" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselOver" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="gala" class="parallax gala">
      <div class="filter-dark">
        <div class="container">
          <div class="header-container text-center"><h2 class="header-text header-luisteren">ARTIESTENGALA</h2></div>
          <div class="over-container">
          <h3>Het Artiestengala. Een programma van Henk & Michel Grevink.<br>Sinds 1986 op uw Radio.</h3>
            <p class="over-text">Het programma begon bij Radio Enschede met Herman Lippinkhof, Gerard Keizer en vader en zoon Henk en Michel Grevink. Zij maakten de eerste tijd het programma vanuit de toenmalige Varia Studio aan de Hoogstraat. Al snel groeide het programma uit tot een vaste waarde in de programmering van Radio Enschede. "Een populair onderdeel van Het Artiestengala was 'Het Dingetje', waarbij de luisteraars moesten raden welk ding werd omschreven," "Ook werden er veel verzoekplaten aangevraagd en kwamen er veel artiesten langs in de studio. De eerste artieste die bij mij in de uitzending langs kwam, was zangeres Pauline van 'Ik laat je niet gaan'."</p>
            <a class="header-button" href="https://www.artiestengala.info/" target="_blank">Naar de site</a>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="parallax contact">
      <div class="container">
      <div class="header-container text-center"><h2 class="header-text header-luisteren">CONTACT</h2></div>
      <h3 class="over-text">Stuur ons een berichtje en/of verzoekje, of check onze social media!</h3>
      <form id="contact-form" method="get" enctype="multipart/form-data" action="mailer.php">
      <div id="form-messages"></div>
        <div class="row">
            <div class="col-sm col-sm-offset-1" style="display: inline-block">
              <div class="form-group">
                  <label class=" control-label label-contact" for="textinput">*Naam:</label>  
                  <input id="naam" name="naam" placeholder="Naam Achternaam" class="form-control" type="text" required>
              </div>
              <div class="form-group">
                  <label class=" control-label label-contact" for="textinput">*Email:</label>  
                  <input id="email" name="email" placeholder="voorbeeld@mail.com" class="form-control" type="email" required>
              </div>
              <div class="form-group">
                  <label class=" control-label label-contact" for="textinput">Telefoon:</label>  
                  <input id="telefoon" name="telefoon" placeholder="06-12345678" class="form-control" type="number">
              </div>
            </div>
            <div class="col-sm" style="display: inline-block">
              <div class="form-group">
                  <label class=" control-label label-contact" for="textinput">*Bericht:</label>  
                  <textarea class="form-control" id="bericht" name="bericht" rows="10" required></textarea>
              </div>
            </div>
        </div>
        <div class="text-center">
          <button class="text-center header-button" type="submit">Versturen</button>
        </div>
        </form>
        <div class="text-center">
          <a href="www.twitter.com" class="btn btn-social"><i class="fab fa-twitter"></i></a>
          <a href="www.twitter.com" class="btn btn-social"><i class="fab fa-facebook"></i></a>
          <a href="www.twitter.com" class="btn btn-social"><i class="fab fa-google"></i></a>
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
    <script src="js/form-send.js"></script>
    <script>
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
        $( "#player-button" ).removeClass("fa-pause").addClass("fa-play");
        playing = !playing;
      }
      else{
        player.play();
        $( "#player-button" ).removeClass("fa-play").addClass("fa-pause");
        playing = !playing;
      }
    }
    </script>
  </body>
</html>