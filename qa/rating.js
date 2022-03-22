$('document').ready(function() {
    $('.toggleswitch').bootstrapToggle();
    $("fieldset[id^='demo'] .stars").click(function() {
      
      $(this).attr("checked");
    });
  });