
var img = document.getElementsByTagName("section div"),
textOver = document.getElementsByClassName('text-over');

window.onscroll = () => {
    if(window.scrollY >=  550) {
        navbar.style.display = "block"; 
        navbar.classList.add("sticky"); 
    } else {
        navbar.style.display = "none"; 
        navbar.classList.remove("sticky");
    }
}
