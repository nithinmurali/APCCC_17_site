<?php // You need to add server side validation and better error handling here

//print_r($_FILES);

//check in db for same user

//echo "in upload";

//print_r($_GET);

$target_dir = "papers/";
$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];
$title = $_GET['paper'];
$target_file = $target_dir . $_GET['first_name']."-".$_GET['last_name']."-".$_GET['paper'].".". pathinfo( $target_dir. basename($_FILES["paper"]["name"]), PATHINFO_EXTENSION );
$uploadOk = 1;
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
$errmsg = "none";

$sql = "SELECT * FROM user_data where first_name = '$first_name' and last_name = '$last_name' and title = '$title' ";
$result = $conn->query($sql);            

if ( ! ($result->num_rows > 0) ) { 
    
    $uploadOk = 0;
    $err = "record missmatch"; 
}

else

{

    $i = 1;
    // Check if file already exists
    while(1)
    {
        if (file_exists($target_file)) {
            $err = "file already exists.";
            $uploadOk = 0;
            $i++;
            if ($_GET['new'] == 1) {
                $err = "new file saved";
                $target_file = $target_dir . $_GET['first_name']."-".$_GET['last_name']."-".$_GET['paper'].$i.".". pathinfo( $target_dir. basename($_FILES["paper"]["name"]), PATHINFO_EXTENSION );
            }
        }else{
            
            $uploadOk = 1;
            break;
        }
    }
    //echo $target_file;
    // Check file size
    if ($_FILES["paper"]["size"] > 500000) {
        $err = "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($fileType != "pdf" || $fileType != "docx"|| $fileType != "doc" || $fileType != "odt" || $fileType != "rtf" || $fileType != "txt") {
        $err = "Sorry, only PDF files are allowed. " . $target_file ;
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 1){

        if (move_uploaded_file($_FILES["paper"]["tmp_name"], $target_file)) {
            $err = $err."upload sucess";
        }
        else
        {
        	$uploadOk = 0;
            $err = "Sorry, there was an error uploading your file.";
        }

    }
}


$data = array('err' => $uploadOk, 'errdata' => $err);
echo json_encode($data);

?>