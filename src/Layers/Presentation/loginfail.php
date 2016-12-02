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
                            <div class="alert alert-danger">
                                <h4><span class="glyphicon glyphicon-warning-sign"></span> <?= $content['message'] ?></h4>
                            </div>
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
            $('#home').addClass("active");
        </script>
    </body>
</html>