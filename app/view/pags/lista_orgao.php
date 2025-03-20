<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgãos cadastrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./view/meuCSS/mainCss.css">
</head>

<body>
    <div id="principal">
        <h2>Lista de órgãos cadastrados</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Identificador</th>
                    <th>Órgão</th>
                    <th>Cidade</th>
                    <th>Bairro</th>
                    <th>Logradouro</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($orgaos as $o) {
                ?>
                    <tr onclick="">
                        
                            <td><?= $o->getId() ?></td>
                            <td><?= $o->getNome() ?></td>
                            <td><?= $o->getCidade() ?></td>
                            <td><?= $o->getBairro() ?></td>
                            <td><?= $o->getLogradouro() ?></td>
                            <td><button type="button" class="btn 
                            btn-danger">Deletar</button></td>
                            <td><a href="http://localhost:8080/?classe=orgao&metodo=mostraModificar&id=
                            <?=$o->getId()?>"><button type="button" class="btn 
                            btn-secondary">Info</button></a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>