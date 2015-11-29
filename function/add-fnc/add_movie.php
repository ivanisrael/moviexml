<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

	if (isset($_POST['insert_movie'])) {

		require '../function/config.php';
		require_once '../function/get-fnc/get_lastidnumber.php';
$movie_id = 0;
$movie = "";
 foreach($movie_xml->movie as $movie) :
     $movie_id = $movie->attributes();
endforeach; 
 $movie_id = $movie_id + 1;

 if ($movie_id == 1){
 	$movie_id = 101;
 }

$date = $_POST['for-InputDate'];

list($year, $month, $day) = explode('-', $date); 


$dateObj   = DateTime::createFromFormat('!m', $month);
$monthName = $dateObj->format('F'); 

$insert = 'update theatre set movie_info = XMLQUERY(\'copy $MOVIE_INFO := $MOVIE_INFO modify do insert <movie id="'.$movie_id.'"><title>'.$_POST['for-InputTitle'].'</title><date><year>'.$year.'</year><month>'.$monthName.'</month><day>'.$day.'</day></date><genres></genres><synopsis>'.$_POST['for-InputSynopsis'].'</synopsis><duration>'.$_POST['for-InputDuration'].'</duration><actors></actors></movie> into $MOVIE_INFO/movies return $MOVIE_INFO\') where theatre_id =1';

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