<?php
if( empty(session_id()) && !headers_sent()){
    session_start();
}
session_destroy();
header("location:login.php");
?>