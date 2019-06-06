<?php
$servername = "localhost";
	$username = "root";
	$password = '';
	$dbname = "csv";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}


//define('DB_SERVER', 'localhost');
//define('DB_USERNAME', 'root');
//define('DB_PASSWORD', '');
//define('DB_DATABASE', 'csv');
 
// creating the database connection
//$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
//$db = mysqli_select_db(DB_DATABASE) or die(mysqli_error());
 
// lets find out how many rows are in the MySQL table
$sql = "SELECT COUNT(*) FROM mybase";
$result = mysqli_query($conn,$sql) or die(mysqli_error());
$r = mysqli_fetch_row($result);
$numrows = $r[0];
 
// number of rows to show per page
$rowsperpage = 10;
 
// find out total pages
$totalpages = ceil($numrows / $rowsperpage);
 
// get the current page or set a default
if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
$currentpage = (int) $_GET['currentpage'];
} else {
$currentpage = 1;  // default page number
}
 
// if current page is greater than total pages
if ($currentpage > $totalpages) {
// set current page to last page
$currentpage = $totalpages;
}
// if current page is less than first page
if ($currentpage < 1) {
// set current page to first page
$currentpage = 1;
}
 
// the offset of the list, based on current page
$offset = ($currentpage - 1) * $rowsperpage;
 
// get the info from the MySQL database
$sql = "SELECT Id, Base FROM mybase ORDER BY Id DESC LIMIT $offset, $rowsperpage";
$result = mysqli_query($conn,$sql) or die(mysql_error());
 
while ($row = mysqli_fetch_assoc($result)){
$output[]=$row;
}
print(json_encode($output));
 
 
?>