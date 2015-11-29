  <!-- Modal -->


<div class="modal fade" id="MyaddMovie">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Enter Information</h4>
        </div>
       <form action="home.php" method="post">
        <div class="modal-body">
          <div class="form-group">
        <label for="InputTitle">Movie Title</label>
        <input class="form-control" name="for-InputTitle" placeholder="Enter Title" type="text" required>
        </div>
        <div class="form-group">
        <label for="InputDate">Date</label>
        <input class="form-control" name="for-InputDate" type="date" required>
        </div>
      <div class="form-group">
        <label for="InputDuration">Duration</label>
      <input class="form-control" name="for-InputDuration" placeholder="Duration" type="text" required>
      </div>
      <div class="form-group">
        <label for="InputSynopsis">Synopsis</label>
        <textarea class="form-control" rows="5" name="for-InputSynopsis"></textarea>
      </div>
        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn btn-default">Cancel</a>
           <button type="submit"  name="insert_movie" class="btn btn-success" >Add</button>

        </div>
        </form>
      </div>
    </div>
</div>