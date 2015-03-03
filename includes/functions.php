<?php



	function resume_templates_percentage_grid($value)
		{
			
			$html = '';
			
			$html .= '<div class="percentage-container"><div class="percentage" style="width:'.$value.'">&nbsp; &nbsp;'.$value.'</div></div>';
			
			
			
			return $html;
			
		}




	function resume_templates_section_content($resumeid='', $section_current='', $section_for='')
		{
			

			if(isset($_POST['resumeid']))
				{
					$resumeid = sanitize_text_field($_POST['resumeid']);
				}			
			
			
			if(isset($_POST['section_current']))
				{
					$section_current = sanitize_text_field($_POST['section_current']);
				}	
						
			if(isset($_POST['section_for']))
				{
					$section_for = sanitize_text_field($_POST['section_for']);
				}
						
			
			if($section_for == 'skill')
				{
					echo '<div class="section-content-skill">';
					
					$resume_templates_skill_name = get_post_meta( $resumeid, 'resume_templates_skill_name', true );
					$resume_templates_skill_value = get_post_meta( $resumeid, 'resume_templates_skill_value', true );
					
					if(empty($resume_templates_skill_name))
						{
							$resume_templates_skill_name = array('1'=>array(''));
						}
						
					if(empty($resume_templates_skill_value))
						{
							$resume_templates_skill_value = array('1'=>array(''));
						}						
						
					
					
					echo '<table class="section-content-skills">';
					$i =0;
					foreach($resume_templates_skill_name as $key => $values)
						{
							foreach($values as $value)
								{
									echo '<tr><td class="section-dragHandle">*</td><td>';
							echo '<input class="resume_templates_skill_name" placeholder="Skill Name, ex: HTML" name="resume_templates_skill_name['.$key.']['.$i.']" type="text" value="'.$value.'" />';
							echo '<input class="resume_templates_skill_value" placeholder="Skill value, ex: 75%" name="resume_templates_skill_value['.$key.']['.$i.']" type="text" value="'.$resume_templates_skill_value[$key][$i].'" />';								
									echo '<span class="remove-skill">X</span></td></tr>';
								}

						}
					echo '</table>';
					echo '<br /><div class="button add_new_skill">Add New Skill</div>';
					echo '</div>';
					
					echo '<script>
								jQuery(document).ready(function($) {
							
									$(".section-content-skills").tableDnD({
										
										
										});			
	
							
								});

</script>';
					
					
					
				}

				
				
			elseif($section_for == 'social')
				{
					echo '<div class="section-content-social">';
					
					$resume_templates_social_name = get_post_meta( $resumeid, 'resume_templates_social_name', true );
					$resume_templates_social_value = get_post_meta( $resumeid, 'resume_templates_social_value', true );
					
					if(empty($resume_templates_social_name))
						{
							$resume_templates_social_name = array('1'=>array(''));
						}
						
					if(empty($resume_templates_social_value))
						{
							$resume_templates_social_value = array('1'=>array(''));
						}						
						
					
					
					echo '<table class="section-content-socials">';
					$i =0;
					foreach($resume_templates_social_name as $key => $values)
						{
							foreach($values as $value)
								{
									echo '<tr><td class="section-dragHandle">*</td><td>';
							echo '<input class="resume_templates_social_name" placeholder="ex: Facebook" name="resume_templates_social_name['.$key.']['.$i.']" type="text" value="'.$value.'" />';
							echo '<input class="resume_templates_social_value" placeholder="ex: username" name="resume_templates_social_value['.$key.']['.$i.']" type="text" value="'.$resume_templates_social_value[$key][$i].'" />';								
									echo '<span class="remove-social">X</span></td></tr>';
								}

						}
					echo '</table>';
					echo '<br /><div class="button add_new_social">Add New Social</div>';
					echo '</div>';
					
					echo '<script>
								jQuery(document).ready(function($) {
							
									$(".section-content-socials").tableDnD({
										
										
										});			
	
							
								});

</script>';
					
					
					
				}
				
			elseif($section_for == 'language')
				{
					echo '<div class="section-content-language">';
					
					$resume_templates_language_name = get_post_meta( $resumeid, 'resume_templates_language_name', true );
					$resume_templates_language_value = get_post_meta( $resumeid, 'resume_templates_language_value', true );
					
					if(empty($resume_templates_language_name))
						{
							$resume_templates_language_name = array('1'=>array(''));
						}
						
					if(empty($resume_templates_language_value))
						{
							$resume_templates_language_value = array('1'=>array(''));
						}						
						
					
					
					echo '<table class="section-content-languages">';
					$i =0;
					foreach($resume_templates_language_name as $key => $values)
						{
							foreach($values as $value)
								{
									echo '<tr><td class="section-dragHandle">*</td><td>';
							echo '<input class="resume_templates_language_name" placeholder="ex: English" name="resume_templates_language_name['.$key.']['.$i.']" type="text" value="'.$value.'" />';
							echo '<input class="resume_templates_language_value" placeholder="ex: Medium" name="resume_templates_language_value['.$key.']['.$i.']" type="text" value="'.$resume_templates_language_value[$key][$i].'" />';								
									echo '<span class="remove-language">X</span></td></tr>';
								}

						}
					echo '</table>';
					echo '<br /><div class="button add_new_language">Add New language</div>';
					echo '</div>';
					
					echo '<script>
								jQuery(document).ready(function($) {
							
									$(".section-content-languages").tableDnD({
										
										
										});			
	
							
								});

</script>';
					
					
					
				}
			elseif($section_for == 'interest')
				{
					echo '<div class="section-content-interest">';
					
					$resume_templates_interest_name = get_post_meta( $resumeid, 'resume_templates_interest_name', true );
					$resume_templates_interest_value = get_post_meta( $resumeid, 'resume_templates_interest_value', true );
					
					if(empty($resume_templates_interest_name))
						{
							$resume_templates_interest_name = array('1'=>array(''));
						}
						
					if(empty($resume_templates_interest_value))
						{
							$resume_templates_interest_value = array('1'=>array(''));
						}						
						
					
					
					echo '<table class="section-content-interests">';
					$i =0;
					foreach($resume_templates_interest_name as $key => $values)
						{
							foreach($values as $value)
								{
									echo '<tr><td class="section-dragHandle">*</td><td>';
							echo '<input class="resume_templates_interest_name" placeholder="ex: Coding" name="resume_templates_interest_name['.$key.']['.$i.']" type="text" value="'.$value.'" />';
							echo '<input class="resume_templates_interest_value" placeholder="ex: 90%" name="resume_templates_interest_value['.$key.']['.$i.']" type="text" value="'.$resume_templates_interest_value[$key][$i].'" />';								
									echo '<span class="remove-interest">X</span></td></tr>';
								}

						}
					echo '</table>';
					echo '<br /><div class="button add_new_interest">Add New interest</div>';
					echo '</div>';
					
					echo '<script>
								jQuery(document).ready(function($) {
							
									$(".section-content-interests").tableDnD({
										
										
										});			
	
							
								});

</script>';
					
					
					
				}
				
				
			elseif($section_for == 'education')
				{
					echo '<div class="section-content-education">';
					
					$resume_templates_education_institution = get_post_meta( $resumeid, 'resume_templates_education_institution', true );
					$resume_templates_education_year = get_post_meta( $resumeid, 'resume_templates_education_year', true );
					
					$resume_templates_education_position = get_post_meta( $resumeid, 'resume_templates_education_position', true );					
					
					$resume_templates_education_details = get_post_meta( $resumeid, 'resume_templates_education_details', true );					
					
					
					
					if(empty($resume_templates_education_institution))
						{
							$resume_templates_education_institution = array('1'=>array(''));
						}
						
					if(empty($resume_templates_education_year))
						{
							$resume_templates_education_year = array('1'=>array(''));
						}	
											
					if(empty($resume_templates_education_position))
						{
							$resume_templates_education_position = array('1'=>array(''));
						}						
						
						
					if(empty($resume_templates_education_details))
						{
							$resume_templates_education_details = array('1'=>array(''));
						}						
						
					
					
					echo '<table class="section-content-educations">';
					$i =0;
					foreach($resume_templates_education_institution as $key => $values)
						{
							foreach($values as $value)
								{
									echo '<tr><td class="section-dragHandle">*</td><td>';
									echo '<input class="resume_templates_education_institution" placeholder="ex: University of Florida" name="resume_templates_education_institution['.$key.']['.$i.']" type="text" value="'.$value.'" />';
									echo '<input class="resume_templates_education_year" placeholder="ex: 2010-2012" name="resume_templates_education_year['.$key.']['.$i.']" type="text" value="'.$resume_templates_education_year[$key][$i].'" /><span class="remove-education">X</span>';
									
									echo '<input class="resume_templates_education_position" placeholder="ex: B.Sc" name="resume_templates_education_position['.$key.']['.$i.']" type="text" value="'.$resume_templates_education_position[$key][$i].'" />';
									
									echo '<textarea placeholder="Details" name="resume_templates_education_details['.$key.']['.$i.']" >'.$resume_templates_education_details[$key][$i].'</textarea><br /><br />';
									
									
									echo '</td></tr>';
								}

						}
					echo '</table>';
					echo '<br /><div class="button add_new_education">Add New education</div>';
					echo '</div>';
					
					echo '<script>
								jQuery(document).ready(function($) {
							
									$(".section-content-educations").tableDnD({
										
										
										});			
	
							
								});

</script>';
					
					
					
				}
				
			elseif($section_for == 'experiences')
				{
					echo '<div class="section-content-experiences">';
					
					$resume_templates_experiences_institution = get_post_meta( $resumeid, 'resume_templates_experiences_institution', true );
					$resume_templates_experiences_year = get_post_meta( $resumeid, 'resume_templates_experiences_year', true );
					$resume_templates_experiences_position = get_post_meta( $resumeid, 'resume_templates_experiences_position', true );					
					$resume_templates_experiences_details = get_post_meta( $resumeid, 'resume_templates_experiences_details', true );					
					
					
					
					if(empty($resume_templates_experiences_institution))
						{
							$resume_templates_experiences_institution = array('1'=>array(''));
						}
						
					if(empty($resume_templates_experiences_year))
						{
							$resume_templates_experiences_year = array('1'=>array(''));
						}						
						
					if(empty($resume_templates_experiences_position))
						{
							$resume_templates_experiences_position = array('1'=>array(''));
						}							
						
					if(empty($resume_templates_experiences_details))
						{
							$resume_templates_experiences_details = array('1'=>array(''));
						}						
						
					
					
					echo '<table class="section-content-experiencess">';
					$i =0;
					foreach($resume_templates_experiences_institution as $key => $values)
						{
							foreach($values as $value)
								{
									echo '<tr><td class="section-dragHandle">*</td><td>';
									echo '<input class="resume_templates_experiences_institution" placeholder="ex: ParaTheme Studio Ltd." name="resume_templates_experiences_institution['.$key.']['.$i.']" type="text" value="'.$value.'" />';
									echo '<input class="resume_templates_experiences_year" placeholder="ex: 2010-2012" name="resume_templates_experiences_year['.$key.']['.$i.']" type="text" value="'.$resume_templates_experiences_year[$key][$i].'" /><span class="remove-experiences">X</span>';
									
									echo '<input class="resume_templates_experiences_position" placeholder="ex: Team Leader." name="resume_templates_experiences_position['.$key.']['.$i.']" type="text" value="'.$resume_templates_experiences_position[$key][$i].'" />';									
																
									echo '<textarea placeholder="Details" name="resume_templates_experiences_details['.$key.']['.$i.']" >'.$resume_templates_experiences_details[$key][$i].'</textarea><br /><br />';
									
									
									echo '</td></tr>';
								}

						}
					echo '</table>';
					echo '<br /><div class="button add_new_experiences">Add New experiences</div>';
					echo '</div>';
					
					echo '<script>
								jQuery(document).ready(function($) {
							
									$(".section-content-experiencess").tableDnD({
										
										
										});			
	
							
								});

</script>';
					
					
					
				}
				
			elseif($section_for == 'award')
				{
					echo '<div class="section-content-award">';
					
					$resume_templates_award_institution = get_post_meta( $resumeid, 'resume_templates_award_institution', true );
					$resume_templates_award_year = get_post_meta( $resumeid, 'resume_templates_award_year', true );
					$resume_templates_award_position = get_post_meta( $resumeid, 'resume_templates_award_position', true );					
					$resume_templates_award_details = get_post_meta( $resumeid, 'resume_templates_award_details', true );					
					
					
					
					if(empty($resume_templates_award_institution))
						{
							$resume_templates_award_institution = array('1'=>array(''));
						}
						
					if(empty($resume_templates_award_year))
						{
							$resume_templates_award_year = array('1'=>array(''));
						}
					if(empty($resume_templates_award_position))
						{
							$resume_templates_award_position = array('1'=>array(''));
						}						
											
						
					if(empty($resume_templates_award_details))
						{
							$resume_templates_award_details = array('1'=>array(''));
						}						
						
					
					
					echo '<table class="section-content-awards">';
					$i =0;
					foreach($resume_templates_award_institution as $key => $values)
						{
							foreach($values as $value)
								{
									echo '<tr><td class="section-dragHandle">*</td><td>';
									echo '<input class="resume_templates_award_institution" placeholder="ex: My Grad School." name="resume_templates_award_institution['.$key.']['.$i.']" type="text" value="'.$value.'" />';
									
									
									echo '<input class="resume_templates_award_year" placeholder="ex: 2010-2012" name="resume_templates_award_year['.$key.']['.$i.']" type="text" value="'.$resume_templates_award_year[$key][$i].'" /><span class="remove-award">X</span>';
									
									echo '<input class="resume_templates_award_position" placeholder="ex: First Class." name="resume_templates_award_position['.$key.']['.$i.']" type="text" value="'.$resume_templates_award_position[$key][$i].'" />';
																		
									echo '<textarea placeholder="Details" name="resume_templates_award_details['.$key.']['.$i.']" >'.$resume_templates_award_details[$key][$i].'</textarea><br /><br />';
									
									
									echo '</td></tr>';
								}

						}
					echo '</table>';
					echo '<br /><div class="button add_new_award">Add New award</div>';
					echo '</div>';
					
					echo '<script>
								jQuery(document).ready(function($) {
							
									$(".section-content-awards").tableDnD({
										
										
										});			
	
							
								});

</script>';
					
					
					
				}
				
				
			elseif($section_for == 'contact_info')
				{
					echo '<div class="section-content-contact-info">';
					
					$resume_templates_contact_info_email = get_post_meta( $resumeid, 'resume_templates_contact_info_email', true );
					$resume_templates_contact_info_website = get_post_meta( $resumeid, 'resume_templates_contact_info_website', true );
					$resume_templates_contact_info_mobile = get_post_meta( $resumeid, 'resume_templates_contact_info_mobile', true );					
					$resume_templates_contact_info_details = get_post_meta( $resumeid, 'resume_templates_contact_info_details', true );					
					
					
					
					if(empty($resume_templates_contact_info_email))
						{
							$resume_templates_contact_info_email = array('1'=>array(''));
						}
						
					if(empty($resume_templates_contact_info_website))
						{
							$resume_templates_contact_info_website = array('1'=>array(''));
						}
					if(empty($resume_templates_contact_info_mobile))
						{
							$resume_templates_contact_info_mobile = array('1'=>array(''));
						}						
											
						
					if(empty($resume_templates_contact_info_details))
						{
							$resume_templates_contact_info_details = array('1'=>array(''));
						}						
						
					
					
					echo '<table class="section-content-contact_infos">';
					$i =0;
					foreach($resume_templates_contact_info_email as $key => $values)
						{
							foreach($values as $value)
								{
									echo '<tr><td class="section-dragHandle">*</td><td>';
									echo '<input class="resume_templates_contact_info_email" placeholder="ex:hello@eaxmple.com" name="resume_templates_contact_info_email['.$key.']['.$i.']" type="text" value="'.$value.'" />';
									
									
									echo '<input class="resume_templates_contact_info_website" placeholder="ex: http://hello.com" name="resume_templates_contact_info_website['.$key.']['.$i.']" type="text" value="'.$resume_templates_contact_info_website[$key][$i].'" /><span class="remove-contact-info">X</span>';
									
									echo '<input class="resume_templates_contact_info_mobile" placeholder="ex: 01972441879." name="resume_templates_contact_info_mobile['.$key.']['.$i.']" type="text" value="'.$resume_templates_contact_info_mobile[$key][$i].'" />';
																		
									echo '<textarea placeholder="Details" name="resume_templates_contact_info_details['.$key.']['.$i.']" >'.$resume_templates_contact_info_details[$key][$i].'</textarea><br /><br />';
									
									
									echo '</td></tr>';
								}

						}
					echo '</table>';
					//echo '<br /><div class="button add_new_contact_info">Add New Contact info</div>';
					echo '</div>';
					
					echo '<script>
								jQuery(document).ready(function($) {
							
									$(".section-content-contact_infos").tableDnD({
										
										
										});			
	
							
								});

</script>';
					
					
					
				}
				
				
				
			else
				{
					echo '';
				}

			if(isset($_POST['section_current']))
				{
				die();	
				}	
			
		
		}


add_action('wp_ajax_resume_templates_section_content', 'resume_templates_section_content');
add_action('wp_ajax_nopriv_resume_templates_section_content', 'resume_templates_section_content');
	
	
	
	
	function resume_templates_share_plugin()
		{
			
			?>
            <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwordpress.org%2Fplugins%2Fresume_templates&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=80&amp;appId=652982311485932" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:80px;" allowTransparency="true"></iframe>
            
            <br />
            <!-- Place this tag in your head or just before your close body tag. -->
            <script src="https://apis.google.com/js/platform.js" async defer></script>
            
            <!-- Place this tag where you want the +1 button to render. -->
            <div class="g-plusone" data-size="medium" data-annotation="inline" data-width="300" data-href="<?php echo resume_templates_share_url; ?>"></div>
            
            <br />
            <br />
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo resume_templates_share_url; ?>" data-text="<?php echo resume_templates_plugin_name; ?>" data-via="ParaTheme" data-hashtags="WordPress">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>



            <?php
			
			
			
		
		
		}
	
	
	
	
	
	