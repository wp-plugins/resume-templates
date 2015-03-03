<?php


function resume_posttype_register() {
 
        $labels = array(
                'name' => _x('resume', 'resume'),
                'singular_name' => _x('resume', 'resume'),
                'add_new' => _x('New resume', 'resume'),
                'add_new_item' => __('New resume'),
                'edit_item' => __('Edit resume'),
                'new_item' => __('New resume'),
                'view_item' => __('View resume'),
                'search_items' => __('Search resume'),
                'not_found' =>  __('Nothing found'),
                'not_found_in_trash' => __('Nothing found in Trash'),
                'parent_item_colon' => ''
        );
 
        $args = array(
                'labels' => $labels,
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'menu_icon' => null,
                'rewrite' => true,
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => null,
                'supports' => array('title','editor','thumbnail'),
				'menu_icon' => 'dashicons-media-spreadsheet',
				
          );
 
        register_post_type( 'resume' , $args );

}

add_action('init', 'resume_posttype_register');





/**
 * Adds a box to the main column on the Post and Page edit screens.
 */
function meta_boxes_resume()
	{
		$screens = array( 'resume' );
		foreach ( $screens as $screen )
			{
				add_meta_box('resume_metabox',__( 'Resume Options','resume' ),'meta_boxes_resume_input', $screen);
			}
	}
add_action( 'add_meta_boxes', 'meta_boxes_resume' );


