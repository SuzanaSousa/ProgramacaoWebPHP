<?php 
  define('DB_HOST','localhost');
  define('DB_USER','devtechsolucoes');
  define('DB_PASSWORD','Fatec@123');
  define('DB_NAME','devtechsolucoes');
  $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

  if(!$conn){
      die("Failed to conect to MylSql".mysqli_connect_error());
  }
