const slider = document.querySelector('.slider');
  const slides = document.querySelectorAll('.slide');
  const thumbnails = document.querySelectorAll('.thumbnail');

  let counter = 1;
  const size = slides[0].clientWidth;

  function slide() {
    slider.style.transform = 'translateX(' + (-size * counter) + 'px)';
  }

  function selectThumbnail() {
    counter = this.getAttribute('data-id');
    slide();
  }

  // Automatic slide
  setInterval(() => {
    counter++;
    if (counter >= slides.length) {
      counter = 0;
    }
    slide();
  }, 3000);

  thumbnails.forEach(thumbnail => {
    thumbnail.addEventListener('click', selectThumbnail);
  });