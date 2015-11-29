<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
if (isset($_POST['confirm-delete-movie'])) {

require_once '../function/config.php';
$conn = db2_connect($database, $user, $dbpassword);

$delete = 'update theatre set movie_info = XMLQUERY(\'copy $MOVIE_INFO := $MOVIE_INFO modify do delete $MOVIE_INFO/movies/movie[@id="'.$_POST['confirm-delete-movie'].'"] return $MOVIE_INFO\') where theatre_id =1;';



$stmt = db2_prepare($conn, $delete);
if ($stmt) {
    $result = db2_exec($conn, $delete);
if ($result) {
 include_once 'msg-alert/msg_successfully_delete_movie.php';
}
}

db2_close($conn);
}
}
?>