

<script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function() {
		$('.scnd_tab').css('display', 'none' );
		$('.third_tab').css('display', 'none' );
		$('.forth_tab').css('display', 'none' );
		$('#first').addClass('active');
		
		document.getElementById('prog').innerHTML = "<img src='<?php echo base_url(); ?>assets/images/first_progress.png' />";
		
		
		
		//2nd tab start
		$('#submit-btn1').click(function(){
						$('#register1').on('submit',function(){
							dataString = $("#register1").serialize();
							
							
							$.ajax({
								type     : "POST",
								cache    : false,
								url : '<?php echo base_url(); ?>site/personal_details_submitted',
								//url      : $(this).attr('action'),
								data: 	dataString,
								success  : function(data) {
										
										$('.first_tab').fadeOut('slow','linear');
										$('.scnd_tab').fadeIn('slow','linear');
										
										$('.first_tab').css('display', 'none' );
										$('.scnd_tab').css('display', 'block' );
										$('.third_tab').css('display', 'none' );
										$('.forth_tab').css('display', 'none' );
										$('#first').removeClass('active');
										$('#scnd').addClass('active');
									
										document.getElementById('prog').innerHTML = "<img src='<?php echo base_url(); ?>assets/images/scnd_progress.png' />";
										$("html, body").animate({ scrollTop: 0 }, 800);
										
										}
										
						});//ajax end
						return false;
						
			
					});//on submit
				  
			
		});//end click
		
		//3rd tab start
		$('#submit-btn2').click(function(){
			$('#register2').on('submit',function(){
							
							dataString = $("#register2").serialize();
							$.ajax({
								type     : "POST",
								cache    : false,
								url : '<?php echo base_url(); ?>site/qualification_details_submitted',
								data: 	dataString,
								success  : function(data) {
			
										$('.scnd_tab').fadeOut('slow','linear');
										$('.third_tab').fadeIn('slow','linear');
											
										$('.first_tab').css('display', 'none' );
										$('.scnd_tab').css('display', 'none' );
										$('.third_tab').css('display', 'block' );
										$('.forth_tab').css('display', 'none' );
										$('#scnd').removeClass('active');
										$('#third').addClass('active');
										
										document.getElementById('prog').innerHTML = "<img src='<?php echo base_url(); ?>assets/images/thrd_progress.png' />";
			
										$("html, body").animate({ scrollTop: 0 }, 800);
			
								}
							});//ajax end
							return false;
			
				});//on submit
			
			
		});//end click
		
		//4th tab start
		$('#submit-btn3').click(function(){
			
				$('#register3').on('submit',function(){
							
							 dataString = $("#register3").serialize();
							
							$.ajax({
								type     : "POST",
								cache    : false,
								url : '<?php echo base_url(); ?>site/clinical_details_submitted',
								data: 	dataString,
								success  : function(data) {
			
									$('.third_tab').fadeOut('slow','linear');
									$('.forth_tab').fadeIn('slow','linear');
									
									$('.first_tab').css('display', 'none' );
									$('.scnd_tab').css('display', 'none' );
									$('.third_tab').css('display', 'none' );
									$('.forth_tab').css('display', 'block' );
									$('#third').removeClass('active');
									$('#forth').addClass('active');
									
									document.getElementById('prog').innerHTML = "<img src='<?php echo base_url() ?>assets/images/forth_progress.png' />";
									$("html, body").animate({ scrollTop: 0 }, 800);
									$('.forth_tab').html(data);
									}
							});//ajax end
							return false;
			
				});//on submit
			
		});//end click
		
		
		
		
		
		
});//end ready

