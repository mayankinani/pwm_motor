
<html>
<head>
<title>
TESTING AZURE
</title>
</head>

<body>
<h1>qasdfghjkl</h1>
<br><br>


<?php
	echo 'start';
$connectionInfo = array("UID" => "vwserver@vwserver", "pwd" => "PKazure28", "Database" => "store", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:vwserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
$result = mysqli_query($conn, "select * from table1 where 1");
	echo '2';
	
echo $conn;
while ($row = mysqli_fetch_array($result)){
	echo '1';
	echo $row['col1'];
  echo $row['col2'];
}
?>
	<h1>TESTNG TESTING 123</h1>
</body>
  
  
</html>
