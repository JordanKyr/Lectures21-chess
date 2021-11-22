This is a test html.

<?php

require_once "../lib/dbconnect.php";


echo "This line from php....";

$sql = "select * from game_status";
$st = $mysqli->prepare($sql);
$st->execute();
$res = $st->get_result();
$r = $res->fetch_assoc();
print "status: $r[status], last_change: $r[last_change]";

?>