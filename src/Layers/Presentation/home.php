<!DOCTYPE html>

<html lang="en">
    <?php require_once(__DIR__ . "/components/head.php"); ?>
    <body>
        <header>
            <div class="container-fluid" id="mobilenavbar">
                <?php require_once(__DIR__ . "/components/mobilenav.php"); ?>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 col-lg-3"></div>
                    <div class="col-md-8 col-lg-6">
                        <div class="container-fluid" id="header">
                            <?php require_once(__DIR__ . "/components/header.php"); ?>
                        </div>
                        <div class="container-fluid" id="navbar">
                            <?php require_once(__DIR__ . "/components/nav.php"); ?>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-3"</div>
                </div>
            </div>
        </header>
        <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-lg-3"></div>
                <div class="col-md-8 col-lg-6">
                    <div class="container-fluid" id="content-holder">
                        <h4>Wat is Pallium?</h4>
                        <p>
                        Pallium vzw is een vereniging van vrijwilligers in de palliatieve thuiszorg. Ze engageert zich in nauwe samenwerking met Panal vzw, Palliatief Netwerk Arrondissement Leuven. De vrijwilligers zijn zorgzaam aanwezig bij de palliatieve zieke thuis zodat de mantelzorgers even ademruimte krijgen. Een vrijwilliger in de palliatieve zorg begeleidt de zieke op zijn laatste stukje levensweg.
                        </p>
                    </div>
                </div>
                <div class="col-md-2 col-lg-3"></div>
            </div>
        </div>
        </section>
        <footer>
            <div class="container-fluid" id="footer">
                <?php require_once(__DIR__ . "/components/footer.php"); ?>
            </div>
        </footer>
        <script>
            $('#').addClass("active");
        </script>
    </body>
</html>