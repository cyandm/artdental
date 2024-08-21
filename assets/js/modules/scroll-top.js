// window.onscroll = function () {
//   var e = document.getElementById("scrollTop-pc");
//   if (!e) {
//     e = document.createElement("a");
//     e.id = "scrollTop-pc";
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

const scrollTopBtn = document.getElementById("scrollTopBtn");
const progressCircle = document.getElementById("progress");
const radius = progressCircle.r.baseVal.value;
const circumference = 2 * Math.PI * radius;

progressCircle.style.strokeDasharray = `${circumference}`;
progressCircle.style.strokeDashoffset = `${circumference}`;

function setProgress(percent) {
  const offset = circumference - (percent / 100) * circumference;
  progressCircle.style.strokeDashoffset = offset;
}

function updateProgress() {
  const scrollHeight =
    document.documentElement.scrollHeight - window.innerHeight;
  const scrollTop = window.scrollY;
  const scrollPercent = (scrollTop / scrollHeight) * 100;
  setProgress(scrollPercent);
}

function toggleScrollTopButton() {
  if (window.scrollY > 300) {
    scrollTopBtn.classList.add("show");
  } else {
    scrollTopBtn.classList.remove("show");
  }
}

scrollTopBtn.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

window.addEventListener("scroll", () => {
  toggleScrollTopButton();
  updateProgress();
});
