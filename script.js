function Salvar() {
    let formulario = []
    let res = document.getElementById("res")
    let titulo = document.getElementById("inputTitulo").innerHTML
/*    titulo = titulo.innerText*/
    formulario.push(titulo)
    let autor = document.getElementById("inputAutor").innerText
    formulario.push(autor)
    let publicacao =  document.getElementById("inputPublicacao").innerText
    formulario.push(publicacao)
    let assunto = document.getElementById("inputAssunto").innerText
    formulario.push(assunto)
    let recursos =  document.getElementById("inputRecursos").innerText
    let teses = document.getElementById("inputTeses").innerText
    let evidencias = document.getElementById("inputEvidencias").innerText
    let desconhecidos = document.getElementById("inputDesconhecidos").innerText
    let contribuicao =  document.getElementById("inputContribuicao").innerText
    let interpretacoes = document.getElementById("inputInterpretacoes").innerText
    let problemas = document.getElementById("inputProblemas").innerText
    
    /*console.log(`${formulario}`)*/
    /*document.getElementById("res").innerHTML = `${titulo}`*/
    console.log(`${titulo}`)
    document.getElementById("res").innerHTML += `${autor}`
    console.log(`${autor}`)
    document.getElementById("res").innerHTML += `${publicacao}`
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