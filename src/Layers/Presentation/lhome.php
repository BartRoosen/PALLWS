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
                            <?php
                                foreach ($kalender as $value) {
                                    print("<div class='panel panel-primary'>");
                                    print("<div class='panel-heading' style='background: rgb(48, 102, 93)'>");
                                        print("<strong>".$weekdagen[$value['day']]." ".date('d-m-Y', strtotime($value['datum']))." (".$value['time'].")</strong>");
                                    print("</div>");
                                    print("<div class='panel-body'>");
                                        if($value['event'] != null){
                                            print("<p>Evenement: ".$value['event']."</p>");
                                        }
                                        if($value['location'] != null){
                                            print("<p>Lokatie: ".$value['location']."</p>");
                                        }
                                        if($value['comment'] != null){
                                            print("<p>Kommentaar: ".$value['comment']."</p>");
                                        }
                                    print("</div>");
                                    print("</div>");
                                }
                            ?>
                        </div>
                    </section>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-3"></div>
            </div>
        </div>
        <footer>
            <div class="container-fluid" id="footer">
                <?php require_once(__DIR__ . "/components/footer.php"); ?>
            </div>
        </footer>
        <script>
            $('#lhome').addClass("active");
        </script>
    </body>
</html>

<!--

    <div class='panel-heading'></div>
    </div>
</div>
-->