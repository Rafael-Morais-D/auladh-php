<?php
    $stringJson = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

    // transforma a string json em um objeto
    $objetoStringJson = json_decode($stringJson);

    // visualizando o objeto retornado
    echo "<pre>";
        var_dump($objetoStringJson);
    echo "</pre>";

    // exibindo conteudo da propriedade A do objeto
    echo "Propriedade A do objeto: " . $objetoStringJson->a;

    // transforma a string json em um array devido ter o segundo parametro como true
    $arrayStringJson = json_decode($stringJson, true);

    // visualizando o array retornado
    echo "<pre>";
        var_dump($arrayStringJson);
    echo "</pre>";

    // exibindo conteudo da propriedade A do array
    echo "Propriedade A do array: " . $arrayStringJson["a"];
?>