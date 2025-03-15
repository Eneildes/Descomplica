<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./view/meuCSS/mainCss.css">
</head>
<body>
    <div id="principal">
        <form >
            <legend>Cadastre o órgão</legend>   
            <fieldset>
                <div class="form-group">
                    <label for="orgao" class="form-label">Insira o nome do órgão</label>               
                    <input type="text" class="form-control " id="orgao" placeholder="Nome do orgão">
                </div>
                <div class="form-group">
                    <label for="cidade" class="form-label">Insira o nome da cidade</label>
                    <input type="text" class="form-control" id="cidade" placeholder="Nome da cidade"  >
                </div>
                <div class="form-group">                
                    <label for="bairro" class="form-label">Insira o nome do bairro</label>
                    <input type="text" class="form-control" id="bairro" placeholder="Nome do bairro">
                </div>
                <div class="form-group">
                    <label for="logradouro" class="form-label">Insira o logradouro</label>
                    <input type="text" class="form-control" id="logradouro" placeholder="Logradouro">
                </div>
                <button type="button" class="btn btn-primary" onclick="cadastrar()">Registrar</button>
            </fieldset>
            
            
        </form>
    </div>
    <script src="requests/orgaoAjax.js"></script>
</body>
</html>