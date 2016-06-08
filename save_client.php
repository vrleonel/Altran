<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-save'])) {
  $client_name  = $_POST['client_name'];
  $client_email = $_POST['client_email'];
  $client_phone = $_POST['client_phone'];

  $sql_query = "INSERT INTO client(name,email,phone) VALUES('$client_name','$client_email','$client_phone')";
  $feedback = mysql_query($sql_query);
  //echo $sql_query;

  echo(mysql_error());

  header('Location: index.php');


}
?>
