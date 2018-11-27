$(function(){
	// $('.menu_item').hover(function(){
	// 	if($(this).find('.menu_block_hiden').length){
	// 		console.log('a');
	// 		var count = $(this).find('.menu_block_hiden .menu_block_subitem').length;
	// 		console.log(count);
	// 		var height = ( (count + 1 ) * 36 ) + "px";
	// 		// var height = '100px';
	// 		$(this).animate({maxHeight: height }, "slow", "swing");
	// 		$(this).find('.menu_block_hiden').show();
	// 	}
	// },function(){
	// 	if($(this).find('.menu_block_hiden').length){
	// 		$(this).find('.menu_block_hiden').hide();
	// 	}
	// });
	// $(".menu_item").hover(
	// function(){
	// 	if($(this).find('.menu_block_hiden').length){
	// 		var count = $(this).find('.menu_block_hiden .menu_block_subitem').length * 37 + 46;
	// 		$(this).find('.menu_block_hiden').show();
	// 		$(this).animate({
	// 			height: count + "px"
	// 		},"swing");
	// 		$(this).find('.menu_block_name').height('36px');
	// 	}
	// }, function(){
	// 	if($(this).find('.menu_block_hiden').length){
	// 		$(this).find('.menu_block_hiden').hide();
	// 		$(this).animate({
	// 			height: "36px"
	// 		},  "swing");
	// 	}
	// });
	$(".menu_item").click(function(){
		if($(this).find('.menu_block_hiden').length){
			toggle_submenu($(this));
		}
	});
	$('#query_reset_button').click(function(){
		$('form').find('input[type=text] , input[type=date] , input[type=number]').each(function(idx, target){
			$(target).val('');
		});
	});

});

function toggle_submenu(target){
	target.find('.menu_block_hiden').toggle();
	var height = target.height();
	if(height <= 40){
		target.find('.has_submenu').css('background-image', 'url(/images/arrow_up.png)');
		var count = target.find('.menu_block_hiden .menu_block_subitem').length * 37 + 46;
		target.animate({
			height: count + "px"
		},"swing");
		target.find('.menu_block_name').height('36px');
	}else{
		target.find('.has_submenu').css('background-image', 'url(/images/arrow_down.png)');
		target.animate({
			height: "36px"
		},  "swing");
	}
}