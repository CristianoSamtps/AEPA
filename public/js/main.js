const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    console.log(entry);
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
    }
  });
});

const hiddenElements = document.querySelectorAll('.hidden');
const hiddenElements2 = document.querySelectorAll('.hidden2');
hiddenElements.forEach((el) => observer.observe(el));
hiddenElements2.forEach((el) => observer.observe(el));



 document.addEventListener("DOMContentLoaded", function () {
  const track = document.querySelector("#carouselTrack");
  const items = document.querySelectorAll(".item");

  items.forEach((item, index) => {
    item.addEventListener("click", function () {
      // Move the clicked item to the beginning
      track.insertBefore(item, track.firstChild);
    });
  });
});
