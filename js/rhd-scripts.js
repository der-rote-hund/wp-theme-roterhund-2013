// add class with browser and version to body
function checkBoxShadow() {
    $("body").addClass(BrowserDetect.browser + "-" + BrowserDetect.version);
}


// open modal window
  function openModal(id){
    $('#modalwindow_'+id).removeClass('off');
  }
// close modal window
  function closeModal(){
    $('.modalwindow').addClass('off');
  }


$(document).ready(function () {

  // Seitenanfang-Link ein- und ausblenden
  $('#to-top').fadeOut("fast");
  $('#to-top').css({'position' : 'fixed', 'right' : '10', 'bottom' : '0'});

  $(window).scroll(function() {
    if ($(window).scrollTop() >= 500) {
      $('#to-top').fadeIn("slow");
    } else {
      $('#to-top').fadeOut("slow");
    }
  });

  checkBoxShadow();

// scroll pagemenu

  $('a[href*=#]').bind("click", function(event) {
    event.preventDefault();
    var geh = $(this).attr("href");
    $('html,body').animate({
      scrollTop: $(geh).offset().top
    }, 1000 , function (){location.hash = geh;});
  });

});
