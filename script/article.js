
function initializeAccordions() {
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