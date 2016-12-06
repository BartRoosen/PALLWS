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
                            <a href="navcontroller.php?page=lprint" class="">Printversie</a>
                            <select id="yearselector" onchange="changeYear()" class="btn btn-warning pull-right">
                                <?php
                                    foreach ($yearsDD as $year) {
                                        if($year == $_SESSION['year']){
                                            print("<option value='".$year."' selected>".$year."</option>");
                                        } else {
                                            print("<option value='".$year."'>".$year."</option>");
                                        }
                                    }
                                ?>
                            </select>
                            <h4>Kalender <?= $_SESSION['year'] ?></h4>
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
                                                print("<p><span class='glyphicon glyphicon-time'></span><strong>".$d['time']."</strong></p>");
                                            } else {
                                                print("<p><span class='glyphicon glyphicon-time'></span> <strong>".$d['time']." ".$d['event']."</strong></p>");
                                            }
                                            if($d['location'] != null){
                                                print("<p><span class='glyphicon glyphicon-map-marker'></span> ".$d['location']."</p>");
                                            }
                                            if($d['comment'] != null){
                                                print("<p><span class='glyphicon glyphicon-bullhorn'></span> ".$d['comment']."</p>");
                                            }
                                        print("</div>");
                                        if($teller == $arraylength){
                                            print("</div>");
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
            <div class="container-fluid" id="lfooter">
                <?php require_once(__DIR__ . "/components/footer.php"); ?>
            </div>
        </footer>
        <script>
            $('#lhome').addClass("active");
            function changeYear(){
                var year = $('#yearselector').val();
                window.location.href = "changeYear.php?year=" + year;
            }
        </script>
    </body>
</html>

<!--

    <div class='panel-heading'></div>
    </div>
</div>
-->