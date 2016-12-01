<!DOCTYPE html>

<html lang="en">
    <?php require_once(__DIR__ . "/components/head.php"); ?>
    <body>
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="container-fluid" id="header">
                            <?php require_once(__DIR__ . "/components/header.php"); ?>
                        </div>
                        <div class="container-fluid" id="navbar">
                            <?php require_once(__DIR__ . "/components/nav.php"); ?>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </header>
        <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="container-fluid" id="content-holder">
                        <h1>Index</h1>
                        <h1>Index</h1>
                        <h1>Index</h1>
                        <h1>Index</h1>
                        <h1>Index</h1>
                        <h1>Index</h1>
                        <h1>Index</h1>
                        <h1>Index</h1>
                        <h1>Index</h1>
                        <h1>Index</h1>
                        <h1>Index</h1>
                        <h1>Index</h1>
                    </div>
                </div>
                <div class="col-md-1"></div>
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