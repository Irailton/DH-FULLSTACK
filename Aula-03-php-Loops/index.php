<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 03 - Loops</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <section>
        <ol>
            <li>
                <p>
                Utilizando um for , imprimir os números de 1 a 100.
                 <?php
                 for($i = 0; $i<=100; $i++){
                     echo "$i<br>" ;
                 }
                  ?></p>
            </li>
            <li>
                <p>Modificar o exercício anterior parar número gerado aleatoriamente entre 0 e 100.
                 <?php
                    $random = rand(1,100);
                    for($i = 0; $i<=$random; $i++){
                        echo "$i <br>";
                    }
                  ?></p>
            </li>
            <li>
                <p>Mostrar a tabela de multiplicação do 2 utilizando um for .<br>
                 <?php
                $numero = 2;
                 for($i = 0; $i <=10; $i++){
                    echo "$numero X $i = ".$numero*$i;
                    echo "<br>";
                 }
                 
                 ?></p>
            </li>
            <li>
                <p>Um programa que lance uma moeda<br>
                 <?php
                 
                 $cara = 0; 
                 while($cara<5){
                    $moeda = rand(0,1);
                     if($moeda == 1){
                         echo $cara +=1;
                         echo " Cara <br>";
                     }
                 }
    
                 ?></p>
            </li>
            <li>
                <p>Utilizando um do/while , realizar um programa que lance a moeda até tirar cara (o número 1).<br>
                 <?php
                
                 do{

                 $moeda = rand(0,1);
                 echo "Lançamento: $moeda <br>" ;
                 }while($moeda != 1);

                
                  ?></p>
            </li>
            <li>
                <p>Definir um array com 5 strings que sejam nomes. Percorrer esse array para imprimir todos os nomes na tela.<br><br>
                 <?php
                 $nomes = ["Ana", "joana", "Patricia", "Marta", "Pedro"];
                 echo "Imprimindo com for: <br>";
                 for($i = 0; $i< count($nomes); $i++){
                     echo $nomes[$i] . "<br>";
                 }

                 echo "Imprimindo com While: <br>";
                 $c = 0;
                 while($c< count($nomes)){
                     echo $nomes[$c] . "<br>";
                     
                     $c+=1;
                 }

                 echo "Imprimindo com do While: <br>";
                 $j = 0; 
                 do{
                     echo $nomes[$j] . "<br>";
                     $j += 1;
                 }while ($j < count($nomes));
                 ?></p>
            </li>

            <li>
                <p>
                Definir um array com 10 números aleatórios entre 0 e 10. Percorrer esse array para imprimir todos os números.<br>
                 <?php
                 $numeros = ["10", "5", "3", "9", "20", "7", "13", "19", "6", "11"];
                 echo "Imprimindo Array com for:<br>";
                 for($i = 0; $i < count($numeros); $i++){
                     if($numeros[$i] == 5){
                         echo "Encontramos um número " . $numeros[$i] . " na posição " .$i ."<br>";
                         break;
                     }
                     echo $numeros[$i] . "<br>";
                 }
                 echo "<br>";
                 echo "Imprimindo Array com while:<br>";

                 $c = 0 ;
                 while( $c < count($numeros)){
                     if($numeros[$c] == 5){
                         echo "Encontramos um número " . $numeros[$c] . " na posição " .$i ."<br>";
                         break;
                     }
                     echo $numeros[$c] . "<br>";
                     $c += 1;
                 }

                 echo "Imprimindo Array com do while:<br>";

                 $j = 0; 
                 do{
                     if($numeros[$j] == 5){
                         echo "Encontramos o número" . $numeros[$j] . " na posição " .$i ."<br>";
                         break;
                     }
                     echo $numeros[$j] . "<br>";
                     $j +=1;
                 }while($j < count($numeros));
                  ?></p>
            </li>
            <li>
                <p>  Utilizando a função <a href="http://php.net/manual/en/function.range.php">range</a>, criar um intervalo de letras (de a até o), imprimir um valor que diga “Na posição <b>[key]</b>, está o valor <b>[value]</b>”, em que <b>[value]</b> será substituído por cada valor do array e <b>[key]</b> representa o índice.<br><br>
                 <?php
                 $letreiro = range('a', 'o');
                 foreach ($letreiro as $posicao => $value) {
                     echo "Na posição $posicao temos o valor $value <br>";
                 }
                 
                 ?></p>
            </li>
            <li>
                <p>
                Definir uma variável $mascote que seja um array associativo<br>
                 <?php
                 $mascote = [
                     "Animal" =>"Gato",
                     "idade" => 3,
                     "Altura" => 0.60,
                     "Nome" => "Pug"

                 ];
                 foreach($mascote  as $key => $value){
                     echo "$key : $value <br>";
                 }

                 
                 ?></p>
            </li>
            <li>
                <p>A partir da seguinte variável definida:<br><br>
                Mostre o nome da capital e o país a partir da variável <b>$paises</b>.<br><br>
                 <?php
                $paises = array("Itália"=>"Roma", "Luxemburgo"=>"Luxemburgo", "Bélgica"=> "Bruxelas", "Dinamarca"=>"Copenhagen", "Finlândia"=>"Helsinki", "França" => "Paris", "Eslováquia"=>"Bratislava", "Eslovênia"=>"Liubliana", "Alemanha" => "Berlim", "Grécia" => "Atenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdã", "Portugal"=>"Lisboa", "Espanha"=>"Madri", "Suécia"=>"Estocolmo", "Reino Unido"=>"Londres", "Chipre"=>"Nicósia", "Lituânia"=>"Vilnius", "República Tcheca"=>"Praga", "Estônia"=>"Tallinn", "Hungria"=>"Budapeste", "Letônia"=>"Riga", "Malta"=>"Valletta", "Áustria" => "Viena", "Polônia"=>"Varsóvia");
                 foreach($paises as $pais => $capital){
                     echo "O pais $pais tem a capital $capital <br>";
                 }
                 ?></p>
            </li>
            <li>
            <p>Criar um script que mostre o nome de cada país e suas cidades a partir da variável $ceu com o seguinte formato:<br>
            <?php
            $paises = [
                "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"], 
                "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"], 
                "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"], 
                "França" => ["Paris", "Nantes", "Lyon"], 
                "Itália" => ["Roma", "Milão", "Veneza"], 
                "Alemanha" => ["Munique", "Berlim", "Frankfurt"] 
            ];
            foreach($paises as $pais => $cidades){
                echo "As cidades de $pais são: <br>";
                foreach($cidades as $item){
                    echo "<li>$item</li>";
                }
                echo "<br>";

            }

                
            ?></p>
            
            </li>
            <li>
            <p>
                A partir do exercício anterior modificar o array de $paises para que agora seja um array associativo contendo dois itens “cidades” e “naAmerica” :<br><br>
                a. No item <b>“cidades”</b> adicionar as cidades correspondentes a cada país.<br>
                b. No item <b>“naAmerica”</b> um valor booleano (<b>true</b> ou <b>false</b>), para os países que são da América<br>
                c. Mostre somente os países que estejam na América.<br>
                
            
            <?php
            $paises = [
                "Argentina"	=> [
                    "cidades" => ["Buenos Aires", "Córdoba", "Santa Fé"],
                    "america" => true,
                ],
                "Brasil" => [
                    "cidades" => ["Brasília", "Rio de Janeiro", "São Paulo"],
                    "america" => true,
                ],
                "Colômbia" => [
                    "cidades" => ["Cartagena", "Bogotá", "Barranquilla"],
                    "america" => true,
                ],
                "França" => [
                    "cidades" => ["Paris", "Nantes", "Lyon"],
                    "america" => false,
                ],
                "Itália" => [
                    "cidades" => ["Roma", "Milão", "Veneza"],
                    "america" => false,
                ],
                "Alemanha" => [
                    "cidades" => ["Munique", "Berlim", "Frankfurt"],
                    "america" => false,
                ]
            ];

            foreach ($paises as $pais => $item) {
                if ($item['america']){  
                    echo "As cidades de $pais são: <br>";                  
                    foreach($item['cidades'] as $cidade){
                        echo "<li>";
                            echo $cidade;
                        echo "</li>";
                    }
                }  
            }
            ?></p>
        </ol>
    </section>
    
    </div>
</body>
</html>