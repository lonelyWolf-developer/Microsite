function deleteActiveElements(){
    var activeElements = Array.from(document.getElementsByClassName("active"))

    activeElements.forEach(element => {
        element.classList.remove("active")
    });
}

window.addEventListener("scroll", function(){

    deleteActiveElements()
    
    var weDo = document.getElementById("weDo").getBoundingClientRect()
    var weDoLink = document.getElementById("1")

    var weAre = document.getElementById("weAre").getBoundingClientRect()
    var weAreLink = document.getElementById("2")

    var ref = document.getElementById("ref").getBoundingClientRect()
    var refLink = document.getElementById("3")

    var ord = document.getElementById("ord").getBoundingClientRect()
    var ordLink = document.getElementById("4")

    var con = document.getElementById("con").getBoundingClientRect()
    var conLink = document.getElementById("5")

    if(weDo.top <= 0){
        deleteActiveElements()
        weDoLink.classList.add("active")
    }
    
    if(weAre.top <= 0){
        deleteActiveElements()
        weAreLink.classList.add("active")                
    }
    
    if(ref.top <= 0){
        deleteActiveElements()
        refLink.classList.add("active")
    }

    if(ord.top <= 0){
        deleteActiveElements()
        ordLink.classList.add("active")
    }
    
    if(con.top <= 0){
        deleteActiveElements()
        conLink.classList.add("active")
    }

})