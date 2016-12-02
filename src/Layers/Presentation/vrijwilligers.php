<!DOCTYPE html>

<html lang="en">
    <?php require_once(__DIR__ . "/components/head.php"); ?>
    <body>
        <div class="container-fluid" id="header-section">
            <div class="row">
                <div class="col-md-2 col-lg-3"></div>
                <div class="col-md-8 col-lg-6">
                    <header>
                        <div class="container-fluid" id="mobilenavbar">
                            <?php require_once(__DIR__ . "/components/mobilenav.php"); ?>
                        </div>
                        <?php require_once(__DIR__ . "/components/header.php"); ?>
                        <?php require_once(__DIR__ . "/components/nav.php"); ?>
                    </header>
                    <section>
                        <div class="page-content">
                        	<div class="text-center" style="padding: 0 20%">
                        		<p><?= $content['art1'] ?></p>
                        	</div>
                            <h4><?= $content['tit1'] ?></h4>
                            <p><?= $content['art2'] ?></p>
                            <p><?= $content['art3'] ?></p>
                            <h4><?= $content['tit2'] ?></h4>
                            <p><?= $content['art4'] ?></p>
                            <p><?= $content['art5'] ?></p>
                            <p><?= $content['art6'] ?></p>
                            <ul>
                            	<?php
                            		foreach ($content['list'] as $value) {
                            			print("<li>".$value."</li>");
                            		}
                            	?>
                            </ul>
                            <p><?= $content['art7'] ?></p>
                        </div>
                    </section>
                </div>
                <div class="col-md-2 col-lg-3"></div>
            </div>
        </div>
        <footer>
            <div class="container-fluid" id="footer">
                <?php require_once(__DIR__ . "/components/footer.php"); ?>
            </div>
        </footer>
        <script>
            $('#vrijwilligers').addClass("active");
        </script>
    </body>
</html>