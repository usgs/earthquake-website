(function() {

  var buttons,
      pubs,
      showHide,
      topics;

  topics = document.querySelector('.topics');
  buttons = topics.querySelectorAll('a');
  pubs = document.querySelectorAll('.referencelist li');

  // Show and hide pubs depending on topic selected by user
  showHide = function (e) {
    var cssClass = this.getAttribute('href').substr(1);

    Array.prototype.forEach.call(pubs, function (pub) {
      if (!cssClass || pub.classList.contains(cssClass)) {
        pub.style.display = 'block';
      } else {
        pub.style.display = 'none';
      }
    });

    // Highlight topic selected by user (and un-highlight all others)
    Array.prototype.forEach.call(buttons, function (button) {
      button.classList.remove('selected');
    });
    this.classList.add('selected');

    e.preventDefault();
  }

  // Display topic selector (i.e. javascript enabled)
  topics.classList.remove('hide');

  // Add event listeners
  Array.prototype.forEach.call(buttons, function (button) {
    button.addEventListener('click', showHide, false);
  });

})();