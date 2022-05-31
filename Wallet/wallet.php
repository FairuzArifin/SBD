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
  <body background = "../assets/images/banner/bg-4.png">
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
        //start coba
          include '../includes/connect.php';
          include '../includes/function.php';


          if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
            $box = wallet($_SESSION['user_id']);
            
            foreach ($box AS $wallet)        
        //end coba
    ?>
    
    <div class="container text-center mt-2">
      <h2><?php echo $wallet['wallet_id'];?></h2>
      <!-- <?php echo $_SESSION['user_id']?>
      <?php echo $_SESSION['wallet_id']?> -->
     <h1> <?php echo $wallet['username'];?> </h1>
      
      <hr class="my-1">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <i class="fa-brands fa-ethereum display-4"></i>
               <h1><?php echo $wallet['fund_eth'];?></h1> 
          <?php }?>
            <h1><p>ETH</p></h1>
                <form action="tambah_saldo.php">
                <button class="btn btn-primary mb-2 mr-2 px-2 py-2 rounded w-auto" name="tambah_saldo" style="width: 66.74px"  onclick = "return confirm('Yakin igin menambah saldo ?');">
                </form>   
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






