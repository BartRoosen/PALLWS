 <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <img src="img/small.PNG" style="width: 5%" class="">
        <h3 class="modal-title">Pallium leden</h3>
      </div>
      <form action="login.php" method="post">
      <div class="modal-body">
            <div class="form-group">
              <label>Naam</label>
              <input type="text" name="name" placeholder="Naam" class="form-control" autofocus="true">
            </div>
            <div class="form-group">
              <label>Wachtwoord</label>
              <input type="password" name="pass" placeholder="Paswoord" class="form-control">
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" value="1" class="btn btn-success">Inloggen</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Annuleer</button>
      </div>
      </form>
    </div>
  </div>
</div>