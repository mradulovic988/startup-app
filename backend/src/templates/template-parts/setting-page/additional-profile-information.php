<?php
if (isset ($_POST['additionalSubmit'])) {

    // Declaring all variables
    $fileTmpPath                = $_FILES['imageUpload']['tmp_name'];
    $fileName                   = $_FILES['imageUpload']['name'];
    $fileSize                   = $_FILES['imageUpload']['size'];
    $fileType                   = $_FILES['imageUpload']['type'];

    $work                       = mysqli_real_escape_string($db->connection, $_POST['work']);
    $education                  = mysqli_real_escape_string($db->connection, $_POST['education']);
    $phoneNumber                = mysqli_real_escape_string($db->connection, $_POST['phoneNumber']);
    $state                      = mysqli_real_escape_string($db->connection, $_POST['state']);
    $homeTown                   = mysqli_real_escape_string($db->connection, $_POST['homeTown']);
    $gender                     = mysqli_real_escape_string($db->connection, print_r(implode('', $_POST['gender']), true));
    $hobbies                    = mysqli_real_escape_string($db->connection, print_r(implode('', $_POST['hobbies']), true));
    $website                    = mysqli_real_escape_string($db->connection, $_POST['website']);
    $company                    = mysqli_real_escape_string($db->connection, $_POST['company']);
    $position                   = mysqli_real_escape_string($db->connection, $_POST['position']);
    $bio                        = mysqli_real_escape_string($db->connection, $_POST['bio']);

    $fileNameCmps               = explode(".", $fileName);
    $fileExtension              = strtolower(end($fileNameCmps));
    $newFileName                = md5(time() . $fileName) . '.' . $fileExtension;
    $allowedfileExtensions      = array('jpg', 'png', 'jpeg');

    // Validation
    if (empty($work)) { array_push($errors, "Work field is required"); }
    if (empty($education)) { array_push($errors, "Education field is required"); }
    if (empty($state)) { array_push($errors, "State field is required"); }
    if (empty($homeTown)) { array_push($errors, "Home Town field is required"); }
    if (empty($gender)) { array_push($errors, "Gender field is required"); }
    if (empty($hobbies)) { array_push($errors, "Hobbies field is required"); }
    if (empty($bio)) { array_push($errors, "Biography field is required"); }

    if (in_array($fileExtension, $allowedfileExtensions)) {
        $uploadFileDir = 'C:/xampp/htdocs/App/backend/src/templates/template-parts/setting-page/uploaded_image/';
        $dest_path = $uploadFileDir . $newFileName;


        if(move_uploaded_file($fileTmpPath, $dest_path)) {
            // add code
        }
    }
}