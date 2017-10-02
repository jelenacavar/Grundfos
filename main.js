/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// Get the modal

var modal = document.getElementById('myModal');
var modal2 = document.getElementById('myModal2');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span2 = document.getElementsByClassName("close")[1];

// When the user clicks the button, open the modal 
btn.addEventListener("click", function() {
    modal.style.display = "block";
    document.getElementById("modal-content").className = "modal-content animated zoomIn";
});

// When the user clicks the button, open the modal 
btn2.addEventListener("click", function() {
    modal2.style.display = "block";
    document.getElementById("modal-content2").className = "modal-content animated zoomIn";
});

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
   document.getElementById("modal-content").className = "modal-content animated zoomOut";
        window.setTimeout(function(){
            modal.style.display = "none";
        }, 300);
};

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
   document.getElementById("modal-content2").className = "modal-content animated zoomOut";
        window.setTimeout(function(){
            modal2.style.display = "none";
        }, 300);
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target === modal) {
        document.getElementById("modal-content").className = "modal-content animated zoomOut";
        window.setTimeout(function(){
            modal.style.display = "none";
        }, 300);
    }    
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target === modal) {
        document.getElementById("modal-content2").className = "modal-content animated zoomOut";
        window.setTimeout(function(){
            modal2.style.display = "none";
        }, 300);
    }    
};
