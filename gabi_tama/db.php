<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'esperanza_sa',
  'laputajoshua',
  'esperanza_principal'
) or die(mysqli_erro($mysqli));

?>
