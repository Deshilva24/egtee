<?php
include "component/navbar.php";
include "component/header.php";

// routing
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if($page == 'home') {
    include "page/home.php";
} 
else if($page == 'shop all') {
    include "page/shop all.php";
}
else if($page == 'detail') {
    include "page/detail.php";
}
else if($page == 'login') {
    include "page/login.php";
}
else {
    echo "<h2>Halaman tidak ditemukan</h2>";
}

include "component/footer.php";
?>