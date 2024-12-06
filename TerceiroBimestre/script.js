let ajax = new XMLHttpRequest();

ajax.open('GET', "http://viacep.com.br/");

ajax.onload = function() {
    if (ajax.status == 200) {
        console.log("Resposta: ", JSON.parse(ajax.responseText));
    } else{
        console.error("Erro: ", ajax.status, ajax.statusText);
    }
}

ajax.send(null);