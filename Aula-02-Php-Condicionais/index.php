<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
    .container{
        background-color: #eccc68;
    }
    </style>
</head>
<body>
<div class="container">
<h1>Condicionais - PHP</h1>
    <section>
    <h6> 1 - Definir duas variáveis com números, comparar com um if para decidir qual deles é maior:<br></h6>
    <?php
    $numero1 = 10;
    $numero2 = 15;

   if($numero1 > $numero2){
       echo "Número maior : $numero1";
   }else{
       echo "Número maior: $numero2";
   }
    
    ?>
    <h6>Comparando com if Ternário<br></h6>
    <?php
    $numero1 = 32;
    $numero2 = 58;
    $maior = $numero1 > $numero2 ? $numero1 : $numero2;
    echo "Número maior:  $maior";
    ?>
    <h6>2 - Comparando numero maior função mt_rand<br></h6>
    <?php 
    $numero = mt_rand(1,5);
    if($numero == 3 || $numero == 5){
        echo "Encontrei o número : $numero";
    }else{
        echo "Número diferente de 3 ou 5";
    }
    ?>

    <h6>3 - Imprimir o Número não é 3 <br></h6>
     <?php 
    $numero = mt_rand(1,5);
    if($numero != 3 ){
        echo "Número não é 3 ";
    }else{
        echo " Encontrei o número $numero";
    }
    ?>
    
    <h6>4 - Retornar maior que 50</h6>
    <?php
    $maior = mt_rand(1,100);
    if($maior > 50){
        echo" O Número maior que 50 é : $maior";
    }else{
        echo " O Número menor que 50 é: $maior";
    }
    
    ?>
     <h6>5 - Retornar maior que 50 Par</h6>
     <?php
     $maiorPar = mt_rand(1,100);

     echo "Número é : $maiorPar ";
     if($maiorPar > 50 && $maiorPar % 2 == 0){
        echo "Número Maior Par";
     }else if ($maiorPar == 0){
         echo "Cumpre a condição ";   
     }else{
         echo "Não cumpre a condição";

     }

    // echo $maiorPar > 50 && $maiorPar % 2 == 0 ? " Número maior par $maiorPar" : "Não cumpre a condição";
     ?>
    <h6> 6 - Retornar maior que  18 e não for casada</h6>

     <?php
     $idade = 20;
     $sexo = "F";
     $casado = false;

     if($idade >= 18 && $casado == false && $sexo ==="M"){
         echo "Seja bem vindo !";
     }
     else{
         echo " Não Cumpre a condição";
     }
     
     ?>
     <h6> 7 e 8 - Verificar oque acontece com a variável chamada quantidadeDeAlunos</h6>
     <?php
     $quantidadeDeAlunos = 100; 
     if($quantidadeDeAlunos){
         echo "true";

     }else{
         echo "false";
     }

 
     if ($i == 0 ) {
        echo "true";
        } else {
        echo "false";
        }
     
     ?>
     <h6> 9 - Definir variável e Imprimir Número par ou impar </h6>

     <?php
     $numero = 10;
     $result = $numero % 2 == 0 ?  "Número par" : " Número impar ";
     echo ($result);
     ?>
     <h6>10 e 11  - Utilizando SWITCH, imprimir “i é igual a X” de um número aleatório</h6>

     <?php
     $i = mt_rand(1,5);
     switch($i){
         case 1:
         echo " O número é igual a 1";
         break;
         case 2:
         echo " O número é igual a 2";
         break;
         default;
         echo "Número não é igual a 1 ou 2";
         break;
     }
     ?>
    <h6>12 - Gerar dois números aleatórios entre 1 e 100 imprimir o maior </h6>
     <?php
     $x = mt_rand(1,100);
     $y = mt_rand(1,100);

     if($x > $y){
         echo "$x é maior que $y";
     }else if($x == $y){
         echo "$x e $y são iguais";
     }else{
         echo "$y é maior que $x";
     }

      ?>
    </section>
</div>
    

</body>
</html>