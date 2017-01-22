export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    function moveComments() {
      if ($('#visible-xs').is(':visible')) {
        $("#comments").detach().appendTo($('#sidebar'));
      } else {
        $("#comments").detach().appendTo($('.main'));
      }
    }

    moveComments();
    $(window).resize(function(){
      moveComments();
    });

  },
};
