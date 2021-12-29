<?php
    include 'dbconnect.php';

    if(isset($_POST['submit']))
    {
        $Card_Holder_Name = $_POST["Card_Holder_Name"];
        $Atm_Number = $_POST["Atm_Number"];
        $Card_Type = $_POST["Card_Type"];
        $Bank_Name = $_POST["Bank_Name"];
        
        $sql = "INSERT INTO `atm_card_informations` (`Card_Holder_Name`, `Atm_Number`, `Card_Type`, `Bank_Name`) VALUES ('$Card_Holder_Name', $Atm_Number, '$Card_Type', '$Bank_Name')";

        $result = mysqli_query($conn, $sql);

        if($result)
        {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Card Informations has been inserted successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            header('location: index.php');
        }
    }
?>