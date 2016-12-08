<div id="mobilenavmodal" class="modal fade" role="dialog">
	<div class="modal-dialog">
	    <div class="modal-content">
	    <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h3 class="modal-title" id="modal-title">Menu</h3>
	    </div>
	    <div class="modal-body">
	    	<div id="mobile-menu">
	    		<div class="form-group">
		      		<a class="btn btn-default btn-lg mobimenavbutton" href="navcontroller.php?page=home">Home</a>
		      	</div>
		      	<div class="form-group">
		      		<a class="btn btn-default btn-lg mobimenavbutton" href="navcontroller.php?page=pallzorg">Palliatieve zorg</a>
		      	</div>
		      	<div class="form-group">
		      		<a class="btn btn-default btn-lg mobimenavbutton" href="navcontroller.php?page=vrijwilligers">Vrijwilligers</a>
		      	</div>
		      	<div class="form-group">
		      		<a class="btn btn-default btn-lg mobimenavbutton" href="navcontroller.php?page=vrijwilligerworden">Vrijwilliger worden</a>
		      	</div>
		      	<div class="form-group">
		      		<a class="btn btn-default btn-lg mobimenavbutton" href="navcontroller.php?page=getuigenissen">Getuigenissen</a>
		      	</div>
		      	<div class="form-group">
		      		<a class="btn btn-default btn-lg mobimenavbutton" href="navcontroller.php?page=links">Links</a>
		      	</div>
		      	<div class="form-group">
		      		<a class="btn btn-default btn-lg mobimenavbutton" onclick="openMobileForm()">Leden</a>
		      	</div>
	    	</div>
		    <div id="mobilelogonform" hidden>
		    	<div class="form-group">
		      		<form action="login.php?mobilelogon=yes" method="post">
				      	<div class="modal-body">
				            <div class="form-group">
				              	<label>Naam</label>
				              	<input type="text" name="name" placeholder="Naam" class="form-control" autofocus="true">
				            </div>
				            <div class="form-group">
				              	<label>Wachtwoord</label>
				              	<input type="password" name="pass" placeholder="Paswoord" class="form-control">
				            </div>
				      </div>
				      <div class="modal-footer">
				        	<button type="submit" name="submit" value="1" class="btn btn-success" style="background: <?= $color ?>; border: 1px solid <?= $color ?>">Inloggen</button>
				        	<button type="button" class="btn btn-default" onclick="closeMobileForm()">Annuleer</button>
				      </div>
				      </form>
				</div>
		    </div>	
		  	<div class="modal-footer">
		  		PALLIUM VZW <br/><span class="italic">Vrijwilligers Palliatieve Thuiszorg<br/>Arrondissement Leuven</span>
		  	</div>
	    </div>
	  </div>
	  <script>
			function openMobileForm(){
				
				$('#mobile-menu').slideUp(200);
				$('#mobilelogonform').slideDown(200);
				document.getElementById("modal-title").innerHTML = "Leden login";
			}
			function closeMobileForm(){
				$('#mobilelogonform').slideUp(200);
				$('#mobile-menu').slideDown(200);
				document.getElementById("modal-title").innerHTML = "Menu";
			}
		</script>
	</div>
</div>
