<?php if(!$_SESSION['login'] && $_SESSION['login'] == 'admin'){ header('location: ../../../'); } ?>
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
                            <a href="navcontroller.php?page=levent" class="btn btn-success">Evenement toevoegen</a>
                            <h4>Kalender beheer</h4>
                            <hr>
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Dag</th>
                                        <th>Datum</th>
                                        <th>Uur</th>
                                        <th>Evenement</th>
                                        <th>Beschrijving</th>
                                        <th>Lokatie</th>
                                        <th style="width: 70px;">Actie</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($kalender as $line) {
                                            print("<tr>");
                                            print("<td>".$weekdagen[$line['day']]."</td>");
                                            print("<td>".$line['datum']."</td>");
                                            print("<td>".$line['time']."</td>");
                                            print("<td>".$line['event']."</td>");
                                            print("<td>".$line['comment']."</td>");
                                            print("<td>".$line['location']."</td>");
                                            print("<td>
                                                        <a href='eventcontroller.php?action=delete&id=".$line['id']."' class='btn btn-danger btn-xs pull-right' alt='Delete' title='Verwijder dit evenement' style='margin:0.1em'><span class='glyphicon glyphicon-trash'></span></a>
                                                        <a href='eventcontroller.php?action=edit&id=".$line['id']."' class='btn btn-info btn-xs pull-right' alt='Edit' title='Wijzig dit evenement' style='margin:0.1em'><span class='glyphicon glyphicon-edit'></span></span></a>
                                                   </td>");
                                            print("</tr>");
                                        }
                                    ?>
                                </tbody>
                            </table>
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
            $('#lkal').addClass("active");

            function changeYear(){
                var year = $('#yearselector').val();
                window.location.href = "changeYear.php?year=" + year;
            }
        </script>
    </body>
</html>