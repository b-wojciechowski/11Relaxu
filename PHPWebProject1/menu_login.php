<?php

echo '<head>
	<style>
		.img-crest {
			height: 45px;
			margin: 10px 10px 0px 20px
		}

		@media screen and (max-width: 800px) {
		.img-crest {
				height: 35px;
				margin: 10px 10px 0px 10px
			}
		}

	.hr-menu{
		display: block; height: 1px;
		border: 0;
		border-top: 1px solid #ccc;
		padding: 0;
		margin:1px;
	}

.li-menu{
color: black;}

.navbar2 {
  overflow: hidden;
  background-color: #333;
  position: fixed; /* Set the navbar to fixed position */
  top: 0; /* Position the navbar at the top of the page */
  width: 100%; /* Full width */


	</style>
</head>
<div class="navbar-fixed">
<nav>
	<div class="nav-wrapper navbar2"">
		<a href="index.php" class="brand-logo">
			<img src="images/relax_crest_150x150.png" class="img-crest" />
		</a>
		<a href="#" data-activates="mobile-demo" class="button-collapse">
			<i class="material-icons">menu</i>
		</a>
		<ul class="right hide-on-med-and-down li-menu">
			


			<li>
				<a class="modal-trigger" href="#modal2_help">
					<i class="material-icons left">help_outline</i>Pomoc
				</a>
			</li>

		
		</ul>
</div>
		<ul class="side-nav" id="mobile-demo">
<div class="row">
	<div class="center" style="padding:20px 00px 10px 00px"><img src="images/relax_crest_menu.png" style="height:50px"></div>
<!-- 	<div style="padding: 25px 35px 10px 0px; color: #004a86; font-size: 20px;" class="right">
		<b>Relax Radziwi³³ów</b>
	</div>-->

</div>
<hr class="hr-menu"/>
		
			<li>
				<a class="modal-trigger" href="#modal2_help">
					<i class="material-icons left">help_outline</i>Pomoc
				</a>
			</li>
	
		
			<hr class="hr-menu"/>
		</ul>
	</div>
</nav>

';?>