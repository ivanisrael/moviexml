<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

	if (isset($_POST['insert_genre'])) {

		require '../function/config.php';
		$movie_id = $_GET['movie_id'];
		require_once '../function/get-fnc/get_movie.php';
$genre_id = 0;
$movie = "";
 foreach($movie_xml->genres->genre as $genre) :
     $genre_id = $genre->attributes();
endforeach; 
 $genre_id = $genre_id + 1;



$insert = 'update theatre set movie_info = XMLQUERY(\'copy $MOVIE_INFO := $MOVIE_INFO modify do insert <genre id="'.$genre_id.'">'.$_POST['for-InputGenre'].'</genre> into $MOVIE_INFO/movies/movie[@id="'.$_GET['movie_id'].'"]/genres return $MOVIE_INFO\') where theatre_id =1;';

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