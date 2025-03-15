cadastrar = ()=>{
    let orgao = new Object();
    orgao.nome = document.querySelector("#orgao").value;
    orgao.cidade = document.querySelector("#cidade").value;
    orgao.bairro = document.querySelector("#bairro").value;
    orgao.logradouro = document.querySelector("#logradouro").value;

    let xml = new XMLHttpRequest();
    xml.open("POST",'index.php?classe=orgao&metodo=cadastrar');
    xml.setRequestHeader("content-type",'application/json');

    xml.onreadystatechange = ()=>{
        if(xml.readyState == 4 && xml.status == 200){
            alert(xml.responseText);
        }
    }
    xml.send(JSON.stringify(orgao));
}
atualizar = ()=>{
    let orgao = new Object();
    orgao.nome = document.querySelector("#orgao").value;
    orgao.cidade = document.querySelector("#cidade").value;
    orgao.bairro = document.querySelector("#bairro").value;
    orgao.logradouro = document.querySelector("#logradouro").value;
    orgao.id = document.querySelector("#id_orgao").value;
    
    let xml = new XMLHttpRequest();
    xml.open("POST",'index.php?classe=orgao&metodo=atualizar');
    xml.setRequestHeader("content-type",'application/json');

    xml.onreadystatechange = ()=>{
        if(xml.readyState == 4 && xml.status == 200){
            alert(xml.responseText);
        }
    }
    xml.send(JSON.stringify(orgao));
}