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
                            <?php //require_once(__DIR__ . "/components/mobilenav.php"); ?>
                            <a href="login.php?action=logoff" class="btn btn-default">Afmelden</a>
                        </div>
                        <?php require_once(__DIR__ . "/components/header.php"); ?>
                        <?php require_once(__DIR__ . "/components/lnav.php"); ?>
                    </header>
                    <section>
                        <div class="page-content">
                            <h4>Documenten beheer</h4>
                            <?php
                                if($error_message) {
                                    ?>
                                        <div class="alert alert-danger">
                                            <div class="text-center">
                                                <span class="glyphicon glyphicon-thumbs-down"></span>
                                                <?= $error_message ?>
                                            </div>
                                        </div>
                                    <?php
                                }
                                if($upload_message) {
                                    ?>
                                        <div class="alert alert-success">
                                            <div class="text-center">
                                                <span class="glyphicon glyphicon-thumbs-up"></span>
                                                <?= $upload_message ?>
                                            </div>
                                        </div>
                                    <?php
                                }
                            ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Documenten
                                        </div>
                                        <div class="panel-body">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Naam</th>
                                                        <th class="text-right">Actie</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        foreach ($dList as $file) {
                                                            $path = "documenten/" . $file;
                                                            print("<tr>");
                                                            print("<td><a href='documenten/".$file."' target='_blank'>".$file."</a></td>");
                                                            print("<td class='text-right'>
                                                                        <a href='uploadcontroller.php?file=documenten/".$file."' class='btn btn-danger btn-xs' title='Document verwijderen'><span class='glyphicon glyphicon-trash'></span></button>
                                                                   </td>");
                                                            print("</tr>");
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="panel-footer">
                                            <a href="navcontroller.php?page=ldocs-form&path=documenten" class="btn btn-primary btn-xs">Document toevoegen</a>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Formulieren
                                        </div>
                                        <div class="panel-body">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Naam</th>
                                                        <th class="text-right">Actie</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        foreach ($fList as $file) {
                                                            $path = "formulieren/" . $file;
                                                            print("<tr>");
                                                            print("<td><a href='formulieren/".$file."' target='_blank'>".$file."</a></td>");
                                                            print("<td class='text-right'>
                                                                        <a href='uploadcontroller.php?file=formulieren/".$file."' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></button>
                                                                   </td>");
                                                            print("</tr>");
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="panel-footer">
                                            <a href="navcontroller.php?page=ldocs-form&path=formulieren" class="btn btn-primary btn-xs">Formulier toevoegen</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Getuigenissen
                                        </div>
                                        <div class="panel-body">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Naam</th>
                                                        <th class="text-right">Actie</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        foreach ($gList as $file) {
                                                            $path = "getuigenissen/" . $file;
                                                            print("<tr>");
                                                            print("<td><a href='getuigenissen/".$file."' target='_blank'>".$file."</a></td>");
                                                            print("<td class='text-right'>
                                                                        <a href='uploadcontroller.php?file=getuigenissen/".$file."' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></button>
                                                                   </td>");
                                                            print("</tr>");
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="panel-footer">
                                            <a href="navcontroller.php?page=ldocs-form&path=getuigenissen" class="btn btn-primary btn-xs">Getuigenis toevoegen</a>
                                        </div>
                                    </div>
                                    <!--
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Reglement
                                        </div>
                                        <div class="panel-body">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Naam</th>
                                                        <th class="text-right">Actie</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    /*
                                                        foreach ($rList as $file) {
                                                            $path = "reglement/" . $file;
                                                            print("<tr>");
                                                            print("<td><a href='reglement/".$file."' target='_blank'>".$file."</a></td>");
                                                            print("<td class='text-right'>
                                                                        <a href='uploadcontroller.php?file=reglement/".$file."' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></button>
                                                                   </td>");
                                                            print("</tr>");
                                                        }
                                                    */
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="panel-footer">
                                            <a href="navcontroller.php?page=ldocs-form&path=reglement" class="btn btn-primary btn-xs">Regelement toevoegen</a>
                                        </div>
                                    </div>
                                    -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Statuten
                                        </div>
                                        <div class="panel-body">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Naam</th>
                                                        <th class="text-right">Actie</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        foreach ($sList as $file) {
                                                            $path = "reglement/" . $file;
                                                            print("<tr>");
                                                            print("<td><a href='statuten/".$file."' target='_blank'>".$file."</a></td>");
                                                            print("<td class='text-right'>
                                                                        <a href='uploadcontroller.php?file=statuten/".$file."' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></button>
                                                                   </td>");
                                                            print("</tr>");
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="panel-footer">
                                            <a href="navcontroller.php?page=ldocs-form&path=statuten" class="btn btn-primary btn-xs">Statuten toevoegen</a>
                                        </div>
                                    </div>
                                </div>
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
            $('#ldocs').addClass("active");
            function changeYear(){
                var year = $('#yearselector').val();
                window.location.href = "changeYear.php?year=" + year;
            }
        </script>
    </body>
</html>