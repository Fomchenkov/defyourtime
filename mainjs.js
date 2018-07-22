window.onload = function(){
  document.getElementById('selectid').onclick = function(){
    open('box', this);
    return false;
  }
};
function open(id, selectid) {
  var div = document.getElementById(id);
  if (div.style.display == 'block') {
    div.style.display = 'none';
  } else{
    div.style.display = 'block';
  }
};
jQuery(function(){
  jQuery('a.show_form').click(function(){
    jQuery('div.'+jQuery(this).attr("rel")).fadeIn(500);
    jQuery("body").append("<div id='overlay'></div>");
    jQuery('#overlay').show().css({'filter' : 'alha(opacity=80)'});
    return false;
  });
  jQuery('a.close').click(function(){
    jQuery(this).parent().fadeOut(100);
    jQuery('#overlay').remove('#overlay');
    return false;
  })
})
function showOrHide(unhide, hide) {
    unhide = document.getElementById(unhide);
    hide = document.getElementById(hide);
    if (unhide.checked){
      hide.style.display = "block";
    }else {
      hide.style.display = "none";
      $("input[type=checkbox]").prop('checked', false);
    }
  }
  /*Слайдер*/
  $(document).ready(function () {

  var change_img_time = 4000,
      transition_speed = 400;

  var listItems = $("#slider-up").children('li'),
      dotItems = $('#dots').children('li'),
      listLen = listItems.length,
      current,
      changeTimeout;

  function moveTo(newIndex) {

    var i = newIndex;

    if (newIndex == 'prev') {
        i = (current > 0) ? (current - 1) : (listLen - 1);
    }

    if (newIndex == 'next') {
        i = (current < listLen - 1) ? (current + 1) : 0;
    }

    dotItems.removeClass('active')
            .eq(i).addClass('active');

    listItems.fadeOut(transition_speed)
             .eq(i).fadeIn(transition_speed);

    current = i;

    //resets time interval if user clicks on slider dot; then begin automated slider
    clearTimeout(changeTimeout);
    changeTimeout = setTimeout(function() { moveTo('next'); }, change_img_time);
  };

  // Event handlers
  $("#dots li").click(function () {
    var i = $('#dots li').index(this);
    moveTo(i);
  });

  $("#prev").click(function () {
    moveTo('prev');
  });

  $("#next").click(function () {
    moveTo('next');
  });
  
  //initialize slider on load
  moveTo('next');
});

jQuery(function() { 
  jQuery(window).scroll(function() { 
    if(jQuery(this).scrollTop() > 400) { 
      jQuery('#toTop').fadeIn(); 
      } else { 
      jQuery('#toTop').fadeOut(); 
      }      
      }); 
    jQuery('#toTop').click(function() { 
  jQuery('body,html').animate({scrollTop:200},500); 
  }); 
});