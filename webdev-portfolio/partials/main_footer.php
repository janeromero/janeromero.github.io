</div> <!-- /.wrapper -->

<!-- edit modal -->
  <div id="userLoginModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <form method="POST" action="assets/authenticate.php">
        <input hidden name="item_id" value="<?php echo $id; ?>">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Login</h4>
          </div>
          <div id="userLoginModalBody" class="modal-body">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-default">Submit</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </form>
    </div>
  </div>