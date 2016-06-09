<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-save'])) {
  $product_name  = $_POST['product_name'];
  $product_description = $_POST['product_description'];
  $product_price = $_POST['product_price'];
  $product_quantidy = $_POST['product_quantidy'];

  $sql_query = "INSERT INTO product(name,description,price, quantidy)
                VALUES('$product_name','$product_description','$product_price', '$product_quantidy')";
  $feedback = mysql_query($sql_query);
  //echo $sql_query;

  echo(mysql_error());

  header('Location: index.php');


}
?>
