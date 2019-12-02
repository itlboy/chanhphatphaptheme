$( document ).ready(function(){
	var topMenuEl = $('#menu-top-menu');
	var count = 0;
	$('#menu-top-menu .menu-item').each(function(key,value) { 

		if(!$(value).parent().hasClass('sub-menu')){
			count++;
		}

	});
	var percent = 100/count;
	$('#menu-top-menu .menu-item').each(function(key,value) { 

		if(!$(value).parent().hasClass('sub-menu')){
			$(value).css('width',percent+'%');
		}

	});
	$('#menu-top-menu-1 .menu-item').each(function(key,value) { 

		if(!$(value).parent().hasClass('sub-menu')){
			$(value).css('width',percent+'%');
		}

	});

	changeAudio();
	changeVideo();
	translateStatitic();
	showHideVideoAudioPage();
	checkErrorImage();
});
function changeAudio(){
	var el = $('.widget-audio .news-item .content-news a');
	var elAudioBar = $('.audio-bar audio source');
	el.click(function(e){	
		e.preventDefault();
		var audioId = $(e.target).attr('data-id');
		var audioSrc = $(e.target).attr('data-src');
		var itemActive = $('.widget-audio .news-item.active');
		var itemTarget = $('.widget-audio .news-item[data-id="'+audioId+'"]');
		itemActive.removeClass('active');
		itemTarget.addClass('active');
			
		elAudioBar.attr('src',audioSrc);
		document.getElementById("audio-bar").load();
	});
}
function changeVideo(){
	var el = $('.video-block .news-item .title-news');
	el.click(function(e){
		var dataId = $(e.target).attr('data-id');
		var itemActive = $('.video-block .news-item.active');
		itemTarget = $('.video-block .news-item[data-id="'+dataId+'"]');
		itemActive.removeClass('active');
		itemTarget.addClass('active')
	});
}
function translateStatitic(){
	var values = ['Đang truy cập','Hôm nay','Khách viếng thăm','Hôm qua','Tháng hiện tại','Tổng lượng truy cập']
	var items = $('#wp_statistics_widget-2 ul li');
	$('#wp_statistics_widget-2').css('opacity',0);
	var countItems = items.length;
	var count = 0;
	items.each(function(key,value){
		count++;
		$(value).find('label').text(values[key]);
		if(countItems == count){
			$('#wp_statistics_widget-2').css('opacity',1);
		}
	});
}
function showHideVideoAudioPage(){
	$("#video-dropdown-item").click(function(){
		$('.video-page').show();
		$('.audio-page').hide();
	});
	$("#audio-dropdown-item").click(function(){
		$('.video-page').hide();
		$('.audio-page').show();
	});
}
function checkErrorImage(){
	$('.audio-page .media-item .img-cover-audio img').each(function(key,value){
		$(value).on("error", function() {
			$(value).attr('src', pathNoImage);
		});
	});
}