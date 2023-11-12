var candyPrice = document.querySelector("#candyPrice").textContent
var rouladePrice = document.querySelector("#rouladePrice").textContent
var cakePrice = document.querySelector("#cakePrice").textContent        

var candy = document.querySelector("#candy")
var roulade = document.querySelector("#roulade")
var cake = document.querySelector("#cake")

candy.addEventListener("input", () => {
    counting()
})

roulade.addEventListener("input", () => {
    counting()
})

cake.addEventListener("input", () => {
    counting()
})

function counting(){
    var completelyPrice = Number(candyPrice) * Number(candy.value) + Number(rouladePrice) * Number(roulade.value) + Number(cakePrice) * Number(cake.value)
    var paragraph = document.querySelector("#completelyPrice")
    paragraph.textContent = "Celková cena: " + completelyPrice + " Kč"
}