/*
auth : @lukyvj
name : CSSwitch.js (based on Jquery) 
version : 1.0.2
note : Just for the dev use, it will be outsourced and re-worked  to make a plugin that change the CSS every XX times

*/
$(document).ready(function() {
	setInterval(function(){$('#wrapper').addClass('monday')}, 0);
	setInterval(function(){$('#wrapper').addClass('tuesday')},1000);
	setInterval(function(){$('#wrapper').addClass('wednesday')}, 2000);
	setInterval(function(){$('#wrapper').addClass('thursday')}, 3000);
	setInterval(function(){$('#wrapper').addClass('friday')}, 4000);
	setInterval(function(){$('#wrapper').addClass('saturday')}, 5000);
	setInterval(function(){$('#wrapper').addClass('sunday')}, 6000);

    if ( $('#wrapper').hasClass('sunday') ) {
      this.removeClass('monday tuesday wednesday thursday friday saturday sunday'), 80000;
    } else {
      //nothing
    }

});

/**/

