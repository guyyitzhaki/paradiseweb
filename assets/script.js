jQuery(document).ready(function($) {
 
    $(".scroll").click(function(event){   
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800,'swing');
    });
    });





// uniform
    $(function () {
    $('input[type="checkbox"], input[type="radio"], select').uniform();
    });

// social icon
$(document).ready(function($) {
  $('.social i').tooltip('hide')
});

// 

var wow = new WOW(
  {
    boxClass:     'wowload',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true        // act on asynchronously loaded content (default is true)
  }
);
wow.init();




$('.carousel').swipe( {
     swipeLeft: function() {
         $(this).carousel('next');
     },
     swipeRight: function() {
         $(this).carousel('prev');
     },
     allowPageScroll: 'vertical'
 });


$(function(){
    $('#sandbox-container div').datepicker({
        format: 'dd/mm/yyyy',
        multidate: true,
        clearBtn: true,
        endDate: "1/10/2015",
        startDate:"16/09/2015",
        todayHighlight: true
    }).on('changeDate', function(e) {
        var str = "";
        for (var i = 0; i < e.dates.length; i++) {
            str += e.dates[i].toDateString();
            str += ", "
        }
        if (str.length > 0) {
            str = str.substring(0, str.length - 2);
        }
        $('#dates').val(str);
    });
});

