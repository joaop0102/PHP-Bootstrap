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
<body style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 0%, rgba(2,174,230,1) 54%, rgba(0,212,255,1) 100%);">        
   <div class="container">
     <div class="row">
       <div class="col">
         
          <div class="text-center" style="margin-top: 30px;">
            
            <img src="img2.png" alt="">
          </div>
       </div>
       <div class="row">
         <div class="col">
           <div class="table-responsive">
         <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome:</th>
      <th scope="col">Endereço</th>
      <th scope="col">Bairro:</th>
      <th scope="col">CEP:</th>
      <th scope="col">Cidade:</th>
      <th scope="col">Estado:</th>
    </tr>
  </thead>
  <tbody>
  <?php
$sql = "SELECT * FROM clientes";
$result = $PDO->query($sql);
 $rows = $result->fetchALL();
?>
    <tr>
      <th scope="row"><?php echo $rows[0]['id']; ?></th>
      <td><?php echo $rows[0]['nome']; ?></td>
      <td><?php echo $rows[0]['endereco']; ?></td>
      <td><?php echo $rows[0]['bairro']; ?></td>
      <td><?php echo $rows[0]['cep']; ?></td>
      <td><?php echo $rows[0]['cidade']; ?></td>
      <td><?php echo $rows[0]['estado']; ?></td>
    </tr>
  
   
  </tbody>
</table>
</div>
         </div>
       </div>
     </div>
   </div>
</body>
</html>