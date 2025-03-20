<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários cadastrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../meuCSS/mainCss.css">
</head>

<body>
    <div id="principal">
        <h2>Todos os usuários</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                
                </tr>
            </thead>
            
            <tbody>
                <?php
                    foreach ($usuario as $u) {
                    ?>
                    <tr onclick="">
                        <td><?= $u->getNome() ?></td>
                        <td><?= $u->getCPF() ?></td>
                        <td><?= $u->getNascimento() ?></td>
                        <td><?= $u->getRegime() ?></td>
                        <td><?= $u->getTelefone1() ?></td>
                        <td><?= $u->getTelefone2() ?></td>
                        <td><?= $u->getCidade() ?></td>
                        <td><?= $u->getBairro() ?></td>
                        <td><?= $u->getLogradouro() ?></td>
                        <td><?= $u->getNumero() ?></td>
                        <td><?= $u->getFormação() ?></td>
                        <td><?= $u->getSituacao() ?></td>
                        <td><?= $u->getIdInstituicao() ?></td>
                        <td><a href="http://localhost:8080/?classe=usuario&metodo=mostraModificar&id=<?=$o->getId()?>"><button type="button" class="btn 
                        btn-secondary">Deletar</button>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <button type="button" class="btn btn-danger">Novo</button></td>

    </div>
</body>

</html>