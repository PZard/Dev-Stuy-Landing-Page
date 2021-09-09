var popupBackground = document.querySelector (".popup-background");
 
var form = document.querySelector("form");
 
form.addEventListener("submit", function(event) {
    event.preventDefault();
    popupBackground.style.display="block";
    form.reset();
})
 
var buttonOk = document.querySelector("#popup-button")
.addEventListener("click", function () {
    popupBackground.style.display="none";
})
