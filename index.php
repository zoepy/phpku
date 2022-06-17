<?php 
if( empty(session_id()) && !headers_sent()){
    session_start();
}
if(isset($_SESSION['username']) and isset($_SESSION['password'])){
    include "template/header.php"; 
    include "template/sidebar.php"; 
    include "template/profile.php";/*kontent disini */ 
    include "template/footer.php";
}else{
    header("location:login.php");
}
?>
