<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if (isset($_POST['edit_movie'])) {

		require '../function/config.php';


$date = $_POST['for-InputDate'];

list($year, $month, $day) = explode('-', $date); 


$dateObj   = DateTime::createFromFormat('!m', $month);
$monthName = $dateObj->format('F'); 

$edit = "";
$edit = 'update theatre set movie_info = XMLQUERY(\'transform copy $MOVIE_INFO := $MOVIE_INFO modify (do replace $MOVIE_INFO/movies/movie[@id="'.$_POST['edit_movie'].'"]/title with <title>'.$_POST['for-InputTitle'].'</title>, do replace $MOVIE_INFO/movies/movie[@id="'.$_POST['edit_movie'].'"]/duration with <duration>'.$_POST['for-InputDuration'].'</duration>, do replace $MOVIE_INFO/movies/movie[@id="'.$_POST['edit_movie'].'"]/date with <date><year>'.$year.'</year><month>'.$monthName.'</month><day>'.$day.'</day></date>, do replace $MOVIE_INFO/movies/movie[@id="'.$_POST['edit_movie'].'"]/synopsis with <synopsis>'.$_POST['for-InputSynopsis'].'</synopsis>) return $MOVIE_INFO\') where theatre_id =1';

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