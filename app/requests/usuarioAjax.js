cadastrar = ()=>{
    let usuario = new Object();
    usuario.nome = document.querySelector("#usuario").value;
    usuario.data_nascimento = document.querySelector("#nascimento").value;
    usuario.regime = document.querySelector("#regime").value;
    usuario.telefone1 = document.querySelector("#telefone1").value;
    usuario.telefone2 = document.querySelector("#telefone2").value;
    usuario.cideda = document.querySelector("#cidade").value;
    usuario.bairro = document.querySelector("#bairro").value;
    usuario.logradouro = document.querySelector("#logradouro").value;
    usuario.numero = document.querySelector("#numero").value;
    usuario.situacao = document.querySelector("#situacao").value;
    usuario.instituicao = document.querySelector("#instituicao").value;
    let xml = new XMLHttpRequest();
    xml.open("POST",'index.php?classe=usuario&metodo=cadastrar');
    xml.setRequestHeader("content-type",'application/json');
    xml.onreadystatechange = ()=>{
        if(xml.readyState == 4 && xml.status == 200){
            alert(xml.responseText);
        }
    }
    xml.send(JSON.stringify(usuario));
}
atualizar = ()=>{
    let usuario = new Object();
    usuario.nome = document.querySelector("#usuario").value;
    usuario.data_nascimento = document.querySelector("#nascimento").value;
    usuario.regime = document.querySelector("#regime").value;
    usuario.telefone1 = document.querySelector("#telefone1").value;
    usuario.telefone2 = document.querySelector("#telefone2").value;
    usuario.cideda = document.querySelector("#cidade").value;
    usuario.bairro = document.querySelector("#bairro").value;
    usuario.logradouro = document.querySelector("#logradouro").value;
    usuario.numero = document.querySelector("#numero").value;
    usuario.situacao = document.querySelector("#situacao").value;
    usuario.instituicao = document.querySelector("#instituicao").value;
    
    let xml = new XMLHttpRequest();
    xml.open("POST",'index.php?classe=usuario&metodo=atualizar');
    xml.setRequestHeader("content-type",'application/json');

    xml.onreadystatechange = ()=>{
        if(xml.readyState == 4 && xml.status == 200){
            alert(xml.responseText);
        }
    }
    xml.send(JSON.stringify(usuario));
}