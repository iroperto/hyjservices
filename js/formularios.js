$(function(){
  $('.form-control').each(function() {
    chageState($(this));
  });

  $('.form-control').on('focusout', function() {
    chageState($(this));
  });

  function chageState($formControl){
    if ($formControl.val().length > 0){
      $formControl.addClass('has-value');
    } else {
      $formControl.removeClass('has-value');
    }
  }
});
