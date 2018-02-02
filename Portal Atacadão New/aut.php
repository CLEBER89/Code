<?php
session_start("session");
if(!(session_is_registered("sslogin") and session_is_registered("ssid")))
{
 header("Location:../index.php");
}
?>
