

//navbar

//lottie用 

const anlottie = lottie.loadAnimation({
    container: document.getElementById('anim'),
    animType: 'svg',
    loop: true,
    path: 'https://assets5.lottiefiles.com/packages/lf20_tq8eehze.json',
});
anlottie.setSpeed(1);



//網站建置中使用 
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


