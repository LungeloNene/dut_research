jQuery(document).ready(function($) {
  console.log( "ready!" );

  var cloud = '<i class="fas fa-cloud-upload-alt"></i>';
  $('.custom-file-upload').append(cloud);

//MC4WP plugin alert modification
  if ( $('.mc4wp-response').children().length > 0 ) {
    $('.mc4wp-response').addClass('mailchimp-response');
    var close_response = '<span class="close-response" id="close-response">&times;</span>';
    $('.mc4wp-response').append(close_response);
    $('#close-response').click(function(){
      $('.mc4wp-response').fadeOut();
    });
    // do something
}
else{
  $('.mc4wp-response').removeClass('mailchimp-response');
}


  		// Make the navigation fill or transparent depending on scroll position
      var navHeight = $('.hero').height()/3;
      $(window).scroll(function(){
        if ($(window).scrollTop() >= navHeight) {
          $('.wrapper-navbar .navbar').addClass('fill');
        }
        else {
          $('.wrapper-navbar .navbar').removeClass('fill');
        }
      });
      $('.navbar-toggler').click(function(){
        $('.transparent .navbar').addClass('fill');
      })


    $('#vision_trigger').click(function(){
      $('#projects_trigger').removeClass('active')
      $(this).addClass('active')
      window.location.href ="/#vision";
    })
    $('#projects_trigger').click(function(){
      $('#vision_trigger').removeClass('active')
      $(this).addClass('active')
      window.location.href ="/#projects";
    })


  $('#partner_trigger').click(function(){
    $('#collaborate_trigger').removeClass('active')
    $(this).addClass('active')
    $('#collaborate').fadeOut();
    $('#partner').fadeIn();
    setTimeout(function(){
      window.location.href ="/contact-us/#contact-forms"
    },100);
});
$('#collaborate_trigger').click(function(){
    $('#partner_trigger').removeClass('active')
    $(this).addClass('active')
    $('#partner').fadeOut();
    $('#collaborate').fadeIn();
    setTimeout(function(){
      window.location.href ="/contact-us/#contact-forms"
    },100);

    

  });

$('#project_joy_trigger').click(function(){
  $('#project_bright_trigger').removeClass('active')
  $(this).addClass('active')
  $('#bright').fadeOut();
  $('#joy').fadeIn();
  setTimeout(function(){
    window.location.href ="/projects/#projects_wrapper";
  },100);
});
$('#project_bright_trigger').click(function(){
  $('#project_joy_trigger').removeClass('active')
  $(this).addClass('active')
  $('#joy').fadeOut();
  $('#bright').fadeIn();
  setTimeout(function(){
    window.location.href ="/projects/#projects_wrapper";
  },100);
  
});

  //   $(window).scroll(
  //     {
  //         previousTop: 0
  //     }, 
  //     function () {
  //     var currentTop = $(window).scrollTop();
  //     if (currentTop < this.previousTop) {
  //       $(".wrapper-navbar").removeClass('hide');
  //     } else {
  //       $(".wrapper-navbar").addClass('hide');
  //     }
  //     this.previousTop = currentTop;
  // });


});