<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resolução - Introdução ao PHP</title>
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
                    Criar as seguintes variáveis e mostrá-las usando echo e var_dump.<br><br>
                    <!-- Pergunta 1-a -->
                    a. Uma variável com um número inteiro.<br>
                    <!-- Resposta 1-a -->
                    <?php 
                        $inteiro = 10;
                        echo "$inteiro <br>";
                    ?>

                    <!-- Pergunta 1-b -->
                    b. Uma variável com um número decimal.<br>
                    <!-- Resposta 1-b -->
                    <?php 
                        $decimal = 10.5;
                        echo "$decimal <br>";
                    ?>

                    <!-- Pergunta 1-c -->
                    c. Uma variável com um caractere, usando aspas duplas.<br>
                    <!-- Resposta 1-c -->
                    <?php 
                        $c = "C";
                        echo "$c <br>";
                    ?>

                    <!-- Pergunta 1-d -->
                    d. Uma variável com um caractere, usando aspas simples.<br>
                    <!-- Resposta 1-d -->
                    <?php 
                        $d = 'D';
                        echo "$d <br>";
                    ?>

                    <!-- Pergunta 1-e -->
                    e. Uma variável com uma string, usando aspas simples.<br>
                    <!-- Resposta 1-e -->
                    <?php 
                        $nacionalidade = 'brasileiro';
                        echo "$nacionalidade <br>";
                    ?>

                    <!-- Pergunta 1-f -->
                    f. Uma variável com uma string, usando aspas duplas.<br>
                    <!-- Resposta 1-f -->
                    <?php 
                        $curso = "Full Stack";
                        echo "$curso <br>";
                    ?>

                    <!-- Pergunta 1-g -->
                    f. O que acontece se atribuirmos outro valor numérico à variável do ponto a, mas entre aspas?<br>
                    <!-- Resposta 1-g -->
                    A variável muda de valor, assumindo como valor o conteúdo da String, exemplo:<br>
                    <?php
                        $inteiro = "Testando";
                        echo "$inteiro <br>";
                    ?>
                </li>
                <li>
                    Criar um array com 5 strings de animais diferentes. Em seguida, executar um var_dump() para ver os resultados<br><br>
                    <!-- Pergunta 2-a -->
                    a. Adicionar mais 2 animais ao final do array e executar outro var_dump para ver os resultados.<br>
                    <!-- Resposta 2-a -->
                    <?php
                        $animais = ['Cachorro', 'Gato', 'Pato', 'Elefante', 'Leão'];
                        echo '<pre>';
                            var_dump($animais);
                        echo '</pre>';

                        $animais[] = 'Ganso';
                        $animais[] = 'Girafa';
                        echo '<pre>';
                            var_dump($animais);
                        echo '</pre>';
                    ?>

                    <!-- Pergunta 2-b -->
                    b. Adicionar um animal novo na posição 10, mesmo não tem a posição 10 criada, e imprimir o resultado.<br>
                    <!-- Resposta 2-b -->
                    <?php
                        $animais[10] = 'Jumento';

                        echo '<pre>';
                            var_dump($animais);
                        echo '</pre>';
                    ?>

                    <!-- Pergunta 2-c -->
                    c. Substituir o último animal por outro novo e imprimir o resultado.<br>
                    <!-- Resposta 2-c -->
                    <?php
                        $animais[10] = 'Novo Animal';

                        echo '<pre>';
                            var_dump($animais);
                        echo '</pre>';
                    ?>
                </li>
                <li>
                    <!-- Pergunta 3 -->
                    Criar um array associativo que contenha as seguintes propriedades de um carro: Marca, Modelo, Cor, Ano e Placa. Em seguida, executar um var_dump para ver os resultados.<br>
                    <!-- Resposta 3 -->
                    <?php
                        $carro = [
                            'Marca' => 'Honda',
                            'Modelo' => 'Civic',
                            'Cor' => 'Preta',
                            'Ano' => 2010,
                            'Placa' => 'XXX - 1234'
                        ];

                        echo '<pre>';
                            var_dump($carro);
                        echo '</pre>';
                    ?>
                </li>
                <li>
                    Declarar duas variáveis numéricas, e definir os seus respectivos valores.<br><br>
                    <!-- Pergunta 4-a -->
                    a. Executar um echo com o resultado da soma dos dois valores.<br>
                    <!-- Resposta 4-a -->
                    <?php
                        $num = 10;
                        $num2 = 5;

                        $soma = $num + $num2;
                        echo "$num + $num2 = $soma <br>";
                    ?>

                    <!-- Pergunta 4-b -->
                    b. Executar um echo com o resultado da subtração dos dois valores.<br>
                    <!-- Resposta 4-b -->
                    <?php
                        $num = 10;
                        $num2 = 5;

                        $subtrai = $num - $num2;
                        echo "$num + $num2 = $subtrai <br>";
                    ?>

                    <!-- Pergunta 4-c -->
                    c. Executar um echo com o resultado da divisão dos dois valores.<br>
                    <!-- Resposta 4-c -->
                    <?php
                        $num = 10;
                        $num2 = 5;

                        $divide = $num / $num2;
                        echo "$num / $num2 = $divide <br>";
                    ?>

                    <!-- Pergunta 4-d -->
                    d. Executar um echo com o resultado da multiplicação dos dois valores.<br>
                    <!-- Resposta 4-d -->
                    <?php
                        $num = 10;
                        $num2 = 5;

                        $multiplica = $num * $num2;
                        echo "$num * $num2 = $multiplica <br>";
                    ?>

                    <!-- Pergunta 4-e -->
                    e.  Executar um echo com o resultado do resto da divisão entre os dois valores.<br>
                    <!-- Resposta 4-e -->
                    <?php
                        $num = 10;
                        $num2 = 5;

                        $resto = $num % $num2;
                        echo "$num % $num2 = $resto <br>";
                    ?>
                </li>
            </ol>
        </section>
    </div>
</body>
</html>