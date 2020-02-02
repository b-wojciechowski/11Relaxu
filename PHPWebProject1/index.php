  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<!--<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
        <style>

/*@import url("https://fonts.googleapis.com/css?family=Hind:400,700");*/
html, body {
  
  margin: 0;
  padding: 0;
  background-color: #d9e2fd;
  width: 100%;
  height: 100%;
}

img {
  max-width: 100%;
  height: auto;
  display: block;
}


.carousel-wrapper {
  position: relative;
  width: 70%;
  height: 80%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #FFFFFF;
 /* background-image: linear-gradient(#FFFFFF 50%, #FFFFFF 50%, #F0F3FC 50%); */
  box-shadow: 0px 12px 39px -19px rgba(0, 0, 0, 0.75);
  overflow: hidden;
}
.carousel-wrapper .carousel {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 100%;
  height: auto;
    padding-bottom:50px;
    padding-top:50px;
}
.carousel-wrapper .carousel .carousel-cell {
  /*padding: 10px;*/
  background-color: #FFFFFF;
  width: 20%;
  height: auto;
  min-width: 200px;
  margin: 0 20px;
  transition: transform 500ms ease;
}
.carousel-wrapper .carousel .carousel-cell .more {
  display: block;
  opacity: 0;
  margin: 5px 0 0px 0;
  text-align: center;
  font-size: 10px;
  color: #CFCFCF;
  text-decoration: none;
  transition: opacity 300ms ease;
}
.carousel-wrapper .carousel .carousel-cell .more:hover, .carousel-wrapper .carousel .carousel-cell .more:active, 
.carousel-wrapper .carousel .carousel-cell .more:visited, .carousel-wrapper .carousel .carousel-cell .more:focus {
  color: #CFCFCF;
  text-decoration: none;
}
            .carousel-wrapper .carousel .carousel-cell .line {
                position: absolute;
                width: 2px;
                height: 0;
                background-color: black;
                left: 50%;
                margin: 5px 0 0 -1px;
                transition: height 300ms ease;
                display: block;
            }
.carousel-wrapper .carousel .carousel-cell .price {
  position: absolute;
  font-weight: 700;
  margin: 45px auto 0 auto;
  left: 50%;
  transform: translate(-50%);
  opacity: 0;
  transition: opacity 300ms ease 300ms;
}

.carousel-wrapper .carousel .carousel-cell.is-selected {
  transform: scale(1.2);
}
.carousel-wrapper .carousel .carousel-cell.is-selected .line {
  height: 35px;
}
.carousel-wrapper .carousel .carousel-cell.is-selected .price, .carousel-wrapper .carousel .carousel-cell.is-selected .more {
  opacity: 1;
}
.carousel-wrapper .flickity-page-dots {
  display: none;
}
.carousel-wrapper .flickity-viewport, .carousel-wrapper .flickity-slider {
  overflow: visible;

}



            </style>

    </head>

    <body>
         <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

      
        <div class="carousel-wrapper">
        
  <div class="carousel" data-flickity>
   
      <div class="carousel-cell">
       
       
          
          <div class="card sticky-action">
    
      <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/Kacper-Wojciechowski.png">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Kacper Wojciechowski<i class="material-icons right">more_vert</i></span>
      <p>Obrońca</p>
    </div>
             <div class="card-action tooltipped" data-position="bottom" data-delay="50" data-tooltip="Zaznacz, aby oddać głos na tego zawodnika">
                  
           <input type="checkbox" id="test4" onclick="Materialize.toast('Dodałeś Kacpra do Jedenastki 50-lecia', 4000)"> 
      <label for="test4">Jedenastka 50-lecia</label>
        </div></a>

    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">O zawodniku<i class="material-icons right">close</i></span>
      <p>Informacje o zawodniku bla bla bla bla</p>
    </div>

       

  </div>


    </div>
      <div class="carousel-cell">
       <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/Paweł-Widuliński.png">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Paweł Widuliński<i class="material-icons right">more_vert</i></span>
     <p>Obrońca</p>
    </div>
            <div class="card-action">
           <input type="checkbox" id="test5" />
      <label for="test5">Jedenastka 50-lecia</label>
        </div>

    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>



          
    </div>
      <div class="carousel-cell">
       <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/Michał-Mojski.png">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Michał Mojski<i class="material-icons right">more_vert</i></span>
     <p>Obrońca</p>
    </div>

            <div class="card-action">
           <input type="checkbox" id="test6" />
      <label for="test6">Jedenastka 50-lecia</label>
        </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>

            </div>
      <div class="carousel-cell">
       <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/Mateusz-Piątek.png">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Mateusz Piątek<i class="material-icons right">more_vert</i></span>
     <p>Obrońca</p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>


            </div>
      <div class="carousel-cell">
       <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/Michał-Mojski.png">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Michał Mojski<i class="material-icons right">more_vert</i></span>
     <p>Obrońca</p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>


            </div>
      <div class="carousel-cell">
       <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/Michał-Kośmider.png">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Michał Kośmider<i class="material-icons right">more_vert</i></span>
     <p>Obrońca</p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>


            </div>
      <div class="carousel-cell">
       <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/Łukasz-Kujawa.png">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Łukasz Kujawa<i class="material-icons right">more_vert</i></span>
     <p>Obrońca</p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
       </div>
      <div class="carousel-cell">
       <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/Darek-Zawadzki.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Darek Zawadzki<i class="material-icons right">more_vert</i></span>
     <p>Bramkarz</p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>



    </div> <!--   <div class="carousel-wrapper"> -->
</div>




    
    </body>
  </html>
        