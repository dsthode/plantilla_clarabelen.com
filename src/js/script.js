var sc_project=5906083; 
var sc_invisible=1; 
var sc_security="a1822d2d";

try {
	(adsbygoogle = window.adsbygoogle || []).push({});
	(adsbygoogle = window.adsbygoogle || []).push({});
	(adsbygoogle = window.adsbygoogle || []).push({});
	(adsbygoogle = window.adsbygoogle || []).push({});
} catch (err) {}

function googleTranslateElementInit() { 
	new google.translate.TranslateElement({pageLanguage: 'es'}, 'google_translate_element');
} 

var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];

try {
	(function() {
	 var gads = document.createElement('script');
	 gads.async = true;
	 gads.type = 'text/javascript';
	 var useSSL = 'https:' == document.location.protocol;
	 gads.src = (useSSL ? 'https:' : 'http:') + '//www.googletagservices.com/tag/js/gpt.js';
	 var node = document.getElementsByTagName('script')[0];
	 node.parentNode.insertBefore(gads, node);
	 })();
} catch (err) {
}

function loadTranslator()  {
	var tra= document.createElement('script');
	tra.type="text/javascript";
	tra.async=true;
	tra.src= ('https:' == document.location.protocol ? 'https:' : 'http:') + "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(tra, s);
}

function loadStatCounter() {
	var counter = document.createElement('script'); 
	counter.type='text/javascript'; 
	counter.async=true;
	counter.src="http://www.statcounter.com/counter/counter.js";
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(counter, s);
}

function loadAdsense() {
	var adsrc = document.createElement('script');
	adsrc.type = 'text/javascript';
	adsrc.async = true;
	adsrc.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + '//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(adsrc, s);
}

function loadAdsenseNuevo() {
	googletag.cmd.push(function() {
		googletag.defineSlot('/1024259/claraBelen_300', [300, 250], 'div-gpt-ad-1392106267992-0').addService(googletag.pubads());
		googletag.defineSlot('/1024259/claraBelen_320', [320, 50], 'div-gpt-ad-1392106267992-1').addService(googletag.pubads());
		googletag.defineSlot('/1024259/claraBelen_336', [336, 280], 'div-gpt-ad-1392106267992-2').addService(googletag.pubads());
		googletag.defineSlot('/1024259/claraBelen_728', [728, 90], 'div-gpt-ad-1392106267992-3').addService(googletag.pubads());
		googletag.pubads().enableSingleRequest();
		googletag.enableServices();
	});

//	$(document).ready(function() {
		enquire
		.register("screen and (max-width:600px)", function() { 
			googletag.cmd.push(function() { googletag.display('div-gpt-ad-1392106267992-1'); });
			googletag.cmd.push(function() { googletag.display('div-gpt-ad-1392106267992-0'); });
			})
		.register("screen and (min-width:900px)", function() {
			googletag.cmd.push(function() { googletag.display('div-gpt-ad-1392106267992-0'); });
			googletag.cmd.push(function() { googletag.display('div-gpt-ad-1392106267992-2'); });
			googletag.cmd.push(function() { googletag.display('div-gpt-ad-1392106267992-3'); });
			});	
//	});
}

function initializeSubmenus() {
	jQuery('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
		// Avoid following the href location when clicking
		event.preventDefault(); 
		// Avoid having the menu to close when clicking
		event.stopPropagation(); 
		// If a menu is already open we close it
		jQuery('ul.dropdown-menu [data-toggle=dropdown]').parent().removeClass('open');
		// opening the one you clicked on
		jQuery(this).parent().addClass('open');
	});
}
function loadThingsOnLoad(){
	loadTranslator();
	loadStatCounter();
	loadAdsense();
	initializeSubmenus();
	googleTranslateElementInit();
}

if (window.addEventListener) {
	window.addEventListener('load', loadThingsOnLoad, false);
} else if (window.attachEvent) {
	window.attachEvent('onload', loadThingsOnLoad);
} else {
	window.onload = loadThingsOnLoad;
}
