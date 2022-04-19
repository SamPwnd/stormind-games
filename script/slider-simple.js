
let dots = document.getElementsByClassName("slider-simple__dot");

let slider= document.querySelector(".slider-simple__slider");
console.log(dots);
console.log(slider);

for(let i = 0; i< dots.length; i++){
    dots[i].addEventListener("click", ()=>{
        selectDot(i);
        let vw = slider.clientWidth / 100;
            slider.style.setProperty('--vw', `${vw}px`);
        slider.style.left = `-${100 *i}%`;
    });
    
}

function selectDot(value){
    for(let i = 0; i< dots.length; i++){
        if(dots[i].classList.contains('slider-simple__dot--pressed')){
            dots[i].classList.remove('slider-simple__dot--pressed')
        }
    }
    dots[value].classList.add('slider-simple__dot--pressed')  
}