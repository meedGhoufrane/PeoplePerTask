// JavaScript to toggle dark mode
const darkModeToggle = document.getElementById('dark-mode-toggle');
const body = document.body;

darkModeToggle.addEventListener('click', function () {
  body.classList.toggle('dark-mode');
  // You can also store the user's preference in a cookie or local storage.

  // Change the icon when dark mode is active
  if (body.classList.contains('dark-mode')) {
    darkModeToggle.classList.remove('fa-moon');
    darkModeToggle.classList.add('fa-sun'); // Replace "fa-sun" with the appropriate Font Awesome sun icon.
  } else {
    darkModeToggle.classList.remove('fa-sun');
    darkModeToggle.classList.add('fa-moon');
  }
});