$(document).ready(function () {
	$('.galary .g li img').click(function () {
		$('.cake .big').attr("src",$(this).attr('src'));
	});
});