var ruleModal = document.getElementById("ruleModal");
var closeRule = document.getElementsByClassName("close")[0];
var aboutModal = document.getElementById("aboutModal");
function ruleButtonClick() {
    ruleModal.style.display = "block";
    console.log("[RULE] RULE BUTTON CLICKED");
}
function aboutButtonClick() {
    aboutModal.style.display = "block";
}
console.log("START PAGE");

function closeModal() {
    ruleModal.style.display = "none";
    aboutModal.style.display = "none";
}
window.onclick = function (event) {
    if (event.target == ruleModal) {
    ruleModal.style.display = "none";
    aboutModal.style.display = "none";
    }
};

var errorPopup = document.getElementById("errorPopup");
function closePopUpClick(){
    errorPopup.style.display = "none";
}