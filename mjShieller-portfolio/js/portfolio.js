let lastScrollTop = 0;
  const footer = document.getElementById('footer');

  window.addEventListener('scroll', function() {
      let scrollTop = window.scrollY || document.documentElement.scrollTop;

      if (scrollTop > lastScrollTop) {
          // Scrolling down, hide the footer
          footer.classList.add('hidden');
      } else {
          // Scrolling up, show the footer
          footer.classList.remove('hidden');
      }

      lastScrollTop = scrollTop;
});

function showMessage() {
    var messageBox = document.getElementById('messageBox');
    messageBox.style.display = 'block';

    // You can add your own text to be copied here
    var textToCopy = "shieller2121116@mkt.ceu.edu.ph";
    
    // Create a temporary input element to copy text from
    var tempInput = document.createElement('input');
    tempInput.value = textToCopy;
    document.body.appendChild(tempInput);
    
    // Select the text in the input element
    tempInput.select();
    tempInput.setSelectionRange(0, 99999); /* For mobile devices */

    // Copy the text to the clipboard
    document.execCommand('copy');
    
    // Remove the temporary input element
    document.body.removeChild(tempInput);

    // Hide the message after a delay (you can adjust the delay)
    setTimeout(function() {
        messageBox.style.display = 'none';
    }, 2000);
}

function showTitle(card) {
    card.classList.add('hovered');
}

function showDescription(card) {
    card.classList.remove('hovered');
}

