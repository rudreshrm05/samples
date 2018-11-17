<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "qwerty";
$dbname = "tourism";
$aid="";
$apwd="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM admin";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $aid=$row["aid"];
		$apwd=$row["apwd"];
    }
	if($aid==$_POST['aid']&&$apwd==$_POST['apwd'])
	{
		echo "successful";
	}
	else{
		header('Location: C:/Users/Rudresh/Desktop/New folder (3)/New folder (4)/abR_loginhtml.html');
	}
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>