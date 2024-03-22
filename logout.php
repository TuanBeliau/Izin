<?php
  session_start(); //untuk memulai
  $_SESSION = null; //MENGHAPUS Data
  session_destroy();//untuk meng header('Location: login.php');
  header('Location: login.php');
?>
