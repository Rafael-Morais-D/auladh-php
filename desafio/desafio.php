<?php
    $tituloDaPagina = "Métodos | PHP - Aula 02";
    require_once("./inc/head.php");
?>
<body>
    <?php require_once("./inc/header.php"); ?>
    <main class="container my-5">
    <h1>DESAFIO PARA A AULA QUE VEM!</h1>

    <p>Percorrer o array $listaDeUsuarios (está no arquivo aula01/index.php entre as linhas 140 e 151 no repositório do Victor) e mostrar cada usuário no  HTML, dentro de uma tabela ou lista.</p>
    <p>Aproveitem para treinar o CSS também e entregarem um layout bacana! =)</p>
    <p>Conforme forem finalizando mandem um print aqui no grupo pra gente ver!</p>
    <p>PS.: infelizmente o GitHub Pages não aceita PHP... então mandem print mesmo e depois da aula que vem mandem os links dos repositórios de vocês com o desafio completo (ou parcial)!</p>

    <pre style="padding:5px;background-color:#f5f5f5;border-radius:10px;color:blue;line-height:20px;  font-size:16px">
        $listaDeUsuarios = [
            "usuario1" => [
                "nome" => "Victor",
                "email" => "vtorres@digitalhouse.com",
                "senha" => "123456"
            ],
            "usuario2" => [
                "nome" => "Marcelo",
                "email" => "mdiament@digitalhouse.com",
                "senha" => "789123"
            ]
        ];</pre>

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
                    "senha" => "789123"
                ]
            ];
        ?>

        <table class="table mt-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Senha</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaDeUsuarios as $usuario): ?>
                    <tr>
                        <td><?= $usuario["nome"]; ?></td>
                        <td><?= $usuario["email"]; ?></td>
                        <td><?= $usuario["senha"]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </main>
   <?php require_once("./inc/footer.php"); ?>
</body>
</html>

    <?php
    /*

        $listaDeUsuarios = [
            "usuario1" => [
                "nome" => "Victor",
                "email" => "vtorres@digitalhouse.com",
                "senha" => "123456"
            ],
            "usuario2" => [
                "nome" => "Marcelo",
                "email" => "mdiament@digitalhouse.com",
                "senha" => "789123"
            ]
        ];

        foreach ($listaDeUsuarios as $usuario => $array) {
            foreach ($listaDeUsuarios[$usuario] as $categoria => $valor) {
                echo "Usuário: " . $usuario . " Categoria: " . $categoria . " Valor: " . $valor . "<br>"; 
            }
        }

        */
    ?>