
function initializeAccordions(){
  var createAccordion = function(accordion){
    let cross = accordion.querySelector(".cross");
    console.log(cross);
    let sub_menu = accordion.querySelector(".accordion_submenu");
    let meno = accordion.querySelector(".less_acc");
    console.log(meno);

    cross.addEventListener("click", function(){
    sub_menu.style.transition = "all 2s";
    cross.classList.add("d-none");
    meno.className = "";
    sub_menu.className = "alt-100";
    });

    meno.addEventListener("click", function(){
    sub_menu.style.transition = "all 2s";
    meno.classList.add("d-none");
    cross.classList.remove("d-none");
    sub_menu.className = "alt-0 d-none";
    });
  }

   const accordions2 = document.querySelectorAll('.accordion-accordion');
   console.log(accordions2);
   for (let j = 0; j < accordions2.length; j++) {
      createAccordion(accordions2[j]);
  }

}

function initializeArticle() {
  var createAccordion = function(accordion) {
    let plus = accordion.querySelector(".plus");
    let less = accordion.querySelector(".line");
    let description = accordion.querySelector(".description-container");
    let linkedin = accordion.querySelector(".linkedin");
    let linedown = accordion.querySelector(".line-down");
    less.addEventListener("click", function(){
      description.classList.add("d-none");
      less.classList.add("d-none");
      plus.classList.remove("d-none");
      linkedin.classList.add("d-none");
      linedown.classList.add("mobile");
    });

    plus.addEventListener("click", function(){
      description.classList.remove("d-none");
      less.classList.remove("d-none");
      plus.classList.add("d-none");
      document.querySelector(".linkedin").classList.remove("d-none");
      document.querySelector(".line-down").classList.remove("mobile");
    });
  
  }
  const accordions = document.querySelectorAll('.article-accordion');
  console.log(accordions);
  for (let j = 0; j < accordions.length; j++) {
      createAccordion(accordions[j]);
  }

}



initializeAccordions();



initializeArticle();

