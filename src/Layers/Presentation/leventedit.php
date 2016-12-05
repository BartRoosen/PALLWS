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
                            <h4>Evenementen wijzigen</h4>
                            <form action="eventcontroller.php?action=update" method="post">
                            	<input type="text" name="id" value="<?= $eventdetails['id'] ?>" hidden>
                            	<div class="container-fluid">
                            		<div class="row">
                            			<div class="col-xs-0 col-md-3 col-lg-3 col-xl-4"></div>
                            			<div class="col-xs-0 col-md-6 col-lg-6 col-xl-4" style="box-shadow: none">
                            				<div class="form-group">
			                            		<label>Datum</label>
			                            		<input type="text" id="datepicker" name="date" placeholder="Datum" class="form-control" readonly="true" required="true" value="<?= $eventdetails['datum'] ?>">
			                            	</div>
			                            	<div class="form-group">
			                            		<label>Uur</label>
			                            		<input type="time" id="" name="time" placeholder="Datum" class="form-control" required="true" value="<?= $eventdetails['tijd'] ?>">
			                            	</div>
			                            	<div class="form-group">
			                            		<label>Evenement</label>
			                            		<select name="event" class="form-control">
			                            			<option value="0">Selecteer een evenement</option>
			                            			<?php
			                            				foreach ($events as $event) {
			                            					if($event['id'] == $eventdetails['event_id']){
			                            						print("<option value='".$event['id']."' selected>".$event['event_name']."</option>");
			                            					} else {
			                            						print("<option value='".$event['id']."'>".$event['event_name']."</option>");
			                            					}
			                            				}
			                            			?>
			                            		</select>
			                            	</div>
			                            	<div class="form-group">
			                            		<label>Commentaar</label>
			                            		<textarea name="comment" maxlength="250" placeholder="Bijkomende opmerkingen" class="form-control"><?= $eventdetails['comment'] ?></textarea>
			                            	</div>
			                            	<div class="form-group">
			                            		<label>Lokatie</label>
			                            		<input type="text" id="" name="location" placeholder="Lokatie" class="form-control" value="<?= $eventdetails['location'] ?>">
			                            	</div>
			                            	<div class="form-group">
			                            		<button type="submit" name="submit" class="btn btn-success">Opslaan</button>
			                            	</div>
                            			</div>
                            			<div class="col-xs-0 col-md-3 col-lg-3 col-xl-4"></div>
                            		</div>
                            	</div>
                            </form>
                        </div>
                    </section>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-3"></div>
            </div>
        </div>
        <footer>
            <div class="container-fluid" id="footer">
                <?php require_once(__DIR__ . "/components/footer.php"); ?>
            </div>
        </footer>
        <script>
            $('#lkal').addClass("active");
        </script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
          $( function() {
            $( "#datepicker" ).datepicker({dateFormat: 'yy-mm-dd'});
          } );
        </script>
    </body>
</html>