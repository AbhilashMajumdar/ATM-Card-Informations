<?php
    include 'dbconnect.php';

    if(isset($_POST['delete']))
    {
        $sql = "DELETE FROM `atm_card_informations` WHERE `atm_card_informations`.`Bank_Name` ='Indian Bank' ";
        $result = mysqli_query($conn, $sql);

        if($result)
        {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Bank name has been deleted successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
        header('location: index.php');
    }
?>