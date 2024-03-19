<?php
  session_start();
  include_once "./config.php";
  $outgoing_id = $_SESSION['unique_id'];
  $searchterm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
  $output = "";
  $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND 
  (first_name LIKE '%{$searchterm}%' OR last_name LIKE '%{$searchterm}%')");
  if(mysqli_num_rows($sql) > 0)
  {
    include "./data.php";
  }else{
    $output .= "Aucun utilisateur trouvé";
  }
  echo $output;
?>