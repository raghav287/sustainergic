document.addEventListener("DOMContentLoaded",function(){

const toggle=document.getElementById("mobileToggle");
const navbar=document.getElementById("navbar");
const header=document.getElementById("header");

toggle.addEventListener("click",function(){
    navbar.classList.toggle("show");
});

document.querySelectorAll(".dropdown > a").forEach(function(item){

    item.addEventListener("click",function(e){

        if(window.innerWidth<992){

            e.preventDefault();

            this.parentElement.classList.toggle("open");

        }

    });

});

window.addEventListener("scroll",function(){

    if(window.scrollY>80){

        header.classList.add("sticky");

    }else{

        header.classList.remove("sticky");

    }

});

});