
$( document ).ready(function() {

	$('video,audio').mediaelementplayer(/* Options */);

	$('.Absolute-Center').css( "width", function( index ) {
		return $('.thevideo').width();
	});

	$('.Absolute-Center').css( "height", function( index ) {
		return $('.thevideo').height();
	});

});
