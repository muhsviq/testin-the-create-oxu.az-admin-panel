<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
      <!-- Custom style -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <nav>
        <div class="nav-wrapper container">
          <a href="#!" class="brand-logo"><img src="assets/imgs/logo.png"></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Home</a></li>
            <li><a href="badges.html">Gallery</a></li>
            <li><a href="collapsible.html">About</a></li>
            <li><a href="mobile.html">Contact</a></li>
            <li><a href="mobile.html">Login</a></li>
            <li><a href="mobile.html">Registration</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="sass.html">Home</a></li>
            <li><a href="badges.html">Gallery</a></li>
            <li><a href="collapsible.html">About</a></li>
            <li><a href="mobile.html">Contact</a></li>
            <li><a href="mobile.html">Login</a></li>
            <li><a href="mobile.html">Registration</a></li>
          </ul>
        </div>
      </nav>
    <!-- NEWS START HERE -->
      <div class="container">
        <div class="row">

          
            

        
          <div class="col m3">
            <div class="card"> 
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="upload/p1.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Bu ilin ilk ay tutulması baş verdi<i class="material-icons right">more_vert</i></span>
                <p><a href="#">Ətraflı</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Bu ilin ilk ay tutulması baş verdi<i class="material-icons right">close</i></span>
                <p>“Diqqətlə baxsaq görərik ki, ayın işığı bir qədər zəifləyir”</p>
              </div>
            </div>
          </div>
          <div class="col m3">
            <div class="card"> 
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="upload/p2.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Səhər hərraclarında neftin qiyməti ucuzlaşdı<i class="material-icons right">more_vert</i></span>
                <p><a href="#">Ətraflı</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Səhər hərraclarında neftin qiyməti ucuzlaşdı<i class="material-icons right">close</i></span>
                <p>Son rəqəmlər</p>
              </div>
            </div>
          </div>
          <div class="col m3">
            <div class="card"> 
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="upload/p3.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Ərdoğan: Brüsseldə terror aktı törədən şəxs Türkiyədən deportasiya edilib<i class="material-icons right">more_vert</i></span>
                <p><a href="#">Ətraflı</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Ərdoğan: Brüsseldə terror aktı törədən şəxs Türkiyədən deportasiya edilib<i class="material-icons right">close</i></span>
                <p>“Belçikalılar həmin şəxsi sərbəst buraxıblar”</p>
              </div>
            </div>
          </div>
          <div class="col m3">
            <div class="card"> 
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="upload/p4.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">«Bakı-Supsa» neft kəmərindən neft oğurlayan şəxslər saxlanılıb<i class="material-icons right">more_vert</i></span>
                <p><a href="#">Ətraflı</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">«Bakı-Supsa» neft kəmərindən neft oğurlayan şəxslər saxlanılıb<i class="material-icons right">close</i></span>
                <p>«Müttəhimlər oğurlanmış nefti Tbilisiyə aparırmışlar»</p>
              </div>
            </div>
          </div>
        </div>        
      </div>
      <!-- NEWS END HERE -->
      
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    </body>
  </html>
  <script type="text/javascript">
    $(".button-collapse").sideNav();
  </script>