// JavaScript to toggle dark mode
const darkModeToggle = document.getElementById('dark-mode-toggle');
const body = document.body;

darkModeToggle.addEventListener('click', function () {
  body.classList.toggle('dark-mode');
  // You can also store the user's preference in a cookie or local storage.
});