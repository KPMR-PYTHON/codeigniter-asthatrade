<section class="open_account">
<div class="container">
<div class="clear"></div>
<h2>Form & Formats</h2>
    </div>
</section>
<section class="sec_accordian">
<div class="container2">
          
          <div class="accordion">
            <dl>
              <dt>
                <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">NSE (Equity , F&amp;O &amp; Demat) 
														account opening form</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
                <p><a href="https://asthawebsite.s3.ap-south-1.amazonaws.com/NSE.pdf" target="_blank">Click here to download PDF</a></p>
              </dd>
              <dt>
                <a href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="accordion-title accordionTitle js-accordionTrigger">
                  Commodity ( MCX) account opening form</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion2" aria-hidden="true">
                <p><a href="https://asthawebsite.s3.ap-south-1.amazonaws.com/MCX.pdf" target="_blank">Click here to download PDF</a></p>
              </dd>
            
               <dt>
                <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">NSE (Equity , F&amp;O &amp; Demat) and MCX 
														both account opening form</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
                <p><a href="https://asthawebsite.s3.ap-south-1.amazonaws.com/NSE_MCX_DEMAT.pdf" target="_blank">Click here to download PDF</a></p>
              </dd>

                
	    <dt>
                <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  Modification form 
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                <p><a href="https://www.dropbox.com/s/sf8or11lrp4iryb/MODIFICATION_FORM.pdf?dl=1" target="_blank">Click here to download PDF</a></p>
              </dd>
              
              <dt>
                <a href="#accordion4" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  KYC form 
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                <p><a href="https://s3.ap-south-1.amazonaws.com/asthawebsite/kyc_form.pdf" target="_blank">
															Click here to download 
															PDF</a></p>
              </dd>
              
		      <dt>
                <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                 Trading in MCX Commodity 
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                <p><a href="https://asthawebsite.s3.ap-south-1.amazonaws.com/Trading_in_MCX.pdf" target="_blank">Click here to download PDF</a></p>
              </dd>
              
             
          
		    
		    
		    
              <dt>
                <a href="#accordion4" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  Fatca
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                               <p><a href="https://s3.ap-south-1.amazonaws.com/asthawebsite/fatca.pdf" target="_blank">
															Click here to download 
															PDF</a></p>
              </dd>
              <dt>
                <a href="#accordion4" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  Power Of Attorney
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                               <p><a href="https://s3.ap-south-1.amazonaws.com/asthawebsite/Power_Of_Attorney.pdf" target="_blank">
                              Click here to download 
                              PDF</a></p>
              </dd>


            </dl>
          </div>
        </div>
</section>	
<script>
//uses classList, setAttribute, and querySelectorAll
//if you want this to work in IE8/9 youll need to polyfill these
(function(){
	var d = document,
	accordionToggles = d.querySelectorAll('.js-accordionTrigger'),
	setAria,
	setAccordionAria,
	switchAccordion,
  touchSupported = ('ontouchstart' in window),
  pointerSupported = ('pointerdown' in window);
  
  skipClickDelay = function(e){
    e.preventDefault();
    e.target.click();
  }

		setAriaAttr = function(el, ariaType, newProperty){
		el.setAttribute(ariaType, newProperty);
	};
	setAccordionAria = function(el1, el2, expanded){
		switch(expanded) {
      case "true":
      	setAriaAttr(el1, 'aria-expanded', 'true');
      	setAriaAttr(el2, 'aria-hidden', 'false');
      	break;
      case "false":
      	setAriaAttr(el1, 'aria-expanded', 'false');
      	setAriaAttr(el2, 'aria-hidden', 'true');
      	break;
      default:
				break;
		}
	};
//function
switchAccordion = function(e) {
  console.log("triggered");
	e.preventDefault();
	var thisAnswer = e.target.parentNode.nextElementSibling;
	var thisQuestion = e.target;
	if(thisAnswer.classList.contains('is-collapsed')) {
		setAccordionAria(thisQuestion, thisAnswer, 'true');
	} else {
		setAccordionAria(thisQuestion, thisAnswer, 'false');
	}
  	thisQuestion.classList.toggle('is-collapsed');
  	thisQuestion.classList.toggle('is-expanded');
		thisAnswer.classList.toggle('is-collapsed');
		thisAnswer.classList.toggle('is-expanded');
 	
  	thisAnswer.classList.toggle('animateIn');
	};
	for (var i=0,len=accordionToggles.length; i<len; i++) {
		if(touchSupported) {
      accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);
    }
    if(pointerSupported){
      accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
    }
    accordionToggles[i].addEventListener('click', switchAccordion, false);
  }
})();
</script>
