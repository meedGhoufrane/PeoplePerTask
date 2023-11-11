let currentIndex = 0;
const cardSlider = document.getElementById('cardSlider');
const cards = document.querySelectorAll('.card');

function showSlide(index) {
  cardSlider.style.transform = `translateX(-${index * 100}%)`;
}

function nextSlide() {
  currentIndex = (currentIndex + 1) % cards.length;
  showSlide(currentIndex);
}

function prevSlide() {
  currentIndex = (currentIndex - 1 + cards.length) % cards.length;
  showSlide(currentIndex);
}
