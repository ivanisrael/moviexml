<?php

require '../function/config.php';

$conn = db2_connect($database, $user, $dbpassword);

if ($conn) {

$getlastid = 'xquery for $d in db2-fn:xmlcolumn(\'THEATRE.MOVIE_INFO\')/movies let $emp := $d order by $d/@id return $emp';
$stmt = db2_prepare($conn, $getlastid);
db2_execute($stmt, array(10));
while (db2_fetch_row($stmt)) {
   $movie_info = db2_result($stmt, 0);
}


$movie_xml=simplexml_load_string($movie_info) or include_once 'msg-alert/msg_table_empty.php';

db2_close($conn);

     
}
else {
$error =  "Connection failed.";
		echo '<script type="text/javascript">alert("' . $error . '");</script>';
}


?>