let cross = document.getElementById("crosse");
console.log(cross);
let sub_menu = document.getElementById("accordion__submenu");
let less = document.getElementById("less");
console.log(less);

cross.addEventListener("click", function(){
  sub_menu.style.transition = "all 2s";
  cross.classList.add("d-none");
  less.className = "";
  sub_menu.className = "alt-100";
  
});

less.addEventListener("click", function(){
  sub_menu.style.transition = "all 2s";
  less.classList.add("d-none");
  cross.classList.remove("d-none");
  sub_menu.className = "alt-0 d-none";
});