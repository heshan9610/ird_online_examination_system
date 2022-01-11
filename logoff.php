<?php
if(isset($_POST["logoff"]))
{
session_destroy();
header("Location:login.php");
}

?>