
function getNavButton() {
  if (window.pageYOffset >= 200) {
    const elem = document.querySelector("#navBtn");
    elem.style.opacity = 1;
    elem.style.cursor = "pointer";
    document.removeEventListener("scroll", getNavButton);
    document.addEventListener("scroll", removeNavButton);
  }
}

function removeNavButton() {
  if (window.pageYOffset <= 200) {
    const elem = document.querySelector("#navBtn");
    elem.style.opacity = 0;
    elem.style.cursor = "default";
    document.removeEventListener("scroll", removeNavButton);
    document.addEventListener("scroll", getNavButton);
  }
}

document.addEventListener("scroll", getNavButton);

function scrollToTop() {
  if (window.pageYOffset >= 200) {
    window.scroll({
      left: 0,
      top: 0,
      behavior: "smooth"
    });
  }
}

function getScrollButton() {
  if (window.pageYOffset >= 200) {
    const elem = document.querySelector("#toTopBtn");
    elem.style.opacity = 1;
    elem.style.cursor = "pointer";
    document.removeEventListener("scroll", getScrollButton);
    document.addEventListener("scroll", removeScrollButton);
  }
}

function removeScrollButton() {
  if (window.pageYOffset <= 200) {
    const elem = document.querySelector("#toTopBtn");
    elem.style.opacity = 0;
    elem.style.cursor = "default";
    document.removeEventListener("scroll", removeScrollButton);
    document.addEventListener("scroll", getScrollButton);
  }
}

document.addEventListener("scroll", getScrollButton);
