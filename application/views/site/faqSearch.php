<section>
	<div class="container ">
    	<div class="banner_faq">
        	
            <img src="<?php echo base_url();?>content/images/banner_faq.jpg" alt="" title="" />
            <h1>Astha Trade : Frequently Asked Questions - FAQ’s</h1>
                   
		</div>
        
    </div>
</section>


<section class="tab_part">
	<div class="container tab_part_faq">
    
        <div id="parentVerticalTab">
            <ul class="resp-tabs-list hor_1">
               <li><?php echo $this->session->userdata('faq_cat_name'); ?></li>
            </ul>
			
			
            <div class="resp-tabs-container hor_1">
                <div>
                   <ul class="cd-faq-group">
						<?php
						foreach($faq_searched_result as $faq_result)
						{
                        ?>
                        <li>
                            <a class="cd-faq-trigger" href="#0">Q: <?php echo $faq_result['faq_question']; ?></a>
                            <div  class="cd-faq-content">
                            
                            <p><?php echo $faq_result['faq_answer']; ?></p>
                            </div> <!-- cd-faq-content -->
                        </li>
                        <?php
                        }
                        ?>
					</ul> 
                </div>
            </div>
			
        </div>
                        
    </div>

</section>	

