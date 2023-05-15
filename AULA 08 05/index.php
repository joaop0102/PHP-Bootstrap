<?php 
 define( 'MYSQL_HOST', 'localhost:3306' );
 define( 'MYSQL_USER', 'root' );
 define( 'MYSQL_PASSWORD', '' );
 define( 'MYSQL_DB_NAME', 'clientes' );
 
 try{
     $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
 }
 catch(PDOException $e)
 { 
 echo 'Erro ao conectar com o MySQL: '. $e->getMessage();
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </head>

    <title>PHP - Sistema de Acesso ao Banco de Dados</title>
</head>
<body style="background-image: radial-gradient(circle at -19.64% 62.28%, #ade5ff 0, #7dcefb 25%, #3cb5f2 50%, #009ce9 75%, #0085e0 100%);">
    <?php 
    $sql = "SELECT * FROM clientes";
    $result = $PDO->query($sql);
    $rows = $result->fetchAll();

    echo "<div class='container'>";
    echo "<div class='col'>";
    echo "<div class='row'>";
     echo "<table class='table'>";
  for($i=0; $i < count($rows); $i++){?>
  <?php 
  echo "<div style='font-size: 50px; text-align: center;'>";
  echo "<img src='img2.png' />";
  echo "</div>";
  echo "<table class='table'>";
  ?>
  <?php
  echo "<thead>";
  ?>
  <?php
    echo "<tr>";
    ?>
    <?php
    echo "<th scope='col'>Id: </th>";
    ?>
    <?php
    echo "<th scope='col'>Nome: </th>";
    ?>
    <?php  
    echo "<th scope='col'>Endereço: </th>";
    ?>
    <?php  
    echo "<th scope='col'>Bairro: </th>";
    ?>
    <?php  
    echo "<th scope='col'>CEP: </th>";
    ?>
    <?php  
    echo "<th scope='col'>Cidade: </th>";
    ?>
    <?php   
    echo "<th scope='col'>Estado: </th>";
    ?>
    <?php
    echo "</tr>";
    ?>
    <?php
    echo "</thead>";
    ?>
    <?php
    echo "<tbody>";
    ?>
    <?php
    echo "<tr>";
    ?>
    <?php
    echo  "<th scope='row'>"
    ?>
    <?php echo $rows[$i]['id'];?>
    <?php
    echo "</th>";
    ?>

    <?php
    echo  "<th scope='row'>"
    ?>
    <?php echo $rows[$i]['nome'];?>
    <?php
    echo "</th>";
    ?>

<?php
    echo  "<th scope='row'>"
    ?>
     <?php echo $rows[$i]['endereco'];?>
    <?php
    echo "</th>";
    ?>

<?php
    echo  "<th scope='row'>"
    ?>
     <?php echo $rows[$i]['bairro'];?>
    <?php
    echo "</th>";
    ?>

   <?php
    echo  "<th scope='row'>"
    ?>
     <?php echo $rows[$i]['cep'];?>
    <?php
    echo "</th>";
    ?>

    
   <?php
    echo  "<th scope='row'>"
    ?>
     <?php echo $rows[$i]['cidade'];?>
    <?php
    echo "</th>";
    ?>


    <?php
    echo  "<th scope='row'>"
    ?>
     <?php echo $rows[$i]['estado'];?>
    <?php
    echo "</th>";
    ?>
    
    <?php
  }
  ?>
</body>
</html>