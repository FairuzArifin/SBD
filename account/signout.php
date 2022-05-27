<<<<<<< Updated upstream:account/signout.php
<?php
session_start();
if(session_destroy()){
    header("Location: ../index.php");
}
=======
<?php
session_start();
if(session_destroy()){
    header("Location: signin.php");
}
>>>>>>> Stashed changes:Source Code/account/signout.php
?>