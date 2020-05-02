;(function($){
    $(window).on("elementor/frontend/init", function () {
        elementorFrontend.hooks.addAction("frontend/element_ready/amor-events.default", function (scope, $) {
            // loopcounter('counter-class1');
            // loopcounter('counter-class2');
            // loopcounter('counter-class3');
            // loopcounter('counter-class4');


            // var clock = $(scope).find(".amor-counterup-hasan");
            // if (clock.length > 0) {
            //     var amorCounter = clock.data('amor-counter-hasan');
            //     clock.countdown( amorCounter ).on('update.countdown', function(event) {
            //     var $this = $(this).html(event.strftime(''
            //         + '<li><span id="days">%-d</span> Days%!d</li> '
            //         + '<li><span id="hours">%H</span> Hours%!d</li> '
            //         + '<li><span id="minutes">%M</span> Minutes%!d</li> ' ));
            //     });
            // }
        });
    });
})(jQuery);
