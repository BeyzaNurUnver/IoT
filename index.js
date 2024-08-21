const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector(".theme-toggler");
const sideBar = document.querySelector(".deactive");

menuBtn.addEventListener('click', ()=> {
    sideMenu.style.display = 'block';
})

closeBtn.addEventListener('click', () =>{
    sideMenu.style.display = 'none';
})

themeToggler.addEventListener('click', () =>{
    document.body.classList.toggle('dark-theme-variables');
})

var date =new Date().toLocaleDateString('tr-TR');
document.getElementById('date').innerHTML = date;