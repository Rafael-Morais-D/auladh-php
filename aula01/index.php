<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01 - PHP</title>
</head>
<body>
    <?php 
            // para criar uma variavel no PHP basta usar o $ e o nome da variável
        $titulo = "Primeira Aula de PHP";
    ?>

    <h1>
        <?php
            // para exibir algo na tela com PHP utilizamos echo
            echo $titulo;
        ?>
    </h1>

    <hr>
    <h1>Condicionais</h1>
    
    <p>IF / ELSE</p>
    
    <p>Crie uma função que valide se uma pessoa pode votar ou não. De forma que se a pessoa 
    tiver a idade entre 16 e 17 ou for maior de 70, iremos mostrar na tela Voto Facultativo, caso contrário, se for maior de idade iremos motrar na tela voto obrigatória, e caso for menor de 16 não vota.</p>
    
    <?php
        function podeVotar($idadeEleitor){
            if($idadeEleitor >= 16 && $idadeEleitor < 18 || $idadeEleitor > 70){
                return "Voto Facultativo";
            } else if($idadeEleitor >= 18 && $idadeEleitor <= 70) {
                return "Voto Obrigatório";
            } else {
                return "Não Vota";
            }
        }
    ?>

    R: Foi criado no código a função podeVotar e foi informado como parâmetro o valor 17, como retorno da função tivemos: <br> <?php echo podeVotar(17); ?>

    <hr>
    <p>SWITCH CASE</p>

    <p>Crie uma função que valide se um número é 0 e retorne que é igual a 0, se é 1 e retorne que é igual a a 1, ou se é 2 e retorne que é igual a 2. Caso contrário retorne que o número é maior que 2. Utilizando switch case.</p>

    <?php
        function validaNumero($i){
            switch ($i) {
                case 0:
                    return "$i igual a 0";
                    break;
                case 1:
                    return "$i igual a 1";
                    break;
                case 2:
                    return "$i igual a 2";
                    break;
                default:
                    return "Qualquer número maior que 2";
                    break;
            }
        }
    ?>

    R: Foi criado no código a função validaNumero e foi informado como parâmetro o número 2, como retorno da função tivemos: <br> <?php echo validaNumero(2); ?>

    <p>Crie uma função que receba o gênero de uma pessoa, onde ela poderá informar Masculino ou Feminino, se informar Masculino iremos retornar a mensagem Gênero informado foi masculino, se informar Feminino iremos retornar a mensagem Gênero informado foi feminino, caso contrário iremos retornar Outros. Utilizando switch case.</p>

    <?php
        function validaGenero($genero){
            switch ($genero) {
                case "Masculino":
                    return "Gênero informado foi $genero";
                    break;
                case "Feminino":
                    return "Gênero informado foi $genero";
                    break;
                default:
                    return "Outros";
                    break;
            }
        }
    ?>

R: Foi criado no código a função validaGenero e foi informado como parâmetro a string Feminino, como retorno da função tivemos: <br> <?php echo validaGenero("Feminino"); ?>

<hr>
<h1>Arrays</h1>

<p>Array Simples</p>
<?php
    // Declarando array vazio
    $animais = [];
    
    // O Array simples só tem os valores, não nos preocupamos em controlar suas posições
    $animais = ["Leão", "Girafa", "Cachorro", "Gato"];

    // Uma forma de debugar variaveis no php para saber os tipos, valores, tamanho dos valores
    // Percorrendo array animais para destrinchar o conteúdo
    echo "<pre>";
        var_dump($animais);
    echo "</pre>";
?>

<p>Array Associativo</p>

<p>Ocorre quando necessitamos adicionar valores para as posicoes do nosso array</p>

<?php
    // O Array associativo nos da a possibilidade de atribuir valores as nossa posições
    $usuario = [
        "nome" => "Victor",
        "email" => "vtorres@digitalhouse.com",
        "senha" => "123456"
    ];

    // Percorrendo array usuario para destrinchar o conteúdo
    echo "<pre>";
        var_dump($usuario);
    echo "</pre>";

    // Montando frase pegando uma posição do array sem percorrer ele todo
    echo "O nome do usuário é " . $usuario["nome"];
