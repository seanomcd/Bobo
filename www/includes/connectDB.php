
<?php 
#if(!mysql_connect("mysql2.gear.host","safetaxi","Safetaxi1!"))
if(!mysql_connect("localhost","root","pass"))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("dbtest"))
{
	die('oops database selection problem ! --> '.mysql_error());
}
?>



