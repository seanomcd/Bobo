
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

//selecting which database to use here
mysql_select_db("dbtest") or die("no database by that name".msql_error());

//now here change the name  of the table you are selecting information from. But copy and past this and create another php file if your are going to use another table.
$result = mysql_query("SELECT * FROM users ") or die('Errant query:');
       

$rows = mysql_num_rows($result);

$return_arr = Array();
    while($row2 = mysql_fetch_assoc($result)){
       
				 
				 $return_arr[] = $row2;
}

echo json_encode($return_arr);


?>




