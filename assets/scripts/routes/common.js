export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    /**
     * Add sticky-class to header, when reached scrollDistance by scrolling
     *
     * @param scrollDistance
     */
    function makeHeaderSticky(scrollDistance) {
      let htmlElement = $('html');
      $(window).scroll(function () {
        if ($(this).scrollTop() > scrollDistance) {
          htmlElement.addClass("sticky");
        }
        else {
          htmlElement.removeClass("sticky");
        }
      });
      if ($(this).scrollTop() > scrollDistance) {
        htmlElement.addClass("sticky");
      }
    }

    /**
     * Sticky header after scroll
     */

    makeHeaderSticky(121);
  },
};
