<?php
$host = "localhost";
$username = "352194_root";
$password = "412119";
$dbname = "election_clanteam_votedb";
$dbc = mysql_connect("$host","$username","$password");
if (!$dbc){
die('not connected:' . mysql_error());
}
$db_selected = mysql_select_db("$dbname",$dbc);
if(!$db_selected){
die("cant connect:" . mysql_error());
}
?>