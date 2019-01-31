$(document).ready(function(){
	//quận chuột scolltop
	$("#scrolltop").click(function() {
		$("html, body").animate({scrollTop:0}, "slow");
	});

	//chiều cao cho sản phẩm
	var temHeight = 0;
	$(".thumbnail").each(function() {
		current = $(this).height();
		if(parseInt(temHeight) < parseInt(current)) {
			temHeight = current;
		}
	});
	$(".img-center").css("height",temHeight+"px");

	// menutop quận theo trang
	// var pos = $(".topMenu").position();
	// $(window).scroll(function(){
	// 	var posScroll = $(document).scrollTop();
	// 	if(parseInt(posScroll) > parseInt(pos.top)) {
	// 		$(".topMenu").addClass("fixed");
	// 	} else {
	// 		$(".topMenu").removeClass("fixed");
	// 	}
	// });
	
});