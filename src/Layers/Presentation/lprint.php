<?php if(!$_SESSION['login']){ header('location: ../../../'); } ?>
<!DOCTYPE html>

<html lang="en">
    <?php require_once(__DIR__ . "/components/head.php"); ?>
    <body>
        <section>
            <div class="page-content">
            	<a href="navcontroller.php?page=lfullkal" class="hidden-print">Terug</a>
                <h4>Pallium kalender <?= $_SESSION['year'] ?></h4>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Dag</th>
                            <th>Datum</th>
                            <th>Uur</th>
                            <th>Evenement</th>
                            <th>Beschrijving</th>
                            <th>Lokatie</th>
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
                                print("</tr>");
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
        <script>
            window.print();
            //window.location.href = "navcontroller.php?page=lfullkal";
        </script>
    </body>
</html>

<!--

    <div class='panel-heading'></div>
    </div>
</div>
-->