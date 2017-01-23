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
                            <h4>Documenten toevoegen</h4>
                            <div class="alert alert-info">
                            	Het is enkel mogelijk bestanden te uploaden met de volgende extenties: doc, docx, xls, xlsx en pdf
                            </div>
                            <form action="uploadcontroller.php" method="post" enctype="multipart/form-data">
                            	<input type="text" name="path" value="<?= $_SESSION['path'] ?>" hidden>
                            	<div class="form-group">
                            		<input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-info">
                            	</div>
                            	<div class="form-group">
                            		<button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-cloud-upload"></span> Bestand uploaden</button>
                            	</div>
                            </form>
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