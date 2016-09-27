<!DOCTYPE html>
<!--src/Layers/Presentation/Clock.php-->
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <script src="js/clock.js"></script>
    </head>
    <body>
        <div id="blindlevelinfo" hidden>
            <?php echo $json_blinds ?>
        </div>
        <h1><?php echo $game->getName() ?></h1>

        <div id="level"></div>

        <div id="clock" style="outline: 1px solid red">
            <div id="min"></div>
            <div id="sec"></div>
        </div>
        
    </body>
</html>
