const SLIDES = $(".jewelry-stack > .shop-img");
const DOTS = $(".image-buttons > .circle");

function nextSlide() {
  let nextNum = SLIDES.index($(".jewelry-stack > .shop-img:not(.hidden)")) + 1 + 1; /* +1 for 0-index array */
  if (nextNum > SLIDES.length) {
    nextNum = 1;
  }

  showSlide(nextNum);
}

function prevSlide() {
  let prevNum = SLIDES.index($(".jewelry-stack > .shop-img:not(.hidden)")) - 1 + 1; /* +1 for 0-index array */
  if (prevNum <= 0) {
    prevNum = SLIDES.length;
  }

  showSlide(prevNum);
}

function showSlide(num) {
  let index = num - 1;
  let currentSlide = SLIDES.eq(index);

  let currentDot = DOTS.eq(index);

  DOTS.removeClass("active");
  currentDot.addClass("active");

  SLIDES.addClass("hidden");
  currentSlide.removeClass("hidden");
}

$("#button-left").click(function() {
  prevSlide();
});

$("#button-right").click(function() {
  nextSlide();
});

// when 1st circle button is clicked, show first slide
$("#image-button-1").click(function() {
  showSlide(1);
});

$("#image-button-2").click(function() {
  showSlide(2);
});

$("#image-button-3").click(function() {
  showSlide(3);
});
