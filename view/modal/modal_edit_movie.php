  <!-- Modal -->


  <div class="modal fade" id="MyEditMovie<?php echo $movie_id;?>" role="dialog">

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Edit Information</h4>
          <?php include '../function/get-fnc/get_movie.php';?>
        </div>
       <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="modal-body">
          <div class="form-group">
        <label for="InputTitle">Movie Title</label>
        <input class="form-control" name="for-InputTitle" value="<?php echo $movie_xml -> title;?>" type="text" required>
        </div>
        <div class="form-group">
        <?php
          $year = "";
          $month = "";
          $day = "";
          $year = $movie_xml->date->year;
          $month = $movie_xml->date->month;
          $day = $movie_xml->date->day;
          $c_date = $day." ".$month." ".$year;

          $date = date('Y-m-d', strtotime($c_date));
        ?>
        <label for="InputDate">Date</label>
        <input class="form-control" name="for-InputDate" value="<?php echo $date;?>" type="date" required>
        </div>
      <div class="form-group">
        <label for="InputDuration">Duration</label>
      <input class="form-control" name="for-InputDuration" value="<?php echo $movie_xml -> duration;?>" type="text" required>
      </div>
      <div class="form-group">
        <label for="InputSynopsis">Synopsis</label>
        <textarea class="form-control" rows="10" name="for-InputSynopsis"><?php echo $movie_xml -> synopsis;?></textarea>
      </div>
        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn btn-default">Cancel</a>
           <button type="submit"  name="edit_movie" value="<?php echo $movie_id;?>" class="btn btn-warning" >Upadate</button>

        </div>
        </form>
            </div>
      </div>
    </div>
  </div>
