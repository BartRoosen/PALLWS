<?php
	//in case you want this navbar only accessible after login uncomment the following line
	
	//if(!isset($_SESSION["login"]) || !$_SESSION["login"]){ header('location: ../../../../'); }

	//links href should all be 'navcontroller.php?page=EXAMPLE' 
	//	=> EXAMPLE = name of the page to refer to
	//	=> Page name in presentation folder = EXAMPLE.php 
?>

<div class="menu-background">
	<ul>
		<li><a href="navcontroller.php?page=home" id='home'><span class="glyphicon glyphicon-home"></span></a></li>
		<li><a href="navcontroller.php?page=pallzorg" id="pallzorg">Palliatieve zorg</a></li>
		<li><a href="navcontroller.php?page=vrijwilligers" id="vrijwilligers">Vrijwilligers</a></li>
		<li><a href="navcontroller.php?page=vrijwilligerworden" id="vrijwilligerworden">Vijwilliger worden</a></li>
		<li><a href="navcontroller.php?page=getuigenissen" id="getuigenissen">Getuigenissen</a></li>
		<li><a href="navcontroller.php?page=links" id="links">Links</a></li>
		<li><a href="#" data-toggle="modal" data-target="#myModal" id="links">Leden</a></li>
	</ul>
</div>
