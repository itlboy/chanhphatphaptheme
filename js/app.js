$( document ).ready(function(){
	var topMenuEl = $('#menu-top-menu');
	console.log("topMenuEl: ",topMenuEl);
	var countItems = $('#menu-top-menu .menu-item').length;
	var percent = 100/countItems;
	$('#menu-top-menu .menu-item').css('width',percent+'%');
});