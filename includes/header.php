<header class="header light-version">
        <div class="container-fluid">
            <div class="header__content">
                <div class="header__logo">
                    <a href="../index.php">
                        <img src="../assets/images/logo/logo-3.png" alt="logo">
                    </a>
                </div>

                <form method="get" action="../upload/search.php" class="header__search">
                    <input type="text" placeholder="Search items, collections, and creators" name="cari">
                    <button type="button" name="cari"><i class="icofont-search-2"></i></button>
                    <button type="button" class="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z" />
                        </svg></button>
                </form>
                <div class="header__menu ms-auto">
                    <ul class="header__nav mb-0">
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="../index.php">Home</a>
                        </li>
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-bs-offset="0,10">Explore</a>

                            <ul class="dropdown-menu header__nav-menu">
                                <li><a class="drop-down-item" href="../upload/nft-list.php">Explore NFT's</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="header__actions">
                    <div class="header__action header__action--search">
                        <button class="header__action-btn" type="button"><i class="icofont-search-1"></i></button>
                    </div>

                    <div class="header__action header__action--profile">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" data-bs-offset="-100,10">
                                  <span data-blast="bgColor"><i class="icofont-user"></i></span> <span
                                    class="d-none d-md-inline">
                                    <?php 
	                                if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
                            		    echo $_SESSION['name'];
	                                } else {
                                        echo "Tamu";
                                    }
                                    ?>
                                    </span>
                            </a>

                            <ul class="dropdown-menu">

                                <?php if(isset($_SESSION['logged']) && $_SESSION['logged'] == true) : ?>
                                  <li><a class="dropdown-item" href="../upload/author.php"><span class="me-1"><i
                                                class="icofont-options"></i></span>
                                        Profile</a></li>
                                <?php else : ?>
                                <li><a class="dropdown-item" href="../account/signup.php"><span class="me-1"><i
                                                class="icofont-space-shuttle"></i></span>
                                        Sign
                                        Up</a></li>
                                <li><a class="dropdown-item" href="../account/signin.php"><span class="me-1"><i
                                                class="icofont-login"></i></span> Sign
                                        In</a></li>
                                <?php endif ;?>

                                <?php if(isset($_SESSION['logged']) && $_SESSION['logged'] == true) : ?>
                                  <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li><a class="dropdown-item" href="../account/signout.php"> Sign
                                        Out <span class="ms-1"><i class="icofont-logout"></i></span></a></li>
                                <?php endif ;?>
                                
                               
                            </ul>
                        </div>
                    </div>
                    <div class="wallet-btn">
                        <a href="../Wallet/wallet.php"><span><i class="icofont-wallet" data-blast="color"></i></span> <span
                                class="d-none d-md-inline">
                                <?php 
	                                if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
                            		    $uid = $_SESSION['user_id'];
                                        $query = "SELECT fund_eth FROM wallet WHERE user_id = $uid";
                                        $isi = mysqli_query($connect, $query);
                                        $saldo = mysqli_fetch_assoc($isi);
                                        echo $saldo['fund_eth'];
	                                
                                    } else {
                                        echo "Unknown";
                                    }
                                ?></span> </a>
                    </div>
                </div>

                <button class="menu-trigger header__btn" id="menu05">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>