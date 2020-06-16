<?php
    // try - ira tentar executar instrucoes, caso falhe ira cair no catch, que ira capturar um erro e retornar o possivel erro para nos
    try {
        // instanciando conexao com o banco de dados atraves da classe PDO
        $dbh = new PDO('mysql:host=localhost;dbname=aula_pdo;charset=utf8mb4;port=3306', 'root', '');
        
        /* $listaUsuarios = $dbh->query('SELECT * from usuarios');

        echo "<pre>";
        var_dump($listaUsuarios->fetchAll(PDO::FETCH_ASSOC));
        echo "</pre>";

        foreach($listaUsuarios as $usuario) {
            echo "<pre>";
            echo $usuario["nome"] . "<br>";
            echo $usuario["sobrenome"] . "<br>";
            echo $usuario["email"] . "<br>";
            echo $usuario["senha"] . "<br>"; 
            echo "</pre>";
        }
        */
        
    } catch (PDOException $e) {
        print "Erro!: " . $e->getMessage() . "<br/>";
        die();
    }
?>