function meta_boxes_resume_input( $post ) {
	
	global $post;
	wp_nonce_field( 'meta_boxes_resume_input', 'meta_boxes_resume_input_nonce' );
	
	
	
	$resume_templates_tagline = get_post_meta( $post->ID, 'resume_templates_tagline', true );	
	
	$resume_templates_section_title = get_post_meta( $post->ID, 'resume_templates_section_title', true );
	$resume_templates_section_details = get_post_meta( $post->ID, 'resume_templates_section_details', true );
	$resume_templates_section_hide = get_post_meta( $post->ID, 'resume_templates_section_hide', true );
	$resume_templates_section_for = get_post_meta( $post->ID, 'resume_templates_section_for', true );
 

	$resume_templates_skill_name = get_post_meta( $post->ID, 'resume_templates_skill_name', true );
	$resume_templates_skill_value = get_post_meta( $post->ID, 'resume_templates_skill_value', true );
		
	$resume_templates_social_name = get_post_meta( $post->ID, 'resume_templates_social_name', true );
	$resume_templates_social_value = get_post_meta( $post->ID, 'resume_templates_social_value', true );
	
	$resume_templates_language_name = get_post_meta( $post->ID, 'resume_templates_language_name', true );
	$resume_templates_language_value = get_post_meta( $post->ID, 'resume_templates_language_value', true );
	
	$resume_templates_interest_name = get_post_meta( $post->ID, 'resume_templates_interest_name', true );
	$resume_templates_interest_value = get_post_meta( $post->ID, 'resume_templates_interest_value', true );
	
	$resume_templates_education_institution = get_post_meta( $post->ID, 'resume_templates_education_institution', true );	
	$resume_templates_education_year = get_post_meta( $post->ID, 'resume_templates_education_year', true );
	$resume_templates_education_position = get_post_meta( $post->ID, 'resume_templates_education_position', true );	
	$resume_templates_education_details = get_post_meta( $post->ID, 'resume_templates_education_details', true );		
		
	$resume_templates_experiences_institution = get_post_meta( $post->ID, 'resume_templates_experiences_institution', true );	
	$resume_templates_experiences_year = get_post_meta( $post->ID, 'resume_templates_experiences_year', true );
	$resume_templates_experiences_position = get_post_meta( $post->ID, 'resume_templates_experiences_position', true );	
	$resume_templates_experiences_details = get_post_meta( $post->ID, 'resume_templates_experiences_details', true );		
	
	$resume_templates_award_institution = get_post_meta( $post->ID, 'resume_templates_award_institution', true );	
	$resume_templates_award_year = get_post_meta( $post->ID, 'resume_templates_award_year', true );
	$resume_templates_award_position = get_post_meta( $post->ID, 'resume_templates_award_position', true );	
	$resume_templates_award_details = get_post_meta( $post->ID, 'resume_templates_award_details', true );
	
	$resume_templates_contact_info_email = get_post_meta( $post->ID, 'resume_templates_contact_info_email', true );	
	$resume_templates_contact_info_website = get_post_meta( $post->ID, 'resume_templates_contact_info_website', true );		
	$resume_templates_contact_info_mobile = get_post_meta( $post->ID, 'resume_templates_contact_info_mobile', true );		
	$resume_templates_contact_info_details = get_post_meta( $post->ID, 'resume_templates_contact_info_details', true );	
	
	
	
	
	
	
?>




    <div class="para-settings resume-templates-admin">

        <div class="option-box">
            <p class="option-title">Shortcode</p>
            <p class="option-info">Copy this shortcode and paste on page or post where you want to display resume, Use PHP code to your themes file to display resume.</p>
        <br /> 
        <textarea cols="50" rows="1" style="background:#bfefff" onClick="this.select();" >[resume_templates <?php echo ' id="'.$post->ID.'"';?> ]</textarea>
        <br />
        PHP Code:<br />
        <textarea cols="50" rows="1" style="background:#bfefff" onClick="this.select();" ><?php echo '<?php echo do_shortcode("[resume_templates id='; echo "'".$post->ID."' ]"; echo '"); ?>'; ?></textarea>  
        
        </div>
        
        
        <ul class="tab-nav"> 
            <li nav="1" class="nav1 active">Content</li>

            
        </ul> <!-- tab-nav end -->
        
		<ul class="box">
            
            <li style="display: block;" class="box1 tab-box active">
            
				<div class="option-box">
                    <p class="option-title">Tagline</p>
                    <p class="option-info">Your tagline in one sentence.</p>
                    <input type="text" placeholder="Full time WordPress Developer" name="resume_templates_tagline" value="<?php if(!empty($resume_templates_tagline)) echo $resume_templates_tagline; ?>" />
                    
                    
                </div>
            
            
				<div class="option-box">
                    <p class="option-title">Resume Sections</p>
                    <p class="option-info">Section name should be unique.</p>




<div class="admin-sections">
                    	<div class="add-new-section button">Add New Section</div>
                        
                        <table class="section-list" id="section-list">
                        
                        
                        <?php 
						
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
															'education'=>'Education details',
															'experiences'=>'Experiences details',
															//'personal_info'=>'Personal Info details',
															'contact_info'=>'Contact Info details',
															'award'=>'Award details',
															'skill'=>'Skill details',															
															'social'=>'Social details',
															'interest'=>'Interest details',
															//'reference'=>'Reference',
															'language'=>'Language details',																																													
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
						
						
						
						
						
						
						
						
						
						
						
							foreach($resume_templates_section_title as $key => $value)
								{
									echo '<tr class="section "><td class="section-dragHandle">*</td>';
									
									if($resume_templates_section_hide[$key])
										{
											$checked = 'checked';
										}
									else
										{
											$checked = '';
										}
									
									
									
									echo '<td class=""><div class="section-header">'.$value.'<span class="section-remove">X</span><label class="menu_hide" title="Hide this section on frontend"><input type="checkbox" name="resume_templates_section_hide['.$key.']" value="1" '.$checked.' />!</label></div>';
																	
									echo '<div class="section-info">';
									
									echo 'Section Title<br/>';
									echo '<input class="resume_templates_section_title"  type="text" name="resume_templates_section_title['.$key.']" value="'.$value.'" placeholder="section name." /><br />';
									
									echo 'Section Details<br/>';
									echo '<textarea class="resume_templates_section_details" name="resume_templates_section_details['.$key.']" >'.$resume_templates_section_details[$key].'</textarea>';
						
									echo '<br/>Section for<br/>';
																
									echo '<select resumeid="'.$post->ID.'" class="resume_templates_section_for" section="'.$key.'" name="resume_templates_section_for['.$key.']">';
									echo '<option value="" >Please choose</option>';	
									
									$resume_templates_section_for[$key] == 'education' ? $selected = 'selected' : $selected = '';
									echo '<option value="education" '.$selected.' >Education</option>';									
									
									$resume_templates_section_for[$key] == 'experiences' ? $selected = 'selected' : $selected = '';
									echo '<option value="experiences" '.$selected.' >Experiences</option>';
									
									//$resume_templates_section_for[$key] == 'personal_info' ? $selected = 'selected' : $selected = '';
									//echo '<option value="personal_info" '.$selected.' >Personal Info</option>';	
																	
									$resume_templates_section_for[$key] == 'contact_info' ? $selected = 'selected' : $selected = '';
									echo '<option value="contact_info" '.$selected.' >Contact Info</option>';										
											
									$resume_templates_section_for[$key] == 'award' ? $selected = 'selected' : $selected = '';
									echo '<option value="award" '.$selected.' >Award</option>';
									
									$resume_templates_section_for[$key] == 'skill' ? $selected = 'selected' : $selected = '';
									echo '<option value="skill" '.$selected.' >Skill</option>';

									
									$resume_templates_section_for[$key] == 'social' ? $selected = 'selected' : $selected = '';
									echo '<option value="social" '.$selected.' >Social</option>';	
									
									$resume_templates_section_for[$key] == 'interest' ? $selected = 'selected' : $selected = '';
									echo '<option value="interest" '.$selected.' >Interest</option>';										
									
									//$resume_templates_section_for[$key] == 'reference' ? $selected = 'selected' : $selected = '';
									//echo '<option value="reference" '.$selected.' >Reference</option>';										
									
									
									$resume_templates_section_for[$key] == 'language' ? $selected = 'selected' : $selected = '';
									echo '<option value="language" '.$selected.' >Language</option>';										

																																
									echo '</select>';
									echo '<span class="'.$key.' section-content-loading">Loading</span>';
									echo '</div>';	
									
									echo '<div class="'.$key.' section-content">';


									$resumeid = $post->ID; 
									$section_current = 'skill'; 
									$section_for = $resume_templates_section_for[$key];
									
									echo resume_templates_section_content($resumeid, $section_current, $section_for);
									echo '</div>';									
									echo '</td>';										
																										
									echo '</tr>';									
									
								}
						
						?>

                            
                        </table>
<script>

	jQuery(document).ready(function() {

		// Initialise the table
		jQuery("#section-list").tableDnD({
			
			dragHandle: "section-dragHandle",
			});
			
	

	});

</script>
                        
                    </div>






                </div>
                

                
                
				
                
				
                
				


				


				


				
                

				                
                
                
                
                            
            </li>
            
        
        </ul>
        


    </div> <!-- para-settings -->



<?php


	
}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function meta_boxes_resume_save( $post_id ) {

  /*
   * We need to verify this came from the our screen and with proper authorization,
   * because save_post can be triggered at other times.
   */

  // Check if our nonce is set.
  if ( ! isset( $_POST['meta_boxes_resume_input_nonce'] ) )
    return $post_id;

  $nonce = $_POST['meta_boxes_resume_input_nonce'];

  // Verify that the nonce is valid.
  if ( ! wp_verify_nonce( $nonce, 'meta_boxes_resume_input' ) )
      return $post_id;

  // If this is an autosave, our form has not been submitted, so we don't want to do anything.
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return $post_id;



  /* OK, its safe for us to save the data now. */

  // Sanitize user input.
  
  
	$resume_templates_tagline = sanitize_text_field( $_POST['resume_templates_tagline'] ); 
	 
	$resume_templates_section_title = stripslashes_deep( $_POST['resume_templates_section_title'] );
	$resume_templates_section_details = stripslashes_deep( $_POST['resume_templates_section_details'] );
	$resume_templates_section_hide = stripslashes_deep( $_POST['resume_templates_section_hide'] );
	$resume_templates_section_for = stripslashes_deep( $_POST['resume_templates_section_for'] );
	
	$resume_templates_skill_name = stripslashes_deep( $_POST['resume_templates_skill_name'] );	
	$resume_templates_skill_value = stripslashes_deep( $_POST['resume_templates_skill_value'] );
			
	$resume_templates_social_name = stripslashes_deep( $_POST['resume_templates_social_name'] );	
	$resume_templates_social_value = stripslashes_deep( $_POST['resume_templates_social_value'] );
		
	$resume_templates_language_name = stripslashes_deep( $_POST['resume_templates_language_name'] );	
	$resume_templates_language_value = stripslashes_deep( $_POST['resume_templates_language_value'] );
	
	$resume_templates_interest_name = stripslashes_deep( $_POST['resume_templates_interest_name'] );	
	$resume_templates_interest_value = stripslashes_deep( $_POST['resume_templates_interest_value'] );
	
	$resume_templates_education_institution = stripslashes_deep( $_POST['resume_templates_education_institution'] );	
	$resume_templates_education_year = stripslashes_deep( $_POST['resume_templates_education_year'] );
	$resume_templates_education_position = stripslashes_deep( $_POST['resume_templates_education_position'] );	
	$resume_templates_education_details = stripslashes_deep( $_POST['resume_templates_education_details'] );	
	
	$resume_templates_experiences_institution = stripslashes_deep( $_POST['resume_templates_experiences_institution'] );	
	$resume_templates_experiences_year = stripslashes_deep( $_POST['resume_templates_experiences_year'] );	
	$resume_templates_experiences_position = stripslashes_deep( $_POST['resume_templates_experiences_position'] );		
	$resume_templates_experiences_details = stripslashes_deep( $_POST['resume_templates_experiences_details'] );		
	
	$resume_templates_award_institution = stripslashes_deep( $_POST['resume_templates_award_institution'] );	
	$resume_templates_award_year = stripslashes_deep( $_POST['resume_templates_award_year'] );
	$resume_templates_award_position = stripslashes_deep( $_POST['resume_templates_award_position'] );		
	$resume_templates_award_details = stripslashes_deep( $_POST['resume_templates_award_details'] );
	
	$resume_templates_contact_info_email = stripslashes_deep( $_POST['resume_templates_contact_info_email'] );	
	$resume_templates_contact_info_website = stripslashes_deep( $_POST['resume_templates_contact_info_website'] );	
	$resume_templates_contact_info_mobile = stripslashes_deep( $_POST['resume_templates_contact_info_mobile'] );	
	$resume_templates_contact_info_details = stripslashes_deep( $_POST['resume_templates_contact_info_details'] );	
	


	

	
			


  // Update the meta field in the database.
  
	update_post_meta( $post_id, 'resume_templates_tagline', $resume_templates_tagline );
	
	update_post_meta( $post_id, 'resume_templates_section_title', $resume_templates_section_title );	
	update_post_meta( $post_id, 'resume_templates_section_details', $resume_templates_section_details );
	update_post_meta( $post_id, 'resume_templates_section_hide', $resume_templates_section_hide );
	update_post_meta( $post_id, 'resume_templates_section_for', $resume_templates_section_for );
	
	update_post_meta( $post_id, 'resume_templates_skill_name', $resume_templates_skill_name );	
	update_post_meta( $post_id, 'resume_templates_skill_value', $resume_templates_skill_value );	

	update_post_meta( $post_id, 'resume_templates_social_name', $resume_templates_social_name );	
	update_post_meta( $post_id, 'resume_templates_social_value', $resume_templates_social_value );
	
	update_post_meta( $post_id, 'resume_templates_language_name', $resume_templates_language_name );	
	update_post_meta( $post_id, 'resume_templates_language_value', $resume_templates_language_value );
	
	update_post_meta( $post_id, 'resume_templates_interest_name', $resume_templates_interest_name );	
	update_post_meta( $post_id, 'resume_templates_interest_value', $resume_templates_interest_value );
	
	update_post_meta( $post_id, 'resume_templates_education_institution', $resume_templates_education_institution );
	update_post_meta( $post_id, 'resume_templates_education_year', $resume_templates_education_year );
	update_post_meta( $post_id, 'resume_templates_education_position', $resume_templates_education_position );	
	update_post_meta( $post_id, 'resume_templates_education_details', $resume_templates_education_details );	
	
	update_post_meta( $post_id, 'resume_templates_experiences_institution', $resume_templates_experiences_institution );	
	update_post_meta( $post_id, 'resume_templates_experiences_year', $resume_templates_experiences_year );
	update_post_meta( $post_id, 'resume_templates_experiences_position', $resume_templates_experiences_position );		
	update_post_meta( $post_id, 'resume_templates_experiences_details', $resume_templates_experiences_details );		
	
	update_post_meta( $post_id, 'resume_templates_award_institution', $resume_templates_award_institution );	
	update_post_meta( $post_id, 'resume_templates_award_year', $resume_templates_award_year );
	update_post_meta( $post_id, 'resume_templates_award_position', $resume_templates_award_position );		
	update_post_meta( $post_id, 'resume_templates_award_details', $resume_templates_award_details );
	
	update_post_meta( $post_id, 'resume_templates_contact_info_email', $resume_templates_contact_info_email );	
	update_post_meta( $post_id, 'resume_templates_contact_info_website', $resume_templates_contact_info_website );		
	update_post_meta( $post_id, 'resume_templates_contact_info_mobile', $resume_templates_contact_info_mobile );		
	update_post_meta( $post_id, 'resume_templates_contact_info_details', $resume_templates_contact_info_details );	
	
	
	

}
add_action( 'save_post', 'meta_boxes_resume_save' );





