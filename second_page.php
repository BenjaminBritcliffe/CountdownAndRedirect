<?php
 session_start();
  $x = $_SESSION['sessionVar'];
  echo "$x";
  
  header('Location: Item.php?id=' . $_SESSION['sessionVar']);
?>