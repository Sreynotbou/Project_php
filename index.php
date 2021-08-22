<?php
include_once('partial/header.php'); 
include_once('partial/navbar.php');
//get each page
if (isset($_GET['page'])){

    if($_GET['page']=='book'){
        include_once('pages/book.php');
    }elseif ($_GET['page']=='program'){
        include_once('pages/program.php');
    }else{
        include_once('pages/firstpage.php');
    }

}else{
    include_once('pages/program.php');
}
include_once('partial/footer.php'); 