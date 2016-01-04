<?php
if(!mysql_connect("negouseid.com.mysql","negouseid_com","negou08"))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("negouseid_com"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
?>

