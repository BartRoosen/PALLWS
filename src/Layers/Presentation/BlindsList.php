<!DOCTYPE html>
<!--src/Layers/Presentation/BlindsList.php-->
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Blinds</title>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    </head>
    <body>
        <h1>Blinds for: <?php echo $game->getName() . " (" . $game->getDatum() . ")"?></h1>
        <a href="games.php">Back to game list</a>
        <a href="games.php?action=start&game=<?php echo $game->getId() ?>">Start game</a>
        <hr>
        <table>
            <tr>
                <th>Level</th>
                <th>Small</th>
                <th>Big</th>
                <th>Ante</th>
                <th>Duration</th>
            </tr>
            <?php
                $teller = 1;
                foreach($aBlinds as $bl){
                    print("<tr>");
                    if(!$bl->getPause()){
                        print("<td>".$teller."</td>");
                        print("<td>".$bl->getSmall()."</td>");
                        print("<td>".$bl->getBig()."</td>");
                        print("<td>".$bl->getAnte()."</td>");
                        print("<td>".$bl->getDuration()."</td>");
                        $teller++;
                    }
                    else{
                        print("<td colspan='4'>Pause</td>");
                        print("<td>".$bl->getDuration()."</td>");
                    }
                    print("</tr>");
                }
            ?>
        </table>
        <hr>
        <form action="games.php?action=addLevel&game=<?php echo $game->getId() ?>" method="post">
            <p>Add level</p>
            <input type="number" name="small" placeholder="Small blind" autofocus="true">
            <input type="number" name="big" placeholder="Big blind">
            <input type="number" name="ante" placeholder="Ante">
            <input type="number" name="duration" placeholder="Duration">
            <input type="submit" value="Add level">
        </form>
        <hr>
        <form action="games.php?action=addLevel&type=pause&game=<?php echo $game->getId() ?>" method="post">
            <p>Insert pause</p>
            <input type="number" name="duration" placeholder="Duration">
            <input type="submit" value="Insert Pause">
        </form>

    </body>
</html>
