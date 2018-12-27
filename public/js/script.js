$(document).ready(function(){
	$('.small-pic').click(function(){
		$('.large-pic').attr('src',$(this).attr('src'));
		$('.small-pic').addClass('faded');
		$(this).removeClass('faded');
	})
})