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
                            <h4><?= $content['tit1'] ?></h4>
                            
                            <ul>
                            	<?php
                            		foreach ($content['list1'] as $value) {
                            			print("<li>".$value."</li>");
                            		}
                            	?>
                            </ul>
                            <h4><?= $content['tit2'] ?></h4>
                            <ul>
                            	<?php
                            		foreach ($content['list2'] as $value) {
                           				print($value);
                            		}
                            	?>
                            </ul>
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
            $('#vrijwilligerworden').addClass("active");
        </script>
    </body>
</html>