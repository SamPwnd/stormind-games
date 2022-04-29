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

window.addEventListener('load', () =>{
    $('.navbar__up-inner').removeClass("navbar__up-inner--fixed");
    $(window).on('scroll', () => {
        
        if ($(window).scrollTop() > $('.navbar').height()) {
            $('.navbar__up-inner').addClass("navbar__up-inner--fixed");
            
        }else {
            $('.navbar__up-inner').removeClass("navbar__up-inner--fixed");
        }

        if($(window).scrollTop()  > $(document).height() - 600) {
            $('.navbar__up-inner').removeClass("navbar__up-inner--fixed");
        }
    });
});
