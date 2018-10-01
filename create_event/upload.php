<?php
set_time_limit(0);
ini_set('upload_max_filesize', '500M');
ini_set('post_max_size', '500M');
ini_set('max_input_time', 4000); // Play with the values
ini_set('max_execution_time', 4000);
ini_set('display_errors', 1);
error_reporting(E_ALL);
include("connection.php");
$name=$_POST['name'];

$loc=$_POST['location'];
$des=$_POST['description'];
$date=$_POST['date'];
$time=$_POST['time'];
$title=$_POST['title'];


$target_dir = "/opt/lampp/htdocs/approach/uploads/";


$target_file = $target_dir. basename($_FILES["file"]["name"]);
echo $target_file;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["file"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {

echo $_FILES["file"]["name"].'<br/>';


    if (move_uploaded_file($_FILES["file"]["name"], $target_file) ) {

		$q="INSERT INTO event_upload (name,location,date,description,img_path,time,title) VALUES ('$name','$loc','$date','$des','". basename( $_FILES['file']['name'])."','$time','$title');";
		$retval = $connect->query($q);            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }else{
header("Location:../create_event/");
			}
		
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

}
?>