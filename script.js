function Salvar()
        {
            let res = document.getElementById("res")
            let titulo = document.getElementById("inputTitulo").value
            let autor = document.getElementById("inputAutor").value
            let publicacao =  document.getElementById("inputPublicacao").value
            let assunto = document.getElementById("inputAssunto").value
            let recursos =  document.getElementById("inputRecursos").value
            let teses = document.getElementById("inputTeses").value
            let evidencias = document.getElementById("inputEvidencias").value
            let desconhecidos = document.getElementById("inputDesconhecidos").value
            let contribuicao =  document.getElementById("inputContribuicao").value
            let interpretacoes = document.getElementById("inputInterpretacoes").value
            let problemas = document.getElementById("inputProblemas").value
            $.ajax({
                url: "http://localhost/cgi-bin/mysql_insert.py",
                type: "post",
                datatype: "html",
                data: { titulo, autor, publicacao, assunto, recursos, teses, evidencias, desconhecidos, contribuicao, interpretacoes, problemas},
                success: function(response){
                        $("#res").html(response);
                        console.log("Salvando dados...");
                    }
            });
        

        /*
function Salvar() {
    let res = document.getElementById("res")
    let titulo = document.getElementById("inputTitulo").value
    let autor = document.getElementById("inputAutor").value
    let publicacao =  document.getElementById("inputPublicacao").value
    let assunto = document.getElementById("inputAssunto").value
    let recursos =  document.getElementById("inputRecursos").value
    let teses = document.getElementById("inputTeses").value
    let evidencias = document.getElementById("inputEvidencias").value
    let desconhecidos = document.getElementById("inputDesconhecidos").value
    let contribuicao =  document.getElementById("inputContribuicao").value
    let interpretacoes = document.getElementById("inputInterpretacoes").value
    let problemas = document.getElementById("inputProblemas").value
    
    console.log(`${formulario}`)
    document.getElementById("res").innerHTML = `${titulo}`
    console.log(`${titulo}`)
    document.getElementById("res").innerHTML += `${autor}`
    console.log(`${autor}`)
    document.getElementById("res").innerHTML += `${publicacao}`
    */
        Limpar()
}

function Limpar() {
    
}

function Imprimir() {
    print()
}

function Visualizar() {
    tela_impressao = window.open('about:blank')
    tela_impressao.document.write(titulo)
    tela_impressao.window.print()
    res.innerHTML = `${formulario}`
}