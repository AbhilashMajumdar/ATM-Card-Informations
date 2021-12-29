<?php
    include 'dbconnect.php';

    if(isset($_POST['delete']))
    {
        $sql = "SELECT * FROM `atm_card_informations` WHERE Card_Type= 'VISA' ";
        $result = mysqli_query($conn, $sql);
        // header('location: index.php');
    }
?>