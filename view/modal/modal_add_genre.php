  <!-- Modal -->


<div class="modal fade" id="AddGenre">
  <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Add Genre</h4>
        </div>
       <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <div class="modal-body">
          <div class="form-group">
        <input class="form-control" name="for-InputGenre" placeholder="Enter Genre" type="text" required>
        </div>
        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn btn-default">Cancel</a>
           <button type="submit"  name="insert_genre" class="btn btn-success" >Add</button>

        </div>
        </form>
      </div>
    </div>
</div>