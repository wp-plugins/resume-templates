<?php

function resume_templates_themes_flat($post_id)
	{
		$resume_templates_tagline = get_post_meta( $post_id, 'resume_templates_tagline', true );		
		
		$resume_templates_section_title = get_post_meta( $post_id, 'resume_templates_section_title', true );
		$resume_templates_section_details = get_post_meta( $post_id, 'resume_templates_section_details', true );
		$resume_templates_section_hide = get_post_meta( $post_id, 'resume_templates_section_hide', true );
		$resume_templates_section_for = get_post_meta( $post_id, 'resume_templates_section_for', true );
	 
	
		$resume_templates_skill_name = get_post_meta( $post_id, 'resume_templates_skill_name', true );
		$resume_templates_skill_value = get_post_meta( $post_id, 'resume_templates_skill_value', true );
			
		$resume_templates_social_name = get_post_meta( $post_id, 'resume_templates_social_name', true );
		$resume_templates_social_value = get_post_meta( $post_id, 'resume_templates_social_value', true );
		
		$resume_templates_language_name = get_post_meta( $post_id, 'resume_templates_language_name', true );
		$resume_templates_language_value = get_post_meta( $post_id, 'resume_templates_language_value', true );
		
		$resume_templates_interest_name = get_post_meta( $post_id, 'resume_templates_interest_name', true );
		$resume_templates_interest_value = get_post_meta( $post_id, 'resume_templates_interest_value', true );
		
		$resume_templates_education_institution = get_post_meta( $post_id, 'resume_templates_education_institution', true );	
		$resume_templates_education_year = get_post_meta( $post_id, 'resume_templates_education_year', true );
		$resume_templates_education_position = get_post_meta( $post_id, 'resume_templates_education_position', true );	
		$resume_templates_education_details = get_post_meta( $post_id, 'resume_templates_education_details', true );		
			
		$resume_templates_experiences_institution = get_post_meta( $post_id, 'resume_templates_experiences_institution', true );	
		$resume_templates_experiences_year = get_post_meta( $post_id, 'resume_templates_experiences_year', true );
		$resume_templates_experiences_position = get_post_meta( $post_id, 'resume_templates_experiences_position', true );	
		$resume_templates_experiences_details = get_post_meta( $post_id, 'resume_templates_experiences_details', true );		
		
		$resume_templates_award_institution = get_post_meta( $post_id, 'resume_templates_award_institution', true );	
		$resume_templates_award_year = get_post_meta( $post_id, 'resume_templates_award_year', true );
		$resume_templates_award_position = get_post_meta( $post_id, 'resume_templates_award_position', true );	
		$resume_templates_award_details = get_post_meta( $post_id, 'resume_templates_award_details', true );
		
		$resume_templates_contact_info_email = get_post_meta( $post_id, 'resume_templates_contact_info_email', true );		
		$resume_templates_contact_info_website = get_post_meta( $post_id, 'resume_templates_contact_info_website', true );	
		$resume_templates_contact_info_mobile = get_post_meta( $post_id, 'resume_templates_contact_info_mobile', true );		
		$resume_templates_contact_info_details = get_post_meta( $post_id, 'resume_templates_contact_info_details', true );			
	
	
		if(empty($resume_templates_section_title))
			{
				$resume_templates_section_title = array(
										'education'=>'Education',
										'experiences'=>'Experiences',
										//'personal_info'=>'Personal Info',
										'contact_info'=>'Contact Info',
										'award'=>'Award',
										'skill'=>'Skill',															
										'social'=>'Social',
										'interest'=>'Interest',
										//'reference'=>'Reference',
										'language'=>'Language',																																													
										);
			}

	
		if(empty($resume_templates_section_details))
			{
				$resume_templates_section_details = array(
										'education'=>'Education Details',
										'experiences'=>'Experiences Details',
										//'personal_info'=>'Personal Info Details',
										'contact_info'=>'Contact Info Details',
										'award'=>'Award Details',
										'skill'=>'Skill Details',															
										'social'=>'Social Details',
										'interest'=>'Interest Details',
										//'reference'=>'Reference Details',
										'language'=>'Language Details',																																													
										);
			}						
	
	
		if(empty($resume_templates_section_for))
			{
				$resume_templates_section_for = array(
										'education'=>'Education',
										'experiences'=>'Experiences',
										//'personal_info'=>'Personal Info',
										'contact_info'=>'Contact Info',
										'award'=>'Award',
										'skill'=>'Skill',															
										'social'=>'Social',
										'interest'=>'Interest',
										//'reference'=>'Reference',
										'language'=>'Language',																																													
										);
			}							
	
	
		if(empty($resume_templates_section_hide))
			{
				$resume_templates_section_hide = array(
										'education'=>'Education',
										'experiences'=>'Experiences',
										//'personal_info'=>'Personal Info',
										'contact_info'=>'Contact Info',
										'award'=>'Award',
										'skill'=>'Skill',															
										'social'=>'Social',
										'interest'=>'Interest',
										//'reference'=>'Reference',
										'language'=>'Language',																																													
										);
			}	

	
	
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), $post_grid_thumb_size );
		$thumb_url = $thumb['0'];	
	
		$content_post = get_post($post_id);
		$content = $content_post->post_content;
	
	
		$html = '';

		$html .= '
		<div id="resume-templates-'.$post_id.'"  class="resume-templates-container resume-templates-flat'.$resume_templates_themes.'" style="">';
		
		
		
		
		
		$html .= '<div class="rt-head">';
		$html .= '<div class="rt-thumb"><img src="'.$thumb_url.'" /></div>';
		$html .= '<div class="rt-details">';		
		$html .= '<div class="rt-name">'.get_the_title($post_id).'</div>';
		$html .= '<div class="rt-tagline">'.$resume_templates_tagline.'</div>';		
		$html .= '<div class="rt-desription">'.$content.'</div>';		
		
		$html .= '</div>';		
		$html .= '</div>';	
		
		$html .= '<div class="rt-sections">';
		foreach($resume_templates_section_title as $key => $value)
			{
				$html .= '<div class="rt-section-single">';
				$html .= '<div class="rt-section-title">'.$value.'</div>';
				$html .= '<div class="rt-section-details">'.$resume_templates_section_details[$key].'</div>';
				
				if($resume_templates_section_for[$key] == 'education')
					{
						foreach($resume_templates_education_institution as $key => $value)
							{
								$html .= '<div class="rt-content-single">';
								$html .= '<div class="rt-content-title">★ '.$value[0].'</div>';
								$html .= '<div class="rt-content-year">'.$resume_templates_education_year[$key][0].'</div>';
								
								$html .= '<div class="rt-content-position">'.$resume_templates_education_position[$key][0].'</div>';
								$html .= '<div class="rt-content-details">'.$resume_templates_education_details[$key][0].'</div>';
								$html .= '</div>';								
								
															
							}
					}
				if($resume_templates_section_for[$key] == 'experiences')
					{
						foreach($resume_templates_experiences_institution as $key => $value)
							{
								$html .= '<div class="rt-content-single">';
								$html .= '<div class="rt-content-title">★ '.$value[0].'</div>';
								$html .= '<div class="rt-content-year">'.$resume_templates_experiences_year[$key][0].'</div>';
								
								$html .= '<div class="rt-content-position">'.$resume_templates_experiences_position[$key][0].'</div>';
								$html .= '<div class="rt-content-details">'.$resume_templates_experiences_details[$key][0].'</div>';
								$html .= '</div>';								
								
															
							}
					}
					
					
				if($resume_templates_section_for[$key] == 'award')
					{
						foreach($resume_templates_award_institution as $key => $value)
							{
								$html .= '<div class="rt-content-single">';
								$html .= '<div class="rt-content-title">★ '.$value[0].'</div>';
								$html .= '<div class="rt-content-year">'.$resume_templates_award_year[$key][0].'</div>';
								
								$html .= '<div class="rt-content-position">'.$resume_templates_award_position[$key][0].'</div>';
								$html .= '<div class="rt-content-details">'.$resume_templates_award_details[$key][0].'</div>';
								$html .= '</div>';								
								
															
							}
					}	
					
				if($resume_templates_section_for[$key] == 'skill')
					{
						foreach($resume_templates_skill_name as $key => $value)
							{
								$html .= '<div class="rt-content-single">';
								$html .= '<div class="rt-content-title">★ '.$value[0].'</div>';
								$html .= '<div class="rt-content-value">'.resume_templates_percentage_grid($resume_templates_skill_value[$key][0]).'</div>';								
								$html .= '</div>';								
								
															
							}
					}						
					
					
				if($resume_templates_section_for[$key] == 'social')
					{
						foreach($resume_templates_social_name as $key => $value)
							{
								$html .= '<div class="rt-content-single">';
								$html .= '<div class="rt-content-title">★ '.$value[0].'</div>';
								$html .= '<div class="rt-content-value">'.$resume_templates_social_value[$key][0].'</div>';								
								$html .= '</div>';								
								
															
							}
					}						
					
				if($resume_templates_section_for[$key] == 'interest')
					{
						foreach($resume_templates_interest_name as $key => $value)
							{
								$html .= '<div class="rt-content-single">';
								$html .= '<div class="rt-content-title">★ '.$value[0].'</div>';
								$html .= '<div class="rt-content-value">'.resume_templates_percentage_grid($resume_templates_interest_value[$key][0]).'</div>';								
								$html .= '</div>';								
								
															
							}
					}
					
				if($resume_templates_section_for[$key] == 'language')
					{
						foreach($resume_templates_language_name as $key => $value)
							{
								$html .= '<div class="rt-content-single">';
								$html .= '<div class="rt-content-title">★ '.$value[0].'</div>';
								$html .= '<div class="rt-content-value">'.$resume_templates_language_value[$key][0].'</div>';								
								$html .= '</div>';								
								
															
							}
					}					
					
				if($resume_templates_section_for[$key] == 'contact_info')
					{
						foreach($resume_templates_contact_info_email as $key => $value)
							{
								$html .= '<div class="rt-content-single">';
								$html .= '<div class="rt-content-title">★ '.$value[0].'</div>';
								$html .= '<div class="rt-content-website">'.$resume_templates_contact_info_website[$key][0].'</div>';					
								$html .= '<div class="rt-content-mobile">'.$resume_templates_contact_info_mobile[$key][0].'</div>';												
								$html .= '<div class="rt-content-details">'.$resume_templates_contact_info_details[$key][0].'</div>';									
								
											
								$html .= '</div>';								
								
															
							}
					}					
					
					
					
											
					
				
				$html .= '</div>';
			}
			
			
			
			
			
			
			
			
			
			
		
		$html .= '</div>';
		
		
		
		
		
		$html .= '</div>';
		
		
		$html .= '<style type="text/css">';
		
		$html .= '</style>';	



		$html .= '<script>
			jQuery(document).ready(function($) {
			  var container = document.querySelector(".rt-sections");
			  var msnry = new Masonry( container, {isFitWidth: true
			
			  });
			});
			</script>';	








		return $html;

		
	}