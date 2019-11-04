function navegarAjax(url, seletor) {
    if (!url || !seletor) {
        //se nao estiverem preenchidos
        return
    } else {
        const elemento = document.querySelector(seletor)
        fetch(url)
            .then(resposta => resposta.text())
            .then(html => {
                elemento.innerHTML = html
            })
    }

}
const main = document.querySelector('#corpo')
const links = document.querySelectorAll('[sl-fonte]')
for (i = 0; i < links.length; i++) {
    const origem = links[i].attributes['sl-fonte'].value
    const destino = links[i].attributes['sl-destino'].value
    links[i].onclick = e => {
        //quando clicar em um dos links. bloquear pra nao redirecionar
        e.preventDefault()
        navegarAjax(origem, destino)

    }



}