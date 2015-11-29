<!DOCTYPE html>

<html lang="en">
<?php
    include '../function/add-fnc/add_movie.php';
    include '../function/add-fnc/add_genre.php';
    include '../function/add-fnc/add_actor.php';
    include '../function/edit-fnc/edit_genre.php';
    include '../function/edit-fnc/edit_actor.php';
    include '../function/delete-fnc/delete_actor.php';
    include '../function/delete-fnc/delete_genre.php';
    include '../function/edit-fnc/edit_movie.php';

    include 'header.php';

?>

<link rel="stylesheet" href="assets/assets_movie_page/list_of_actor_genre.css">
<body>

<?php
    include 'navigation.php';

    $movie_id="";
    if(isset($_GET['movie_id'])){
      $movie_id = $_GET['movie_id']; //some_value
        include '../function/get-fnc/get_movie.php';
}
?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">


                <h1><?php echo $movie_xml->title; ?>
                  <!-- Blog Post -->
<div class="btn-group" role="group" aria-label="...">
 

                <!-- Title -->
 <button type="submit" id= "<?php echo $movie_id;?>" name="edit" value="<?php echo $movie_id;?>" class="btn" style="background-color:transparent;" aria-label="Left Align" data-toggle="modal" data-target="#MyEditMovie<?php echo $movie_id;?>">
<span class="glyphicon glyphicon glyphicon-pencil" style="color:green;" aria-hidden="true"></span></button>
                <button type="submit" id= "<?php echo $movie_id;?>" name="delete" value="<?php echo $movie_id;?>" class="btn" style="background-color:transparent;" aria-label="Left Align" data-toggle="modal" data-target="#MyDeleteMovie<?php echo $movie_id;?>">
  <span class="glyphicon glyphicon glyphicon-trash" style="color:red;" aria-hidden="true"></span></button>      
</div>
</h1>
                <hr>

                <!-- Date/Time -->
                <p class="lead"><span class="glyphicon glyphicon-time"></span> <?php echo $date = $movie_xml->date->month." ".$movie_xml->date->day.", ".$movie_xml->date->year; ?>
                <br> Duration: <?php echo $movie_xml->duration; ?></p>

                <!-- Post Content -->
                <p class="lead"><strong>SYNOPSIS</strong></p>
                <p><?php echo $movie_xml->synopsis; ?></p>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4><strong>GENGRE</strong>
<button type="submit" id= "<?php echo $movie_id;?>" name="add" value="<?php echo $movie_id;?>" class="btn" style="background-color:transparent;" aria-label="Left Align" data-toggle="modal" data-target="#AddGenre">
 <span class="glyphicon glyphicon glyphicon-plus" style="color:green;" aria-hidden="true"></span> Add </button>
                    </h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                            <?php foreach($movie_xml->genres->genre as $genre) :?>
                                <li class="alistoflink">
                                <a href="#MyeditGenre<?php echo $genre->attributes();?>" data-toggle="modal" data-target="#MyeditGenre<?php echo $genre->attributes();?>">
                                <?php echo $genre; ?></a> 
                                <?php include 'modal/modal_edit_genre.php';?>

                                <a href="#MydeleteGenre<?php echo $genre->attributes();?>" class='deletealist' data-toggle="modal" data-target="#MydeleteGenre<?php echo $genre->attributes();?>"> 
                                <span class="glyphicon glyphicon-remove" style="color:red;" aria-hidden="true"></span></a>
                                <center>
                                <?php include 'modal/modal_confirmation_delete_genre.php';?>
                                </center>
                                </li>
                            <?php endforeach;  ?>
                            </ul>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4><strong>ACTORS</strong>
<button type="submit" id= "<?php echo $movie_id;?>" name="add" value="<?php echo $movie_id;?>" class="btn" style="background-color:transparent;" aria-label="Left Align" data-toggle="modal" data-target="#AddActor">
 <span class="glyphicon glyphicon glyphicon-plus" style="color:green;" aria-hidden="true"></span> Add </button>
                    </h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                            <?php foreach($movie_xml->actors->actor as $actor) :?>
                                <li class="alistoflink">
                                <a href="#MyeditActor<?php echo $actor->attributes();?>" data-toggle="modal" data-target="#MyeditActor<?php echo $actor->attributes();?>"><?php echo $actor->name->fname; ?> <?php echo $actor->name->lname;?> </a> 
                                <?php include 'modal/modal_edit_actor.php';?>

                                <a href="#MydeleteActor<?php echo $actor->attributes();?>" class='deletealist'  data-toggle="modal" data-target="#MydeleteActor<?php echo $actor->attributes();?>">  
                                <span class="glyphicon glyphicon-remove" style="color:red;" aria-hidden="true"></span></a>
                                <center>
                                <?php include 'modal/modal_confirmation_delete_actor.php';?>
                                </center>
                                </li>
                            <?php endforeach;  ?>
                            </ul>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>



            </div>

        </div>
        <!-- /.row -->

        <hr>
</div>

<?php
echo "<center>";
    include 'modal/modal_confirmation_delete_movie.php';
    echo "</center>";
    include 'modal/modal_add_genre.php';
    include 'modal/modal_add_actor.php';
    include 'modal/modal_edit_specific_movie.php';
    include 'footer.php';
?>

</body>

</html>
