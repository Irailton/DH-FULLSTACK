<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resolução - Estruturas de Repetição no PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        li{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <section>
            <ol> 
                <li>
                    <!-- Pergunta 1 -->
                    Utilizando um <b>for</b>, imprimir os números de 1 a 100.<br><br>
                    <!-- Resposta 1 -->
                    <?php
                        for ($i = 0; $i <= 100; $i++){
                            echo "$i <br>";
                        }
                    ?>
                </li>
                <li>
                    <!-- Pergunta 2 -->
                    Modificar o exercício anterior para que, em vez de parar no número 100, pare em um número gerado aleatoriamente entre 0 e 100..<br><br>
                    <!-- Resposta 2 -->    
                    <?php
                        $random = rand(1, 100);
                        for ($i = 0; $i <= $random; $i++){
                            echo "$i <br>";
                        }
                    ?>
                </li>
                <li>
                    <!-- Pergunta 3 -->
                    Mostrar a tabuada do 2 utilizando um <b>for</b>.<br>
                    <!-- Resposta 3 -->
                    <?php 
                        for ($i=0; $i <= 10 ; $i++) {
                            $resultado = 2 * $i; 
                            echo "2 x $i = $resultado <br>";
                        }
                    ?>
                </li>
                <li>
                    <!-- Pergunta 4 -->
                    Definir um array com 5 strings que sejam nomes. Percorrer esse array para imprimir todos os nomes na tela.<br><br>
                    <!-- Resposta 4 -->
                    <?php
                        $nomes = ['Maria', 'Mário', 'João', 'Joaquina', 'Bryan'];
                    ?>
                    <!-- Pergunta 4 - a -->
                    a. Resolver este problema com um <b>for</b>.<br>
                    <!-- Resposta 4 - a -->
                    <?php 
                        for ($i = 0; $i < count($nomes); $i++){
                            echo $nomes[$i] . "<br>";
                        }
                    ?>
                    <!-- Pergunta 4 - b -->
                    b. Resolver este problema com <b>while</b>.<br>
                    <!-- Resposta 4 - b -->
                    <?php 
                        $x = 0;

                        while($x < count($nomes)){
                            echo $nomes[$x] . "<br>";
                            $x++;
                        }
                    ?>
                    <!-- Pergunta 4 - c -->
                    c. Resolver este problema com um <b>foreach</b>.<br>
                    <!-- Resposta 4 - c -->
                    <?php 
                        foreach ($nomes as $nome){
                            echo "$nome <br>";
                        }
                    ?>
                </li>
                <li>
                    <!-- Pergunta 5 -->
                    Definir um array com 10 números aleatórios entre 0 e 10. Percorrer esse array para imprimir todos os números. A execução deve terminar se algum dos números encontrados for 5 (a mensagem impressa deve ser “Encontramos um 5!”). Utilize o loop que você achar necessário (Exemplo: <b>for</b>, <b>while</b>, <b>foreach</b>).<br><br>
                    <!-- Resposta 5 -->
                    <?php
                        for($i = 1; $i <= 10; $i++){
                            $aleatorio = rand(0,10);
                            if ($aleatorio == 5){
                                echo "Encontramos um 5 <br>";
                                break;
                            } else {
                                echo "$aleatorio <br>";
                            }
                        }
                    ?>
                </li>
                <li>
                    <!-- Pergunta 6 -->
                    Utilizando a função <a href="http://php.net/manual/en/function.range.php">range</a>, criar um intervalo de letras (de a até o), imprimir um valor que diga “Na posição <b>[key]</b>, está o valor <b>[value]</b>”, em que <b>[value]</b> será substituído por cada valor do array e <b>[key]</b> representa o índice.<br><br>
                    <!-- Resposta 6 -->
                    <?php 
                        $letreiro = range('a', 'o');
                        
                        foreach ($letreiro as $posicao => $valor) {
                            echo "Na posição $posicao temos o valor: $valor. <br>";
                        }
                    ?>
                </li>
                <li>
                    <!-- Pergunta 7 -->
                    Definir um array <b>$mascote</b> que seja um array associativo. <br><br>
                        a. No índice animal, deve dizer que animal.<br>
                        b. No índice idade, deve dizer a idade.<br>
                        c. No índice altura, deve dizer a altura.<br>
                        d. No índice nome, deve dizer o nome.<br>
                    <!-- Resposta 7 -->
                    <?php 
                        $mascote = [
                            "Animal" => "Leão",
                            "Idade" => 30,
                            "Altura" => 3,
                            "Nome" => "Mufaza"
                        ];
                    ?>
                </li>
                <li>
                    <!-- Pergunta 8 -->
                    Percorrer os valores do array $mascote com um foreach que imprima (por exemplo):<br><br>
                        <b>Animal: cachorro</b><br>
                        <b>Idade: 5</b><br>
                        <b>Altura: 1,20</b><br>
                        <b>Nome: Yoshi</b><br><br>
                    <!-- Resposta 8 -->
                        <b>Resposta</b>
                    <?php 
                        foreach ($mascote as $animal => $caracteristicas){
                            echo "$animal : $caracteristicas <br>";
                        }
                    ?>
                </li>
                <li>
                    <!-- Pergunta 9 -->
                    A partir da seguinte variável definida:<br><br>
                        <b>$paises = array("Itália"=>"Roma", "Luxemburgo"=>"Luxemburgo", "Bélgica"=> "Bruxelas", "Dinamarca"=>"Copenhagen", "Finlândia"=>"Helsinki", "França" => "Paris", "Eslováquia"=>"Bratislava", "Eslovênia"=>"Liubliana", "Alemanha" => "Berlim", "Grécia" => "Atenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdã", "Portugal"=>"Lisboa", "Espanha"=>"Madri", "Suécia"=>"Estocolmo", "Reino Unido"=>"Londres", "Chipre"=>"Nicósia", "Lituânia"=>"Vilnius", "República Tcheca"=>"Praga", "Estônia"=>"Tallinn", "Hungria"=>"Budapeste", "Letônia"=>"Riga", "Malta"=>"Valletta", "Áustria" => "Viena", "Polônia"=>"Varsóvia");</b><br><br>
                        Mostre o nome da capital e o país a partir da variável <b>$paises</b>.<br><br>
                    <!-- Resposta 9 -->
                    <?php 
                        $paises = array("Itália"=>"Roma", "Luxemburgo"=>"Luxemburgo", "Bélgica"=> "Bruxelas", "Dinamarca"=>"Copenhagen", "Finlândia"=>"Helsinki", "França" => "Paris", "Eslováquia"=>"Bratislava", "Eslovênia"=>"Liubliana", "Alemanha" => "Berlim", "Grécia" => "Atenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdã", "Portugal"=>"Lisboa", "Espanha"=>"Madri", "Suécia"=>"Estocolmo", "Reino Unido"=>"Londres", "Chipre"=>"Nicósia", "Lituânia"=>"Vilnius", "República Tcheca"=>"Praga", "Estônia"=>"Tallinn", "Hungria"=>"Budapeste", "Letônia"=>"Riga", "Malta"=>"Valletta", "Áustria" => "Viena", "Polônia"=>"Varsóvia");

                        foreach ($paises as $pais => $cidade){
                            echo "A capital de $pais é $cidade <br>";
                        }
                    ?>
                </li>
                <li>
                    <!-- Pergunta 10 -->
                    A partir da seguinte variável definida:<br><br>
                    <b>
                        $cidades = [
                        "Argentina"	=> ["Buenos Aires", "Córdoba", "Santa Fé"],
                        "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"],
                        "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
                        "França" => ["Paris", "Nantes", "Lyon"],
                        "Itália" => ["Roma", "Milão", "Veneza"],
                        "Alemanha" => ["Munique", "Berlim", "Frankfurt"]
                        ];
                    </b>
                    <br><br>
                    Mostre o nome de cada país e suas cidades a partir da variável <b>$cidades</b> com o seguinte formato:<br><br>
                    As cidades da Argentina são:
                    <ul>
                        <li>Buenos Aires</li>
                        <li>Córdoba
                        <li>Santa Fé</li>
                    </ul>
                    <br><br>
                    <!-- Resposta 10 -->
                    <?php 
                        $paises = [
                            "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"], 
                            "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"], 
                            "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"], 
                            "França" => ["Paris", "Nantes", "Lyon"], 
                            "Itália" => ["Roma", "Milão", "Veneza"], 
                            "Alemanha" => ["Munique", "Berlim", "Frankfurt"] 
                        ];

                        foreach ($paises as $pais => $cidade){
                            echo "As cidades de $pais são:";
                            foreach ($cidade as $item) {
                                echo "<li>$item</li>";
                            }
                        }                    
                    ?>
                </li>
                <li>
                    <!-- Pergunta 11 -->
                    A partir do exercício anterior modificar o array de $paises para que agora seja um array associativo contendo dois itens “cidades” e “naAmerica” :<br><br>
                        a. No item <b>“cidades”</b> adicionar as cidades correspondentes a cada país.<br>
                        b. No item <b>“naAmerica”</b> um valor booleano (<b>true</b> ou <b>false</b>), para os países que são da América<br>
                        c. Mostre somente os países que estejam na América.<br>
                    <!-- Resposta 11 -->
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
                    ?>
                </li>
                <li>
                    <!-- Pergunta 12 -->
                    <b>Desafio</b><br><br>
                        Utilizando um <b>while</b>, fazer um programa que lance uma moeda (lembre-se que uma moeda possui dois lados, portanto, gere números aleatórios entre 0 e 1, que representarão cara e coroa) até tirar 5 vezes cara (o número 1). Ao terminar, imprimir o número de lançamentos da moeda até tirar 5 vezes cara.<br><br>
                    <!-- Resposta 12 -->
                    <?php
                        $cara = 0;
                        $coroa = 0;

                        while ($cara < 5){
                            $random = rand(0,1);
                            if ($random === 1){
                                $cara++;
                            } else {
                                $coroa++;
                            }
                        }
                        
                        $total = $cara + $coroa;
                        echo "A moeda foi lançada $total vezes. Até alcançar cara $cara vezes";
                    ?>
                </li>
            </ol>
        </section>
    </div>
</body>
</html>