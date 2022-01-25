function Salvar() {
    let formulario = []
    let titulo = document.getElementById("inputTitulo").innerText
    let autor = document.getElementById("inputAutor").innerText
    let publicacao =  document.getElementById("inputPublicacao").innerText
    let assunto = document.getElementById("inputAssunto").innerText
    let recursos =  document.getElementById("inputRecursos").innerText
    let teses = document.getElementById("inputTeses").innerText
    let evidencias = document.getElementById("inputEvidencias").innerText
    let desconhecidos = document.getElementById("inputDesconhecidos").innerText
    let contribuicao =  document.getElementById("inputContribuicao").innerText
    let interpretacoes = document.getElementById("inputInterpretacoes").innerText
    let problemas = document.getElementById("inputProblemas").innerText

    formulario.push(titulo, autor, publicacao, assunto, recursos, teses, evidencias, desconhecidos, contribuicao, interpretacoes, problemas)
    limpar()
}

function Limpar() {
    
}

function Imprimir() {
    
}

function Visualizar() {
    let titulo = document.getElementById("inputTitulo").innerText
    tela_impressao = window.open('about:blank')
    tela_impressao.document.write(titulo)
    tela_impressao.window.print()
}