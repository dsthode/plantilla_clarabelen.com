var sc_project=5906083; 
var sc_invisible=1; 
var sc_security="a1822d2d";

try {
	(adsbygoogle = window.adsbygoogle || []).push({});
	(adsbygoogle = window.adsbygoogle || []).push({});
	(adsbygoogle = window.adsbygoogle || []).push({});
} catch (err) {}

function googleTranslateElementInit() { 
	new google.translate.TranslateElement({pageLanguage: 'es'}, 'google_translate_element');
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

function loadThingsOnLoad(){
	loadTranslator();
	loadStatCounter();
	loadAdsense();
}

if (window.addEventListener) {
	window.addEventListener('load', loadThingsOnLoad, false);
} else if (window.attachEvent) {
	window.attachEvent('onload', loadThingsOnLoad);
} else {
	window.onload = loadThingsOnLoad;
}
