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
  $('.social i').tooltip('hide');
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

$('#BannerCarousel').carousel({
    interval: 10000
});

function pad(num, size) {
    var s = num+"";
    while (s.length < size) s = "0" + s;
    return s;
}

function occupied(date) {
    var dateFormat = date.getUTCFullYear() + pad((date.getUTCMonth()+1),2)  + pad((date.getUTCDate()+1),2);
    return (dateFormat >= '20150812' && dateFormat <= '20150915');
}


$(function(){
    $('#sandbox-container div').datepicker({
        format: 'dd/mm/yyyy',
        multidate: false,
        clearBtn: true,
        endDate: "1/10/2015",
        startDate:"12/08/2015",
        todayHighlight: false,
        beforeShowDay: function(date) {
            if (occupied(date)) {
                return {classes: 'reserved', tooltip: 'Reserved'};
            }
        }
    }).on('changeDate', function(e) {

        var str = "";
        var isOccupied = false;
        for (var i = 0; i < e.dates.length; i++) {
            if (occupied(e.dates[i])) {
                str += "OCCUPIED";
                isOccupied = true;
            }
            str += e.dates[i].toDateString();
            str += ", "
        }
        if (str.length > 0) {
            str = str.substring(0, str.length - 2);
        }
        if (isOccupied) {
            $("#noDatesAlert").hide();
            $("#occupiedAlert").show();
        }
        else {
            $("#occupiedAlert").hide();
        }
        $('#dates').val(str);
        console.log(str);
    });
});

