<!DOCTYPE html>

<html lang="en">
    <?php require_once(__DIR__ . "/components/head.php"); ?>
    <body>
        <header>
            <?php require_once(__DIR__ . "/components/header.php"); ?>
        </header>
        <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <!--navigation here-->
                    <?php require_once(__DIR__ . "/components/nav.php"); ?>    
                </div>
                <div class="col-md-10">
                    <div class="container-fluid">
                        <h1>Index</h1>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <footer>
            <?php require_once(__DIR__ . "/components/footer.php"); ?>
        </footer>
        <script>
            $('#').addClass("active");
        </script>
    </body>
</html>