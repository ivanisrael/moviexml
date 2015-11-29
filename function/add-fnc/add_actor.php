<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

	if (isset($_POST['insert_actor'])) {

		require '../function/config.php';
		$movie_id = $_GET['movie_id'];
		require_once '../function/get-fnc/get_movie.php';
$actor_id = 0;
$movie = "";
  foreach($movie_xml->actors->actor as $actor) :
     $actor_id = $actor->attributes();
endforeach; 
 $actor_id = $actor_id + 1;



$insert = 'update theatre set movie_info = XMLQUERY(\'copy $MOVIE_INFO := $MOVIE_INFO modify do insert <actor id="'.$actor_id.'"><name><fname>'.$_POST['for-InputFname'].'</fname><lname>'.$_POST['for-InputLname'].'</lname></name><role>'.$_POST['for-InputRole'].'</role><gender>'.$_POST['sex'].'</gender></actor> into $MOVIE_INFO/movies/movie[@id="'.$_GET['movie_id'].'"]/actors return $MOVIE_INFO\') where theatre_id =1;';

$conn = db2_connect($database, $user, $dbpassword);


$stmt = db2_prepare($conn, $insert);
if ($stmt) {
    $result = db2_exec($conn, $insert);
	if ($result) {
		include_once 'msg-alert/msg_successfully_add_movie.php';
	}

}

db2_close($conn);

}
}

?>