document.addEventListener('DOMContentLoaded', function() {
  const topBar = document.querySelector('.top-bar');
  let lastScrollTop = 0;

  window.addEventListener('scroll', function() {
    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop && currentScroll > 100) {
      // Scrolling DOWN - hide the bar
      topBar.classList.add('top-bar--hidden');
    } else {
      // Scrolling UP - show the bar
      topBar.classList.remove('top-bar--hidden');
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
  });
});
