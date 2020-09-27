let navlink = document.querySelectorAll(".nav-link");
let navbar = document.querySelector(".navbar");
window.onscroll = function () {
  if (document.documentElement.scrollTop > 140) {
    navbar.classList.add("bg-white", "shadow-sm");
  } else {
    navbar.classList.remove("bg-white", "shadow-sm");
  }
};

for (let i = 0; i < navlink.length; i++) {
  navlink[i].addEventListener("click", function (e) {
    e.preventDefault;
    console.log("nav-link");
  });
}
