<? php
	session_start();
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mobile";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * from 'mobile_table' where 'Name'= 'iPhone X'";
    $result = $conn->query($sql)->fetch_assoc();
    $_SESSION["Name"] = $result["Name"];
    $_SESSION["Price"] = $result["Price"];
    header("location: cart1.php");
?>

