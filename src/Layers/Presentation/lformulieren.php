<?php if(!$_SESSION['login']){ header('location: ../../../'); } ?>
<!DOCTYPE html>

<html lang="en">
    <?php require_once(__DIR__ . "/components/head.php"); ?>
    <body>
        <div class="container-fluid" id="header-section">
            <div class="row">
                <div class="col-md-2 col-lg-2 col-xl-3"></div>
                <div class="col-md-8 col-lg-8 col-xl-6">
                    <header>
                        <div class="container-fluid" id="mobilenavbar">
                            <?php require_once(__DIR__ . "/components/mobilenav.php"); ?>
                        </div>
                        <?php require_once(__DIR__ . "/components/header.php"); ?>
                        <?php require_once(__DIR__ . "/components/lnav.php"); ?>
                    </header>
                    <section>
                        <div class="page-content">
                            <h4>Formulieren</h4>
                            <ul>
                            <?php
                                foreach ($forms as $value) {
                                    print("<li><a href='".$value['path']."'>".$value['fullname']."</a></li>");
                                }
                            ?>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-3"></div>
            </div>
        </div>
        <footer>
            <div class="container-fluid" id="lfooter">
                <?php require_once(__DIR__ . "/components/footer.php"); ?>
            </div>
        </footer>
        <script>
            $('#lformulieren').addClass("active");
        </script>
    </body>
</html>