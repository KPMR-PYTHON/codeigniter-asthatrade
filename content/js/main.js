jQuery(document).ready(function($){
	//update these values if you change these breakpoints in the style.css file (or _layout.scss if you use SASS)
	var MqM= 768,
		MqL = 1024;

	var faqsSections = $('.cd-faq-group'),
		faqTrigger = $('.cd-faq-trigger'),
		faqsContainer = $('.cd-faq-items'),
		faqsCategoriesContainer = $('.cd-faq-categories'),
		faqsCategories = faqsCategoriesContainer.find('a'),
		closeFaqsContainer = $('.cd-close-panel');
	
	//select a faq section 
	


	//show faq content clicking on faqTrigger
	faqTrigger.on('click', function(event){
		event.preventDefault();
		$(this).next('.cd-faq-content').slideToggle(200).end().parent('li').toggleClass('hide');
	});
	$(document).ready( function () {
$(".collapse").collapse()({
  toggle: false,
  show: false
  });
} );

/******************** Alphabet and Space only Validation ********************************/

$(".alphaonly").on("keypress", function(event) {
var englishAlphabet = /[A-Za-z ]/g;
var key = String.fromCharCode(event.which);
 if (event.keyCode == 8 || event.keyCode == 37 || event.keyCode == 39 || englishAlphabet.test(key)) {
        return true;
    }
return false;
});

$('.alphaonly').on("paste",function(e)
{
    e.preventDefault();
});

/******************** Alphabet and Space only Validation ********************************/

});