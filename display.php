<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Display Data</title>
  </head>
  <body>
    
  <div class="container" id="displaycolor">
    <div class="col-lg-12">
      <br><br>
      <h1 class="text-dark text-center"> Display Table Data </h1>
      <br>
      <table id="myTable" class="table table-striped table-hover table-bordered">

        <tr class="bg-dark text-white text-center">

          <th>Card Holder Name</th>
          <th>ATM Number</th>

        </tr>

        <?php

        include 'dbconnect.php'; 
        $q = "SELECT * FROM `atm_card_informations` WHERE Card_Type= 'VISA' ";

        $query = mysqli_query($conn, $q);

        while($res = mysqli_fetch_array($query)){
        ?>
                <tr class="text-center">
                <td>
                    <?php echo $res['Card_Holder_Name'];  ?>
                </td>
                <td>
                    <?php echo $res['Atm_Number'];  ?>
                </td>

                </tr>

                <?php 
        }
        ?>

      </table>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>