/* $Id:  $ */
(function($) {

	mapiChats = function() {
		if(Drupal.settings.mapibar) {
			var cbwChat = Drupal.settings.mapibar.chat;
			var cbwSkype = Drupal.settings.mapibar.skype;
			var cbWidth = Drupal.settings.mapibar.width;
			$('#cb-chat').popup(paramsChat, cbwChat);
			$('#cb-skype').popup(paramsSkype, cbwSkype);
			$('#cb-call').popup(paramsSkype, cbwSkype);
			
			
			// Contact bar position hack
			var ww = $(window).width();
			var cb = parseInt((ww-cbWidth)/2)-0;
			$('#contact-bar').css('width', cbWidth);
			$('#contact-bar').css('left', cb);
		}
	}
	
	$(document).ready(function() { 
		mapiChats();
	});
	
	$(window).resize(function() {
	  mapiChats();
	});
})(jQuery); 
