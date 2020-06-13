var ruleModal = document.getElementById("myModal");
function ruleButtonClick() {
    ruleModal.style.display = "block";
    console.log("[RULE] RULE BUTTON CLICKED");
}
console.log("START PAGE");
var closeRule = document.getElementsByClassName("close")[0];
function closeModal(){
    ruleModal.style.display = "none";
}
window.onclick = function(event){
    if(event.target == modal){
    ruleModal.style.display = "none";
    }
}