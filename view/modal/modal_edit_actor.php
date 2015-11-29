  <!-- Modal -->


<div class="modal fade" id="MyeditActor<?php echo $actor->attributes();?>">
  <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Edit Actor</h4>
        </div>
       <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <div class="modal-body">
         <div class="form-group">
          <label for="InputFname">First Name</label>
        <input class="form-control" name="for-InputFname" value="<?php echo $actor->name->fname; ?>" type="text" required>
        </div>
          <div class="form-group">
          <label for="InputLname">Last Name</label>
        <input class="form-control" name="for-InputLname" value="<?php echo $actor->name->lname;?>" type="text" required>
        </div>
          <div class="form-group">
          <label for="InputRole">Role</label>
        <input class="form-control" name="for-InputRole" value="<?php echo $actor->role;?>" type="text" required>
        </div>
        <div class="form-group">
          <label for="InputRole">Gender: </label>
          <?php
            if($actor->gender == "Male"){
              $male = "checked";
            }else{
              $male = "unchecked";
            }
            if($actor->gender == "Female"){
              $female = "checked";
            }else{
              $female = "unchecked";
            }
          ?>
            <input type="radio" name="sex" value="Male" <?php echo $male;?>> Male 
            <input type="radio" name="sex" value="Female" <?php echo $female;?>> Female  
        </div>
        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn btn-default">Cancel</a>
           <button type="submit"  name="edit_actor" class="btn btn-warning" value="<?php echo $actor->attributes();?>" >Update</button>

        </div>
        </form>
      </div>
    </div>
</div>