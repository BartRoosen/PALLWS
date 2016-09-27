<!DOCTYPE html>
<!--src/Layers/Presentation/GamesList.php-->
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Games</title>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    </head>
    <body>
        <h1>
			Game list:
		</h1>
		<hr>
		<table>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Date</th>
                <th></th>
			</tr>
			<?php
				foreach($gamesLijst as $game){
					print('<tr>');
					print('<td>'.$game->getId().'</td>');
					print('<td>'.$game->getName().'</td>');
					print('<td>'.$game->getDatum().'</td>');
                    print("<td><a href='games.php?action=showBlinds&game=".$game->getId()."'>Blinds</a>");
					print('</tr>');
				}
			?>
		</table>
		<hr>
		<form action="games.php?action=addGame" method="post">
            <input type="text" name="name" placeholder="Enter name of the game">
            <input type="date" name="date">
            <input type="submit" value="Save game">
        </form>
    </body>
</html>
