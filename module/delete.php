<?php

include "connection.php";

if(isset($_POST["delete"])){

    $delete = $_POST['del_id'];

    $QueryDel = "DELETE FROM `student` WHERE id = $delete";
    $Delquery = mysqli_query($connection, $QueryDel);

  }

  echo '<script>alert("Deleted Successfully!")</script>';
  echo '<script>window.location.href="view_table.php"</script>';

?>