
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Informações do usuário</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="./view/meuCSS/mainCss.css">
</head>
<body>
    <div id="principal">
        <form >
            <legend>Informações do usuário</legend>   
            <fieldset>
                <div class="form-group">
                        <label for="nome" class="form-label">Nome</label>                            <input type="text" class="form-control " id="funcionario" value="<?=$usuario->getNome()?>">
                            </div>
                <div class="form-group">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="cpf" value="<?=$usuario->getCpf()?>">
                </div>
                <div class="form-group">                        <label for="data_nascimento" class="form-label">Data de nascimento</label>
                    <input type="date" class="form-control" id="data_nasc" value="<?=$usuario->getNascimento()?>">
                </div>
                <div class="form-group">
                    <label for="regime" class="form-label">Regime trabalhista</label>
                    <input type="text" class="form-control" id="regime" value="<?=$usuario->getRegime()?>">
                </div>                    
                <div class="form-group">
                    <label for="telefone1" class="form-label"> Telefone principal</label>
                    <input type="text" class="form-control " id="telefone" value="<?=$usuario->getTelefone1()?>">
                </div>
                <div class="form-group">
                    <label for="telefone2" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="telefone" value="<?=$usuario->getTelefone2()?>">
                </div>
                <div class="form-group">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="cidade" value="<?=$usuario->getCidade()?>">
                </div>
                <div class="form-group">
                    <label for="bairro" class="form-label">Bairro</label>
                    <input type="text" class="form-control" id="bairro" value="<?=$usuario->getBairro()?>">
                </div>                    
                <div class="form-group">
                    <label for="logradouro" class="form-label">Logradouro</label>
                    <input type="text" class="form-control" id="logradouro" value="<?=$usuario->getLogradouro()?>">
                </div>
                <div class="form-group">
                    <label for="numero" class="form-label">Numero residencial</label>
                    <input type="text" class="form-control" id="numero" value="<?=$usuario->getNumero()?>">                    </div>
            </fieldset>
                <select class="form-select">
                    <option selected disabled>Nível de formação</option>
                    <option value="1" <?php if ($usuario->getNivelFormacao() == 1) echo 'selected'; ?>>Bacharel</option>                        <option value="2" <?php if ($usuario->getNivelFormacao() == 2) echo 'selected'; ?>>Licenciado</option>
                    <option value="3" <?php if ($usuario->getNivelFormacao() == 3) echo 'selected'; ?>>Pós-graduado</option>
                    <option value="3" <?php if ($usuario->getNivelFormacao() == 4) echo 'selected'; ?>>Mestre</option>                    <option value="4" <?php if ($usuario->getNivelFormacao() == 5) echo 'selected'; ?>>Doutor</option>
                </select>
                <select class="form-select">
                    <option selected disabled>Situação atual do usuário</option>
                    <option value="1">Ativo</option>
                    <option value="2">Inativo</option>
                    <option value="3">Afastado</option>
                </select>
                <nav class="navbar navbar-light">
                    <label for="buscar_orgao" class="form-label">Pesquisar orgão</label>
                    <input class="form-control mr-sm-2" id="buscar_orgao" type="search" placeholder="Buscar Órgão" aria-label="Search">
                    <div class="list-group">
                        <span  class="list-group-item list-group-item-action " >Secretária da educação</span>
                        <span class="list-group-item list-group-item-action">2 de julho</span>
                    </div>
                </nav>
                <p>Não encontrou o órgão? Cadastre-o <a href="cad_orgao.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">aqui</a>              
                </p>
                <input type="hidden" id="id_orgao" value="<?=$orgao->getId()?>">
                <button type="button" class="btn btn-primary" onclick="atualizar()">Atualizar</button>
            </fieldset>
            
            
        </form>
    </div>
    <script src="requests/usuarioAjax.js"></script>

</body>
</html>