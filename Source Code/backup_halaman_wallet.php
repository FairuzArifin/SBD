<?php 
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>wallet</title>
  </head>
  <body>
    <!-- Image and text -->
    <div class="container">
        <nav class="navbar navbar-light bg-light">
          <a class="navbar-brand" href="#">
            <i class="fa-solid fa-wallet"></i>
            wallet
          </a>
        </nav>
    </div>
    <?php
          include '../includes/connect.php';

        $query = mysqli_query($connect, "SELECT * FROM wallet");

        while($data = mysqli_fetch_array($query)){ ?>
    
    <div class="container text-center mt-2">
      <p>Accoutnt1</p>

           <?= $data['wallet_id']?> 
        
      
      <hr class="my-1">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <i class="fa-brands fa-ethereum display-4"></i>
            <h1 class="display-6"><?= $data['fund_eth'] ?></h1>
            <?php } ?>

            <h1><p>ETH</p></h1>
            <button type="button" class="btn btn-outline-primary" href="#">tambah saldo</button>
          </div>
        </div>
    </div>





    <script src="https://kit.fontawesome.com/6357c29a35.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>