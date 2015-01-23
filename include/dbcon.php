<?
/*$servername = "apccc17.org";
$username = "apcccueu_user1";
$password = "c,pMMod)0nEU";
$dbname = "apcccueu_apccc17_main";
*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apccc17";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>