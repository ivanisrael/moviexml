<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

	if (isset($_POST['edit_genre'])) {

		require '../function/config.php';
$edit = 'update theatre set movie_info = XMLQUERY(\'transform copy $MOVIE_INFO := $MOVIE_INFO modify do replace $MOVIE_INFO/movies/movie[@id="'.$_GET['movie_id'].'"]/genres/genre[@id="'.$_POST['edit_genre'].'"] with <genre id="'.$_POST['edit_genre'].'">'.$_POST['for-InputGenre'].'</genre> return $MOVIE_INFO\') where theatre_id =1;';


$conn = db2_connect($database, $user, $dbpassword);


$stmt = db2_prepare($conn, $edit);
if ($stmt) {
    $result = db2_exec($conn, $edit);
	if ($result) {
		include_once 'msg-alert/msg_successfully_updated_movie.php';
	}

}

db2_close($conn);

}
}

?>