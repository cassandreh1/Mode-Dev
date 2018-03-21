
window.onscroll = () => {
    scroll();
}
var navbar = document.getElementById('navbar'),
    sticky = navbar.offsetParent;

function scroll(){
    navbar.style.display = "block"; 
    if(window.pageYOffset >= sticky){
        navbar.classList.add("sticky"); 
        } else {
            navbar.classList.remove('sticky');
        }
}
if(sticky === 0) {
    navbar.style.display = "none"; 
}

