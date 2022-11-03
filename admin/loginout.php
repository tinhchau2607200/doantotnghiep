<?php
session_start();
if(session_destroy()) // Phá hoại 
{
header("Location: index.php"); 
}
?>