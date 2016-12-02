<?php
	if(!$_SESSION['login']){ header('location: ../../../../'); }
	//in case you want this navbar only accessible after login uncomment the following line
	
	//if(!isset($_SESSION["login"]) || !$_SESSION["login"]){ header('location: ../../../../'); }

	//links href should all be 'navcontroller.php?page=EXAMPLE' 
	//	=> EXAMPLE = name of the page to refer to
	//	=> Page name in presentation folder = EXAMPLE.php 
?>

<div class="menu-background">
	<ul>
		<li><a href="navcontroller.php?page=lhome" id='lhome'>Kalender</a></li>
		<li><a href="navcontroller.php?page=lformulieren" id='lformulieren'>Formulieren</a></li>
		<li><a href="navcontroller.php?page=lstatuten" id='lstatuten'>Statuten</a></li>
		<li><a href="navcontroller.php?page=lreglement" id='lreglement'>Reglement</a></li>
		<li><a href="navcontroller.php?page=ldocumenten" id='ldocumenten'>Documenten</a></li>
		<?php
			if(isset($_SESSION['user']) && $_SESSION['user'] == 'admin'){
		?>
		<li><a href="#" id=''>Kalender beheer</a></li>
		<?php
			};
		?>
		<li><a href="login.php?action=logoff">Afmelden</a></li>
	</ul>
</div>
