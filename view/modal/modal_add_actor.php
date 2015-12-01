  <!-- Modal -->


<div class="modal fade" id="AddActor">
  <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Add Actor</h4>
        </div>
       <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <div class="modal-body">
          <div class="form-group">
          <label for="InputFname">First Name</label>
        <input class="form-control" name="for-InputFname" placeholder="Enter First Name" type="text" required>
        </div>
          <div class="form-group">
          <label for="InputLname">Last Name</label>
        <input class="form-control" name="for-InputLname" placeholder="Enter Last Name" type="text" required>
        </div>
          <div class="form-group">
          <label for="InputRole">Role</label>
             <input name="for-InputRole" type="radio" value="Main Actor" checked> Main Actor
              <input name="for-InputRole" type="radio" value="Supporting" > Supporting Actor
        </div>
        <div class="form-group">
          <label for="InputRole">Gender: </label>
            <input type="radio" name="sex" value="Male" checked> Male 
            <input type="radio" name="sex" value="Female"> Female  
        </div>
        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn btn-default">Cancel</a>
           <button type="submit"  name="insert_actor" class="btn btn-success" >Add</button>

        </div>
        </form>
      </div>
    </div>
</div>


<form action="">

</form>