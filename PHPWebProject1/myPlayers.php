  <!DOCTYPE html>
<?php
include 'configuration.php';
?>
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
  background-color: #efefef;
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
     
     
   <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>
 
	<div class="carousel-wrapper">
		
        Moja Jedenastka 50-lecia
        <div style="margin-left:20px; margin-right:20px;">

        <h4>Bramkarz</h4>
             <ul class="collection">
                    <li class="collection-item avatar">
                      <img src="images/darek-zawadzki.jpg" alt="" class="circle">
                      <span class="title">Darek Zawadzki</span>
                     </li>
              
                  </ul>

        
        <h4>Obrońcy</h4>
             <ul class="collection">
                    <li class="collection-item avatar">
                      <img src="images/kacper-wojciechowski.jpg" alt="" class="circle">
                      <span class="title">Kacper Wojciechowski</span>
                    </li>
                     
                  <li class="collection-item avatar">
                      <img src="images/pawel-widulinski.jpg" alt="" class="circle">
                      <span class="title">Paweł Widuliński</span>
                    </li>

                 <li class="collection-item avatar">
                      <img src="images/mateusz-piatek.jpg" alt="" class="circle">
                      <span class="title">Mateusz Piątek</span>
                    </li>
              
             
             </ul>


             
        <h4>Pomocnicy</h4>
             <ul class="collection">
                    <li class="collection-item avatar">
                      <img src="images/rafal-wojciechowski.jpg" alt="" class="circle">
                      <span class="title">Rafał Wojciechowski</span>
                    </li>

                  <li class="collection-item avatar">
                      <img src="images/bartlomiej-wojciechowski.jpg" alt="" class="circle">
                      <span class="title">Bartłomiej Wojciechowski</span>
                    </li>
              
              
             
             </ul>


 
        </div>


 </div>


<?php     
    include ($footerContent); 
?>

    <script>
$( document ).ready(function() {
  $('.modal').modal();
  $('#modal1').on('click', function() {
  });
});
</script>

<script>
		$(document).ready(function () {
			$('select').material_select();
		});
 </script>

    
</body>
</html>
        