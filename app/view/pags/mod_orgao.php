<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do orgão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./view/meuCSS/mainCss.css">
</head>
<body>
    <div id="principal">
        <form >
            <legend>Informações do órgão</legend>   
            <fieldset>
                <div class="form-group">
                    <label for="orgao" class="form-label">Nome do órgão</label>               
                    <input type="text" class="form-control " id="orgao" placeholder="Nome do orgão" value="<?=$orgao->getNome()?>">
                </div>
                <div class="form-group">
                    <label for="cidade" class="form-label">Nome da cidade do órgão</label>
                    <input type="text" class="form-control" id="cidade" placeholder="Nome da cidade" value="<?=$orgao->getCidade()?>" >
                </div>
                <div class="form-group">                
                    <label for="bairro" class="form-label">Nome do bairro do órgão</label>
                    <input type="text" class="form-control" id="bairro" placeholder="Nome do bairro" value="<?=$orgao->getBairro()?>">
                </div>
                <div class="form-group">
                    <label for="logradouro" class="form-label">Nome do logradouro do órgão</label>
                    <input type="text" class="form-control" id="logradouro" placeholder="Logradouro" value="<?=$orgao->getLogradouro()?>">
                </div>
                <input type="hidden" id="id_orgao" value="<?=$orgao->getId()?>">
                <button type="button" class="btn btn-primary" onclick="atualizar()">Atualizar</button>
            </fieldset>
            
            
        </form>
    </div>
    <script src="requests/orgaoAjax.js"></script>
</body>
</html>