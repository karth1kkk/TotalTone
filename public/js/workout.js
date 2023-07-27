  // Function to handle button click and scroll down to the content
  function scrollToContent() {
    const content = document.getElementById('content');
    const contentPosition = content.offsetTop;
    const currentPosition = window.pageYOffset;
    const distanceToScroll = contentPosition - currentPosition;

    // Scroll to the content with a smooth animation
    window.scrollBy({
      top: distanceToScroll,
      behavior: 'smooth'
    });

    // Disable the scroll button during scroll
    document.getElementById('scrollButton').disabled = true;

    // Add a scroll event listener to re-enable the scroll button when back to top
    window.addEventListener('scroll', function enableScrollButton() {
      if (window.pageYOffset === 0) {
        document.getElementById('scrollButton').disabled = false;
        // Remove the scroll event listener once the button is active again
        window.removeEventListener('scroll', enableScrollButton);
      }
    });
  }

  // Function to handle button click and scroll up to the top
  function scrollUpToTop() {
    // Scroll to the top of the page with a smooth animation
    window.scroll({
      top: 0,
      behavior: 'smooth'
    });

    // Disable the up button during scroll
    document.getElementById('upButton').disabled = true;

    // Add a scroll event listener to re-enable the up button when back to top
    window.addEventListener('scroll', function enableUpButton() {
      if (window.pageYOffset === 0) {
        document.getElementById('upButton').disabled = false;
        // Remove the scroll event listener once the button is active again
        window.removeEventListener('scroll', enableUpButton);
      }
    });
  }

  // Add click event listeners to the buttons
  document.getElementById('scrollButton').addEventListener('click', scrollToContent);
  document.getElementById('upButton').addEventListener('click', scrollUpToTop);