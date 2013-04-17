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
												//$title = $this->session->userdata('TITLE');
												echo $data_input['title']." ".$data_input['sur_name'];
												$surname = $this->session->userdata('SURNAME');
												$firstname = $this->session->userdata('FIRSTNAME');
												
												if(!empty($title)){ print_r($title).' '; }
												
												if(!empty($surname)){  print_r($surname).' '; }
												if(!empty($firstname)){ print_r($firstname).' '; }  ?>
                                                
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