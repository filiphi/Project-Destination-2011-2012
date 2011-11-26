function setHome(){
	var home = $("#home").html();
	home = parseInt(home);
	var ts = $('ul.menu li:nth-child('+home+')');
	ts.toggleClass("current");
	ts.find("p").before("<img src='http://dev.thsnaringsliv.se/destination/wp-content/uploads/2011/11/flight.gif'/>")

	ts.unbind('mouseenter').unbind('mouseleave');
	console.log(ts);
}
jQuery(function() {
	var fadeDuration = 150; //time in milliseconds
	$('ul.menu li').each(function (i){
		var a = $(this).children('a');
		var div = $('<div/>', {'class':'menulidiv'});
		div.append("<p>"+ a.html() + "</p>");
		a.html("");
		div.appendTo(a);
		
	});
	$('ul.menu li').hover(function() {
		$(this).animate({ width: '170px' }, fadeDuration);
		$(this).find('div').animate({left:'80px'}, fadeDuration);
	}, function() {
		$(this).animate({ width: '90px' }, fadeDuration);
		$(this).find('div').animate({left:'0px'}, fadeDuration);

	});
	setHome();
});