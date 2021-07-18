const items = Array.from(document.getElementsByClassName("item"));

items.forEach((item, i) => {
  let prev = items[i - 1];
  if (!prev) prev = items[items.length - 1];

  prev.addEventListener("animationend", () => {
    item.classList.add("animate");
    prev.classList.remove("animate");
  });
});

items[0].classList.add("animate");
var btn = document.getElementsByClassName("check");
var l1 = document.getElementById("1");
  var l2 = document.getElementById("2");
  var l3 = document.getElementById("3");
  var l4 = document.getElementById("4");
  var l5 = document.getElementById("5");
  
  var s1 = document.getElementById("s1");
  var s2 = document.getElementById("s2");
  var s3 = document.getElementById("s3");
  var s4 = document.getElementById("s4");
var s5 = document.getElementById("s5");

  s2.setAttribute("style", "display: none;");
  s3.setAttribute("style", "display: none;");
  s4.setAttribute("style", "display: none;");
s5.setAttribute("style", "display: none;");

console.log(btn);
function Function1() {
  l2.setAttribute("class", " ");
  l3.setAttribute("class", " ");
  l4.setAttribute("class", " ");
l5.setAttribute("class", " ");

  l1.setAttribute("class", "active");

  s2.setAttribute("style", "display: none;");
  s3.setAttribute("style", "display: none;");
  s4.setAttribute("style", "display: none;");
  s5.setAttribute("style", "display: none;");

  s1.removeAttribute("style");
  if(screen.width<=858){
      btn.click();
  }
}

function Function2() {
  l1.removeAttribute("class");
  l3.removeAttribute("class");
  l4.removeAttribute("class");
  l5.removeAttribute("class");

  l2.setAttribute("class", "active");

  s1.setAttribute("style", "display: none;");
  s3.setAttribute("style", "display: none;");
  s4.setAttribute("style", "display: none;");
  s5.setAttribute("style", "display: none;");

  s2.removeAttribute("style");
  
  if(screen.width<=858){
      btn.click();
  }
}

function Function3() {
  l1.removeAttribute("class");
  l2.removeAttribute("class");
  l4.removeAttribute("class");
l5.removeAttribute("class");

  l3.setAttribute("class", "active");

  s1.setAttribute("style", "display: none;");
  s2.setAttribute("style", "display: none;");
  s4.setAttribute("style", "display: none;");
  s5.setAttribute("style", "display: none;");

  s3.removeAttribute("style");
  if(screen.width<=858){
      btn.click();
  }
}



function Function4() {
  l1.removeAttribute("class");
  l3.removeAttribute("class");
  l2.removeAttribute("class");
  l5.removeAttribute("class");

  l4.setAttribute("class", "active");

  s1.setAttribute("style", "display: none;");
  s3.setAttribute("style", "display: none;");
  s2.setAttribute("style", "display: none;");
s5.setAttribute("style", "display: none;");

  s4.removeAttribute("style");
  if(screen.width<=858){
      btn.click();
  }
}
  
  function Function5() {
  l1.removeAttribute("class");
  l3.removeAttribute("class");
  l2.removeAttribute("class");
  l4.removeAttribute("class");

  l5.setAttribute("class", "active");

  s1.setAttribute("style", "display: none;");
  s3.setAttribute("style", "display: none;");
  s2.setAttribute("style", "display: none;");
s4.setAttribute("style", "display: none;");

  s5.removeAttribute("style");
  if(screen.width<=858){
      btn.click();
  }
  
}