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
                                    $arraylength = count($value);
                                    $teller = 0;
                                    foreach ($value as $d) {
                                        $teller++;
                                        if($teller === 1){
                                            print("<div class='panel panel-primary'>");
                                            print("<div class='panel-heading' style='background: rgb(48, 102, 93)'>");
                                            print("<strong>".$weekdagen[$d['day']]." ".date('d-m-Y', strtotime($d['datum']))."</strong>");
                                            print("</div>");
                                        }
                                        print("<div class='panel-body'>");
                                            if($d['event'] == null){
                                                print("<p><strong>".$d['time']."</strong></p>");
                                            } else {
                                                print("<p><strong>".$d['time'].": ".$d['event']."</strong></p>");
                                            }
                                            if($d['location'] != null){
                                                print("<p>Lokatie: ".$d['location']."</p>");
                                            }
                                            if($d['comment'] != null){
                                                print("<p>Kommentaar: ".$d['comment']."</p>");
                                            }
                                        print("</div>");
                                        if($teller == $arraylength){
                                            print("</div>");
                                        } else {
                                            print("<hr>");
                                        }
                                    }
                                }
                            ?>
                            </div>
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