</script>
<!-- Main Content Wrapper -->
<div class="main-content-wrapper">
	<div class="main-content">
    		<!-- progress  Start -->
        	<div class="progress" id="prog">
            	
            </div>
        	<!-- progress  End -->
        	<!-- Register Heading start-->
        	<div class="register_heading">
            	<h1>Register with Nurse a Call</h1>
                <p>Register your interest today to become a part of the Nurse at Call family of travel nurses &amp; midwives. Be remunerated as a true professional and make a difference to the lives of those around you all whilst have the time of your life in Australia!</p>
            </div>
        	<!-- Register Heading  End -->
            
            <!-- Register Box start-->
        	<div class="register_box">
            	<div class="register_steps">
                	<ul>
                    	<li id="first"><a>1. Your Details</a></li>
                        <li id="scnd"><a>2. Qualifications</a></li>
                        <li id="third"><a>3. Clinical Skills</a></li>
                        <li id="forth"><a>4. Review &amp; Submit</a></li>
                        
                    </ul>
                </div>
               	<div class="register_tabs_wrapper" id="register_wrapper">
                
                	 
                    <div class="register_tabs">
                        
                        	<!-- 1st tab start-->
                            <div class="first_tab">
                            	<form name="register" id="register1" method="post">
                               <?php //if(!empty($temp_user_details)){ $temp = $temp_user_details[0]; } ?>
                                <div class="details_box">
                                    <h2>Personal Details</h2>
                                    <div class="fields_box">
                                        <select name="title" id="title" class="dropdown_short" required>
                                            <option value="">Title</option>
                              				<option <?php //if((isset($temp->title) && $temp->title == "Mr")){ ?>  <?php  //}  ?> value="Mr">Mr</option>
                                            <option <?php //if((isset($temp->title) && $temp->title == "Miss")){ ?> <?php  //}  ?> value="Miss">Miss</option>
                                            <option <?php //if((isset($temp->title) && $temp->title == "Mrs")){ ?> <?php  //}  ?> value="Mrs">Mrs</option>
                                            
                                        </select>
                                        <input type="text" id="fname" name="firstName" placeholder="First Name" value="<?php //if(isset($temp->first_name)) echo $temp->first_name; ?>" class="text_field" required />
                                        <input type="text" id="lname" name="surName" placeholder="Surname"  <?php //if(isset($temp->sur_name)) echo $temp->sur_name; ?> class="text_field" required />
                                    </div>
                                    <div class="fields_box">
                                        <label for="birthDate" class="label">Date of Birth</label>	
                                        <select name="day" class="dropdown_short" required>
                                            <option value="">Day</option>
                                            <option <?php //if((isset($temp->day) && $temp->day == "01")){ ?>  <?php  //}  ?> value="01">01</option>
                                            <option <?php //if((isset($temp->day) && $temp->day == "02")){ ?>  <?php  //}  ?> value="02">02</option>
                                            <option <?php //if((isset($temp->day) && $temp->day == "03")){ ?> <?php  //}  ?> value="03">03</option>
                                        </select>
                                        <span>/</span>
                                        <select name="month" class="dropdown_medium" required>
                                            <option value="">Month</option>
                                            <option <?php //if((isset($temp->month) && $temp->month == "jan")){ ?>  <?php  //}  ?> value="jan">jan</option>
                                            <option <?php //if((isset($temp->month) && $temp->month == "feb")){ ?>  <?php  //}  ?> value="feb">feb</option>
                                            <option <?php //if((isset($temp->month) && $temp->month == "mar")){ ?>  <?php  //}  ?> value="mar">march</option>
                                        </select>
                                        <span>/</span>
                                        <select name="year" class="dropdown_short" required> 
                                            <option value="">year</option>
                                            <option <?php //if((isset($temp->month) && $temp->month == "11")){ ?>  <?php  //}  ?>  value="11">11</option>
                                            <option <?php //if((isset($temp->month) && $temp->month == "12")){ ?>  <?php  //}  ?> value="12">12</option>
                                            <option <?php //if((isset($temp->month) && $temp->month == "13")){ ?>  <?php  //}  ?> value="13">13</option>
                                        </select>
                                    </div>
                                    
                                    
                                </div>
                                <!-- personal Details end-->
                                
                                <!-- Contact Details-->
                                <div class="details_box">
                                    <h2>Contact Details</h2>
                                    <div class="fields_box">
                                        
                                        <input type="text" name="phoneNumber" placeholder="Preferred Phone Number" value="<?php //if(isset($temp->pref_phone_no)) echo $temp->pref_phone_no; ?>" class="text_field single" required />
                                        <input type="text" name="altPhoneNumber" placeholder="Alternative Phone Number" <?php //if(isset($temp->alt_phone_no)) echo $temp->alt_phone_no; ?> class="text_field single" required />
                                        <span class="optional">Optional</span>
                                        <input type="text" name="emailAddress" placeholder="Email Address" <?php //if(isset($temp->email)) echo $temp->email; ?> class="text_field single" required />
                                       
                                    </div>
                                   
                                
                                </div>
                                <!-- Contact Details end-->
                                
                                <!-- living Details-->
                                <div class="details_box">
                                    <h2>Where Do You Live?</h2>
                                    <div class="fields_box">
                                        
                                        <input type="text" name="number" placeholder="Number" class="text_field_short" <?php //if(isset($temp->number)) echo $temp->number; ?> required />
                                        <input type="text" name="street" placeholder="Street" class="text_field_long" <?php //if(isset($temp->street)) echo $temp->street; ?> required />
                                        
                                    </div>
                                    
                                    <div class="fields_box">
                                        <input type="text" name="suburb" placeholder="Suburb" class="text_field sub_state" <?php //if(isset($temp->suburb)) echo $temp->suburb; ?> required />
                                        <input type="text" name="state" placeholder="State" class="text_field sub_state" required />
                                        
                                    </div>
                                    
                                    <div class="fields_box">
                                        <input type="text" name="postcode" placeholder="Postcode" class="text_field sub_state" <?php //if(isset($temp->postcode)) echo $temp->postcode; ?> required />
                                        <select style="padding:9px; width:275px;" name="country" class="text_field sub_state" required>
                                            <option value="">Country</option>
                                            <option <?php //if((isset($temp->country) && $temp->country == "pak")){ ?>  <?php  //}  ?> value="pak">Pak</option>
                                            <option <?php //if((isset($temp->country) && $temp->country == "ind")){ ?>  <?php  //}  ?>  value="ind">IND</option>
                                        </select>
                                        
                                    </div>
                                   
                                
                                </div>
                                <!-- living Details end-->
                                
                                 <!-- position Details-->
                                <div class="details_box" style="border-bottom:0;">
                                    <h2>Whats the position your applying for?</h2>
                                    <div class="fields_box">
                                        
                                       <select style="padding:9px; width:275px;" name="position" class="text_field sub_state" required>
                                            <option value="">Select</option>
                                            <option <?php //if((isset($temp->position) && $temp->position == "major")){ ?>  <?php  //}  ?>  value="major">major</option>
                                            <option <?php //if((isset($temp->position) && $temp->position == "minor")){ ?>  <?php  //}  ?>  value="minor">minor</option>
                                        </select>
                                       
                                    </div>
                                   
                                
                                </div>
                                <!-- position Details end-->
                                <!-- Chat Submit Box-->
                                <div class="submit_box">
                                    
                                    <div class="chat">
                                        <a href="#">Live Chat with a recruiter</a>
                                    </div>
                                    
                                    <div class="btn" id="submit">
                                        <input type="submit" name="submit_first" value="Next" id="submit-btn1" class="sbmt_btn"  />
                                	</div>
                    
                                </div>
                                <!-- Chat Submit Box End -->
                                
                               </form> 
                            </div>
                            <!-- 1st tab end-->
                            <!-- 2nd tab start-->
                            <div class="scnd_tab">
                            	<form name="register2" id="register2" method="post">
                            	 <!-- country qualification Details-->
                                <div class="details_box">
                                    <h2>Country of Qualifications</h2>
                                    <div class="fields_box">
                                        <label class="label label_text" for="Country of Nurse registration">Country of Nurse registration</label>
                                        <select style="padding:9px; width:275px;" name="countryNurse" class="text_field sub_state" required>
                                            <option value="">Select</option>
                                            <option value="nz">NZ</option>
                                            <option value="aus">AUS</option>
                                        </select>
                                    </div>
                                    <div class="fields_box">
                                         <label class="label label_text" for="countryCompletedTraining">Country where you completed your training</label>
                                        <select style="padding:9px; width:275px;" name="countryTraining" class="text_field sub_state" required>
                                            <option value="">Select</option>
                                            <option value="aus">Aus</option>
                                            <option value="nz">NZ</option>
                                        </select>
                                    </div>
                                    
                                    
                                </div>
                                <!-- country qualification Details end-->
                                
                                <!-- Experiance Details-->
                                <div class="details_box">
                                    <h2>Experience</h2>
                                    <div class="fields_box">
                                        
                                         <label class="label label_text" for="yearsOfPostGRaduates">Years of post graduates experience</label>
                                        <select style="padding:9px; width:275px;" name="experience" class="text_field sub_state" required>
                                            <option value="">Select</option>
                                            <option value="2">2 years</option>
                                            <option value="3">3 years</option>
                                        </select>
                                       
                                    </div>
                                   
                                
                                </div>
                                <!-- Experiance Details end-->
                                
                                <!-- preffered locations-->
                                <div class="details_box" style="border-bottom:0;">
                                    <h2>Whats your preferred location to work?</h2>
                                    <div class="fields_box">
                                        
                                        <select style="padding:9px; width:275px;" name="prefLocation" class="text_field sub_state" required>
                                            <option value="">Select</option>
                                            <option value="aus">aus</option>
                                            <option value="nz">nz</option>
                                        </select>
                                        <span class="optional span_txt">We will attempt to put you in your preferred destination, Should there be no appropriate positions we will find the next best assignment for you.</span>
                                        
                                    </div>
                            
                                </div>
                                <!-- preferred locations Details end-->
								<!-- Chat Submit Box-->
                                <div class="submit_box">
                                    
                                    <div class="chat">
                                        <a href="#">Live Chat with a recruiter</a>
                                    </div>
                                    
                                    <div class="btn" id="submit">
                                        <input type="submit" name="submit_scnd" value="Next" id="submit-btn2" class="sbmt_btn" />
                                	</div>
                    
                                </div>
                                <!-- Chat Submit Box End -->
                              	</form>
                            </div>
                            <!-- 2nd tab end-->
                            <!-- 3rd tab start-->
                            <div class="third_tab">
                            	<form name="register3" method="post" id="register3">
                            	 <div class="details_box" style="border-bottom:0;">
                           <h2>Tell us your Clinical Skills <span>(select all appropriate)</span></h2>
                                    <div class="fields_box">
                                    	<div class="tick_box">
                                            <div class="check_box">
                                                <input type="checkbox" name="cannulation" class="check" value="1" />
                                            </div>
                                            <div class="check_label">
                                                <label>Cannulation</label>
                                            </div>
                                        </div>
                                        
                                        <div class="tick_box">
                                            <div class="check_box">
                                                <input type="checkbox" name="paediatricsNeonatal" class="check" value="1" />
                                            </div>
                                            <div class="check_label">
                                                <label>Paediatrics / Neonatal</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="fields_box">
                                    	<div class="tick_box">
                                            <div class="check_box">
                                                <input type="checkbox" name="triage" class="check" value="1" />
                                            </div>
                                            <div class="check_label">
                                                <label>Triage</label>
                                            </div>
                                        </div>
                                        
                                        <div class="tick_box">
                                            <div class="check_box">
                                                <input type="checkbox" name="cardiac" class="check" value="1" />
                                            </div>
                                            <div class="check_label">
                                                <label>Cardiac</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="fields_box">
                                    	<div class="tick_box">
                                            <div class="check_box">
                                                <input type="checkbox" name="venepuncture" class="check" value="1" />
                                            </div>
                                            <div class="check_label">
                                                <label>Venepuncture</label>
                                            </div>
                                        </div>
                                        
                                        <div class="tick_box">
                                            <div class="check_box">
                                                <input type="checkbox" name="communityNursing" class="check" value="1" />
                                            </div>
                                            <div class="check_label">
                                                <label>Community Nursing</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="fields_box">
                                    	<div class="tick_box">
                                            <div class="check_box">
                                                <input type="checkbox" name="sutering" class="check" value="1" />
                                            </div>
                                            <div class="check_label">
                                                <label>Sutering</label>
                                            </div>
                                        </div>
                                        
                                        <div class="tick_box">
                                            <div class="check_box">
                                                <input type="checkbox" name="operatingTheatre" class="check" value="1" />
                                            </div>
                                            <div class="check_label">
                                                <label>Operating Theatre</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="fields_box">
                                    	<div class="tick_box">
                                            <div class="check_box">
                                                <input type="checkbox" name="ventilatorCompetent" class="check" value="1" />
                                            </div>
                                            <div class="check_label">
                                                <label>Ventilator Competent</label>
                                            </div>
                                        </div>
                                        
                                        <div class="tick_box">
                                            <div class="check_box">
                                                <input type="checkbox" name="agedCare" class="check" value="1" />
                                            </div>
                                            <div class="check_label">
                                                <label>Aged Care</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="fields_box">
                                    	<div class="tick_box">
                                            <div class="check_box">
                                                <input type="checkbox" name="advCardLifeSupport" class="check" value="1" />
                                            </div>
                                            <div class="check_label">
                                                <label>Advanced Cardiac Life Support</label>
                                            </div>
                                        </div>
                                        
                                        <div class="tick_box">
                                            <div class="check_box">
                                                <input type="checkbox" name="midwifery" class="check" value="1" />
                                            </div>
                                            <div class="check_label">
                                                <label>Midwifery</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="fields_box">
                                    	<div class="tick_box">
                                            <div class="check_box">
                                                <input type="checkbox" name="defibrillation" class="check" value="1" />
                                            </div>
                                            <div class="check_label">
                                                <label>Defibrillation</label>
                                            </div>
                                        </div>
                                        
                                        <div class="tick_box">
                                            <div class="check_box">
                                                <input type="checkbox" name="medical" class="check" value="1" />
                                            </div>
                                            <div class="check_label">
                                                <label>Medical</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="fields_box">
                                    	<div class="tick_box">
                                            <div class="check_box">
                                                <input type="checkbox" name="scrub" class="check" value="1" />
                                            </div>
                                            <div class="check_label">
                                                <label>Scrub</label>
                                            </div>
                                        </div>
                                        
                                        <div class="tick_box">
                                            <div class="check_box">
                                                <input type="checkbox" name="mentalHealth" class="check" value="1" />
                                            </div>
                                            <div class="check_label">
                                                <label>Mental Health</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="fields_box">
                                    	<div class="tick_box">
                                            <div class="check_box">
                                                <input type="checkbox" name="anaesthetic" class="check" value="1" />
                                            </div>
                                            <div class="check_label">
                                                <label>Anaesthetic</label>
                                            </div>
                                        </div>
                                        
                                        <div class="tick_box">
                                            <div class="check_box">
                                                <input type="checkbox" name="other" class="check" value="1" />
                                            </div>
                                            <div class="check_label">
                                                <label>Other (please specify below)</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                  
                                    
                                    <div class="fields_box">
                                    	<div class="tick_box">
                                            <div class="check_box">
                                                <input type="checkbox" name="x-rays" class="check" value="1" />
                                            </div>
                                            <div class="check_label">
                                                <label>X-rays</label>
                                            </div>
                                        </div>
                                        
                                        <div class="tick_box">
                                        	
                                            <div class="check_box">
                                            </div>
                                            
                                            <div class="check_label">
                                            
                                            <input type="text" name="option1" class="text_field_option" />
                                        	</div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="fields_box">
                                    	<div class="tick_box">
                                            <div class="check_box">
                                                <input type="checkbox" name="deliverySuite" class="check" value="1" />
                                            </div>
                                            <div class="check_label">
                                                <label>Delivery Suite</label>
                                            </div>
                                        </div>
                                        
                                        <div class="tick_box">
                                            <div class="check_box">
                                            </div>
                                            
                                            <div class="check_label">
                                            
                                            <input type="text" name="option2" class="text_field_option" />
                                        	</div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="fields_box">
                                    	<div class="tick_box">
                                            <div class="check_box">
                                                <input type="checkbox" name="intensiveCare" class="check" value="1" />
                                            </div>
                                            <div class="check_label">
                                                <label>Intensive Care</label>
                                            </div>
                                        </div>
                                        
                                        <div class="tick_box">
                                        	<div class="check_box">
                                            </div>
                                            
                                            <div class="check_label">
                                            
                                            <input type="text" name="option3" class="text_field_option" />
                                        	</div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="fields_box">
                                    	<div class="tick_box">
                                            <div class="check_box">
                                                <input type="checkbox" name="accEmergency" class="check" value="1" />
                                            </div>
                                            <div class="check_label">
                                                <label>Accident &amp; Emergency</label>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                    </div>
                                 
                                </div>
                                <!-- end details box-->
                                <!-- Chat Submit Box-->
                                <div class="submit_box">
                                    
                                    <div class="chat">
                                        <a href="#">Live Chat with a recruiter</a>
                                    </div>
                                    
                                    <div class="btn" id="submit">
                                        <input type="submit" name="submit_third" id="submit-btn3" value="Next" class="sbmt_btn" />
                                	</div>
                    
                                </div>
                                <!-- Chat Submit Box End -->
                                </form>
                            </div>
                            <!-- 3rd tab end-->
                            <!-- 4th tab start-->
                            <div class="forth_tab">
                            	<?php include 'forth_tab.php'; ?>
                            </div>
                            <!-- 4th tab end-->
                 </div>
                 <!--register_tabs end-->
			                   
               
            
            </div>
        </div>
       	<!-- Register Box  End -->
            
        
    </div>
</div>
<!-- End Main Content Wrapper -->