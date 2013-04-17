

<script src="<?php echo base_url(); ?>assets/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function() {
		$('.scnd_tab').css('display', 'none' );
		$('.third_tab').css('display', 'none' );
		$('.forth_tab').css('display', 'none' );
		$('#first').addClass('active');
		
		document.getElementById('prog').innerHTML = "<img src='<?php echo base_url(); ?>assets/images/first_progress.png' />";
		
		
		
		//2nd tab start
		$('#submit-btn1').click(function(){
						$('#register1').on('submit',function(e){
							
							e.preventDefault(); 
							$.ajax({
								type     : "POST",
								dataType : "html",
								cache    : false,
								url      : $(this).attr('action'),
								success  : function(result) {
										
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
			
					});//on submit
				  
			
		});//end click
		
		//3rd tab start
		$('#submit-btn2').click(function(){
			$('#register2').on('submit',function(e){
							
							e.preventDefault(); 
							$.ajax({
								type     : "POST",
								dataType : "html",
								cache    : false,
								url      : $(this).attr('action'),
								success  : function(result) {
			
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
			
				});//on submit
			
			
		});//end click
		
		//4th tab start
		$('#submit-btn3').click(function(){
			$('#register3').on('submit',function(e){
							
							 e.preventDefault(); 
							$.ajax({
								type     : "POST",
								dataType : "html",
								cache    : false,
								url      : $(this).attr('action'),
								success  : function(result) {
			
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
									}
							});//ajax end
			
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
                            	<form name="register" action="<?php echo base_url(); ?>site/personal_details_submitted" id="register1" method="post">
                                <div class="details_box">
                                    <h2>Personal Details</h2>
                                    <div class="fields_box">
                                        <select name="title" id="title" class="dropdown_short" required>
                                            <option value="">Title</option>
                                            <option value="1">Title</option>
                                            <option value="2">Title</option>
                                            <option value="3">Title</option>
                                        </select>
                                        <input type="text" id="fname" name="firstName" placeholder="First Name" class="text_field" required />
                                        <input type="text" id="lname" name="surName" placeholder="Surname" class="text_field" required />
                                    </div>
                                    <div class="fields_box">
                                        <label for="birthDate" class="label">Date of Birth</label>	
                                        <select name="day" class="dropdown_short" required>
                                            <option value="">Day</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                        </select>
                                        <span>/</span>
                                        <select name="month" class="dropdown_medium" required>
                                            <option value="">Month</option>
                                            <option value="jan">jan</option>
                                            <option value="feb">feb</option>
                                            <option value="mar">march</option>
                                        </select>
                                        <span>/</span>
                                        <select name="year" class="dropdown_short" required> 
                                            <option value="">year</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                        </select>
                                    </div>
                                    
                                    
                                </div>
                                <!-- personal Details end-->
                                
                                <!-- Contact Details-->
                                <div class="details_box">
                                    <h2>Contact Details</h2>
                                    <div class="fields_box">
                                        
                                        <input type="text" name="phoneNumber" placeholder="Preferred Phone Number" class="text_field single" required />
                                        <input type="text" name="altPhoneNumber" placeholder="Alternative Phone Number" class="text_field single" required />
                                        <span class="optional">Optional</span>
                                        <input type="text" name="emailAddress" placeholder="Email Address" class="text_field single" required />
                                       
                                    </div>
                                   
                                
                                </div>
                                <!-- Contact Details end-->
                                
                                <!-- living Details-->
                                <div class="details_box">
                                    <h2>Where Do You Live?</h2>
                                    <div class="fields_box">
                                        
                                        <input type="text" name="number" placeholder="Number" class="text_field_short" required />
                                        <input type="text" name="street" placeholder="Street" class="text_field_long" required />
                                        
                                    </div>
                                    
                                    <div class="fields_box">
                                        <input type="text" name="suburb" placeholder="Suburb" class="text_field sub_state" required />
                                        <input type="text" name="state" placeholder="State" class="text_field sub_state" required />
                                        
                                    </div>
                                    
                                    <div class="fields_box">
                                        <input type="text" name="postcode" placeholder="Postcode" class="text_field sub_state" required />
                                        <select style="padding:9px; width:275px;" name="country" class="text_field sub_state" required>
                                            <option value="">Country</option>
                                            <option value="pak">Pak</option>
                                            <option value="ind">IND</option>
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
                                            <option value="major">major</option>
                                            <option value="minor">minor</option>
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
                            	<form name="register2" id="register2" method="post" action="<?php echo base_url(); ?>site/qualification_details_submitted">
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
                            	<form name="register3" method="post" action="<?php echo base_url(); ?>site/clinical_details_submitted" id="register3">
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
                            	<form name="register4" method="post" id="register4" action="#">
                            	<div class="details_box">
                                    <h2 class="review_heading">Personal Details</h2>
                                    <a href="#">Edit</a>
                                    <div class="fields_box">
                                    	
                                            <div class="check_label_short">
                                                <label>Name</label>
                                            </div>
                                         
                                         
                                            <div class="check_label_long">
                                                <label><?php
												
//now CI object can be used

												//$title = $this->session->userdata('TITLE');
												//echo $data_input['title']." ".$data_input['sur_name'];
												$title = $this->session->userdata('TITLE');
												$surname = $this->session->userdata('SURNAME');
												$firstname = $this->session->userdata('FIRSTNAME');
												
												print_r($title); 
												
												 print_r($surname); 
												 print_r($firstname);  ?>
                                                
                                                </label>
                                            </div>
                                       
                                  	</div>
                                     <div class="fields_box">
                                    	
                                            <div class="check_label_short">
                                                <label>DOB</label>
                                            </div>
                                         
                                         
                                            <div class="check_label_long">
                                                <label><?php
												$day = $this->session->userdata('DAY');
												$month = $this->session->userdata('MONTH');
												$year = $this->session->userdata('YEAR');
												 if(!empty($day)) echo $day.'/';
												if(!empty($month)) echo $month.'/';
												if(!empty($year)) echo $year; ?></label>
                                            </div>
                                       
                                  	</div>
                                     <div class="fields_box">
                                    	
                                            <div class="check_label_short">
                                                <label>Primary Phone No.</label>
                                            </div>
                                         
                                         
                                            <div class="check_label_long">
                                                <label><?Php
												$phoneno = $this->session->userdata('PHONENUMBER');
												 if(!empty($phoneno)) echo $phoneno; ?></label>
                                            </div>
                                       
                                  	</div>
                                     <div class="fields_box">
                                    	
                                            <div class="check_label_short">
                                                <label>Secondary Phone NO.</label>
                                            </div>
                                         
                                         
                                            <div class="check_label_long">
                                                <label><?Php
												$altphoneno = $this->session->userdata('ALTPHONENUMBER');
												 if(!empty($altphoneno)) echo $altphoneno; ?></label>
                                            </div>
                                       
                                  	</div>
                                     <div class="fields_box">
                                    	
                                            <div class="check_label_short">
                                                <label>Email</label>
                                            </div>
                                         
                                         
                                            <div class="check_label_long">
                                                <label><?Php
												$email = $this->session->userdata('EMAILADDRESS'); 
												if(!empty($email)) echo $email; ?></label>
                                            </div>
                                       
                                  	</div>
                                     <div class="fields_box">
                                    	
                                            <div class="check_label_short">
                                                <label>Address</label>
                                            </div>
                                         
                                         
                                            <div class="check_label_long">
                                                <label><?php
												$number = $this->session->userdata('NUMBER');
												$street = $this->session->userdata('STREET');
												$country = $this->session->userdata('COUNTRY');
												$postcode = $this->session->userdata('POSTCODE'); 
												if(!empty($number)) echo $number.' ';
												if(!empty($street)) echo $street.', ';
												if(!empty($country)) echo $country.', ';
												 if(!empty($postcode)) echo $postcode; ?></label>
                                            </div>
                                       
                                  	</div>
                                        
                                    
                            	
                            </div>
                            
                            
                            
                            <div class="details_box">
                                    <h2 class="review_heading">Qualifications</h2>
                                    <a href="#">Edit</a>
                                    <div class="fields_box"> 
                                            <div class="check_label_long">
                                                <label>I'm registered as a Nurses in <?Php 
											$countrynurse = $this->session->userdata('COUNTRYNURSE');
											if(!empty($countrynurse)) echo $countrynurse; ?></label>
                                            </div>
                                       
                                  	</div>
                                     <div class="fields_box">
                                    	
                                            <div class="check_label_long">
                                                <label>I completed my medical training in <?Php 
									$countrytraining = $this->session->userdata('COUNTRYTRAINING');
												if(!empty($countrytraining)) echo $countrytraining; ?></label>
                                            </div>
                                       
                                  	</div>
                                     <div class="fields_box">
                                 
                                            <div class="check_label_long">
                                                <label>I hold a <?Php
									$preflocation = $this->session->userdata('PREFLOCATION'); 
												if(!empty($preflocation)) echo $preflocation; ?>  Passport</label>
                                            </div>
                                       
                                  	</div>
                                     <div class="fields_box">
                              
                                            <div class="check_label_long">
                                                <label>I have <?Php
									$exp = $this->session->userdata('PREFLOCATION');  
												if(!empty($exp)) echo $exp; ?> Post Graduate experience</label>
                                            </div>
                                       
                                  	</div>
            
                            </div>
                            
                            <div class="details_box" style="border-bottom:0;">
                                    <h2 class="review_heading">Clinical Skills</h2>
                                    <a href="#">Edit</a>
                                    <?Php
									$cann = $this->session->userdata('CANNULATION'); 
									if(isset($cann)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $cann; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									$paed = $this->session->userdata('PAEDNEON'); 
									if(!empty($paed)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $paed; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                     <?Php
									 $triage  = $this->session->userdata('TRIAGE'); 
									 if(!empty($triage)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $triage; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									$cardiac = $this->session->userdata('CARDIAC'); 
									if(!empty($cardiac)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $cardiac; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									$vene = $this->session->userdata('VENEPUNCTURE'); 
									if(!empty($vene)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $vene; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									$com = $this->session->userdata('COMMUNITYNURSING'); 
									if(!empty($com)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $com; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									$sut  = $this->session->userdata('SUTERING'); 
									if(!empty($sut)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $sut; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									$oper = $this->session->userdata('OPERATINGTHEATRE'); 
									if(!empty($oper)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $oper; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									$vent = $this->session->userdata('VENTILATORCOMPETENT'); 
									if(!empty($vent)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $vent; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									$age = $this->session->userdata('AGEDCARE'); 
									if(!empty($age)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $age; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									$advcard = $this->session->userdata('ADVCARDLIFESUPPORT'); 
									if(!empty($advcard)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $advcard; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									$mid = $this->session->userdata('MIDWIFERY'); 
									if(!empty($mid)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $mid; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									$med = $this->session->userdata('MEDICAL'); 
									if(!empty($med)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $med; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									$scrub  = $this->session->userdata('SCRUB'); 
									if(!empty($scrub)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $scrub; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									$mental = $this->session->userdata('MENTALHEALTH'); 
									if(!empty($mental)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $mental; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									$xray = $this->session->userdata('X_RAYS'); 
									if(!empty($xray)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $xray; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php 
									$int = $this->session->userdata('INTENSIVECARE');
									if(!empty($int)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $int; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php 
									$accemer = $this->session->userdata('ACCEMERGENCY');
									if(!empty($accemer)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $accemer; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									$def = $this->session->userdata('DEFIBRILLATION'); 
									if(!empty($def)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $def; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									$del = $this->session->userdata('DELIVERYSUITE'); 
									if(!empty($del)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $del; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php 
									$other = $this->session->userdata('OTHER');
									if(!empty($other)) { ?>
                                    <div class="fields_box">
                              
                                            <div class="check_label_short long">
                                                <img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label>other (please specify below)</label>
                                            </div>
                                       
                                  	</div>
            						<?php  } ?>
                                    <?Php
									$option1 = $this->session->userdata('OPTION1'); 
									if(!empty($option1)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $option1; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									$option2 = $this->session->userdata('OPTION2'); 
									if(!empty($option2)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $option2; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
                                    <?Php
									$option3 = $this->session->userdata('OPTION3'); 
									if(!empty($option3)) { ?>
                                     <div class="fields_box">
                                    		
                                            <div class="check_label_short">
                                            	<img src="<?php echo base_url() ?>assets/images/checked.png" alt="checked" width="18" height="15" />
                                                <label><?php echo $option3; ?></label>
                                            </div>
                                            
                                       
                                  	</div>
                                   	<?php } ?>
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
                        	</form>
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