
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
        //include '../includes/connect.php';

        //$query = mysqli_query($connect, "SELECT user.username, wallet.wallet_id, wallet.fund_eth FROM user, wallet ");
        //        while($data = mysqli_fetch_array($query)){ jangan lupa tambah tanda tanya dan tanda lebih besar
          // <p> <?= $data['username']
          // <?= $data['wallet_id']

        //start coba
        if(session_start()){
          include '../includes/connect.php';
          $query = mysqli_query($connect, "SELECT user.username, wallet.wallet_id, wallet.fund_eth FROM user, wallet");// WHERE wallet.wallet_id = '{$_SESSION["wallet_id"]}' AND user.username = '{$_SESSION["username"]}' ");
          //while($_data = mysqli_fetch_array($query)){
        //end coba
    ?>
    
    <div class="container text-center mt-2">
      <p> <? echo $_SESSION['username']?> </p>

           <?echo $_SESSION['wallet_id']?> 
        
      
      <hr class="my-1">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <i class="fa-brands fa-ethereum display-4"></i>
            <h1 class="display-6"><?echo $_SESSION['fund_eth'] ?></h1>
            <?php }?>
            

            <h1><p>ETH</p></h1>
                <button class="btn btn-primary mb-2 mr-2 px-2 py-2 rounded w-auto" name="tambah_saldo" style="width: 66.74px"  onclick = "return confirm('Yakin igin menambah saldo ?');">
                <span><i class="fa-solid fa-plus"></i></span> 
                <span >&nbsp TAMBAH SALDO</span>
              </button>
          </div>
        </div>
    </div>





    <script src="https://kit.fontawesome.com/6357c29a35.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
 if(isset($_POST['tambah_saldo'])){
  $username= $_SESSION['username'];
  $wallet_id=$_SESSION['wallet_id'];
  $fund_eth = $_SESSION['fund_eth'];
  }

  $query2 = mysqli_query($connect,"UPDATE  wallet SET fund_eth = fund_eth + 1.005  ");//WHERE wallet_id = '{$_SESSION["wallet_id"]}'");
  if($query2){ echo "
	  <script type='text/javascript'>
    alert('saldo berhasil ditambah')
      <!--window.location='profil.php';-->
      </script>
        ";
  }else {echo "maaf tidak dapat menambah saldo";}

?>