?>

<p>Array de Arrays / Objetos</p>

<p>Ocorre quando temos um array que dentro dele contém outros elementos, onde, cada elemento possui como valor um novo array relacionado a ele.</p>
<?php
    $listaDeUsuarios = [
        "usuario1" => [
            "nome" => "Victor",
            "email" => "vtorres@digitalhouse.com",
            "senha" => "123456"
        ],
        "usuario2" => [
            "nome" => "Marcelo",
            "email" => "mdiament@digitalhouse.com",
            "senha" => "123456"
        ]
    ];

    echo "Nome do usuario 1 é: " . $listaDeUsuarios["usuario1"]["nome"] . " e o nome do usuario 2 é: " . $listaDeUsuarios["usuario2"]["nome"];
?>

<hr>
    <h1>Bônus enviado pelo Marcelão</h1>

    <?php

        echo "<style>code {background-color:#f5f5f5;color:red;padding:5px;margin:5px auto;line-height:22px;}i{color:red;font-weight:bold;}</style>";

        $arr = [4,1,3,2,8,6,7,5,9];
        echo "<h3>\$arr</h3><p>um array simples</p><code>[";
        foreach($arr as $index){
            echo $index . " ";
        }
        echo "]</code><br/><hr/></br>";
        
        sort($arr);
        echo "<h3>sort(\$arr)</h3><p><i>sort</i> ordena um array simples em ordem ascendente</p><code>[";
        foreach($arr as $index){
            echo $index . " ";
        }
        echo "]</code><br/><hr/></br>";
        
        rsort($arr);
        echo "<h3>rsort(\$arr)</h3><p><i>rsort</i> ordena um array simples em ordem decrescente (R para reverso)</p><code>[";
        foreach($arr as $index){
            echo $index . " ";
        }
        echo "]</code><br/><hr/></br>";
        
        $arrAssoc = ["nome"=>"Marcelo", "idade"=>32, "país"=>"Brasil","profissão"=>"Front End Developer"];
        echo "<h3>\$arrAssoc</h3><p>um array associativo</p><code>[";
        foreach($arrAssoc as $key => $value){
            echo $key . " => " . $value . " ";
        }
        echo "]</code><br/><hr/></br>";
        
        asort($arrAssoc);
        echo "<h3>asort(\$arrAssoc)</h3><p><i>asort</i> ordena um array associativo em ordem ascendente (de acordo com seus valores)</p><code>[";
        foreach($arrAssoc as $key => $value){
            echo $key . " => " . $value . " ";
        }
        echo "]</code><br/><hr/></br>";
        
        arsort($arrAssoc);
        echo "<h3>arsort(\$arrAssoc)</h3><p><i>arsort</i> ordena um array associativo em ordem decrescente (de acordo com seus valores) (R para reverso)</p><code>[";
        foreach($arrAssoc as $key => $value){
            echo $key . " => " . $value . " ";
        }
        echo "]</code><br/><hr/></br>";
        
        ksort($arrAssoc);
        echo "<h3>ksort(\$arrAssoc)</h3><p><i>ksort</i> ordena um array associativo em ordem ascendente (de acordo com suas chaves) (K para keys, chaves em inglês)</p><code>[";
        foreach($arrAssoc as $key => $value){
            echo $key . " => " . $value . " ";
        }
        echo "]</code><br/><hr/></br>";
        
        krsort($arrAssoc);
        echo "<h3>krsort(\$arrAssoc)</h3><p><i>krsort</i> ordena um array associativo em ordem decrescente (de acordo com suas chaves) (K para keys, chaves em inglês e R para reverso)</p><code>[";
        foreach($arrAssoc as $key => $value){
            echo $key . " => " . $value . " ";
        }
        echo "]</code><br/><hr/></br>";
        
    ?>

</body>
</html>