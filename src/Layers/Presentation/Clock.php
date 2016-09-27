<!DOCTYPE html>
<!--src/Layers/Presentation/Clock.php-->
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Clock</title>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
        <script src="js/clock.js"></script>
        <style>
            #progressbar{
                height: 1em;
                background: #000;
            }
        </style>
    </head>
    <body>
        <div id="blindlevelinfo" hidden>
            <?php echo $json_blinds ?>
        </div>
        <h1><?php echo $game->getName() ?></h1>

        <div id="level"></div>
        <div id="small"></div>
        <div id="big"></div>
        <div id="ante"></div>
        <div id="nsmall"></div>
        <div id="nbig"></div>
        <div id="nante"></div>
        <div id="clock">
            <div id="min"></div>
            <div id="sec"></div>
        </div>
        <div id="progressbar"></div>
        <button id="pauze" class="btn btn-primary">Pause</button>
        <button id="levelUp" class="btn btn-primary">Level up</button>
    </body>
</html>
