let navButton1 = document.getElementById("navbar__button-1");
//console.log(navButton1);
let navbar1 = document.getElementById("navbar1");
//console.log(navbar1);

navButton1.addEventListener("click", function(){
    if(navButton1.classList.contains('navbar__button--pressed')){
        navButton1.classList.remove('navbar__button--pressed');
        navbar1.classList.remove('navbar--open');
    }else{
        navButton1.classList.add('navbar__button--pressed');
        navbar1.classList.add('navbar--open');
    }
});

$(document).ready(() =>{
    $('.navbar__up-inner').hide();
    $(window).on('scroll', () => {
        
        if ($(window).scrollTop() > $('.navbar').height()) {
            $('.navbar__up-inner').show();
            
        }
        else {
            $('.navbar__up-inner').hide();
        }
    });
});
