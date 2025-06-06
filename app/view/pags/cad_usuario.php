<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="../meuCSS/mainCss.css">
    </head>

    <body>
        <div id="principal">
            <form>

                <legend>Cadastre aqui o usuário </legend>
                <fieldset>
                    <div class="form-group">
                        <label for="nome" class="form-label">Insira o nome do funcionário</label>
                        <input type="text" class="form-control " id="orgao">
                    </div>
                    <div class="form-group">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha">
                    </div>
                    <div class="form-group">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="cpf">
                    </div>
                    <div class="form-group">
                        <label for="data_nascimento" class="form-label">Data de nascimento</label>
                        <input type="date" class="form-control" id="data_nasc">
                    </div>
                    <div class="form-group">
                        <label for="regime" class="form-label">Regime trabalhista</label>
                        <input type="text" class="form-control" id="regime">
                    </div>
                    <div class="form-group">
                        <label for="telefone" class="form-label"> Telefone principal</label>
                        <input type="text" class="form-control " id="telefone">
                    </div>
                    <div class="form-group">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="telefone">
                    </div>
                    <div class="form-group">
                        <label for="cidade" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="cidade">
                    </div>
                    <div class="form-group">
                        <label for="bairro" class="form-label">Bairro</label>
                        <input type="text" class="form-control" id="bairro">
                    </div>
                    <div class="form-group">
                        <label for="logradouro" class="form-label">Logradouro</label>
                        <input type="text" class="form-control" id="logradouro">
                    </div>

                    <div class="form-group">
                        <label for="numero" class="form-label">Numero residencial</label>
                        <input type="text" class="form-control" id="numero">
                    </div>
                    
                </fieldset>


                <select class="form-select">
                    <option selected disabled>Nível de formação</option>
                    <option value="1">Bacharel</option>
                    <option value="2">Licenciado</option>
                    <option value="3">Pós-graduado</option>
                    <option value="3">Mestre</option>
                    <option value="4">Doutor</option>
                </select>


                <select class="form-select">
                    <option selected disabled>Situação atual</option>
                    <option value="1">Ativo</option>
                    <option value="2">Inativo</option>
                    <option value="3">Afastado</option>
                </select>

                <nav class="navbar navbar-light">
                    <label for="buscar_orgao" class="form-label">Pesquisar orgão</label>
                    <input class="form-control mr-sm-2" id="buscar_orgao" type="search" placeholder="Buscar Órgão"
                        aria-label="Search">
                    <div class="list-group">
                        <span  class="list-group-item list-group-item-action " >
                            Secretária da educação
                        </span>
                        <span class="list-group-item list-group-item-action">2 de julho</span>

                    </div>
                </nav>

                <p>Não encontrou o órgão? Cadastre-o <a href="cad_orgao.html"
                        class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">aqui</a>
                </p>
                <button type="submit" class="btn btn-primary">Registrar</button>

            </form>
        </div>
    </body>

    </html>