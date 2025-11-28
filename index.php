<!DOCTYPE html>
<html lang="en">
 <?php include('component/header.php'); ?>
   <?php 
        include "component/header.php";
   ?>

<body>
    
<?php 
            include "component/navbar.php";


            // konten
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';

            if($page == 'home') include "page/home.php";
            else if($page == 'shopall') include "page/shop all.php";

           
            include "component/footer.php";
        ?>
        
</body>
</html>