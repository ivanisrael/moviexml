  <!-- Modal -->

  <div class="modal fade" id="MyDeleteMovie<?php echo $movie_id;?>" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><strong>WARNING</strong></h4>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to Delete this Information?</p>

        </div>
            <div class="modal-footer">
             <form action="home.php" method="post">

                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                 <button type="submit" id= "<?php echo $movie_id;?>" name="confirm-delete-movie" value="<?php echo $movie_id;?>" class="btn btn-danger btn-ok" >Delete</button>
          </form>
            </div>
      </div>
    </div>
  </div>
