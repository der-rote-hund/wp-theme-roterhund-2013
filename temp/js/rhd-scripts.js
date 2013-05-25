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

// scroll pagemenu

  $('a[href*=#]').bind("click", function(event) {
    event.preventDefault();
    var geh = $(this).attr("href");
    $('html,body').animate({
      scrollTop: $(geh).offset().top
    }, 1000 , function (){location.hash = geh;});
  });

});


// ugly ua-sniffing for browsers that claim to support box-shadow but dont paint the red dog correctly
  var ua = $.browser;
  // alert( $.browser.version );
  if (( ua.mozilla && ua.version.slice(0,3) <= "1.9" ) || ( ua.safari && ua.version.slice(0,3) <= "535" )) {
    $("body").addClass("no-boxshadow");

// ugly ua-sniffing for opera mini
  if(ua.ToString().ToLower().Contains("opera mobi")){
    alert( $.browser.version );
    $("body").addClass("no-boxshadow");
  }

  }

