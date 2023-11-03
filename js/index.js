$('.filters ul li').click(function() {
    // $('.filters ul li').removeClass('active');
    // $(this).addClass('active');
    $('.filters ul li').removeClass('after-click');
    $(this).addClass('after-click');
    var data = $(this).attr('data-filter');
    $grid.isotope({
      filter: data,
    });
  });
  
  var $grid = $('.grid').isotope({
    itemSelector: '.all',
    percentPosition: true,
    masonry: {
      columnWidth: '.all',
    },
  });

  // Back to top
var amountScrolled = 200;
var amountScrolledNav = 25;

$(window).scroll(function() {
  if ( $(window).scrollTop() > amountScrolled ) {
    $('button.back-to-top').addClass('show');
  } else {
    $('button.back-to-top').removeClass('show');
  }
});

$('button.back-to-top').click(function() {
  $('html, body').animate({
    scrollTop: 0
  }, 500);
  return false;
});

const darkModeToggle = document.getElementById('dark-mode-toggle');
    const body = document.body;
    darkModeToggle.addEventListener('click', function () {
        body.classList.toggle('dark-mode');
        if (body.classList.contains('dark-mode')) {
          darkModeToggle.classList.remove('fa-moon');
          darkModeToggle.classList.add('fa-sun'); // Replace "fa-sun" with the appropriate Font Awesome sun icon.
        } else {
          darkModeToggle.classList.remove('fa-sun');
          darkModeToggle.classList.add('fa-moon');
        }
});