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
                            <select id="yearselector" onchange="changeYear()" class="btn btn-warning pull-right" style="background: <?= $color ?>; border: 1px solid <?= $color ?>">
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
                                foreach ($kalender as $monthnumber => $arr_date) {
                                    if($monthnumber == $_SESSION['month']){
                                        $style = "background: ".$color."; border: 1px solid ".$color;
                                    } else {
                                        $style = "background: rgb(48, 102, 93); border: 1px solid rgb(48, 102, 93)";
                                    }
                                    print("<div class='panel panel-primary' style='".$style."'>");
                                    print("<div class='panel-heading' style='".$style."'>");
                                        print("<h4>".$maanden[$monthnumber]. " " . $_SESSION['year'] ."</h4>");
                                    print("</div>");
                                    print("<div class='panel-body'>");
                                        foreach ($arr_date as $date => $arr_details) {
                                            $arr_datestring = explode("-", $date);
                                            $datestring = $weekdagen[$arr_datestring[0]] . " " . date('d-m-Y', strtotime($arr_datestring[1]));
                                            print("<div class='panel panel-default'>");
                                            print("<div class='panel-heading' style='background: rgb(220, 253, 248)'>");
                                                print("<strong>".$datestring."</strong>");
                                            print("</div>");
                                                foreach ($arr_details as $d) {
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
                                                            }
                                            print("</div>");
                                        }
                                    print("</div>");
                                    print("</div>");
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