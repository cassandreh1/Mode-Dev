
var navbar = document.getElementById('navbar'),
img = document.getElementsByClassName('container'),
overlay = document.getElementsByClassName('overlay');

window.onscroll = () => {
    if(window.scrollY >=  550) {
        navbar.style.display = "block"; 
        navbar.classList.add("sticky"); 
    } else {
        navbar.style.display = "none"; 
        navbar.classList.remove("sticky");
    }
}

function onSubmit(){
    var email = document.getElementById('input-email');
    email.val('');
}

// img.onmouseover =  ()=> {
//     overlay.show();
// };
// img.onmouseleave =  () => {
//     overlay.hide();
// };