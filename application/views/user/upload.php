<?php
// $target_dir = "/uploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $target_path = "/uploads/";

//         $target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

//         if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
//             echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
//             " has been uploaded";
//         } else{
//             echo "There was an error uploading the file, please try again!";
//         }
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }
$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['fileToUpload']['name']); 

if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['fileToUpload']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}
?>