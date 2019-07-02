<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resolução - Condicionais no PHP</title>
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
                    Definir duas variáveis com números, comparar com um if para decidir qual deles é maior e imprimir “O maior número é N”, sendo que N é o valor da maior variável.<br><br>
                    <!-- Pergunta 1 -->
                    a. Adicionar um else ao exercício anterior para cobrir o caso inverso.<br>
                    <!-- Resposta 1 -->
                    <?php 
                        $x = 10;
                        $y = 5;
                        
                        if ($x > $y){
                            echo "O maior número é: $x";
                        } else {
                            echo "O maior número é: $y";
                        }
                    ?>
                </li>
                <li>
                    <!-- Pergunta 2 -->
                    Usando a função rand(x,y), em que “x” é o número mínimo e “y” é o número máximo, gerar um número aleatório entre 1 e 5, atribuí-lo a uma variável e imprimir essa variável apenas se o número gerado for 3 ou 5.<br><br>
                    <!-- Resposta 2 -->
                    <?php
                        $x = 1;
                        $y = 5;

                        $random = rand($x, $y);

                        if ($random === 3 || $random === 5) {
                            echo $random;
                        }   
                    ?>
                </li>
                <li>
                    <!-- Pergunta 3 -->
                    Gerar um número entre 1 e 100, verificar se é maior que 50. Caso seja verdadeiro, retornar “O número é maior que 50” e, caso seja falso: “O número é menor que 50”.<br><br>
                    <!-- Resposta 3 -->
                    <?php
                        $randomico = rand(1, 100);

                        if ($randomico > 50) {
                            echo "O número $randomico é maior que 50";
                        } else {
                            echo "O número não é maior que 50";
                        }
                    ?>
                </li>
                <li>
                    <!-- Pergunta 4 -->
                    Teremos 3 variáveis: idade (um número) e casado (um booleano). Se a pessoa tiver mais de 18 anos e não for casada, será impressa a mensagem “Boas-vindas”.<br><br>
                    <!-- Resposta 4 -->
                    <?php
                        $idade = 30;
                        $casado = false;

                        if ($idade > 18 && $casado == 0){
                            echo "Boas-Vindas";
                        }
                    ?>
                </li>
                <li>
                    <!-- Pergunta 5 -->
                    Definir uma variável $numero que irá receber um úmero. Imprimir “O número é par” ou “O número é impar”, de acordo com a situação. Este exercício deve ser resolvido com um if ternário (operador ?).<br><br>
                    <!-- Resposta 5 -->
                    <?php
                        $numero = 10;
                        echo $numero % 2 == 0 ? "par" : "ímpar";
                    ?>
                </li>
                <li>
                    <!-- Pergunta 6 -->
                    Utilizando rand(), gerar um número aleatório entre 1 e 5 na variável “$i”. Utilizando SWITCH, imprimir “i é igual a X”.<br><br>
                    <!-- Resposta 6 -->
                    <?php
                        $i = rand (1, 5);
                        switch ($i) {
                            case 1:
                                echo "i é igual a 1";
                            break;
                            case 2:
                                echo "i é igual a 2";
                            break;
                            case 3:
                                echo "i é igual a 3";
                            break;
                            case 4:
                                echo "i é igual a 4";
                            break;
                            case 5:
                                echo "i é igual a 5";
                            break;
                            default:
                                echo "Número gerado não equivale aos valores de 1 a 5";
                            break;
                        }
                    ?>
                </li>
                <li>
                    <!-- Pergunta 7 -->
                    Utilizando a mesma idéia do exercício anterior, deixar apenas os casos do número 1 e 2. Se o número for outro, imprimir “NÃO é igual a 1 ou 2”.<br><br>
                    <!-- Resposta 7 -->
                    <?php
                        $i = rand (1, 5);
                        switch ($i) {
                            case 1:
                                echo "i é igual a 1";
                            break;
                            case 2:
                                echo "i é igual a 2";
                            break;
                            default:
                                echo "Número gerado não é igual a 1 ou 2";
                            break;
                        }
                    ?>
                </li>
                <li>
                    <!-- Pergunta 8 -->
                    Utilizando rand(), gerar dois números aleatórios entre 1 e 100 na variável “$x” e a variável “$y”. Imprimir qual é o maior entre os dois ou se são iguais.<br><br>
                    <!-- Resposta 8 -->
                    <?php
                        $x = rand (1,100);
                        $y = rand (1,100);
                
                        if ($x > $y){
                            echo "$x é maior que $y";
                        } else if ($x === $y){
                            echo "$x é igual a $y";
                        } else {
                            echo "$x é menor que $y";
                        }
                    ?>
                </li>
            </ol>
        </section>
    </div>
</body>
</html>