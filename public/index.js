let popUp = document.querySelector(".popUpContainer")
let addImageBtn = document.getElementById("addImage")
let darkOverlay = document.querySelector(".darkOverlay")
let inputFile = document.getElementById("foto")
let inputImage = document.getElementById("uploadFile")

addImageBtn.addEventListener("click", function(){
    popUp.style.display = 'flex'
    popUp.classList.add("moveUp")
    darkOverlay.style.display = "block"
})

popUp.addEventListener('click', function(event){
    event.stopPropagation();
    //biar ga nutup kalau pencet dalam popUpnya
});

window.addEventListener("click", function(e){
    if (e.target!=popUp && e.target!=addImage){
        popUp.style.display = 'none'
        popUp.classList.add("moveUp")
        darkOverlay.style.display = "none"
    }
})

inputImage.addEventListener("click", function(e){
    e.preventDefault()
    inputFile.click()
})