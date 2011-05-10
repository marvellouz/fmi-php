<?php
$conn = pg_connect("host=localhost user=vdinkova dbname=mydb") or die ("Can't connect!!!: " . pg_last_error());
echo pg_dbname();
?>
