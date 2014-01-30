function googleTranslateElementInit() { new google.translate.TranslateElement({pageLanguage: 'es'}, 'google_translate_element'); } 

function loadTranslatorOnLoad(){
	var tra= document.createElement('script'); tra.type="text/javascript"; tra.async=true;
	tra.src= ('https:' == document.location.protocol ? 'https:' : 'http:') + "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(tra, s);
}

if (window.addEventListener) {
	window.addEventListener('load', loadTranslatorOnLoad, false);
} else if (window.attachEvent) {
	window.attachEvent('onload', loadTranslatorOnLoad);
} else {
	window.onload = loadTranslatorOnLoad;
}
