/*window.onload = function () {
  const video = document.querySelector("video");
  const playBackSpeed = 600;
  document.body.style.height =
    Math.floor(video.duration) * playBackSpeed + "px";
  window.addEventListener("scroll", function () {
    video.currentTime = window.scrollY / playBackSpeed;
  });
};
const video = document.querySelector("video");

function handleVideoVisible() {
  observer.unobserve(vid);
  observer.observe(vid);
}

let observer = new IntersectionObserver((entries, observer) => {
  entries.forEach((entry) => {
    if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
      vid.currentTime = 1;
    } else {
      if (entry.isIntersecting) {
        console.log("iceride");
        window.addEventListener("scroll", handleVideoVisible);
        if (entry.intersectionRatio > 0) {
          video.currentTime = video.duration * entry.intersectionRatio;
        }
      } else {
        console.log("Dısarıda");
        window.removeEventListener("scroll", handleVideoVisible);
      }
    }
  });
});

observer.observe(vid);*/
