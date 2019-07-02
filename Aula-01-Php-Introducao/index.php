<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade - PHP</title>
</head>

<style>


</style>
<body>
    <div class="container">
        <section>
            <ol>
            <h2>Questão 01</h2>
                <li style="list-style: none;">
                A - Variavel numero inteiro: 
                <?php $inteiro = 10; echo "$inteiro <br>"?>
                Inteiro usando var_dump: 
                <?php var_dump($inteiro);?><br><br>
                B - Variavel com numero decimal:
                <?php $decimal = 9.6; echo "$decimal <br>"?>
                Decimal usando var_dump: 
                <?php var_dump($decimal) ?><br><br>
                C - Caractere com aspas simples:
                <?php $a = "A"; echo"$a <br>"?>
                Caractere usando var_dump: 
                <?php var_dump($a) ?><br><br>
                D - Caractere usando aspas Dupla:
                <?php $b = "B"; echo "$b<br>"?>
                Caractere apas dupla usando var_dump:
                <?php var_dump($b) ?><br><br>
                E - Cadeia de caractere aspas simples:
                <?php $nacionalidade = 'Brasileiro'; echo "$nacionalidade <br>"?>
                Cadeia de caractere simples var_dump:
                <?php var_dump($nacionalidade) ?><br><br>
                F - Cadeia de caractere aspas dupla:
                <?php $curso="Fullstack"; echo "$curso <br>"?>
                Cadeia de caractere aspas dupla Var_dump:
                <?php var_dump($curso) ?><br><br> 
                G - Atribuindo uma cadeia de caractere a variavel do ponto a:
                <?php $inteiro = "Testando"; echo $inteiro ?><br><br>
                Atribuindo cadeia caractere a variavel inteiro var_dump: 
                <?php var_dump($inteiro) ?><br><br>
                H - Atribuindo um numero decimal a variavel do ponto e: 
                <?php $nacionalidade = 8.7; echo $nacionalidade; ?><br><br>
                I- Atribuindo um valor numerico entre aspas:
                <?php $inteiro = "10.5"; echo $inteiro; ?><br><br>
                </li>
                <li>
                <h2>Questão 02</h2>
                 A - Criar uma variavel para cada Palavra:
                <?php  echo "Não é possivel criar vairavel com número"; ?><br><br>
                B - Atribuir a cada variável sua posição numérica escrita como texto:

                <?php $um = "Três"; $dois = "pratos";$tres = "de"; $quatro = "trigo"; $cinco = "para";$seis = "tres"; $sete = "tigres";$oito  = "triste";?>
                <?php echo $um ." " .$dois ." " .$tres ." " .$quatro ." " .$cinco ." " .$seis ." " .$sete ." " .$oito   ?><br><br>
                
                </li>
                <li>
                <h2>Questão 03</h2>

                <?php
                 $variable01 = true;
                 $variable02 = false;
                 $variable03 = 0;
                 $variable04 = 1;
                 $variable05 = -6;
                 $variable06 = '';
                 $variable07 = "3";
                 $variable08 = "true";
                 $variable09 ='false';

                 $variable10 = null;

                 function tipoDado ($varN){
                     if($varN == true){
                         echo "O valor $varN é verdadeiro";
                     }else{
                         echo "O valor $varN é falso";
                     }

                 }

                 tipoDado($variable10);
                
                ?>
           

                </li>
                <li> 
                <h2>Questão 04</h2>

                Criar um array com cinco strings diferentes e imprimir com var_dump:<br>
                <?php 

                $animais = ['Gato', 'Cachorro', 'Macaco', 'Elefante', 'Boi'];
                echo "<pre>" ;
                var_dump($animais);
                echo "</pre>";
            
                 $animais[] = 'Onça';
                 $animais[] = 'Leão';
                 echo "Adicionando mais elementos no array:";

                 echo "<pre>";
                 var_dump($animais);
                 echo "</pre>";

                 for ( $i = 0; $i < count($animais); $i++){
                     echo "Eu gosto do animal na posicão: $i $animais[$i] <br><br>";
                 };

                 echo "Substituir o primeiro animal por outro novo";
                 $animais [0]='Coelho';
                 echo "<pre>";
                 var_dump($animais);
                 echo "</pre>";

                 echo "Adicionar um animal novo na posição 100";
                 $animais [100] ="Jumento";
                 echo "<pre>";
                 var_dump($animais);
                 echo "</pre>";
                 $animais [16] ='Novo Animal';
                 echo "Adicionar um animal novo na posição 16";
                 echo "<pre>";
                 var_dump($animais);
                 echo "</pre>";
                   
                // 
                 foreach ($animais as $key => $value){
                     echo "$key = $value <br>" ;
                 }
                ?>
                <br>
                Criar um Array associativo que contenha as propriedades de um carro:<br>
                <?php 
                  $carro = [
                      "Marca" => "BMW",
                      "Modelo" => "XYZ",
                      "Ano" => "2010",
                      "Cor" => "azul",
                      "Placa" =>"JB458"
                ];
                echo "Array associativo var_dump:<br>";
                var_dump($carro);
                echo "<br><br>";
                echo "Array associativo foreach:<br>";
                foreach( $carro as $key => $valor){
                    echo "$key : $valor <br>";
                }

                echo "Adicionar o nome do dono na posição 0 do array:<br>";
                $carro += [ 0 => "Pedro"];
                $carro += [ 14 => "Porto Seguro"];
                $carro += [ "Apolice" => 456789];
                $carro ["Placa"] = "GHT5804";
                $carro[0] ="Andre";

                foreach( $carro as $key => $valor){
                    echo "$key : $valor <br>";
                }

                ?>
                <h5>Declarar a variável inteiro e decimal, com os respectivos valores.</h5>
                <?php
                $inteiro = 15;
                $decimal = 10;
                $soma = $inteiro + $decimal;
                echo " O resultado da soma é: $soma<br>";
                
                $subtracao = $inteiro - $decimal;
                echo " O resultado da subtração é: $subtracao<br>";

                $divisao = $inteiro / $decimal;
                echo " O resultado da divisão é: $divisao<br>";

                $multiplicacao = $inteiro * $decimal;
                echo " O resultado da multiplicação é: $multiplicacao<br>";

                $resto = $inteiro % 2;
                echo " Resto da divisão inteiro: $resto<br>";

                $restoDecimal = $decimal % 2;
                echo " Resto da divisão decimal:  $restoDecimal<br>";

                $inteiro2 = 5;
                $decimal2 = 0.6;
                $subtracao2 = $inteiro2 - $decimal2;
                echo "Subtração decimal por 0.6 $subtracao2<br>";

                $text1 = "Olá";
                $text2 = "Mudo !";
                echo "Me livrei da maldição: <br> $text1   $text2 <br>";

                $ponto = "PHP";
                $pontob = "máximo";
                echo $ponto. "é o ". $pontob;

                ?>

                
                <?php ?>
                <?php ?>
                <?php ?>

             
                </li>
            </ol>
        </section>
    </div>

</body>
</html>