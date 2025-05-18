import './bootstrap'

  function scrollCarousel(direction) {
    const carousel = document.getElementById('leadershipCarousel');
    const scrollAmount = 200;

    if (direction === 'left') {
      carousel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    } else {
      carousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    }
  }

