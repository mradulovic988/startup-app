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
    $currentCity                = mysqli_real_escape_string($db->connection, $_POST['currentCity']);
    $homeTown                   = mysqli_real_escape_string($db->connection, $_POST['homeTown']);
    $relationshipStatus         = mysqli_real_escape_string($db->connection, print_r(implode('', $_POST['relationshipStatus']), true));
    $gender                     = mysqli_real_escape_string($db->connection, print_r(implode('', $_POST['gender']), true));
    $hobbies                    = mysqli_real_escape_string($db->connection, $_POST['hobbies']);
    $website                    = mysqli_real_escape_string($db->connection, $_POST['website']);
    $company                    = mysqli_real_escape_string($db->connection, $_POST['company']);
    $position                   = mysqli_real_escape_string($db->connection, $_POST['position']);
    $bio                        = mysqli_real_escape_string($db->connection, $_POST['bio']);

    $fileNameCmps               = explode(".", $fileName);
    $fileExtension              = strtolower(end($fileNameCmps));
    $newFileName                = md5(time() . $fileName) . '.' . $fileExtension;
    $allowedfileExtensions      = array('jpg', 'png', 'jpeg');

    if (in_array($fileExtension, $allowedfileExtensions)) {
        $uploadFileDir = 'C:/xampp/htdocs/App/backend/src/templates/template-parts/setting-page/uploaded_image/';
        $dest_path = $uploadFileDir . $newFileName;

        if(move_uploaded_file($fileTmpPath, $dest_path)) {
            // Add code here if every condition is good
            $session_username = $_SESSION['username'];

            $additionalProfileUpdate = $db->query('UPDATE users SET work = ?, education = ?, phone_number = ?, state = ?, current_city = ?, home_town = ?, relationship_status = ?, gender = ?, hobbies = ?, website = ?, company = ?, position = ?, bio = ? WHERE username = ?', $work, $education, $phoneNumber, $state, $currentCity, $homeTown, $relationshipStatus, $gender, $hobbies, $website, $company, $position, $bio, $session_username);

            $username = $_SESSION['username'];
            $additionalProfileSelect = $db->query('SELECT work, education, phone_number, state, current_city, home_town, relationship_status, gender, hobbies, website, company, position, bio FROM users WHERE username = ?', $username)->fetchAll();

            foreach ($additionalProfileSelect as $select) {
                $db_work                    = $select['work'];
                $db_education               = $select['education'];
                $db_phone_number            = $select['phone_number'];
                $db_state                   = $select['state'];
                $db_current_city            = $select['current_city'];
                $db_home_town               = $select['home_town'];
                $db_relationship_status     = $select['relationship_status'];
                $db_gender                  = $select['gender'];
                $db_hobbies                 = $select['hobbies'];
                $db_website                 = $select['website'];
                $db_company                 = $select['company'];
                $db_position                = $select['position'];
                $db_bio                     = $select['bio'];
            }

            $_SESSION['work']                   = $db_work;
            $_SESSION['education']              = $db_education;
            $_SESSION['phone_number']           = $db_phone_number;
            $_SESSION['state']                  = $db_state;
            $_SESSION['current_city']           = $db_current_city;
            $_SESSION['home_town']              = $db_home_town;
            $_SESSION['relationship_status']    = $db_relationship_status;
            $_SESSION['gender']                 = $db_gender;
            $_SESSION['hobbies']                = $db_hobbies;
            $_SESSION['website']                = $db_website;
            $_SESSION['company']                = $db_company;
            $_SESSION['position']               = $db_position;
            $_SESSION['bio']                    = $db_bio;

        }
    }
}

include 'additional-profile-information-form.php';
