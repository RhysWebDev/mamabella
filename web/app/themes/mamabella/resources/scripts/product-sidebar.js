document.addEventListener('DOMContentLoaded', function () {
  var scrollButton = document.querySelector('.scrolldown');
  var container = document.querySelector('.product_sidebar');
  var content = document.querySelector('.product_sidebar--inner');
  var scrollAmount = 5; // Adjust this value as needed
  var isScrolling = false;

  var scrollInterval;
  var scrollToTopButton = document.querySelector('.scrollToTopButton');
  var scrollToBottom = document.querySelector('.scrollToBottom');
  var shouldShowScrollButton = false;

  function scrollContainer() {
    container.scrollTop += scrollAmount;

    if (
      container.scrollTop + container.clientHeight >=
      container.scrollHeight
    ) {
      shouldShowScrollButton = true;
    } else {
      shouldShowScrollButton = false;
    }

    scrollInterval = requestAnimationFrame(scrollContainer);
  }

  scrollButton.addEventListener('mousedown', function () {
    if (!isScrolling) {
      isScrolling = true;
      scrollContainer();
    }
  });

  document.addEventListener('mouseup', function () {
    if (isScrolling) {
      isScrolling = false;
      cancelAnimationFrame(scrollInterval);
    }
  });

  scrollToTopButton.addEventListener('click', function () {
    container.scrollTo({
      top: 0,
      behavior: 'smooth',
    });
    scrollToTopButton.style.display = 'none';
    scrollToBottom.style.display = 'block';
    shouldShowScrollButton = false;
  });

  container.addEventListener('scroll', function () {
    if (shouldShowScrollButton) {
      scrollToTopButton.style.display = 'block';
      scrollToBottom.style.display = 'none';
    }
  });
});
