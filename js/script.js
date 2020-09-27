$(".document").ready(function () {});
let navlink = document.querySelectorAll(".nav-link");
let navbar = document.querySelector(".navbar");

$(".page-scroll").on("click", function (e) {
  var tujuan = $(this).attr("href");
  var elementTujuan = $(tujuan);

  $("html").animate(
    {
      scrollTop: elementTujuan.offset().top - 80,
    },
    1000,
    "swing"
  );
  // console.log($("html").scrollTop());
  // console.log(elementTujuan.offset().top);

  e.preventDefault();
});
window.onscroll = function () {
  if (document.documentElement.scrollTop > 140) {
    navbar.classList.add("bg-white", "shadow-sm");
  } else {
    navbar.classList.remove("bg-white", "shadow-sm");
  }
};

TESTER = document.getElementById("tester");

// z_data[y][x] = z
var z_data = [
  [0, 0, 0, 0],
  [0, 50, 55, 50],
  [0, 45, 45, 45],
  [0, 40, 40, 40],
];

var data = [
  {
    z: z_data,
    type: "surface",
  },
];

var layout = {
  //   title: "Tekanan Bunyi Pada Ruangan",
  autosize: false,
  width: 400,
  height: 400,
  scene: {
    xaxis: { title: "Room Depth" },
    yaxis: { title: "Room Width" },
    zaxis: { title: "Sound Intensity" },
  },
  margin: {
    l: 0,
    r: 0,
    b: 0,
    t: 0,
  },
};
Plotly.newPlot(TESTER, data, layout);
