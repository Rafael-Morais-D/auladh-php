<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - PHP</title>
</head>
<body>
    <h1>Loops e Funções</h1>

    <p>Loops - For</p>

    <p>Crie um loop que exiba os números de 1 a 10 utilizando a estrutura for (incremento).</p>   
    
    <?php
        /* o for é um método de estrutura de repetição, que recebe três parâmetros onde o primeiro é o critério de inínio da nossa variável contadora, ou seja, com qual valor ela vai começar a percorrer o loop for, já o segundo parâmetro, é o critério de parada do nosso loop for, e o terceiro parâmetro é o critério de incremento, se for ++ ou decremento se for -- */
        for ($i=1; $i <= 10; $i++) { 
            echo $i . "<br>";
        }
    ?>

    <hr>

    <p>Crie um loop que exiba os números de 10 a 1 utilizando a estrutura for (decremento).</p>   
    
    <?php
        for ($i=10; $i >= 1; $i--) { 
            echo $i . "<br>";
        }
    ?>

    <hr>

    <p>Crie um loop que exiba os números pares que temos até 10 utilizando uma condição para verificar se o número é par e a estrutura for.</p>   
    
    <?php
        for ($i=1; $i <= 10; $i++) { 
            if ($i % 2 == 0){
                echo $i . "<br>";
            }
        }
    ?>

    <hr>

    <p>Crie um loop que exiba os números pares que temos até 10 utilizando a estrutura for sem criar condições.</p>   
    
    <?php
        for ($i=2; $i <= 10; $i+=2) { 
            echo $i . "<br>";
        }
    ?>

    <hr>

    <p>Tabuada do 1.</p>   
    
    <?php
        for ($i=0; $i <= 10; $i++) { 
            echo "1 * $i = " . $i * 1 . "<br>";
        }
    ?>

    <hr><hr>

    <p>Loops - While</p>

    <p>Crie um loop que exiba os números de 1 a 10 utilizando while (incremento).</p>   
    
    <?php
        /* Informamos uma condição dentro do while e ela sempre será verificada a cada loop realizado, enquanto a condição for verdadeira ele irá repetir o bloco de código dentro do while. Podemos pensar que ele tem uma diferença, que é a parte de incremento, ou seja, no While não podemos esquecer de incrementar ou decrementar nossa variável que está sendo verificada na condição. Também devemos nos atentar que a nossa variável que vai ser comparada na condição dentro do While deverá existir antes e ter algum valor. */

        $i = 1;

        while ($i <= 10) {
            echo $i . "<br>";
            $i++;
        }
    ?>

    <hr>

    <p>Crie um loop que exiba os números de 10 a 1 utilizando while (dencremento).</p>   
    
    <?php
        
        $i = 10;
        while ($i >= 1) {
            echo $i . "<br>";
            $i--;
        }
    ?>

    <hr><hr>

    <p>Loops - Do While</p>

    <p>Crie um loop que exiba os números de 1 a 10 utilizando do while (incremento). </p>

    <?php
        /* Funciona de uma forma que primeiro indica ao código para executar as instruções dentro do bloco de código do, e depois ele verifica a condição que foi criada no while, desta forma, podemos perceber que sempre será executado ao menos uma vez o código quando trabalhamos com o do while, afinal de contas, ele executa primeiro para depois verificar a condição que foi criada no while. Não podemos esquecer de incrementar ou decrementar nossa variável que está sendo verificada na condição. Também devemos nos atentar que a nossa variável que vai ser comparada na condição dentro do While deverá existir antes e ter algum valor. */

        $i = 1;

        do {
           echo $i . "<br>";
           $i++;
        } while ($i <= 10);
    ?>

    <hr>

    <p>Crie um loop que exiba os números de 10 a 1 utilizando do while (dencremento). </p>

    <?php

        $i = 10;

        do {
           echo $i . "<br>";
           $i--;
        } while ($i >= 1);
    ?>

    <hr><hr>

    <h1>Loops - Percorrendo Arrays</h1>

    <p>For - Percorrendo Arrays</p>

    <p>Percorra o array de animais abaixo utilizando for.</p>
    <p style="padding:5px;background-color:#f5f5f5;border-radius:10px;color:blue;line-height:20px;font-size:16px">$animais = ["Gato", "Cachorro", "Leão", "Girafa"]</p>

    <?php
        // Criando o array de animais
        $animais = ["Gato", "Cachorro", "Leão", "Girafa"];
    ?>

    <?php
        // Percorrendo o array de animais com o loop for
        // echo count($animais); // retorna o numero de elementos contidos em um array
        //Lembrete: count($array) em PHP é equivalente ao array.length do JS (mumuki)

        // Indicando que a variavel $i deve ser menor que o count de elementos do array, e nunca <=, pois como o array começa a partir do elemento obtendo a posição 0, podemos pensar que um array que contenha 4 elementos, como o array de animais, possui as posições 0, 1, 2 e 3, onde 0 possui o indice Gato, 1 possui o indice Cachorro, 2 possui o indice Leão e 3 possui o indice Girafa. A partir disso, sabemos que o i deve começar em 0 e ser menor que o count do nosso array que retorna 4.
        // Sendo assim o for tera a responsabilidade de pegar as posicoes 0 ate 3, e desta forma, obteremos todos elementos do array.
        
        for ($i=0; $i < count($animais); $i++) { 
            echo $animais[$i] . "<br>";
        }
    ?>

    <hr>

    <p>While - Percorrendo Arrays</p>

    <p>Percorra o array de animais abaixo utilizando while.</p>
    <p style="padding:5px;background-color:#f5f5f5;border-radius:10px;color:blue;line-height:20px;font-size:16px">$animais = ["Gato", "Cachorro", "Leão", "Girafa"]</p>

    <?php
        // Percorrendo o array de animais com o loop while
        
        $i = 0;
        
        while ($i < count($animais)) {
            echo $animais[$i] . "<br>";
            $i++;
        }
    ?>

    <hr>

    <p>Do While - Percorrendo Arrays</p>

    <p>Percorra o array de animais abaixo utilizando do while.</p>
    <p style="padding:5px;background-color:#f5f5f5;border-radius:10px;color:blue;line-height:20px;font-size:16px">$animais = ["Gato", "Cachorro", "Leão", "Girafa"]</p>

    <?php
        // Percorrendo o array de animais com o loop do while
        
        $i = 0;
        
        do {
            echo $animais[$i] . "<br>";
            $i++;
        } while ($i < count($animais));
    ?>

    <hr>

    <p>Foreach - Percorrendo Arrays (O foreach funciona somente em arrays e objetos)</p>

    <p>Percorra o array de animais abaixo utilizando foreach com a sintaxe de posicao e valor, e retorne a seguinte frase "Posicao : x Indice: y", onde x e y serão substituídos pelas posições e índices do array de animais</p>
    <p style="padding:5px;background-color:#f5f5f5;border-radius:10px;color:blue;line-height:20px;font-size:16px">$animais = ["Gato", "Cachorro", "Leão", "Girafa"]</p>

    <?php
        // Percorrendo o array de animais com o loop foreach
        // O foreach recebe um array ou objeto, no nosso caso iremos informar um array e sabemos que o foreach tem um formato onde ele pega a posição e o indice do elemento corrente
        
        /* Foreach em ingês é 'para cada' e 'as' é 'como'. Então, ao pé da letra, considerando o array $animais, podemos pensar em "para cada (animais como animal)".
        
        Ou seja, estamos tratando a 'unidade' do array, cada elemento. 
        
        Se o array for associativo (composto por pares de chave => valor (key => value), considerando um array $informacoesPessoais = ["nome" => "Marcelo", "idade" => 32], já temos: "para cada ($informacoesPessoais como chave => valor)", onde temos como pares chave/valor exatamente "nome/Marcelo", "idade/32".*/

        /*  para cada elemento, cria a variavel $posicao contendo o valor da posicao daquele elemento percorrido dentro do array
        e tambem cria a variavel $indice contendo o valor do indice do elemento percorrido dentro do array */
       
        
        /* Ou seja no futuro ao executar o codigo do foreach percorrendo o array de animais, 
        teremos as variaveis posicao e indice com estes valores abaixo

        posicao | indice
        0       | Gato
        1       | Cachorro
        2       | Leao
        3       | Girafa

        */

        foreach ($animais as $posicao => $indice) {
            echo "Posição: " . $posicao . " Índice: " . $indice . "<br>";
        }
    ?>

    <hr>

    <p>Foreach - Percorrendo Arrays (O foreach funciona somente em arrays e objetos)</p>

    <p>Percorra o array de animais abaixo utilizando foreach com a sintaxe de valor.</p>
    <p style="padding:5px;background-color:#f5f5f5;border-radius:10px;color:blue;line-height:20px;font-size:16px">$animais = ["Gato", "Cachorro", "Leão", "Girafa"]</p>

    <?php
        /* o foreach recebe um array ou objeto, no nosso caso iremos informar um array e sabemos que o foreach
        tem essa segunda sintaxe no formato onde ele pega apenas o indice do elemento corrente */

        /*  para cada elemento, cria a variavel $animal contendo o valor do indice do elemento percorrido dentro do array */
    
        /* Ou seja no futuro ao executar o codigo do foreach percorrendo o array de animais, 
        teremos a variavel $animal com estes valores abaixo

            animal
            Gato
            Cachorro
            Leao
            Girafa
        */

        foreach ($animais as $animal) {
            echo "Índice: " . $animal . "<br>";
        }
    ?>

    <hr>

</body>
</html>