<!DOCTYPE html>

<html lang="en">
<?php
    include '../function/delete-fnc/delete_movie.php';
    include '../function/add-fnc/add_movie.php';
    include '../function/edit-fnc/edit_movie.php';
    include '../function/get-fnc/display_allmovie.php';

    include 'header.php';
?>


<body>

<?php
    include 'navigation.php';
?>

    <!-- Page Content -->
    <div class="container" >

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12" style="margin-top:0px;">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h1 class="page-header">List Of Movie</h1>
                    </div>
                    <div class="col-lg-3" style="margin-top:3.25em; padding:0em;">
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </div>
            </div>
        </div>
        <!-- /.row -->


<div class="table-responsive">
  <table class="table table-hover table-bordered table-condensed">
    <thead>
    <tr>
    <th>ID</th> 
    <th>TITLE</th> 
    <th>YEAR</th>
    <th>MONTH</th>
    <th>DAY</th>
    <th>DURATION</th>
    <th>EDIT</th>
    <th>DELETE</th>
    </tr>
  </thead>
  <tbody>

<?php foreach($movie_xml->movie as $movie) :?>
    <tr>
    <td><?php $movie_id = $movie->attributes(); echo $movie_id ?></td>
      <td><a href="movie_page.php?movie_id=<?php echo $movie_id ?>"><?php echo $movie->title; ?><a></td>
      <td><?php echo $movie->date->year; ?></td>
      <td><?php echo $movie->date->month; ?></td>
      <td><?php echo $movie->date->day; ?></td>
      <td><?php echo $movie->duration; ?></td>
       <td>
   <!-- Trigger the modal with a button -->
<center><button type="submit" id= "<?php echo $movie_id;?>" name="edit" value="<?php echo $movie_id;?>" class="btn btn-default" aria-label="Left Align" data-toggle="modal" data-target="#MyEditMovie<?php echo $movie_id;?>">
<span class="glyphicon glyphicon glyphicon-pencil" style="color:green;" aria-hidden="true"></span></button></center>
 <?php include 'modal/modal_edit_movie.php';?>
		</td>
		<td>
<center>  
  <!-- Trigger the modal with a button -->
<button type="submit" id= "<?php echo $movie_id;?>" name="delete" value="<?php echo $movie_id;?>" class="btn btn-default" aria-label="Left Align" data-toggle="modal" data-target="#MyDeleteMovie<?php echo $movie_id;?>">
  <span class="glyphicon glyphicon glyphicon-trash" style="color:red;" aria-hidden="true"></span></button>      
<?php include 'modal/modal_confirmation_delete_movie.php';?>
</center>
	</td>
    </tr>
<?php endforeach;  ?>
  </tbody>
      

  </table>
</div>

    </div>

<?php
    include 'footer.php';
?>

</body>

</html>
