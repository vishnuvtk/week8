<?php
if (isset($_POST['deleteSchool'])) {
    $schoolID = $_POST['schoolID'];

    require('../reusables/connect.php');

    // Query to delete the school
    $query = "DELETE FROM `public_school_contact_list_may2024_en` WHERE `id` = '" . mysqli_real_escape_string($connect, $schoolID) . "'";
    
    $result = mysqli_query($connect, $query);

    if ($result) {
        header("Location: ../index.php");
    } else {
        echo "There was an error deleting the school: " . mysqli_error($connect);
    }
}
?>
