<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

	if (isset($_POST['search_button'])) {
$search_key = $_SESSION['search_key'] = $_POST['search_key'];
require '../function/config.php';

$conn = db2_connect($database, $user, $dbpassword);

if ($conn) {
$search_key = $_POST['search_key'];
$sql = 'xquery for $d in db2-fn:xmlcolumn(\'THEATRE.MOVIE_INFO\')/movies/movie let $emp := $d where $d[matches(lower-case(title), lower-case(\''.$_POST['search_key'].'\'))] or $d[matches(lower-case(genres), lower-case(\''.$_POST['search_key'].'\'))] order by $d/@id return $emp';


$stmt = db2_prepare($conn, $sql);
db2_execute($stmt, array(10));
while (db2_fetch_row($stmt)) {
   $movie_info = $movie_info.db2_result($stmt, 0);
   $movie_info = str_replace("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>", "", $movie_info);
}

$movie_info ="<?xml version=\"1.0\" encoding=\"UTF-8\" ?><movies>".$movie_info."</movies>";

$movie_xml = new SimpleXMLElement($movie_info);

$value = $movie_xml -> count();
if ($value == 0){
	include_once 'msg-alert/msg_search_not_found.php';
}

db2_close($conn);

     
}
else {
$error =  "Connection failed.";
		echo '<script type="text/javascript">alert("' . $error . '");</script>';
}

}
}

?>