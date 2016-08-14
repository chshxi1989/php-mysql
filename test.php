<?php
//phpinfo();
$username = $_POST['username'];
$password = $_POST['password'];
$score = $_POST['score'];
echo "username: ".$username."</br>";
echo "password: ".$password."</br>";
echo "score: ".$score."</br>";
$con = mysql_connect("localhost", "root", "Chshxi611012");
if (!$con)
{
	die("failed to connect database".mysql_error());
}
// select database
mysql_select_db("score", $con);
$sql_command = "insert into myscore (name, password, score) values('$username', '$password', '$score')";
if (!mysql_query($sql_command, $con))
{
	die('Error: '.mysql_error());
}
mysql_close($con)
?>