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
    //    Limpar()
}

function Limpar() {
    let titulo = document.getElementById("inputTitulo").placeholder="Título do artigo ou texto. Ex: Sobre a autonomia do estudante na educação a distância."
    let autor = document.getElementById("inputAutor").placeholder="Nome e breves informações sobre quem escreveu o texto. Ex: Otto Peters, professor alemão especialista em ensino a distância."
    let publicacao =  document.getElementById("inputPublicacao").placeholder="Informações contextuais do material. Ex: artigo publicado na revista X, livro publicado pela editora Y no ano 2000."
    let assunto = document.getElementById("inputAssunto").placeholder="O tema principal do texto. Geralmente está no resumo, no título ou nos primeiros parágrafos. Ex: teoria cognitiva da aprendizagem multimídia."
    let recursos =  document.getElementById("inputRecursos").placeholder="Fontes de informações apresentadas pelo autor. Ex: livros e autores, documentos, experimentos, entrevistas."
    let teses = document.getElementById("inputTeses").placeholder="A principal ideia apresentada/defendida pelo autor. Ex: mostrar que a educação aberta facilita a aprendizagem autônoma."
    let evidencias = document.getElementById("inputEvidencias").placeholder="Como o autor chegou a essa ideia ou conclusão. Ex: dados estatísticos provenientes do Censo do IBGE."
    let desconhecidos = document.getElementById("inputDesconhecidos").placeholder="Anote para pesquisa posterior palavras ou conceitos que você desconhece. Ex: memória de trabalho e memória sensorial."
    let contribuicao =  document.getElementById("inputContribuicao").placeholder="Relações com seu contexto acadêmico/profissional. Ex: conhecer a teoria de Piaget ajuda a compreender os estágios de desenvolvimento das crianças com que trabalho."
    let interpretacoes = document.getElementById("inputInterpretacoes").placeholder="Relações com outras ideias, autores e conhecimentos prévios. Ex: Piaget se encaixa no construtivismo; Vygotsky, por sua vez, é socioconstrutivista porque dá mais importância às interações."
    let problemas = document.getElementById("inputProblemas").placeholder="Ressalvas (justificadas) às ideias apresentadas no texto. Ex: o estudo é interessante, mas se restringe a populações urbanas, ignorando o contexto rural."
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