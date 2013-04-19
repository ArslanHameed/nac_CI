<script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function() {

//1st tab edit
		$('#edit_personal').click(function(){
			
						$('.forth_tab').fadeOut('slow','linear');
						$('.first_tab').fadeIn('slow','linear');
						
						$('.scnd_tab').css('display', 'none' );
						$('.third_tab').css('display', 'none' );
						$('.forth_tab').css('display', 'none' );
						$('#forth').removeClass('active');
						$('#first').addClass('active');
						
						document.getElementById('prog').innerHTML = "<img src='<?php echo base_url(); ?>assets/images/first_progress.png' />";
				  
			
		});//end click
		
		//2nd tab edit
		$('#edit_qualify').click(function(){
						$('.forth_tab').fadeOut('slow','linear');
						$('.scnd_tab').fadeIn('slow','linear');
							
						$('.first_tab').css('display', 'none' );
						$('.scnd_tab').css('display', 'block' );
						$('.third_tab').css('display', 'none' );
						$('.forth_tab').css('display', 'none' );
						$('#forth').removeClass('active');
						$('#scnd').addClass('active');
						
						document.getElementById('prog').innerHTML = "<img src='<?php echo base_url(); ?>assets/images/thrd_progress.png' />";

						$("html, body").animate({ scrollTop: 0 }, 800);
				  
			
		});//end click
		
		//3rd tab edit
		$('#edit_clinical').click(function(){
						$('.forth_tab').fadeOut('slow','linear');
						$('.third_tab').fadeIn('slow','linear');
							
						$('.first_tab').css('display', 'none' );
						$('.scnd_tab').css('display', 'none' );
						$('.third_tab').css('display', 'block' );
						$('.forth_tab').css('display', 'none' );
						$('#forth').removeClass('active');
						$('#third').addClass('active');
						
						document.getElementById('prog').innerHTML = "<img src='<?php echo base_url(); ?>assets/images/thrd_progress.png' />";

						$("html, body").animate({ scrollTop: 0 }, 800);
				  
			
		});//end click
});
</script>
<form name="register4" method="post" id="register4" action="#">
		<?php foreach($temp_user_details as $details){ ?>
                            	<div class="details_box">
                                    <h2 class="review_heading">Personal Details</h2>
                                    <a id="edit_personal">Edit</a>
                                    <div class="fields_box">
                                    	
                                            <div class="check_label_short">
                                                <label>Name</label>
                                            </div>
                                         
                                         
                                            <div class="check_label_long">
                                                <label><?php echo $details->title."  ".$details->first_name."  ".$details->sur_name; ?></label>
                                            </div>
                                       
                                  	</div>
                                     <div class="fields_box">
                                    	
                                            <div class="check_label_short">
                                                <label>DOB</label>
                                            </div>
                                         
                                         
                                            <div class="check_label_long">
                                                <label><?php
											echo $details->day."/".$details->month."/".$details->year;?></label>
                                            </div>
                                       
                                  	</div>
                                     <div class="fields_box">
                                    	
                                            <div class="check_label_short">
                                                <label>Primary Phone No.</label>
                                            </div>
                                         
                                         
                                            <div class="check_label_long">
                                                <label><?Php echo $details->pref_phone_no; ?></label>
                                            </div>
                                       
                                  	</div>
                                     <div class="fields_box">
                                    	
                                            <div class="check_label_short">
                                                <label>Secondary Phone NO.</label>
                                            </div>
                                         
                                         
                                            <div class="check_label_long">
                                                <label><?Php echo $details->alt_phone_no; ?></label>
                                            </div>
                                       
                                  	</div>
                                     <div class="fields_box">
                                    	
                                            <div class="check_label_short">
                                                <label>Email</label>
                                            </div>
                                         
                                         
                                            <div class="check_label_long">
                                                <label><?Php echo $details->email; ?></label>
                                            </div>
                                       
                                  	</div>
                                     <div class="fields_box">
                                    	
                                            <div class="check_label_short">
                                                <label>Address</label>
                                            </div>
                                         
                                         
                                            <div class="check_label_long">
                                                <label><?php echo $details->number."  ".$details->street.",".$details->country.",".$details->postcode; ?></label>
                                            </div>
                                       
                                  	</div>
                                        
                                    
                            	
                            </div>
                            
                            
                            
                            <div class="details_box">
                                    <h2 class="review_heading">Qualifications</h2>
                                    <a id="edit_qualify">Edit</a>
                                    <div class="fields_box"> 
                                            <div class="check_label_long">
                                                <label>I'm registered as a Nurses in <?Php echo $details->country_of_reg; ?></label>
                                            </div>
                                       
                                  	</div>
                                     <div class="fields_box">
                                    	
                                            <div class="check_label_long">
                                                <label>I completed my medical training in <?Php echo $details->country_of_training; ?></label>
                                            </div>
                                       
                                  	</div>
                                     <div class="fields_box">
                                 
                                            <div class="check_label_long">
                                                <label>I hold a <?Php echo $details->pref_location; ?>  Passport</label>
                                            </div>
                                       
                                  	</div>
                                     <div class="fields_box">
                              
                                            <div class="check_label_long">
                                                <label>I have <?Php echo $details->experience; ?> Post Graduate experience</label>
                                            </div>
                                       
                                  	</div>
            
                            </div>
                            
                            <div class="details_box" style="border-bottom:0;">
                                    <h2 class="review_heading">Clinical Skills</h2>
                                    <a id="edit_clinical">Edit</a>
                                    <?Php
									
									if($details->cannulation == '1') { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo "Cannulation"; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									if($details->PaediatricsNeonatal == '1') { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo "Paediatrics / Neonatal"; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                     <?Php
									 if($details->Triage == '1') { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo "Triage"; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									if($details->Cardiac == '1') { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo "Cardiac"; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									if($details->Venepuncture == '1') { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo "Venepuncture"; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									if($details->CommunityNursing == '1') { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo "Community Nursing"; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									if($details->Sutering == '1') { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo "Sutering"; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									if($details->OperatingTheatre == '1') { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo "Operating Theatre"; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									if($details->VentilatorCompetent == '1') { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo "Ventilator Competent"; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									if($details->AgedCare == '1') { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo "Aged Care"; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									if($details->AdvancedCardiacLifeSupport == '1') { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo "Advanced Cardiac Life Support"; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									if($details->Midwifery == '1') { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo "Midwifery"; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									if($details->Defibrillation == '1') { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo "Defibrillation"; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									if($details->Medical == '1') { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo "Medical"; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									if($details->Scrub == '1') { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo "Scrub"; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									if($details->MentalHealth == '1') { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo "Mental Health"; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php 
									if($details->Anaesthetic == '1') { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo "Anaesthetic"; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									if($details->xrays == '1') { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo "X-RAY"; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									if($details->DeliverySuite == '1') { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo "Delivery Suite"; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									if($details->IntensiveCare == '1') { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo "Intensive Care"; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									if($details->AccidentEmergency == '1') { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo "Accident Emergency"; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php 
									if($details->other == '1') { ?>
                                      <div class="fields_box">
                              
                                            <div class="check_label_short long">
                                                <img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label>other (please specify below)</label>
                                            </div>
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									if($details->other1 != "") { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short long">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $details->other1; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									if($details->other2 != "") { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short long">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $details->other2; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php 
									if($details->other3 != "") { ?>
                                    <div class="fields_box">
                              
                                            <div class="check_label_short long">
                                                <img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $details->other3; ?></label>
                                            </div>
                                       
                                  	</div>
            						<?php  } ?>
                                    
                            </div>
                            <!-- end detaails box-->
                            	<!-- Chat Submit Box-->
                                <div class="submit_box">
                                    
                                    <div class="chat">
                                        <a href="#">Live Chat with a recruiter</a>
                                    </div>
                                    
                                    <div class="btn" id="submit">
                                        <input type="submit" name="submit_forth" id="submit-btn4" value="Submit" class="sbmt_btn" />
                                	</div>
                    
                                </div>
                                <!-- Chat Submit Box End -->
      <?php }//end foreach ?>
                        	</form>