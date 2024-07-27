//header scroll
let nav= document.querySelector(".navbar");
window.onscroll=function(){
    if(document.documentElement.scrollTop>50){
        nav.classList.add("header-scrolled");

    }else{
        nav.classList.remove("header-scrolled");
    }
}
//nav hide
let navBar= document.querySelectorAll(".nav-link");
let navCollapse = document.querySelector(".navabr-collapse.collapse");
navBar.forEach(function(e){
    e.addEventListener("click",function(){
        navCollapse.classList>remove("show");
    })
})


//show faqs
const faqs = document.querySelectorAll('.faq');

faqs.forEach(faq=>{
    faq.addEventListener('click',()=>{
        faq.classList.toggle('open');
        //change icon
        const icon =faq.querySelector('.faq_icon i');
        if(icon.className==="fa-solid fa-plus"){
            icon.className = "fa-solid fa-minus";
        }else{
            icon.className = "fa-solid fa-plus";
        }

    })
})