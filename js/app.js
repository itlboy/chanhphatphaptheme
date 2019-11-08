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
	changeAudio();

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