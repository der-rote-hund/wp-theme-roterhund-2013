// add class with browser and version to body
function checkBoxShadow() {
  var BSClass = "";
  if ((BrowserDetect.browser == "Opera") && (BrowserDetect.version < "12")) {
      BSClass = "rhd-no-boxshadow";
    } else if ((BrowserDetect.browser == "Firefox") && (BrowserDetect.version < "4")) {
      BSClass = "rhd-no-boxshadow";
    } else if ((BrowserDetect.browser == "Safari") && (BrowserDetect.version < "6")) {
      BSClass = "rhd-no-boxshadow";
    } else {
      BSClass = "rhd-boxshadow";
    }
  $("body").addClass(BSClass);
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
//  $('.header__intro').balanceText();

// scroll pagemenu

  $('a[href*=#]').bind("click", function(event) {
    event.preventDefault();
    var geh = $(this).attr("href");
    $('html,body').animate({
      scrollTop: $(geh).offset().top
    }, 1000 , function (){location.hash = geh;});
  });

});
