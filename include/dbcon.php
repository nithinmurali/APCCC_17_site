<?
$servername = "localhost";
$username = "apcccueu_user1";
$password = "c,pMMod)0nEU";
$dbname = "apcccueu_apccc17_main";


/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apccc17";
*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	
	$data = array('err' => 1, 'errdata' => "Connection failed: " . $conn->connect_error);
	echo json_encode($data);
    die();
} 
?>