// // window.onscroll = function () {
// //   var e = document.querySelectorAll("scrollTop");
// //   if (!e) {
// //     e = document.createElement("a");
// //     e.class = "scrollTop";
// //     e.href = "#";
// //     document.body.appendChild(e);
// //   }
// //   e.style.display =
// //     document.documentElement.scrollTop > 300 ? "block" : "block";
// //   e.onclick = (ev) => {
// //     ev.preventDefault();
// //     document.documentElement.scrollTop = 0;
// //   };
// // };

// Window.onscroll = function () {
//   var e = document.querySelectorAll("scrolltop");
//   if (!e) {
//     e = document.createElement("a");
//     e.class = "scrolltop";
//     e.href = "#";
//     document.body.appendChild(e);
//   }
//   e.style.display =
//     document.documentElement.scrollTop > 300 ? "block" : "block";
//   e.onclick = (ev) => {
//     ev.preventDefault();
//     document.documentElement.scrollTop = 0;
//   };
// };
window.onscroll = function () {
  var e = document.getElementById("scrolltop");
  if (!e) {
    e = document.createElement("a");
    e.id = "scrolltop";
    e.href = "#";
    document.body.appendChild(e);
  }
  e.style.display =
    document.documentElement.scrollTop > 300 ? "block" : "block";
  e.onclick = (ev) => {
    ev.preventDefault();
    document.documentElement.scrollTop = 0;
  };
};
