<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/

session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: cekberhasilornot.php?pesan=logout"); // Redirecting To Home Page
}
?>