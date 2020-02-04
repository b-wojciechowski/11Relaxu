   <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<body>

	
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
   
	
	
		    <h5 style="padding-bottom:10px; margin-top:-5px">Dodajesz nowego zawodnika do bazy</h5>
				<div class="row"">
					<form class="col s10">
						<div class="row">
							<div class="input-field col s12">
								<input id="first_name" type="text" class="validate" required />
								<label for="first_name" data-error="pole wymagane">Imię zawodnika (*)</label>
							</div>

						</div>

						<div class="row">
							<div class="input-field col s12">
								<input id="last_name" type="text" class="validate" required />
								<label for="last_name" data-error="pole wymagane">Nazwisko zawodnika (*)</label>
								
							</div>

						</div>


                        <div class="row">
					            
                               
                             <div class="input-field col s12 browser-default">
                                <select>
                                       <option value="2">Obrońca</option>
                                    <option value="1">Bramkarz</option>
                                     
                                      <option value="3">Pomocnik</option>
                                      <option value="3">Napastnik</option>
                                </select>
                            <label>Pozycja</label>
                          </div>

						</div>
					
						

						<div class="row">

							<div class="file-field input-field">
								<div class="btn">
									<span>Zdjęcie</span>
									<input type="file" multiple />
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text" placeholder="Wczytaj zdjęcie" />
								</div>
							</div>
                          </div>
                            <div class="row" style="padding-left:5px;margin-top:-20px;">
                            <input type="checkbox" id="test5" />
                            <label for="test5">Nie posiadam zdjęcia</label>
                            </div>
						




					</form>
				</div>


			</div>
			<div class="modal-footer">
				<a href="#!" class="waves-effect waves-light btn red"><i class="material-icons left">clear</i>Anuluj</a>
				<a href="#!" class="waves-effect waves-light btn green"><i class="material-icons left">check</i>Dodaj zawodnika</a>
			</div>
	

	   <script>
		$(document).ready(function () {
			$('select').material_select();
		});
    </script>

	
</body>
